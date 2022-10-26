<!DOCTYPE html>
<html lang="en">
   <head>
      <title>GFG- Store Data</title>
   </head>
   <body>
      <center>
         <h1>Storing Form data in Database</h1>
         <button class="open-button" onclick="openForm()">Add a User</button>
<div class="form-popup" id="myForm">
         <form action="insert.php" method="post">
             
<p>
               <label for="custID">Customer ID:</label>
               <input type="text" name="custID" id="custID">
            </p>
 
             
<p>
               <label for="firstName">First Name:</label>
               <input type="text" name="first_name" id="firstName">
            </p>
 
             
<p>
               <label for="ManufacturerName">Manufacturer Name:</label>
               <input type="text" name="manufacturername" id="ManufacturerName">
            </p>
 
             
<p>
               <label for="manufacturerID">Manufacturer ID:</label>
               <input type="text" name="manufacturerid" id="manufacturerID">
            </p>
 
             
<p>
               <label for="productName">Product Name:</label>
               <input type="text" name="productname" id="productName">
            </p>
 <p>
               <label for="productID">Product ID:</label>
               <input type="text" name="productid" id="productID">
            </p>
 <p>
               <label for="shipping">Shipping Fee:</label>
               <input type="text" name="shipping" id="shipping">
            </p>
    <p>
               <label for="tax">Tax Fee:</label>
               <input type="text" name="tax" id="tax">
            </p>        
         <p>
               <label for="quantity">Quantity:</label>
               <input type="text" name="quantity" id="quantity">
            </p>         
              <p>
               <label for="saleid">Sale ID:</label>
               <input type="text" name="saleid" id="saleid">
            </p>  
              <p>
               <label for="saleprice">Sale Price:</label>
               <input type="text" name="saleprice" id="saleprice">
            </p>  
            <input type="submit" value="Submit">
         </form>
   </div>
      </center>
   </body>
    {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
} 
   function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
} 
</html>
