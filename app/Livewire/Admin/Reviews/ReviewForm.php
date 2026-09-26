<?php

namespace App\Livewire\Admin\Reviews;

use App\Models\Review;
use Flux\Flux;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Review Form')]
class ReviewForm extends Component
{
    public ?Review $review = null;

    public string $author_name = '';

    public string $role = '';

    public string $content = '';

    public string $initials = '';

    public string $meta = 'Identity protected';

    public int $rating = 5;

    public int $order = 0;

    public bool $is_active = true;

    public function mount(?Review $review = null): void
    {
        if ($review && $review->exists) {
            $this->review = $review;
            $this->author_name = $review->author_name;
            $this->role = $review->role ?? '';
            $this->content = $review->content;
            $this->initials = $review->initials ?? '';
            $this->meta = $review->meta ?? 'Identity protected';
            $this->rating = $review->rating;
            $this->order = $review->order;
            $this->is_active = $review->is_active;
        } else {
            $this->order = (Review::max('order') ?? 0) + 1;
        }
    }

    public function save()
    {
        $this->validate([
            'author_name' => ['required', 'string', 'max:255'],
            'role' => ['nullable', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:2000'],
            'initials' => ['nullable', 'string', 'max:10'],
            'meta' => ['nullable', 'string', 'max:255'],
            'rating' => ['required', 'integer', 'min:1', 'max:5'],
            'order' => ['required', 'integer', 'min:0'],
            'is_active' => ['boolean'],
        ]);

        $data = [
            'author_name' => $this->author_name,
            'role' => $this->role ?: null,
            'content' => $this->content,
            'initials' => $this->initials ?: null,
            'meta' => $this->meta ?: null,
            'rating' => $this->rating,
            'order' => $this->order,
            'is_active' => $this->is_active,
        ];

        if ($this->review && $this->review->exists) {
            $this->review->update($data);
            Flux::toast(variant: 'success', text: 'Review updated successfully.');
        } else {
            Review::create($data);
            Flux::toast(variant: 'success', text: 'Review published successfully.');
        }

        return redirect()->route('admin.reviews.index');
    }

    public function render()
    {
        return view('livewire.admin.reviews.review-form');
    }
}
