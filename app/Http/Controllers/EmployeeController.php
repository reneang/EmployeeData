<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{
    function GetEmployee(){
        $EmployeeData = DB::select('select * from employeedata where deleted = 0');
        // boolean 0 = false, 1 = true         
        return view ('employeelist', ["data" => $EmployeeData]);
    }

    function AddEmployee(Request $request){
        $EmployeeName = $request->name; 
        $EmployeePhoneNumber = $request->number; 
        $EmployeeAddress = $request->address; 
        
        DB::insert('insert into employeedata (Name, PhoneNumber, Address, deleted) values (?, ?, ?, ?)' , [$EmployeeName, $EmployeePhoneNumber, $EmployeeAddress, false]);
        return redirect('/employeelist');
    }

    function DeleteEmployee($id){
            //DB::delete('delete from todo where id = ?', [$id]);
            DB::update('update employeedata set deleted = 1 where id = ?' , [$id]);
            return redirect ('/employeelist');        
    }
}
?>