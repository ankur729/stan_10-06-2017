<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Gallery;


class GalleryController extends Controller
{

	public function create(){

		return view('pages.admin.gallery.addimages');

	}

	public function upload(Request $request){

		$file=$request->file('file');
		$name=time().$file->getClientOriginalName();
		$file->move('images/gallery/',$name);
		Gallery::create(['name'=>$name,'desc'=>'','sortorder'=>'']);
		
	}

	public function edit(){

		$images=Gallery::all();

		//return $images;
		return view('pages.admin.gallery.editgallery',compact('images'));
		//return 'test';
	}

	public function update(Request $request){

	//	dd($request->all());

		  Gallery::where('id', $request->image_id)
        
                              ->update(

                                [
                                'desc' => $request->desc,
                                 'sortorder' => $request->sortorder,
                                
                                ]);
                                \Session::flash('message','Image Data Successfully Updated !');
                                return \Redirect::back();

	}

	public function destroy($id){

		
		  Gallery::destroy($id);
         \Session::flash('message','Image Successfully Deleted !');
            return \Redirect::back();
		//dd($request->all());
	}
    //
}
