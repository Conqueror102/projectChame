<footer id="footer" class="relative isolate overflow-hidden bg-cham-ink text-white">
    <div class="border-b border-white/10">
        <x-marketing.container class="grid gap-7 py-9 md:grid-cols-[minmax(0,0.75fr)_minmax(26rem,1.25fr)] md:items-center lg:py-10">
            <div>
                <p class="text-xs font-bold tracking-[0.12em] text-cham-primary uppercase">Stay connected</p>
                <h2 class="font-hero mt-2 max-w-md text-2xl leading-8 font-semibold sm:text-3xl">
                    Follow the work moving care forward.
                </h2>
            </div>

            <form id="footer-newsletter" action="{{ route('home') }}#footer-newsletter" method="get" class="grid gap-3 sm:grid-cols-[minmax(0,1fr)_auto]">
                <label for="footer-email" class="sr-only">Email address</label>
                <input
                    id="footer-email"
                    name="email"
                    type="email"
                    autocomplete="email"
                    placeholder="Enter your email address"
                    class="marketing-focus-ring min-h-12 w-full rounded-full border border-white/10 bg-white/8 px-5 text-sm text-white placeholder:text-white/45"
                >

                <button type="submit" class="marketing-focus-ring inline-flex min-h-12 items-center justify-center gap-2.5 rounded-full bg-cham-primary px-6 text-sm font-bold text-white transition hover:-translate-y-0.5 hover:bg-cham-primary-hover">
                    Join newsletter
                    <svg class="size-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path d="M4 10h11m-4.5-4.5L15 10l-4.5 4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </form>
        </x-marketing.container>
    </div>

    <x-marketing.container class="relative grid gap-10 py-11 sm:grid-cols-2 lg:grid-cols-[1.3fr_0.8fr_1fr_0.95fr] lg:gap-14 lg:py-14">
        <div class="max-w-sm">
            <x-marketing.brand :href="route('home')" />

            <p class="mt-5 text-sm leading-6 text-white/62">
                Structured support, advocacy, and access to care for children battling cancer and the families standing beside them.
            </p>

            <div class="mt-6 flex items-center gap-3" aria-label="Project Cham social media">
                <a href="#footer" aria-label="Project Cham on Facebook" class="marketing-focus-ring grid size-10 place-items-center rounded-full border border-white/12 bg-white/6 text-white transition hover:-translate-y-0.5 hover:border-cham-secondary hover:bg-cham-secondary">
                    <svg class="size-4.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M13.7 21v-8h2.7l.4-3.1h-3.1v-2c0-.9.3-1.5 1.6-1.5H17V3.6c-.7-.1-1.5-.2-2.3-.2-2.3 0-3.9 1.4-3.9 4.1v2.3H8.2V13h2.6v8h2.9Z"/>
                    </svg>
                </a>

                <a href="#footer" aria-label="Project Cham on Instagram" class="marketing-focus-ring grid size-10 place-items-center rounded-full border border-white/12 bg-white/6 text-white transition hover:-translate-y-0.5 hover:border-cham-primary hover:bg-cham-primary">
                    <svg class="size-4.5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <rect x="3.5" y="3.5" width="17" height="17" rx="5" stroke="currentColor" stroke-width="1.8"/>
                        <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.8"/>
                        <circle cx="17.4" cy="6.7" r="1" fill="currentColor"/>
                    </svg>
                </a>

                <a href="#footer" aria-label="Project Cham on X" class="marketing-focus-ring grid size-10 place-items-center rounded-full border border-white/12 bg-white/6 text-white transition hover:-translate-y-0.5 hover:border-white hover:bg-white hover:text-cham-ink">
                    <svg class="size-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M18.7 3H22l-7.2 8.2L23.3 21h-6.6l-5.2-6.8L5.6 21H2.3l7.7-8.8L1.8 3h6.8l4.7 6.2L18.7 3Zm-1.2 16h1.8L7.6 4.9h-2L17.5 19Z"/>
                    </svg>
                </a>
            </div>
        </div>

        <div>
            <h2 class="font-hero text-lg font-semibold">Quick links</h2>
            <span class="mt-3 block h-0.5 w-10 rounded-full bg-cham-primary" aria-hidden="true"></span>

            <ul class="mt-5 grid gap-3 text-sm text-white/68">
                <li><a class="marketing-focus-ring rounded-sm transition hover:text-white" href="{{ route('about') }}">Who we are</a></li>
                <li><a class="marketing-focus-ring rounded-sm transition hover:text-white" href="{{ route('programs') }}">Programs</a></li>
                <li><a class="marketing-focus-ring rounded-sm transition hover:text-white" href="{{ route('home') }}#impact">Impact</a></li>
                <li><a class="marketing-focus-ring rounded-sm transition hover:text-white" href="{{ route('home') }}#stories">Stories</a></li>
                <li><a class="marketing-focus-ring rounded-sm transition hover:text-white" href="{{ route('home') }}#get-involved">Get involved</a></li>
            </ul>
        </div>

        <div>
            <h2 class="font-hero text-lg font-semibold">Our work</h2>
            <span class="mt-3 block h-0.5 w-10 rounded-full bg-cham-secondary" aria-hidden="true"></span>

            <ul class="mt-5 grid gap-3 text-sm text-white/68">
                <li><a class="marketing-focus-ring rounded-sm transition hover:text-white" href="{{ route('programs') }}#awareness-education">Awareness &amp; Education</a></li>
                <li><a class="marketing-focus-ring rounded-sm transition hover:text-white" href="{{ route('programs') }}#child-support">Child Support Program</a></li>
                <li><a class="marketing-focus-ring rounded-sm transition hover:text-white" href="{{ route('programs') }}#family-support">Family Support System</a></li>
                <li><a class="marketing-focus-ring rounded-sm transition hover:text-white" href="{{ route('programs') }}#partnerships-outreach">Partnerships &amp; Outreach</a></li>
            </ul>
        </div>

        <div>
            <h2 class="font-hero text-lg font-semibold">Start a conversation</h2>
            <span class="mt-3 block h-0.5 w-10 rounded-full bg-cham-primary" aria-hidden="true"></span>

            <p class="mt-5 text-sm leading-6 text-white/68">
                Based in Nigeria and working through healthcare, family, and community partnerships.
            </p>

            <div class="mt-5 grid gap-3 text-sm font-bold">
                <a href="{{ route('home') }}#partner-with-us" class="marketing-focus-ring inline-flex items-center gap-2 rounded-sm text-cham-blue-200 transition hover:text-white">
                    <svg class="size-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path d="M3 5.5h14v9H3v-9Zm0 .5 7 5 7-5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                    </svg>
                    Partner with us
                </a>

                <a href="{{ route('home') }}#support-a-child" class="marketing-focus-ring inline-flex items-center gap-2 rounded-sm text-cham-pink-200 transition hover:text-white">
                    <svg class="size-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path d="M10 16c-2.4-2.2-6-4.8-6-8.5A3.6 3.6 0 0 1 10 4.8a3.6 3.6 0 0 1 6 2.7c0 3.7-3.6 6.3-6 8.5Z" fill="currentColor"/>
                    </svg>
                    Support a child
                </a>
            </div>
        </div>

        <span class="font-hero pointer-events-none absolute right-4 -bottom-9 text-[clamp(5rem,11vw,10rem)] leading-none font-bold tracking-[-0.06em] text-white/[0.035] select-none" aria-hidden="true">
            PROJECT CHAM
        </span>
    </x-marketing.container>

    <div class="border-t border-white/10">
        <x-marketing.container class="flex flex-col gap-2 py-5 text-xs text-white/48 sm:flex-row sm:items-center sm:justify-between">
            <p>&copy; {{ date('Y') }} Project Cham. All rights reserved.</p>
            <p>Care · Structure · Impact</p>
        </x-marketing.container>
    </div>
</footer>
