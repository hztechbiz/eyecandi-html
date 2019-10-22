<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customClass\data_api;

class MintonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // return view($id);
    }

    public function brands()
    {
        return view('brands');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function frames()
    {
        //
		$brands = data_api::get_brands();
        $brands = $brands['Brands'];
        $ages = data_api::get_ages();
        $ages = $ages['AgeGroups'];
        $colors = data_api::get_colors();
        $colors = $colors['Colors'];
        $materials = data_api::get_materials();
        $materials = $materials['Materials'];
        $genders  = data_api::get_genders();
        $genders  = $genders['GenderGroups'];
		
        return view('frames',compact('brands','ages','colors','materials','genders'));
    }

    
    public function stores(){
        $brands = data_api::get_brands();
        $brands = $brands['Brands'];
        $ages = data_api::get_ages();
        $ages = $ages['AgeGroups'];
        $colors = data_api::get_colors();
        $colors = $colors['Colors'];
        $materials = data_api::get_materials();
        $materials = $materials['Materials'];
        $genders  = data_api::get_genders();
        $genders  = $genders['GenderGroups'];
        return view('stores',compact('brands','ages','colors','materials','genders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
