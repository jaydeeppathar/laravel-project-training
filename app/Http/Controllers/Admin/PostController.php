<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\Post;
use DataTables;


class PostController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Post::select('*');
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
   
                        $btn = '<a href= "'.route('post.edit', $row->id).'" class=" btn btn-primary btn-sm m-2"><i class="fas fa-edit"></i></a>';

                        $btn = $btn.'<a href="'.route('post.show',$row->id).'" class=" btn btn-secondary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>';

                       $btn = $btn.'<button class="btn btn-danger btn-sm m-2 remove-record" data-id="'.$row->id.'" data-action=" '.route('post.destroy',$row->id).'"><i class="fas fa-trash"></i></button>';                        
                       return $btn;
                    })

                    ->rawColumns(['category', 'status','action'])
                    ->make(true);
        }

        return view('admin.post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // dd($input['status']);
        $input = $request->all();
        $input['status'] = !isset($input['status']) ? 0 : 1;
        // dd($input['name']);
        Post::create($input);
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.post.edite', compact('post'));
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
        $post = Post::find($id);
        $input['status'] = !isset($input['status']) ? 0 : 1;
        // $student->name = $request->input('name');
        // $student->roll_number = $request->input('roll_number');
        $post->update($input);
        return redirect()->route('post.index','Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post.index','Student Delete Successfully');
    }
}
