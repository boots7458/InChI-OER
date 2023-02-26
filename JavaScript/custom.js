// Search and Pagination


jQuery(document).ready(function($){
    $('#form-22844a4dacee8dab0cf114d55ce3e9c9-1').attr('checked', true).trigger('change');
  });         
  
  $( document ).on( 'click', 'js-wpv-reset-trigger', function( e ) {
    $("select[multiple='multiple'] option:contains('-')").addClass('collapse');
    
  });
  
  function refreshPage(){
      window.location.reload();
  } 
