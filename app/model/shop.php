<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    //关联数据表
    protected $table = 'shop';
    //定义主键id
    protected $primaryKey='goods_id';
    //关闭自动时间戳
    public $timestamps = false;
}
