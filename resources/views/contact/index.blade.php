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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25436.930658495632!2d38.75760912895202!3d37.16182138975896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x153471bb734eb267%3A0xf53e797984e1a59a!2zxZ5hbmzEsXVyZmEgQsO8ecO8a8WfZWhpciBCZWxlZGl5ZXNp!5e0!3m2!1str!2str!4v1740270193107!5m2!1str!2str" width="760" height="580" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 px-0">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div>
                            <input type="text" name="name" placeholder="Adınız - Soyadınız" />
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Email Adresiniz" />
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
