@extends('admin.shared.admin_layout')

@section('content')
    <h1>Yeni Çalışma Ekle</h1>

    <form action="{{ route('yonetim.calismalar.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="imageUrl">Resim Url</label>
            <input type="text" name="imageUrl" id="imageUrl" class="form-control" required>
        </div>


        <br>
        <button type="submit" class="btn btn-primary">Ekle</button>

    </form>


@endsection
