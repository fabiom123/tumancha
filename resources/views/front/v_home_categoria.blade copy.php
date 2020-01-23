@extends('layout.home')

@section('content')



<div class="page-content categoria-mancha-container">

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">REGISTRA TU MANCHA</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <form class="forms-sample" id="crear-categoria">

                        {{ csrf_field() }}
                        <input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}">
                        <div class="form-group">

                            <label for="tipo-categoria">Categoria</label>

                            <select class="form-control" id="tipo-categoria" name="tipo">

                                <option selected disabled>Selecciona una categoria</option>

                                <option value="familia">Familia</option>

                                <option value="amigos">Amigos</option>

                                <option value="trabajos">Trabajo</option>

                                <option value="escuela">Escuela</option>

                                <option value="universidad">Universidad</option>

                            </select>

                        </div>



                        <div class="form-group">

                            <label for="nombre-categoria">Nombre</label>

                            <input type="text" class="form-control" id="nombre-categoria" name="nombre" autocomplete="off" placeholder="Nombre" onkeyup="javascript:this.value=this.value.toLowerCase();">

                        </div>



                        <div class="form-group">

                            <label for="avatar-categoria">Avatar</label>

                            <input type="file" id="myDropify" class="img-categoria" name="url_icono" class="border"/>

                        </div>

                        <div class="form-group">

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <div class="modal fade" id="miembroModal" tabindex="-1" role="dialog" aria-labelledby="miembroModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="miembroModalLabel">¿QUIEN SE UNE A TU MANCHA?</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    {{ csrf_field() }}

                    <div class="table-responsive">

                        <input type="hidden" name="id_miembro" id="id_miembro">

                        <table id="dataTableMiembros" class="table">

                        </table>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>

            </div>

        </div>

    </div>

    <div class="modal fade" id="beneficioModal" tabindex="-1" role="dialog" aria-labelledby="miembroModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">

                <div class="modal-header" style="padding: 1rem 1rem 0 1rem;

                border-bottom: 0">

                    <div class="beneficio-info">

                        <h5 class="modal-title" id="beneficioModalLabel"></h5>

                        <img id="beneficioModalAvatar" src="" alt="image">

                    </div>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    

                    {{ csrf_field() }}

                    <input type="hidden" name="id_contacto" id="id_contacto">

                    <div class="tab">

                        <ul class="tabs">

                            <li><a href="#">Megas</a></li>

                            <li><a href="#">Minutos</a></li>

                            <li><a href="#">SMS</a></li>

                        </ul> <!-- / tabs -->

                        <div class="tab_content">

                            <div class="tabs_item">

                                <div class="autor-beneficio">

                                    <p id="emisor-bene">TU</p>

                                    <p id="receptor-bene"></p>

                                </div>

                                <div class="beneficio-mancha" id="plan-contacto">

                                   

                                </div>

                            </div> <!-- / tabs_item -->

                            

                            <div class="tabs_item">

                                <div class="disponible"></div>

                                <div class="comparte"></div>

                            </div> <!-- / tabs_item -->

                    

                            <div class="tabs_item">

                                <div class="disponible"></div>

                                <div class="comparte"></div>

                            </div> <!-- / tabs_item -->

                        </div> <!-- / tab_content -->

                    </div> <!-- / tab -->



                </div>

            </div>

        </div>

    </div>


    <div class="container-menu-mancha">
        <ul class="nav mb-2 owl-carousel owl-theme owl-basic menu-cat-mancha" id="menu-categorias-mancha">

            <li class="nav-item mancha-categoria" style="width:80px">

                <a class="nav-categoria title-mancha" href="#" style="visibility: hidden;">agregar</a>

                <div class="mancha-plus">

                    <a href="" data-toggle="modal" data-target="#exampleModal"><i data-feather="plus"></i></a>

                </div>

            </li>

            <?php foreach ($categorias as $categoria){?>

                <li class="nav-item mancha-categoria item">

                    <a class="nav-categoria title-mancha" href="#">{!! $categoria->tipo !!}</a>

                    <img src="uploads/categoria/{!! $categoria->url_icono !!}" width="80" height="80" class="d-inline-block align-top" alt="">

                    <a class="nav-categoria active description-mancha" href="#mancha{!! $categoria->id_categoria !!}" data-id="{!! $categoria->id_categoria !!}">{!! $categoria->nombre !!}</a>

                </li>

            <?php } ?>

        </ul>
    </div>
    

    <div class="card mb-3 tabs-mancha">

        <?php foreach ($categorias as $categoria){?>

        <div class="card-body" id="mancha{!! $categoria->id_categoria !!}">

            <div class="d-flex justify-content-between align-items-baseline mb-3">

                <h6 class="mb-0 inbox-mancha-title">Tu Mancha para el {!! $categoria->nombre !!} </h6>

                <div class="dropdown mb-2">

                    <button class="btn p-0" type="button" id="add-miembro-mancha" data-toggle="modal" data-target="#miembroModal" data-id="{!! $categoria->id_categoria !!}">

                        <i class="icon-lg text-muted pb-3px" data-feather="user-plus"></i>

                    </button>

                </div>

            </div>

            <div class="d-flex flex-column miembros-cat">

                <?php 

                foreach ($manchas as $mancha){

                    if ($categoria->id_categoria == $mancha->id_categoria){

                ?>

                    <a href="#" class="d-flex align-items-center border-bottom py-3">

                        <div class="mr-3">

                        <img src="assets/images/miembros/{!! $mancha->avatar !!}" class="rounded-circle avatar-mancha" alt="user">

                        </div>

                        <div class="w-100">

                        <div class="d-flex justify-content-between">

                            <h6 class="text-body mb-2">{!! $mancha->nombre !!}</h6>

                            <p class="text-muted tx-12 mancha-miembro-menu" data-toggle="modal" data-target="#beneficioModal" data-nombre="{!! $mancha->nombre !!}" data-avatar="{!! $mancha->avatar !!}" data-id="{!! $mancha->id_contacto !!}"><i data-feather="more-horizontal"></i></p>

                        </div>

                        <p class="text-muted tx-13">Hey! there I'm available...</p>

                        </div>

                    </a>

                <?php 

                    }

                } 

                ?>
                <!--<a href="#" class="d-flex align-items-center border-bottom py-3">

                    <div class="mr-3">

                    <img src="../assets/images/faces/face3.jpg" class="rounded-circle avatar-mancha" alt="user">

                    </div>

                    <div class="w-100">

                    <div class="d-flex justify-content-between">

                        <h6 class="text-body mb-2">Carl Henson</h6>

                        <p class="text-muted tx-12 mancha-miembro-menu"><i data-feather="more-horizontal"></i></p>

                    </div>

                    <p class="text-muted tx-13">I've finished it! See you so..</p>

                    </div>

                </a>-->

            </div>

        </div>

        <?php } ?>

    </div>
    
    <div class="beneficio-mancha-cat">   
        <input type="hidden" name="id_cat_grupo" value="{!! $grupo->id_categoria !!}">
        <a href="/beneficio/{!! $grupo->id_categoria !!}" type="button" class="btn btn-primary btn-icon-text beneficio-mancha-button">
            <img src="assets/images/mancha/cup.png" width="40" height="40" class="d-inline-block align-top" alt="">
            <p>Beneficios</p>
        </a>
    </div>

