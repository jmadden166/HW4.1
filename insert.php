<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        $servername = "localhost";
$username = "jackstra_Homework3";
$password = "+JMx3n7)k+!H";
$dbname = "jackstra_Homework4";
        $conn = mysqli_connect("localhost", "jackstra_Homework3", "+JMx3n7)k+!H", "jackstra_Homework4");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $custid =  $_REQUEST['custID'];
        $first_name = $_REQUEST['firstName'];
        $ManufacturerName =  $_REQUEST['ManufacturerName'];
        $manufacturerID = $_REQUEST['manufacturerID'];
        $productName = $_REQUEST['productName'];
        $productID =  $_REQUEST['productID'];
        $shipping = $_REQUEST['shipping'];
        $tax = $_REQUEST['tax'];
        $quantity = $_REQUEST['quantity'];
        $saleid =  $_REQUEST['saleid'];
        $saleprice = $_REQUEST['saleprice'];
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO Customer (CustomerID, FirstName) VALUES ('$cust_id',
            '$first_name')";
         $sql1 = "INSERT INTO Manufacturer  VALUES ('$manufacturerID',
            '$ManufacturerName')";
         $sql2 = "INSERT INTO Product  VALUES ('$productID',
            '$productName')";
         $sql3 = "INSERT INTO Sale  VALUES ('$shipping',
            '$tax')";
         $sql4 = "INSERT INTO SaleItem  VALUES ('$quantity','$saleid',
            '$saleprice')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$first_name");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>
