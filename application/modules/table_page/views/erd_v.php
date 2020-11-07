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

  </div>

  <div class="container">

    <details>
      <summary>ERD</summary>

      <pre><?php echo $erd_two; ?></pre>
      <hr>
    </details>
    <details>

      <summary>Generate - ERD to SQL (optional)</summary>

      <pre><?php echo $erd_three; ?></pre>
      <hr>
    </details>
    <br>
    <details>
      <summary>Generate - DB to ERD</summary>

      <pre><?php echo 123; ?></pre>
      <hr>
    </details>

    <details>
      <summary>Errors - DB discrepancies </summary>

      <pre><?php echo 123; ?></pre>
      <hr>
    </details>

    <details>
      <summary>Errors - reciprocal relations </summary>

      <pre><?php echo 123; ?></pre>
      <hr>

    </details>
    <details>
      <summary>Generate - reciprocal relation cache</summary>

      <pre><?php echo $model_two; ?></pre>
      <hr>

    </details>

  </div>

</body>
</html>
