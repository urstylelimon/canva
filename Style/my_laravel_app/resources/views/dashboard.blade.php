@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">

                    </div>
                    <div class="container mt-5">

                        <h1 class="text-center">Profile</h1>
                        <p class="text-center">Name: {{ Auth::user()->name }}</p>
                        <p class="text-center">Email: {{ Auth::user()->email }}</p>
                        @if (!Auth::user()->hasVerifiedEmail())
                            <div class="alert alert-warning text-center">
                                Your email address is not verified. Please check your email for the verification
                                link.
                                <form action="{{ route('verification.resend') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-link">Resend Verification Email</button>
                                </form>
                            </div>
                        @endif
                    </div>


                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
