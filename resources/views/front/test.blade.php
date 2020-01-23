@extends('layout.home')
@section('styles')
<style>
#dataTableGoogleCon > tbody > tr > td:nth-child(2){
    width: 50vw;
    max-width: 50vw;
    word-break: break-all;
    white-space: pre-line;
}
</style>
@endsection
@section('content')
<div class="page-content categoria-mancha-container">
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

                        <table id="dataTableGoogleCon" class="table">
                            <thead>
                            <tr>
                                <th>Avatar</th>
                                <th>Nombre</th>
                                <th>opcion</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>    
                        </table>
                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>

            </div>

        </div>

    </div>
    <button class="btn p-0" type="button" id="add-miembro-mancha" data-toggle="modal" data-target="#miembroModal" data-id="10">

        <i class="icon-lg text-muted pb-3px" data-feather="user-plus"></i>

    </button>
    <input type="hidden" name="render" id="render">
</div>
@endsection        
@section('javascripts')
<script type="text/javascript">
    var clientId = '581739469006-kfa7otlqsi2gp4m7qrqn9e6bi0np1f0t.apps.googleusercontent.com';
    var apiKey = '3rYKdYLEHL4b7pM87OUVOeDu';
    var scopes = 'https://www.googleapis.com/auth/contacts.readonly';

    $(document).on("click",".googleContactsButton", function(){
      gapi.client.setApiKey(apiKey);
      window.setTimeout(authorize);
    });

    function authorize() {
      gapi.auth.authorize({client_id: clientId, scope: scopes, immediate: false}, handleAuthorization);
    }

    function handleAuthorization(authorizationResult) {
      if (authorizationResult && !authorizationResult.error) {
          $.get("https://www.google.com/m8/feeds/contacts/default/thin?alt=json&access_token=" + authorizationResult.access_token + "&max-results=100&v=3.0",
          function(response){
            //process the response here
            console.log(response.feed.entry);
            var contador = 100;
            $.each(response.feed.entry,function(index,value){
                contador = contador - 1;
                //var correo = value.gd$email[0].address;
                //var nombre = value.gd$name.gd$fullName;
                var correo;
                var nombre;
                var id_google = value.id.$t;
                //var id = id_google.replace('http://www.google.com/m8/feeds/contacts/nexuscode25%40gmail.com/base/','');
                //console.log(id); 
                if (typeof (value.gd$name) != "undefined") {
                    if (typeof (value.gd$name.gd$fullName) != "undefined") {
                        if (typeof (value.gd$name.gd$fullName.$t) != "undefined") {
                            nombre = value.gd$name.gd$fullName.$t;
                        }
                    }else if(typeof (value.gd$name.gd$givenName) != "undefined"){
                        if (typeof (value.gd$name.gd$givenName.$t) != "undefined") {
                            nombre = value.gd$name.gd$givenName.$t;
                        }                     
                    }
                }else{
                    nombre = value.gd$email[0].address;
                }
                var image = value.link[1].href;
                var link = value.link.filter(function(link) {
                    return link.type.indexOf("image") === 0;
                }).shift();
                getPhoto(link.href, authorizationResult.access_token, nombre, id_google, acallback, contador);
                //console.log(getPhoto());
                //var data = fileExists(link);
                //console.log(data);
                //phto google
                /*var request = new XMLHttpRequest();
                request.open("GET", link.href + "&access_token=" + authorizationResult.access_token, true);
                request.responseType = 'blob';
                request.onload = function(e) {
                    if (this.status == 200) {
                        var url = webkitURL.createObjectURL(this.response);
                        //console.log(this.response.size);
                        var html2 ="";
                        html2 += '<tr class="row-contact"><td class="py-1"><img src="'+url+'" class="card-img-top" alt="mancha-logo"></td><td>'+nombre+'</td><td class="add-miembro" data-avatar="'+url+'" data-nombre="'+nombre+'" data-id="'+id_google+'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle icon-lg text-muted pb-3px"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></td></tr>';
                        $("#dataTableGoogleCon tbody").append(html2);
                    }
                    if (this.status == 404) {
                        throw new Error(' replied 404');
                    }
                };
                request.send();*/
            });
          });
      }
    }
    function getPhoto(url, token, nombre, id_google, callback, contador) {
        var request = new XMLHttpRequest();
        request.open("GET", url+ "&access_token=" + token, true);
        request.responseType = 'blob';
        request.onload = function(e) {
            if (this.status == 200) {
                var url = webkitURL.createObjectURL(this.response);
                //console.log(this.response.size);
                callback(url, nombre, id_google);
            }
            if (this.status == 404) {
                throw new Error(' replied 404');
            }
            
        };
        request.send();
    }
      
    function acallback(urlphoto, nombre, id_google) {
      var html2 ="";  
      html2 += '<tr class="row-contact"><td class="py-1"><img src="'+urlphoto+'" class="card-img-top" alt="mancha-logo"></td><td>'+nombre+'</td><td class="add-miembro" data-avatar="'+urlphoto+'" data-nombre="'+nombre+'" data-id="'+id_google+'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle icon-lg text-muted pb-3px"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></td></tr>';
      $("#dataTableGoogleCon tbody").append(html2);
      
    }  
    /*if ($("#dataTableGoogleCon tbody").length) {
        $("#dataTableGoogleCon tbody").append(html2);
    }*/
    $('#miembroModal').on('show.bs.modal', function(e) {
        //console.log($('.add-miembro').length);
        $('.add-miembro').on('click',function(){
            var nombre = $(this).data('nombre');
            var avatar = $(this).data('avatar');
            var id_con = $(this).data('id');
            var id_cat =  parseInt(10);
            fetch(avatar)
                .then(res => res.blob())
                .then(blob => {
                const nombre = $(this).data('nombre');    
                const file = new File([blob], nombre+'.png', blob);
                const id_con = $(this).data('id');
                const id_cat = parseInt(10);
                data = new FormData();
                    data.append( 'avatar',  file );
                    data.append( 'nombre',  nombre );
                    data.append( 'id_google', id_con );
                    data.append( 'id_categoria', parseInt(id_cat) );
                addMiembro(data);
            });
            //$('#dataTableMiembros thead').remove();
            //$('#dataTableMiembros tbody').remove();
            //addMiembro(nombre, avatar, id_cat, id_con);
            $(this).find('svg').remove();
            $(this).append('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle icon-lg text-muted pb-3px"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>');
        });
        $('#dataTableGoogleCon').DataTable({
            "paging":   false,
            "ordering": false,
            "info":     false
        });
    });
   

    function addMiembro(data){

        $.ajax({
        url: "{{ route('miembro_store_post') }}",
        headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
        type: 'POST',
        dataType: 'json',
        data:data,
        processData: false,
        contentType: false,
        beforeSend: function() {

        },
        success: function(data){ 
            console.log(data);
            //$('#miembroModal').modal('hide');
            /*var html = '';
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
            $('#' + contendor).append(html);*/
        },
        error: function(data){
        }
        });

    }
  </script>
  <button class="googleContactsButton">Get my contacts</button>
  @endsection
