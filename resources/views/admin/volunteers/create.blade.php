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
                <div class="col-lg-12">
                    <h1 class="page-header">Blood Groups Management</h1>
                </div>
                <!-- /.col-lg-12 -->

            </div>
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height:48px;">
                            <span class="pull-left" style="font-size:20px;"><i class="fa fa-plus"></i> Create New Blood Group</span>
                            <a href="#" class="btn btn-sm btn-primary pull-right"><i class="fa fa-arrow-circle-left"></i> back to blood groups</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                @error('blood_group')
                                <span class="text-danger">{{$message}}</span>
                                 @enderror


                              <form role="form" method="post" action="{{route('store_valunteers') }}" enctype="multipart/form-data">

                                    @csrf
						        <input type="hidden" name="#" value="#" />

                                <div class="row" style="margin-top:20px;">
                                   
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Name:</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('blood_group',$blood_groups->blood_group ?? '') }}" placeholder="Enter Your Name" >
                                        @error('name')
                                <span class="text-danger">{{$message}}</span>
                                 @enderror
                                    </div>
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Degisination:</label>
                                        <input type="text" class="form-control" name="designation" value="{{ old('blood_group',$blood_groups->blood_group ?? '') }}" placeholder="Enter Your Degisination" >
                                        @error('designation')
                                <span class="text-danger">{{$message}}</span>
                                 @enderror
                                    </div>
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">image:</label>
                                        <input type="file" name="image"
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                    @error('image')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                                    </div>
                                    
                                </div>

								<div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <button type="submit" class="btn btn-lg btn-primary">
                                            
                                            
                                            Submit Data
                                        
                                        </button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    @include('admin.include.js')
</body>
</html>
