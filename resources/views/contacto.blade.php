@extends( 'layouts.layout' )

@section( 'title', "Contacto" )

@section( 'content' )
        <div class="cover-interior-c"></div>

        <section class="contacto">

            <div class="title">
                <div class="container">
                    <h2>En <span>French’s</span><br>nos complace mucho tu visita.</h2>
                    <p>Si tienes una gran idea, saludo o comentario,<br>compártelo con nosotros.</p>
                </div>
            </div>

            <div class="content-form">
                <div class="container">
                    <p>Para poder responder a tu solicitud, ingresa la siguiente información:</p>
                    {!! Form::open( [ 'route' => 'sendContact', 'method' => 'POST' ] ) !!}
                        <div class="left">
                            {!! Form::text( 'name', null, [ 'placeholder' => 'NOMBRE*' ] ) !!}
                        </div>
                        <div class="right">
                            {!! Form::email( 'email', null, [ 'placeholder' => 'CORREO ELECTRÓNICO*' ] ) !!}
                        </div>
                        <div class="div100">
                            {!! Form::textarea( 'comments', null, [ 'placeholder' => 'COMENTARIO' ] ) !!}
                        </div>
                    {!! Form::submit( 'Enviar', [ 'class' => 'boton' ] ) !!}
                    {!! Form::close() !!}
                </div>
            </div>

        </section>
@endsection