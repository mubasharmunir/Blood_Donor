<!DOCTYPE html>
<html lang="en">
@include('admin.include.head')
<body>
    <div id="wrapper">
        @include('admin.include.navbar')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h1 class="lead">Blood Donors:</h1>
                        <div class="well well-white">
                            <table class="table">
                                <tr>
                                    {{-- <th width="10%">ID</th>
                                    <th width="20%">Donor Name</th>
                                    <th width="20%">Email</th> --}}

                                    <td width="20%"><label>ID</label></td>
                                    <td width="20%"><label>Name</label></td>
                                    <td width="20%"><label>Age</label></td>
                                    <td width="20%"><label>Gender</label></td>
                                </tr>
                                @foreach ($all_donors as $donor)
                                    <tr>
                                        <td>{{ $donor->id }}</td>
                                        <td>{{ $donor->donor_name }}</td>
                                        <td>{{ $donor->age }}</td>
                                        <td>{{ $donor->gender }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="lead">Blood Groups:</h1>
                        <div class="well well-white">
                            <table class="table">
                                <tr>
                                    <td width="50%"><label>ID</label></td>
                                    <td width="50%"><label>Blood Group</label></td>
                              
                                    {{-- <td><label>Created</label></td> --}}
                                </tr>
                                @foreach ($all_bloods as $blood )
                                <tr>
                                  <td>{{ $blood->id }}</td>
                                  <td>{{ $blood->blood_group }}</td>
                                 
                                  {{-- <td>{{ $blood->created_at }}</td> --}}
                                </tr>  
                                @endforeach 
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.include.js')
</body>

</html>
