$(function () {
	$("#memberForm").validate({
		// Specify the validation rules
		rules: {
			name: "required",

			email: {
				required: true,
				email: true
			}
		},
		// Specify the validation error messages
		messages: {
			name: "Please enter your name",
			email:{
				required: "Please enter email address"
			}
		},
		submitHandler: function (form) {
			form.submit();
		}
	});
});
