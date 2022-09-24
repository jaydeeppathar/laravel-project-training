<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;
use DataTables;

class CarouselController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Carousel::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    // ->addColumn('category', function($row){ 
                    //     return "TV";
                    // })
                    ->addColumn('images', function($row){
                        $url= asset('images/'.$row->images);
                        $images = '<img src="'.$url.'" width="100" height="100" class="" align="center" />';
                        return $images;
                    })

                    ->addColumn('action', function($row){
   
                        $btn = '<a href= "'.route('carousel.edit', $row->id).'" class=" btn btn-primary btn-sm m-2"><i class="fas fa-edit"></i></a>';

                       $btn = $btn.'<button class="btn btn-danger btn-sm m-1 remove-record" data-id="'.$row->id.'" data-action=" '.route('carousel.destroy',$row->id).'"><i class="fas fa-trash"></i></button>';                        return $btn;
                    })

                    ->rawColumns([ 'images','action'])
                    ->make(true);
        }

        return view('admin.carousel.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carousel.create');
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

        if($request->file('images')){
            $file= $request->file('images');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
            $input['images']= $filename;
        }
        // dd($input['name']);
        Carousel::create($input);
        return redirect()->route('carousel.index');
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
        $carousel = Carousel::find($id);
        return view('admin.carousel.edit', compact('carousel'));
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
        $carousel = Carousel::find($id);
         if($request->file('images')){
            $file= $request->file('images');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
            $input['images']= $filename;
        }
        // $student->name = $request->input('name');
        // $student->roll_number = $request->input('roll_number');
        $carousel->update($input);
        return redirect()->route('carousel.index')->withSuccess('Recored Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Carousel::find($id);
        $post->delete();
        return redirect()->route('carousel.index','Student Delete Successfully');
    }
}
