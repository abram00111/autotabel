<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrganizationRequest;
use App\Http\Resources\OrganizationResource;
use App\Models\Organization;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return OrganizationResource::collection(Organization::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return OrganizationResource
     */
    public function store(OrganizationRequest $request)
    {
//        $created = Organization::create($request->validated());

        $created = Organization::create([
            'long_name'=>$request['long_name'],
            'short_name'=>$request['short_name'],
            'director_fio'=>$request['director_fio'],
            'address'=>$request['address'],
            'user_id'=>$request['user_id'],
        ]);
        return new OrganizationResource($created);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return OrganizationResource
     */
    public function show($id)
    {
        return new OrganizationResource(Organization::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param OrganizationRequest $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrganizationRequest $request, $id)
    {
        $organization = Organization::find($id);
        $organization->long_name = $request['long_name'];
        $organization->short_name = $request['short_name'];
        $organization->director_fio = $request['director_fio'];
        $organization->address = $request['address'];
        $organization->user_id = $request['user_id'];
        $organization->save();
        return response()->json(['mes' => 'Организация изменена'], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $organization = Organization::find($id);
        if($organization == ''){
            return response()->json(['mes' => 'Такой организации не найдено'], 404);
        }else{
            $organization->delete();
            return response()->json(['mes' => 'Организация удалена'], 201);
        }
    }
}
