<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Organization;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShtatController extends Controller
{
    public function index($id){
        $shtat = State::where('division_id', $id)->orderby('surname')->get();
        $division = Division::find($id);
        $organization = Organization::find($division['organization_id']);
        return view('auth_user.shtat',[
            'shtats' => $shtat,
            'division' => $division,
            'organization' => $organization,
        ]);
    }
    public function allShtats(){
        $organization = Organization::where('user_id', Auth::id())->get();

        return view('auth_user.shtats',[
            'organizations'=>$organization
        ]);
    }
}
