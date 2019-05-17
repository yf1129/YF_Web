<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table = 'yf_users';
    protected $guarded = [];
    // 测试类
    public function getInfo(){
        $users = self::get();
        return $users;
    }
}
