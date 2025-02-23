@extends('admin.shared.admin_layout')

@section('content')

    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-3">
                            <div>
                                <h5 class="card-title fw-semibold">Müşteri Yorumları Listesi</h5>
                            </div>
                            <a href="{{ route('yonetim.yorumlar.create') }}" class="btn btn-primary">Yeni Ekle</a>
                        </div>


                        <table class="table table-bordered w-100 mt-3">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Ad Soyad</th>
                                <th>Yorum</th>
                                <th>Durum</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($adminclient as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->namesurname }}</td>
                                    <td>{{ $client->comment }}</td>
                                    <td>{{ $client->status == 1 ? 'Aktif' : 'Pasif' }}</td>
                                    <td>
                                        <a href="{{ route('yonetim.yorumlar.edit', $client->id) }}" class="btn btn-warning btn-sm">Düzenle</a>
                                        <form action="{{ route('yonetim.yorumlar.destroy', $client->id) }}" method="POST" style="display:inline;">
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
