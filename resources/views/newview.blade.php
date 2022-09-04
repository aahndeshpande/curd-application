<!DOCTYPE HTML>  
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<center><h1> aahn forum</h1></center>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<center>
<form method="post" action="newview.blade.php">
        <div class="select">
            <select name="slct" id="slct">
                <option>gender</option>
                <option value="1">male</option>
                <option value="2">female</option>

            </select>
        </div>
		
<br>
<div class="container">  <b>Name:</b> <br><input type="text" name="name"><input type ="text" name="middlenamee"><input type = "text" name="lastname">
 
  </div>
  <br>
  <div class="container"> 
  <b>class:<br></b>  <input type="text"  name ="class" >
	</div>

	<br>
  <div class="container">
  <b>E-mail:<br></b> <input type="text" name="email" >
  
  </div>
   <br>
  <div class="container">
  <b>AGE <br></b> <input type="text" name="age" >
  
</div>
<br>
  <div class="container">
  <b>ADDRESS <br></b> <textarea name="ADDRESS" rows="5" cols="40"></textarea>
 </div>
  <br>
  
<input type="reset" />
<input type="submit" />

</form>
</center>
</body>
</html>