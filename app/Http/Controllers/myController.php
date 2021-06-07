<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;      
use App\Pilot;  
use App\Brand;     
class myController extends Controller
{

     

       
    public function home()
    {

        $cars = Car::all();
              

        return view('pages.home', compact('cars'));   
    }         

    public function show($id)
    {   
           
        $pilot = Pilot::findOrFail($id);      

        return view('pages.show', compact('pilot'));         
    }
    
    public function carShow($id)
    {   
        
        $car = Car::findOrFail($id);      

        return view('pages.carShow', compact('car'));            
    }    
}
   