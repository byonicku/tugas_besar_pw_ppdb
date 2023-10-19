<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .gradient {
            background: rgb(12, 132, 164);
            background: linear-gradient(180deg, rgba(12, 132, 164, 1) 60%, rgba(255, 214, 164, 1) 85%);
        }

        a {
            text-decoration: none;
        }

        html,
        body {
            overflow: hidden;
        }

        .custom-btn {
            background-color: #0C84A4;
            /* Background color */
            color: #FFFFFF;
            /* Text color */
            font-size: 24px;
            transition: background-color 0.3s;
            /* Hover animation */
        }

        .custom-btn:hover {
            color: #FFFFFF;
            background-color: #0A6D8C;
        }

        .custom-btn:focus {
            color: #FFFFFF;
            background-color: #0A6D8C;
        }

        .custom-btn:active {
            color: #FFFFFF;
            background-color: #0C84A4;
        }

        @media (max-width: 768px) {
            .col-md-6 {
                padding: 20px;
                /* Reduce padding for small screens */
            }

            .custom-btn {
                font-size: 20px;
                /* Smaller font size for small screens */
            }
        }
    </style>
</head>

<body>
    <div class="row" style="min-height: 100vh">
        <div class="col-md-6" style="padding-top: 72px; padding-bottom: 40px">
            <div class="d-flex flex-column py-5">
                <h1 class="py-5 align-self-center">Sign In</h1>
                @if ($error)
                    <div class="alert alert-warning align-self-center" role="alert">
                        {{ $error }}
                    </div>
                @endif
                <form action="{{ url('login') }}" method="POST">
                    @csrf
                    <div class="mb-3 pt-5 w-75 mx-auto"> <!-- Adjusted width for responsiveness -->
                        <input type="text" class="form-control py-2" id="username" name="username"
                            placeholder="Username" required>
                    </div>
                    <div class="mb-3 w-75 mx-auto"> <!-- Adjusted width for responsiveness -->
                        <input type="password" class="form-control py-2" id="password" name="password"
                            placeholder="Password" required>
                    </div>
                    <div class="mb-3 w-75 mx-auto text-end"> <!-- Adjusted width for responsiveness -->
                        <a href="{{ url('register') }}" style="color: #494747;">Tidak punya akun?</a>
                    </div>
                    <div class="text-center" style="padding-top: 100px; padding-bottom: 20px">
                        <a href="#" style="font-size: 18px; color: dimgray">Forgot your password?</a>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn custom-btn px-5">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 gradient" style="padding-top: 200px; padding-bottom: 40px;">
            <div class="d-flex flex-column py-5">
                <h1 style="color:#FFFFFF; font-size: 86px" class="text-center">HELLO</h1>
                <p style="color: #ffffff; font-size: 24px; font-weight: 200; max-width: 300px;"
                    class="align-self-center text-center pb-5">
                    Silahkan masuk menggunakan akun anda
                </p>
                <a href="{{ url('login') }}"
                    style="color: #FFFFFF; border: 1px solid #FFFFFF; font-size: 30px; padding: 10px"
                    class="align-self-center px-5">
                    Sign In
                </a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
