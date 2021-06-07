@extends('layouts.main-layout')
@section('content')
    <ul>   
        
        <li>      
            CAR NAME => {{$car -> name}} <br>
            
            CAR MODEL => {{$car -> model}}  <br>
            
            CAR KW=> {{$car -> kw}}   <br>   
            
            CAR BRAND => {{$car -> brand -> name}}   
        </li>      
    </ul>
    
    @if (count($car -> pilots) > 0)
    <ol>
        @foreach ($car -> pilots as $pilot)
        <li>
            PILOT NAME =>{{$pilot -> name}} <br>   
            PILOT LASTNAME =>{{$pilot -> lastname}} <br>   
            PILOT NATIONALITY =>{{$pilot -> nationality}}      
            
        </li>
        @endforeach
    </ol>
    @else
        <h2>NON CI SONO PILOTI ASSEGNATI A QUESTA MACCHINA</h2>
    @endif
@endsection