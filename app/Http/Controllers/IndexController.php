<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Url;
use function Sodium\compare;


class IndexController extends Controller
{





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('welcome');
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
            $url_short = url('/').'/'.$url_id;

            Url::create([
                "url"=>$request->url,
                "url_id"=>$url_id,
                "url_shorter"=>$url_short

            ]);
            //redirect to index
            return back()->with($url_short);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $url=Url::where("url_id","=",$id)->first();
        return redirect($url->url);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
