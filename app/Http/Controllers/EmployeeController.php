<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{
    function EmployeeAdd(){
        return view ('createemployee');
    }
    function GetEmployee(){
        $EmployeeData = DB::select('select * from employeedata where deleted = 0');
        // boolean 0 = false, 1 = true         
        return view ('employeelist', ["data" => $EmployeeData]);
    }

    function ResignEmployee(){
        $EmployeeResign = DB::select('select * from employeedata where deleted = 1');
        // boolean 0 = false, 1 = true         
        return view ('resignemployee', ["data" => $EmployeeResign]);
    }
    
    function AddEmployee(Request $request){
        $EmployeeName = $request->name; 
        $EmployeePhoneNumber = $request->number; 
        $EmployeeAddress = $request->address; 
        $EmployeeEmail = $request->email; 
        $EmployeeCompanyName = $request->company; 
        DB::insert('insert into employeedata (Name, PhoneNumber, Address, EmailAddress, CompanyName, deleted) values (?, ?, ?, ?, ?, ?)' , [$EmployeeName, $EmployeePhoneNumber, $EmployeeAddress, $EmployeeEmail, $EmployeeCompanyName, false]);
        return redirect('/');
    }

    function AddResign(Request $request){
        $ResignReason = $request->resign;
        $ResignID = $request->id; 
        
        DB::update('update employeedata set ResignationReason = ? where id = ?' , [$ResignReason, $ResignID]);
        return redirect('/employeeresign');
    }

    function DeleteEmployee($id){
            DB::update('update employeedata set deleted = 1 where id = ?' , [$id]);
            return redirect ('/');        
    }
}
?>