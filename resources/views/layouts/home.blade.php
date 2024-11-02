@extends('layouts.master')

@section('title', "Home Page")

@section('content')

<img src="{{asset("Assets/homePagePhoto.png")}}" class="img-fluid" width="100%" alt="...">

<div class="container-fluid" style="background-color: #eff4ee">

    <!-- Gambar Static 1 -->
    <div class="row align-items-center p-3 ms-5" style="background-color: #eff4ee; ">
        <div class="col-12 col-md-4 pt-4">
            <img src="{{ asset('Assets/firstBlog.png') }}" class="img-fluid" alt="..." style="border-radius: 30px;">
        </div>
        <div class="col-12 col-md-8 pb-5">
            <h3 class="fw-bold mt-3">Machine Learning</h3>
            <h6>14 May 2024 | by: Bia</h6>
            <h4>Di tengah pesatnya perkembangan teknologi kecerdasan buatan atau artificial intelligence (AI)...</h4>
            <div class="d-grid col-3 ">
                <button class="btn btn-dark btn-lg rounded-pill mt-4" type="button">read more...</button>
            </div>
        </div>
    </div>

    <!-- Gambar Static 2 -->
    <div class="row align-items-center p-3 ms-5" style="background-color: #eff4ee; ">
        <div class="col-12 col-md-4 pb-4">
            <img src="{{ asset('Assets/firstBlog2.png') }}" class="img-fluid" alt="..." style="border-radius: 30px;">
        </div>
        <div class="col-12 col-md-8 pb-5">
            <h3 class="fw-bold mt-3">Human and Computer Interaction</h3>
            <h6>14 May 2024 | by: Sabrina</h6>
            <h4>Human-Computer Interaction atau HCI adalah studi tentang bagaimana manusia berinteraksi dengan...</h4>
            <div class="d-grid col-3 ">
                <button class="btn btn-dark btn-lg rounded-pill mt-4" type="button">read more...</button>
            </div>
        </div>
    </div>
</div>
@endsection