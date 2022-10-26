<!DOCTYPE html>
<html>
 
<head>
    <title>Update Page page</title>
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
         
       
        $custid1 =  $_POST['ID1'];
        $first2 = $_POST['first_name2'];
      $manName =  $_POST['manufacturername2'];
        $manufacturer2 = $_POST['manufacturerid2'];
      $prodName = $_POST['productname2'];
        $product3 =  $_POST['productid3'];
        $sale2 =  $_POST['saleid3'];
        $saleprice4 = $_POST['saleprice2'];
      
        $sql5 = "Update Customer Set FirstName = ('$first2') Where CustomerID = ('$custid1')";
         $sql6 = "Update Manufacturer Set ManufacturerName = ('$manName') Where ManufacturerID = ('$manufacturer2')";
         $sql7 = "Update Product Set ProductName = ('$prodName') Where ProductID = ('$product3')";

         $sql8 = "Update SaleItem Set SalePrice = ('$saleprice4') Where SaleID = ('$sale2')";
         
        if(mysqli_query($conn, $sql5)){
            echo "<h3>Customer data updated from database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         if(mysqli_query($conn, $sql6)){
            echo "<h3>Manufacturer Data updated from database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
     if(mysqli_query($conn, $sql7)){
            echo "<h3>Product Data updated from  database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

     if(mysqli_query($conn, $sql8)){
            echo "<h3>Sale Item Data updated from database successfully."
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
