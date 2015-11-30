(function() { 
	
	var validated_content_title_form = document.getElementById("title_content_upload");
	var validated_title_input = document.getElementById("basic_title_query");
	var validated_content_input = document.getElementById("basic_content_query");
	var error_section = document.getElementById("error");

	validated_content_title_form.onsubmit = function() {
		// by default, remove the error
		//error_section.innerHTML = null;

		// check if we have a value
		if (validated_title_input.value && validated_title_input.value !== "" && validated_content_input.value && validated_content_input.value !== "" ) {

			// we have a value, so we can proceed
			// this will allow the form to be submitted
			return true;
		}

		error_section.innerHTML = " Impossible to proceed on!!! The both fields title and content must be filled in.";

		// this will stop the form from submitting
		return false;
	};

}());