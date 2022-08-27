@extends('layouts.admin')

@section('content')

    <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Roles & Permission</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active">DataTables</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <!-- center modal -->
                                <button style="float: right" type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Create Roles</button>
                                <h4 class="card-title">Create Roles & Permission</h4>
                                <p class="card-title-desc">CRUD Roles and Permission (assignable to users)</p>
                            </div>


                            <div class="card-body">

                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Role Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach($roles as $role)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ ucfirst($role->name) }} Role</td>
                                            <td>
                                                <button type="button" class="btn btn-primary waves-effect waves-light btn-sm" data-bs-toggle="modal" data-bs-target=".editRole_{{ $role->id }}"><i class="fa fa-edit"></i> edit</button>
                                                <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> delete</a>
                                            </td>
                                        </tr>

                                        <div class="modal fade editRole_{{ $role->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Update Roles & Permission</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="row gx-3 gy-2 align-items-center" method="post" action="{{ route('roles.update', $role->id) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="hstack gap-3">
                                                                <input class="form-control me-auto" type="text" name="name" value="{{ $role->name }}" placeholder="Add role here...">
                                                                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                                                <div class="vr"></div>
                                                                <button type="reset" class="btn btn-outline-danger btn-sm">Reset</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Create Roles & Permission</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row gx-3 gy-2 align-items-center" method="post" action="{{ route('roles.store') }}">
                                    @csrf
                                    <div class="hstack gap-3">
                                        <input class="form-control me-auto" type="text" name="name" placeholder="Add role here...">
                                        <button type="submit" class="btn btn-primary btn-sm">Create</button>
                                        <div class="vr"></div>
                                        <button type="reset" class="btn btn-outline-danger btn-sm">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
@endsection
