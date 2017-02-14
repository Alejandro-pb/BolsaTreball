<?php

namespace TSFI\Http\Controllers;

use Illuminate\Http\Request;

class MailsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('adminlte::mails');
    }

}
