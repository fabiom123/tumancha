@extends('layout.home')
@section('content')
<div class="page-content categoria-mancha-container">
    <div class="card mb-3 tabs-mancha">
        <div class="card-body container-miembros">
            <div class="d-flex justify-content-between align-items-baseline mb-3">

                <h6 class="mb-0 inbox-mancha-title">Tus beneficios por mancha</h6>

                <div class="dropdown mb-2">

                    <button class="btn p-0" type="button" id="add-miembro-mancha" data-toggle="modal" data-target="#miembroModal">

                        <i class="icon-lg text-muted pb-3px" data-feather="user-plus"></i>

                    </button>

                </div>

            </div>
            <div class="d-flex flex-column miembros-cat">
                <?php foreach ($grupos as $grupo){?>
                    <a href="/beneficio/grupo/{!! $grupo->id_categoria !!}" class="d-flex align-items-center border-bottom py-3">

                        <div class="mr-3">

                        <img src="{{URL::asset('/uploads/categoria/'.$grupo->url_icono)}}" class="rounded-circle avatar-mancha" alt="user">

                        </div>

                        <div class="w-100">

                        <div class="d-flex justify-content-between">

                            <h6 class="text-body mb-2">{!! $grupo->nombre !!}</h6>

                            <p class="text-muted tx-12"><i data-feather="eye"></i></p>

                        </div>

                        <p class="text-muted tx-13">Hey! there I'm available...</p>

                        </div>

                    </a>
                <?php } ?>    
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascripts')
@endsection