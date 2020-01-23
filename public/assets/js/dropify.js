$(function() {
  'use strict';

  $('#myDropify').dropify();
  $('#user-dropfy').dropify({
    messages: {
        'default': 'Arrastra y suelta una foto para tu perfil',
        'replace': 'Arrastra y suelta o haz clic para reemplazar',
        'remove':  'Eliminar',
        'error':   'Vaya, algo malo sucedió.'
    }
  });
});