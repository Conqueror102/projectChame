<?php

namespace App\Livewire\Admin\Team;

use App\Models\TeamMember;
use Flux\Flux;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('Team Member Form')]
class TeamMemberForm extends Component
{
    use WithFileUploads;

    public ?TeamMember $member = null;

    public string $name = '';

    public string $role = '';

    public string $specialty = '';

    public string $email = '';

    public string $linkedin_url = '';

    public string $twitter_url = '';

    public string $bio = '';

    public string $quote = '';

    public $image = null;

    public ?string $existing_image = null;

    public string $image_position = 'center';

    public int $order = 0;

    public bool $is_active = true;

    public function mount(?TeamMember $member = null): void
    {
        if ($member && $member->exists) {
            $this->member = $member;
            $this->name = $member->name;
            $this->role = $member->role;
            $this->specialty = $member->specialty ?? '';
            $this->email = $member->email ?? '';
            $this->linkedin_url = $member->linkedin_url ?? '';
            $this->twitter_url = $member->twitter_url ?? '';
            $this->bio = $member->bio ?? '';
            $this->quote = $member->quote ?? '';
            $this->existing_image = $member->image;
            $this->image_position = $member->image_position ?? 'center';
            $this->order = $member->order;
            $this->is_active = $member->is_active;
        } else {
            $this->order = (TeamMember::max('order') ?? 0) + 1;
        }
    }

    public function save()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'specialty' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'linkedin_url' => ['nullable', 'url', 'max:255'],
            'twitter_url' => ['nullable', 'url', 'max:255'],
            'bio' => ['nullable', 'string', 'max:2000'],
            'quote' => ['nullable', 'string', 'max:1000'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,webp,avif', 'max:5120'],
            'image_position' => ['nullable', 'string', 'max:50'],
            'order' => ['required', 'integer', 'min:0'],
            'is_active' => ['boolean'],
        ]);

        $data = [
            'name' => $this->name,
            'role' => $this->role,
            'specialty' => $this->specialty ?: null,
            'email' => $this->email ?: null,
            'linkedin_url' => $this->linkedin_url ?: null,
            'twitter_url' => $this->twitter_url ?: null,
            'bio' => $this->bio ?: null,
            'quote' => $this->quote ?: null,
            'image_position' => $this->image_position,
            'order' => $this->order,
            'is_active' => $this->is_active,
        ];

        if ($this->image) {
            $ext = $this->image->guessExtension() ?: 'jpg';
            $filename = (string) Str::uuid().'.'.$ext;
            $path = $this->image->storeAs('uploads/team', $filename, 'public');
            $data['image'] = $path;
        }

        if ($this->member && $this->member->exists) {
            $this->member->update($data);
            Flux::toast(variant: 'success', text: 'Team member updated.');
        } else {
            $this->member = TeamMember::create($data);
            Flux::toast(variant: 'success', text: 'Team member added.');
        }

        return redirect()->route('admin.team.index');
    }

    public function render()
    {
        return view('livewire.admin.team.team-member-form');
    }
}
