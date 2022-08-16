<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GeneralController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang=session('lang_slug');
        $language=Language::where('slug',$lang)->with('settings')->first();

        return view('admin.general.index',compact('language'));
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
        $lang=session('lang_slug');
        $language=Language::where('slug',$lang)->with('settings')->first();

        if ($request->has('logo')){
            $data=$request->except(['_token','logo']);
            if (count($request->allFiles()) > 0) {
                foreach ($request->allFiles() as $key => $item){
                   $fileName=time().Str::random(5).'.'.$item->extension();
                   $path='/uploads/'. $item->storeAs('logo',$fileName);
                   $data[$key]=$path;
                }
            }

            $language->settings()->update($data);
            return back();
        }
        if ($request->has('connect')){
            $contact=json_encode($request->get('contact'));
            $language->settings()->update(['contact_fields'=>$contact]);
            return back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
