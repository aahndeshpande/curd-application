<!DOCTYPE html>
<html>
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  

<title>employees | Edit</title>
</head>
<body>
<form action = "/edit-employees/<?php echo $studentList[0]->id; ?>" method = "post">
{{--<input type = "hidden" name = "_token" value = "{{csrf_token()}}">--}}
@csrf
  

<div class="form-group">   
		
<div class="col-xs-6">
<div class="container-fluid">  <b>Name:</b> <br><input type="text" name="name"
value = '<?php echo$studentList[0]->name;?>' class="form-control">
  </div>
  <br>
  <div class="container-fluid"> 
  <b>phone:<br></b>  <input type="text"  name ="phone"
  value = '<?php echo$studentList[0]->phone; ?>' class="form-control">
	</div>
 <br>

  <div class="container-fluid">
  <b>E-mail:<br></b> <input type="text" name="email"
  value = '<?php echo$studentList[0]->email; ?>' class="form-control" >
  
  </div>

  <div class="container-fluid">
  <b>state<br></b> <input type="text" name="state" value = '<?php echo$studentList[0]->state; ?>' class="form-control" >
</div> 
</div>
<br>
<div class="col-xs-6">
  <div class="container-fluid">
  <b>district no <br></b> <input type="text" name="districtcode"
  value = '<?php echo$studentList[0]->districtcode; ?>' class="form-control">
 </div>

  <div class="container-fluid">
  <b>pin code <br></b> <input type="text" name="pincode" value = '<?php echo$studentList[0]->pincode; ?>' class="form-control"  >
 </div>

  <div class="container-fluid">
  <b>course<br></b> <input type="text" name="course"  value = '<?php echo$studentList[0]->course; ?>'class="form-control"  >
 </div>

  <div class="container-fluid">
  <b>year<br></b> <input type="text" name="year" value = '<?php echo$studentList[0]->year; ?>' class="form-control" >
 </div>
  
  <div class="container-fluid">
  <b>ADDRESS <br></b> <input type="text" name="address" value = '<?php echo$studentList[0]->address; ?>' class="form-control" ></textarea>
 </div>
</div>
</div>
<input type="reset" />
<button type="submit"  value = "Update employee" class="btn btn-primary">Submit</button>

</div>
</form>

</body>
</html>