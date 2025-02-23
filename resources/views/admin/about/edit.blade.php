@extends('admin.shared.admin_layout')

@section('content')
    <h1>Hakkımızda Güncelle</h1>

    <form action="{{ route('yonetim.hakkimizda.update', $adminabout->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Başlık</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $adminabout->title) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Açıklama</label>
            <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description', $adminabout->description) }}</textarea>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>

@endsection
