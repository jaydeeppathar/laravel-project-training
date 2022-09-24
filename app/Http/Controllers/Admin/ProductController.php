<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\Product;
use DataTables;

class ProductController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         if ($request->ajax()) {
            $data = Product::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    // ->addColumn('category', function($row){ 
                    //     return "TV";
                    // })
                    ->addColumn('image', function($row){
                        $url= asset('product/'.$row->image);
                        $image = '<img src="'.$url.'" width="100" height="100" class="" align="center" />';
                        return $image;
                    })
                    ->addColumn('status', function($row){
                        if ($row->status == '1') {
                            $status = '<label class="badge badge-success">Active</label>';
                        } else {
                            $status = '<label class="badge badge-danger">Deactive</label>';
                        }

                        return $status;
                    })


                    ->addColumn('action', function($row){
   
                        $btn = '<a href= "'.route('carousel.edit', $row->id).'" class=" btn btn-primary btn-sm m-2"><i class="fas fa-edit"></i></a>';

                       $btn = $btn.'<button class="btn btn-danger btn-sm m-1 remove-record" data-id="'.$row->id.'" data-action=" '.route('product_item.destroy',$row->id).'"><i class="fas fa-trash"></i></button>';                        
                       return $btn;
                    })

                    ->rawColumns([ 'image','action','status'])
                    ->make(true);
        }

        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
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
        
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('product'), $filename);
            $input['image']= $filename;
        }
        // dd($input['name']);
        Product::create($input);
        return redirect()->route('product_item.index');
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
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product_item.index','Student Delete Successfully');
    }
}
