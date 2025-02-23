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
                        </div>


                        <table class="table table-bordered w-100 mt-3">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Başlık</th>
                                <th>Açıklama</th>
                                <th>Resim Link</th>
                                <th>Durum</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($adminservice as $service)
                                <tr>
                                    <td>{{ $service->id }}</td>
                                    <td>{{ $service->title }}</td>
                                    <td>{{ $service->description }}</td>
                                    <td>{{ $service->imageUrl }}</td>
                                    <td>{{ $service->status == 1 ? 'Aktif' : 'Pasif' }}</td>
                                    <td>
                                        <a href="{{ route('yonetim.hizmetler.edit', $service->id) }}" class="btn btn-warning btn-sm">Düzenle</a>
                                        <form action="{{ route('yonetim.hizmetler.destroy', $service->id) }}" method="POST" style="display:inline;">
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
