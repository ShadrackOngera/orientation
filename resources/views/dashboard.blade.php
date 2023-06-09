@extends('layouts.app')

@section('content')
<div class="container">
    <p class="text-muted fs-5">Hello {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}, This is your Dashboard. Your Current Progress is <strong>{{ Auth::user()->progress }}%</strong></p>
    <hr>
    <div class="py-3"></div>

    <div class="row justify-content-center mb-3">
        Start a virtual tour
    </div>

    <div class="mb-3 d-flex justify-content-md-between align-items-center">
        <a href="{{ route('modules.library') }}" class="btn btn-outline-primary">Library</a>
        <span class="text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
            </svg>
        </span>
        <a href="{{ route('modules.lab') }}" class="btn btn-outline-primary">Labs</a>
        <span class="text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
            </svg>
        </span>
        <a href="{{ route('modules.classes') }}" class="btn btn-outline-primary">Classes</a>
        <span class="text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
            </svg>
        </span>
        <a href="{{ route('modules.cafeteria') }}" class="btn btn-outline-primary">Cafeteria</a>
        <span class="text-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
            </svg>
        </span>
        <a href="{{ route('modules.sports') }}" class="btn btn-outline-primary">Sports</a>
    </div>
    <div class="py-5"></div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card shadow p-md-5">
                <h4 class="text-muted">
                    PERSONAL DETAILS
                </h4>
                <ul class="list-unstyled">
                    <li class="nav-item">
                        <span class="text-muted">Name:</span> {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                    </li>
                    <li class="nav-item">
                        <span class="text-muted">Email:</span> {{ Auth::user()->email }}
                    </li>
                    <li class="nav-item">
                        <span class="text-muted">Registration Number:</span> {{ Auth::user()->registration_number }}
                    </li>
                    <li class="nav-item">
                        <span class="text-muted">School:</span> {{ Auth::user()->school }}
                    </li>
                    <li class="nav-item">
                        <span class="text-muted">Progress:</span> {{ Auth::user()->progress }}%
                    </li>
                    <li class="nav-item">
                        <span class="text-muted">Modules Completed:</span> {{ Auth::user()->progress/20 }}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="py-5"></div>

    <div class="accordion" id="accordionExample">
        <h2>Frequently asked questions</h2>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    How To Navigate through the system
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>
                        On the Dashboard, the user is able to see the modules and mark when done.
                    </p>
                    <p>
                        Click on the desired module to start on and indicate how it works
                    </p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How to chat with the Admin
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    How to book an In-person
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
