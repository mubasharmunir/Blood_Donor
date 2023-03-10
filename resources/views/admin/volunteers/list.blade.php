<!DOCTYPE html>
<html lang="en">

@include('admin.include.head')
<body>
    <div id="wrapper">
        <!-- Navigation -->
        @include('admin.include.navbar')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12 page-header">
                        <span class="title pull-left">Blood Groups Management</span>
                        <a href="{{route('create_valunteers') }}" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> Create New Blood Group</a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            @if(session()->has('danger'))
            <div class="alert alert-danger">
                {{ session()->get('danger') }}
            </div>
            @endif
            <div class="row">
                <div class="col-lg-12">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th width="8%">ID</th>
                                    <th width="15%">Image</th>
                                    <th width="10%">Name</th>
                                    <th width="10%">Degsination </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_volunteers as  $valuenter)
                                <tr class="odd">
                                    <td>{{ $valuenter->id }}</td>
                                    <td>{{ $valuenter->image }}</td>
                                    <td>{{ $valuenter->name }}</td>
                                    <td>{{$valuenter->designation }}</td> 
                                   {{-- <td class="text-center">
                                    <a class="btn btn-sm btn-primary" href="{{route('edit_blood',['id'=>$blood_group->id]) }}"><i class="fa fa-edit"></i></a>
                                        <a onClick="return confirm('Are you sure to delete this blood group?');" class="btn btn-sm btn-danger" href="{{route('blood_group_delete',['id'=>$blood_group->id])}}"><i class="fa fa-times"></i></a>
                                   </td> --}}
                                </tr>
                                    
                                @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    @include('admin.include.js')
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>
</html>
