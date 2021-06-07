
@extends('layouts.main-layout')
@section('content')   
<body class="container">
   
        <div>
            <ul>
                @foreach ($cars as $car)
                    <li> 
                        CAR NAME =    
                        <a href="{{ route('carShow', $car -> id) }}">     
                        {{$car -> name}}    
                                 
                        </a> <br>   
                        
                        CAR BRAND => {{$car -> brand -> name}}   
                        <ol>   
                            PILOT CAR :  
                            @foreach ($car -> pilots as $pilot)
                            <a href="{{ route('show', $pilot -> id) }}">
                                <li>{{$pilot -> name}}</li>   
                            </a>   
                            @endforeach
                        </ol>   
                    </li>   
                @endforeach    
            </ul>             
        </div>           
    </body>
    @endsection   
</html>