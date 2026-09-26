<?php

namespace App\Livewire\Public;

use App\Models\DonorInquiry;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Component;

class DonorInquiryForm extends Component
{
    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public string $involvement_type = 'support_child';

    public string $pledge_amount = '';

    public string $frequency = 'monthly';

    public string $message = '';

    // Anti-spam honeypot
    public string $website = '';

    public bool $submitted = false;

    public ?string $presetInvolvement = null;

    public function mount(?string $presetInvolvement = null): void
    {
        if ($presetInvolvement) {
            $this->involvement_type = $presetInvolvement;
        }
    }

    public function submit()
    {
        // 1. Honeypot check: if bot filled this hidden field, fake success
        if (! empty($this->website)) {
            $this->submitted = true;

            return;
        }

        // 2. Rate limiting by IP address: max 5 submissions per 10 minutes
        $ip = request()->ip() ?? '127.0.0.1';
        $throttleKey = 'donor-form:'.$ip;

        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            $this->addError('email', "Too many submissions from this connection. Please try again in {$seconds} seconds.");

            return;
        }

        $this->validate([
            'name' => ['required', 'string', 'min:2', 'max:150'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['nullable', 'string', 'max:30'],
            'involvement_type' => ['required', 'string', 'in:sponsor_treatment,support_family,corporate_partner,fund_research,monthly_giving,general_support,support_child,partner,general_donation,advocate'],
            'pledge_amount' => ['nullable', 'string', 'max:100'],
            'frequency' => ['required', 'string', 'in:one_time,monthly,annual,other'],
            'message' => ['nullable', 'string', 'max:1000'],
        ]);

        RateLimiter::hit($throttleKey, 600);

        DonorInquiry::create([
            'name' => strip_tags(trim($this->name)),
            'email' => strtolower(trim($this->email)),
            'phone' => strip_tags(trim($this->phone)),
            'involvement_type' => $this->involvement_type,
            'pledge_amount' => strip_tags(trim($this->pledge_amount)),
            'frequency' => $this->frequency,
            'message' => strip_tags(trim($this->message)),
            'status' => DonorInquiry::STATUS_NEW,
            'ip_address' => $ip,
        ]);

        $this->submitted = true;
    }

    public function resetForm(): void
    {
        $this->reset(['name', 'email', 'phone', 'pledge_amount', 'message', 'website', 'submitted']);
    }

    public function render()
    {
        return view('livewire.public.donor-inquiry-form');
    }
}
