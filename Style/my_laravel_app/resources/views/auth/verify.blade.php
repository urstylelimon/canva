<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Verify Your Email Address</h1>
        <div class="alert alert-info text-center">
            Before proceeding, please check your email for a verification link.
            If you did not receive the email, <form action="{{ route('verification.resend') }}" method="POST"
                class="d-inline">@csrf<button type="submit" class="btn btn-link">click here to request another</button>
            </form>.
        </div>
    </div>
</body>

</html>
