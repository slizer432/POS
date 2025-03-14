<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Level Pengguna</title>
</head>

<body>
    <h1>Data Level Pengguna</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Kode Level</th>
            <th>Nama Level</th>
        </tr>
        @foreach ($data as $dt)
            <tr>
                <td>{{ $dt->level_id }}</td>
                <td>{{ $dt->level_kode }}</td>
                <td>{{ $dt->level_nama }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>