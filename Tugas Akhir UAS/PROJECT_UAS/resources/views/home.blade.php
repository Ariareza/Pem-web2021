@extends('layout.app')
@section('content')

    <style>
        header.masthead{
            padding-top: 10rem;
            background:url("assets/img/bgasli.svg");
            background-position: center;
            background-attachment: scroll;
            background-size: 100%;
        }
        .word{
            
            background:grey
            background-size:100%

            
        }
    </style>
    <body>
        <header class="masthead">
            <div class="container px-4 px-lg-1">
                <div class="row gx-4 gx-lg-1 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                       <img src="assets/img/logo2.svg" alt="">
                        <hr class="divider" />
                    </div>
                    <div class="word col-lg-8 align-self-baseline">
                        <h2 style="font-family:Papyrus; font-size:55px" class="text-white-75 mb-4" style="font-size:1.15rem;">Welcome To Vape Store</h2>
                        
                    </div>
                </div>
            </div>
        </header>
    </body>
@endsection