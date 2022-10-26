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
        $first_name = $_POST['first_name'];
        $manufacturer1 =  $_POST['manufacturername'];
        $manufacturerID = $_POST['manufacturerid'];
        $productName = $_POST['productname'];
        $productID =  $_POST['productid'];
        $shipping = $_POST['shipping'];
        $tax = $_POST['tax'];
        $quantity = $_POST['quantity'];
        $saleid =  $_POST['saleid'];
        $saleprice = $_POST['saleprice'];
        
        $sql = "INSERT INTO Customer (CustomerID, FirstName) VALUES ('$custid',
            '$first_name')";
         $sql1 = "INSERT INTO Manufacturer (ManufacturerID, ManufacturerName) VALUES ('$manufacturerID',
            '$manufacturer1')";
         $sql2 = "INSERT INTO Product (ProductID, ProductName) VALUES ('$productID',
            '$productName')";
         $sql3 = "INSERT INTO Sale (Shipping, Tax) VALUES ('$shipping',
            '$tax')";
         $sql4 = "INSERT INTO SaleItem (Quantity, SaleID, SalePrice) VALUES ('$quantity','$saleid',
            '$saleprice')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Customer data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         if(mysqli_query($conn, $sql1)){
            echo "<h3>Manufacturer Data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
     if(mysqli_query($conn, $sql2)){
            echo "<h3>Product Data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
     if(mysqli_query($conn, $sql3)){
            echo "<h3>Sale Data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
     if(mysqli_query($conn, $sql4)){
            echo "<h3>Sale Item Data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
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
