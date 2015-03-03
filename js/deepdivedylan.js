$(document).ready(function()
{
   $("#contactForm").validate(
	{
		errorClass: "alert alert-danger",
		errorLabelContainer: "#outputArea",
		wrapper: "li",
		rules:
		{
			email:
			{
				email: true,
				required: true
			},
			message:
			{
				required: true
			},
			name:
			{
				required: true
			},
			subject:
			{
				required: true
			}
		},

		messages:
		{
			email:   "Please enter your email address",
			message: "Please enter a message",
			name:	"Please enter your name",
			subject: "Please enter a subject"
		},

		submitHandler: function(form)
		{
			$(form).ajaxSubmit(
			{
				type: "POST",
				url: "lib/email.php",
				data: $(form).serialize(),
				success: function(ajaxOutput)
				{
					$("#outputArea").css("display", "");
					$("#outputArea").html(ajaxOutput);

					if($(".alert-success").length >= 1)
					{
						$(form)[0].reset();
					}
				}
			});
		}
	});

   $("#showTwitter").click(function()
	{
		$.ajax(
		{
			type: "GET",
			url: "lib/twitter.php",
			success: function(ajaxOutput)
			{
				$("#showTwitter").html("");
				$("#showTwitter").css("display", "none");
				$("#twitterOutput").html(ajaxOutput);
			}
		});
	});
});
