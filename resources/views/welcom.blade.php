<x-app-layout>
    

  <x-slot name="slot">
        
<div class="">
            
             <table class="table table-bordered" id="users-table" style="
  width: 100% !important;">
        <thead>
            <tr style="font-size: 80%;">
                <th style="width: auto !important;overflow: hidden;">No</th>
                <th style="width: auto !important;overflow: hidden;">গ্রহিতার নাম</th>
                <th style="width: auto !important;overflow: hidden;">দাতার নাম	</th>
                <th style="width: auto !important;overflow: hidden;">রেজিষ্ট্রীর তারিখ</th>
                <th style="width: auto !important;overflow: hidden;">দলিলের প্রকারভেদ</th>
                <th style="width: auto !important;overflow: hidden;">মৌজার নাম</th>
                <th style="width: auto !important;overflow: hidden;">আনুমানিক মূল্য</th>
                <th style="width: auto !important;overflow: hidden;">দলিল নম্বর</th>
                <th style="width: auto !important;overflow: hidden;">মোসাবিদা</th>
                <th style="width: auto !important;overflow: hidden;">Writer</th>
                <th style="width: auto !important;overflow: hidden;">রশিদ </th>
                <th style="width: auto !important;overflow: hidden;">মূল</th>
                <th style="width: auto !important;overflow: hidden;">গ্রহিতা মোবাইল নং</th>
               <th>Action</th>
               <th>Action</th>
            </tr>
        </thead>
    </table>
    <input class="col-md-12" type="text">

    </div>
    </div>
  </div>
</div>

    
    


@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'clindname', name: 'clindname', orderable: false, searchable: false },
            { data: 'regisryDAte', name: 'regisryDAte', orderable: false, searchable: false },
            { data: 'deedtype', name: 'deedtype', orderable: false, searchable: false },

             { data: 'mouja', name: 'mouja' },
             { data: 'cost', name: 'cost' ,orderable: false, searchable: false},
             { data: 'deedSerial', name: 'deedSerial' ,orderable: false, searchable: false},
             { data: 'moshabidda', name: 'moshabidda' ,orderable: false, searchable: false},
            { data: 'writer', name: 'writer' },
            { data: 'token', name: 'token',orderable: false, searchable: false },
            { data: 'file', name: 'file',orderable: false, searchable: false },
             { data: 'phone', name: 'phone',},
        
            {data: 'action2', orderable: false, searchable: false},
            {data: 'action', orderable: false, searchable: false},
        ]
    });
});
</script>
@endpush

        

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  
    
    </x-slot>

    <x-slot name="footer">
        
    </x-slot>

    
</x-app-layout>



        


