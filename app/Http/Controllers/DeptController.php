<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DeptController extends Controller
{
    public function Department()
    {
        $data = Department::all();
        return view('admin.department.department', compact('data'));
    }
    public function Storedepartment(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $department = new Department;
        $department->name = $request->name;
        $department->save();

        $notification = array(
            'message' => ' Department Data Saved',
            'alert-type' => 'success'
        );


        return redirect()->route('department')->with($notification);
    }
    public function Deletedept($id)
    {
        $data = Department::find($id);
        $data->delete();

        $notification = array(
            'message' => ' Department  Deleted',
            'alert-type' => 'error'
        );

        return redirect()->route('department')->with($notification);
    }
}
