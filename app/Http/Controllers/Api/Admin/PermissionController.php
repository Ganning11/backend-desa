<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use App\Http\Resources\PermissionResource;
use App\Services\PermissionServices;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;
use Spatie\Permission\Exceptions\UnauthorizedException;

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
        } catch (PermissionDoesNotExist $e) {
            Log::error('Error: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 400);
        } catch (UnauthorizedException $e) {
            Log::error('Error: ' . $e->getMessage());
            return response()->json(['error' => 'Anda tidak diizinkan.'], 403);
        } catch (\Exception $e) {
            Log::error('Error: ' . $e->getMessage());
            return response()->json(['error' => 'Terjadi kesalahan.'], 500);
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
        } catch (PermissionDoesNotExist $e) {
            Log::error('Error: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 400);
        } catch (UnauthorizedException $e) {
            Log::error('Error: ' . $e->getMessage());
            return response()->json(['error' => 'Anda tidak diizinkan.'], 403);
        } catch (\Exception $e) {
            Log::error('Error: ' . $e->getMessage());
            return response()->json(['error' => 'Terjadi kesalahan.'], 500);
        }
    }
}
