@extends('layout.home')

@section('content')

<div class="page-content categoria-mancha-container">

    <div class="card mb-3">

        <div class="card-body">

            <div class="d-flex justify-content-between align-items-baseline mb-3">
              @if($tipo=='persona')         
                <h6 class="mb-0 inbox-mancha-title">{!! Auth::user()->name !!} estos son tus beneficios</h6>
              @else
                <h6 class="mb-0 inbox-mancha-title">para {!! $categoria->nombre !!} estos son los beneficios</h6>
              @endif
            </div>

            <div class="d-flex flex-column">
              <?php 
                $cont = 0;
                foreach ($lista_beneficios as $beneficio){
                        if ($beneficio->tipo == "personal") {?>
                          <a href="#" class="beneficio-item border-bottom pb-3">

                            <div class="mr-3">

                              <img src="{{ asset('assets/images/beneficio/'.$beneficio->url_beneficio) }}" class="rounded-circle wd-60" alt="user">

                            </div>

                            <div class="w-100">

                              <div class="d-flex justify-content-between">

                                <h6 class="text-body mb-2">{!! $beneficio->nombre !!}</h6>

                              </div>

                              <p class="text-muted tx-13">Hey! there I'm available...</p>

                            </div>

                          </a>
              <?php     } elseif ($beneficio->tipo == "personalizado") {
                          $cont++;
                          if ($cont <= 2) {?>
                          <a href="#" class="beneficio-item border-bottom pb-3">

                            <div class="mr-3">

                              <img src="{{ asset('assets/images/beneficio/'.$beneficio->url_beneficio) }}" class="rounded-circle wd-60" alt="user">

                            </div>

                            <div class="w-100">

                              <div class="d-flex justify-content-between">

                                <h6 class="text-body mb-2">{!! $beneficio->nombre !!}</h6>
                                <span class="badge badge-danger">Solo para ti</span> 
                              </div>

                              <p class="text-muted tx-13">Hey! there I'm available...</p>
                              
                            </div>

                          </a>
              <?php 
                          }
                        }else{ ?>
                          <a href="#" class="beneficio-item border-bottom pb-3">

                            <div class="mr-3">

                              <img src="{{ asset('assets/images/beneficio/'.$beneficio->url_beneficio) }}" class="rounded-circle wd-60" alt="user">

                            </div>

                            <div class="w-100">

                              <div class="d-flex justify-content-between">

                                <h6 class="text-body mb-2">{!! $beneficio->nombre !!}</h6>

                              </div>

                              <p class="text-muted tx-13">Hey! there I'm available...</p>

                            </div>

                          </a>
              <?php     }
                }
              ?>    
            </div>

        </div>

    </div>

</div>

@endsection

@section('javascripts')

@endsection