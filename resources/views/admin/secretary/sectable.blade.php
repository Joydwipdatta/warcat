@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
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
                                    <th>Secretary Name</th>
                                    <th>Assigned Department</th>
                                </tr>
                            </thead>
                            @php
                            $i=1;
                            @endphp


                            <tbody>


                                @foreach ( $department as $item )
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->secretary->name }}</td>
                                    <td>
                                        {{ $item->department->name }}
                                    </td>
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
