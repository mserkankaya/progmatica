@extends('user.shared.user_layout')

@section('content')

    <section class="service_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Hiz<span>met</span>lerimiz
                </h2>
                <p>
                    Müşterilerimize en iyi çözümleri sunmak için geniş bir hizmet yelpazesi sunuyoruz.
                </p>
            </div>
            @if($services)
                <div class="row">
                    @foreach($services as $item)
                        <div class="col-lg-4 mb-4 d-flex flex-column align-items-center">
                            <div class="img-container">
                                <div class="img-box">
                                    <img src="{{$item->imageUrl}}" alt="" class="img-fluid" style="width: 250px;">
                                </div>
                            </div>
                            <div class="detail-container text-center mt-3">
                                <div class="detail-box">
                                    <h4>
                                        {{$item->title}}
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @else
                        <h1>Hizmet Bulunamadı</h1>
                    @endif
                </div>
                <div class="btn-box text-center mt-4">
                    <a href="">
                        Daha Fazla
                    </a>
                </div>
        </div>
    </section>
@endsection
