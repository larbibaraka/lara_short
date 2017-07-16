<header class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 url ">
                <form action="{{route('store_url')}}" method="post" enctype="application/x-www-form-urlencoded">
                    {{csrf_field()}}
                    <div class="input-group">
                        <input type="text" class="form-control" name="url" placeholder="http:// ......">
                        <span class="input-group-btn">
                        <button class="btn btn-default url-enter" type="submit">Shortini</button>
                      </span>
                    </div><!-- /input-group -->
                </form>
                <br>
                @if(session('my_url'))
                    <div class="alert alert-info">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    	<strong><a href="{{ session('my_url') }}">{{ session('my_url') }}</a></strong>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                              <p>{{$error}}</p>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div>
</header>