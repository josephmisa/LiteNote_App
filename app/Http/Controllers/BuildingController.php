<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;
use App\Office;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() /*search and display building */

    {
     $search = \Request::get('search');

     $buildings = Building::where('name','like','%'.$search.'%')->orderBy('id', 'asc')->paginate(20);
    //dd($buildings);
     
     return view('buildings')->with('buildings', $buildings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createbuilding');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function saveBuilding(Request $request)
    {

       
        $file = $request->file('buildingpics');
        $building = new Building();


        $building->name = $request->buildingname;


        $building->picture = $building->name.'.'.$file->getClientOriginalExtension();

        $file->move('assets',$building->name.'.'.$file->getClientOriginalExtension());

        $building->save();

       \Session::flash('building_flash', 'Created successfully!');

        return redirect('/');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)   /* code to display offices also search also where floor are ordered */
    {

        $building = Building::find($id);

        $search = \Request::get('search');

        $offices = Office::where('building_id', $id)
    ->where(function($q) use($search) {
    $q->where('name', 'like', '%' . $search . '%')
    ->orWhere('floor', 'like', '%' . $search . '%');
    })

    ->orderBy('floor')
    ->get();

        return view('building')->withBuilding($building)->withOffices($offices);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $building = Building::find($id);
        return view('editbuilding')->withBuilding($building)->with('id',$id);
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

      $building = Building::find($id);
        $building->name = $request->buildingname;

   $file = $request->file('buildingpics');
   if($file != null) {
   $building->picture = $building->name.'.'.$file->getClientOriginalExtension();
   
     // dd($file);
   $file->move('assets',$building->name.'.'.$file->getClientOriginalExtension());
   }
        $building->update();

    \Session::flash('building_flash', 'Updated successfully!');
        return redirect('/');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $building = Building::find($id);
        $building->delete();

        \Session::flash('building_flash_delete', 'Deleted successfully!');
        return redirect()->route('index');
    }
}
