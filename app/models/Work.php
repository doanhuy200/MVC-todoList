<?php

namespace app\models;

use core\App;

class Work
{
    static $table = 'works';

    const PLANNING = 1;
    const DOING    = 2;
    const COMPLETE = 3;
    const ARRAY_STATUS = [
        self::PLANNING => 'planning',
        self::DOING    => 'doing',
        self::COMPLETE => 'complete',
    ];

    public static function all()
    {
        return App::get('database')->selectAll(Work::$table);
    }

    public static function insert($data = [])
    {
        return App::get('database')->insert(
            Work::$table,
            array_merge($data, [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]));
    }

    public static function delete($id)
    {
        return App::get('database')->delete(
            Work::$table, $id
        );
    }

    public static function allById($id)
    {
        return App::get('database')->selectById(
            Work::$table, $id
        );
    }

    public static function updateById($data, $id)
    {
        App::get('database')->update(
            Work::$table,
            array_merge($data, [
                'updated_at' => date('Y-m-d H:i:s')
            ]),
            $id
        );
    }
}