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
            $settings = Setting::where('default_lang', '1')->with('lang')->first();
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

        $data = Category::where('parent_id', 0)->with(['category_language' => function ($query) use ($slug) {
            $query->where('language_slug', $slug);
        }])->get();

        return view('admin.control.index', compact('data', 'slug'));
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
    public function created($id=0)
    {

        $subId=$id;
        return view('admin.control.create',compact('subId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*return response()->json([
            'message' => $request->all()
        ]);*/
        //dd($request->all());
        $data = $request->only(['sorted', 'block_id']);
        $data['parent_id'] = $request->get('id');
        $data_category = $request->except(['sorted', 'block_id', '_token', 'seo_link']);
        //dd($data_category);
        if (count($request->allFiles()) > 0) {
            foreach ($request->allFiles() as $key => $item) {
                $file = $request->file($key);
                $fileName = time() . \Str::random(5) . '.' . $file->extension();
                $path = '/uploads/' . $file->storeAs('image', $fileName);
                $data[$key] = $path;
            }
        }

        $create = Category::create($data);
        $languages = Language::all();

        foreach ($languages as $item) {
            $data_category['language_slug'] = $item->slug;
            $create->category_language()->create($data_category);
        }

        return response()->json([
            'message' => 'kayıt işlemi başarılı'
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $id = $request->get('id');
        $status = $request->get('status');

        $data = Category::find($id);
        $data->update(['status' => $status]);
        return response()->json([
            'message' => 'Başarılı'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $slug = session('lang_slug');
        $data = Category::with(['category_language' => function ($query) use ($slug) {
            $query->where('language_slug', $slug);
        }])->find($request->get('id'));
        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $slug = session('lang_slug');
        $category = Category::find($id);

        $data = $request->only(['sorted', 'block_id']);
        $data['parent_id'] = 0;
        $data_category = $request->except(['sorted', 'block_id', '_token', 'seo_link', '_method','file','file2','file3']);
        //dd($data_category);
        if (count($request->allFiles()) > 0) {
            foreach ($request->allFiles() as $key => $item) {
                $file = $request->file($key);
                $fileName = time() . \Str::random(5) . '.' . $file->extension();
                $path = '/uploads/' . $file->storeAs('image', $fileName);
                $data[$key] = $path;
            }
        }
        for ($i = 1; $i <= 3; $i++) {
            $file=$i===1 ? 'file':'file'.$i;
            if (!$request->hasFile("$file") and $request->get("$file")  !== 'undefined'){
                $data["$file"]=$request->get("$file");
            }
        }
        $category->update($data);
        $category->category_language()->where('language_slug',$slug)->update($data_category);


        return response()->json([
            'message' => 'Kayıt İşlemi Başarılı'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *

     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $category = Category::find($request->get('id'));
        $category->category_language()->delete();
        $category->delete();
        return response()->json([
            'message'=>'Kayıt Başarıyla Silindi',

        ]);
    }

    public function subcategory($id)
    {
        $slug = session('lang_slug');

        $data = Category::where('parent_id', $id)->with(['category_language' => function ($query) use ($slug) {
            $query->where('language_slug', $slug);
        }])->get();

        return view('admin.control.index', compact('data', 'slug'));
    }
    public function back($id)
    {
        $category=Category::find($id);
        $parent=$category->parent_id;

        return redirect()->route('admin.control.subcategory',$parent);
    }
}
