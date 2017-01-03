<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'visitor',
                'display_name' => '游客',
                'description' => '未注册游客'
            ],
            [
                'name' => 'common',
                'display_name' => '注册用户',
                'description' => '普通注册用户'
            ],
            [
                'name' => 'vip',
                'display_name' => 'VIP用户',
                'description' => '具有增值服务的用户角色'
            ],
            [
                'name' => 'admin',
                'display_name' => '管理员',
                'description' => '管理员'
            ],
            [
                'name' => 'superadmin',
                'display_name' => '超级管理员',
                'description' => '超级管理员'
            ]
        ];

        foreach ($roles as $key => $value) {
            Role::create($value);
        }
    }
}
