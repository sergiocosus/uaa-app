<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ScheduleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return \Auth::user()->schedules;
    }

}
