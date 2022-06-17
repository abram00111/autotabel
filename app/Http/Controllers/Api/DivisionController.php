<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DivisionRequest;
use App\Http\Resources\DivisionResource;
use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DivisionResource::collection(Division::where('organization_id', '=', $_GET['org_id'])->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return DivisionResource
     */
    public function store(DivisionRequest $request)
    {
        $created = Division::create([
            'organization_id'=>$request['organization_id'],
            'name'=>$request['name'],
            'timekeeper_id'=>$request['timekeeper_id'],
            'user_id'=>$request['user_id'],
        ]);
        return new DivisionResource($created);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return DivisionResource
     */
    public function show($id)
    {
        return new DivisionResource(Division::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param DivisionRequest $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(DivisionRequest $request, $id)
    {
        $division = Division::find($id);
        $division->name = $request['name'];
        $division->save();
        return response()->json(['mes' => 'Подразделение изменено'], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $division = Division::find($id);
        if($division == ''){
            return response()->json(['mes' => 'Такое подразделение не найдено'], 404);
        }else{
            $division->delete();
            return response()->json(['mes' => 'Подразделение удалено'], 201);
        }
    }
}
