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
                @if(isset($url_short))
                    <div class="alert alert-success">
                    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    	<strong>{{$url_short}}</strong>
                    </div>
                @endif
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div>
</header>