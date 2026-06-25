<!DOCTYPE html>
<html>
<head>
    <title>Manage Articles - NexaGuard</title>

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

        .table-container{
            background:#122041;
            padding:20px;
            border-radius:12px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        th{
            background:#1b2c57;
            padding:15px;
            text-align:left;
        }

        td{
            padding:15px;
            border-top:1px solid #22345f;
            vertical-align:middle;
        }

        tr:hover{
            background:#16284d;
        }

        .thumbnail{
            width:120px;
            height:80px;
            object-fit:cover;
            border-radius:8px;
        }

        .edit-btn{
            padding:8px 14px;
            background:#2563eb;
            color:white;
            text-decoration:none;
            border-radius:6px;
            margin-right:5px;
        }

        .delete-btn{
            padding:8px 14px;
            border:none;
            background:#dc2626;
            color:white;
            border-radius:6px;
            cursor:pointer;
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

        .success-box{
    background:#16a34a;
    color:white;
    padding:15px;
    border-radius:8px;
    margin-bottom:20px;
    font-weight:bold;
}

    </style>

</head>
<body>

<div class="header">

    <h1>📰 Manage Articles</h1>

    <div class="action-buttons">

        <a href="/admin/dashboard" class="btn">
            Dashboard
        </a>

        <a href="/admin/articles/create" class="btn">
            + Tambah Article
        </a>

        <a href="/admin/articles/pdf" class="btn">
            📄 Export PDF
        </a>

    </div>

</div>

@if(session('success'))

<div class="success-box">
    ✅ {{ session('success') }}
</div>

@endif


<div class="table-container">

    <table>

        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Action</th>
        </tr>

        @foreach($articles as $article)

        <tr>

            <td>{{ $article->id }}</td>

            <td>{{ $article->title }}</td>

            <td>

                @if($article->image)

                    <img
                        src="{{ asset('storage/' . $article->image) }}"
                        class="thumbnail"
                        alt="{{ $article->title }}">

                @endif

            </td>

            <td>

                <a href="/admin/articles/edit/{{ $article->id }}"
                   class="edit-btn">
                    Edit
                </a>

                <form action="/admin/articles/delete/{{ $article->id }}"
                      method="POST"
                      style="display:inline;">

                    @csrf
                    @method('DELETE')

                <button type="submit"
                    class="delete-btn"
                    onclick="return confirm('Yakin ingin menghapus article ini?')">
                    Delete
                </button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

</div>

</body>
</html>