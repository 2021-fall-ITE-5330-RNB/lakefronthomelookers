<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Tips;
use App\Models\Tips_steps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TipsController extends Controller
{

    function index(Request $request)
    {

        $req = $request->all();
        $tips = Tips_steps::all();
        // echo '<pre>';print_r($tips);exit;
        return view('admin/tips', ["tips" => $tips, "req" => $req]);
    }
}
