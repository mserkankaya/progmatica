@extends('admin.shared.admin_layout')

@section('content')
    <h1>Yeni Hizmet Ekle</h1>

    <form action="{{ route('yonetim.hizmetler.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Başlık</label>
            <br>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Ekle</button>

    </form>


@endsection
