<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // 创建管理员
        $user = User::create([
            'name' => 'YuanPengfei',
            'email' => '345161974@qq.com',
            'password' => bcrypt('yuan.8222'),
        ]);
        $role = Role::where('name', 'superadmin')->first(); // 查找默认普通用户角色
//        $user->roles()->attach($role->id);
        $user->attachRole($role); // 初始化管理员

        // 批量创建10位普通用户
        for ($count = 0; $count < 3; $count++) {
            $user = factory(User::class)->create();
            $common_role = App\Role::where('name', 'common')->first();
            $user->attachRole($common_role); // 默认用户注册为普通用户
        }

    }
}
