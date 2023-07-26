<!DOCTYPE html>
<html lang="pt">
@include('header')
<body>
    <main>
        <div class="container">
            <div class="card box-shadow green">
                @yield('content')
            </div>
        </div>
    </main>
</body>
@include('rodape')