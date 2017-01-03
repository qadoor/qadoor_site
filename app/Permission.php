<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 2016/12/7
 * Time: 下午10:21
 */
namespace App;
use Zizaco\Entrust\EntrustPermission;

/**
 * App\Permission
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @mixin \Eloquent
 */
class Permission extends EntrustPermission
{
}