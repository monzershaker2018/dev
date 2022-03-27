<?php

namespace App\Http\Controllers;

use App\Models\mobile;
use App\Models\category;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;


class MobileController extends Controller
{
    use GeneralTrait;
    public function index()
    {
       $mobiles = mobile::all();
       return response()->json($mobiles);
        //return $this->getData('mobiles', $mobiles ,200, 'تم جلب البيانات بنجاح');
    }


    public function getCategoryItems($category_id)
    {
      $category = category::findOrFail($category_id);

       if($category) {
           $mobiles = mobile::where('category_id', $category_id)->get();

           if(count($mobiles)  > 0){
               return $this->getData('mobiles', $mobiles ,200, 'تم جلب البيانات بنجاح');

           }else{
               return $this->getErrorMsg( 404,' عفوا ، القسم الذي اخترته لا يحتوي علي أي جوال');
           }

       }
       }

//           if($mobiles){
//               return $this->getData('mobiles', $mobiles ,200, 'تم جلب البيانات بنجاح');
//
//           }else{
//               return $this->getErrorMsg( 404,' الرجاء االتاكد    ');
//           }
//
//       }else{
//           return $this->getErrorMsg( 404,' الرجاء االتاكد من إدخال رقم القسم');
//       }



    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        if($id){
            $mobiles = mobile::where('id' , $id)->first();
            return $this->getData('mobiles', $mobiles ,200, 'تم جلب البيانات بنجاح');
        }else{
            return $this->getErrorMsg( 404,' رقم المنتج الذي ادخلته غير صحيح');
        }
    }





//


    public function edit(mobile $mobile)
    {
        //
    }


    public function update(Request $request, mobile $mobile)
    {
        //
    }


    public function destroy(mobile $mobile)
    {
        //
    }
}
