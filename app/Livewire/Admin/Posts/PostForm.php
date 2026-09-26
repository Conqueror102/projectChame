<?php

namespace App\Livewire\Admin\Posts;

use App\Models\Post;
use App\Services\ContentSanitizer;
use Flux\Flux;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('Story Editor')]
class PostForm extends Component
{
    use WithFileUploads;

    public ?Post $post = null;

    public string $title = '';

    public string $slug = '';

    public string $excerpt = '';

    public string $content = '';

    public string $status = 'draft';

    public ?string $published_at = null;

    public int $read_time_minutes = 5;

    public $featured_image = null;

    public ?string $existing_featured_image = null;

    public function mount(?Post $post = null): void
    {
        if ($post && $post->exists) {
            $this->post = $post;
            $this->title = $post->title;
            $this->slug = $post->slug;
            $this->excerpt = $post->excerpt ?? '';
            $this->content = $post->content;
            $this->status = $post->status;
            $this->published_at = $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : null;
            $this->read_time_minutes = $post->read_time_minutes;
            $this->existing_featured_image = $post->featured_image;
        } else {
            $this->published_at = now()->format('Y-m-d\TH:i');
        }
    }

    public function updatedTitle(): void
    {
        if (! $this->post || ! $this->post->exists) {
            $this->slug = Str::slug($this->title);
        }
    }

    public function save()
    {
        $postId = $this->post?->id;

        $validated = $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:posts,slug'.($postId ? ','.$postId : '')],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'status' => ['required', 'in:draft,published'],
            'published_at' => ['nullable', 'date'],
            'read_time_minutes' => ['required', 'integer', 'min:1', 'max:120'],
            'featured_image' => ['nullable', 'image', 'mimes:jpeg,png,webp,avif', 'max:5120'],
        ]);

        // Sanitize content against XSS
        $sanitizedContent = ContentSanitizer::clean($this->content);

        // Auto calculate reading time if not explicitly tweaked
        $wordCount = str_word_count(strip_tags($sanitizedContent));
        $calculatedReadTime = max(1, (int) ceil($wordCount / 200));

        $data = [
            'user_id' => Auth::id() ?? 1,
            'title' => $this->title,
            'slug' => Str::slug($this->slug),
            'excerpt' => $this->excerpt,
            'content' => $sanitizedContent,
            'status' => $this->status,
            'published_at' => $this->published_at ? $this->published_at : ($this->status === 'published' ? now() : null),
            'read_time_minutes' => $this->read_time_minutes ?: $calculatedReadTime,
        ];

        // Handle image upload
        if ($this->featured_image) {
            $ext = $this->featured_image->guessExtension() ?: 'jpg';
            $filename = (string) Str::uuid().'.'.$ext;
            $path = $this->featured_image->storeAs('uploads/blog', $filename, 'public');
            $data['featured_image'] = $path;
        }

        if ($this->post && $this->post->exists) {
            $this->post->update($data);
            Flux::toast(variant: 'success', text: 'Story updated successfully.');
        } else {
            $this->post = Post::create($data);
            Flux::toast(variant: 'success', text: 'Story created successfully.');
        }

        return redirect()->route('admin.posts.index');
    }

    public function render()
    {
        return view('livewire.admin.posts.post-form');
    }
}
