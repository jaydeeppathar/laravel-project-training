<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use DataTables;

class BlogController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         if ($request->ajax()) {
            $data = Blog::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    // ->addColumn('category', function($row){ 
                    //     return "TV";
                    // })
                    ->addColumn('status', function($row){
                        if ($row->status == '1') {
                            $status = '<label class="badge badge-success">Active</label>';
                        } else {
                            $status = '<label class="badge badge-danger">Deactive</label>';
                        }

                        return $status;
                    })


                    ->addColumn('action', function($row){
   
                        $btn = '<a href= "'.route('blog.edit', $row->id).'" class=" btn btn-primary btn-sm m-2"><i class="fas fa-edit"></i></a>';

                        $btn = $btn.'<button class="btn btn-danger btn-sm m-1 remove-record" data-id="'.$row->id.'" data-action=" '.route('blog.destroy',$row->id).'"><i class="fas fa-trash"></i></button>';                        
                        return $btn;
                    })

                    ->rawColumns([ 'action','status'])
                    ->make(true);
        }

        return view('admin.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::pluck('name','id');
        return view('admin.blog.create',compact('categorys'));
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
        $input['status'] = !isset($input['status']) ? 0 : 1;
        
        // dd($input['name']);
        Blog::create($input);
        return redirect()->route('blog.index');
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
        $categorys = Category::pluck('name','id');
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog','categorys'));
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
        $blog = Blog::find($id);
        $input['status'] = !isset($input['status']) ? 0 : 1;
        // $student->name = $request->input('name');
        // $student->roll_number = $request->input('roll_number');
        $blog->update($input);
        return redirect()->route('blog.index','Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('blog.index','Student Delete Successfully');
    }
}
