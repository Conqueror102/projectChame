<?php

namespace App\Livewire\Admin\Team;

use App\Models\TeamMember;
use Flux\Flux;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
#[Title('Team Management')]
class Index extends Component
{
    use WithPagination;

    #[Url]
    public string $search = '';

    public ?int $memberToDelete = null;

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function toggleActive(int $id): void
    {
        $member = TeamMember::findOrFail($id);
        $member->update(['is_active' => ! $member->is_active]);
        Flux::toast(variant: 'success', text: $member->is_active ? 'Member activated.' : 'Member deactivated.');
    }

    public function confirmDelete(int $id): void
    {
        $this->memberToDelete = $id;
        $this->modal('delete-member')->show();
    }

    public function deleteMember(): void
    {
        if ($this->memberToDelete) {
            $member = TeamMember::find($this->memberToDelete);
            $member?->delete();
            $this->memberToDelete = null;
            $this->modal('delete-member')->close();
            Flux::toast(variant: 'danger', text: 'Team member removed.');
        }
    }

    public function render()
    {
        $members = TeamMember::query()
            ->search($this->search)
            ->ordered()
            ->paginate(12);

        return view('livewire.admin.team.index', [
            'members' => $members,
        ]);
    }
}
