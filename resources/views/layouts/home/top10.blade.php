<div class="top10">
    <div class="container">
        <h2 class="text-center text-uppercase">top 10 urls</h2>
        <table class="table table-responsive ">
            <thead>
            <tr>
                <th class="text-center">By</th>
                <th class="text-center">Url</th>
                <th class="text-center">Viewd</th>
            </tr>
            </thead>
            <tbody>
           @if(!empty($urls))
               @foreach($urls as $url)
                <tr class="text-center">
                    <td>{{$url->user_id}}</td>
                    <td><a href="{{$url->url}}">{{$url->url}}</a></td>
                    <td>{{$url->visited}}</td>
                </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

</div>