<?php

namespace App\Traits;

Trait  GeneralTrait
{

    public function getSuccessMsg($errorNum = 200, $msg =''){

        return response()->json([
            'status' => true,
            'errorNum' => $errorNum,
            'msg' => $msg,
        ]);
    }

    public function getErrorMsg($errorNum = 404 , $msg =''){

        return response()->json([
            'status' => false,
            'errorNum' => $errorNum,
            'msg' => $msg,
        ]);
    }

    public function getData($key , $value, $errorNum = 200 , $msg =''){

        return response()->json([
            'status' => true,
            'errorNum' => $errorNum,
            'msg' => $msg,
            $key => $value,
        ]);
    }


}
