<?php

namespace App\Http\Controllers;

use App\Services\CVService;
use Illuminate\Http\Request;

class CVController extends Controller
{
    protected $CVService;

    public function __construct(
        CVService $CVService
    ){
        $this->CVService = $CVService;

    }

    public function index(Request $request){

        $data = $this->CVService->getData();

        return view('index', $data);
    }

    public function portfolio(Request $request){

        $data = [];

        return view('portfolio', $data);
    }
}
