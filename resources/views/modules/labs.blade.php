@extends('layouts.app')
@section('content')
    <div class="container">
        <div>
            <h1>Module 1: School Laboratories</h1>
            <h2>Computer Labs, Scientific labs and innovation labs</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus animi aperiam aspernatur at commodi corporis dicta dolorum fuga inventore, laudantium minima mollitia nam quasi quia quibusdam quidem repellendus sapiente sequi tempore totam unde, veniam? At, dicta dolores enim error ex illo in, nesciunt obcaecati quaerat quis reiciendis velit vitae.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum fuga obcaecati officiis suscipit ullam? Accusantium debitis eligendi est obcaecati ullam.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consequatur delectus facere laborum obcaecati pariatur recusandae repellat ullam. Architecto nam nostrum nulla officia perspiciatis recusandae, totam voluptatum! Ad at debitis distinctio labore odio. Accusantium ad commodi consectetur corporis cum cumque deleniti dicta dignissimos, dolor dolorum eligendi eum expedita laudantium magni nam nobis nostrum numquam obcaecati officiis perferendis quae quis repellendus reprehenderit sapiente sequi sit soluta sunt tempore voluptatibus voluptatum. At consequatur debitis dolore est illum officia repellendus rerum voluptatem. Atque dolores dolorum eligendi error magni officia recusandae saepe sapiente, sed sequi sunt suscipit vero voluptates! Architecto assumenda expedita illo mollitia temporibus? Ab asperiores beatae consequatur cupiditate, debitis dicta dolor facilis, harum illum labore magnam molestiae mollitia necessitatibus non odio optio, placeat porro quo repellendus reprehenderit saepe suscipit veritatis vero vitae voluptates? Ad ipsam mollitia natus nobis odit omnis quam tempora. A animi asperiores at doloribus esse, hic id perspiciatis similique.
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
                <a href="{{ route('modules.classes') }}" class="btn btn-primary">Next: Classes</a>
            </div>
        </div>
    </div>
@endsection
