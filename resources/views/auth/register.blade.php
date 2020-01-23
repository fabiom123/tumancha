@extends('layout.login-template')

@section('content')
<div class="auth-form-wrapper px-4 py-5">
    <a href="#" class="noble-ui-logo d-block mb-2" style="color: #fff;
    text-align: center;
    display: flex !important;
    flex-direction: row;
    align-items: center;
    justify-content: center;"><p>Registro de usuario</p></a>
    <h5 class="text-muted font-weight-normal mb-4" style="color: #fff !important; text-align: center;">Ingresa tus datos para registrarte en <span>Mi Entel</span>
    </h5>
    <form class="registro-mancha" style="display: grid;
    grid-gap: .5em;
    align-items: center;" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="roles_id" value="1">
    <div class="form-group">
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Número de celular">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="nombre" name="name" placeholder="Nombres">
    </div>

    <div class="form-group">
        <input type="text" class="form-control" id="dni" name="dni" placeholder="Documento de indentidad">
    </div>

    <div class="form-group">
        <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
    </div>

    <div class="form-group">
        <input type="file" id="user-dropfy" class="img-categoria" name="url_image" class="border"/>
    </div>
    <!--<div class="form-group">
        <input type="password" class="form-control" id="password" name="password" autocomplete="current-password" placeholder="Password">
    </div>
    <div class="form-check form-check-flat form-check-primary">
        <label class="form-check-label">
        <input type="checkbox" class="form-check-input">
        Recuérdame
        </label>
    </div>-->
    <div class="mt-3">
        <button type="submit" class="btn btn-primary" style="width: 100%;
        background-color: #ff6702;
        padding: .8em;
        text-transform: uppercase;">REGISTRARME</button>
    </div>
    </form>
</div>
@endsection