@extends('layouts.app')

@section('content')
    <body>
            <div class="content">
<div class="container" style="margin-top:10%;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/apple') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('studentid') ? ' has-error' : '' }}">
                            <label for="studentid" class="col-md-4 control-label">學號：</label>

                            <div class="col-md-6">
                                <input id="studentid" type="studentid" class="form-control" name="studentid">

                                @if ($errors->has('studentid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('studentid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">密碼：</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    登入
                                </button>
                            </div>
                        </div></form>                  
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
@endsection