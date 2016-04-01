@extends( 'layouts.layout' )

@section( 'title', "Mostaza BBQ Chipotle" )

@section( 'content' )
        <div class="cover-interior-b"></div>

        <section class="detalle-producto">
            <div class="container">
                <div class="left">
                    {!! Html::image( 'assets/images/slider/s10-producto.png', '' ) !!}
                </div>
                <div class="right">
                    <div class="descripcion">
                        <h2>Mostaza <span>BBQ Chipotle</span></h2>
                        <p>Salsa hecha a base de tomate de la más alta calidad, con sabor a chipotle ahumado, creada especialmente para los conocedores. No contiene almidones.</p>
                    </div>
                    <div class="ingredientes">
                        <h3>Ingredientes</h3>
                        <p>Vinagre, azúcar, pasta de tomate, aga, sal, chile (pimienta de cayena), saborizante natural humo, harina de mostaza, chile chipotle, paprika ahumada, cebolla en polvo, saborizante natural, especias, ajo en polvo, y benzonato de sodio (como conservador).</p>
                    </div>
                    <div class="informacion">
                        <h3>Información Nutrimental</h3>
                        <div class="line"></div>
                        <p>Cont. Neto: 12oz (396g)</p>
                        <p>Porción: 3 Calorías: 208</p>
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
                                </tr>
                                <tr>
                                  <td>Grasa saturada</td>
                                  <td>0g</td>
                                </tr>
                                <tr>
                                  <td>Grasas Trans</td>
                                  <td>0g</td>
                                </tr>
                                <tr>
                                  <td>Colesterol</td>
                                  <td>0g</td>
                                </tr>
                                <tr>
                                  <td>Sodio</td>
                                  <td>1.5g</td>
                                </tr>
                                <tr>
                                  <td>Carbohidratos totales</td>
                                  <td>39g</td>
                                </tr>
                                <tr>
                                  <td>Fibra Dietética</td>
                                  <td>3g</td>
                                </tr>
                                <tr>
                                  <td>Azúcares</td>
                                  <td>34g</td>
                                </tr>
                                <tr>
                                  <td>Proteína</td>
                                  <td>2g</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="f-table">* Porcentaje de valor diario (DV) estan basados en una dieta de 2,000 calorías.</p>
                    </div>
                </div>
                <p>{!! Html::link( 'productos', 'Todos los productos', [ 'class' => 'boton', 'id' => '' ] ) !!}</p>
            </div>
        </section>
        <section class="grid">
            <div class="container">
                <h2>Recetas</h2>
                <p>que podrías preparar con Mostaza BBQ Chipotle</p>
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
                      {!! Html::image( 'assets/images/recetas/' . $recipe->photo, $recipe->name ) !!}
                    </div>
                    <p class="nombre">{{$recipe->name}}</p>
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
@endsection