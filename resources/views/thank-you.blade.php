<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="refresh" content="3; url = {{ route('welcome') }}">

        <!-- Bootstrap CSS -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <!-- <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
            rel="stylesheet"
        /> -->
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600;700;800&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="./assets/main.css" />
        <title>Haleasi Travels</title>
    </head>
    <body>
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="jumbotron text-center">
                    <h1 class="display-3 text-primary">Thank You!</h1>
                    <p class="lead text-secondary"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-sm" href="{{ route('welcome') }}" role="button">Continue to homepage</a>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>