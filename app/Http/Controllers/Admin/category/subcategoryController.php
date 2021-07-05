<?php

namespace App\Http\Controllers\Admin\category;

use App\Http\Controllers\Controller;
use App\Model\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationData;
use PDO;

class subcategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
  
    public function subCategories()
    {
        $category = DB::table('categories')->get();
        $subcat = DB::table('subcategories')
                ->join('categories','subcategories.category_id','categories.id')
                ->select('subcategories.*','categories.category_name')
                ->get();
        return view('admin.category.subcategories', compact('category','subcat'));
    }

    public function storeSubCategory(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'subcategory_name' => 'required',
           
        ]);

        $data = array();
        $data['category_id'] = $request->category_id;
        $data['subcategory_name'] = $request->subcategory_name;
        DB::table('subcategories')->insert($data);
        $notification = array(
            'message' => 'Sub Category Inserted successfully',
            'alert-type' => 'success'
             );
       return redirect()->route('sub.categories')->with($notification);  
    }

    public function deleteSubCategory($id)
    {
         DB::table('subcategories')->where('id',$id)->delete();
         $notification = array(
            'message' => 'Sub Category Deleted successfully',
            'alert-type' => 'error'
             );
        return redirect()->route('sub.categories')->with($notification);  

    }

    public function editSubCategory($id)
    {
     $subcat = DB::table('subcategories')->where('id',$id)->first();
     $category = DB::table('categories')->get();
     return view('admin.category.edit_subcategory',compact('subcat','category'));
    }

    public function updateSubCategory(Request $request, $id){
        $validatedData = $request->validate([
            'category_id' => 'required',
            'subcategory_name' => 'required',
           
        ]);
        $data = array();
        $data['category_id'] = $request->category_id;
        $data['subcategory_name'] = $request->subcategory_name;
        DB::table('subcategories')->where('id',$id)->update($data);
        $notification = array(
            'message' => 'Sub Category Updated successfully',
            'alert-type' => 'success'
             );
       return redirect()->route('sub.categories')->with($notification);  
    }

}
