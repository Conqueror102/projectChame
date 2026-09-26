<?php

namespace App\Livewire\Admin\Events;

use App\Models\Event;
use Flux\Flux;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('Event Form')]
class EventForm extends Component
{
    use WithFileUploads;

    public ?Event $event = null;

    public string $title = '';

    public string $slug = '';

    public string $description = '';

    public string $event_date = '';

    public string $location = '';

    public string $category = 'Community Event';

    public $image = null;

    public ?string $existing_image = null;

    public string $image_position = 'center';

    public string $action_url = '';

    public string $action_label = 'View event';

    public bool $is_active = true;

    public function mount(?Event $event = null): void
    {
        if ($event && $event->exists) {
            $this->event = $event;
            $this->title = $event->title;
            $this->slug = $event->slug;
            $this->description = $event->description ?? '';
            $this->event_date = $event->event_date->format('Y-m-d\TH:i');
            $this->location = $event->location;
            $this->category = $event->category ?? 'Community Event';
            $this->existing_image = $event->image;
            $this->image_position = $event->image_position ?? 'center';
            $this->action_url = $event->action_url ?? '';
            $this->action_label = $event->action_label ?? 'View event';
            $this->is_active = $event->is_active;
        } else {
            $this->event_date = now()->addDays(7)->setTime(10, 0)->format('Y-m-d\TH:i');
        }
    }

    public function updatedTitle(): void
    {
        if (! $this->event || ! $this->event->exists) {
            $this->slug = Str::slug($this->title);
        }
    }

    public function save()
    {
        $eventId = $this->event?->id;

        $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:events,slug'.($eventId ? ','.$eventId : '')],
            'description' => ['nullable', 'string'],
            'event_date' => ['required', 'date'],
            'location' => ['required', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:100'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,webp,avif', 'max:5120'],
            'image_position' => ['nullable', 'string', 'max:50'],
            'action_url' => ['nullable', 'string', 'max:255'],
            'action_label' => ['required', 'string', 'max:100'],
            'is_active' => ['boolean'],
        ]);

        $data = [
            'title' => $this->title,
            'slug' => Str::slug($this->slug),
            'description' => $this->description,
            'event_date' => $this->event_date,
            'location' => $this->location,
            'category' => $this->category,
            'image_position' => $this->image_position,
            'action_url' => $this->action_url,
            'action_label' => $this->action_label,
            'is_active' => $this->is_active,
        ];

        if ($this->image) {
            $ext = $this->image->guessExtension() ?: 'jpg';
            $filename = (string) Str::uuid().'.'.$ext;
            $path = $this->image->storeAs('uploads/events', $filename, 'public');
            $data['image'] = $path;
        }

        if ($this->event && $this->event->exists) {
            $this->event->update($data);
            Flux::toast(variant: 'success', text: 'Event updated.');
        } else {
            $this->event = Event::create($data);
            Flux::toast(variant: 'success', text: 'Event posted.');
        }

        return redirect()->route('admin.events.index');
    }

    public function render()
    {
        return view('livewire.admin.events.event-form');
    }
}
