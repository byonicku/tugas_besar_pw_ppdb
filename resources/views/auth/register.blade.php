<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                padding-top: 20px;
                padding-bottom: 20px;
            }

            .custom-btn {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="row" style="min-height: 100vh">
        <div class="col-md-6" style="padding-top: 72px; padding-bottom: 40px">
            <div class="d-flex flex-column py-5">
                <h1 class="py-5 align-self-center">Register</h1>
                <form action="{{ url('register') }}" method="POST">
                    @csrf
                    <div class="mb-3 pt-3 w-75 mx-auto">
                        <label for="nama">Nama Lengkap (Sesuai Akte)</label>
                        <input type="text" class="form-control py-2" id="nama" name="nama"
                            placeholder="Nama Lengkap" required>
                    </div>
                    <div class="mb-3 w-75 mx-auto">
                        <label for="email">Email Pribadi</label>
                        <input type="email" class="form-control py-2" id="email" name="email"
                            placeholder="Email Pribadi" required>
                    </div>
                    <div class="mb-3 w-75 mx-auto">
                        <label for="username">Username</label>
                        <input type="text" class="form-control py-2" id="username" name="username"
                            placeholder="Username" required>
                    </div>
                    <div class="mb-3 w-75 mx-auto">
                        <label for="password">Password</label>
                        <input type="password" class="form-control py-2" id="password" name="password"
                            placeholder="Password" required>
                    </div>
                    <div class="text-center pt-4">
                        <button type="submit" class="btn custom-btn px-4">Register</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6 gradient" style="padding-top: 128px; padding-bottom: 40px;">
            <div class="d-flex flex-column py-5">
                <h1 style="color:#FFFFFF; font-size: 86px; max-width: 450px" class="align-self-center text-center pb-5">
                    WELCOME TO SMATMA</h1>
                <a href="{{ url('register') }}"
                    style="color: #FFFFFF; border: 1px solid #FFFFFF; font-size: 30px; padding: 10px"
                    class="align-self-center px-5">
                    Register
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
