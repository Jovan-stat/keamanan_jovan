<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Keamanan Jovan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 72px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 15px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .description {
                margin-top: 25px;
                font-size: 16px;
            }

            .footer {
                margin-top: 40px;
                font-size: 13px;
                color: #999;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <!-- MAIN CONTENT -->
            <div class="content">

                <div class="title m-b-md">
                    Keamanan Jovan
                </div>

                <div class="links" style="margin-top:20px; text-transform:none;">
                    <p style="font-weight:700;">
                        Fitur Authentication Lengkap :
                    </p>

                    <div style="display:flex; gap:15px; justify-content:center; flex-wrap:wrap; margin-top:10px; font-weight:600;">
                        <span>Login</span>
                        <span>|</span>
                        <span>Password Hashing</span>
                        <span>|</span>
                        <span>Registrasi</span>
                        <span>|</span>
                        <span>Verifikasi registrasi via email</span>
                        <span>|</span>
                        <span>Password Reset</span>
                    </div>
                </div>

                @if (Route::has('login'))
                    <div style="margin-top:30px; display:flex; gap:15px; justify-content:center;">

                        @auth
                            <a href="{{ url('/home') }}"
                                style="display:inline-block; width:120px; text-align:center; padding:8px 0; background:#3490dc; color:white; border-radius:5px; text-decoration:none;"
                                onmouseover="this.style.opacity='0.8'"
                                onmouseout="this.style.opacity='1'">
                                Home
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                style="display:inline-block; width:120px; text-align:center; padding:8px 0; background:#3490dc; color:white; border-radius:5px; text-decoration:none;"
                                onmouseover="this.style.opacity='0.8'"
                                onmouseout="this.style.opacity='1'">
                                Login
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    style="display:inline-block; width:120px; text-align:center; padding:8px 0; background:#38c172; color:white; border-radius:5px; text-decoration:none;"
                                    onmouseover="this.style.opacity='0.8'"
                                    onmouseout="this.style.opacity='1'">
                                    Register
                                </a>
                            @endif
                        @endauth

                    </div>
                @endif

                <div class="footer">
                    TUGAS KEAMANAN SISTEM INFORMASI - 72230608 / JOVAN MARLLEN YULIANTO
                </div>

            </div>
        </div>
    </body>
</html>