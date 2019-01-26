jQuery(document).ready(function(){
	jQuery("#signup-form-submission").click(function(event){
		event.preventDefault();
		
		var data = {
			email_address: document.getElementsByName("email_address")[0].value,
			name: document.getElementsByName("name")[0].value,
			select_learning: document.getElementsByName("select_learning")[0].value,
			action: "insert_into_db"
		}

		if(document.getElementsByName("email_address")[0].value.trim() === "" || document.getElementsByName("email_address")[0].value === null || !document.getElementsByName("email_address")[0].value.includes("@")){
			jQuery("#signup-form-submission").val("Try again.");
		} else {
			jQuery.post(window.location.origin + "/wp-admin/admin-ajax.php", data, function(response){
				jQuery("#signup-form-submission").val("Success!");
				jQuery("#signup-form-submission").prop("disabled", true);
			});
		}
	})
})
