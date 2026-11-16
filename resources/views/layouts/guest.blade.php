<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Iniciar Sesión | Club de Programadores UPeU</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            color: white;
            background:
                radial-gradient(circle at 15% 20%, rgba(0, 153, 255, .25), transparent 35%),
                radial-gradient(circle at 85% 80%, rgba(0, 90, 255, .20), transparent 35%),
                linear-gradient(135deg, #020b1c, #061d42, #03132c);
        }

        .login-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 35px 20px;
            position: relative;
            overflow: hidden;
        }

        .login-page::before {
            content: "";
            position: absolute;
            width: 450px;
            height: 450px;
            border: 1px solid rgba(0, 174, 255, .15);
            border-radius: 50%;
            top: -180px;
            right: -100px;
        }

        .login-page::after {
            content: "";
            position: absolute;
            width: 350px;
            height: 350px;
            border: 1px solid rgba(0, 174, 255, .12);
            border-radius: 50%;
            bottom: -150px;
            left: -100px;
        }

        .login-container {
            width: 100%;
            max-width: 1050px;
            display: grid;
            grid-template-columns: 1fr 430px;
            background: rgba(255, 255, 255, .04);
            border: 1px solid rgba(255, 255, 255, .12);
            border-radius: 25px;
            overflow: hidden;
            backdrop-filter: blur(15px);
            box-shadow: 0 20px 70px rgba(0, 0, 0, .35);
            position: relative;
            z-index: 1;
        }

        .login-brand {
            padding: 55px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: linear-gradient(145deg, rgba(0, 123, 255, .15), transparent);
        }

        .brand-logo {
            font-size: 27px;
            font-weight: 800;
            color: #fff;
            margin-bottom: 45px;
        }

        .brand-logo span {
            color: #00c8ff;
        }

        .brand-title {
            font-size: 38px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .brand-title span {
            color: #00c8ff;
        }

        .brand-description {
            color: #b9cce5;
            line-height: 1.8;
            font-size: 15px;
            max-width: 420px;
        }

        .brand-decoration {
            margin-top: 45px;
            color: #00c8ff;
            font-size: 14px;
            letter-spacing: 2px;
        }

        .login-form-area {
            padding: 50px 38px;
            background: rgba(2, 12, 30, .55);
        }

        .login-heading {
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .login-subheading {
            color: #9eb2ce;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .login-footer {
            text-align: center;
            color: #8198b8;
            font-size: 12px;
            margin-top: 30px;
        }

        @media(max-width: 800px) {
            .login-container {
                grid-template-columns: 1fr;
                max-width: 480px;
            }

            .login-brand {
                padding: 35px 30px;
            }

            .brand-logo {
                margin-bottom: 25px;
            }

            .brand-title {
                font-size: 30px;
            }

            .brand-decoration {
                margin-top: 20px;
            }

            .login-form-area {
                padding: 35px 28px;
            }
        }
    </style>
</head>

<body>

    <main class="login-page">

        <div class="login-container">

            <section class="login-brand">

                <div class="brand-logo">
                    Dev<span>Club</span> UPeU
                </div>

                <h1 class="brand-title">
                    Bienvenido al<br>
                    Club de <span>Programadores</span>
                </h1>

                <p class="brand-description">
                    Un espacio para aprender, desarrollar proyectos,
                    compartir conocimientos y construir el futuro
                    de la tecnología.
                </p>

                <div class="brand-decoration">
                    &lt; CODE · CREATE · INNOVATE /&gt;
                </div>

            </section>

            <section class="login-form-area">

                {{ $slot }}

                <div class="login-footer">
                    © {{ date('Y') }} Club de Programadores UPeU
                    <br>
                    Todos los derechos reservados.
                </div>

            </section>

        </div>

    </main>

</body>
</html>
