@extends('layouts.auth.index')

@section('title')
    Login
@endsection

@section('content')
    <div class="row g-0" style="border-radius: 1em; box-shadow: 0 5px 10px rgba(0,0,0,0.2); background-color: #23252b;">
        <div class="col-md-5 d-flex justify-content-center" style="background-color: #000000; border-radius: 1em 0 0 1em;">
            <img src="https://imajiwa.id/wp-content/uploads/2018/07/logogram-white.png" alt="Logo" class="img-fluid"
                style=" height: auto;">
        </div>
        <!-- Bagian kanan: Form -->
        <div class="col-md-7 p-4 text-white">
            <h2 class="mb-4">IMAJIWA <span style="font-weight: normal;">Creative Studio</span></h2>
            <form>
                <div class="form-group mb-3">
                    <label for="username" style="display: block; margin-bottom: 0.5em;">Username</label>
                    <input type="text" id="username" class="form-control" placeholder="Enter your username"
                        style="background-color: #333333; color: #ffffff; border: none;">
                </div>
                <div class="form-group mb-3">
                    <label for="password" style="display: block; margin-bottom: 0.5em;">Password</label>
                    <input type="password" id="password" class="form-control" placeholder="Enter your password"
                        style="background-color: #333333; color: #ffffff; border: none;">
                </div>
                <button type="submit" class="btn btn-primary"
                    style="background-color: #6C00FA; border: none; color: #ffffff; padding: 0.75em 1.5em; border-radius: 0.5em;">LOGIN</button>
            </form>
        </div>
    </div>
@endsection
