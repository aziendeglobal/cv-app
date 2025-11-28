<?php

namespace App\Services;

use App\Models\CategorySkill;
use App\Models\Certification;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Language;
use App\Models\PersonalDetail;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Models\Volunteering;

class CVService
{
    public function getData()
    {
        $personalDetails = PersonalDetail::first();
        $certificate = Certification::orderBy('year', 'desc')->get();
        $education = Education::orderBy('start_date', 'desc')->get();
        $employ = Experience::orderBy('start_date', 'desc')->get();
        $lang = Language::all(['name', 'level']);
        $volunt = Volunteering::orderBy('start_date', 'desc')->get();

        // Obtenemos las categorías que tengan skills activos, ordenadas por el campo 'order'
        $skillsCategories = CategorySkill::with(['skills' => function ($query) {
            $query->where('active', true);
        }])
            ->orderBy('order', 'asc')
            ->get();

        $data = [
            //'fullname' => $personalDetails->full_name,
            /*'intro' => [
                'fullname_2' => $personalDetails->full_name, // O un campo nuevo si lo prefieres
                'headline' => $personalDetails->headline,
                'photo' => $personalDetails->photo,
            ],*/
            /* 'personal' => [
                'email' => $personalDetails->email,
                'whatsapp' => $personalDetails->whatsapp,
                'location' => $personalDetails->location,
                'location_link' => $personalDetails->location_link,
                'birthday' => $personalDetails->birthday,
                'civil_status' => $personalDetails->civil_status,
                'linkedin' => $personalDetails->linkedin_url,
            ],*/
            //'skills' => Skill::pluck('name')->toArray(),
            ///'lang' => $lang->toArray(),
            //'profile' => $personalDetails->profile_summary,
            //'education' => $education->toArray(),
            //'employ' => $employ->toArray(),
            // 'cert' => $certificate->toArray(),
            'volunt' => $volunt->toArray(),
            'cert' => $certificate,
            'education' => $education,
            'employ' => $employ,
            'lang' => $lang,
            'personal' => $personalDetails,
            'volunt' => $volunt,
            'skills_categories' => $skillsCategories,
        ];

        return $data;
    }

    public function getPortfolio()
    {
        return Portfolio::with('images')->orderBy('title', 'ASC')->get(); //->toArray();
    }

    public function getFullname()
    {
        $personalDetails = PersonalDetail::first();
        return $personalDetails ? $personalDetails->full_name : '';
    }
}
