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
                                <i class="link-icon" data-feather="unlock"></i>
                              </div>

                              <p class="text-muted tx-13">Hey! there I'm available...</p>

                            </div>

                          </a>
              <?php     }
                }
              ?>  
              <?php foreach ($lista_nobeneficios as $nobeneficios){ ?>
                <a href="#" class="beneficio-item border-bottom pb-3">
                  <div class="mr-3">
                    @if ($nobeneficios->status_miembros == 0 and $nobeneficios->status_megas == 0)
                    <div class="green item" data-cantidad="100">
                      <div class="progress">
                        <img src="{{ asset('assets/images/beneficio/'.$nobeneficios->url_beneficio) }}" class="rounded-circle wd-60" alt="user">
                        <div class="inner">
                          <div class="percent"><span>100</span>%</div>
                          <div class="water"></div>
                          <div class="glare"></div>
                        </div>
                      </div>
                    </div>
                    @elseif ($nobeneficios->status_miembros == 0 and $nobeneficios->status_megas == 1)
                    <div class="green item" data-cantidad="50">
                      <div class="progress">
                        <img src="{{ asset('assets/images/beneficio/'.$nobeneficios->url_beneficio) }}" class="rounded-circle wd-60" alt="user">
                        <div class="inner">
                          <div class="percent"><span>50</span>%</div>
                          <div class="water"></div>
                          <div class="glare"></div>
                        </div>
                      </div>
                    </div>  
                    @endif
                  </div>

                  <div class="w-100">

                    <div class="d-flex justify-content-between">

                      <h6 class="text-body mb-2">{!! $nobeneficios->nombre !!}</h6>
                      <i class="link-icon" data-feather="lock"></i>
                    </div>
                    @if ($nobeneficios->status_miembros == 0 and $nobeneficios->status_megas == 0)
                    <p class="text-muted tx-13">Para desbloquear este beneficio debes agregar al menos {!! $beneficio->miembros !!} miembros y compartir {!! $beneficio->megas !!} megas.</p> 
                    @elseif ($nobeneficios->status_miembros == 0 and $nobeneficios->status_megas == 1)
                    <p class="text-muted tx-13">Para desbloquear este beneficio debes compartir {!! $beneficio->megas !!} megas</p> 
                    @endif
                  </div>
                </a>
              <?php } ?>    
            </div>

        </div>

    </div>

</div>

@endsection

@section('javascripts')
<script>
  var colorInc = 100 / 3;
  $('.item').each(function(i, obj) {
    //console.log(obj);
    //console.log($(obj).attr("data-cantidad"));
    //console.log(i);
    var progress = $(obj).find('.progress');
    var percent = $(obj).find('.progress .percent');
    var water = $(obj).find('.progress .water');
    val = $(obj).attr("data-cantidad");
    if(val != "" && !isNaN(val) && val <= 100 && val >= 0){
      var valOrig = val;
      val = 100 - val;
      
      if(valOrig == 0){
        $("#percent-box").val(0);
        $(percent).text(0 + "%");
      }
      else $(percent).text(valOrig + "%");
      
      $(progress).parent().removeClass();
      $(water).css("top", val + "%");
      
      if(valOrig < colorInc * 1)
        $(progress).parent().addClass("red");
      else if(valOrig < colorInc * 2)
        $(progress).parent().addClass("orange");
      else
        $(progress).parent().addClass("green");
    }
  });
</script>
@endsection