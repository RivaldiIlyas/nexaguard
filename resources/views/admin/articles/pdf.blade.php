<!DOCTYPE html>
<html>
<head>
    <title>Laporan Articles</title>

    <style>

        body{
            font-family: Arial, sans-serif;
        }

        h2{
            text-align:center;
            margin-bottom:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        th, td{
            border:1px solid black;
            padding:8px;
            text-align:left;
        }

        th{
            background:#eeeeee;
        }

    </style>

</head>
<body>

<h2>Laporan Data Articles</h2>

<table>

    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
    </tr>

    @foreach($articles as $article)

    <tr>
        <td>{{ $article->id }}</td>
        <td>{{ $article->title }}</td>
        <td>{{ $article->description }}</td>
    </tr>

    @endforeach

</table>

</body>
</html>