<!DOCTYPE html>
<html lang="pt">
@include('header')
<body>
    <main>
        <div class="container">
        <div class="my-3 d-flex justify-content-between align-items-end" >
            <img src="{{ asset('images/logo.jpg') }}" class="logo-img " alt="logo">
            <a class="btn btn-success " href="{{ route ('login-admin.index') }}" role="button">Login</a>
        </div>
            @yield('content')
        </div>
        
    </main>
</body>
@include('rodape')