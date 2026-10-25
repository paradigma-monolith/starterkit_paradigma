<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GlobalSearchController extends Controller
{
    /**
     * Perform global full-text search across models using Laravel Scout.
     */
    public function index(Request $request): JsonResponse
    {
        $query = trim((string) $request->input('q', ''));

        if (strlen($query) < 2) {
            return response()->json([
                'query' => $query,
                'results' => [
                    'users' => [],
                    'navigation' => [],
                ],
            ]);
        }

        // Scout full-text search on User model
        $users = User::search($query)
            ->take(5)
            ->get()
            ->map(fn (User $user) => [
                'id' => $user->id,
                'title' => $user->name,
                'subtitle' => $user->email,
                'category' => 'Pengguna',
                'url' => '/inertia/dashboard',
            ]);

        // Built-in navigation suggestions
        $navItems = collect([
            ['title' => 'Dashboard Utama', 'subtitle' => 'Halaman awal arsitektur hybrid', 'category' => 'Navigasi', 'url' => '/inertia/dashboard'],
            ['title' => 'Traditional SPA', 'subtitle' => 'Client-side routing via REST API', 'category' => 'Navigasi', 'url' => '/spa'],
            ['title' => 'Dokumentasi API', 'subtitle' => 'OpenAPI Scramble Explorer', 'category' => 'Developer', 'url' => '/docs/api'],
            ['title' => 'Laravel Pulse', 'subtitle' => 'Health monitoring & metrics', 'category' => 'Developer', 'url' => '/pulse'],
            ['title' => 'Audit Trail Logs', 'subtitle' => 'Riwayat audit trail aktivitas', 'category' => 'Sistem', 'url' => '/inertia/audit-logs'],
        ])->filter(function ($item) use ($query) {
            return str_contains(strtolower($item['title']), strtolower($query))
                || str_contains(strtolower($item['subtitle']), strtolower($query));
        })->values();

        return response()->json([
            'query' => $query,
            'results' => [
                'users' => $users,
                'navigation' => $navItems,
            ],
        ]);
    }
}
