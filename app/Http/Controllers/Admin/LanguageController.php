<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\LanguageResource;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Language::with('settings')->get();
        return view('admin.languages.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = time() . \Str::random(5) . '.' . $file->extension();
            $path = '/uploads/' . $file->storeAs('flag', $fileName);
            $data['img'] = $path;
        }
        $create = Language::create($data);
        $create->settings()->create();
        return response()->json([
            'message' => 'Dil başarıyla eklendi'
        ]);
        //ADD SOME CODE FOR SYNCHRONIZATION
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $language)
    {
        $langId = Language::with('settings')->find($request->get('id'));
        $lang = Language::with('settings')->where('id', '!=', $langId->id)->get();
        $langId->settings()->update(['default_lang' => '1']);
        session(['lang_slug'=>$langId->slug]);

        foreach ($lang as $item) {
            $item->settings()->update(['default_lang' => '0']);
        }

        return response()->json([
            'message' => 'Sitenizin varsayılan dili ' . $langId->name . ' yapılmıştır.'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $language)
    {
        $lang = Language::with('settings')->find($request->get('id'));

        return response()->json([
            'data' => $lang
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lang = Language::find($id);
        $data = $request->only(['name', 'slug']);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . \Str::random(5) . '.' . $file->extension();
            $path = '/uploads/' . $file->storeAs('flag', $fileName);
            $data['img'] = $path;
        }
        if (!$request->hasFile('file') and $request->get("file") !== 'undefined') {
            $data['img'] = $request->get('file');
        }

        $lang->update($data);

        return response()->json([
            'message' => 'Kayıt başarıyla tamamlandı',
            'img' => $lang->img
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $language)
    {
        $language = Language::find($request->get('id'));
        $language->settings()->delete();
        $language->delete();
        return response()->json([
            'message' => 'Dil Başarıyla Silindi',

        ]);
    }

    public function value()
    {
        $lang = Language::all();
        //dd($lang->first()->language_value->konum);
        $collection = collect($lang->first()->language_value);

        $lang_keys = $collection->keys();

        return view('admin.languages.value', compact('lang', 'lang_keys'));
    }

    public function update_value(Request $request)
    {
        $array = $request->except(['_token',]);

        $language=Language::all();
        $collection = collect($array['name']);
        $collectionLang = collect($array['lang']);



        foreach ($collectionLang as $key=> $item){
            $combined[$key] = $collection->combine($item)->filter(function ($value, $key) {
                return $key!=="";
            });

        }

        foreach ($language as $key => $item){
            //dd($combined[$key]);
            $item->update([
                'language_value'=>json_encode($combined[$key])
            ]);
        }

        return redirect()->back();

    }

    public function changeLang($id)
    {
        $lang=Language::find($id);
        session(['lang_slug'=>$lang->slug]);

        return redirect()->route('admin.control.index');
    }
}
