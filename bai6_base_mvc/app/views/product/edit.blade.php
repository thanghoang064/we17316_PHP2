@extends('layout.main')
@section('content')
    @if(isset($_SESSION['errors']) && isset($_GET['msg']))
        <ul>
            @foreach($_SESSION['errors'] as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @if(isset($_SESSION['success']) && isset($_GET['msg']))
        <span style="color:green;">{{ $_SESSION['success'] }}</span>
    @endif
    <form action="{{ route('edit-product-post/'.$product->id) }}" method="POST">
        Tên sản phẩm <input type="text" name="ten_sp" value="{{ $product->ten_sp }}"></br>
        Đơn giá <input type="text" name="don_gia" value="{{ $product->gia }}"></br>
        <input type="submit" name="sua" value="Sửa">
    </form>
@endsection