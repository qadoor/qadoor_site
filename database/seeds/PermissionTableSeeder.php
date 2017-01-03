<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'name' => 'role-list',
                'display_name' => '展示角色列表',
                'description' => '查看列表_角色'
            ],
            [
                'name' => 'role-create',
                'display_name' => '创建角色',
                'description' => '创建新角色'
            ],
            [
                'name' => 'role-edit',
                'display_name' => '编辑角色',
                'description' => '编辑角色'
            ],
            [
                'name' => 'role-delete',
                'display_name' => '删除角色',
                'description' => '删除角色'
            ],
            [
                'name' => 'question-list',
                'display_name' => '展示问题列表',
                'description' => '查看列表_问题'
            ],
            [
                'name' => 'question-create',
                'display_name' => '创建问题',
                'description' => '创建新问题'
            ],
            [
                'name' => 'question-edit',
                'display_name' => '编辑问题',
                'description' => '编辑问题'
            ],
            [
                'name' => 'question-delete',
                'display_name' => '删除问题',
                'description' => '删除问题'
            ],
            [
                'name' => 'tag-list',
                'display_name' => '展示标签列表',
                'description' => '查看列表_标签'
            ],
            [
                'name' => 'tag-create',
                'display_name' => '创建标签',
                'description' => '创建新标签'
            ],
            [
                'name' => 'tag-edit',
                'display_name' => '编辑标签',
                'description' => '编辑标签'
            ],
            [
                'name' => 'tag-delete',
                'display_name' => '删除标签',
                'description' => '删除标签'
            ],
            [
                'name' => 'user-list',
                'display_name' => '展示用户列表',
                'description' => '查看列表_用户'
            ],
            [
                'name' => 'user-create',
                'display_name' => '创建用户',
                'description' => '创建新用户'
            ],
            [
                'name' => 'user-edit',
                'display_name' => '编辑用户',
                'description' => '编辑用户'
            ],
            [
                'name' => 'user-delete',
                'display_name' => '删除用户',
                'description' => '删除用户'
            ],
            [
                'name' => 'cat-list',
                'display_name' => '展示分类列表',
                'description' => '查看列表_分类'
            ],
            [
                'name' => 'cat-create',
                'display_name' => '创建分类',
                'description' => '创建新分类'
            ],
            [
                'name' => 'cat-edit',
                'display_name' => '编辑分类',
                'description' => '编辑分类'
            ],
            [
                'name' => 'cat-delete',
                'display_name' => '删除分类',
                'description' => '删除分类'
            ],
            [
                'name' => 'comment-list',
                'display_name' => '展示评论列表',
                'description' => '查看列表_评论'
            ],
            [
                'name' => 'comment-create',
                'display_name' => '创建评论',
                'description' => '创建新评论'
            ],
            [
                'name' => 'comment-edit',
                'display_name' => '编辑评论',
                'description' => '编辑评论'
            ],
            [
                'name' => 'comment-delete',
                'display_name' => '删除评论',
                'description' => '删除评论'
            ],
            [
                'name' => 'permission-list',
                'display_name' => '展示权限列表',
                'description' => '查看列表_权限'
            ],
            [
                'name' => 'permission-create',
                'display_name' => '创建权限',
                'description' => '创建新权限'
            ],
            [
                'name' => 'permission-edit',
                'display_name' => '编辑权限',
                'description' => '编辑权限'
            ],
            [
                'name' => 'permission-delete',
                'display_name' => '删除权限',
                'description' => '删除权限'
            ],
            [
                'name' => 'answer-list',
                'display_name' => '展示回答列表',
                'description' => '查看列表_回答'
            ],
            [
                'name' => 'answer-create',
                'display_name' => '创建回答',
                'description' => '创建新回答'
            ],
            [
                'name' => 'answer-edit',
                'display_name' => '编辑回答',
                'description' => '编辑回答'
            ],
            [
                'name' => 'answer-delete',
                'display_name' => '删除回答',
                'description' => '删除回答'
            ]
        ];

        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}
