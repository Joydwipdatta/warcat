@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                       <h5><a href="{{ url()->previous() }}" class="float-end">Back</a></h5>
                        <h4 class="card-title">Director </h4>


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
                                @foreach ($table as $item)


                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td><a href="{{" /assigned-department/".$item['id']}}" class="btn btn-primary sm"
                                            title="view" > <i class="fas fa-eye"></i></a>
                                            <a href="{{" /assign-director-department/".$item['id']}}" class="btn btn-success sm" title="Assign"> <i
                                                    class="fas fa-th-list"></i></a>
                                        </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div> <!-- end row -->



@endsection
