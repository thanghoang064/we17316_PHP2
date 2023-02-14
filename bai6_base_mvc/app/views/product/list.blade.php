<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    {{ $tieuDe }}
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Tên SP</td>
            <td>Đơn giá</td>
        </tr>
        @foreach($products as $pr)
        <tr>
            <td>{{ $pr->id }}</td>
            <td>{{ $pr->ten_sp }}</td>
            <td>{{ $pr->gia }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>