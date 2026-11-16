<x-app-layout>

    <style>
        .dashboard {
            min-height: 100vh;
            padding: 40px 20px;
            background: linear-gradient(135deg, #07152e, #102d59, #101b3d);
            color: white;
        }

        .welcome {
            max-width: 1150px;
            margin: auto;
            padding: 45px;
            border-radius: 20px;
            background: linear-gradient(120deg, #0878b9, #4938a8, #7928a0);
            box-shadow: 0 10px 35px rgba(0,0,0,.3);
        }

        .welcome h1 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .welcome p {
            color: #e0f2fe;
            font-size: 16px;
        }

        .section-title {
            max-width: 1150px;
            margin: 40px auto 20px;
            font-size: 25px;
            font-weight: bold;
        }

        .cards {
            max-width: 1150px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 22px;
        }

        .card {
            padding: 28px;
            border-radius: 16px;
            background: rgba(255,255,255,.09);
            border: 1px solid rgba(255,255,255,.15);
            transition: .3s;
        }

        .card:hover {
            transform: translateY(-7px);
            background: rgba(255,255,255,.16);
        }

        .card .icon {
            font-size: 38px;
            margin-bottom: 15px;
        }

        .card h3 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #67e8f9;
        }

        .card p {
            color: #dbeafe;
            line-height: 1.6;
        }

        .footer {
            text-align: center;
            margin-top: 55px;
            color: #a5b4fc;
            font-size: 14px;
        }
    </style>

    <div class="dashboard">

        <!-- BIENVENIDA -->
        <div class="welcome">

            <h1>
                ¡Bienvenido, {{ Auth::user()->us_nombre }}!
            </h1>

            <p>
                DEVCLUB - CLUB DE PROGRAMADORES UPeU
            </p>

            <p style="margin-top:15px;">
                Un espacio para aprender, compartir conocimientos,
                desarrollar proyectos y crecer juntos en el mundo
                de la tecnología.
            </p>

        </div>

        <!-- SECCIONES -->
        <h2 class="section-title">
            Panel de administración
        </h2>

        <div class="cards">

            <div class="card">
                <div class="icon">👥</div>
                <h3>Miembros</h3>
                <p>
                    Conoce a los integrantes que forman
                    parte de nuestra comunidad.
                </p>
            </div>

            <div class="card">
                <div class="icon">📅</div>
                <h3>Eventos</h3>
                <p>
                    Descubre actividades, talleres y
                    encuentros tecnológicos.
                </p>
            </div>

            <div class="card">
                <div class="icon">💻</div>
                <h3>Proyectos</h3>
                <p>
                    Explora ideas, desarrollos y trabajos
                    realizados por nuestros miembros.
                </p>
            </div>

            <div class="card">
                <div class="icon">🚀</div>
                <h3>Comunidad</h3>
                <p>
                    Comparte conocimientos y desarrolla
                    nuevas habilidades de programación.
                </p>
            </div>

        </div>

        <div class="footer">
            © 2026 DevClub - Club de Programadores UPeU.
            Todos los derechos reservados.
        </div>

    </div>

</x-app-layout>
