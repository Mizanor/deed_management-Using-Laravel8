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
                            <h1 class="m-0 text-dark">All Clint List</h1>
                           
                        </div>
                     
                        <!-- /.col -->
                        
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
       </div>



 <section class="col-md-12">
     <div class="card">

            <div class="card-header">
                    <h3>
                        
                        Registry Book
                       
                         <a class="btn btn-success float-right btn-sm" href="{{ route('from') }}"><i class="fa fa-list"></i>Add</a>
                    </h3>
                     
            </div>
        
        <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th style="font-size: 12px" >সি.নং</th>
                            <th style="font-size: 12px" >গ্রহিতার নাম</th>
                            <th style="font-size: 12px" >দাতার নাম</th>
                            <th style="font-size: 12px" >রেজিষ্ট্রীর তারিখ</th>
                            <th style="font-size: 12px" >দলিলের প্রকারভেদ</th>
                            <th style="font-size: 12px" >মৌজার নাম</th>
                            <th style="font-size: 12px" >আনুমানিক মূল্য</th>
                            <th style="font-size: 12px" >দলিল নম্বর</th>
                            <th style="font-size: 12px" >মোসাবিদ্যা</th>
                            <th style="font-size: 12px" >লিখক</th>
                            <th style="font-size: 12px" >রশিদ</th>
                            <th style="font-size: 12px" >মূল ফাইল</th>
                           
                            <th style="font-size: 12px" >Action</th>
                        </tr>
                    </thead>
                    @foreach ($users as $user)
                        
                    
                    <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->clintname }}</td>
                            <td>{{ $user->regisryDAte }}</td>
                            <td>{{ $user->deedtype }}</td>
                            <td>{{ $user->mouja }}</td>
                            <td>{{ $user->cost }}</td>
                            <td>{{ $user->deedSerial }}</td>
                            <td>{{ $user->moshabidda }}</td>
                            <td>{{ $user->writer }}</td>
                            <td><a href="{{(!empty($user->token))?url('public/upload/token/'.$user->token):url('public/upload/no_images.png')}}"> <img src="{{(!empty($user->token))?url('public/upload/token/'.$user->token):url('public/upload/no_images.png')}}" style="width: 60px; height: 65px; border: 1px solid #000;"> </a></td>
                            
                            <td><a title="Download File1" class="btn btn-primary btn-sm" href="{{(!empty($user->file))?url('public/upload/molfile/'.$user->file):url('public/upload/no_images.png')}}" > <i class="fas fa-download"></i> 1</a><a href="{{(!empty($user->file1))?url('public/upload/molfile/'.$user->file1):url('public/upload/no_images.png')}}" class="btn btn-primary btn-sm" style="margin-top: 2px" title="Download File2"> <i class="fas fa-download"></i> 2</a></td>
                            
                        
                            <td>
                                <a title="Edit" class="btn btn-sm btn-primary" href={{ route('edit', $user->id)}}"><i class="fa fa-edit"></i></a> 

                                <a style="margin-top: 2px" title="Edit" id="delete" class="btn btn-sm btn-danger" href={{ route('delete', $user->id)}}"><i class="fa fa-trash"></i></a>
                            </td>
                            
                            
                        </tr>
                        @endforeach
                
                </table>
        </div>

    </div>

     </section>

  

        
    </x-slot>

    <x-slot name="footer">
        
    </x-slot>

    
</x-app-layout>