<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\image;

class imageSetupController extends Controller
{
    public function index()
    {
        $alldata = image::where('id',1)->first();
       
      return view('frontend.imageView', compact('alldata'));
    }
   

    public function store(Request $request)
    {
        // $data = image::find(1);


        // $file = $request->file('slider1');

        // $filename = date('YmdHi') . $file->getClientOriginalName();
        // $file->move(public_path('upload/slider'), $filename);


        // $data->update([
        //     'slider1' => $filename,
        //     'slider2' => $filename,

        // ]);
        
        $post = image::where('id', 1)->first();
        $post->clinttxt1 = $request->clintname;
        $post->clinttxt2 = $request->clintname2;
        $post->clinttxt3 = $request->clintname3;
        $post->clinttxt4 = $request->clintname4;
        $post->clintcmnt1 = $request->comment1;
        $post->clintcmnt2 = $request->comment2;
        $post->clintcmnt3 = $request->comment3;
        $post->clintcmnt4 = $request->comment4;

        if ($request->file('logo')) 
            {
                $file = $request->file('logo');
                @unlink(public_path('upload/slider/' . $post->logo));
                $logo = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/slider'), $logo);
                $post['logo'] = $logo;
            }

        if ($request->file('slider1')) 
            {
                $file = $request->file('slider1');
                @unlink(public_path('upload/slider/' . $post->slider1));
                $slider1 = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/slider'), $slider1);
                $post['slider1'] = $slider1;
            }
        if ($request->file('slider2')) 
            {
                $file = $request->file('slider2');
                @unlink(public_path('upload/slider/' . $post->slider2));
                $slider2 = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/slider'), $slider2);
                $post['slider2'] = $slider2;
            }
        if ($request->file('slider3')) 
            {
                $file = $request->file('slider3');
                @unlink(public_path('upload/slider/' . $post->slider3));
                $slider3 = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/slider'), $slider3);
                $post['slider3'] = $slider3;
            }
        if ($request->file('clint1')) 
            {
                $file = $request->file('clint1');
                @unlink(public_path('upload/slider/' . $post->clintimg1));
                $clint1 = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/slider'), $clint1);
                $post['clintimg1'] = $clint1;
            }
        if ($request->file('clint2')) 
            {
                $file = $request->file('clint2');
                @unlink(public_path('upload/slider/' . $post->clintimg2));
                $clint2 = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/slider'), $clint2);
                $post['clintimg2'] = $clint2;
            }
        if ($request->file('clint3')) 
            {
                $file = $request->file('clint3');
                @unlink(public_path('upload/slider/' . $post->clintimg3));
                $clint3 = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/slider'), $clint3);
                $post['clintimg3'] = $clint3;
            }
        if ($request->file('clint4')) 
            {
                $file = $request->file('clint4');
                @unlink(public_path('upload/slider/' . $post->clintimg4));
                $clint4 = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/slider'), $clint4);
                $post['clintimg4'] = $clint4;
            }
     
      
          


        $post->save();

       

        // @unlink(public_path('upload/slider/' . $post->slider2));
        // $file = $request->file('slider2');
        // $slider2 = date('YmdHi') . $file->getClientOriginalName();
        // $file->move(public_path('upload/slider'), $slider2);

        // @unlink(public_path('upload/slider/' . $post->slider3));
        // $file = $request->file('slider3');
        // $slider3 = date('YmdHi') . $file->getClientOriginalName();
        // $file->move(public_path('upload/slider'), $slider3);

        // @unlink(public_path('upload/slider/' . $post->clint1));
        // $file = $request->file('clint1');
        // $clint1 = date('YmdHi') . $file->getClientOriginalName();
        // $file->move(public_path('upload/slider'), $clint1);

        // @unlink(public_path('upload/slider/' . $post->clint2));
        // $file = $request->file('clint2');
        // $clint2 = date('YmdHi') . $file->getClientOriginalName();
        // $file->move(public_path('upload/slider'), $clint2);

        // @unlink(public_path('upload/slider/' . $post->clint3));
        // $file = $request->file('clint3');
        // $clint3 = date('YmdHi') . $file->getClientOriginalName();
        // $file->move(public_path('upload/slider'), $clint3);

        // @unlink(public_path('upload/slider/' . $post->clint4));
        // $file = $request->file('clint4');
        // $clint4 = date('YmdHi') . $file->getClientOriginalName();
        // $file->move(public_path('upload/slider'), $clint4);

        // @unlink(public_path('upload/slider/' . $post->logo));
        // $file = $request->file('logo');
        // $logo = date('YmdHi') . $file->getClientOriginalName();
        // $file->move(public_path('upload/slider'), $logo);





        // $up->update([
        //   'slider1' => $mlm,
        //     // 'slider2' => $slider2,
        //     // 'slider3' => $slider3,
        //     // 'clintimg1' => $clint1,
        //     // 'clintimg2' => $clint2,
        //     // 'clintimg3' => $clint3,
        //     // 'clintimg4' => $clint4,
        //     // 'clinttxt2' => $logo,
        //      'clinttxt1' => $name,
            
        //     // 'body' => $request->body
        // ]);
        $notification = array(
            'message' => 'Data inserted SuccessFully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
        
            


    }

    public function landview()
    {
        $alldata = image::where('id', 1)->first();

        return view('frontend.imageView', compact('alldata'));
    }
}
