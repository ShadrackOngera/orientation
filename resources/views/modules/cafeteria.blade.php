@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="fs-5">
            <h1>Module 4: Cafeteria in School</h1>
            <h2>Cafeteria activities</h2>
            <p>
                University cafeterias, also known as dining halls, are an integral part of campus life for many college students. These dining facilities offer a variety of meal options, from traditional American fare to international cuisine. The food served in university cafeterias is often prepared on-site by professional chefs and is typically included in the cost of a student's meal plan.
            </p>
            <h3 class="mb-0">university cafeterias </h3>
            <p>
                Made strides in recent years to offer more sustainable and eco-friendly options. Many now use compostable or reusable plates and utensils, and some have implemented food waste reduction programs.
            </p>
            <p>
                <strong>In addition</strong> to providing meals, university cafeterias often serve as social gathering places for students. They offer a space where students can relax, chat, and catch up with friends. Some cafeterias even offer special events like themed dinners, cooking classes, and live music performances.

                However, university cafeterias have also faced criticism for issues such as limited vegetarian and vegan options, unhealthy food choices, and long lines during peak meal times. In response, many universities have taken steps to address these concerns, such as offering more plant-based options and providing nutrition information for menu items.
            </p>
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
                    <img src="{{asset('images/lib-one.jpg')}}" class="d-block w-100" alt="Library One">
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
                <a href="{{ route('modules.progress') }}" class="btn btn-secondary">Mark module as Done</a>
                <a href="{{ route('modules.sports') }}" class="btn btn-primary">Next: Sports</a>
            </div>
        </div>
    </div>
@endsection

