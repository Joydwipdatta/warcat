<?php

namespace App\Http\Controllers\Director;

use App\Models\Director;
use App\Models\AssignDept;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DirectorController extends Controller
{
    public function Director()
    {
        return view('admin.director.director');
    }
    public function StoreDirector(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|min:10|max:12',
            'email' => 'required|email',
        ]);

        $data = new Director;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->save();

        $notification = array(
            'message' => ' Director Data Saved',
            'alert-type' => 'success'
        );

        return redirect()->route('director')->with($notification);
    }
    public function  Assignedepartment()
    {
        $table = Director::all();
        return view('admin.director.viewdirector', compact('table'));
    }
    public   function viewdirectordata($id)
    {


        $director = Director::findOrFail($id);
        $departments = AssignDept::where('director_id', $id)
            ->with('department')
            ->get();


        return view('admin.director.viewassigndept', compact('director', 'departments'));
    }
    public function  deleteData($id)
    {
        $data = Assigndept::find($id);
        $data->delete();

        $notification = array(
            'message' => ' Deapartment Removed Successfully',
            'alert-type' => 'success'
        );


        return redirect()->route('view.director')->with($notification);
    }
    public function Table()
    {

        $department = AssignDept::with('director', 'department')->orderBy('director_id')->get();
        return view('admin.director.table', compact('department'));
    }
}
