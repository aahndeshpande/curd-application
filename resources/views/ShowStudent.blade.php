<!DOCTYPE HTML>  
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  


</head>
<body>
<div class="well">
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 


<form method="post" action="create">
  @csrf
  
<div class="form-group">   
		
<div class="col-xs-6">
<div class="container-fluid">  <b>Name:</b> <br><input type="text" name="name" class="form-control">
  </div>
  <br>
  <div class="container-fluid"> 
  <b>phone:<br></b>  <input type="text"  name ="phone" class="form-control">
	</div>
 <br>

  <div class="container-fluid">
  <b>E-mail:<br></b> <input type="text" name="email" class="form-control" >
  
  </div>

  <div class="container-fluid">
  <b>state<br></b> <input type="text" name="state" class="form-control" >
</div> 
</div>
<br>
<div class="col-xs-6">
  <div class="container-fluid">
  <b>district no <br></b> <input type="text" name="districtcode" class="form-control">
 </div>

  <div class="container-fluid">
  <b>pin code <br></b> <input type="text" name="pincode" class="form-control"  >
 </div>

  <div class="container-fluid">
  <b>course<br></b> <input type="text" name="course" class="form-control"  >
 </div>

  <div class="container-fluid">
  <b>year<br></b> <input type="text" name="year" class="form-control" >
 </div>
 <div class="container-fluid ">
  <b>address<br></b> <input type="text" name="address" class="form-control" ></textarea>
 </div>
</div>
</div>
<input type="reset" />
<button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>

</div>
</form>

<div class="container-fluid">
  <center><h1 class="text-danger">main table</h1></center>
  <pre>
    <table class="table table-striped table table-bordered table-hover " >
    <thead>
        <tr class="text-primary">
            <th> id</th>
            <th> name</th>
            <th> phone</th>
            <th>email</th>
            <th>address</th>
            <th>district code</th>
            <th>pin code</th>
            <th>course</th>
            <th>state</th>
            <th>year</th>

          
            
        </tr>
    </thead>
    <tbody>
         @foreach($studentList as $user)
          <tr>
              <td> {{$user->id}} </td>
              <td> {{$user->name}} </td>
              <td> {{$user->phone}} </td>
              <td> {{$user->email}} </td>
              <td> {{$user->address}} </td>
              <td> {{$user->districtcode}} </td>
              <td> {{$user->pincode}} </td>
              <td> {{$user->course}} </td>
              <td> {{$user->state}} </td>
              <td> {{$user->year}} </td>
              <td><a href = 'edit-employees/{{ $user->id }}'>Edit</a></td>
              <td><a href = 'delete/{{ $user->id }}'>Delete</a></td>
              



          </tr>
         @endforeach
         
   </tbody>
</table>

</pre>
<div class="row">
 
<div class="col-xs-6">
  

  <div class="table-responsive">
 
  <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo1">district table</button>
  <div id="demo1" class="collapse">
            <table class="table table-striped table table-bordered table-hover ">
              <thead>
                <tr>
                  <th class="col-md-1">district code</th>
                  <th class="col-md-2">district name</th>
                
                </tr>
              </thead>
              
              <tbody>
         @foreach($studentListt as $userr)
          <tr>
              <td> {{$userr->statecode}} </td>
              <td> {{$userr->statename}} </td>

          </tr>
         @endforeach
        
 
                 
              </tbody>
            </table>
</div>
          </div>
</div>

  <div class="col-xs-6">
 
          <div class="table-responsive">
          <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">state table</button>
  <div id="demo"  class="collapse">

            <table class="table table-striped table table-bordered table-hover ">
              <thead>
                <tr>
                  <th class="col-md-1">state name</th>
                  <th class="col-md-2">state code</th>
                 
                </tr>
              </thead>
              <tbody>
              <tbody>
         @foreach($studentListts as $userk)
          <tr>
              <td> {{$userk->districtname}} </td>
              <td> {{$userk->districtcode}} </td>

          </tr>
         @endforeach
        
 
                 
              </tbody>
              </tbody>
            </table>
</div>
</div>
</div>

 </body>

 </html>

     