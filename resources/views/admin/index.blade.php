@extends('admin.shared.admin_layout')
@section('content')

    <div class="container mt-4">

        <div class="welcome-text">Progmatica Admin Sayfasına Hoş Geldiniz</div>
    </div>
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .welcome-text {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            padding: 15px;
            color: white;
            background: linear-gradient(45deg, #ff6a00, #ee0979);
            border-radius: 10px;
            margin-top: 15px;
            animation: fadeInUp 1s ease-in-out;
        }
    </style>


@endsection
