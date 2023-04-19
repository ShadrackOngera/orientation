<div class="py-5"></div>
<hr>
<div class="bg-primary-fade">
    <div class="py-5"></div>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-4">
                <h4>Pages</h4>
                <ul class="navbar-nav text-muted">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('chat.index') }}" class="nav-link">Community</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('feedback.index') }}" class="nav-link">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-4">
                <h4>Socials</h4>
                <ul class="navbar-nav text-muted">
                    <li class="nav-item">
                        <a href="https://t.me/daryblogs" class="nav-link">Telegram</a>
                    </li>
                    <li class="nav-item">
                        <a href="Twitter.com/shadrack2ongera" class="nav-link">Twitter</a>
                    </li>
                    <li class="nav-item">
                        <a href="instagram.com/utzerstone" class="nav-link">Instagram</a>
                    </li>
                    <li class="nav-item">
                        <a href="github.com/shadrackongera" class="nav-link">Github</a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-4">
                <div class="align-self-center">
                    <h5 class="text-muted">Join our mailing list</h5>
                    <div class="input-group mb-3">
                        <div class="w-100">
                            <form action="/" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Recipient's username" name="email" aria-describedby="button-addon2">
                                    <button class="btn btn-info" type="submit" id="button-addon2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-warning bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                            <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <p class="h4">
                        <a href="{{ route('feedback.index') }}" class="nav-link">Feedback</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container d-flex justify-content-between">
        <small>©Copyright {{ date('Y') }} {{ config('app.name') }}.</small>
        <small>All Rights Reserved</small>
    </div>
</div>


