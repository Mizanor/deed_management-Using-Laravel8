@extends('layouts.master')

@section('content')
 {{-- <div>
        <form method="POST" enctype="multipart/form-data" action="{{ }}">
            @csrf
            
               <div class="row" >
                 <div class="col-md-3">
                     <label for="file">Choose CSV/XL File</label>
                <input  type="file" name="file" class="form-control"/>
               </div>
             <div class="col-md-3">
            
            <button style="margin-top: 30px" type="submit" class="btn btn-primary" >Import</button>
               </div>
               </div>

        </form>
</div>

<div class="">

            



            <a class="btn btn-primary" href="{{  }}" target="blank">Export to PDF</a>
             <a class="btn btn-primary" href="{{ }}" style="margin-left: 10px">Export To Xl</a>
        </div> --}}

    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>নাম</th>
                <th>ই-মেইল</th></th>
                <th>Phone</th>
                <th>Salary</th>
                <th>Department</th>
                
                <th>Action</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
    $(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('user-data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
       
            
           
            { data: 'created_at', },
            { data: 'updated_at', },
            {data: 'bar', name: 'bar', orderable: false, searchable: false},
        ]
    });
});
</script>
@endpush