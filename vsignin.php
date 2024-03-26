<!DOCTYPE html>
<html>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {font-family: Arial, Helvetica, sans-serif;
  
  background-image:radial-gradient(rgb(255, 255, 255),rgb(141, 220, 237));
     background-repeat: no-repeat;
    background-size:cover;
    justify-content: center;
    text-align: center;

}
.card:hover{
  transform:scale(1.1);
}
.card{
  align-items: center;
  opacity:.75 ;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
h1{
  text-align: center;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

.container {
  padding: 16px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<body>
  <br>
  <br>
<center>
<div class="card" style="width: 400px;">
  <form action="/login_page_action.php" style="border:1px solid #ccc">
    <div class="card-header">
      <h1>Sign Up</h1>
    </div>
    <div class="card-body">
      <img src="Screenshot 2024-02-28 205035.png" width="100px" class="rounded-circle">
      <hr>
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" class="rounded" rounded>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" class="rounded" required>
      <label for="text"><b>Location</b></label>
      <input type="text" placeholder="Enter Address" name="address" class="rounded" required>

      <label for="psw"><b>Enter Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" class="rounded" required>

      <label for="psw"><b>Confirm Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" class="rounded" required>

      

      <p>By logging in you have to agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    </div>
    <div class="card-footer">
      <div class="clearfix">
        <button type="button" class="cancelbtn rounded">Cancel</button>
        <button type="submit" class="signupbtn rounded">Sign Up</button>
      </div>
    </div>
  </form>
</div>
</center>
<br>
<br>
</body>
</html>
