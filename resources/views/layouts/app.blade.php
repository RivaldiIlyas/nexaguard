<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexaGuard</title>

    <link href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>

        body{
            background:#0f172a;
            color:white;
            font-family:Arial, sans-serif;
        }

        .navbar{
            background:#020617;
        }

        .nav-link{
            transition:0.3s;
            margin-left:10px;
        }

        .nav-link:hover{
            color:#60a5fa !important;
            transform:translateY(-2px);
        }

        .hero{
            padding:120px 0;
        }

        .hero-title{
            font-size:60px;
            font-weight:bold;
            line-height:1.2;
        }

        .hero-text{
            color:#cbd5e1;
            font-size:18px;
        }

        .btn-primary{
            background:#3b82f6;
            border:none;
            padding:12px 28px;
            border-radius:12px;
            transition:0.3s;
        }

        .btn-primary:hover{
            background:#2563eb;
            transform:translateY(-3px);
        }

        .service-card{
            background:#1e293b;
            border-radius:20px;
            padding:30px;
            transition:0.3s;
            height:100%;
        }

        .service-card:hover{
            transform:translateY(-10px);
            box-shadow:0 20px 40px rgba(0,0,0,0.4);
        }

        .service-icon{
            font-size:40px;
        }

        img{
            transition:0.4s;
        }

        img:hover{
            transform:scale(1.03);
        }

        footer{
            background:#020617;
            color:#cbd5e1;
        }

    </style>

</head>
<body>
<h1 style="color:red">TES RAILWAY</h1>
<nav class="navbar navbar-expand-lg navbar-dark">

    <div class="container">

        <a class="navbar-brand fw-bold" href="/">
            🛡️ NexaGuard
        </a>

        <div class="navbar-nav ms-auto">

            <a class="nav-link text-white" href="/">
                Home
            </a>

            <a class="nav-link text-white" href="/about">
                About
            </a>

            <a class="nav-link text-white" href="/services">
                Services
            </a>

            <a class="nav-link text-white" href="/articles">
                Articles
            </a>

            <a class="nav-link text-white" href="/contact">
                Contact
            </a>

            <a class="nav-link text-white" href="/login">
                Admin
            </a>

        </div>

    </div>

</nav>

<div class="container py-5">

    @yield('content')

</div>

<footer class="text-center py-4 mt-5">

    <div class="container">

        <h5 class="fw-bold text-white">
            🛡️ NexaGuard
        </h5>

        <p class="mt-3">
            Secure Your Digital Future
        </p>

        <p class="mb-0">
            © 2026 NexaGuard. All rights reserved.
        </p>

    </div>

</footer>

</body>
</html>