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
                            <h1 class="m-0 text-dark">Project Management</h1>
                           
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
                      Edit Project
                      @else
                      Add Project
                      @endif
                        
                    </h3>
              </div><!-- /.card-header -->
              <div class="card-body">

              <form method="post" action="{{(@$editData)?route('project.update',$editData->id):route('project.store') }}" id="myForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="">
                 <div class="form-row">
                  <div class="form-group col-md-4">
                    <label>Project Name<font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" name="projectname" value="{{(@$editData->name)}}" type="text">
                  </div>
                  <div class="form-group col-md-4">
                    <label>Project Description <font style="color: red">*</font></label>
                   
                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="description">{{(@$editData->description)}}</textarea> 
                  </div>
                  <div class="form-group col-md-4">
                    <label>Project Location <font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" autocomplete="off" name="location" value="{{(@$editData->li1)}}" type="text">
                  </div>
                 
                  <div class="form-group col-md-4">
                    <label>Project Image 1<font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" name="img1" value="{{(@$editData->Image1)}}" type="file">
                  </div>
                  <div class="form-group col-md-4">
                    <label> Project Image 2 <font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" autocomplete="off" name="img2" value="{{(@$editData->Image2)}}" type="file">
                  </div>
                  <div class="form-group col-md-4">
                    <label>Project Image 3<font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" autocomplete="off" name="img3" value="{{(@$editData->Image3)}}" type="file">
                  </div>

                   <div class="form-group col-md-4">
                    <label>Project Image 4<font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" name="img4" value="{{(@$editData->Image4)}}" type="file">
                    
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