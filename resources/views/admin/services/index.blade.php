<!DOCTYPE html>
<html>
<head>
    <title>Manage Services - NexaGuard</title>

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
        }

        tr:hover{
            background:#16284d;
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
            color:white;
            text-decoration:none;
        }

        .success-box{
    background:#16a34a;
    color:white;
    padding:15px;
    border-radius:8px;
    margin-bottom:20px;
    font-weight:bold;
}

        .nav-buttons{
            display:flex;
            gap:10px;
            margin-bottom:25px;
        }

        .nav-btn{
            display:inline-block;
            padding:12px 20px;
            background:#2563eb;
            color:white;
            text-decoration:none;
            border-radius:8px;
        }

        .nav-btn:hover{
            background:#1d4ed8;
        }

    </style>

</head>
<body>

<div class="header">

    <h1>🛡️ Manage Services</h1>

    <div class="nav-buttons">

        <a href="/admin/dashboard" class="nav-btn">
            Dashboard
        </a>

        <a href="/admin/services/create" class="nav-btn">
            ➕ Tambah Service
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
            <th>Icon</th>
            <th>Action</th>
        </tr>

        @foreach($services as $service)

        <tr>

            <td>{{ $service->id }}</td>

            <td>{{ $service->title }}</td>

            <td>{{ $service->icon }}</td>

            <td>

                <a href="/admin/services/edit/{{ $service->id }}"
                   class="edit-btn">
                    Edit
                </a>

                <form action="/admin/services/delete/{{ $service->id }}"
                      method="POST"
                      style="display:inline;">

                    @csrf
                    @method('DELETE')

                <button type="submit"
                    class="delete-btn"
                    onclick="return confirm('Yakin ingin menghapus service ini?')">
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