<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mall;

class SiteController extends Controller
{

    public function malls_map()
    {
        return view('site.malls.map');
    }

    public function malls_list()
    {
        $malls = Mall::get();
        return view('site.malls.list', compact('malls'));
    }

    public function mall_details($id)
    {
        $mall = Mall::find($id);
        return view('site.malls.details', compact('mall'));
    }

}
