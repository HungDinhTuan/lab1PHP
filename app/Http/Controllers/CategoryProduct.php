<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Models\CategoryProductModel;
session_start();

class CategoryProduct extends Controller
{
    public function authLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dasboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function addCategoryProduct()
    {
        $this->authLogin();
        return view('admin.category.AddProduct');
    }

    public function allCategoryProduct()
    {
        $this->authLogin();
        $allCategoryProduct = DB::table('category_product_table')->where('product_status', 1)->paginate(5);
        $mangerCategoryProduct = view('admin.category.AllProducts')->with('allProducts', $allCategoryProduct);
        return view('admin.Layout')->with('admin.category.AllProducts', $mangerCategoryProduct);
    }

    public function updateCategoryProduct($productId)
    {
        $this->authLogin();
        $updateCategoryProduct = DB::table('category_product_table')->where('product_id', $productId)->get();
        $mangerCategoryProduct = view('admin.category.UpdateProduct')->with('updateProduct', $updateCategoryProduct);
        return view('admin.Layout')->with('admin.category.UpdateProduct', $mangerCategoryProduct);
    }

    public function deleteCategoryProduct($productId)
    {
        $this->authLogin();
        DB::table('category_product_table')->where('product_id', $productId)->update(['product_status'=>0]);
        Session::put('message', 'Delete a product to success.');
        return Redirect::to('all-category-product');
    }

    public function saveCategoryProduct(Request $request)
    {
        $this->authLogin();

        // validate data
        $validateData = $request->validate([
            'productName' => 'required|regex:/^\S.*\S$/',
            'price' => 'required|numeric|min:1',
            'amount' => 'required|numeric|min:1',
            'size' => 'required|regex:/^\S.*\S$/',
            'producer' => 'required|regex:/^\S.*\S$/',
            'createdBy' => 'required|regex:/^\S.*\S$/',
            'createdAt' => 'required|date',
            'comment' => 'nullable',
        ], [
            'productName.required' => 'Product name is not empty.',
            'price.numeric' => 'Price must be a number',
            'price.min' => 'Price must be greater than or equal to 1 (currency : D).',
            'amount.numeric' => 'Amount must be a number',
            'amount.min' => 'Amount must be greater than or equal to 0.',
            'size.required' => 'Size is not empty.',
            'producer.required' => 'Producer is not empty.',
            'createdBy.required' => 'Created by is not empty.',
            'createdAt.required' => 'Created at is not empty.',
        ]);

        $data = array();
        $data['product_name'] = $validateData['productName'];
        $data['price'] = $validateData['price'];
        $data['amount'] = $validateData['amount'];
        $data['size'] = $validateData['size'];
        $data['producer'] = $validateData['producer'];
        $data['created_by'] = $validateData['createdBy'];
        $data['created_at'] = $validateData['createdAt'];

        if(array_key_exists('comment', $validateData)){
            $data['comment'] = $validateData['comment'];
        }else{
            $data['comment'] = null;
        }

        DB::table('category_product_table')->insert($data);
        Session::put('message', 'Add a product to success.');
        return Redirect::to('add-category-product');
    }

    public function saveUpdateCategoryProduct(Request $request, $productId)
    {
        $this->authLogin();

        // validate data
        $validateData = $request->validate([
            'productName' => 'required|regex:/^\S.*\S$/',
            'price' => 'required|numeric|min:1',
            'amount' => 'required|numeric|min:1',
            'size' => 'required|regex:/^\S.*\S$/',
            'producer' => 'required|regex:/^\S.*\S$/',
            'updatedBy' => 'required|regex:/^\S.*\S$/',
            'updatedAt' => 'required|date',
            'comment' => 'nullable',
        ], [
            'productName.required' => 'Product name is not empty.',
            'price.numeric' => 'Price must be a number',
            'price.min' => 'Price must be greater than or equal to 1 (currency : D).',
            'amount.numeric' => 'Amount must be a number',
            'amount.min' => 'Amount must be greater than or equal to 0.',
            'size.required' => 'Size is not empty.',
            'producer.required' => 'Producer is not empty.',
            'updatedBy.required' => 'Updated by is not empty.',
            'updatedAt.required' => 'Updated at is not empty.',
        ]);

        $data = array();
        $data['product_name'] = $validateData['productName'];
        $data['price'] = $validateData['price'];
        $data['amount'] = $validateData['amount'];
        $data['size'] = $validateData['size'];
        $data['producer'] = $validateData['producer'];
        $data['updated_by'] = $validateData['updatedBy'];
        $data['updated_at'] = $validateData['updatedAt'];

        if(array_key_exists('comment', $validateData)){
            $data['comment'] = $validateData['comment'];
        }else{
            $data['comment'] = null;
        }

        DB::table('category_product_table')->where('product_id', $productId)->update($data);
        Session::put('message', 'Update a product to success.');
        return Redirect::to('all-category-product');
    }
}
