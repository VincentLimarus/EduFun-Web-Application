@extends('layouts.master')

@section('title', 'Writers')

@section('content')
    <div class="container-fluid" style="background-color: #eff4ee">
        <h2 class="pt-5 ps-5 fw-bold">Our Writers:</h2>

        <div class="row" style="margin-top:6rem">
            @foreach ($writers as $writer)
                <div class="col-md-4">
                    <a href="{{route('writerDetail', ['id'=>$writer->id])}}">
                        <img src="{{asset('Assets/'. $writer->photo_url)}}" class="rounded-circle shadow-sm" alt="..." width="50%" height="50%" style="margin-left: 9.5rem"> 
                    </a>
                    <h1 class="text-center fs-3 fw-bold mt-3">{{$writer->name}}</h1>
                    <p class="text-center fs-4 mt-3" style="margin-bottom: 8rem">{{$writer->job}}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection