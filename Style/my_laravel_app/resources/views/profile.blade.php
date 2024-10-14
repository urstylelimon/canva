<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Profile</h1>
        <p class="text-center">Name: {{ Auth::user()->name }}</p>
        <p class="text-center">Email: {{ Auth::user()->email }}</p>
        @if (!Auth::user()->hasVerifiedEmail())
            <div class="alert alert-warning text-center">
                Your email address is not verified. Please check your email for the verification link.
                <form action="{{ route('verification.resend') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-link">Resend Verification Email</button>
                </form>
            </div>
        @endif
    </div>
</body>

</html>
