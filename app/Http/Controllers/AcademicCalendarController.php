<?php

namespace App\Http\Controllers;

use App\AcademicCalendar;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AcademicCalendarController extends Controller
{

    public function index()
    {
        return AcademicCalendar::all();
    }
}
