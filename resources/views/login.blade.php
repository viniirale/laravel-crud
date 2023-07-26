@extends('base')

@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header green">Login</div>
                <div class="card-body">
                    <form action="{{ route('login-admin.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Digite seu email" value="joaodasilva@email.com">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password" placeholder="Digite sua senha" value="1234">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Lembrar de mim</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <a href="{{ route ('index') }}">Index</a>

    <h2>Login</h2>

    <form action="{{ route('login.store')}}" method="post">
        @csrf
        <input type ="text" name="email" value="joaodasilva@email.com">
        <input type ="password" name="password" value="1234">
        <button type="submit">Login</button>
    </form> --}}
@endsection