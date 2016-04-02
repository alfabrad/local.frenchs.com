@extends( 'layouts.layout' )

@section( 'title', "Mostaza Deli SQ" )

@section( 'content' )
        <div class="cover-interior-b"></div>

        <section class="detalle-producto">
            <div class="container">
                <div class="left">
                    {!! Html::image( 'assets/images/slider/s6-producto.png', '' ) !!}
                </div>
                <div class="right">
                    <div class="descripcion">
                        <h2>Mostaza <span>Deli</span></h2>
                        <p>French’s te ofrece el sabor concentrado de la mostaza. Elaborada especialmente para los paladares más exigentes, la Mostaza Deli está preparada con la más fina selección de semillas y especias.</p>
                    </div>
                    <div class="ingredientes">
                        <h3>Ingredientes</h3>
                        <p>Vinagre destilado, agua, semilla de mostaza grado 1, sal, especias, cúrcuma, saborizantes naturales,</p>
                    </div>
                    <div class="informacion">
                        <h3>Información Nutrimental</h3>
                        <div class="line"></div>
                        <p>Cont. Neto: 12oz (340g)</p>
                        <p>Porción: 1 cucharada (5g) Total: 68 Calorías: 5</p>
                        <table>
                            <thead>
                                <tr>
                                  <th colspan="2">Cantidades por porción.</th>
                                  <th>0% DV*</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>Grasa Total</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Grasa saturada</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Grasas Trans</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Colesterol</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Sodio</td>
                                  <td>80g</td>
                                  <td>3%</td>
                                </tr>
                                <tr>
                                  <td>Carbohidratos totales</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Fibra</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Azúcares</td>
                                  <td><0g</td>
                                  <td>0%</td>
                                </tr>
                                <tr>
                                  <td>Proteína</td>
                                  <td>0g</td>
                                  <td>0%</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="f-table">* Porcentaje de valor diario (DV) estan basados en una dieta de 2,000 calorías.</p>
                    </div>
                </div>
                <p>{!! Html::link( 'productos', 'Todos los productos', [ 'class' => 'boton', 'id' => '' ] ) !!}</p>
            </div>
        </section>
        @if ( count( $recipes ) > 0 )
        <section class="grid">
            <div class="container">
                <h2>Recetas</h2>
                <p>que podrías preparar con Mostaza Dijon SQ</p>
                <div class="content-grid">
                  @foreach ( $recipes as $recipe )
                  <a href="{{ action( 'RecipeController@index', [ 'id' => $recipe->id ] ) }}" class="receta">
                    <p class="categoria b2">
                      @foreach ( $categories as $categorie )
                        @if ( $categorie->id == $recipe->categorie )
                      {{$categorie->categorie_name}}
                        @endif
                      @endforeach
                    </p>
                    <div class="image">
                      {!! Html::image( 'assets/images/recetas/' . $recipe->photo_small, $recipe->name ) !!}
                    </div>
                    <p class="nombre">{!!$recipe->name!!}</p>
                    <p class="porciones">{{$recipe->portions}} porciones</p>
                    <p class="tiempo">Tiempo de preparación: {{$recipe->preparation_time}}</p>
                    <div class="ranking">
                      <span class="stars s{{$recipe->ranking}}"></span>
                    </div>
                  </a>
                  @endforeach
                </div>
                <a id="" href="#" class="btn-mas">Ver más recetas</a>
            </div>
        </section>
        @endif
@endsection