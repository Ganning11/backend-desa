<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use App\Http\Resources\PermissionResource;
use App\Services\PermissionServices;

class PermissionController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        try {
            return PermissionServices::index();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * all
     *
     * @return void
     */
    public function all()
    {
        try {
            return PermissionServices::all();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
