<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("landing");
    }

    public function aadhaar()
    {
        return view("aadhaar");
    }
    
    public function pension_auto()
    {
        return view("pension_auto");
    }
    /*    public function aadhar()
    {
        return view("aadhar");
    }
        public function aadhar()
    {
        return view("aadhar");
    }
        public function aadhar()
    {
        return view("aadhar");
    }
        public function aadhar()
    {
        return view("aadhar");
    }
        public function aadhar()
    {
        return view("aadhar");
    }

    */
}
