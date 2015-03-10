$( "img" ).click(function() {
  $( this ).hide( "slow", function() {
    alert( "Animation complete." );
  });
});