<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;      
use App\Pilot;  
use App\Brand;      
class HomeController extends Controller
{   

    public function __construct()
    {
        $this->middleware('auth');   
    }   
   
    public function create()
    {

        $brands = Brand::all();
        $pilots = Pilot::all();
        return view('pages.create', compact('brands','pilots'));   
    }     
    
    public function stock(Request $request)
    {

        $validated = $request -> validate([   

            'name' => 'required|string|min:3'  ,     
            'model' => 'required|string|min:2' ,   
            'kw' => 'required|integer|max:2000' 
        ]);   

        $brand = Brand::findOrFail($request -> get('brand_id'));
        // $pilot = Pilot::findOrFail($request -> get('pilot_id'));

        $car = Car::make($validated);      
        $car ->brand() -> associate($brand);
        $car -> save();   

        $car -> pilots() -> attach($request -> get('pilots_id'));
        $car -> save();      
        return redirect() -> route('home');         
              
    }
}
