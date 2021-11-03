require( 'jquery/dist/jquery' );
import $ from 'jquery';



$( '.btn-hide-alert' ).on( 'click', function(){
	$( this ).parent().parent().addClass( 'hide' );
});
