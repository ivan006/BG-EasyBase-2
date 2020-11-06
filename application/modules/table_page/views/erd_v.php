<!DOCTYPE html>
<html lang="en">
<head>
  <title>Table Page - ERD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Table Page - ERD</h1>
  <p>.........</p>
</div>

<div class="container">
  <div class="row">
		<h1>ERD state</h1>
    <div class="col-md-12">
			<pre><?php echo $erd_two; ?></pre>
			<hr>

    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">

			<div  style="display:inline-block; padding:10px;">
				<h1>erd_three</h1>
				<pre><?php echo $erd_three; ?></pre>
				<hr>
			</div>

			<div  style="display:inline-block; padding:10px;">
				<h1>model_two</h1>
				<pre><?php echo $model_two; ?></pre>
				<hr>
			</div>
    </div>
  </div>
</div>

</body>
</html>
