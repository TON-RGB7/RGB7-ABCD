// 
//	jQuery Validate example script
//
//	Prepared by David Cochran
//	
//	Free for your use -- No warranties, no guarantees!
//

$(document).ready(function(){

	// Validate
	// http: //bassistance.de/jquery-plugins/jquery-plugin-validation/
	// http: //docs.jquery.com/Plugins/Validation/
	// http: //docs.jquery.com/Plugins/Validation/validate#toptions
	
		$('#contact-form').validate({
	    rules: {
	      name: {
	        minlength: 2,
	        required: true
	      },
	      title: {
	        minlength: 2,
	        required: true
	      },
	      editor: {
	        minlength: 2,
	        required: true
	      },
	      area: {
	        minlength: 2,
	        required: true
	      },
	      map: {
	        minlength: 2,
	        required: true
	      },
	      price: {
	        digits: true,
	        required: true
	      },
	       work_group: {
	        required: true
	      },
	      email: {
	        required: true,
	        email: true
	      },
	      subject: {
	      	minlength: 2,
	        required: true
	      },
	      message: {
	        minlength: 2,
	        required: true
	      }
	    },
	    highlight: function(label) {
	    	$(label).closest('.control-group').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').addClass('success');
	    }
	  });
	  
}); // end document.ready