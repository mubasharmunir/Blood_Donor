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
                        <span class="title pull-left">Donor Details Page</span>
                        {{-- <a href="{{ route('Donor_create') }}" class="btn btn-sm btn-success pull-right">
                            <i class="fa fa-plus"></i>
                            Create New Donor
                        </a> --}}
                    </div>
                    <!-- /.row -->

                    <section class="panel">
                        <div class="panel-body">
                            {{-- <div class="col-md-7">
                                <div class="pro-img-details">
                                    <img src="{{$donor->image}}"  width="500px"  height="400pd" alt="">
                                </div>

                            </div> --}}
                            <div class="col-md-5">

                                {{-- <h2 class="pro-d-title" style="color: rgb(187, 59, 59)">
                                    {{$donor->donor_name }}
                                    
                                </h2> --}}
                            
                                    <div class="product_meta">
                                        <span class="posted_in"> <strong style="font-size: 15px">Donor Name:</strong>
                                            {{ $donor->donor_name }}
                                        </span>
                                    </div>

                                <p>
                                    Praesent ac condimentum felis. Nulla at nisl orci, at dignissim dolor, The best
                                    product
                                    descriptions address your ideal buyer directly and personally. The best product
                                    descriptions
                                    address your ideal buyer directly and personally.
                                </p>
                                <div class="product_meta">
                                    <span class="posted_in"> <strong>Email:</strong> <a rel="tag" href="#">
                                            {{ $donor->email }}</a>,
                                    </span>

                                </div><br>
                                <div class="product_meta">
                                    <span class="posted_in"> <strong>Gender:</strong>
                                        {{ $donor->gender }}
                                    </span>
                                </div>
                                <div class="product_meta">
                                    <span class="posted_in"> <strong>Blood Group:</strong>
                                        {{ $donor->donor->blood_group }}
                                    </span>

                                </div>
                                <div class="m-bot15"> <strong>Age : </strong> <span
                                        class="amount-old">{{ $donor->age }}</span>
                                </div><br>
                                <div class="product_meta">
                                    <span class="posted_in"> <strong>City:</strong>
                                        {{ $donor->city->city }}

                                    </span>

                                </div>
                                <div class="product_meta">
                                    <span class="posted_in"> <strong>Phone:</strong> <a rel="tag" href="#">
                                            {{ $donor->phone }}</a>

                                    </span>

                                </div>


                            </div>
                            <div class="col-md-7">
                                <div class="pro-img-details">
                                    <img src="{{ $donor->image }}" width="500px" height="400pd" alt="">
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>



                                    <th>ID</th>
                                    <th>Donor Name</th>
                                    <th>Bllod Group</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Phone</th>
                                    <th>City</th>
                                    <th>Image</th>
                                    <th>Created</th>
                                    {{-- <th width="10%">Action</th> --}}
            {{-- </tr>
                            </thead>
                            <tbody>
                                    <tr class="odd">
                                        <td>{{ $donor->id }}</td>
                                        <td>{{ $donor->donor_name }}</td>
                                        <td>{{ $donor->donor->blood_group }}</td>
                                        <td>{{ $donor->email }}</td>
                                        <td>{{ $donor->gender }}</td>
                                        <td>{{ $donor->age }}</td>
                                        <td>{{ $donor->phone }}</td>
                                        <td>{{ $donor->city->city }}</td>
                                        <td><img src="{{ $donor->image }}" height="50px" width="150px"></td>
                                        <td>{{ $donor->created_at }}</td> --}}

            {{-- <td class="text-center">
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ route('donor_edit', ['id' => $donor->id]) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a onClick="return confirm('Are you sure to delete this donor?');"
                                                class="btn btn-sm btn-danger"href="{{ route('donor_delete', ['id' => $donor->id]) }}">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td> --}}
            </tr>
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
