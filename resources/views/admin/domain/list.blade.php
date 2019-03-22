@extends('layout.admin.master')

@section('content')

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Trang quản trị Domain - SKYTECHKEY</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Danh sách domain</div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dataTables_length" id="dataTables-example_length">
                                        <label>
                                            <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> records per page
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div id="dataTables-example_filter" class="dataTables_filter">
                                        <label>Search:<input type="search" class="form-control input-sm" aria-controls="dataTables-example">
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User name</th>
                                        <th>Domain name</th>
                                        <th>create at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $i=1; ?>
                                    @foreach($list_domain as $domain)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{ $domain->username }}</td>
                                            <td>{{ $domain->namedomain }}</td>
                                            <td>{{ $domain->created_at }}</td>
                                            <td>
                                                <div class="text-center">
                                                    <span class="pd-left-5"><a href="#"><i class="fa fa-trash-o"></i></a></span>
                                                    <span class="pd-left-5"><a href="{{ route('admin_domain_edit', $domain->id) }}}"><i class="fa fa-pencil-square-o"></i></a></span>
                                                    {{--<span class="pd-left-5"><a href="#"><i class="fa fa-plus"></i></a></span>--}}
                                                </div>

                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    <!-- /#page-wrapper -->
@endsection

