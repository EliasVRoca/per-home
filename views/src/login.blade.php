@extends('templates.home')
@section('content')
    <style>
        .h-dvh {
            height: 100dvh;
        }
    </style>
    <main class="container m-auto">
        <div class="w-100 h-dvh d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{ assets('/undraw_login_re_4vu2.svg') }}" width="200" class="rounded" alt="">
                </div>
                <div class="col-md-12">
                    <form class="col-md-8 mt-4 mx-auto">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
                            <input type="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraceña</label>
                            <input type="password" required class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                        </div>
                        <div class="col-md-12 text-center">
                          <button type="submit" class="btn btn-primary">Iniciar Sessión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
