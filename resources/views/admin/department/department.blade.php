@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">


        <div class="col-12">
            <div class="card">
                <div class="card-body">
                      <h5><a href="{{ url()->previous() }}" class="float-end">Back</a></h5>
                    <h4 class="card-title">Add Department</h4>
                    <form action="{{ route('save.department') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3 mt-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Department Name<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Enter Department Name"
                                    id="example-text-input" name="name">
                            </div>
                            @error('name')
                            <div class="alert text-danger">Department Name cannot be blank</div>
                            @enderror
                        </div>


                        <input type="submit" class="btn btn-success btn-rounded waves-effect waves-light" name="submit"
                            value="Add Department">
                    </form>
                    <!-- end row -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Department</h4>


                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Name</th>
                                        <th>operation</th>
                                    </tr>
                                </thead>
                                @php
                                $i=1;
                                @endphp


                                <tbody>
                                    @foreach ($data as $item)


                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td><a href="{{"/delete/department/".$item['id']}}" class="btn btn-danger sm" title="Delete Data" id="delete"> <i
                                                class="fas fa-trash"></i></a></td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


        </div> <!-- end col -->
    </div>
</div>
</div>
</div>
@endsection
