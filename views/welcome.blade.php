@extends('templates.home')
@section('content')
    <main class="container m-auto">
        <section class="row">
            <div class="col-md-12 mt-3">
                <h1 class="text-uppercase text-center">Bienvenido a Home 416</h1>
            </div>
            <div class="col-md-12 text-center mt-5">
                <a href="{{base('/auth/login')}}" class="btn btn-secondary">Iniciar Sessión</a>
            </div>
        </section>
    </main>
@endsection
