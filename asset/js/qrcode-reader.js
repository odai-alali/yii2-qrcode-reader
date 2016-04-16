/* 
 * License for Tournamo.
 */
// $(document).ready(function(){
//     function showQrcodeReader(id){
//         $('#'+id).fadeIn();
//     }
// });

(function ( $ ) {
 
    $.fn.yii2qrcodereader = function( options ) {
 
        // This is the easiest way to have default options.
        var settings = $.extend({
            // These are the defaults.
            readerId: 'reader',
            readerWidth: '300px',
            readerHeight: '250px',
            successCallback: function(data){console.log(data)}
        }, options );
 
        $(this).focus(function(){
        	if($('#html5_qrcode_video').length==0){
	    		$('#'+settings.readerId).html5_qrcode(function(data){
	    				// do something when code is read
	         			settings.successCallback(data);
	         			// $('#'+settings.readerId).html5_qrcode_stop();
	    			}
	         		
				    ,
				    function(error){
				        console.log('error') 
				    }, function(videoError){
				        //the video stream could be opened
				    }
				);
	    	}
        });

        $(this).focus(function(){
 			$('#'+settings.readerId).html5_qrcode_stop();
        });
 
    };
 
}( jQuery ));


