@extends('admin.shared.admin_layout')

@section('content')

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-3">
                            <div>
                                <h5 class="card-title fw-semibold">Hakkımızda Listesi</h5>
                            </div>
                            <!-- Yeni Ekle Butonu -->
                            <a href="{{ route('yonetim.hakkimizda.create') }}" class="btn btn-primary">Yeni Ekle</a>
                        </div>

                        <table class="table table-bordered w-100 mt-3">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Başlık</th>
                                <th>Açıklama</th>
                                <th>Durum</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($adminabout as $about)
                                <tr>
                                    <td>{{ $about->id }}</td>
                                    <td>{{ $about->title }}</td>
                                    <td>{{ $about->description }}</td>
                                    <td>{{ $about->status == 1 ? 'Aktif' : 'Pasif' }}</td>
                                    <td>
                                        <a href="{{ route('yonetim.hakkimizda.edit', $about->id) }}" class="btn btn-warning btn-sm">Düzenle</a>
                                        <form action="{{ route('yonetim.hakkimizda.destroy', $about->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Sil</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
