@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5><a href="{{ url()->previous() }}" class="float-end">Back</a></h5>
                        @if($departments->count() > 0)
                        <h4 class="card-title">Assigned Department  </h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Department</th>
                                    <th>operation</th>
                                </tr>
                            </thead>
                            @php
                            $i=1;
                            @endphp


                            <tbody>


                                @foreach ($departments as $item)


                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->department->name }}</td>
                                    <td><a href="{{" /delete/secretary-department/".$item['id']}}" class="btn btn-danger sm"
                                            title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i></a></td>

                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                        @else
                        <h3 class="text-danger">Department not assigned yet</h3>
                        @endif


                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>
@endsection
