@extends('layout.admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Chi tiết Domain</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form method="POST" action="{{ route('admin_domain_edit_p') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>User name</label>
                                <input class="form-control" type="text" class="txtUserName" name="txtUserName" id="txtUserName" value="{{ $domain->username }}">
                            </div>

                            <div class="form-group">
                                <label>Domain name</label>
                                <input class="form-control" type="text" class="txtDomainName" name="txtDomainName" id="txtDomainName" value="{{ $domain->namedomain }}">
                            </div>

                            <div class="form-group">
                                <label>Ngày tạo</label>
                                <input class="form-control" type="text" class="txtDomainName" name="txtDomainName" id="txtDomainName" value="{{ $domain->created_at }}">
                            </div>

                            <div class="form-group">
                                <label>Ngày hết hạn</label>
                                <input class="form-control" type="text" class="txtDomainName" name="txtDomainName" id="txtDomainName" value="{{ $domain->updated_at }}">
                            </div>

                            <button class="btn btn-primary">Tạo mới</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
