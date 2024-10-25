@extends('layouts.layout')
@section('child')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header text-center">
                    <h3 class=" font-weight-light my-4">Login</h3>
                </div>
                @if (session()->has('LoginError'))
                <div class="mx-3 alert alert-danger alert-dismissible fade show mt-4" role="alert">
                    {{ session('LoginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card-body">
                    <form action="/loginuser" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="text" placeholder="Username" required/>
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="password" name="password" type="password" placeholder="Password" required/>
                            <label for="password">Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection
