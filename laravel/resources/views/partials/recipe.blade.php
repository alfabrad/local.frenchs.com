              <a href="{{ action( 'RecipeController@index', [ 'id' => $recipe->id ] ) }}" class="receta">
                <p class="categoria {{ $class }}">{{ $recipe->categorie->categorie_name }}</p>
                <div class="image">
                  {!! Html::image( 'assets/images/recetas/' . $recipe->photo_small, $recipe->name ) !!}
                </div>
                <p class="nombre">{!! $recipe->name !!}</p>
                <p class="porciones">{{ $recipe->portions }} porciones</p>
                <p class="tiempo">Tiempo de preparación: {{ $recipe->preparation_time }}</p>
                <div class="ranking">
                  <span class="stars s{{ $recipe->ranking }}"></span>
                </div>
              </a>