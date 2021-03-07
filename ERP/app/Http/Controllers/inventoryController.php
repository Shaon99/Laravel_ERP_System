<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class inventoryController extends Controller
{
    public function allCategory(){
        $category=DB::table('categories')->get();
        return view('inventory.category',compact('category'));
       
    }

    public function addCategory(){
        return view('inventory.addCategory');
    }

//add
    public function store(Request $req){

        $validated = $req->validate([
            'name' => 'required|unique:categories|max:25|min:4',
        ]);
    
       $data=array();
       $data['name']=$req->name;
     $category=DB::table('categories')->insert($data);
       if($category){
           $notification=array(
               'messege'=>'Successfully Category Inserted',
               'alert-type'=>'success'
           );
           return Redirect()->route('category')->with($notification);
       }else{
        $notification=array(
            'messege'=>'Successfully Wrong',
            'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
       }
    }

    //delete
    public function delete($id){
        $category=DB::table('categories')->where ('id',$id)->delete();
        $notification=array(
            'messege'=>'Successfully Category Deleted',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);;
    }

    //update
        public function edit($id){
            $category=DB::table('categories')->where ('id',$id)->first();
            return view('inventory.editcategory',compact('category'));
    
        }

        public function update(Request $req,$id){
           
            $validated = $req->validate([
                'name' => 'required|max:25|min:4',
            ]);
           $data=array();
           $data['name']=$req->name;
           $category=DB::table('categories')->where('id',$id)->update($data);
           if($category){
               $notification=array(
                   'messege'=>'Successfully Category Updated',
                   'alert-type'=>'success'
               );
               return Redirect()->route('category')->with($notification);
           }else{
            $notification=array(
                'messege'=>'Nothing to Update',
                'alert-type'=>'error'
            );
            return Redirect()->route('category')->with($notification);
           }
        }
    
        //brands
        public function allbrand(){
            $brand=DB::table('brands')->get();
            return view('inventory.brand',compact('brand'));
           
        }

        public function addbrand(){
            return view('inventory.addbrand');
        }


        //addbrands
        public function storebrand(Request $req){
            $validated = $req->validate([
                'name' => 'required|unique:categories|max:25|min:4',
                'logo' => 'image|mimes:jpeg,png,jpg,JPG,PNG,gif,svg|max:5000',
                ]);
        
           $data=array();
           $data['bname']=$req->name;
           $image=$req->file('logo');
           if($image){
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_fullname=$image_name.'.'.$ext;
            $path='frontend/images/';
            $image_url=$path.$image_fullname;
            $success=$image->move($path,$image_fullname);
            $data['image']= $image_url;
            DB::table('brands')->insert($data);
          $notification=array(
              'messege'=>'Successfully Brand Inserted',
              'alert-type'=>'success'
          );
          return Redirect()->route('brand')->with($notification);
      }else{
        DB::table('brands')->insert($data);
        $notification=array(
            'messege'=>'Successfully Brand Inserted',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
        }

       //delete
          public function deleteb(Request $req,$id){
           
            $brand= DB::table('brands')->where('id',$id)->first();
             $image=$brand->image;
             $delete= DB::table('brands')->where('id',$id)->delete();
             if($delete){
                 unlink($image);
                 $notification=array(
                     'messege'=>'Successfully Brand Deleted',
                     'alert-type'=>'success'
                 );
                 return Redirect()->back()->with($notification);;
     
             }else{
                 $notification=array(
                     'messege'=>'Something wrong',
                     'alert-type'=>'success'
                 );
                 return Redirect()->back()->with($notification);;
             }
     
     
            }


     //update
     public function editb($id){
        $brand=DB::table('brands')->where ('id',$id)->first();
        return view('inventory.editbrand',compact('brand'));

    }

    public function updateb(Request $req,$id)
       {
        $validated = $req->validate([
            'name' => 'required|unique:categories|max:25|min:4',
            'logo' => 'image|mimes:jpeg,png,jpg,JPG,PNG,gif,svg|max:5000',
        ]);
        $data=array();
        $data['bname']=$req->name;
        $image=$req->file('logo');

        if($image){
              $image_name=hexdec(uniqid());
              $ext=strtolower($image->getClientOriginalExtension());
              $image_fullname=$image_name.'.'.$ext;
              $path='frontend/images/';
              $image_url=$path.$image_fullname;
              $success=$image->move($path,$image_fullname);
              $data['image']= $image_url;
              if($req->old_photo==NULL ){
                DB::table('brands')->where('id',$id)->update($data);
          
              }  
              else{
                unlink($req->old_photo);
                DB::table('brands')->where('id',$id)->update($data);

              }          
              $notification=array(
                'messege'=>'Successfully Brand Updated',
                'alert-type'=>'success'
            );
            return Redirect()->route('brand')->with($notification);
        }
        
        else{
            
             $data['image']= $req->old_photo;
            DB::table('brands')->where('id',$id)->update($data);
            $notification=array(
                'messege'=>'Successfully Brand Updated',
                'alert-type'=>'success'
            );
            return Redirect()->route('brand')->with($notification);
        }
       }
}
