<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MediaUploadController extends Controller
{
    /**
     * Upload an image securely for the TipTap editor or featured media.
     */
    public function upload(Request $request): JsonResponse
    {
        $request->validate([
            'image' => [
                'required',
                'file',
                'image',
                'mimes:jpeg,png,webp,avif',
                'max:5120', // 5MB max
            ],
        ]);

        $file = $request->file('image');

        if (! $file || ! $file->isValid()) {
            return response()->json([
                'message' => 'Invalid file upload.',
            ], 422);
        }

        // Binary check: verify it is a real image and read its dimensions
        $imageInfo = @getimagesize($file->getRealPath());
        if ($imageInfo === false) {
            return response()->json([
                'message' => 'The uploaded file is not a valid image.',
            ], 422);
        }

        // Disallow SVG explicitly
        $mime = $imageInfo['mime'] ?? $file->getMimeType();
        if ($mime === 'image/svg+xml' || str_ends_with(strtolower($file->getClientOriginalName()), '.svg')) {
            return response()->json([
                'message' => 'SVG uploads are not permitted for security reasons.',
            ], 422);
        }

        // Generate cryptographically random unguessable filename
        $extension = $file->guessExtension() ?: 'jpg';
        $filename = (string) Str::uuid().'.'.$extension;

        // Store inside storage/app/public/uploads/blog/
        $path = $file->storeAs('uploads/blog', $filename, 'public');

        if (! $path) {
            return response()->json([
                'message' => 'Could not save the image.',
            ], 500);
        }

        $url = Storage::disk('public')->url($path);

        return response()->json([
            'url' => $url,
            'path' => $path,
            'name' => $filename,
        ]);
    }
}
