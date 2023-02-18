@extends('layout.main')
@section('content')
{{ $tieuDe }}
<table border="1">
    <tr>
        <td>ID</td>
        <td>Tên SP</td>
        <td>Đơn giá</td>
        <td>Thao tác</td>
    </tr>
    @foreach($products as $pr)
        <tr>
            <td>{{ $pr->id }}</td>
            <td>{{ $pr->ten_sp }}</td>
            <td>{{ $pr->gia }}</td>
            <td>
                <a href="{{ route('edit-product/'.$pr->id) }}">Sửa</a>
                <a href="">Xóa</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection