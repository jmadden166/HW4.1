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
         
       
 
        $first = $_POST['first_name1'];
        $manufacturer1 = $_POST['manufacturerid1'];
        $product1 =  $_POST['productid1'];
        $sale1 =  $_POST['saleid1'];
        
        $sql5 = "Delete FROM Customer Where FirstName = ('$first')";
         $sql6 = "Delete From Manufacturer Where ManufacturerID = ('$manufacturer1')";
         $sql7 = "Delete FROM Product Where ProductID = ('$product1')";

         $sql8 = "Delete From SaleItem Where SaleID = ('$sale1')";
         
        if(mysqli_query($conn, $sql5)){
            echo "<h3>Customer data deleted from database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         if(mysqli_query($conn, $sql6)){
            echo "<h3>Manufacturer Data deleted from database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
     if(mysqli_query($conn, $sql7)){
            echo "<h3>Product Data deleted from  database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

     if(mysqli_query($conn, $sql8)){
            echo "<h3>Sale Item Data deleted from database successfully."
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
