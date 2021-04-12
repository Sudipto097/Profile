<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ImageController extends Controller
{
    public function show(){
        return view('layouts.backend.Img.img');
    }
    public function imageadd(Request $request){
        $validated = $request->validate([
            'image' => 'mimes:jpg,jpeg,png,JPG,PNG|max:1000000',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['work']=$request->work;
        $data['small_letter']=$request->small_letter;
        $image=$request->file('image');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/upload/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            // unlink($request->old_image);
            DB::table('tbl_admin_image')
                ->insert($data);
            return redirect('image');
        }else{
            $data['image']=$request->old_image;
            DB::table('image')
                ->insert($data);

            return redirect('image');
        }

    }

    public function allimage(){
        $img=DB::table('tbl_admin_image')
            ->get();
        return view('layouts.backend.Img.all_image',compact('img'));
    }
    public function DeleteImage($id){
        DB::table('tbl_admin_image')
            ->where('id', $id)
            ->delete();
        return back();
    }
    function statusUpdate($id)
    {
        //get product status with the help of product ID
        $product = DB::table('tbl_admin_image')
            ->select('status')
            ->where('id','=',$id)
            ->first();

        //Check user status
        if($product->status == '1'){
            $status = '0';
        }else{
            $status = '1';
        }

        //update product status
        $values = array('status' => $status );
        DB::table('tbl_admin_image')->where('id',$id)->update($values);

        session()->flash('msg','Product status has been updated successfully.');
        return back();
    }
}
