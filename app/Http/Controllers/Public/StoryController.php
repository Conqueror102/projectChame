<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StoryController extends Controller
{
    /**
     * Display a listing of published stories.
     */
    public function index(Request $request): View
    {
        $search = $request->query('search');
        $category = $request->query('category');

        $posts = Post::published()
            ->when($category, fn ($q) => $q->search($category))
            ->when($search, fn ($q) => $q->search($search))
            ->latest('published_at')
            ->paginate(9);

        return view('pages.stories.index', [
            'posts' => $posts,
            'search' => $search,
            'selectedCategory' => $category,
        ]);
    }

    /**
     * Display a single story article.
     */
    public function show(string $slug): View
    {
        $post = Post::published()
            ->where('slug', $slug)
            ->firstOrFail();

        $relatedPosts = Post::published()
            ->where('id', '!=', $post->id)
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('pages.stories.show', [
            'post' => $post,
            'relatedPosts' => $relatedPosts,
        ]);
    }
}
