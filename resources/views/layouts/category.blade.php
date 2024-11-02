@extends('layouts.master')

@section('title', "Data Science")

@section('content')

<div class="container-fluid pt-5 ps-4"  style="background-color: #eff4ee; ">
    <h1 class="fw-bold fs-1">{{$category}}</h1>

    <div class="mt-5 pb-5">
        @foreach($articles as $article) 
        
        <div class="row align-items-center p-3 ms-5" style="background-color: #eff4ee; ">
            <div class="col-12 col-md-4 pt-4">
                <img src="{{ asset('Assets/' . $article->photo_url) }}" class="img-fluid" alt="{{ $article->title }}" style="border-radius: 30px;">
            </div>
            <div class="col-12 col-md-8 pb-5">      
                <h3 class="fw-bold mt-3">{{$article->title}}</h3>
                <h6>{{$article->created_at->format('d F Y')}} | by: {{$article->writer->name}}</h6>
                <h4>{{$article->body}}</h4>
                <div class="d-grid col-3 ">
                    <a href="{{route('article', ['id' => $article->id])}}">
                        <button class="btn btn-dark btn-lg rounded-pill mt-4" type="button">read more...</button>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection