<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\didManagement;
use Illuminate\Support\Facades\DB;


class fromController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function test()
    {
        return view('test');
    }
    public function testll(Request $request)
    {
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            
        }else {
            dd('ok');
        }
    
       
    }

    public function store(Request $request){
        

        if ($_FILES["image"]["size"] > 500000) {
            $notification = array(
                'message' => 'Sorry, your file is too large.',
                'alert-type' => 'error'
            );
            return back()->with($notification);
            
        }
        else {
            $data = new didManagement;
            $data->name = $request->clintname;
            $data->clintname = $request->donor;
            $data->regisryDAte = date('Y-m-d', strtotime($request->regdate));
            $data->deedtype = $request->deedtype;
            $data->mouja = $request->mouja;
            $data->cost = $request->cost;
            $data->deedSerial = $request->deedserial;
            $data->moshabidda = $request->moshabidda;
            $data->writer = $request->writer;

            if ($request->file('root1')) {
            $molfile = $request->file('root1');
            $molfilename = date('YmdHi') . $molfile->getClientOriginalName();
            $molfile->move(public_path('upload/molfile'), $molfilename);
            $data['file'] = $molfilename;
            }


            if ($request->file('root2')) {
            $molfile = $request->file('root2');
            $molfilename = date('YmdHi') . $molfile->getClientOriginalName();
            $molfile->move(public_path('upload/molfile'), $molfilename);
            $data['file1'] = $molfilename;
            }


            

            $data->phone = $request->phone;

            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/token'), $filename);
                $data['token'] = $filename;
            }


        
            $data->save();
            $notification = array(
                'message' => 'Data inserted SuccessFully',
                'alert-type' => 'success'
            );
            return redirect()->route('table')->with($notification);
            
            
        }

    }

    public function botable()
    {
        $users = didManagement::all();
        
        
       return view('btable',compact('users')  );
    }
    public function delete($id)
    {
        $data = didManagement::find($id);
        @unlink(public_path('upload/token/' . $data->token));
        @unlink(public_path('upload/molfile/' . $data->file));
        @unlink(public_path('upload/molfile/' . $data->file1));
        $data->delete();
        $notification = array(
            'message' => 'Successfully Deleted',
            'alert-type' => 'info'
        );
        return back()->with($notification);
                  
    }

    public function edit($id)
    {
        $editData = didManagement::where('id', $id)->first();
        
        return view('form', compact('editData'));
                  
    }
    public function update(Request $request, $id)
    {
        $data = didManagement::where('id', $id)->first();
        $data->name = $request->clintname;
        $data->clintname = $request->donor;
        $data->regisryDAte = date('Y-m-d', strtotime($request->regdate));
        $data->deedtype = $request->deedtype;
        $data->mouja = $request->mouja;
        $data->cost = $request->cost;
        $data->deedSerial = $request->deedserial;
        $data->moshabidda = $request->moshabidda;
        $data->writer = $request->writer;

        if ($request->file('root1')) {
            $molfile = $request->file('root1');
            @unlink(public_path('upload/molfile/' . $data->file));
            $molfilename = date('YmdHi') . $molfile->getClientOriginalName();
            $molfile->move(public_path('upload/molfile'), $molfilename);
            $data['file'] = $molfilename;
        }


        if ($request->file('root2')) {
            $molfile = $request->file('root2');
            @unlink(public_path('upload/molfile/' . $data->file1));
            $molfilename = date('YmdHi') . $molfile->getClientOriginalName();
            $molfile->move(public_path('upload/molfile'), $molfilename);
            $data['file1'] = $molfilename;
        }

        $data->phone = $request->phone;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/token/' . $data->token));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/token'), $filename);
            $data['token'] = $filename;
        }
        $data->save();



        $notification = array(
            'message' => 'Data inserted SuccessFully',
            'alert-type' => 'success'
        );
        return redirect()->route('table')->with($notification);
                  
    }

    public function othersview()
    {
        

      

        return view('others');
        
        
      
    }
    public function deedAdd()
    {
        

      

        return view('deedFormet');
        
        
      
    }
}
