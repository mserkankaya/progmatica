@extends('user.shared.user_layout')

@section('content')

    <section class="contact_section layout_padding-bottom layout_padding2-top">
        <div class="container px-0">
            <div class="heading_container">
                <h2 class="">
                    Bize<span> Ulaş</span>ın
                </h2>
            </div>

            <!-- Success message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="container container-bg">
            <div class="row">
                <div class="col-lg-8 col-md-7 px-0">
                    <div class="map_container">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 px-0">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div>
                            <input type="text" name="name" placeholder="Adınız" />
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Soyadınız" />
                        </div>
                        <div>
                            <input type="text" name="phone" placeholder="Telefon Numaranız" />
                        </div>
                        <div>
                            <input type="text" class="message-box" name="message" placeholder="Mesajınız" />
                        </div>
                        <div class="d-flex">
                            <button type="submit">
                                Gönder
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
