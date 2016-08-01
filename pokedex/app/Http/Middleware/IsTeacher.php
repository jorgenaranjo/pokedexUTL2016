<?php
/**
 * Created by PhpStorm.
 * User: taxque
 * Date: 6/07/16
 * Time: 11:57 PM
 */

namespace App\Http\Middleware;


class IsTeacher extends IsType{

    public function getType()
    {
        return 'teacher';
    }

}