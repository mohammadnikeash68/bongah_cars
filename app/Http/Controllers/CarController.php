<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = DB::table('cars')
        ->select('city_plak',DB::raw('COUNT(city_plak) as count'))
        ->groupBy('city_plak')
        ->orderBy('count','desc')
        ->get();
        $maxCount = $count->where('count',$count->first()->count);
        $minCount = $count->where('count',$count->last()->count);
        $res = Car::all();
        return view('carList',compact('res','maxCount','minCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $res = User::all();
        return view('addCars',compact('res'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_car' => 'required',
            'color_car' => 'required',
            'city_plak' => 'required',
            'name_malek' => 'required',
        ]);
        $car = Car::create([
            'user_id'=>$request->name_malek,
            'name' => $request->name_car,
            'color' => $request->color_car,
            'city_plak' => $request->city_plak
        ]);
        return redirect()->route('cars.create')->with('status', 'ثبت خودرو با موفقیت انجام شد');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $res = User::all();
        return view('editCars',compact('car','res'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'name_car' => 'required',
            'color_car' => 'required',
            'city_plak' => 'required',
            'name_malek' => 'required',
        ]);
        $car_res = $car->update([
            'user_id' => $request->name_malek,
            'name' => $request->name_car,
            'color' => $request->color_car,
            'city_plak' => $request->city_plak,
        ]);
        return redirect()->route('cars.index',$car_res)->with('status','ویرایش با موفقیت انجام شد');
    }
    public function show(Car $car){

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        
        $car->delete();
        return redirect()->route('cars.index')->with('status','حذف با موفقیت انجام شد');
    }
    public function filter(Request $request){

        $filter_users = User::where('name','like','%'.$request->filter.'%')->get();
        return view('carList',compact('filter_users'));
    }
}
