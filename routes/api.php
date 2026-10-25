<?php

use App\Http\Controllers\Api\ActivityLogApiController;
use App\Http\Controllers\Api\ProfileApiController;
use App\Http\Controllers\Api\StatsApiController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\NotificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return response()->json([
        'user' => $request->user(),
        'roles' => $request->user()->getRoleNames(),
        'permissions' => $request->user()->getAllPermissions()->pluck('name'),
    ]);
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    // Public telemetry & system stats for SPA
    Route::get('/stats', [StatsApiController::class, 'index']);

    // Exports API (Audit Logs)
    Route::get('/exports/audit-logs/excel', [ExportController::class, 'exportExcel']);
    Route::get('/exports/audit-logs/csv', [ExportController::class, 'exportCsv']);
    Route::get('/exports/audit-logs/pdf', [ExportController::class, 'exportPdf']);

    // Protected API Routes
    Route::middleware('auth:sanctum')->group(function () {
        // User Profile & Avatar
        Route::get('/profile', [ProfileApiController::class, 'show']);
        Route::patch('/profile', [ProfileApiController::class, 'update']);
        Route::put('/profile/password', [ProfileApiController::class, 'updatePassword']);
        Route::post('/profile/avatar', [ProfileApiController::class, 'updateAvatar']);
        Route::get('/profile/login-histories', [ProfileApiController::class, 'loginHistories']);

        // Audit Trail Logs
        Route::get('/audit-logs', [ActivityLogApiController::class, 'index']);

        // Notifications
        Route::get('/notifications', [NotificationController::class, 'index']);
        Route::post('/notifications/{id}/read', [NotificationController::class, 'markAsRead']);
        Route::post('/notifications/read-all', [NotificationController::class, 'markAllAsRead']);

        // Laravel Scout Global Search
        Route::get('/search', [\App\Http\Controllers\Api\GlobalSearchController::class, 'index']);

        // Spatie MediaLibrary Endpoints
        Route::get('/media', [\App\Http\Controllers\Api\MediaApiController::class, 'index']);
        Route::post('/media/upload', [\App\Http\Controllers\Api\MediaApiController::class, 'upload']);
        Route::delete('/media/{id}', [\App\Http\Controllers\Api\MediaApiController::class, 'destroy']);

        // Spatie QueryBuilder Resource Example (Paginated & Filtered Users)
        Route::get('/users', [\App\Http\Controllers\Api\UsersApiController::class, 'index']);
    });
});
