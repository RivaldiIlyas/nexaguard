<!DOCTYPE html>
<html>
<head>
    <title>Tambah Service - NexaGuard</title>

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

        h1{
            margin-bottom:30px;
        }

        .form-container{
            background:#122041;
            padding:30px;
            border-radius:12px;
            max-width:700px;
        }

        label{
            display:block;
            margin-bottom:8px;
            font-weight:bold;
        }

        input,
        textarea{
            width:100%;
            padding:12px;
            border:none;
            border-radius:8px;
            margin-bottom:20px;
            background:#1b2c57;
            color:white;
        }

        textarea{
            resize:vertical;
        }

        .btn{
            padding:12px 20px;
            border:none;
            border-radius:8px;
            background:#2563eb;
            color:white;
            cursor:pointer;
            font-size:15px;
        }

        .btn:hover{
            background:#1d4ed8;
        }

        .back-btn{
            display:inline-block;
            margin-top:20px;
            padding:12px 20px;
            background:#2563eb;
            color:white;
            text-decoration:none;
            border-radius:8px;
        }

        .back-btn:hover{
            background:#1d4ed8;
        }

        .error-box{
            background:#7f1d1d;
            color:white;
            padding:15px;
            border-radius:8px;
            margin-bottom:20px;
        }

    </style>

</head>
<body>

<h1>🛡️ Tambah Service</h1>

@if ($errors->any())

<div class="error-box">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif

<div class="form-container">

    <form action="/admin/services/store" method="POST">

        @csrf

        <label>Title</label>
        <input type="text"
               name="title"
               value="{{ old('title') }}">

        <label>Description</label>
        <textarea name="description"
                  rows="6">{{ old('description') }}</textarea>

        <label>Icon</label>
        <input type="text"
               name="icon"
               value="{{ old('icon') }}">

        <button type="submit" class="btn">
            Simpan Service
        </button>

    </form>

</div>

<a href="/admin/services" class="back-btn">
    Kembali
</a>

</body>
</html>