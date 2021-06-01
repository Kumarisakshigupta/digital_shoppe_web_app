<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style>
   body {
      font-family: Arial;
      color: white;
   }
   h1{
      padding:20px;
   }
   .left,.right {
      height: 100%;
      width: 50%;
      position: fixed;
      z-index: 1;
      top: 0;
      overflow-x: hidden;
      padding-top: 20px;
   }
   .left {
      left: 0;
      background-color: rgb(169,169,169);
   }
   .right {
      right: 0;
      background-color: rgb(0,0,0);
   }
   .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
   }
   .centered img {
      width: 150px;
      border-radius: 50%;
   }
}
</style>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="left">
<h1> <center>Share the Details</center></h1>
<div class="container"><br>
<div class="col-lg-6 m-auto d-block">
<form action="userinfo.php" method="POST"  onsubmit="return validation()" >
<div class="form-group">
<label for="user"> Name: </label>
<input type="text" name="username" class="form-control" id="user"
autocomplete="off" placeholder="Name">
<span id="username" class="text-danger font-weight-bold">
</span>
</div>
<div class="form-group">
<label > Mobile Number: </label>
<input type="text" name="mobilenum" class="form-control"
id="mobileNumber" autocomplete="off" placeholder="Number">
<span id="mobileno" class="text-danger font-weight-bold">
</span>
</div>
<div class="form-group">
<label > Email: </label>
<input type="text" name="email" class="form-control"
id="emails" autocomplete="off" placeholder="Email">
<span id="emailids" class="text-danger font-weight-bold">
</span>
</div>
<div class="form-group">
<label > Message: </label>
<input type="text" name="messages" class="form-control"
id="Message" autocomplete="off" placeholder="write here...">
<span id="mess" class="text-danger font-weight-bold">
</span>
</div>
<div style="text-align: center;">
<input type="Submit" name="Submit" value="Submit"
autocomplete="off">
</div>
</form><br><br>
</div>
</div>
<script type="text/javascript">
function validation(){
var user = document.getElementById('user').value;
var mobileNumber = document.getElementById('mobileNumber').value;
var emails = document.getElementById('emails').value;
var mess = document.getElementById('Message').value;
if(user == ""){
document.getElementById('username').innerHTML =" ** Please fill the field";
return false;
}
if((user.length <= 2) || (user.length > 20)) {
document.getElementById('username').innerHTML =" ** Username lenght must be between 2 and 20";
return false;
}
if(!isNaN(user)){
document.getElementById('username').innerHTML =" ** only characters are allowed";
return false;
}
if(mobileNumber == ""){
document.getElementById('mobileno').innerHTML =" ** Please fill the Mobile Number field";
return false;
}
if(isNaN(mobileNumber)){
document.getElementById('mobileno').innerHTML =" ** user must write digits only not characters";
return false;
}
if(mobileNumber.length!=10){
document.getElementById('mobileno').innerHTML =" ** Mobile Number must be 10 digits only";
return false;
}
if(emails == ""){
document.getElementById('emailids').innerHTML =" ** Please fill the Email id field";
return false;
}
if(emails.indexOf('@') <= 0 ){
document.getElementById('emailids').innerHTML =" ** @ InvalidPosition";
 return false;
}
if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
document.getElementById('emailids').innerHTML =" ** . Invalid Position";
return false;
}
if(mess == ""){
document.getElementById('mess').innerHTML =" ** Please fill the field";
return false;
}
if((mess.length <= 2) || (mess.length > 150)) {
document.getElementById('mess').innerHTML =" ** Username lenght must be between 2 and 150";
return false;
}
if(!isNaN(mess)){
document.getElementById('mess').innerHTML =" ** only characters are allowed";
return false;
}
}
</script>
</div>
<div class="right">
  <div class="centered">
    <div>
       <p style="color: white; font-size: 40px"><strong><bold>Give us a Call...</bold></strong></p>
       <p style="color: white; font-size: 35px"><strong><bold>9711716323</bold></strong></p>
       <br>
       <p style="color: white; font-size: 30px"><strong><bold>Hours of Operation - 9AM-9PM</bold></strong></p>
       <br>
       <p style="color: white; font-size: 20px"><strong><bold>Call us for any kind of support. We will provide you effective resolution for any query you have.</bold></strong></p>
       <br>
       </div>
</div>
     
</body>
</html> 
