<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\deed;

class deedController extends Controller
{

    public function index()
    {
        $alldata = deed::all();
        return view('deedsView', compact('alldata'));
    }


    public function store(Request $request)
    {
        $data = new deed;
        $data->deedtype = $request->deedtype;
        
        if ($request->file('root1')) {
            $molfile = $request->file('root1');
            $molfilename = date('YmdHi') . $molfile->getClientOriginalName();
            $molfile->move(public_path('upload/deeds'), $molfilename);
            $data['file'] = $molfilename;
        }

        $data->save();
        $notification = array(
            'message' => 'Data inserted SuccessFully',
            'alert-type' => 'success'
        );
        return redirect()->route('deeds.view')->with($notification);
    }
    public function delete($id)
    {
        $data = deed::find($id);

        @unlink(public_path('upload/deeds/' . $data->file));

        $data->delete();
        $notification = array(
            'message' => 'Successfully Deleted',
            'alert-type' => 'info'
        );
        return back()->with($notification);
    }
}
