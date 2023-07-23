@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center " >
        <div class="col-md-5 ">
            <div class="card py-2 bg-light">
                <div class="card-body py-2 ">
                    <div class="container offset-md-2 py-5 "><h1 class="text-primary"><b>ITTS INVENTORY</b></h1></div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-4 ">
                            <div class="col-md-8 offset-md-2 ">
                                <input id="email" type="email"  class="rounded-pill bg-light form-control @error('email') is-invalid @enderror" name="email" value="{{ old('username') }}" required autocomplete="username" placeholder="Username" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-8 offset-md-2">
                                <input id="password" type="password" class="rounded-pill bg-light form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 py-5">
                            <div class="col-md-8 offset-md-2 d-grid gap-3">
                                <button type="submit" class="rounded-pill btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection