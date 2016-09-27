<?php

namespace App\Http\Controllers;

use App\Category;
use App\Device;
use App\Region;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::All();
        $categories = Category::All();

        return view('home', ['regions' => $regions, 'categories' => $categories]);
    }

    /**
     *  Поиск оборудования
     *
     */
    public function searchDevice(Request $request)
    {
        $regions = Region::All();
        $categories = Category::All();

        $region = $request->input('region');
        $category = $request->input('category');

        $devices = Device::where('region_name', $region)->where('category_name', $category)->get();

        return view('home', ['regions' => $regions, 'categories' => $categories, 'devices' => $devices]);
    }
}
