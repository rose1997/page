@extends('layouts.app')

@section('content')
<script type="text/javascript">

</script>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">選位成功！</div>
                    {{ csrf_field() }}

                <div class="panel-body">
                    你選擇了：<br>
                    @foreach ($seats as $seat)
                    <span>樓層：{{ $seats[0]->floor}}</span><br>
                    <span>座位：{{ $seats[0]->seat}}</span><br>
                    @endforeach

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">                    	
               	                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                        <button type="submit" class="btn btn-primary">
                                    登出
                                </button></a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>                                
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection