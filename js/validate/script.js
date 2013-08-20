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
	      name_login: {
	        minlength: 2,
	        required: true
	      },
	      title_en: {
	        minlength: 2,
	        required: true
	      },
	       title_th: {
	        minlength: 2,
	        required: true
	      },
	       detail_th: {
	        minlength: 2,
	        required: true
	      },
	       detail_en: {
	        minlength: 2,
	        required: true
	      },
	       price_car: {
	        minlength: 2,
	        digits: true,
	        //required: true
	      },
	      local_id: {
	        required: true
	      },
	       pass_login: {
	        minlength: 2,
	        required: true
	      },
	      pass: {
	        minlength: 2,
	        required: true
	      },
	      c_pass: {
	      	equalTo: "#pass",
	        required: true
	      },
	      tel: {
	        minlength: 6,
	        digits: true,
	        required: true
	      },
	      price: {
	        digits: true,
	        required: true
	      },
	       group: {
	        required: true
	      },
	      type:{
	       required: true
	      },
	       year_car: {
	        required: true
	      },
	       group_car: {
	        required: true
	      },
	      /* sub_car: {
	        required: true
	      },
	      
model_car: {
	        required: true
	      },
*/
	      email: {
	        required: true,
	        email: true
	      },
	      username: {
	        required: true
	      },
	     
	    },
	    highlight: function(label) {
	    	$(label).closest('.control-group').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		//.text('OK!').addClass('valid')
	    		.closest('.control-group').addClass('success');
	    }
	  });
	  
}); // end document.ready