@php
    $dbTeam = \App\Models\TeamMember::active()->ordered()->take(4)->get();
@endphp

<section id="team" class="marketing-paper relative isolate overflow-hidden py-20 sm:py-24 lg:flex lg:h-[calc(100svh-8rem)] lg:min-h-[38rem] lg:max-h-[44rem] lg:items-center lg:py-14" aria-labelledby="team-heading">
    <div class="pointer-events-none absolute top-16 -right-14 size-44 rounded-full border-[2rem] border-cham-gold/15" aria-hidden="true"></div>
    <div class="pointer-events-none absolute bottom-20 -left-10 size-28 rounded-full bg-cham-secondary/8" aria-hidden="true"></div>

    <x-marketing.container class="relative max-w-[1080px]">
        <div class="mx-auto max-w-2xl text-center">
            <p class="inline-flex items-center gap-2 text-sm font-bold tracking-[0.08em] text-cham-stone">
                <span class="grid size-8 place-items-center rounded-full bg-cham-blue-50 text-cham-secondary" aria-hidden="true">
                    <svg class="size-4" viewBox="0 0 20 20" fill="none">
                        <path d="M7.5 9.2a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM13.9 8a2.3 2.3 0 1 0 0-4.6A2.3 2.3 0 0 0 13.9 8ZM2.7 16.2v-1.1a4.8 4.8 0 0 1 9.6 0v1.1M11.8 11.2a3.8 3.8 0 0 1 5.5 3.4v1.6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                    </svg>
                </span>
                Meet the team
            </p>

            <h2 id="team-heading" class="font-hero mt-3 text-4xl leading-[1.08] font-semibold tracking-[-0.035em] text-cham-ink sm:text-[2.55rem]">
                The people behind <span class="font-handwriting inline-block font-normal tracking-normal text-cham-gold-dark">every act of care.</span>
            </h2>

            <p class="mx-auto mt-3 max-w-xl text-sm leading-6 text-cham-stone sm:text-base">
                Dedicated founders, healthcare advocates, and community volunteers standing beside children battling cancer and their families in Nigeria.
            </p>
        </div>

        <div class="mt-8 grid gap-7 pr-10 sm:grid-cols-2 lg:grid-cols-4 lg:gap-8">
            @if ($dbTeam->isNotEmpty())
                @foreach ($dbTeam as $member)
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
            @else
                <x-marketing.team-card
                    name="Amara Okafor"
                    role="Child & Family Support Lead"
                    slug="amara-okafor"
                    image-position="0%"
                />

                <x-marketing.team-card
                    name="Tunde Balogun"
                    role="Healthcare Partnerships Lead"
                    slug="tunde-balogun"
                    image-position="33.333%"
                />

                <x-marketing.team-card
                    name="Zainab Musa"
                    role="Advocacy & Awareness Lead"
                    slug="zainab-musa"
                    image-position="66.667%"
                />

                <x-marketing.team-card
                    name="Chidi Nwosu"
                    role="Community Outreach Coordinator"
                    slug="chidi-nwosu"
                    image-position="100%"
                />
            @endif
        </div>

        <div class="mt-10 text-center">
            <a
                href="{{ route('team') }}"
                class="marketing-focus-ring inline-flex items-center gap-2 rounded-full border border-cham-forest/20 bg-white/90 px-6 py-3 text-sm font-bold text-cham-ink shadow-xs transition hover:border-cham-primary hover:bg-white hover:text-cham-primary"
            >
                <span>Meet our full multidisciplinary team &amp; advisors</span>
                <svg class="size-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <path d="M4 10h11m-4.5-4.5L15 10l-4.5 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </x-marketing.container>
</section>
