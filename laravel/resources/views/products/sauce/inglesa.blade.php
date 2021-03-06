@extends( 'layouts.layout' )

@section( 'title', "Salsa Inglesa" )

@section( 'content' )
        <div class="cover-interior-b"></div>

        <section class="detalle-producto">
            <div class="container">
                <div class="left">
                    {!! Html::image( 'assets/images/slider/s8-producto.png', '' ) !!}
                </div>
                <div class="right">
                    <div class="descripcion">
                        <h2>Salsa <span>Inglesa</span></h2>
                        <p>Dale un sabor diferente y natural a tus platillos con la salsa inglesa French’s.</p>
                        <p>No puede faltar en tu mesa: combina con todo.</p>
                    </div>
                    <div class="ingredientes">
                        <h3>Ingredientes</h3>
                        <p>156g y 312g: Vinagre, melaza, jarabe de maíz, agua, sal, azúcar, especias, anchoas, saborizantes naturales, ácido cítrico, semillas de apio, goma xantana y extracto de tamarindo.</p>
                        <p>Contiene: pescado y soya.</p>
                        <p>4kg: Vinagre, melaza, agua, jarabe de maíz, sal, colorante Caramelo clase iv, azúcar, especias, anchoas, saborizantes naturales, y extracto de tamarindo.</p>
                        <p>Contiene: soya.</p>
                    </div>
                    <div class="informacion">
                        <h3>Información Nutrimental</h3>
                        <div class="line"></div>
                        <table>
                            <thead>
                                <tr>
                                  <th>Porciones</th>
                                  <th>156g</th>
                                  <th>312g</th>
                                  <th>4kg</th>
                                </tr>
                                <tr>
                                  <th><strong>Cantidades por porción.</strong></th>
                                  <th>156g</th>
                                  <th>5g</th>
                                  <th>5g</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>Calorías</td>
                                  <td>120 Cal (510 kJ)</td>
                                  <td>4 Cal (17 kJ)</td>
                                  <td>4 Cal (17 kJ)</td>
                                </tr>
                                <tr>
                                  <td>Grasa Total</td>
                                  <td>0g</td>
                                  <td>0g</td>
                                  <td>0g</td>
                                </tr>
                                <tr>
                                  <td>Grasa saturada</td>
                                  <td>0g</td>
                                  <td>0g</td>
                                  <td>0g</td>
                                </tr>
                                <tr>
                                  <td>Grasas Trans</td>
                                  <td>0g</td>
                                  <td>0g</td>
                                  <td>0g</td>
                                </tr>
                                <tr>
                                  <td>Sodio</td>
                                  <td>1.4g</td>
                                  <td>45g</td>
                                  <td>43g</td>
                                </tr>
                                <tr>
                                  <td>Carbohidratos totales</td>
                                  <td>29g</td>
                                  <td>1g</td>
                                  <td>1g</td>
                                </tr>
                                <tr>
                                  <td>Fibra Dietética</td>
                                  <td>1g</td>
                                  <td>0g</td>
                                  <td>0g</td>
                                </tr>
                                <tr>
                                  <td>Azúcares</td>
                                  <td>15g</td>
                                  <td>0g</td>
                                  <td>1g</td>
                                </tr>
                                <tr>
                                  <td>Proteína</td>
                                  <td>2g</td>
                                  <td>0g</td>
                                  <td>0g</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="f-table">* Porcentaje de valor diario (DV) estan basados en una dieta de 2,000 calorías.</p>
                    </div>
                </div>
                <p>{!! Html::link( 'productos', 'Todos los productos', [ 'class' => 'boton', 'id' => '' ] ) !!}</p>
            </div>
        </section>
        {{-- Show recipes if are recipes made with this product --}}
        @if ( count( $recipes ) > 0 )
          @include( 'partials.productRecipes', [
                    'product' => 'Salsa Inglesa',
                    'recipes'  => $recipes
                  ] )
        @endif
@endsection