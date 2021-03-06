@extends( 'layouts.layout' )

@section( 'title', "Home" )

@section( 'content' )
        <section class="home">
          <div class="cover">
            <div class="slider">
              <div class="container">
                <ul class="slider-cover">
                  <li>
                    <div class="producto">{!! Html::image( 'assets/images/slider/s1-producto.png', '' ) !!}</div>
                    <div class="txt"><h2>Mostaza <span>Clásica</span></h2><a href="{{ route( 'clasica-sq' ) }}">Ver Producto</a></div>
                    <div class="elemento1">{!! Html::image( 'assets/images/slider/s1-elemento1.png', '' ) !!}</div>
                    <div class="elemento2">{!! Html::image( 'assets/images/slider/s1-elemento2.png', '' ) !!}</div>
                    <div class="elemento3">{!! Html::image( 'assets/images/slider/s1-elemento3.png', '' ) !!}</div>
                  </li>
                  <li>
                    <div class="producto">{!! Html::image( 'assets/images/slider/s4-producto.png', '' ) !!}</div>
                    <div class="txt"><h2>Mostaza <span>Clásica en frasco</span></h2><a href="{{ route( 'clasica-frasco' ) }}">Ver Producto</a></div>
                    <div class="elemento1">{!! Html::image( 'assets/images/slider/s4-elemento1.png', '' ) !!}</div>
                    <div class="elemento2">{!! Html::image( 'assets/images/slider/s4-elemento2.png', '' ) !!}</div>
                    <div class="elemento3">{!! Html::image( 'assets/images/slider/s4-elemento3.png', '' ) !!}</div>
                  </li>
                  <li>
                    <div class="producto">{!! Html::image( 'assets/images/slider/s5-producto.png', '' ) !!}</div>
                    <div class="txt"><h2>Mostaza <span>Dijon</span></h2><a href="{{ route( 'dijon' ) }}">Ver Producto</a></div>
                    <div class="elemento1">{!! Html::image( 'assets/images/slider/s5-elemento1.png', '' ) !!}</div>
                    <div class="elemento2">{!! Html::image( 'assets/images/slider/s5-elemento2.png', '' ) !!}</div>
                    <div class="elemento3">{!! Html::image( 'assets/images/slider/s5-elemento3.png', '' ) !!}</div>
                  </li>
                  <li>
                    <div class="producto">{!! Html::image( 'assets/images/slider/s6-producto.png', '' ) !!}</div>
                    <div class="txt"><h2>Mostaza <span>Deli</span></h2><a href="{{ route( 'deli' ) }}">Ver Producto</a></div>
                    <div class="elemento1">{!! Html::image( 'assets/images/slider/s6-elemento1.png', '' ) !!}</div>
                    <div class="elemento2">{!! Html::image( 'assets/images/slider/s6-elemento2.png', '' ) !!}</div>
                    <div class="elemento3">{!! Html::image( 'assets/images/slider/s6-elemento3.png', '' ) !!}</div>
                  </li>
                  <li>
                    <div class="producto">{!! Html::image( 'assets/images/slider/s7-producto.png', '' ) !!}</div>
                    <div class="txt"><h2>Mostaza <span>Honey</span></h2><a href="{{ route( 'honey' ) }}">Ver Producto</a></div>
                    <div class="elemento1">{!! Html::image( 'assets/images/slider/s7-elemento1.png', '' ) !!}</div>
                    <div class="elemento2">{!! Html::image( 'assets/images/slider/s7-elemento2.png', '' ) !!}</div>
                    <div class="elemento3">{!! Html::image( 'assets/images/slider/s7-elemento3.png', '' ) !!}</div>
                  </li>
                  <li>
                    <div class="producto">{!! Html::image( 'assets/images/slider/s8-producto.png', '' ) !!}</div>
                    <div class="txt"><h2>Salsa <span>Inglesa</span></h2><a href="{{ route( 'inglesa' ) }}">Ver Producto</a></div>
                    <div class="elemento1">{!! Html::image( 'assets/images/slider/s8-elemento1.png', '' ) !!}</div>
                    <div class="elemento2">{!! Html::image( 'assets/images/slider/s8-elemento2.png', '' ) !!}</div>
                    <div class="elemento3">{!! Html::image( 'assets/images/slider/s8-elemento3.png', '' ) !!}</div>
                  </li>
                  <li>
                    <div class="producto">{!! Html::image( 'assets/images/slider/s9-producto.png', '' ) !!}</div>
                    <div class="txt"><h2>Salsa <span>BBQ clásica</span></h2><a href="{{ route( 'bbq-clasica' ) }}">Ver Producto</a></div>
                    <div class="elemento1">{!! Html::image( 'assets/images/slider/s9-elemento1.png', '' ) !!}</div>
                    <div class="elemento2">{!! Html::image( 'assets/images/slider/s9-elemento2.png', '' ) !!}</div>
                    <div class="elemento3">{!! Html::image( 'assets/images/slider/s9-elemento3.png', '' ) !!}</div>
                  </li>
                  <li>
                    <div class="producto">{!! Html::image( 'assets/images/slider/s10-producto.png', '' ) !!}</div>
                    <div class="txt"><h2>Salsa <span>BBQ chipotle</span></h2><a href="{{ route( 'bbq-chipotle' ) }}">Ver Producto</a></div>
                    <div class="elemento1">{!! Html::image( 'assets/images/slider/s10-elemento1.png', '' ) !!}</div>
                    <div class="elemento2">{!! Html::image( 'assets/images/slider/s10-elemento2.png', '' ) !!}</div>
                    <div class="elemento3">{!! Html::image( 'assets/images/slider/s10-elemento3.png', '' ) !!}</div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="descubre">
            <div class="img-back1"></div>
            <div class="img-back2"></div>
            <div class="container">
              <div class="icono-cubiertos"></div>
              <h2>Descubre nuevas recetas</h2>
              <p>¿Qué te gustaría cocinar hoy?</p>
            </div>
            <div class="recetas-home">
              <div id="tinderslide">
                <ul>
                  @foreach( $recipes as $recipe )
                  <li class="pane pane{{$recipe->id}}">
                    <div class="img">{!! Html::image( 'assets/images/recetas/' . $recipe->photo_small, $recipe->name ) !!}</div>
                    <div class="nombre">
                      <a href="{{ route( 'recipeSlug', [ $recipe->slug ] ) }}" class="receta">
                        {!! $recipe->name !!}
                      </a>
                    </div>
                    <div class="like"></div>
                    <div class="dislike"></div>
                  </li>
                  @endforeach
                </ul>
              </div>
              <a href="{{ route( 'recipes' ) }}" title="Ver más recetas." target="_self" class="btn-mas">Ver más recetas.</a>

              <div class="contador">
                <p><span class="remaining">0</span>/{{ count( $recipes ) }}</p>
              </div>

              <div class="actions">
                <a href="#" class="dislike"><i></i></a>
                <a href="#" class="like"><i></i></a>
              </div>

              <div id="status"></div>
            </div>
          </div>

          <div class="suscribete">
            <div class="container">
              <h3>Subscríbete ahora</h3>
              <div>
                <input type="text" placeholder="Ingresa tu correo electrónico">
                <a href="#"></a>
              </div>
            </div>
          </div>
        </section>
