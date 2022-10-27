<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'سليدر الفئات',
            'اضافه فئه',
            'تعديل الفئه',
            'حذف الفئه',


            'سليدر العناصر',
            'تعديل العناصر',
            'حذف العناصر',
            'اضافه العناصر',


            'سليدر المنتجات',
            'اضافه منتج',
            'تعديل المنتج',
            'حذف المنتج',


            'سليدر سليدر',
            'اضافه سليدر',
            'تعديل سليدر',
            'حذف سليدر',


            'سليدر الخصومات',
            'اضافه خصومات',
            'تعديل خصومات',
            'حذف خصومات',



            'سليدر الطلبات',
            'تعديل الطلبات',
            'تعين الطلبات',
            'سليدر المستخدمين والصلاحيات',




            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
