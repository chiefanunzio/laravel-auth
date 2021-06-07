@extends('layouts.main-layout')
@section('content')
    
    <form action="{{route('stock')}}" method="POST">
        @csrf
        @method('POST')
        <label for="name">name</label>
        <input type="text" id="name" name="name" required>

        <label for="model">model</label>
        <input type="text" id="model" name="model" required>

        <label for="kw">kw</label>
        <input type="number" id="kw" name="kw" required>
   
        <label for="brand_id">brand</label>      
        <select type="text" id="brand_id" name="brand_id" required>
            <option selected disabled >Brand</option>
            @foreach ($brands as $brand)
                <option value="{{$brand -> id}}">{{$brand -> name}}</option>
                @endforeach
        </select>     

        <label for="pilots_id[]">pilot</label>         
        <select type="text" id="pilots_id[]" name="pilots_id[]" required multiple>      
               
            @foreach ($pilots as $pilot)
            <option value="{{$pilot -> id}}">{{$pilot -> name}} || {{$pilot -> lastname}}</option>      
            @endforeach
        </select>
      
        <input type="submit" name="crea" value="CREA LA TUA AUTO">   
    </form>
@endsection                  