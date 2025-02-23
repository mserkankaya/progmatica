@extends('admin.shared.admin_layout')

@section('content')
    <h1>Yeni Slider Ekle</h1>

    <form action="{{ route('yonetim.slider.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Başlık</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Açıklama</label>
            <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label for="imageUrl">Resim Url</label>
            <textarea name="imageUrl" id="imageUrl" class="form-control" rows="5" required></textarea>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Ekle</button>

    </form>


@endsection
