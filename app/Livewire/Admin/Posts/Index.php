<?php

namespace App\Livewire\Admin\Posts;

use App\Models\Post;
use Flux\Flux;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
#[Title('Stories & Blog')]
class Index extends Component
{
    use WithPagination;

    #[Url]
    public string $search = '';

    #[Url]
    public string $status = 'all';

    public ?int $postToDelete = null;

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function updatedStatus(): void
    {
        $this->resetPage();
    }

    public function toggleStatus(int $id): void
    {
        $post = Post::findOrFail($id);

        if ($post->status === 'published') {
            $post->update(['status' => 'draft']);
            Flux::toast(variant: 'warning', text: 'Story moved to drafts.');
        } else {
            $post->update([
                'status' => 'published',
                'published_at' => $post->published_at ?? now(),
            ]);
            Flux::toast(variant: 'success', text: 'Story published.');
        }
    }

    public function confirmDelete(int $id): void
    {
        $this->postToDelete = $id;
        $this->modal('delete-post')->show();
    }

    public function deletePost(): void
    {
        if ($this->postToDelete) {
            $post = Post::find($this->postToDelete);
            $post?->delete();
            $this->postToDelete = null;
            $this->modal('delete-post')->close();
            Flux::toast(variant: 'danger', text: 'Story deleted.');
        }
    }

    public function render()
    {
        $posts = Post::query()
            ->search($this->search)
            ->when($this->status !== 'all', fn ($q) => $q->where('status', $this->status))
            ->latest()
            ->paginate(10);

        return view('livewire.admin.posts.index', [
            'posts' => $posts,
        ]);
    }
}
