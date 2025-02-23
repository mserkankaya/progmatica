@extends('admin.shared.admin_layout')

@section('content')
    <h1>Slider Güncelle</h1>

    <form action="{{ route('yonetim.slider.update', $adminslider->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Başlık</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $adminslider->title) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Açıklama</label>
            <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description', $adminslider->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="imageUrl">Resim Url</label>
            <textarea name="imageUrl" id="imageUrl" class="form-control" rows="5" required>{{ old('imageUrl', $adminslider->imageUrl) }}</textarea>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>

@endsection
