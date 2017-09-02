<?php
/**
 * Created by PhpStorm.
 * User: warthur
 * Date: 17/5/7
 * Time: 下午1:10
 */

namespace App\Http\Dao;


use Illuminate\Support\Facades\DB;

class AccountDao extends BaseDao
{
    private static $table="db_crop.tp_account";

    public static function getList()
    {
        return DB::table(self::$table)->get();
    }

    public static function getInfo()
    {
        return self::db()->where('organ_id', 72)
            ->orderBy('create_time', 'desc')
            ->take(3)->get();
    }

    public static function selectDataList()
    {
        // TODO: Implement selectDataList() method.
        return DB::table(self::$table)->get();
    }
}