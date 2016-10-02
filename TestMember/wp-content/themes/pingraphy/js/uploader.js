/*
 * Reference from http://www.ibenic.com/wordpress-file-upload-with-ajax/
 * */
(function($){

	$(document).ready( function(){
		// Just to be sure that the input will be called
		$("#ibenic_file_upload").on("click", function(){
		  	$('#ibenic_file_input').click(function(event) {
				event.stopPropagation();
      			});
    		});
		$('#ibenic_file_input').on('change', prepareUpload);
		
		function prepareUpload(event) { 
			
			var file = event.target.files;
		  	var parent = $("#" + event.target.id).parent();
		  	var data = new FormData();
		  	data.append("action", "ibenic_file_upload");
		  	$.each(file, function(key, value)
		    	{
		      		data.append("ibenic_file_upload", value);
		    	});
		  		
		    	$.ajax({
		    		  url: ibenicUploader.ajax_url,
			          type: 'POST',
			          data: data,
			          cache: false,
			          dataType: 'json',
			          processData: false, // Don't process the files
			          contentType: false, // Set content type to false as jQuery will tell the server its a query string request
			          success: function(data, textStatus, jqXHR) {
			              if( data.response == "SUCCESS" ){
				                var preview = "";
				                if( data.type === "image/jpg" 
				                  || data.type === "image/png" 
				                  || data.type === "image/gif"
				                  || data.type === "image/jpeg"
				                ) {
				                  preview = "<img src='" + data.url + "' />";
				                } else {
				                  preview = data.filename;
				                }
				                $("#imags-list").append(data.content);
			                
			                 } else {
			                	 alert( data.error );
			                 } 
				    }
			});
		}
		/*
	    $( "#addEelement" ).click(function() {
	    	  $("#imags-list").append('<div class="template-download"><div><img src="https://i2.24x7th.com/df/0/ui/post/2016/06/11/8/t/949199122151f985673c45c271c20d30.jpeg"></div></div>');
	    });
	    */
	});
})(jQuery);
