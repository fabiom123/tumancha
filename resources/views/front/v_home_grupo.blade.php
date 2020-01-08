@extends('layout.home')
@section('content')

<div class="page-content categoria-mancha-container">
    <ul class="nav mb-2 nav-grupo-mancha">
        <li class="nav-item mancha-categoria">
            <a class="nav-categoria title-mancha" href="#">Familia</a>
            <img src="assets/images/mancha/surf.jpg" width="80" height="80" class="d-inline-block align-top" alt="">
            <a class="nav-categoria active description-mancha" href="#">Surfing</a>
        </li>
        <li class="nav-item mancha-categoria">
            <a class="nav-categoria title-mancha" href="#">Amigos</a>
            <img src="assets/images/mancha/futbol.jpg" width="80" height="80" class="d-inline-block align-top" alt="">
            <a class="nav-categoria active description-mancha" href="#">Futbol</a>
        </li>
        <li class="nav-item mancha-categoria">
            <a class="nav-categoria title-mancha" href="#">Otros</a>
            <img src="assets/images/mancha/canto.jpg" width="80" height="80" class="d-inline-block align-top" alt="">
            <a class="nav-categoria active description-mancha" href="#">Salidas</a>
        </li>
    </ul>
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline mb-3">
                <h6 class="mb-0 inbox-mancha-title">Tus Manchas</h6>
            </div>
            <div class="d-flex flex-column">
            <a href="#" class="d-flex align-items-center border-bottom pb-3">
                <div class="mr-3 grupo-miembro-mancha">
                    <p>10</p>
                </div>
                <div class="w-100">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-body mb-2">Leonardo Payne</h6>
                        <p class="text-muted tx-12 mancha-miembro-menu"><i data-feather="more-horizontal"></i></p>
                    </div>
                    <p class="text-muted tx-13">Hey! there I'm available...</p>
                </div>
            </a>
            <a href="#" class="d-flex align-items-center border-bottom py-3">
                <div class="mr-3 grupo-miembro-mancha">
                    <p>8</p>
                </div>
                <div class="w-100">
                <div class="d-flex justify-content-between">
                    <h6 class="text-body mb-2">Carl Henson</h6>
                    <p class="text-muted tx-12 mancha-miembro-menu"><i data-feather="more-horizontal"></i></p>
                </div>
                <p class="text-muted tx-13">I've finished it! See you so..</p>
                </div>
            </a>
            <a href="#" class="d-flex align-items-center border-bottom py-3">
                <div class="mr-3 grupo-miembro-mancha">
                    <p>2</p>
                </div>
                <div class="w-100">
                <div class="d-flex justify-content-between">
                    <h6 class="text-body mb-2">Jensen Combs</h6>
                    <p class="text-muted tx-12 mancha-miembro-menu"><i data-feather="more-horizontal"></i></p>
                </div>
                <p class="text-muted tx-13">This template is awesome!</p>
                </div>
            </a>
            </div>
        </div>
    </div>
    <div class="beneficio-mancha">
        <div id="progressbar1" class="mx-auto"><span class="progres-tipo">GB</span></div>
        <div class="progress-mancha">
            <button type="button" class="btn btn-primary" style="background: white;
            color: #000;
            letter-spacing: 1px;
            font-weight: 600;">Compartir</button>
            <div class="barra-gb">
             
                <input type="range" class="custom-range" name="rangeGbInput" id="ageInputId" value="16" min="1" max="16" oninput="ageOutputId.value = ageInputId.value">
                <p>Puedes compartir <output name="ageOutputName" id="ageOutputId">16</output> GB</p>

            </div>
        </div>
    </div>
</div>

@endsection
@section('javascripts')
@endsection