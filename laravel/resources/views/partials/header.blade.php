@section( 'header' )
        <header>
            <div class="head">
                <div class="hamburguesa"></div>
                <div class="btn-close-menu"></div>
                <a href="{{ route( 'home' ) }}"><h1 class="logo"><span>French's</span></h1></a>
                <nav class="menu">
                    <ul>
                        <li><a href="{{ route( 'about' ) }}">SOBRE NOSOTROS</a></li>
                        <li><a href="{{ route( 'products' ) }}">PRODUCTOS</a></li>
                        <li><a href="{{ route( 'recipes' ) }}">RECETAS</a></li>
                        <li><a href="{{ route( 'contact' ) }}">CONTACTO</a></li>
                    </ul>
                </nav>
                <div class="redes">
                    <ul>
                        <li><a target="_blank" href="" class="fa fa-instagram"></a></li>
                        <li><a target="_blank" href="" class="fa fa-pinterest"></a></li>
                        <li><a target="_blank" href="" class="fa fa-facebook"></a></li>
                    </ul>
                </div>
            </div>
        </header>
@endsection