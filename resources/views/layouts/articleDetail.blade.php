@extends('layouts.master')

@section('title', "Detail Article")

@section('content')
<div class="container-fluid pt-5 ps-4"  style="background-color: #eff4ee; ">
    <h1 class="fw-bold fs-1">{{$article->category}}</h1>

    <div class="row">
        <div class="col-12">
            <img src="{{ asset('Assets/' . $article->photo_url) }}" class="img-fluid" alt="{{ $article->title }}" style="border-radius: 30px; width:100%; height:60%">
            <h6 class="mt-3 ms-4">{{$article->created_at->format('d F Y')}} | by: {{$article->writer->name}}</h6>
            <h4 class="mb mt-3 ms-4">{{$article->body}}</h4>
            <h4 class="mb-5 mt-3 ms-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptate commodi assumenda, hic alias officia tempore ex aperiam facere nihil deserunt voluptates excepturi velit ab sapiente dolores, officiis beatae. Ipsa, vitae? Tenetur reprehenderit minima repellat. Maiores, natus repellendus praesentium harum eaque minima maxime facilis recusandae quaerat deserunt! Accusantium id quidem ab nisi distinctio est modi animi. Explicabo, obcaecati sed dicta quaerat totam voluptatibus. Eligendi maiores fuga magni, commodi doloribus ut.</h4>
        </div>
    </div>
</div>


@endsection