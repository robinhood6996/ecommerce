<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Psy\Command\WhereamiCommand;
use Intervention\Image\Facades\Image;
class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    
    $products = DB::table('products')
                ->join('categories','products.category_id','categories.id')
                ->join('brands','products.brand_id','brands.id')
                ->select('products.*','categories.category_name','brands.brand_name')
              ->get();
    return view('admin.product.index',compact('products'));
    }

    public function create()
    {
  
    $category = DB::table('categories')->get();
    $brand = DB::table('brands')->get();
      return view('admin.product.create',compact('category','brand'));
    }

    public function GetSubcat($category_id)
    {
       $subcat = DB::table('subcategories')->where('category_id',$category_id)->get();
       return json_encode($subcat);
    }

    public function Store(Request $request)
    {

      $data = array();
      $data['product_name'] = $request->product_name;
      $data['product_code'] = $request->product_code;
      $data['product_quantity'] = $request->product_quantity;
      $data['category_id'] = $request->category_id;
      $data['subcategory_id'] = $request->subcategory_id;
      $data['brand_id'] = $request->brand_id;
      $data['product_size'] = $request->product_size;
      $data['product_color'] = $request->product_color;
      $data['selling_price'] = $request->selling_price;
      $data['product_details'] = $request->product_details;
      $data['video_link'] = $request->video_link;
      $data['image_one'] = $request->image_one;
      $data['image_two'] = $request->image_two;
      $data['image_three'] = $request->image_three;

      $data['main_slider'] = $request->main_slider;
      $data['hot_deal'] = $request->hot_deal;
      $data['best_rated'] = $request->best_rated;
      $data['trend'] = $request->trend;
      $data['mid_slider'] = $request->mid_slider;
      $data['hot_new'] = $request->hot_new;
      $data['bogo'] = $request->bogo;
      $data['status'] = 1;

      $image_one = $request->image_one;
      $image_two = $request->image_two;
      $image_three = $request->image_three;

      if ($image_one && $image_two && $image_three) {
        $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
        Image::make($image_one)->resize(300,300)->save('public/media/product/'.$image_one_name);
        $data['image_one'] = 'public/media/product/'.$image_one_name;

        $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
        Image::make($image_two)->resize(300,300)->save('public/media/product/'.$image_two_name);
        $data['image_two'] = 'public/media/product/'.$image_two_name;

        $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
        Image::make($image_three)->resize(300,300)->save('public/media/product/'.$image_three_name);
        $data['image_three'] = 'public/media/product/'.$image_three_name;
      
        
        $product=DB::table('products')
                  ->insert($data);
            $notification=array(
             'messege'=>'Successfully Product Added To Store ',
             'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
    }
  }

  public function Inactive($id)
  {
    DB::table('products')->where('id',$id)->update(['status' => 0]);
    $notification=array(
      'messege'=>'Inactivate the product',
      'alert-type'=>'danger'
     );
     return redirect()->back()->with($notification);

  }

  public function Active($id)
  {
    DB::table('products')->where('id',$id)->update(['status' => 1]);
    $notification=array(
      'messege'=>'Activated the product',
      'alert-type'=>'success'
     );
     return redirect()->back()->with($notification);

  }

  public function Delete($id)
  {
    $product = DB::table('products')->where('id',$id)->first();
    $image_one = $product->image_one;
    $image_two = $product->image_two;
    $image_three = $product->image_three;
    unlink($image_one);
    unlink($image_two);
    unlink($image_three);



    DB::table('products')->where('id',$id)->delete();
    $notification=array(
      'messege'=>'Successfully Product Deleted',
      'alert-type'=>'success'
     );
     return redirect()->back()->with($notification);

  }

  public function ViewProduct($id)
  {
    $product = DB::table('products')
              ->join('categories','products.category_id','categories.id')
              ->join('subcategories','products.subcategory_id','subcategories.id')
              ->join('brands','products.brand_id','brands.id')
              ->select('products.*','categories.category_name','subcategories.subcategory_name','brands.brand_name')
              ->where('products.id',$id)
              ->first();
    return view('admin.product.view',compact('product'));   
  }

    public function EditProduct($id){
      $product = DB::table('products')->where('id',$id)->first();
      return view('admin.product.edit',compact('product'));
    
    }

    public function UpdateProductWithoutPhoto(Request $request,$id)
    {
      
      $data = array();
      $data['product_name'] = $request->product_name;
      $data['product_code'] = $request->product_code;
      $data['product_quantity'] = $request->product_quantity;
      $data['category_id'] = $request->category_id;
      $data['subcategory_id'] = $request->subcategory_id;
      $data['brand_id'] = $request->brand_id;
      $data['product_size'] = $request->product_size;
      $data['product_color'] = $request->product_color;
      $data['selling_price'] = $request->selling_price;
      $data['discount_price'] = $request->discount_price;
      $data['product_details'] = $request->product_details;
      $data['video_link'] = $request->video_link;

      $data['main_slider'] = $request->main_slider;
      $data['hot_deal'] = $request->hot_deal;
      $data['best_rated'] = $request->best_rated;
      $data['trend'] = $request->trend;
      $data['mid_slider'] = $request->mid_slider;
      $data['hot_new'] = $request->hot_new;
      $data['bogo'] = $request->bogo;
      $data['status'] = 1;
      
      $old_one_image = $request->old_one_image;
      $old_two_image = $request->old_two_image;
      $old_three_image = $request->old_three_image;

      $image_one = $request->image_one;
      $image_two = $request->image_two;
      $image_three = $request->image_three;

      if($request->has($image_one)){
        unlink($old_one_image);
        $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
        Image::make($image_one)->resize(300,300)->save('public/media/product/'.$image_one_name);
        $data['image_one'] = 'public/media/product/'.$image_one_name;

         $update = DB::table('products')->where('id',$id)->update($data);
      if($update)
      {
        $notification=array(
          'messege'=>'Successfully Product Updated With Photo 1',
          'alert-type'=>'success'
         );
         return redirect()->route('all.product')->with($notification);
      }

    }
     elseif($request->has($image_one) && $request->has($image_two)){
      unlink($old_one_image);
      unlink($old_two_image);
        $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
        Image::make($image_one)->resize(300,300)->save('public/media/product/'.$image_one_name);
        $data['image_one'] = 'public/media/product/'.$image_one_name;


        $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
        Image::make($image_two)->resize(300,300)->save('public/media/product/'.$image_two_name);
        $data['image_two'] = 'public/media/product/'.$image_two_name;

            $update = DB::table('products')->where('id',$id)->update($data);
          if($update)
          {
            $notification=array(
              'messege'=>'Successfully Product Updated With Photo 2',
              'alert-type'=>'success'
            );
            return redirect()->route('all.product')->with($notification);
          }
      }

   elseif($request->has($image_one) && $request->has($image_two) && $request->has($image_three)){
    unlink($old_one_image);
    unlink($old_two_image);
    unlink($old_three_image);

    $image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
    Image::make($image_one)->resize(300,300)->save('public/media/product/'.$image_one_name);
    $data['image_one'] = 'public/media/product/'.$image_one_name;


    $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
    Image::make($image_two)->resize(300,300)->save('public/media/product/'.$image_two_name);
    $data['image_two'] = 'public/media/product/'.$image_two_name;

    $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
    Image::make($image_three)->resize(300,300)->save('public/media/product/'.$image_three_name);
    $data['image_three'] = 'public/media/product/'.$image_three_name;

     $update = DB::table('products')->where('id',$id)->update($data);
  if($update)
  {
    $notification=array(
      'messege'=>'Successfully Product Updated With Photo 2',
      'alert-type'=>'success'
     );
     return redirect()->route('all.product')->with($notification);
  }

}else{

     $data['image_one']   = $old_one_image;
     $data['image_two']   = $old_two_image;
     $data['image_three'] = $old_three_image;
     $update = DB::table('products')->where('id',$id)->update($data);
     if($update)
     {
       $notification=array(
         'messege'=>'Successfully Product Updated With all',
         'alert-type'=>'success'
        );
        return redirect()->route('all.product')->with($notification);
     }
}

    
 }
}
  
