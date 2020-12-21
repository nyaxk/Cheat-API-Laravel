<div class="login-clean">
    <form method="post" action="{{route('login.store')}}">
        @csrf
        <div class="illustration">
            <img src="{{asset('assets/imgs/logo.png')}}">
        </div>
        <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email or username" autocomplete="no" required>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password" autocomplete="no"
                   required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Log In</button>
        </div>
    </form>
</div>
<div class="footer-clean">
    <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 item social text-center">
                    <p class="copyright">Created by Nyoonki</p>
                    <p class="copyright">{{getenv('APP_NAME')}} © 2020</p>
                </div>
            </div>
        </div>
    </footer>
</div>
