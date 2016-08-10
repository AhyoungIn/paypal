<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pay for something</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Pay for something</h2><hr>
  <form role="form" action="checkout.php" method="post" role="form" autocomplete="off">
    <div class="form-group">
      <label>Product:</label>
      <input type="text" name="product" class="form-control" placeholder="Enter product">
    </div>
    <div class="form-group">
      <label>Price:</label>
      <input type="text" name="price" class="form-control" placeholder="Enter price">
    </div>
	<p>You'll be taken to PayPal to complete your payment.</p>
    <button type="submit" value="Pay" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

