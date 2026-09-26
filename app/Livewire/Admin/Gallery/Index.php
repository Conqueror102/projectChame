<?php

namespace App\Livewire\Admin\Gallery;

use App\Models\GalleryItem;
use Flux\Flux;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
#[Title('Gallery Management')]
class Index extends Component
{
    use WithPagination;

    #[Url]
    public string $search = '';

    public ?int $itemToDelete = null;

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function toggleActive(int $id): void
    {
        $item = GalleryItem::findOrFail($id);
        $item->update(['is_active' => ! $item->is_active]);
        Flux::toast(variant: 'success', text: $item->is_active ? 'Photo activated.' : 'Photo hidden.');
    }

    public function confirmDelete(int $id): void
    {
        $this->itemToDelete = $id;
        $this->modal('delete-item')->show();
    }

    public function deleteItem(): void
    {
        if ($this->itemToDelete) {
            $item = GalleryItem::find($this->itemToDelete);
            $item?->delete();
            $this->itemToDelete = null;
            $this->modal('delete-item')->close();
            Flux::toast(variant: 'danger', text: 'Photo removed from gallery.');
        }
    }

    public function render()
    {
        $items = GalleryItem::query()
            ->when($this->search, fn ($q) => $q->where('title', 'like', "%{$this->search}%")->orWhere('eyebrow', 'like', "%{$this->search}%"))
            ->ordered()
            ->paginate(12);

        return view('livewire.admin.gallery.index', [
            'items' => $items,
        ]);
    }
}
