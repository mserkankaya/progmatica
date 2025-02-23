@extends('admin.shared.admin_layout')

@section('content')
    <h1>Hakkımızda Güncelle</h1>

    <form action="{{ route('yonetim.calismalar.update', $adminportfolio->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="imageUrl">Resim Url</label>
            <input type="text" name="imageUrl" id="imageUrl" class="form-control" value="{{ old('imageUrl', $adminportfolio->imageUrl) }}" required>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>

@endsection
