<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dassdfdshboard') }} 
        </h2>
    </x-slot>

  <x-slot name="slot">
      <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                                </li>
                            </ul>
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Settings</h1>
                           
                        </div>
                     
                        <!-- /.col -->
                        
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
       </div>



 <section class="col-md-12">
     <div class="card">

            <div class="card-header">
                    <h3>WebSite Settings
                        
                    </h3>
                     
            </div>
        
        <div class="card-body">
            <form method="post" action="{{ route('setup.store') }}" id="myForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="">
                 <div class="form-row">

                   <div class="form-group col-md-6">
                    <label>Site Logo<font style="color: red">*</font></label>
                    <input type="file" name="logo" class="form-control form-control-sm"><br>
                     
                   </div>
                   <div class="form-group col-12">
                     <hr>
                  </div>
                  
                  <div class="form-group col-md-4">
                    <label>Slider1 <font style="color: red"> Size[1920*700] </font></label>
                    <input type="file" name="slider1" value="{{ $alldata->slider1 }}" class="form-control form-control-sm"><br>
                     
                   </div>
                  <div class="form-group col-md-4">
                    <label>Slider2<font style="color: red"> Size[1920*700]</font></label>
                    <input type="file" name="slider2" class="form-control form-control-sm"><br>
                     
                   </div>
                  <div class="form-group col-md-4">
                    <label>Slider3<font style="color: red"> Size[1920*700]</font></label>
                    <input type="file" name="slider3" class="form-control form-control-sm"><br>
                  

                     
                   </div><br><br>

                  <div class="form-group col-12">
                     <hr>
                  </div>

               
                  
                  <div class="form-group col-md-6">
                    <label>clint1</label>
                    <input type="file" name="clint1" class="form-control form-control-sm"><br>
                    <input value="{{$alldata->clinttxt1 }}" class="form-control form-control-sm" name="clintname" value="" type="text" placeholder="Clint Name"><br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="comment1">{{$alldata->clintcmnt1 }}</textarea>    
                  </div>
                  <div class="form-group col-md-6">
                    <label>clint2</label>
                    <input type="file" name="clint2" class="form-control form-control-sm"><br>
                    <input value="{{$alldata->clinttxt2 }}" class="form-control form-control-sm" name="clintname2" value="" type="text" placeholder="Clint Name"><br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="comment2">{{$alldata->clintcmnt2 }}</textarea>    
                  </div>
                  <div class="form-group col-md-6">
                    <label>clint3</label>
                    <input type="file" name="clint3" class="form-control form-control-sm"><br>
                    <input value="{{$alldata->clinttxt3 }}" class="form-control form-control-sm" name="clintname3" value="" type="text" placeholder="Clint Name"><br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="comment3">{{$alldata->clintcmnt3 }}</textarea>    
                  </div>
                  <div class="form-group col-md-6">
                    <label>clint4</label>
                    <input value="{{$alldata->clinttxt4 }}" type="file" name="clint4" class="form-control form-control-sm"><br>
                    <input class="form-control form-control-sm" name="clintname4" value="" type="text" placeholder="Clint Name"><br>
                   
                    <textarea  class="form-control" id="exampleFormControlTextarea1" rows="2" name="comment4">{{$alldata->clintcmnt4 }}</textarea>    
                  </div>
                  

                 </div>
                

                  
                  
                 <button type="submit" class="btn btn-primary">Submit</button>  
              </form>

              

                
        </div>

    </div>

     </section>

  

        
    </x-slot>

    <x-slot name="footer">
        
    </x-slot>

    
</x-app-layout>