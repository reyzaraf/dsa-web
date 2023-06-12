<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('can:categories create')->only(['create', 'store']);
        $this->middleware('can:categories read')->only(['index', 'show']);
        $this->middleware('can:categories update')->only(['edit', 'update']);
        $this->middleware('can:categories delete')->only(['destroy', 'massDelete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:191'],
        ]);

              
        $category = Category::create([
            'name' => $request->name,
            'slug' => 'slug',
        ]);

        $slug = Str::of($request->name)->slug('-');

        $category->update([
            'slug' => $slug
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category uploaded !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function showPublic($id)
    // {
    //     $category = Category::findOrFail($id);

    //     return view('categories.show', compact('category'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('categories.edit', compact('category'));
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
        $request->validate([
            'title' => ['required', 'max:191'],
          ]);

        $slug = Str::of($request->title)->slug('-');

        $category->update([
            'title' => $request->title,
            'slug' => $slug,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Category deleted !');
    }

    public function massDelete(Request $request)
    {
        $arr = explode(',', $request->ids);

        Category::destroy($arr);
        return redirect()->route('admin.categories.index')->with('success', 'Category deleted !');
    }
}
