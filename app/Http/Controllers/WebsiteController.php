<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    function indexpage()
   {
     return view('Website.index');
   }
    function Latestpage()
   {
     return view('Website.Latest-job');
   }
}
