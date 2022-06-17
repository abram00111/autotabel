<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Organization;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TabelController extends Controller
{
    public function index($id){
        $shtat = State::where('division_id', $id)->orderby('surname')->get();
        $division = Division::find($id);
        $organization = Organization::find($division['organization_id']);
        return view('auth_user.tabel',[
            'shtats' => $shtat,
            'division' => $division,
            'organization' => $organization,
        ]);
    }

    public function allTabel(){
        $organization = Organization::where('user_id', Auth::id())->get();
        return view('auth_user.tabels',[
            'organizations' => $organization
        ]);
    }

    public function create_tabel(){
        return('asd');
    }
}
