<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Exception;
use Spatie\Permission\Exceptions\PermissionAlreadyExists;
use Spatie\Permission\Guard;
use Spatie\Permission\Models\Permission;

class PermissionsCategories extends Model
{
    use HasFactory;


    public function permissions()
    {
        return $this->hasMany(Permission::class,'category_id');
    }

    public static function create(array $attributes = [])
    {

        $category = static::where('name' ,$attributes['name'])->first();
        if ($category) {
            throw new \Exception("category already exists");
        }

        return static::query()->create($attributes);
    }
}
