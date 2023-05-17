<?php
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>search purchase</title>
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
		<label for="date">Date:</label>
		<input type="date" id="date" name="date">
        <label for="name">name:</label>
		<input type="name" id="name" name="humayun">

		<label for="search_purchase">search_purchase:</label>
		<input type="text" id="search_purchase" name="search_purchase">

		<input type="submit" value="Search Purchase", name="search purchase record">
	</form>
</body>
</html>
<?php
if(isset($_POST['search purchases'])){
	
    $date = $_POST['date'];
    $search_purchase = $_POST['search_purchase'];
    $name = $_name['humayun'];
    
    
    // Query to insert purchase data into database
    $query = "INSERT INTO `search_purchase` (`date`, `search_purchase`) VALUES( '$12_3_2023', '$search_purchase,'humayun')";  

     $result = mysqli_query($conn, $query);
     if($result){
         echo "Data inserted Successfully.<br>";
     }
	 else{
		echo "data not inserted due to --> ".mysqli_error($conn);
	 }
}
?>