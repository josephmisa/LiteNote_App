<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Office;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create($id)
    {

        return view('createoffice')->with('id', $id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $file = $request->file('officepics');
        $office = new Office();
        $office->name =$request->officename;
        $office->floor = $request->floor;
        $office->building_id = $id;

        $office->save();

         \Session::flash('building_flash', 'Created successfully!');

        return redirect()->route('building', $id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {}
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit($id, $office_id) {

        
        $office = Office::find($office_id);
        return view('editoffice', compact('office', 'id'));

   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $office_id)
    {
        
         $office = Office::find($office_id);
        $office->name = $request->officename;
        $office->floor = $request->floor;

         $office->update();

      \Session::flash('building_flash', 'Updated successfully!');

         return redirect()->route('building', $id);
        
     }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($office_id)
    {
        $office = Office::find($office_id);
        $office->delete();

        \Session::flash('building_flash_delete', 'Deleted successfully!');

         return redirect()->back();

    }
}
