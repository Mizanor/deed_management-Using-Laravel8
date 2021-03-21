<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\land;

class landController extends Controller
{
    public function index()
    {
        $users = land::all();

        return view('frontend.landview', compact('users'));
    }
    public function add()
    {
        return view('frontend\landAdd');
    }

    public function store(Request $request)
    {
        
        $data = new land;
       
        $data->name = $request->projectname;
        $data->description = $request->description;
        $data->li1 = $request->location;
      
        if ($request->file('img1')) {
            $file = $request->file('img1');
            @unlink(public_path('upload/projects/' . $data->img1));
            $img1 = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/projects'), $img1);
            $data['Image1'] = $img1;
        }

        if ($request->file('img2')) {
            $file = $request->file('img2');
            @unlink(public_path('upload/projects/' . $data->img2));
            $img2 = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/projects'), $img2);
            $data['Image2'] = $img2;
        }
        if ($request->file('img3')) {
            $file = $request->file('img3');
            @unlink(public_path('upload/projects/' . $data->img3));
            $img3 = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/projects'), $img3);
            $data['Image3'] = $img3;
        }
        if ($request->file('img4')) {
            $file = $request->file('img4');
            @unlink(public_path('upload/projects/' . $data->img4));
            $img4 = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/projects'), $img4);
            $data['Image4'] = $img4;
        }
       



        $data->save();



        $notification = array(
            'message' => 'Data inserted SuccessFully',
            'alert-type' => 'success'
        );
        return redirect()->route('land.view') ->with($notification);
     }

    public function edit($id)
    {
        $editData = land::where('id', $id)->first();

        return view('frontend\landAdd', compact('editData'));
    }
    public function delete($id)
    {
        $data = land::find($id);
        @unlink(public_path('upload/projects/' . $data->Image1));
        @unlink(public_path('upload/projects/' . $data->Image2));
        @unlink(public_path('upload/projects/' . $data->Image3));
        @unlink(public_path('upload/projects/' . $data->Image4));
        $data->delete();
        $notification = array(
            'message' => 'Successfully Deleted',
            'alert-type' => 'info'
        );
        return back()->with($notification);
    }

    public function update(Request $request, $id)
    {
        $data = land::where('id', $id)->first();
        $data->name = $request->projectname;
        $data->description = $request->description;
        $data->li1 = $request->location;

        if ($request->file('img1')) {
            $file = $request->file('img1');
            @unlink(public_path('upload/projects/' . $data->Image1));
            $img1 = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/projects'), $img1);
            $data['Image1'] = $img1;
        }

        if ($request->file('img2')) {
            $file = $request->file('img2');
            @unlink(public_path('upload/projects/' . $data->Image2));
            $img2 = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/projects'), $img2);
            $data['Image2'] = $img2;
        }
        if ($request->file('img3')) {
            $file = $request->file('img3');
            @unlink(public_path('upload/projects/' . $data->Image3));
            $img3 = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/projects'), $img3);
            $data['Image3'] = $img3;
        }
        if ($request->file('img4')) {
            $file = $request->file('img4');
            @unlink(public_path('upload/projects/' . $data->Image4));
            $img4 = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/projects'), $img4);
            $data['Image4'] = $img4;
        }




        
        $data->save();



        $notification = array(
            'message' => 'Data Updated SuccessFully',
            'alert-type' => 'success'
        );
        return redirect()->route('land.view')->with($notification);
    }
}
