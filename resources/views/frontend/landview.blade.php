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
                        
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
       </div>



 <section class="col-md-12">
     <div class="card">

            <div class="card-header">
                    <h3>
                        Project List
                         <a class="btn btn-success float-right btn-sm" href="{{ route('land.add') }}"><i class="fa fa-list"></i>Add</a>
                    </h3>
                     
            </div>
        
        <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th style="font-size: 12px" >Sl. No</th>
                            <th style="font-size: 12px" >Name</th>
                            <th style="font-size: 12px" >Image1</th>
                            <th style="font-size: 12px" >Image2</th>
                            <th style="font-size: 12px" >Image3</th>
                            <th style="font-size: 12px" >Image4</th>
                            
                            <th style="font-size: 12px" >Description</th>
                            <th style="font-size: 12px" >Location1</th>
                          
                            
                           
                            <th style="font-size: 12px" >Action</th>
                        </tr>
                    </thead>
                    @foreach ($users as $key => $user)
                        
                    
                    <tr class="{{$user->id}}">
                            <td>{{$key+1}}</td>
                            <td>{{ $user->name }}</td>

                            <td><a href="{{(!empty($user->Image1))?url('public/upload/projects/'.$user->Image1):url('public/upload/no_images.png')}}"> <img src="{{(!empty($user->Image1))?url('public/upload/projects/'.$user->Image1):url('public/upload/no_images.png')}}" style="width: 100px; height: 90px; border: 1px solid #000;"> </a></td>

                            <td><a href="{{(!empty($user->Image2))?url('public/upload/projects/'.$user->Image2):url('public/upload/no_images.png')}}"> <img src="{{(!empty($user->Image2))?url('public/upload/projects/'.$user->Image2):url('public/upload/no_images.png')}}" style="width: 100px; height: 90px; border: 1px solid #000;"> </a></td>

                            <td><a href="{{(!empty($user->Image3))?url('public/upload/projects/'.$user->Image3):url('public/upload/no_images.png')}}"> <img src="{{(!empty($user->Image3))?url('public/upload/projects/'.$user->Image3):url('public/upload/no_images.png')}}" style="width: 100px; height: 90px; border: 1px solid #000;"> </a></td>

                            <td><a href="{{(!empty($user->Image4))?url('public/upload/projects/'.$user->Image4):url('public/upload/no_images.png')}}"> <img src="{{(!empty($user->Image4))?url('public/upload/projects/'.$user->Image4):url('public/upload/no_images.png')}}" style="width: 100px; height: 90px; border: 1px solid #000;"> </a></td>

                            
                            <td>{{ $user->description }}</td>
                            <td>{{ $user->li1 }}</td>
                            
                        
                            <td>
                                <a title="Edit" class="btn btn-sm btn-primary" href={{ route('project.edit', $user->id)}}"><i class="fa fa-edit"></i></a> 

                                <a style="margin-top: 2px" title="Edit" id="delete" class="btn btn-sm btn-danger" href={{ route('project.delete', $user->id)}}"><i class="fa fa-trash"></i></a>
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