@endsection

@section( 'scripts' )
        @parent

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <!--[if lt IE 9]>
            {!! Html::script('assets/js/bootstrap.min.js') !!}
            {!! Html::script('assets/js/bootstrap.min.js') !!}
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
        {!! Html::script('assets/plugins/tinder/jquery.min.js') !!}
        {!! Html::script('assets/plugins/tinder/jquery.transform2d.js') !!}
        {!! Html::script('assets/plugins/tinder/jquery.jTinder.js') !!}
        {!! Html::script('assets/plugins/bxslider/jquery.bxslider.min.js') !!}
        {!! Html::script('assets/plugins/parallax/parallax.js') !!}
        {!! Html::script('assets/plugins/drag-and-drop/jquery.ezdz.min.js') !!}
        {!! Html::script('assets/js/main.js') !!}
        <script>
            $('.slider-cover').bxSlider({
                mode: 'fade',
                controls: false,
                captions: true
            });
            $('.slider-acerca').bxSlider({
                mode: 'fade',
                controls: false,
                captions: true
            });
            $('[type="file"]').ezdz({
                text: 'SUBE TU FOTO',
                validators: {
                    maxWidth:  600,
                    maxHeight: 600
                },
                reject: function(file, errors) {
                    if (errors.mimeType) {
                        alert(file.name + ' must be an image.');
                    }

                    if (errors.maxWidth) {
                        alert(file.name + ' debe ser maximo de 600px de ancho ');
                    }

                    if (errors.maxHeight) {
                        alert(file.name + ' debe ser maximo de 600px de altura ');
                    }
                }
            });
        </script>
@endsection