@extends('admin.shared.admin_layout')

@section('content')
    <h1>Yorum Düzenle</h1>

    <form action="{{ route('yonetim.yorumlar.update',$adminclient->id) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="namesurname">Ad Soyad</label>
            <input type="text" name="namesurname" id="namesurname" class="form-control" value="{{ old('namesurname', $adminclient->namesurname)}}" required>
        </div>

        <div class="form-group">
            <label for="comment">Yorum</label>
            <textarea name="comment" id="comment" class="form-control" rows="5" value="{{ old('comment', $adminclient->comment) }}" required  ></textarea>
        </div>

        <div class="form-group">
            <label for="imageUrl">Resim Link</label>
            <textarea name="imageUrl" id="imageUrl" class="form-control" rows="5" value="{{ old('imageUrl', $adminclient->imageUrl) }}"></textarea>
        </div>


        <br>
        <button type="submit" class="btn btn-primary">Güncelle</button>

    </form>


@endsection
