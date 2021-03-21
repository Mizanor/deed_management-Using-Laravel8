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
                            <h1 class="m-0 text-dark">Clint Information</h1>
                           
                        </div>
                     
                        <!-- /.col -->
                        
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
       </div>

   
          <!-- Left col -->
          <section class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                    <h3>
                      @if(isset($editData))
                      Edit Clint
                      @else
                      Add Clint
                      @endif
                        
                    </h3>
              </div><!-- /.card-header -->
              <div class="card-body">

              <form method="post" action="{{(@$editData)?route('update',$editData->id):route('store') }}" id="myForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="">
                 <div class="form-row">
                  <div class="form-group col-md-4">
                    <label>গ্রহিতার নাম<font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" name="clintname" value="{{(@$editData->name)}}" type="text">
                  </div>
                  <div class="form-group col-md-4">
                    <label>দাতার নাম <font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" name="donor" value="{{(@$editData->clintname)}}" type="text">
                  </div>
                  <div class="form-group col-md-4">
                    <label>রেজিষ্ট্রীর তারিখ <font style="color: red">*</font></label>
                    <input class="form-control form-control-sm datepickr" autocomplete="off" name="regdate" value="{{(@$editData->regisryDAte)}}" type="text">
                  </div>

                  <div class="form-group col-md-4">
                    <label>দলিলের প্রকারভেদ <font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" name="deedtype" value="{{(@$editData->deedtype)}}" type="text">
                  </div>
                 
                  <div class="form-group col-md-4">
                    <label>মৌজার নাম<font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" name="mouja" value="{{(@$editData->mouja)}}" type="text">
                  </div>
                  <div class="form-group col-md-4">
                    <label>আনুমানিক মূল্য <font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" autocomplete="off" name="cost" value="{{(@$editData->cost)}}" type="number">
                  </div>
                  <div class="form-group col-md-4">
                    <label>দলিল নম্বর<font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" autocomplete="off" name="deedserial" value="{{(@$editData->deedSerial)}}" type="number">
                  </div>

                   <div class="form-group col-md-4">
                    <label>দলিল লিখক<font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" name="writer" value="{{(@$editData->writer)}}" type="text">
                  </div>
                   <div class="form-group col-md-4">
                    <label>মোসাবিদ্যা<font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" name="moshabidda" value="{{(@$editData->moshabidda)}}" type="text">
                  </div>
                 
                  

                  
                 
                
                   <div class="form-group col-md-4">
                    <label>রশিদ</label>
                    <input type="file" name="image" class="form-control form-control-sm" id="image" >
                   </div>
                   <div class="form-group col-md-4">
                    <img src="{{(!empty($editData->token))?url('public/upload/token/'.$editData->token):url('public/upload/no_images.png')}}" id="showImage" src=""style="width: 150px; height: 160px; border: 1px solid #000;">
                   </div>

                   <div class="form-group col-md-4">
                    <label>মূল ফাইল <font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" autocomplete="off" name="root1" value="" type="file">
                    <input class="form-control form-control-sm" autocomplete="off" name="root2" value="" type="file">
                  </div>
                   <div class="form-group col-md-4">
                    <label>গ্রহিতার মোবাইল নং <font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" autocomplete="off" name="phone" value="{{(@$editData->phone)}}" type="text">
                  </div>

                 </div>
                 <button type="submit" class="btn btn-primary ">{{ (@$editData)?'Update':'Submit' }}</button>  
              </form>
                
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            

           
            <!-- /.card -->
          </section>
          
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


        
    </x-slot>

    <x-slot name="footer">
        
    </x-slot>

    
</x-app-layout>