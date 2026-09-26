<?php

namespace App\Livewire\Admin\Reviews;

use App\Models\Review;
use Flux\Flux;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
#[Title('Family Voices & Reviews Management')]
class Index extends Component
{
    use WithPagination;

    #[Url]
    public string $search = '';

    public ?int $reviewToDelete = null;

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function toggleActive(int $id): void
    {
        $review = Review::findOrFail($id);
        $review->update(['is_active' => ! $review->is_active]);
        Flux::toast(variant: 'success', text: $review->is_active ? 'Review activated.' : 'Review hidden.');
    }

    public function confirmDelete(int $id): void
    {
        $this->reviewToDelete = $id;
        $this->modal('delete-review')->show();
    }

    public function deleteReview(): void
    {
        if ($this->reviewToDelete) {
            $review = Review::find($this->reviewToDelete);
            $review?->delete();
            $this->reviewToDelete = null;
            $this->modal('delete-review')->close();
            Flux::toast(variant: 'danger', text: 'Review deleted.');
        }
    }

    public function render()
    {
        $reviews = Review::query()
            ->search($this->search)
            ->ordered()
            ->paginate(12);

        return view('livewire.admin.reviews.index', [
            'reviews' => $reviews,
        ]);
    }
}
