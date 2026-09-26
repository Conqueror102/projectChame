<?php

namespace App\Livewire\Admin\Gallery;

use App\Models\GalleryItem;
use Flux\Flux;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('Gallery Photo Form')]
class GalleryItemForm extends Component
{
    use WithFileUploads;

    public ?GalleryItem $item = null;

    public string $title = '';

    public string $eyebrow = 'Child & family support';

    public string $caption = '';

    public string $alt_text = '';

    public $image = null;

    public ?string $existing_image = null;

    public string $image_position = 'center 50%';

    public int $order = 1;

    public string $layout_span = 'standard';

    public bool $is_active = true;

    public function mount(?GalleryItem $item = null): void
    {
        if ($item && $item->exists) {
            $this->item = $item;
            $this->title = $item->title;
            $this->eyebrow = $item->eyebrow ?? 'Inside Project Cham';
            $this->caption = $item->caption ?? '';
            $this->alt_text = $item->alt_text ?? '';
            $this->existing_image = $item->image;
            $this->image_position = $item->image_position ?? 'center 50%';
            $this->order = $item->order;
            $this->layout_span = $item->layout_span ?? 'standard';
            $this->is_active = $item->is_active;
        } else {
            $this->order = (GalleryItem::max('order') ?? 0) + 1;
        }
    }

    public function save()
    {
        $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'eyebrow' => ['nullable', 'string', 'max:100'],
            'caption' => ['nullable', 'string', 'max:500'],
            'alt_text' => ['nullable', 'string', 'max:255'],
            'image' => [$this->item ? 'nullable' : 'required', 'image', 'mimes:jpeg,png,webp,avif', 'max:5120'],
            'order' => ['required', 'integer', 'min:1'],
            'layout_span' => ['required', 'in:standard,featured_large,compact'],
            'is_active' => ['boolean'],
        ]);

        $data = [
            'title' => $this->title,
            'eyebrow' => $this->eyebrow,
            'caption' => $this->caption,
            'alt_text' => $this->alt_text,
            'image_position' => $this->image_position,
            'order' => $this->order,
            'layout_span' => $this->layout_span,
            'is_active' => $this->is_active,
        ];

        if ($this->image) {
            $ext = $this->image->guessExtension() ?: 'jpg';
            $filename = (string) Str::uuid().'.'.$ext;
            $path = $this->image->storeAs('uploads/gallery', $filename, 'public');
            $data['image'] = $path;
        }

        if ($this->item && $this->item->exists) {
            $this->item->update($data);
            Flux::toast(variant: 'success', text: 'Gallery photo updated.');
        } else {
            $this->item = GalleryItem::create($data);
            Flux::toast(variant: 'success', text: 'Photo added to gallery.');
        }

        return redirect()->route('admin.gallery.index');
    }

    public function render()
    {
        return view('livewire.admin.gallery.gallery-item-form');
    }
}
