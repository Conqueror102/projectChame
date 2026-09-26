<?php

namespace App\Livewire\Admin\Donors;

use App\Models\DonorInquiry;
use Flux\Flux;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
#[Title('Donor Inquiries & Outreach CRM')]
class Index extends Component
{
    use WithPagination;

    #[Url]
    public string $search = '';

    #[Url]
    public string $status = 'all';

    #[Url]
    public string $involvement = 'all';

    public ?DonorInquiry $selectedInquiry = null;

    public string $notes = '';

    public ?int $inquiryToDelete = null;

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function updatedStatus(): void
    {
        $this->resetPage();
    }

    public function updatedInvolvement(): void
    {
        $this->resetPage();
    }

    public function viewInquiry(int $id): void
    {
        $this->selectedInquiry = DonorInquiry::findOrFail($id);
        $this->notes = $this->selectedInquiry->admin_notes ?? '';
        $this->modal('inquiry-detail')->show();
    }

    public function updateStatus(int $id, string $newStatus): void
    {
        $inquiry = DonorInquiry::findOrFail($id);
        $data = ['status' => $newStatus];

        if ($newStatus === DonorInquiry::STATUS_CONTACTED && ! $inquiry->contacted_at) {
            $data['contacted_at'] = now();
        }

        $inquiry->update($data);

        if ($this->selectedInquiry && $this->selectedInquiry->id === $id) {
            $this->selectedInquiry->refresh();
        }

        Flux::toast(variant: 'success', text: "Status updated to {$newStatus}.");
    }

    public function saveNotes(): void
    {
        if (! $this->selectedInquiry) {
            return;
        }

        $this->selectedInquiry->update([
            'admin_notes' => $this->notes,
        ]);

        Flux::toast(variant: 'success', text: 'Outreach notes saved.');
    }

    public function confirmDelete(int $id): void
    {
        $this->inquiryToDelete = $id;
        $this->modal('delete-inquiry')->show();
    }

    public function deleteInquiry(): void
    {
        if ($this->inquiryToDelete) {
            $inquiry = DonorInquiry::find($this->inquiryToDelete);
            $inquiry?->delete();
            $this->inquiryToDelete = null;
            if ($this->selectedInquiry && $this->selectedInquiry->id === $this->inquiryToDelete) {
                $this->selectedInquiry = null;
            }
            $this->modal('delete-inquiry')->close();
            Flux::toast(variant: 'danger', text: 'Inquiry removed.');
        }
    }

    public function render()
    {
        $inquiries = DonorInquiry::query()
            ->search($this->search)
            ->when($this->status !== 'all', fn ($q) => $q->where('status', $this->status))
            ->when($this->involvement !== 'all', fn ($q) => $q->where('involvement_type', $this->involvement))
            ->latest()
            ->paginate(12);

        $counts = [
            'total' => DonorInquiry::count(),
            'new' => DonorInquiry::where('status', DonorInquiry::STATUS_NEW)->count(),
            'in_progress' => DonorInquiry::whereIn('status', [DonorInquiry::STATUS_CONTACTED, DonorInquiry::STATUS_IN_PROGRESS])->count(),
            'pledged' => DonorInquiry::where('status', DonorInquiry::STATUS_PLEDGED)->count(),
        ];

        return view('livewire.admin.donors.index', [
            'inquiries' => $inquiries,
            'counts' => $counts,
        ]);
    }
}
