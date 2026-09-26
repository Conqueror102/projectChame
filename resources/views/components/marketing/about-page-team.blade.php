@php
    $teamMembers = \App\Models\TeamMember::active()->ordered()->get();
@endphp

<section id="team" class="marketing-paper relative isolate overflow-hidden py-20 sm:py-24 lg:py-28" aria-labelledby="about-team-heading">
    <div class="pointer-events-none absolute top-16 -right-14 size-44 rounded-full border-[2rem] border-cham-gold/15" aria-hidden="true"></div>
    <div class="pointer-events-none absolute bottom-20 -left-10 size-32 rounded-full bg-cham-secondary/8" aria-hidden="true"></div>

    <x-marketing.container class="relative">
        <div class="mx-auto max-w-3xl text-center">
            <p class="inline-flex items-center gap-2 text-xs font-bold tracking-[0.14em] text-cham-secondary uppercase">
                <span class="grid size-6 place-items-center rounded-full bg-cham-blue-50 text-cham-secondary" aria-hidden="true">
                    <svg class="size-3.5" viewBox="0 0 20 20" fill="none">
                        <path d="M7.5 9.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM13.9 8a2.3 2.3 0 1 0 0-4.6A2.3 2.3 0 0 0 13.9 8ZM2.7 16.2v-1.1a4.8 4.8 0 0 1 9.6 0v1.1M11.8 11.2a3.8 3.8 0 0 1 5.5 3.4v1.6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                    </svg>
                </span>
                Our Leadership &amp; Care Champions
            </p>

            <h2 id="about-team-heading" class="font-hero mt-4 text-4xl leading-[1.08] font-semibold tracking-[-0.035em] text-cham-ink sm:text-5xl">
                The people uniting care, medicine, and <span class="font-handwriting inline-block font-normal tracking-normal text-cham-gold-dark">family advocacy.</span>
            </h2>

            <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-cham-stone">
                Behind Project Cham is a passionate multidisciplinary team of healthcare coordinators, oncological advisors, family navigators, and community champions dedicated to giving every child fighting cancer a fighting chance.
            </p>
        </div>

        <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($teamMembers as $member)
                <x-marketing.team-card
                    :name="$member->name"
                    :role="$member->role"
                    :slug="$member->slug"
                    :image-position="$member->image_position ?? 'center'"
                    :image-url="$member->image_url"
                    :linkedin-url="$member->linkedin_url"
                    :twitter-url="$member->twitter_url"
                    :email="$member->email"
                />
            @endforeach
        </div>

        <div class="mt-12 flex flex-col items-center justify-center gap-4 sm:flex-row">
            <x-marketing.button-link :href="route('team')">
                View Full Team Directory &amp; Structure &rarr;
            </x-marketing.button-link>
            <x-marketing.button-link :href="route('donate')" variant="secondary">
                Partner with Our Care Network
            </x-marketing.button-link>
        </div>
    </x-marketing.container>
</section>
