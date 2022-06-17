<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rezgim;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return State::where('organization_id', '=', $_GET['org_id'])->where('division_id', '=', $_GET['div_id'])->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request['hours_per_week'] == 0){
            $rezgim = 'Индивидуальный';
            $hours_per_week = $request['mo']+$request['to']+$request['we']+$request['th']+$request['fr']+$request['sa']+$request['su'];
        }else{
            $table = Rezgim::where('value', $request['hours_per_week'])->first();
            $rezgim = $table['name'];
            $hours_per_week = $table['value'];
        }
        $created = State::create([
            'organization_id'=>$request['organization_id'],
            'division_id'=>$request['division_id'],
            'position'=>$request['position'],
            'stake'=>$request['stake'],
            'timetable'=>$request['timetable'],
            'hours_per_week'=>$hours_per_week,
            'rezgim'=>$rezgim,
            'surname'=>$request['surname'],
            'lastname'=>$request['lastname'],
            'patronymic'=>$request['patronymic'],
            'mo'=>$request['mo'],
            'to'=>$request['to'],
            'we'=>$request['we'],
            'th'=>$request['th'],
            'fr'=>$request['fr'],
            'sa'=>$request['sa'],
            'su'=>$request['su'],
            'dinner'=>$request['dinner'],
            'user_id'=>$request['user_id'],
        ]);
        return $created;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
