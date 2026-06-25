<!DOCTYPE html>
<html>
<head>
    <title>Edit Article - NexaGuard</title>

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
            max-width:800px;
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

        input[type="file"]{
            background:none;
            padding:0;
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

        .preview-image{
            width:220px;
            border-radius:10px;
            margin-bottom:20px;
            border:2px solid #1b2c57;
        }

    </style>

</head>
<body>

<h1>📰 Edit Article</h1>

<div class="form-container">

    <form action="/admin/articles/update/{{ $article->id }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <label>Title</label>

        <input type="text"
               name="title"
               value="{{ $article->title }}">

        <label>Current Image</label>

        @if($article->image)

            <img
                src="{{ asset('storage/' . $article->image) }}"
                class="preview-image"
                alt="{{ $article->title }}">

        @endif

        <label>New Image</label>

        <input type="file"
               name="image">

        <label>Description</label>

        <textarea name="description"
                  rows="6">{{ $article->description }}</textarea>

        <button type="submit" class="btn">
            Update Article
        </button>

    </form>

</div>

<a href="/admin/articles" class="back-btn">
    Kembali
</a>

</body>
</html>