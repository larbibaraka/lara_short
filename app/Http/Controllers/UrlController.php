<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the request

        $this->validate(request(),[
            'url' => 'min:10'
        ]);

        // add to data base
        //create random id
        $string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

        $url_id="";

        for($i=0; $i<6; $i++){
            $url_id .=$string[mt_rand(0,(strlen($string)-1))];
        }
        //create the short url
        $url_short = url('/').'/url/'.$url_id;

        if(auth()->check()){
            Url::create([
                "url"=>$request->url,
                "url_id"=>$url_id,
                "user_id"=>auth()->user()->id,
                "url_shorter"=>$url_short
            ]);
        }else{
            Url::create([
                "url"=>$request->url,
                "url_id"=>$url_id,
                "url_shorter"=>$url_short

            ]);
        }

        //redirect to index
        return redirect('/')->with('my_url',$url_short);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $url=Url::where("url_id","=",$id)->first();
        $url->visited = $url->visited+1;
        $url->update();
        return redirect($url->url);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function edit(Url $url)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Url $url)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function destroy(Url $url)
    {
        //
    }
}
