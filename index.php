<!DOCTYPE html>
<html>
<head>
	<title>Generate User's Book</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div style="width: 30%; margin: auto; margin-top: 200px;">
	<div class="row">
		<div class="col">
			<input type="text" class="form-control" placeholder="Enter Username" id="username">
		</div>
		<div class="col">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
	<p style="margin-top: 20px; margin-left: 20px;"></p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">
	$("button").on("click", () => {
		var username = $("#username").val();
		if (username == "") return;
		
		$("p").html("Generating...");

		var firstname = username.split(" ")[0];
		var lastname = username.split(" ")[1];

		$.ajax({
			url: "generate.php",
			method: "post",
			data: {
				firstname: firstname,
				lastname: lastname
			},
			success: () => {
				var href = "data/" + firstname + lastname + ".mobi";
				$("p").html("Successfully generated. You can download <a href='" + href + "'>here</a>.");
			}
		});
	});
</script>

</body>
</html>