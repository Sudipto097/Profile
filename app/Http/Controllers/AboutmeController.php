<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AboutmeController extends Controller
{
    public function about(){
        return view('layouts.backend.AboutMe.aboutme');
    }
    public function aboutme(Request $request){
        $validated = $request->validate([
            'image' => 'mimes:jpg,jpeg,png,JPG,PNG|max:1000000',
        ]);

        $data=array();
        $data['work']=$request->work;
        $data['degree']=$request->degree;
        $data['website']=$request->website;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['age']=$request->age;
        $data['date']=$request->date;
        $data['freelance']=$request->freelance;
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
           DB::table('about_me')
                ->insert($data);
           return redirect('All-About');

        }else{
            $data['image']=$request->old_image;

           DB::table('about_me')
              ->insert($data);

            return redirect('All-About');
        }
    }
    public function allAbout(){
        $about_me=DB::table('about_me')
            ->get();
        return view('layouts.backend.AboutMe.allabout',compact('about_me'));
    }
    function statusUpdate($id)
    {
        //get product status with the help of product ID
        $product = DB::table('about_me')
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
        DB::table('about_me')->where('id',$id)->update($values);

        session()->flash('msg','Product status has been updated successfully.');
        return back();
    }
    public function DeleteImage($id){
        DB::table('about_me')
            ->where('id', $id)
            ->delete();
        return back();
    }

}