</div>



@endsection

@section('javascripts')

<script>

/******************* page interaction ****************************/
// menu nav grupo  ->  miembros 
$('.menu-cat-mancha .description-mancha').click(function() {
    // Display id grupo 
    var id_cat = $(this).data('id'); 
    $('input[name="id_cat_grupo"]').val(id_cat);
    $('.beneficio-mancha-button').attr('href','/beneficio/'+id_cat);    
    // Display active tab
    let currentTab = $(this).attr('href');   
    $('.tabs-mancha .card-body').hide();
    var contactBodyScroll = new PerfectScrollbar(currentTab+' .miembros-cat');
    $(currentTab).show();
    return false;

});

/************************* modal ******************************/

$('#miembroModal').on('show.bs.modal', function(e) {

    var id_miembro = $(e.relatedTarget).data('id');

    $(e.currentTarget).find('input[name="id_miembro"]').val(id_miembro);

    getListContbyCat(id_miembro);

});

$('#beneficioModal').on('show.bs.modal', function(e) {

    var id_contacto = $(e.relatedTarget).data('id');

    var nombre = $(e.relatedTarget).data('nombre');

    var avatar = $(e.relatedTarget).data('avatar');

    $(e.currentTarget).find('input[name="id_contacto"]').val(id_contacto);

    $(e.currentTarget).find('#beneficioModalLabel').text('Comparte con '+nombre+' y accede a más beneficios');

    $(e.currentTarget).find('#receptor-bene').text(nombre);

    $(e.currentTarget).find('#beneficioModalAvatar').attr('src','assets/images/miembros/'+avatar);

    getPlanContacto(id_contacto);

});

