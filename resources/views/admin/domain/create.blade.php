@extends('layout.admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create domain</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create domain
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('admin_domain_create_p') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>User name</label>
                                    <input class="form-control" type="text" class="txtUserName" name="txtUserName" id="txtUserName">
                                </div>

                                <div class="form-group">
                                    <label>Domain name</label>
                                    <input class="form-control" type="text" class="txtDomainName" name="txtDomainName" id="txtDomainName">
                                </div>

                                <button class="btn btn-primary">Tạo mới</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
