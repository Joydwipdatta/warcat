<?php

namespace App\Http\Controllers\secretary;

use App\Models\SecAssign;
use App\Models\Secretary;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SecretaryController extends Controller
{
    public function Secretary()
    {
        return view('admin.secretary.secretary');
    }
    public function  Storesecretary(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|min:10|max:12',
            'email' => 'required|email',
        ]);
        $data = new Secretary;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->save();

        $notification = array(
            'message' => ' Secretary Data Saved',
            'alert-type' => 'success'
        );
        return redirect()->route('secretary')->with($notification);
    }
    public function  ViewTable()
    {
        $table = Secretary::all();

        return view('admin.secretary.viewsecretary', compact('table'));
    }
    public   function viewsecretarydata($id)
    {

        $secretary = Secretary::findOrFail($id);
        $departments = SecAssign::where('secretary_id', $id)
            ->with('department')
            ->get();
        return view('admin.secretary.viewassignsec', compact('secretary', 'departments'));
    }
    public function  deleteData($id)
    {
        $data = SecAssign::find($id);
        $data->delete();
        $notification = array(
            'message' => ' Deapartment Removed Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('view.Secretary')->with($notification);
    }
    public function SecTable()
    {

        $department = SecAssign::with('secretary', 'department')->orderBy('secretary_id')->get();
        return view('admin.secretary.sectable', compact('department'));
    }

    //
}
