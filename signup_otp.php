<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body  {
  background-image: url("uhms_user_login_background_pic.png");
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}


body {font-family: Arial, Helvetica, sans-serif;
    width: 500px;
   height: 300px;
   padding: 200px;
   margin: 50px 450px;
  
}
form 
{
    border: 3px solid #f1f1f1;
   

}

input[type=text] {
  width: 100%;
  padding: 12px 1px;
  margin: 0px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color:  #f55d0494;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
}



}

</style>
</head>
<body>

<form action="confirm_pass1.php"  method="post">
  

  <div class="container">
    <label for="otp"><b>OTP</b></label>
    <input type="text" placeholder="Enter the 6 digits OTP" name="otp" required>

   
        
    <button type="submit">Submit</button>
  </div>

  
</form>
</body>
</html>
