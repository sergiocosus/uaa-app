<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{

    public function index()
    {
        return Offer::all();
    }

}
