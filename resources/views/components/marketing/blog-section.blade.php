@php
    $dbPosts = \App\Models\Post::published()->latest('published_at')->take(6)->get();
    $featured = $dbPosts->take(2);
    $sidebar = $dbPosts->skip(2)->take(4);
@endphp

<section id="stories" class="bg-white py-18 sm:py-22 lg:py-26" aria-labelledby="stories-heading">
    <x-marketing.container class="max-w-[1180px]">
        <div class="mx-auto max-w-2xl text-center">
            <p class="inline-flex items-center gap-2 text-sm font-bold tracking-[0.08em] text-cham-stone">
                <span class="grid size-8 place-items-center rounded-full bg-cham-pink-50 text-cham-primary" aria-hidden="true">
                    <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                </span>
                Learn &amp; Understand
            </p>

            <h2 id="stories-heading" class="font-hero mt-4 text-4xl leading-[1.08] font-semibold tracking-[-0.035em] text-cham-ink sm:text-[2.7rem]">
                Read guides &amp; stories that move <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">care forward.</span>
            </h2>

            <p class="mx-auto mt-4 max-w-xl text-base leading-7 text-cham-stone">
                Evidence-based information, childhood cancer warning signs, caregiver resources, and updates from Project CHAM's work with children and families.
            </p>

            <x-marketing.button-link :href="route('stories.index')" variant="secondary" class="mt-6">
                Explore Knowledge Hub &rarr;
            </x-marketing.button-link>
        </div>

        @if ($dbPosts->isNotEmpty())
            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-[minmax(0,1fr)_minmax(0,1fr)_minmax(19rem,0.92fr)]">
                @foreach ($featured as $item)
                    <x-marketing.blog-feature-card
                        :date="$item->published_at ? $item->published_at->format('d M, Y') : ''"
                        :read-time="$item->read_time_minutes . ' min read'"
                        :title="$item->title"
                        :excerpt="$item->excerpt ?? ''"
                        :image="$item->featured_image ?? 'resources/images/marketing/project-cham-impact-awareness.png'"
                        :alt="$item->title"
                        :href="route('stories.show', $item->slug)"
                    />
                @endforeach

                @if ($sidebar->isNotEmpty())
                    <div class="grid gap-6 md:col-span-2 md:grid-cols-2 lg:col-span-1 lg:grid-cols-1 lg:content-between">
                        @foreach ($sidebar as $sideItem)
                            <x-marketing.blog-list-item
                                :date="$sideItem->published_at ? $sideItem->published_at->format('d M, Y') : ''"
                                :read-time="$sideItem->read_time_minutes . ' min read'"
                                :title="$sideItem->title"
                                :image="$sideItem->featured_image ?? 'resources/images/marketing/project-cham-about-support.png'"
                                :alt="$sideItem->title"
                                :href="route('stories.show', $sideItem->slug)"
                            />
                        @endforeach
                    </div>
                @endif
            </div>
        @else
            <!-- Curated Default Fallback -->
            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-[minmax(0,1fr)_minmax(0,1fr)_minmax(19rem,0.92fr)]">
                <x-marketing.blog-feature-card
                    date="12 Sep, 2026"
                    read-time="5 min read"
                    title="When Awareness Becomes Early Action"
                    excerpt="What families and communities can do when warning signs appear—and why informed action matters."
                    image="resources/images/marketing/project-cham-impact-awareness.png"
                    alt="A childhood-health educator guiding Black families during an awareness session"
                    :href="route('stories.index')"
                />

                <x-marketing.blog-feature-card
                    date="18 Sep, 2026"
                    read-time="4 min read"
                    title="What Families Need Between Hospital Visits"
                    excerpt="Structured guidance and community support can help families manage the difficult space between appointments."
                    image="resources/images/marketing/project-cham-impact-family-support.png"
                    alt="A Black mother and child receiving practical family support"
                    :href="route('stories.index')"
                />

                <div class="grid gap-6 md:col-span-2 md:grid-cols-2 lg:col-span-1 lg:grid-cols-1 lg:content-between">
                    <x-marketing.blog-list-item
                        date="22 Sep, 2026"
                        read-time="3 min read"
                        title="Understanding Childhood Cancer Warning Signs"
                        image="resources/images/marketing/project-cham-about-support.png"
                        alt="A Black caregiver listening during a childhood-health conversation"
                        :href="route('stories.index')"
                    />

                    <x-marketing.blog-list-item
                        date="25 Sep, 2026"
                        read-time="4 min read"
                        title="Building a Stronger Family Support System"
                        image="resources/images/marketing/project-cham-about-family-support.png"
                        alt="A Black family receiving structured support"
                        :href="route('stories.index')"
                    />

                    <x-marketing.blog-list-item
                        date="29 Sep, 2026"
                        read-time="5 min read"
                        title="How Partnerships Shorten the Path to Care"
                        image="resources/images/marketing/project-cham-get-involved-partner.png"
                        alt="Black healthcare and community partners working together"
                        :href="route('stories.index')"
                    />

                    <x-marketing.blog-list-item
                        date="03 Oct, 2026"
                        read-time="4 min read"
                        title="Turning Advocacy Into Measurable Impact"
                        image="resources/images/marketing/project-cham-get-involved-advocate.png"
                        alt="A Black advocate leading a community conversation"
                        :href="route('stories.index')"
                    />
                </div>
            </div>
        @endif
    </x-marketing.container>
</section>
