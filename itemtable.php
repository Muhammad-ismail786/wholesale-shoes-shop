<?php
include('connect.php');

$query2 = "CREATE TABLE `purchase` (
    `prime_id` INT(11) NOT NULL AUTO_INCREMENT,
    `date` DATE NOT NULL,
    `purchased_from` VARCHAR(50) NOT NULL,
    `quantity` INT(11) NOT NULL,
    `company_name` VARCHAR(50) NOT NULL,
    `size` INT(11) NOT NULL,
    `article` VARCHAR(50) NOT NULL,
    `shoes_type` VARCHAR(50) NOT NULL,
    `price_per_item` DECIMAL(10,2) NOT NULL,
    `expense_per_item` DECIMAL(10,2) NOT NULL,
    `price` DECIMAL(10,2) NOT NULL,
    `total_price` DECIMAL(10,2) NOT NULL,
    `previous_balance` DECIMAL(10,2) NOT NULL,
    `grand_total` DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (prime_id)
)";

$res = mysqli_query($conn, $query2);
if($res){
    echo "table created.<br>";
}
else{
    echo "table not created --->";
}
?>