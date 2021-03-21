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
                        <h1 class="m-0 text-dark">Dashboard v2</h1>
                           
                    </div>
                        
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
       </div>



 <section class="col-md-12">
     <div class="card">

        <div class="card-header">
                <h3>Registry book
                    <a class="btn btn-success float-right btn-sm" href="{{ route('others') }}"><i class="fa fa-list"></i>Add</a>
                </h3>
                     
        </div>
        
        <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>সি. নং</th>  
                            <th>দলিলের প্রকারভেদ</th>
                            <th>গ্রহিতার নাম</th>
                            <th>দাতার নাম</th>
                            <th>রেজিষ্ট্রীর তারিখ</th>
                            <th>মূল ফাইল</th><th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($alldata as $data)
                        
                    
                    <tr>
                            <td>{{ $data->id }}</td>
                            
                            <td>{{ $data->deedtype }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->clintname }}</td>
                            <td>{{ $data->regisryDAte }}</td>
                            <td><a href="{{(!empty($data->file))?url('public/upload/others/'.$data->file):('public/upload/no_images.png')}}" class="btn btn-primary btn-sm"> <i class="fas fa-download"></i>1</a></td>
                            <td>
                                <a title="Edit" id="delete" class="btn btn-sm btn-danger" href={{ route('other.delete', $data->id)}}"><i class="fa fa-trash"></i></a>
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