<?php
/**
 * Created by PhpStorm.
 * User: warthur
 * Date: 17/9/2
 * Time: 下午12:14
 */

namespace App\Http\Dao;


use Illuminate\Support\Facades\DB;

class BaseDao
{
    protected static $table;

    protected static function db() {
        return DB::table(self::$table);
    }
}