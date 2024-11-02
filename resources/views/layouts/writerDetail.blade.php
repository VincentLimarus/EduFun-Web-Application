@extends('layouts.master')

@section('title', 'Writer Detail')

@section('content')
    <div class="container-fluid d-flex" style="background-color: #eff4ee">
        <img src="{{ asset('Assets/' . $writer->photo_url) }}" alt="" width="8%" height="50%" class="shadow-md rounded-circle mt-3" style="margin-left: 6rem">
        <div>
            <h2 class="fw-bold text-center" style="margin-left: 4rem; margin-top: 2rem;">{{ $writer->name }}</h2>
            <h4 class="text-center" style="margin-left: 3rem; margin-top: 1.5rem;">{{ $writer->job }}</h4>
        </div>
    </div>

    <div class="container-fluid pt-4 ps-5" style="background-color: #eff4ee">
        <div class="row mt-3">

            <div class=" pb-5">
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

            {{-- @forelse ($articles as $article) --}}
                {{-- <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                <a href="{{ route('article', $article->id) }}" class="btn btn-primary">Read More</a> --}}
            {{-- @endforelse --}}
        </div>
    </div>
@endsection
