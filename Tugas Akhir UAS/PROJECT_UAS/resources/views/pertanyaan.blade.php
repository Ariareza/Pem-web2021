@extends('layout.app')
@section('content')

<style>
    header.masthead{
        padding-top: 10rem;
        background: url("assets/img/bgasli.svg");
        background-position: center;
        background-attachment: scroll;
        background-size: 100%;
        
    }
</style>

    <body>
        <header class="masthead">
            <div class="container">
                <form action="{{ route('simpan-pertanyaan') }}" method="post">
                    {{ csrf_field()}}
                    <div class="row mb-2">
                        <div class="col">
                            <textarea style="width:100%; background:#C4C4C4; border-radius: 1rem;" rows="20" name="comment" id="comment" placeholder="Silahkan ajukan pertanyaan..."></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <input type="submit" class="btn btn-primary" value="Kirim Pertanyaan">
                        </div>
                    </div>
                </form>
            </div>
        </header>
    </body>


@endsection