<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Category;
use App\Device;
use App\Region;
use App\Http\Requests;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $region = $request->input('region');
        $category = $request->input('category');
        $device_name = $request->input('device_name');
        $region_name = $request->input('region_name');
        $category_name = $request->input('category_name');
        $serial_number = $request->input('serial_number');
        $device_model = $request->input('device_model');
        $time = Carbon::now();

        if(isset($region)){
            Region::insert(
                array(
                    'region_name' => $region,
                    'created_at'  => $time,
                    'updated_at'  => $time
                )
            );
        }
        elseif (isset($category)){
            Category::insert(
                array(
                    'category_name' => $category,
                    'created_at'    => $time,
                    'updated_at'    => $time
                )
            );
        }
        else{
            Device::insert(
                array(
                    'device_name'   => $device_name,
                    'region_name'   => $region_name,
                    'category_name' => $category_name,
                    'serial_number' => $serial_number,
                    'device_model'  => $device_model,
                    'created'       => $time,
                    'created_at'    => $time,
                    'updated_at'    => $time
                )
            );
        }


        return view('admin');
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
