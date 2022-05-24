<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Step 5. Confirming the Submission</title>
	<link rel="stylesheet" href="/style.css">
</head>

<body>
	<div class="header">
		<p id="text-header">
			Information Techonology Journal
		</p>
	</div>
	<div class="content">
		<div id="submission">
			<div class="link-menu">
				<a href="#" class="green">Home</a>
				<a href=" #" class="green">About</a>
				<a href="#" class="green">User Home</a>
				<a href=" #" class="green">Search</a>
				<a href="#" class="green">Current</a>
				<a href=" #" class="green">Archives</a>
			</div>
			<hr>
			<div class="content-item">
				<div class="link-status">
					<a href="#" class="green">Home</a>
					<span>></span>
					<a href="#" class="green">User</a>
					<span>></span>
					<a href="#" class="green">Author</a>
					<span>></span>
					<a href="#" class="green">Submission</a>
					<span>></span>
					<a href="#" class="green bold">New Submission</a>
				</div>
				<div class="title bold">
					<p>
						Step 5. Confirming the Submission
					</p>
				</div>
				<hr>
			</div>
			<hr>
			<div class="link-step" id="contact">
				<div class="green">1. START</div>
				<div class="green">2. UPLOAD SUBMISSION</div>
				<div class="green">3. ENTER METADATA</div>
				<div class="bold">4. UPLOAD SUPPLEMENTARY FILES</div>
				<div>5. COMFIRMATION</div>
			</div>
			<div>
				<p id="contact">To submit your manuscript to Information Technology Journal click Finish Submission. The submission's principal contact will receive an acknowledgement by email and will be able to view the submission's progress through the editorial process by logging in to the journal web site. Thank you for your interest in publishing with Information Technology Journal. <br /> <br /></p>
			</div>
			<div>
				<h1 class="submission-file">File Summary</h1>
			</div>
			<hr>
			<table>
				<tr class="jarak-kecil">
					<td id="jarak-confirm-sedang">ID</td>
					<td id="jarak-confirm-kecil">ORIGINAL FILE NAME</td>
					<td id="jarak-confirm-kecil">TYPE</td>
					<td id="jarak-confirm-kecil">FILE SIZE</td>
					<td id="jarak-uploading-kanan">DATE UPLOADED</td>
				</tr>
			</table>
			<hr>
			<div>
				<button class="btn btn-save" onclick="window.location='<?php echo site_url("http://localhost:8080/Jurnal/activeSubmissions"); ?>'">
					Finish Submission
				</button>
				<button class="btn btn-cancel">
					Cancel
				</button>
			</div>



		</div><!-- container -->
</body>
<!-- <style>

</style> -->

</html>