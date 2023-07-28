<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GroupPermission extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    
    public static function getpermissionByGroupName($group_name)
    {
        return Permission::where('group_name', $group_name)->get(['id', 'name']);
    }
    public static function getpermissionByRole($role_id)
    {
        return DB::table('role_has_permissions')->where('role_id', $role_id)->get(['permission_id']);
    }
    public static function getPermissionName($id)
    {
        return Permission::where('id', $id)->value('name');
    }
}
