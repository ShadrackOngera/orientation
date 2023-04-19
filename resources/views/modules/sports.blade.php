@extends('layouts.app')
@section('content')
    <div class="container">
        <div>
            <h1>Module 5: School Sporting</h1>
            <h2>Sporting activities, utilities, grounds  and timetables</h2>
            <p>
                The psychology of sport is an ever-expanding area that looks to establish a way of enhancing athlete, player and other high performing groups outcomes.
            </p>
            <div class="row mb-3 text-center">
                <div class="col-sm-6 py-3 align-self-center">
                    This is done through an evidence-based approach informed by research to allow practitioners to meet that aim.

                    Our MSc puts you at the forefront of this process and immerses you into sport psychology in a supportive and challenging way. You begin by examining theory and research within sport psychology and then move onto looking at ways of applying that theory as a researcher and potential practitioner.

                    You finish your degree with a period in the workplace assisting relevant groups with performance enhancement and researching a topic that will hopefully give you the chance to contribute to the body of literature within sport psychology and inform future practices.
                </div>
                <div class="col-sm-6">
                    <img src="{{ asset('images/vid.png') }}" alt="" class="img-fluid">
                </div>
            </div>

            <div class="text-center">
                <small>
                    The research component of the course initially gives you the necessary tools of measurement to make an informed decision on how to go about gathering data for a larger project within an area that you find interesting in sport psychology.
                </small>
            </div>
            <hr>
            <hr>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide mb-3">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/uni.jpeg')}}" class="d-block w-100" alt="Library One">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/lib-two.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/lib-three.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/lib-four.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="mb-3">
            <div class="d-flex justify-content-between">
                <a href="{{ route('dashboard') }}" class="btn btn-secondary">Dashboard</a>
                <form action="{{ route('update.progress') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-info text-white">Update Progress</button>
                </form>
                <a href="{{ route('modules.lab') }}" class="btn btn-primary">Next: Labs</a>
            </div>
        </div>
    </div>
@endsection
