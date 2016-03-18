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
                        <p>Vinagre destilado, agua, melaza, jarábe de maíz, especias, colorizante caramelo, anchoas, saborizantes naturales (Soya), goma xantana, polvo de ajo deshidratado y extracto de tamarindo.</p>
                    </div>
                    <div class="informacion">
                        <h3>Información Nutrimental</h3>
                        <div class="line"></div>
                        <p>Cont. Neto: 12oz (340g)</p>
                        <p>Porción: 1 cucharada (5g) Total: 88 Calorías: 0</p>
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
                                  <td>65g</td>
                                  <td>1%</td>
                                </tr>
                                <tr>
                                  <td>Carbohidratos totales</td>
                                  <td>1g</td>
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
        <section class="grid">
            <div class="container">
                <h2>Recetas</h2>
                <p>que podrías preparar con Mostaza Dijon SQ</p>
                <div class="content-grid">
                    <a href="" class="receta">
                        <p class="categoria b2">Platillos</p>
                        <div class="image">
                            {!! Html::image( 'assets/images/recetas/receta2.jpg', 'Tiras de pollo con mostaza' ) !!}
                        </div>
                        <p class="nombre">Tiras de pollo con mostaza</p>
                        <p class="porciones">12 porciones</p>
                        <p class="tiempo">Timepo de preparación: 15 min.</p>
                        <div class="ranking">
                            <span class="stars s4"></span>
                        </div>
                    </a>
                    <a href="" class="receta">
                        <p class="categoria b2">Platillos</p>
                        <div class="image">
                            {!! Html::image( 'assets/images/recetas/receta2.jpg', 'Tiras de pollo con mostaza' ) !!}
                        </div>
                        <p class="nombre">Tiras de pollo con mostaza</p>
                        <p class="porciones">12 porciones</p>
                        <p class="tiempo">Timepo de preparación: 15 min.</p>
                        <div class="ranking">
                            <span class="stars s4"></span>
                        </div>
                    </a>
                    <a href="" class="receta">
                        <p class="categoria b2">Platillos</p>
                        <div class="image">
                            {!! Html::image( 'assets/images/recetas/receta2.jpg', 'Tiras de pollo con mostaza' ) !!}
                        </div>
                        <p class="nombre">Tiras de pollo con mostaza</p>
                        <p class="porciones">12 porciones</p>
                        <p class="tiempo">Timepo de preparación: 15 min.</p>
                        <div class="ranking">
                            <span class="stars s4"></span>
                        </div>
                    </a>
                </div>
                <a id="" href="#" class="btn-mas">Ver más recetas</a>
            </div>
        </section>
@endsection