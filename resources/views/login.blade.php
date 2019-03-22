<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Start Bootstrap - SB Admin Version 2.0 Demo</title>

    <base href="{{ asset('') }}">
    <!-- Core CSS - Include with every page -->
    <link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="assets/admin/css/sb-admin.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Đăng nhập</h3>
                </div>
                <div class="panel-body">

                    <form role="form" method="POST" action="{{ route('login_post') }}">
                        {{ csrf_field() }}

                    @if(count($errors) > 0)
                            <div class="alert alert-danger alertBox">
                                @foreach($errors->all() as $err)
                                    <strong>{{$err}}</strong><br/>
                                @endforeach
                            </div>
                        @endif

                        @if(session('thongbao'))
                            <div class="alert alert-success alertBox">
                                {{ session('thongbao') }}
                            </div>
                        @endif

                        @if(session('err'))
                            <div class="alert alert-danger alertBox">
                                {{ session('err') }}
                            </div>
                        @endif
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button class="btn btn-lg btn-success btn-block">Đăng nhập</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core Scripts - Include with every page -->
<script src="assets/admin/js/jquery-1.10.2.js"></script>
<script src="assets/admin/js/bootstrap.min.js"></script>
<script src="assets/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>

<!-- SB Admin Scripts - Include with every page -->
<script src="assets/admin/js/sb-admin.js"></script>

</body>

</html>
