<?php

namespace App\Http\Controllers;

use App\ExamSchedule;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExamScheduleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return \Auth::user()->examSchedules();
    }

}
