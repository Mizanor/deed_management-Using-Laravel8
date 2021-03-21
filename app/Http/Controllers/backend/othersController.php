<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\others;

class othersController extends Controller
{
    public function index()
    {
        $alldata = others::all();
        return view('othersView', compact('alldata'));
    }


    public function store(Request $request)
    {
            $data = new others;
            $data->deedtype = $request->deedtype;
            $data->name = $request->clintname;
            $data->clintname = $request->donor;
            $data->regisryDAte = date('Y-m-d', strtotime($request->regdate));

            if ($request->file('root1')) {
                $molfile = $request->file('root1');
                $molfilename = date('YmdHi') . $molfile->getClientOriginalName();
                $molfile->move(public_path('upload/others'), $molfilename);
                $data['file'] = $molfilename;
            }

            $data->save();
            $notification = array(
                'message' => 'Data inserted SuccessFully',
                'alert-type' => 'success'
            );
        return redirect()->route('others.view')->with($notification);
    }
    public function delete($id)
    {
        $data = others::find($id);
       
        @unlink(public_path('upload/others/' . $data->file));
     
        $data->delete();
        $notification = array(
            'message' => 'Successfully Deleted',
            'alert-type' => 'info'
        );
        return back()->with($notification);
    }

}
