<html>
    <header>
    <img src="https://quantitas.net/sites/default/files/00%20-%20Colegio.png">
        <title>Colegio CRUD @yield('hola')</title>
        
    </header>
    <body>
        @section('sidebar')
            <h1>Colegio Manuela Beltran</h1>
        @show

        <div class="container">
            @yield('content')
            <hr align="left" noshade="noshade" size="2" width="80%" />

        </div>

        <footer>
            <p>  derechos reservados 2019</p>
        </footer>

        <h2></h2>

    </body>
    <style>
.header {
    color: #36A0FF;
    font-size: 27px;
    padding: 10px;
}

.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
body {background-color: yellow}

</style>
</html>