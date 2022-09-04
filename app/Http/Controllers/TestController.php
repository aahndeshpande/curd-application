<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employees;

class TestController extends Controller
{
    public function Index()
    {
      //  $studentList = Employees::get();
        //print($studentList);
      // return view('ShowStudent'); 
      $studentListt = DB::table('statetable')->select('statename','statecode')->get();
      $studentListts = DB::table('districttable')->select('districtname','districtcode')->get();

      $studentList = DB::table('Employees')->select('id','name', 'phone','email','address','districtcode','pincode','course','year','state')->get();
      return view('ShowStudent', compact('studentList','studentListt','studentListts'));
    }
    public function show($id) {
      $studentList = DB::select('select * from Employees where id = ?',[$id]);
      return view('employeesupdate',compact('studentList'));
    }
    public function edit(Request $request,$id) {
      $name = $request->input('name');
      $phone = $request->input('phone');
      $email = $request ->input('email');
      $districtcode = $request ->input('districtcode');
      $pincode = $request ->input('pincode');
      $course = $request ->input('course');
      $state = $request -> input('state');
      $year = $request -> input('year');
      $this->validate($request,[
        'name'=>'required|max:20|unique:Employees',
        'phone'=>'required|max:10',
        'email'=>'required|E-Mail',
        'districtcode'=>'required',
        'pincode'=>'required',
        'course'=>'required',
        'state'=>'required',
        'year'=>'required',
      ]);
      DB::update('update Employees set name = ?,phone = ?,email =?,districtcode =?,pincode =?,course =?, state=?,year=? where id = ?',[$name,$phone,$email,$districtcode,$pincode,$course,$state,$year,$id]);
      echo "Record updated successfully.
      ";
      $studentList = DB::select('select * from Employees where id = ?',[$id]);
      return view('employeesupdate',compact('studentList'));
      }
      public function destroy($id) {
        DB::delete('delete from Employees where id = ?',[$id]);
        
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/StudentList">Click Here</a> to go back.';
      }

        public function insert(Request $request){
          $Employees = new Employees;
          $this->validate($request,[
            'name'=>'required|max:20|unique:Employees',
            'phone'=>'required|max:10',
            'email'=>'required|E-Mail',
            'districtcode'=>'required',
            'pincode'=>'required',
            'course'=>'required',
            'state'=>'required',
            'year'=>'required',  
          ]);
          $Employees->name = $request->name;
          $Employees->phone = $request->phone;
          $Employees->address = $request->address;
          $Employees->email = $request->email;
          $Employees->districtcode = $request->districtcode;
          $Employees->pincode = $request->pincode;
          $Employees->course = $request->course;
          $Employees->state = $request->state;
          $Employees->year = $request->year;
      
          $Employees->save();     
     }
    
  
       
     
    
      
    
    }