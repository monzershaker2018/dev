<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use GeneralTrait;
    public function get_all_categories()
    {
        $categories = category::all();
        return $this->getData('categories' ,$categories ,'تم جلب البيانات بنجاح');

    }


    public function get_category_byId()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
