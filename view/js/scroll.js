<script src="https://unpkg.com/ionicons@4.5.9-1/dist/ionicons.js"></script>

$( document ).ready( function() {
  $( window ).scroll( function() {
    if ( $( this ).scrollTop() > 100 ) {
      $( '.scrollButton' ).fadeIn();
    }
    else {
      $( '.scrollButton' ).fadeOut();
    } 
  });
  $( '.scrollButton' ).click( function() {
    $( 'html, body' ).animate( {
      scrollTop : 0 }, 500 ); 
      return false;
  });
});
