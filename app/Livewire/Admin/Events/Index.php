<?php

namespace App\Livewire\Admin\Events;

use App\Models\Event;
use Flux\Flux;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
#[Title('Upcoming Events')]
class Index extends Component
{
    use WithPagination;

    #[Url]
    public string $search = '';

    #[Url]
    public string $filter = 'all'; // 'all', 'upcoming', 'past'

    public ?int $eventToDelete = null;

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function updatedFilter(): void
    {
        $this->resetPage();
    }

    public function toggleActive(int $id): void
    {
        $event = Event::findOrFail($id);
        $event->update(['is_active' => ! $event->is_active]);
        Flux::toast(variant: 'success', text: $event->is_active ? 'Event activated.' : 'Event deactivated.');
    }

    public function confirmDelete(int $id): void
    {
        $this->eventToDelete = $id;
        $this->modal('delete-event')->show();
    }

    public function deleteEvent(): void
    {
        if ($this->eventToDelete) {
            $event = Event::find($this->eventToDelete);
            $event?->delete();
            $this->eventToDelete = null;
            $this->modal('delete-event')->close();
            Flux::toast(variant: 'danger', text: 'Event deleted.');
        }
    }

    public function render()
    {
        $events = Event::query()
            ->search($this->search)
            ->when($this->filter === 'upcoming', fn ($q) => $q->upcoming())
            ->when($this->filter === 'past', fn ($q) => $q->past())
            ->orderBy('event_date', 'desc')
            ->paginate(10);

        return view('livewire.admin.events.index', [
            'events' => $events,
        ]);
    }
}
