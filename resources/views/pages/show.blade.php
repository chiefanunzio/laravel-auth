@extends('layouts.main-layout')
@section('content')
      
    <div class="container">
            
            
        <ul>   
            <li>      
                PILOT NAME => {{$pilot -> name}} 
                <ul>   
                    <li>
                        PILOT LASTNAME => {{$pilot -> lastname}}  
                    </li>  
                    <li>
                        PILOT NATIONALITY=> {{$pilot -> nationality}}     
                    </li> 
                </ul>
            </li>      
        </ul>    
        
        
        <ol>
            @foreach ($pilot -> cars as $car)      
            <li>
                car name => {{$car -> name}} <br>           
                car model => {{$car -> model}} <br>   
                car brand => {{$car -> brand -> name}}
            </li>      
            @endforeach
        </ol>   
        
        
        
    
    </div>   
      
        
             
   
      
@endsection   



      