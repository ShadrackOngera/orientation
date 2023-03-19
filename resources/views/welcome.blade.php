@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row text-center justify-content-center">
            <h1 class="display-5">{{ config('app.name') }}</h1>
            <p class="fs-6">
                Welcome to our online orientation system! We are excited to have you here and look forward to helping you navigate your way through our platform. Whether you're a new student, employee, or member of our community, we're here to support you every step of the way. Our orientation program is designed to provide you with all the information you need to succeed, so take your time, explore the site, and don't hesitate to reach out to us if you have any questions or concerns. We hope you find this experience informative, engaging, and enjoyable. Thank you for choosing us as your partner in learning and growth.
            </p>
        </div>
        <div class="py-5"></div>
        <div class="text-center">
            <h2>Features</h2>
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <ul class="list-unstyled fs-5">
                        <li>
                            Easy to use interface
                            <span class="text-success">
                        <svg style="font-size: 30px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                            <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
                        </svg>
                    </span>
                        </li>
                        <li>
                            Interactive learning modules
                            <span class="text-success">
                        <svg style="font-size: 30px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                            <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
                        </svg>
                    </span>
                        </li>
                        <li>
                            Flexible scheduling options
                            <span class="text-success">
                        <svg style="font-size: 30px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                            <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
                        </svg>
                    </span>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <img src="{{ asset('images/college-girl.jpg') }}" alt="College Student" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="py-5"></div>

        <h2>About Us</h2>
        <p class="fs-5">
            We are dedicated to help you settle to our School, and also have a prior understanding of the schools layout. This system will give you a step by step
            guide onto what to expect as soon as you join
        </p>
        <p class="fs-5">
            We are proud to offer Worlds most renowned courses, rangin from Computer Science, Law and Medicine to criminology and diploma courses at our institttion,
            as well as Participate in world biggest fields like Microsoft's and Google's competitions. Our team is made up of  "world-class faculty" and "experienced professionals,". We are dedicated to "making a difference in people's lives," "advancing knowledge and innovation," or "creating positive change in the world"].
        </p>
    </div>
@endsection
