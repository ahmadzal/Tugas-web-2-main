<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class biodata extends Model
{
    private static $biodata = [
        'name' => 'Ghifar Rito I.F',
        'nim' => '21103041078',
        'address' => "Karang Rejo",
        'hobby' => [
            [
                'name' => 'Membaca',
                'url' => 'https://images.unsplash.com/photo-1553729784-e91953dec042?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80'
            ],
            [
                'name' => 'Bercocok tanam',
                'url' =>  'https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80'
            ],
            [
                'name' => 'Mendengarkan musik',
                'url' => 'https://images.unsplash.com/photo-1519619091416-f5d7e5200702?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80'
            ]
        ]
    ];

    public static function getBiodata()
    {
        return self::$biodata;
    }
}
