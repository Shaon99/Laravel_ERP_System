<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class productController extends Controller
{
    //products
   
    public function allproduct(){
   
        $product=DB::table('products')
               ->join('categories','products.category_id','categories.id')
               ->join('brands','products.brand_id','brands.id')
               ->select('products.*','categories.name','brands.bname')            
               ->get();
         return view('inventory.product.product',compact('product'));
       }
    //addpro
    public function addproduct(){
        $category=DB::table('categories')->get();
        $brand=DB::table('brands')->get();

        return view('inventory.product.addproducts',compact('category','brand'));
    }
     


    public function storeproduct(Request $req){
        $validated = $req->validate([
            'name' => 'required|max:125',
            'image' => 'image|mimes:jpeg,png,jpg,JPG,PNG,gif,svg|max:5000',
            'price' => 'required',
            'sprice' => 'required',
            'wprice' => 'required',
            'quantity' => 'required',
            'description' => 'required|max:400',

        ]);
        $data=array();
        $data['product_name']=$req->name;
        $image=$req->file('image');
        $data['purchase_price']=$req->price;
        $data['sale_price']=$req->sprice;
        $data['wholesale_price']=$req->sprice;
        $data['quantity']=$req->quantity;
        $data['category_id']=$req->category_id;
        $data['brand_id']=$req->brand_id;
        $data['description']=$req->description;
        if($image){
              $image_name=hexdec(uniqid());
              $ext=strtolower($image->getClientOriginalExtension());
              $image_fullname=$image_name.'.'.$ext;
              $path='frontend/images/product/';
              $image_url=$path.$image_fullname;
              $success=$image->move($path,$image_fullname);
              $data['image']= $image_url;
              DB::table('products')->insert($data);
            $notification=array(
                'messege'=>'Successfully product Inserted',
                'alert-type'=>'success'
            );
            return Redirect()->route('product')->with($notification);
        }else{
            DB::table('products')->insert($data);
            $notification=array(
                'messege'=>'Successfully product Inserted',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }

    //editupdate
    public function editproduct($id){

        $category=DB::table('categories')->get();
        $brand=DB::table('brands')->get();
        $product=DB::table('products')->where('products.id',$id)->first();
         return view('inventory.product.editproduct',compact('category','brand','product'));
       }

}
