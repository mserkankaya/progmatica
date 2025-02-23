@extends('admin.shared.admin_layout')

@section('content')
    <h1>Yeni Yorum Ekle</h1>

    <form action="{{ route('yonetim.yorumlar.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Ad Soyad</label>
            <input type="text" name="namesurname" id="namesurname" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Yorum</label>
            <textarea name="comment" id="comment" class="form-control" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label for="description">Resim Link</label>
            <textarea name="imageUrl" id="imageUrl" class="form-control" rows="5"></textarea>
        </div>


        <br>
        <button type="submit" class="btn btn-primary">Ekle</button>

    </form>


@endsection
