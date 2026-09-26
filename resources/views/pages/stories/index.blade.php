<x-marketing.layout
    title="Learn & Understand — Childhood Cancer Knowledge Hub | Project CHAM"
    description="Evidence-based information, childhood cancer warning signs, caregiver resources, and authentic stories from children and families across Nigeria."
>
    <section class="marketing-paper relative isolate overflow-hidden py-16 sm:py-20 lg:py-24">
        <div class="pointer-events-none absolute -top-24 -left-24 size-72 rounded-full border-[3rem] border-cham-pink-100/60" aria-hidden="true"></div>
        <div class="pointer-events-none absolute bottom-12 -right-16 size-80 rounded-full bg-cham-blue-100/40" aria-hidden="true"></div>

        <x-marketing.container class="relative max-w-[1180px]">
            <div class="mx-auto max-w-3xl text-center mb-10 sm:mb-14">
                <p class="inline-flex items-center gap-2 text-sm font-bold tracking-[0.08em] text-cham-stone">
                    <span class="grid size-8 place-items-center rounded-full bg-cham-pink-50 text-cham-primary" aria-hidden="true">
                        <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    Childhood Cancer Knowledge Hub
                </p>

                <h1 class="font-hero mt-4 text-4xl leading-[1.08] font-semibold tracking-[-0.035em] text-cham-ink sm:text-[3rem]">
                    Learn, understand, and <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">take timely action.</span>
                </h1>

                <p class="mx-auto mt-4 max-w-xl text-base leading-7 text-cham-stone">
                    Evidence-based guides, early warning signs, caregiver resources, and updates from Project CHAM's work with children and families in Nigeria.
                </p>

                <!-- Search bar -->
                <form action="{{ route('stories.index') }}" method="GET" class="mt-8 mx-auto max-w-md flex items-center gap-2">
                    <input
                        type="text"
                        name="search"
                        value="{{ $search ?? '' }}"
                        placeholder="Search symptoms, warning signs, guides..."
                        class="w-full rounded-full border border-cham-line bg-white px-5 py-3 text-sm shadow-xs focus:border-cham-primary focus:ring-2 focus:ring-cham-primary/20 outline-hidden transition"
                    />
                    <button
                        type="submit"
                        class="rounded-full bg-cham-primary hover:bg-cham-primary-hover px-6 py-3 text-sm font-bold text-white transition cursor-pointer"
                    >
                        Search
                    </button>
                </form>

                <!-- Category Filters Row -->
                <div class="mt-8 flex flex-wrap items-center justify-center gap-2">
                    @php
                        $categories = [
                            '' => 'All Topics',
                            'Understanding Childhood Cancer' => 'Understanding Childhood Cancer',
                            'Warning Signs' => 'Signs & Symptoms',
                            'Parents' => 'For Parents & Caregivers',
                            'Care' => 'Treatment & Care',
                            'Family' => 'Family Stories',
                            'Advocacy' => 'Research & Insights',
                            'Outreach' => 'Project CHAM News',
                        ];
                    @endphp

                    @foreach ($categories as $catKey => $catLabel)
                        @php
                            $isActive = ($selectedCategory === $catKey) || ($catKey === '' && empty($selectedCategory));
                        @endphp
                        <a
                            href="{{ $catKey === '' ? route('stories.index') : route('stories.index', ['category' => $catKey]) }}"
                            class="rounded-full px-4 py-1.5 text-xs font-bold transition {{ $isActive ? 'bg-cham-ink text-white shadow-xs' : 'bg-white border border-cham-line/80 text-cham-stone hover:border-cham-primary hover:text-cham-primary' }}"
                        >
                            {{ $catLabel }}
                        </a>
                    @endforeach
                </div>
            </div>

            @if ($posts->isNotEmpty())
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($posts as $post)
                        <article class="flex flex-col rounded-3xl bg-white border border-cham-line/70 overflow-hidden shadow-sm hover:shadow-md transition">
                            <a href="{{ route('stories.show', $post->slug) }}" class="block aspect-16/10 w-full overflow-hidden bg-zinc-100">
                                @if ($post->featured_image)
                                    <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}" class="size-full object-cover hover:scale-105 transition duration-300" />
                                @else
                                    <div class="grid size-full place-items-center bg-cham-blue-50 text-cham-secondary">
                                        <svg class="size-12" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" />
                                        </svg>
                                    </div>
                                @endif
                            </a>

                            <div class="flex flex-1 flex-col p-6">
                                <div class="flex items-center gap-3 text-xs text-cham-stone font-medium">
                                    <span>{{ $post->published_at ? $post->published_at->format('d M, Y') : '' }}</span>
                                    <span>&bull;</span>
                                    <span>{{ $post->read_time_minutes }} min read</span>
                                </div>

                                <h2 class="font-hero mt-3 text-xl font-bold text-cham-ink hover:text-cham-primary transition">
                                    <a href="{{ route('stories.show', $post->slug) }}">
                                        {{ $post->title }}
                                    </a>
                                </h2>

                                @if ($post->excerpt)
                                    <p class="mt-2 text-sm text-cham-stone line-clamp-3 leading-relaxed">
                                        {{ $post->excerpt }}
                                    </p>
                                @endif

                                <div class="mt-auto pt-5">
                                    <a href="{{ route('stories.show', $post->slug) }}" class="inline-flex items-center gap-1.5 text-sm font-bold text-cham-secondary hover:text-cham-primary transition">
                                        Read full story
                                        <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="mt-12">
                    {{ $posts->links() }}
                </div>
            @else
                <div class="rounded-3xl bg-white p-12 text-center border border-cham-line/70">
                    <p class="text-base text-cham-stone">No stories found matching your criteria.</p>
                    <a href="{{ route('stories.index') }}" class="mt-4 inline-block text-sm font-bold text-cham-primary underline">
                        View all stories
                    </a>
                </div>
            @endif
        </x-marketing.container>
    </section>
</x-marketing.layout>
