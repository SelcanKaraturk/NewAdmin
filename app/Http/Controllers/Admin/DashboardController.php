<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Language;
use App\Models\Setting;
use Illuminate\Http\Request;
use Psy\Util\Str;

class DashboardController extends Controller
{
    public function __construct()
    {
        if (empty(session('lang_slug'))) {
            $settings = Setting::where('default_lang','1')->with('lang')->first();
            session(['lang_slug' => $settings->lang->slug]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slug = session('lang_slug');

        $data = Category::where('parent_id',0)->with(['category_language' => function($query) use($slug){
            $query->where('language_slug',$slug);
        }])->get();

        return view('admin.control.index',compact('data','slug'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.control.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $data=$request->only(['sorted','block_id']);
        $data['parent_id']=0;
        $data_category=$request->except(['sorted','block_id','status','_token','seo_link']);
        if (count($request->allFiles())>0){
            foreach ($request->allFiles() as $key=>$item){
                $file = $request->file($key);
                $fileName = time() . \Str::random(5). '.' . $file->extension();
                $path='/uploads/image/'.$file->storeAs('image',$fileName);
                $data[$key]=$path;
            }
        }
        if ($request->has('status')){
            $data['status']='1';
        }else{
            $data['status']='0';
        }
        //dd($data);
        $create=Category::create($data);
        $languages=Language::all();
        foreach ($languages as $item){
            $data_category['language_slug']=$item->slug;
            $create->category_language()->create($data_category);
        }
        dd($data_category);



        /*if ($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = time() . '.' . $file->extension();
            $path='/uploads/image/'.$file->storeAs('image',$fileName);
            dd($path);
        }*/

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