/************************* data proccess **********************/

$('#crear-categoria').submit(function(event){
    event.preventDefault();
    onCrate(this);
});  

function onCrate(e) {

    var data = new FormData($(e)[0]);

    $.ajax({

    url: "{{ route('categoria_store_post') }}",

    headers: {

                'X-CSRF-TOKEN': $('input[name="_token"]').val()

            },

    type: 'POST',

    dataType: 'json',

    data: data,

    processData: false,

    contentType: false,

    beforeSend: function() {

    },

    success: function(data){

        $('#exampleModal').modal('hide');
        //console.log(data.categorias);
        var html = '';
        $('#menu-categorias-mancha').remove();
        $('.card-body').remove();

        html += ' <ul class="nav mb-2 owl-carousel owl-theme owl-basic menu-cat-mancha" id="menu-categorias-mancha">';
        html += '<li class="nav-item mancha-categoria" style="width:80px">';
        html += '<a class="nav-categoria title-mancha" href="#" style="visibility: hidden;">agregar</a>';
        html += '<div class="mancha-plus">';
        html += '<a href="" data-toggle="modal" data-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>';
        html += '</div>';
        html += '</li>';
        $.each(data.categorias, function( index, value ) {
            html += '<li class="nav-item mancha-categoria">';
            html += '<a class="nav-categoria title-mancha" href="#">'+value.tipo+'</a>';
            html += ' <img src="uploads/categoria/'+value.url_icono+'" width="80" height="80" class="d-inline-block align-top" alt="">';
            html += '<a class="nav-categoria active description-mancha" href="#mancha'+value.id_categoria+'" data-id="'+value.id_categoria+'">'+value.nombre+'</a>';
            html += '</li>';
        });
        html += '</ul>';
        $('.container-menu-mancha').append(html);
        /* refresh carrousel */
        $('#menu-categorias-mancha').owlCarousel({
            loop:true,
            margin:10,
            loop:false,
            dots: false,
            nav:false,
            responsive:{
                0:{
                    items:4
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        });
       
        var html2 = '';
        /* crear contactos para grupo */
        $.each(data.categorias, function( index, valuex ) {
            html2 +='<div class="card-body" id="mancha'+valuex.id_categoria+'">';
            html2 +='<div class="d-flex justify-content-between align-items-baseline mb-3">';
            html2 +='<h6 class="mb-0 inbox-mancha-title">Tu Mancha para el '+valuex.nombre+' </h6>';
            html2 +='<div class="dropdown mb-2">';
            html2 +='<button class="btn p-0" type="button" id="add-miembro-mancha" data-toggle="modal" data-target="#miembroModal" data-id="'+valuex.id_categoria+'">';
            html2 +='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus icon-lg text-muted pb-3px"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>';
            html2 +='</button>';
            html2 +='</div>';
            html2 +='</div>';
            html2 +='<div class="d-flex flex-column miembros-cat">';
            $.each(data.manchas, function( index, valor ) {
                if (valuex.id_categoria == valor.id_categoria){
                    html2 +='<a href="#" class="d-flex align-items-center border-bottom py-3">';
                    html2 +='<div class="mr-3">';
                    html2 +='<img src="assets/images/miembros/'+valor.avatar+'" class="rounded-circle avatar-mancha" alt="user">';
                    html2 +='</div>';
                    html2 +='<div class="w-100">';
                    html2 +='<div class="d-flex justify-content-between">';
                    html2 +='<h6 class="text-body mb-2">'+valor.nombre+'</h6>';
                    html2 +=' <p class="text-muted tx-12 mancha-miembro-menu" data-toggle="modal" data-target="#beneficioModal" data-nombre="'+valor.nombre+'" data-avatar="'+valor.avatar+'" data-id="'+valor.id_contacto+'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></p>';
                    html2 +='</div>';
                    html2 +='<p class="text-muted tx-13">Hey! there Im available...</p>';
                    html2 +='</div>';
                    html2 +='</a>';
                }
            });
            html2 +='</div>';
            html2 +='</div>';
        });
        $('.tabs-mancha').append(html2);
        var contactBodyScroll = new PerfectScrollbar('.miembros-cat');
        /* enable tab */
        $('.menu-cat-mancha .description-mancha').click(function() {
            // Display id grupo 
            var id_cat = $(this).data('id'); 
            $('input[name="id_cat_grupo"]').val(id_cat);
            $('.beneficio-mancha-button').attr('href','/beneficio/'+id_cat);    
            // Display active tab
            let currentTab = $(this).attr('href');
            $('.tabs-mancha .card-body').hide();
            var contactBodyScroll = new PerfectScrollbar(currentTab+' .miembros-cat');
            $(currentTab).show();
            return false;
        });
    },

    error: function(data){

    }

    });

}
function addMiembro(nombre, avatar, id_cat, id_con){

    $.ajax({

    url: "{{ route('miembro_store_post') }}",

    headers: {

                'X-CSRF-TOKEN': $('input[name="_token"]').val()

            },

    type: 'POST',

    dataType: 'json',

    data:{ 

        "nombre":nombre,

        "avatar":avatar,

        "id_contacto":id_con,

        "id_categoria":id_cat

    },

    beforeSend: function() {



    },

    success: function(data){ 

      //$('#miembroModal').modal('hide');

      var html = '';

      html += '<a href="#" class="d-flex align-items-center border-bottom py-3">';

      html += '<div class="mr-3">';

      html += '<img src="assets/images/miembros/'+data.new_data.avatar+'" class="rounded-circle avatar-mancha" alt="user">';

      html += '</div>';  

      html += '<div class="w-100">';

      html += '<div class="d-flex justify-content-between">';

      html += '<h6 class="text-body mb-2">'+data.new_data.nombre+'</h6>'; 

      html += '<p class="text-muted tx-12 mancha-miembro-menu" data-toggle="modal" data-target="#beneficioModal" data-nombre="'+data.new_data.nombre+'" data-avatar="'+data.new_data.avatar+'" data-id="'+data.new_data.id_contacto+'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></p>';                 

      html += '</div>';

      html += '<p class="text-muted tx-13">Hey! there Im available...</p>';

      html += '</div>';

      html += '</a>';

      var contendor = 'mancha'+data.new_data.id_categoria+' .miembros-cat';       

      $('#' + contendor).append(html);

    },

    error: function(data){



    }

    });

}
function getListContbyCat(categoria){

    $.ajax({

    url: "{{ route('get_contacto_post') }}",

    headers: {

                'X-CSRF-TOKEN': $('input[name="_token"]').val()

            },

    type: 'POST',

    dataType: 'json',

    data:{ 

        "categoria":categoria,

    },

    beforeSend: function() {



    },

    success: function(data){ 

        console.log(data.contacto);

        var contacto = data.contacto;

        var status = data.status;

        $('#dataTableMiembros thead').remove();

        $('#dataTableMiembros tbody').remove();

        var html = '';

        html += '<thead>';

        html += '<tr>';

        html += '<th>Avatar</th>';

        html += '<th>Nombre</th>';

        html += '<th>opcion</th>';

        html += '<thead>';

        html += '<tbody>';

        if(status == true){ 

            for (i = 0; i < contacto.length; ++i) {

                html += '<tr>';

                html += '<td class="py-1">';

                html += '<img src="assets/images/miembros/'+contacto[i]['avatar']+'" alt="image">';

                html += '</td>';

                html += '<td>'+contacto[i]['nombre']+'</td>';

                if (contacto[i]['estado'] == "1") {

                    html += '<td class="add-miembro" data-avatar="'+contacto[i]['avatar']+'" data-nombre="'+contacto[i]['nombre']+'" data-id="'+contacto[i]['idcont']+'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle icon-lg text-muted pb-3px"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></td>';

                }else{

                    html += '<td class="add-miembro" data-avatar="'+contacto[i]['avatar']+'" data-nombre="'+contacto[i]['nombre']+'" data-id="'+contacto[i]['idcont']+'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle icon-lg text-muted pb-3px"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg></td>';

                }

                html += '</tr>';

            }

        }else{

            $.each(contacto,function(index,value){

                html += '<tr>';

                html += '<td class="py-1">';

                html += '<img src="assets/images/miembros/'+value['imgUrl']+'" alt="image">';

                html += '</td>';

                html += '<td>'+value['nom']+'</td>';

                html += '<td class="add-miembro" data-avatar="'+value['imgUrl']+'" data-nombre="'+value['nom']+'" data-id="'+value['id']+'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle icon-lg text-muted pb-3px"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg></td>';

                html += '</tr>';

            });

        }

        html += '</tbody>';

        $('#dataTableMiembros').append(html);

        

        /* agregar miembro a un grupo */

        $('.add-miembro').on('click',function(){

            var nombre = $(this).data('nombre');

            var avatar = $(this).data('avatar');

            var id_con = $(this).data('id');

            var id_cat =  parseInt($('#id_miembro').val());

            //$('#dataTableMiembros thead').remove();

            //$('#dataTableMiembros tbody').remove();

            addMiembro(nombre, avatar, id_cat, id_con);

            $(this).find('svg').remove();

            $(this).append('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle icon-lg text-muted pb-3px"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>');

        });



    },

    error: function(data){



    }

    });

}
function getPlanContacto(id_contacto){

    $.ajax({

        url: "{{ route('get_plan_by_contacto') }}",

        headers: {

                    'X-CSRF-TOKEN': $('input[name="_token"]').val()

                },

        type: 'POST',

        dataType: 'json',

        data:{ 

            "id_contacto":id_contacto,

        },

        beforeSend: function() {



        },

        success: function(data){

            console.log(data.new_data);

            /* YO */

            var megas = data.me.megas;

            var porcentaje = megas * 100 / 1200;

            var maxcompartido =  70 / 100 * megas; // 70% de mi total de megas

            /* contacto */ 

            var megasMe = data.new_data.megas;

            var porcentajeMe = megas * 100 / 1200;



            var html = "";

            /*renderizar megas min sms de cliente */

            html += '<div id="planMe" class="mx-auto grafica-megas"><span class="progres-tipo">MB</span></div>';

            html += '<div id="planContacto" class="mx-auto grafica-megas"><span class="progres-tipo">MB</span></div>';

            html += '<div class="barra-gb">';

            html += '<input type="range" class="custom-range" name="rangeGbInput" id="ageInputId" value="'+Math.round(maxcompartido)+'" min="50" max="'+Math.round(maxcompartido)+'" oninput="ageOutputId.value = ageInputId.value">';

            html += '<p>Puedes compartir <output name="ageOutputName" id="ageOutputId">'+Math.round(maxcompartido)+'</output> MB</p>';

            html += '</div>';

            html += '<div class="progress-mancha">';

            html += '<button type="button" class="btn btn-primary" style="background: white;color: #000;letter-spacing: 1px;font-weight: 600;">Compartir</button>';

            html += '</div>';



            $("#plan-contacto").html(html);    

                                      

            /*crear grafica*/

            if($('#planMe').length) {

                var bar = new ProgressBar.Circle(planMe, {

                color: '#fff',

                trailColor: '#f58e5f',

                // This has to be the same size as the maximum width to

                // prevent clipping

                strokeWidth: 4,

                trailWidth: 3,

                easing: 'easeInOut',

                duration: 1400,

                text: {

                    autoStyleContainer: false

                },

                from: { color: '#507ab5', width: 4 },

                to: { color: '#f58e5f', width: 4 },

                // Set default step function for all animate calls

                step: function(state, circle) {

                    circle.path.setAttribute('stroke', state.color);

                    circle.path.setAttribute('stroke-width', state.width);

                

                    var value = Math.round(circle.value() * 100);

                    if (value === 0) {

                        circle.setText('');

                    } else {

                    //circle.setText(value + '%');

                        circle.setText(megas);

                    }

                }

                });

                bar.text.style.fontFamily = "'Overpass', sans-serif;";

                bar.text.style.fontSize = '2rem';

                

                bar.animate('.'+Math.round(porcentaje));

            }

            /*end grafica*/

            /*crear grafica*/

            if($('#planContacto').length) {

                var bar = new ProgressBar.Circle(planContacto, {

                color: '#fff',

                trailColor: '#f58e5f',

                // This has to be the same size as the maximum width to

                // prevent clipping

                strokeWidth: 4,

                trailWidth: 3,

                easing: 'easeInOut',

                duration: 1400,

                text: {

                    autoStyleContainer: false

                },

                from: { color: '#507ab5', width: 4 },

                to: { color: '#f58e5f', width: 4 },

                // Set default step function for all animate calls

                step: function(state, circle) {

                    circle.path.setAttribute('stroke', state.color);

                    circle.path.setAttribute('stroke-width', state.width);

                

                    var value = Math.round(circle.value() * 100);

                    if (value === 0) {

                        circle.setText('');

                    } else {

                    //circle.setText(value + '%');

                        circle.setText(megasMe);

                    }

                }

                });

                bar.text.style.fontFamily = "'Overpass', sans-serif;";

                bar.text.style.fontSize = '2rem';

                

                bar.animate('.'+Math.round(porcentajeMe));

            }

            /*end grafica*/

            /*compartir beneficios*/

            $('.progress-mancha button').on('click', function(){

                // id emisor: para este demo sere yo fabio

                var id_emisor = 2;

                // id receptor

                var id_receptor = $('input[name="id_contacto"]').val();

                //cantidad de megas,minutos,etc: emisor - cantidad -> receptor + cantidad

                var cantidad = $('input[name="rangeGbInput"]').val();

                //tipo de beneficio a compartir 

                var tipo = 'megas';

                //acumulado de servicio para persona

                var usuario = 2;

                //acumulado de servicio para el grupo

                var grupo = $('input[name="id_cat_grupo"]').val(); 

                updateBeneficioContact(id_emisor, id_receptor, tipo, cantidad, usuario, grupo)

            });

            /*end compartir */

        }

    });

}
function updateBeneficioContact(id_emisor, id_receptor, tipo, cantidad, usuario, grupo){

    console.log(cantidad);

    $.ajax({

        url: "{{ route('update_plan_by_contacto') }}",

        headers: {

                    'X-CSRF-TOKEN': $('input[name="_token"]').val()

                },

        type: 'POST',

        dataType: 'json',

        data:{ 

            "id_emisor":id_emisor,

            "id_receptor":id_receptor,

            "tipo":tipo,

            "cantidad":cantidad,

            "usuario":usuario,

            "grupo":grupo,

        },

        beforeSend: function() {



        },

        success: function(data){

            $("#plan-contacto").empty();

            /* YO */

            var megas = data.emisor.megas;

            var porcentaje = megas * 100 / 1200;

            var maxcompartido =  70 / 100 * megas; // 70% de mi total de megas

            /* contacto */ 

            var megasMe = data.receptor.megas;

            var porcentajeMe = megas * 100 / 1200;

            var html = "";

            /*renderizar megas min sms de cliente */

            html += '<div id="planMe" class="mx-auto grafica-megas"><span class="progres-tipo">MB</span></div>';

            html += '<div id="planContacto" class="mx-auto grafica-megas"><span class="progres-tipo">MB</span></div>';

            html += '<div class="barra-gb">';

            html += '<input type="range" class="custom-range" name="rangeGbInput" id="ageInputId" value="'+Math.round(maxcompartido)+'" min="50" max="'+Math.round(maxcompartido)+'" oninput="ageOutputId.value = ageInputId.value">';

            html += '<p>Puedes compartir <output name="ageOutputName" id="ageOutputId">'+Math.round(maxcompartido)+'</output> MB</p>';

            html += '</div>';

            html += '<div class="progress-mancha">';

            html += '<button type="button" class="btn btn-primary" style="background: white;color: #000;letter-spacing: 1px;font-weight: 600;">Compartir</button>';

            html += '</div>';

            $("#plan-contacto").html(html);    
                    
            /*crear grafica*/

            if($('#planMe').length) {

                var bar = new ProgressBar.Circle(planMe, {

                color: '#fff',

                trailColor: '#f58e5f',

                // This has to be the same size as the maximum width to

                // prevent clipping

                strokeWidth: 4,

                trailWidth: 3,

                easing: 'easeInOut',

                duration: 1400,

                text: {

                    autoStyleContainer: false

                },

                from: { color: '#507ab5', width: 4 },

                to: { color: '#f58e5f', width: 4 },

                // Set default step function for all animate calls

                step: function(state, circle) {

                    circle.path.setAttribute('stroke', state.color);

                    circle.path.setAttribute('stroke-width', state.width);

                

                    var value = Math.round(circle.value() * 100);

                    if (value === 0) {

                        circle.setText('');

                    } else {

                    //circle.setText(value + '%');

                        circle.setText(megas);

                    }

                }

                });

                bar.text.style.fontFamily = "'Overpass', sans-serif;";

                bar.text.style.fontSize = '2rem';

                

                bar.animate('.'+Math.round(porcentaje));

            }

            /*end grafica*/

            /*crear grafica*/

            if($('#planContacto').length) {

                var bar = new ProgressBar.Circle(planContacto, {

                color: '#fff',

                trailColor: '#f58e5f',

                // This has to be the same size as the maximum width to

                // prevent clipping

                strokeWidth: 4,

                trailWidth: 3,

                easing: 'easeInOut',

                duration: 1400,

                text: {

                    autoStyleContainer: false

                },

                from: { color: '#507ab5', width: 4 },

                to: { color: '#f58e5f', width: 4 },

                // Set default step function for all animate calls

                step: function(state, circle) {

                    circle.path.setAttribute('stroke', state.color);

                    circle.path.setAttribute('stroke-width', state.width);

                

                    var value = Math.round(circle.value() * 100);

                    if (value === 0) {

                        circle.setText('');

                    } else {

                    //circle.setText(value + '%');

                        circle.setText(megasMe);

                    }

                }

                });

                bar.text.style.fontFamily = "'Overpass', sans-serif;";

                bar.text.style.fontSize = '2rem';

                

                bar.animate('.'+Math.round(porcentajeMe));

            }

            /*end grafica*/

            /*compartir beneficios*/

            $('.progress-mancha button').on('click', function(){

                // id emisor: para este demo sere yo fabio

                var id_emisor = 2;

                // id receptor

                var id_receptor = $('input[name="id_contacto"]').val();

                //cantidad de megas,minutos,etc: emisor - cantidad -> receptor + cantidad

                var cantidad = $('input[name="rangeGbInput"]').val();

                //tipo de beneficio a compartir 

                var tipo = 'megas';

                //acumulado de servicio para persona

                var usuario = 2;

                //acumulado de servicio para el grupo

                var grupo = $('input[name="id_cat_grupo"]').val(); 

                updateBeneficioContact(id_emisor, id_receptor, tipo, cantidad, usuario, grupo)

            });

            /*end compartir */

        }

    });          

}

/*tab*/
$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');	
$('.tab ul.tabs li a').click(function (g){ 

    var tab = $(this).closest('.tab'), 

        index = $(this).closest('li').index();

    tab.find('ul.tabs > li').removeClass('current');

    $(this).closest('li').addClass('current');

    /* ajax traer plan */

    tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();

    tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();

    g.preventDefault();

});

</script>

@endsection