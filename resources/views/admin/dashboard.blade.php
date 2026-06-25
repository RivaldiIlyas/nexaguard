<!DOCTYPE html>

<html>
<head>
    <title>Dashboard Admin - NexaGuard</title>

 
<style>

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family:Arial, Helvetica, sans-serif;
    }

    body{
        background:#08142e;
        color:white;
        padding:40px;
    }

    .header{
        display:flex;
        justify-content:space-between;
        align-items:center;
        margin-bottom:30px;
    }

    h1{
        margin:0;
    }

    .admin-nav{
        display:flex;
        gap:15px;
        margin-bottom:30px;
    }

    .nav-btn{
        padding:12px 20px;
        background:#122041;
        color:white;
        text-decoration:none;
        border-radius:8px;
        transition:0.3s;
        font-weight:bold;
    }

    .nav-btn:hover{
        background:#1b2c57;
        transform:translateY(-2px);
    }

    .cards{
        display:flex;
        gap:20px;
        margin-bottom:30px;
        flex-wrap:wrap;
    }

    .card{
        flex:1;
        min-width:250px;
        background:#122041;
        padding:25px;
        border-radius:12px;
        transition:0.3s;
    }

    .card:hover{
        transform:translateY(-5px);
    }

    .card h2{
        font-size:36px;
        margin-top:10px;
    }

    .welcome{
        background:#122041;
        padding:25px;
        border-radius:12px;
        margin-bottom:30px;
    }

    .welcome h3{
        margin-bottom:10px;
    }

    .logout-btn{
        padding:12px 20px;
        border:none;
        background:#dc2626;
        color:white;
        border-radius:8px;
        cursor:pointer;
        font-weight:bold;
    }

    .logout-btn:hover{
        background:#b91c1c;
    }

    .header-actions{
    display:flex;
    gap:10px;
    align-items:center;
    }

    .website-btn{
        display:inline-block;
        padding:12px 20px;
        background:#2563eb;
        color:white;
        text-decoration:none;
        border-radius:8px;
        font-weight:bold;
    }

    .website-btn:hover{
        background:#1d4ed8;
    }

</style>
 

</head>
<body>

<div class="header">

    <h1>🛡️ Dashboard Admin NexaGuard</h1>

    <div class="header-actions">

        <a href="/" target="_blank" class="website-btn">
            Website
        </a>

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button type="submit" class="logout-btn">
                Logout
            </button>
        </form>

    </div>

</div>

<div class="admin-nav">

    <a href="/admin/services" class="nav-btn">
        Services
    </a>

    <a href="/admin/articles" class="nav-btn">
        Articles
    </a>

    <a href="/admin/company-profile" class="nav-btn">
        Company Profile
    </a>

</div>
<div class="cards">

 
<div class="card">
    <p>Total Services</p>
    <h2>{{ $totalServices }}</h2>
</div>

<div class="card">
    <p>Total Articles</p>
    <h2>{{ $totalArticles }}</h2>
</div>

<div class="card">
    <p>Total Content</p>
    <h2>{{ $totalServices + $totalArticles }}</h2>
</div>
 

</div>

<div class="welcome">

 
<h3>👋 Welcome Back, Administrator</h3>

<p>
    Manage cybersecurity services, articles,
    and company information through the
    NexaGuard Admin Dashboard.
</p>
 

</div>

</body>
</html>
