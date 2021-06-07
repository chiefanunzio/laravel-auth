@extends('layouts.main-layout')
@section('content')
    
    <form action="{{ route('update', $car -> id) }}" method="POST">            
        @csrf
        @method('POST')       
        <label for="name">name</label>
        <input type="text" id="name" name="name" value="{{$car -> name}}" required>

        <label for="model">model</label>
        <input type="text" id="model" name="model" value="{{$car -> model}}" required>

        <label for="kw">kw</label>
        <input type="number" id="kw" name="kw" value="{{$car -> kw}}" required>
   
        <label for="brand_id">brand</label>      
        <select type="text" id="brand_id" name="brand_id" required>
            
            @foreach ($brands as $brand)
                <option value="{{$brand -> id}}" 
                    
                    @if ($car -> brand -> id == $brand -> id)
                        selected
                    @endif
                    
                >{{$brand -> name}}</option>   
            @endforeach
        </select>     
                    
                    

        <label for="pilots_id[]">pilot</label>         
        <select type="text" id="pilots_id[]" name="pilots_id[]" required multiple>      
               
            @foreach ($pilots as $pilot)
                <option value="{{$pilot -> id}}"
                    
                    @foreach ($car -> pilots as $carPilot)         
                        @if ($carPilot -> id == $pilot -> id)
                            selected   
                        @endif
                    @endforeach      
                       
                >{{$pilot -> name}} || {{$pilot -> lastname}}
        
            </option>      
            @endforeach   
        </select>
      
        <input type="submit" name="crea" value="MODIFICA UN' AUTO">      
    </form>
@endsection                