
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//myDB is a database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//users is table
if(isset($_POST['submit'])){
    $sql = "INSERT INTO users (usrnm, email, psw,cnfpsw)
    VALUES ('".$_POST["usrnm"]."','".$_POST["email"]."','".$_POST["psw"]."','".$_POST["cnfpsw]."')";
}
alert "Data Saved Succesfully in Database";
else
alert "Data Not Saved Please Try Again";

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
  
  }

.icon {
  padding: 10px;
  background: rgb(210, 211, 212);
  color: black;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 70%;
  padding: 10px;
  outline: none;
  border: 2px solid rgb(210, 211, 212);
  border-radius: 0px 4px 4px 0px;
  color: grey;
  font-size:medium;
}

.input-field:focus {
  border: 2px solid  rgb(210, 211, 212);
}

/* Set a style for the submit button */
.btn {
  background-color: rgb(11, 170, 130);
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
  font-weight: 400;
  border-radius: 2px 2px 2px 2px;
}

.btn:hover {
  opacity: 1;
}
hr{
    margin-bottom: 30px;
    width: 86%;
    float: left;
}
</style>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="max-width:500px;margin:auto">
  <h2>Sign Up</h2>
  <p style="color: grey;">Please fill in this form to create an account!</p>
  <hr>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-lock icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>
  
  <div class="input-container">
    <i class="fa fa-lock icon"></i>
    <input class="input-field" type="password" placeholder="Confirm Password" name="cnfpsw">
  </div>
  <div style="margin-bottom: 20px;">
  <input type="checkbox" id="agree" name="agree" value="agree">
  <small><strong><label for="agreed"> I accept the <span style="color:rgb(11, 170, 130)">Terms of Use</span> & <span style="color:rgb(11, 170, 130)">Privacy Policy</span> </label><br></strong></small>
</div>
  <button type="submit" class="btn" style="font-size:medium;"><strong>Sign Up</strong></button>
</form>

</body>
</html>
