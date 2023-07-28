<!DOCTYPE html>
<html lang="pt">
@include('header')
<body>
    <main>
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            {{ session()->get('success')}}
        </div>
        @endif
        @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            {{ session()->get('error')}}
        </div>
        @endif
        
        <div class="container">
            <div class="my-3 d-flex justify-content-between align-items-end" >
                <a href="{{ route ('index') }}" ><img class="logo-img-sm logo-img-md" src="{{ asset('/storage/images/logo.jpg') }}"  alt="logo"></a>
                @if (auth()->check())
                <h4 class="green">Logado como {{ auth()->user()->name}} </h3>
                    <a class="btn btn-success" href="{{ route ('admin.index') }}" role="button">Administração</a>
                <a class="btn btn-success" href="{{ route ('login-admin.destroy') }}" role="button">Logout</a>
                @else 
                <a class="btn btn-success " href="{{ route ('login-admin.index') }}" role="button">Login</a>
                @endif
            </div>
            @yield('content')
        </div>
        
    </main>
</body>
@include('rodape')