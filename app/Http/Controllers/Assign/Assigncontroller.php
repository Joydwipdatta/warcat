<?php

namespace App\Http\Controllers\Assign;

use App\Models\Director;
use App\Models\SecAssign;
use App\Models\Secretary;
use App\Models\AssignDept;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Assigncontroller extends Controller
{
    public function Assign()
    {
        $director = Director::all();
        // $department = Department::all();
        $department = Department::whereNotIn('id', AssignDept::pluck('department_id')->toArray())->get();

        return view('admin.assign.assigndirector', compact('director', 'department'));
    }
    public function Storeassign(Request $request)
    {

        $request->validate([
            'department_id' => 'required|array|min:1|unique:assign_depts,department_id', // Validate for at least one department
            'director_id' => 'required', // Validate for a director
            // 'director_id' => 'required_if:director_id',

        ], [
            'department_id.unique' => 'The department is already allotted to another director.',

        ]);

        $directorId = $request->director_id;
        $departmentIds = $request->department_id;



        foreach ($departmentIds as $departmentId) {
            AssignDept::create([
                'director_id' => $directorId,
                'department_id' => $departmentId,
            ]);
        }
        $notification = array(
            'message' => ' Department Successfully assigned to the  Director',
            'alert-type' => 'success'
        );
        return redirect()->route('assign')->with($notification);
    }





    //==================secretary assign============
    public function SecAssign()
    {
        $secretary = Secretary::all();
        $department = Department::whereNotIn('id', SecAssign::pluck('department_id')->toArray())->get();

        return view('admin.assign.assignsecretary', compact('secretary', 'department'));
    }
    public function Storesecassign(Request $request)
    {
        $request->validate([
            'department_id' => 'required|array|min:1|unique:sec_assigns,department_id', // Validate for at least one department
            'secretary_id' => 'required', // Validate for a director

        ], [
            'department_id.unique' => 'The department is already allotted .',
        ]);
        $secretary = $request->secretary_id;
        $departmentIds = $request->department_id;

        foreach ($departmentIds as $departmentId) {
            SecAssign::create([
                'secretary_id' => $secretary,
                'department_id' => $departmentId,
            ]);
        }
        $notification = array(
            'message' => 'Department Assign to Secretary Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('secassign')->with($notification);
    }

    // ===============director update============
    public function Directorshow($id)
    {

        $director = Director::find($id);
        $department = Department::whereNotIn('id', AssignDept::pluck('department_id')->toArray())->get();

        return view('admin.assign.assigndirecid', compact('director', 'department'));
    }
    public function updatedirecdept(Request $request)
    {
        $request->validate([
            'department_id' => 'required|array|min:1|unique:assign_depts,department_id', // Validate for at least one department
            'director_id' => 'required', // Validate for a director

        ], [
            'department_id.unique' => 'The department is already allotted to another director.',

        ]);
        $directorId = $request->director_id;;
        $departmentIds = $request->department_id;

        foreach ($departmentIds as $departmentId) {
            AssignDept::create([
                'director_id' => $directorId,
                'department_id' => $departmentId,
            ]);
        }
        $notification = array(
            'message' => 'Department Assign to Director Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('view.director')->with($notification);
    }
    // ==============UPDATE SECRETARY==================
    public function showsecdept($id)
    {
        $secretary = Secretary::find($id);
        $department = Department::whereNotIn('id', SecAssign::pluck('department_id')->toArray())->get();

        return view('admin.assign.assignsecid', compact('secretary', 'department'));
    }
    public function  updatesecdept(Request $request)
    {
        $request->validate([
            'department_id' => 'required|array|min:1|unique:sec_assigns,department_id', // Validate for at least one department
            'secretary_id' => 'required', // Validate for a director

        ], [
            'department_id.unique' => 'The department is already allotted .',
        ]);
        $secretary = $request->secretary_id;
        $departmentIds = $request->department_id;

        foreach ($departmentIds as $departmentId) {
            SecAssign::create([
                'secretary_id' => $secretary,
                'department_id' => $departmentId,
            ]);
        }
        $notification = array(
            'message' => 'Department Assign to Secretary Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('view.Secretary')->with($notification);
    }
}
