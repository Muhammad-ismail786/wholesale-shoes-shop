<?php
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Purchase Form</title>
	<style>
		form {
			margin: auto;
			width: 50%;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}

		input[type=text], select {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-bottom: 10px;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<form method='post'>
		<label for="prime_id">Prime ID:</label>
		<input type="text" id="prime_id" name="prime_id">

		<label for="date">Date:</label>
		<input type="date" id="date" name="date">

		<label for="purchase_from">Purchase From:</label>
		<input type="text" id="purchase_from" name="purchase_from">

		<label for="quantity">Quantity:</label>
		<input type="text" id="quantity" name="quantity">

		<label for="company_name">Company Name:</label>
		<input type="text" id="company_name" name="company_name">

		<label for="size">Size:</label>
		<input type="text" id="size" name="size">

		<label for="article">Article:</label>
		<input type="text" id="article" name="article">

		<label for="shoes_type">Shoes Type:</label>
		<input type="text" id="shoes_type" name="shoes_type">

		<label for="price_per_item">Price Per Item:</label>
		<input type="text" id="price_per_item" name="price_per_item">

		<label for="expense_per_item">Expense Per Item:</label>
		<input type="text" id="expense_per_item" name="expense_per_item">

		<label for="price">Price:</label>
		<input type="text" id="price" name="price">

		<label for="total_price">Total Price:</label>
		<input type="text" id="total_price" name="total_price">

		<label for="previous_balance">Previous Balance:</label>
		<input type="text" id="previous_balance" name="previous_balance">

		<label for="grand_total">Grand Total:</label>
		<input type="text" id="grand_total" name="grand_total">

		<input type="submit" value="Add Purchase", name="addPurchase">
	</form>
</body>
</html>
<?php
if(isset($_POST['addPurchase'])){
	$prime_id = $_POST['prime_id'];
    $date = $_POST['date'];
    $purchase_from = $_POST['purchased_from'];
    $quantity = $_POST['quantity'];
    $company_name = $_POST['company_name'];
    $size = $_POST['size'];
    $article = $_POST['article'];
    $shoes_type = $_POST['shoes_type'];
    $price_per_item = $_POST['price_per_item'];
    $expense_per_item = $_POST['expense_per_item'];
    $price = $_POST['price'];
    $total_price = $_POST['total_price'];
    $previous_balance = $_POST['previous_balance'];
    $grand_total = $_POST['grand_total'];
    
    // Query to insert purchase data into database
    $query = "INSERT INTO `purchase` (`prime_id`, `date`, `purchased_from`, `quantity`, `company_name`, `size`,
     `article`, `shoes_type`, `price_per_item`, `expense_per_item`, `price`, `total_price`, `previous_balance`,
     `grand_total`) VALUES('$prime_id', '$date', '$purchase_from', '$quantity', '$company_name', '$size', 
     '$article', '$shoes_type', '$price_per_item', '$expense_per_item', '$price', '$total_price', '$previous_balance',
     '$grand_total')";  

     $result = mysqli_query($conn, $query);
     if($result){
         echo "Data inserted Successfully.<br>";
     }
	 else{
		echo "data not inserted due to --> ".mysqli_error($conn);
	 }
}
?>