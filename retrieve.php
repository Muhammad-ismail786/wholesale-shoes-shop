<?php
session_start();
include('connect.php');
$mysqli = new mysqli($servername, $username,
                $password, $database);
$query = "SELECT * FROM `purchase`";
$result = $mysqli->query($query);
$mysqli->close();
$num_rows = mysqli_num_rows($result);
echo "The number of records are: ".$num_rows;
echo "<br>"; 
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>All Records</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
 
<body>
    <section>
<!-- Fetching data into table -->
<table border=1px solid>
<tr><th>Prime_ID</th>
<th>Date</th>
<th>Purchased From</th>
<th>Quantity</th>
<th>Company Name</th>
<th>Size</th>
<th>Article</th>
<th>Shoes Type</th>
<th>Price per Item</th>
<th>Expense per Item</th>
<th>Price</th>
<th>Total Price</th>
<th>Previous Balance</th>
<th>Grand Total</th>
</tr>
<?php while($rows=mysqli_fetch_assoc($result)){ ?>
<tr>
    <td><?php echo $rows['prime_id'];?></td>
    <td><?php echo $rows['date'];?></td>
    <td><?php echo $rows['purchased_from'];?></td>
    <td><?php echo $rows['quantity'];?></td>
    <td><?php echo $rows['company_name'];?></td>
    <td><?php echo $rows['size'];?></td>
    <td><?php echo $rows['article'];?></td>
    <td><?php echo $rows['shoes_type'];?></td>
    <td><?php echo $rows['price_per_item'];?></td>
    <td><?php echo $rows['expense_per_item'];?></td>
    <td><?php echo $rows['price'];?></td>
    <td><?php echo $rows['total_price'];?></td>
    <td><?php echo $rows['previous_balance'];?></td>
    <td><?php echo $rows['grand_total'];?></td>
</tr>
<?php 
}
?>

</table>
</section>
</body>
 
</html>