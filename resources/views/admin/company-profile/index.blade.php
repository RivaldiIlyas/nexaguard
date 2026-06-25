<!DOCTYPE html>

<html>
<head>
    <title>Company Profile - NexaGuard</title>

 
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
        font-size:40px;
    }

    .btn{
        display:inline-block;
        padding:12px 20px;
        background:#2563eb;
        color:white;
        text-decoration:none;
        border-radius:8px;
    }

    .btn:hover{
        background:#1d4ed8;
    }

    .card{
        background:#122041;
        padding:25px;
        border-radius:12px;
    }

    input,
    textarea{
        width:100%;
        padding:12px;
        border:none;
        border-radius:8px;
        margin-top:8px;
        margin-bottom:20px;
    }

    textarea{
        min-height:120px;
    }

    .success-box{
        background:#16a34a;
        padding:15px;
        border-radius:8px;
        margin-bottom:20px;
        font-weight:bold;
    }

</style>
 

</head>
<body>

<div class="header">

 
<h1>🏢 Company Profile</h1>

<a href="/admin/dashboard" class="btn">
    Dashboard
</a>
 

</div>

@if(session('success'))

<div class="success-box">
    ✅ {{ session('success') }}
</div>

@endif

<div class="card">

<form action="/admin/company-profile/update" method="POST">

 
@csrf

<label>Company Name</label>

<input
    type="text"
    name="company_name"
    value="{{ $profile->company_name ?? '' }}">

<label>Description</label>

<textarea
    name="description">{{ $profile->description ?? '' }}</textarea>

<label>Email</label>

<input
    type="email"
    name="email"
    value="{{ $profile->email ?? '' }}">

<label>Phone</label>

<input
    type="text"
    name="phone"
    value="{{ $profile->phone ?? '' }}">

<label>Address</label>

<textarea
    name="address">{{ $profile->address ?? '' }}</textarea>

<button type="submit" class="btn">
    Save Company Profile
</button>
 

</form>

</div>

</body>
</html>
