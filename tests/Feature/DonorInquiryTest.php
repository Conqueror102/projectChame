<?php

use App\Livewire\Admin\Donors\Index as DonorsIndex;
use App\Livewire\Public\DonorInquiryForm;
use App\Models\DonorInquiry;
use App\Models\User;
use Livewire\Livewire;

test('visitor can submit a donor inquiry', function () {
    Livewire::test(DonorInquiryForm::class)
        ->set('name', 'Tariq Johnson')
        ->set('email', 'tariq@example.com')
        ->set('phone', '+234 801 234 5678')
        ->set('involvement_type', 'support_child')
        ->set('pledge_amount', '₦25,000')
        ->set('frequency', 'monthly')
        ->set('message', 'Happy to support children during treatment.')
        ->call('submit')
        ->assertSet('submitted', true)
        ->assertHasNoErrors();

    expect(DonorInquiry::where('email', 'tariq@example.com')->exists())->toBeTrue();
});

test('bot filling honeypot is silently trapped without database insert', function () {
    Livewire::test(DonorInquiryForm::class)
        ->set('name', 'Spam Bot')
        ->set('email', 'spambot@example.com')
        ->set('website', 'http://spam-payload.com')
        ->call('submit')
        ->assertSet('submitted', true);

    expect(DonorInquiry::where('email', 'spambot@example.com')->exists())->toBeFalse();
});

test('admin can update donor lead status and record notes', function () {
    $admin = User::factory()->create(['is_admin' => true]);
    $inquiry = DonorInquiry::factory()->create(['status' => 'new']);

    Livewire::actingAs($admin)
        ->test(DonorsIndex::class)
        ->call('viewInquiry', $inquiry->id)
        ->assertDispatched('modal-show', name: 'inquiry-detail')
        ->call('updateStatus', $inquiry->id, 'contacted')
        ->set('notes', 'Called on 3rd Sept, sent sponsorship documentation.')
        ->call('saveNotes');

    $inquiry->refresh();
    expect($inquiry->status)->toBe('contacted')
        ->and($inquiry->admin_notes)->toBe('Called on 3rd Sept, sent sponsorship documentation.')
        ->and($inquiry->contacted_at)->not->toBeNull();
});
