<?php

namespace App\Http\Controllers\Admin\category;
use App\Http\Controllers\Controller;
use App\Model\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function category(){
        $category = Category::all();
        return view('admin.category.category',compact('category'));
    }

    public function storeCategory(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|unique:categories|max:55',
           
        ]);
        
        $data = array();
        $data['category_name'] = $request->category_name;
        DB::table('categories')->insert($data);

        $notification = array(
                       'message' => 'Category added successfully',
                       'alert-type' => 'success'
                        );
                 return redirect()->back()->with($notification);       

    }

    public function deleteCategory($id)
    {
        DB::table('categories')->where('id',$id)->delete();
        $notification = array(
            'message' => 'Category Deleted',
            'alert-type' => 'danger'
             );
      return Redirect()->back()->with($notification);   

    }

    public function editCategory($id)
    {
        $category = DB::table('categories')->where('id',$id)->first();
        return view('admin.category.edit_category',compact('category'));
    }

    public function updateCategory(Request $request,$id)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|max:55',
           
        ]);
      $data = array();
      $data['category_name'] = $request->category_name;
        $update = DB::table('categories')->where('id',$id)->update($data);
        if($update)
        {
            $notification = array(
                'message' => 'Category Updated',
                'alert-type' => 'success'
                 );
          return Redirect()->route('categories')->with($notification);  
        }else{
            $notification = array(
                'message' => 'Nothing to Update',
                'alert-type' => 'danger'
                 );
          return Redirect()->route('categories')->with($notification); 
        }

    }
} 

