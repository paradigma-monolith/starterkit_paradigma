<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MediaApiController extends Controller
{
    /**
     * Upload media to authenticated user using Spatie MediaLibrary.
     */
    public function upload(Request $request): JsonResponse
    {
        $request->validate([
            'file' => 'required|file|max:10240', // 10MB max
            'collection' => 'nullable|string|max:50',
        ]);

        $user = $request->user();
        $collection = $request->input('collection', 'documents');

        $media = $user->addMediaFromRequest('file')
            ->toMediaCollection($collection);

        return response()->json([
            'message' => 'Berkas berhasil diunggah via Spatie MediaLibrary.',
            'media' => [
                'id' => $media->id,
                'name' => $media->name,
                'file_name' => $media->file_name,
                'mime_type' => $media->mime_type,
                'size' => $media->size,
                'url' => $media->getUrl(),
                'thumb_url' => $media->hasGeneratedConversion('thumb') ? $media->getUrl('thumb') : null,
                'collection' => $media->collection_name,
                'created_at' => $media->created_at->toISOString(),
            ],
        ], 201);
    }

    /**
     * List user's uploaded media items.
     */
    public function index(Request $request): JsonResponse
    {
        $collection = $request->input('collection');
        $user = $request->user();

        $mediaItems = $collection
            ? $user->getMedia($collection)
            : $user->getMedia();

        return response()->json([
            'media' => $mediaItems->map(fn ($media) => [
                'id' => $media->id,
                'name' => $media->name,
                'file_name' => $media->file_name,
                'mime_type' => $media->mime_type,
                'size' => $media->size,
                'url' => $media->getUrl(),
                'thumb_url' => $media->hasGeneratedConversion('thumb') ? $media->getUrl('thumb') : null,
                'collection' => $media->collection_name,
                'created_at' => $media->created_at->toISOString(),
            ]),
        ]);
    }

    /**
     * Delete a media item.
     */
    public function destroy(Request $request, int $id): JsonResponse
    {
        $user = $request->user();
        $media = $user->media()->findOrFail($id);
        $media->delete();

        return response()->json([
            'message' => 'Berkas media berhasil dihapus.',
        ]);
    }
}
