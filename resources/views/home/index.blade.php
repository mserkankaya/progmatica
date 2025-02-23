@extends('user.shared.user_layout')

@section('content')

    <section class="slider_section">
        <div class="slider_container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                        01
                    </li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1">
                        02
                    </li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2">
                        03
                    </li>
                </ol>
                <div class="carousel-inner">
                    @if(!empty($sliders))
                        @foreach($sliders as $index => $item)
                            <div class="carousel-item @if($index == 0) active @endif">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 px-0">
                                            <div class="img-box">
                                                <img src="{{$item->imageUrl}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="detail-box">
                                                <h1>
                                                    {{$item->title}}
                                                </h1>
                                                <p>
                                                    {{$item->description}}
                                                </p>
                                                <a href="">
                                                    Bize Ulaşın
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1>Slider Bulunamadı</h1>
                    @endif
                </div>
                <div class="carousel_btn-box">
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="sr-only">Önceki</span>
                    </a>
                    <img src="{{asset('user/images/line.png')}}" alt="" />
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="sr-only">Sonraki</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- end slider section -->
    </div>
    <!-- end hero area -->

    <!-- service section -->

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

    <!-- end service section -->

    <!-- portfolio section -->

    <section class="portfolio_section">
        <div class="heading_container text-center">
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

<br>
<br>
<br>
<br>
<br>
    <section class="started_section layout_padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Şimdi <span>Başlama</span> Zamanı <br>
                                Projenizi Hayata Geçirelim
                            </h2>
                            <p>
                                İlham verici tasarımlar ve güçlü yazılım altyapısıyla dijital dünyada fark yaratın.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 offset-md-1">
                    <div class="btn-box">
                        <a href="">
                            Bize Ulaşın
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="agency_section layout_padding-bottom">
        <div class="agency_container ">
            @if(!empty($abouts))
                @foreach($abouts as $item)
                    <div class="box ">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    Progmatica <span>Hakkında</span>
                                </h2>
                            </div>
                            <p>
                                {{$item->description}}
                            </p>
                            <a href="">
                                Daha Fazla
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <h1>Hakkımızda Bulunamadı</h1>
            @endif
        </div>
    </section>


{{--    <section class="contact_section layout_padding">--}}
{{--        <div class="container px-0">--}}
{{--            <div class="heading_container">--}}
{{--                <h2 class="">--}}
{{--                    Bize<span> Ulaşın</span>--}}
{{--                </h2>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        <div class="container container-bg">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-8 col-md-7 px-0">--}}
{{--                    <div class="map_container">--}}
{{--                        <div class="map-responsive">--}}
{{--                            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-5 col-lg-4 px-0">--}}
{{--                    <form action="">--}}
{{--                        <div>--}}
{{--                            <input type="text" placeholder="Adınız" />--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <input type="email" placeholder="Email Adresiniz" />--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <input type="text" placeholder="Telefon Numaranız" />--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            <input type="text" class="message-box" placeholder="Mesajınız" />--}}
{{--                        </div>--}}
{{--                        <div class="d-flex ">--}}
{{--                            <button>--}}
{{--                                GÖNDER--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    <section class="client_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Müşterilerimiz <span>Hakkımızda</span> Ne Diyor?
                </h2>
            </div>
            @if(!empty($clients))
                @foreach($clients as $item)
                    <div class="box">
                        <div class="client_id">
                            <div class="name">
                                <h4>
                                    {{$item->namesurname}}
                                </h4>
                            </div>
                            <div class="img-box">
                                <img src="{{asset('user/images/client.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="detail-box">
                            <p>
                               {{$item->comment}}
                            </p>
                            <img src="{{asset('user/images/quote.png')}}" alt="">
                        </div>
                    </div>
                @endforeach
            @else
                <h1>Müşteri yorumu bulunamadı</h1>
            @endif
        </div>
    </section>

@endsection
