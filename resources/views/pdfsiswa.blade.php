<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Data Siswa</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datasiswa as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->nis }}</td>
                    <td>{{ $data->nama }}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </body>
</html>