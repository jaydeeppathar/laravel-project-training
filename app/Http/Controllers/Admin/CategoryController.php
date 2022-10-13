<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use DataTables;

class CategoryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Category::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()

                    ->addColumn('action', function($row){
   
                        $btn = '<a href= "'.route('category.edit', $row->id).'" class=" btn btn-primary btn-sm m-2"><i class="fas fa-edit"></i></a>';

                        $btn = $btn.'<a href="'.route('category.show',$row->id).'" class=" btn btn-secondary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>';

                       $btn = $btn.'<button class="btn btn-danger btn-sm m-2 remove-record" data-id="'.$row->id.'" data-action=" '.route('category.destroy',$row->id).'"><i class="fas fa-trash"></i></button>';                        
                       return $btn;
                    })

                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $input = $request->all();
        // dd($input['name']);
        Category::create($request->all());
        return redirect()->route('category.index');
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
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
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
        $input = $request->all();
        // dd($input);
        $category = Category::find($id);
        $category->update($input);
        return redirect()->route('category.index','Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index','Student Delete Successfully');
    }
}
