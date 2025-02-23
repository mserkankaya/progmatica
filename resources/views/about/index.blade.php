@extends('user.shared.user_layout')

@section('content')

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



@endsection
