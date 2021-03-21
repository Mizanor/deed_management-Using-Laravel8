<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dassdfdshboard') }} 
        </h2>
    </x-slot>

  <x-slot name="slot">
        
 
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
               
              </div><!-- /.card-header -->
              <div class="card-body">

              <form method="post" action="{{ route('othersStore') }}" id="myForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="">
                 <div class="form-row">
                     <div class="form-group col-md-4">
                    <label>দলিলের প্রকারভেদ <font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" name="deedtype" value="" type="text">
                  </div>
                  <div class="form-group col-md-4">
                    <label>গ্রহিতার নাম<font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" name="clintname" value="" type="text">
                  </div>
                  <div class="form-group col-md-4">
                    <label>দাতার নাম <font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" name="donor" value="" type="text">
                  </div>
                  <div class="form-group col-md-4">
                    <label>রেজিষ্ট্রীর তারিখ <font style="color: red">*</font></label>
                    <input class="form-control form-control-sm datepickr" placeholder="DD/MM/YY" autocomplete="off" name="regdate" value="" type="text">
                  </div>

                  
                 
                 

                   <div class="form-group col-md-4">
                    <label>মূল <font style="color: red">*</font></label>
                    <input class="form-control form-control-sm" autocomplete="off" name="root1" value="" type="file">
                  
                  </div>
                 

                 </div>
                 <button type="submit" class="btn btn-primary btn-sm">Submit</button>  
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