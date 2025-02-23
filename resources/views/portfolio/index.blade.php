@extends('user.shared.user_layout')

@section('content')

    <section class="portfolio_section">
        <div class="heading_container text-center">
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2>
                Çalış<span>ma</span>larımız
            </h2>
            <p>
                Yenilikçi ve etkili çözümlerle hayata geçirdiğimiz projelerimizle sektördeki farkımızı ortaya koyuyoruz. Her bir işimiz, müşteri memnuniyetini ön planda tutarak tasarlandı.
            </p>
        </div>
        <div class="portfolio_container layout_padding">
            @if(!empty($portfolios))
                <div class="row justify-content-center">
                    @foreach($portfolios as $index => $item)
                        <div class="col-lg-6 mb-4">
                            <div class="img-box" style="margin: 0 auto;">
                                <img src="{{ $item->imageUrl }}" alt="" class="img-fluid" style="width: 100%; height: 400px; object-fit: cover;">
                                <div class="btn-box">
                                    <a href="" class="btn-1"></a>
                                    <a href="" class="btn-2"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <h1>Çalışma Bulunamadı</h1>
            @endif
        </div>
    </section>

@endsection
