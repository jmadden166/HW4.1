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
         
       
        $custid =  $_POST['custID'];
        $first_name = $_POST['firstName'];
        $ManufacturerName =  $_POST['ManufacturerName'];
        $manufacturerID = $_POST['manufacturerID'];
        $productName = $_POST['productName'];
        $productID =  $_POST['productID'];
        $shipping = $_POST['shipping'];
        $tax = $_POST['tax'];
        $quantity = $_POST['quantity'];
        $saleid =  $_POST['saleid'];
        $saleprice = $_POST['saleprice'];
        
        $sql = "INSERT INTO Customer (CustomerID, FirstName) VALUES ('$custid',
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
