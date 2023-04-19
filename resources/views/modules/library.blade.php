@extends('layouts.app')
@section('content')
    <div class="container">
        <div>
            <h1>Module 1: School Library</h1>
            <h2>Rueben Marambii Library</h2>
            <p class="fs-5">
                Meru University library is a library located at Meru University of Science and Technology (MUST), which is a public university in Meru County, Kenya. The library provides various resources and services to students, faculty, and staff of the university, as well as members of the public.
            </p>
            <ul class="fs-5">
                <li>Access to print and electronic books, journals, and other scholarly materials</li>
                <li>Reference and research assistance from trained librarians</li>
                <li>Computer and internet access for research and other academic purposes</li>
                <li>Interlibrary loan services to request materials from other libraries</li>
                <li>Special collections and archives of rare or unique materials</li>
            </ul>
            <p class="fs-5">
                The Meru University library is dedicated to supporting the academic and research needs of the university community and promoting a culture of lifelong learning. It is an essential resource for students and faculty at Meru University, and it contributes to the advancement of scholarship and knowledge in Kenya and beyond.
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
                <form action="{{ route('update.progress') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-info text-white">Update Progress</button>
                </form>
                <a href="{{ route('modules.lab') }}" class="btn btn-primary">Next: Labs</a>
            </div>
        </div>
    </div>
@endsection
