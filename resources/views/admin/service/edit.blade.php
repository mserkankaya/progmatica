@extends('admin.shared.admin_layout')

@section('content')
    <h1>Hizmetler Güncelle</h1>

    <form action="{{ route('yonetim.hizmetler.update', $adminservice->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Başlık</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $adminservice->title) }}" required>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>

@endsection
