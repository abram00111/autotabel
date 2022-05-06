<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        $organization = Organization::all();

        return view('test',[
            'orgs' => $organization
        ]);
    }
}
