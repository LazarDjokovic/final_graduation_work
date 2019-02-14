@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Register</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="basic-login">
                        <form action="/register" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="register-password"><i class="icon-lock"></i> <b>First Name</b></label>
                                <input class="form-control" name="first_name" id="first_name" type="text" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="register-password"><i class="icon-lock"></i> <b>Last Name</b></label>
                                <input class="form-control" name="last_name" id="last_name" type="text" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="register-username"><i class="icon-user"></i> <b>Email</b></label>
                                <input class="form-control" name="email" id="email" type="text" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="register-password"><i class="icon-lock"></i> <b>Password</b></label>
                                <input class="form-control" name="password" id="password" type="password" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="register-password2"><i class="icon-lock"></i> <b>Re-enter Password</b></label>
                                <input class="form-control" name="confirm_password" id="confirm_password" type="password" placeholder="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn pull-right">Register</button>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-1 social-login">
                    <p>You can use your Facebook or Twitter for registration</p>
                    <div class="social-login-buttons">
                        <a href="#" class="btn-facebook-login">Use Facebook</a>
                        <a href="#" class="btn-twitter-login">Use Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
