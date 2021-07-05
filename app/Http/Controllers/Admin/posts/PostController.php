<?php

namespace App\Http\Controllers\Admin\posts;

use App\Http\Controllers\Controller;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    

    public function IndexPost()
    {    
        $posts = DB::table('posts')
                 ->join('post_category','posts.category_id','post_category.id')
                 ->select('posts.*','post_category.category_name_en')
                ->get();
        return view('admin/posts/index',compact('posts'));
    }

    public function IndexCategory()
   {
       $category = DB::table('post_category')->get();
       return view('admin/posts/postcategory',compact('category'));
   }

   public function AddCategory()
   {
       return view('admin/posts/create_category');
   }

   public function StoreCategory(Request $request)
   {
       $data = array();
       $data['category_name_en'] = $request->category_name_en;
       $data['category_name_bn'] = $request->category_name_bn;

       DB::table('post_category')->insert($data);
            $notification = array(
                'message' => 'Post Category added successfully',
                'alert-type' => 'success'
                );
       return redirect()->back()->with($notification);   

   }

   public function EditPostCategory($id)
   {
       $category = DB::table('post_category')->where('id',$id)->first();
       return view('admin/posts/editcategory',compact('category'));
   }


   public function UpdatePostCategory(Request $request,$id)
   {
        $data = array();
        $data['category_name_en'] = $request->category_name_en;
        $data['category_name_bn'] = $request->category_name_bn;
        DB::table('post_category')->where('id',$id)->update($data);
            $notification = array(
                'message' => 'Post Category Updated successfully',
                'alert-type' => 'success'
                );
        return redirect()->route('index.category')->with($notification);
   }

   public function DeletePostCategory($id)
   {
       DB::table('post_category')->where('id',$id)->delete();
       $notification = array(
        'message' => 'Post Category Updated successfully',
        'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
   }

   public function CreatePost()
   {
       $category = DB::table('post_category')->get();
       return view('admin/posts/createpost',compact('category'));
   }

   public function StorePost(Request $request)
   {
      
    $data = array();
    $data['category_id'] = $request->category_id;
    $data['title_en'] = $request->title_en;
    $data['title_bn'] = $request->title_bn;
    $data['details_en'] = $request->details_en;
    $data['details_bn'] = $request->details_bn;

    $image=$request->file('image');
    if ($image) {
        // $image_name= str_random(5);
        $image_name= date('dmy_H_s_i');

        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/media/post/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        $data['image']=$image_url;

    DB::table('posts')->insert($data);
        $notification = array(
            'message' => 'Post inserted successfully',
            'alert-type' => 'success'
            );
    return redirect()->route('index.post')->with($notification);
   }
  }

  public function EditPost($id)
  {
      $post = DB::table('posts')->where('id', $id)->first();
    //   $category = DB::table('post_category')->get();

    return view('admin.posts.editpost',compact('post'));
  }


  public function UpdatePost(Request $request)
  {
    $old_image = $request->image_old;
  
    $data = array();
    $post_id = $request->post_id;
    $data['category_id'] = $request->category_id;
    $data['title_en'] = $request->title_en;
    $data['title_bn'] = $request->title_bn;
    $data['details_en'] = $request->details_en;
    $data['details_bn'] = $request->details_bn;
    $image=$request->file('image');

    if ($image) {
        unlink($old_image);
        $image_name= date('dmy_H_s_i');
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/media/post/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        $data['image']=$image_url;

    DB::table('posts')->where('id',$post_id)->update($data);
        $notification = array(
            'message' => 'Post Updated successfully',
            'alert-type' => 'success'
            );
    return redirect()->route('index.post')->with($notification);

   }else{
            DB::table('posts')->where('id',$post_id)->update($data);
            $notification = array(
                'message' => 'Post Updated successfully',
                'alert-type' => 'success'
                );
        return redirect()->route('index.post')->with($notification);
        }

  }
}
