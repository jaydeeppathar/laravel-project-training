<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\AdminController;
use App\Models\Information;
use DataTables;

class ContactusController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Information::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                       // $btn ='<form action="'.route('contactus.destroy',$row->id).'" method="POST">'.csrf_field().''.method_field("DELETE").'<button type="submit" class="btn btn-danger btn-sm"
                       //              onclick="return confirm(\'Are You Sure Want to Delete?\')"><i class="fas fa-trash"></i></a>
                       //              </form>';

                    $btn = '<button class="btn btn-danger btn-flat btn-sm remove-record" data-id="'.$row->id.'" data-action=" '.route('contactus.destroy',$row->id).'"><i class="fas fa-trash"></button>';

                        return $btn;
                    })

                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.contactus.index');
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
         $input = $request->all();
        // dd($input['name']);
        Information::create($input);
        return redirect()->route('contact')->withSuccess('Message Send Successfully');;
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
        $post = Information::find($id);
        $post->delete();
        return redirect()->route('contactus.index')->withSuccess('Data Delete Successfully');
    }
}
?>