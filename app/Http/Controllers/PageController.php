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
    public function pension_manual()
    {
        return view("pension_manual");
    }
    public function payment_folder()
    {
        return view("payment_folder");
    }
    public function reports()
    {
        return view("reports");
    }
    public function passbook()
    {
        return view("passbook");
    }
    public function allotment()
    {
        return view("allotment");
    }
    public function uc()
    {
        return view("uc");
    }
    public function sanction()
    {
        return view("sanction");
    }
    public function sanct_allot()
    {
        return view("sanct_allot");
    }
}
