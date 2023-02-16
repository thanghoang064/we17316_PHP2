@extends('layout.main')
@section('content')
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
@endsection