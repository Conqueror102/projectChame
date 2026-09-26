<x-marketing.layout
    :title="$post->title . ' — Project Cham'"
    :description="$post->excerpt ?? 'Read this story on Project Cham.'"
>
    <article class="marketing-paper relative isolate overflow-hidden py-16 sm:py-20 lg:py-24">
        <x-marketing.container class="relative max-w-[860px]">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs font-semibold text-cham-stone mb-6">
                <a href="{{ route('home') }}" class="hover:text-cham-ink">Home</a>
                <span>/</span>
                <a href="{{ route('stories.index') }}" class="hover:text-cham-ink">Learn &amp; Understand</a>
                <span>/</span>
                <span class="text-cham-primary truncate max-w-xs">{{ $post->title }}</span>
            </nav>

            <!-- Article Header -->
            <header class="space-y-4 text-center sm:text-left">
                <div class="flex flex-wrap items-center justify-center sm:justify-start gap-3 text-sm font-medium text-cham-stone">
                    <span class="inline-flex items-center gap-1.5 text-cham-primary font-bold">
                        <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                        </svg>
                        {{ $post->read_time_minutes }} min read
                    </span>
                    <span>&bull;</span>
                    <span>{{ $post->published_at ? $post->published_at->format('F d, Y') : '' }}</span>
                </div>

                <h1 class="font-hero text-3xl sm:text-4xl lg:text-5xl font-bold leading-[1.12] text-cham-ink tracking-tight">
                    {{ $post->title }}
                </h1>

                @if ($post->excerpt)
                    <p class="text-lg sm:text-xl text-cham-stone leading-relaxed">
                        {{ $post->excerpt }}
                    </p>
                @endif
            </header>

            <!-- Cover Image -->
            @if ($post->featured_image)
                <div class="my-8 sm:my-10 rounded-3xl overflow-hidden border border-cham-line/70 shadow-md">
                    <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}" class="w-full max-h-[500px] object-cover" />
                </div>
            @endif

            <!-- TipTap HTML Body Content (Sanitized) -->
            <div class="prose prose-lg prose-zinc max-w-none prose-headings:font-hero prose-headings:text-cham-ink prose-a:text-cham-secondary hover:prose-a:text-cham-primary prose-blockquote:border-l-4 prose-blockquote:border-cham-primary prose-blockquote:text-cham-ink prose-img:rounded-2xl prose-img:shadow-md">
                {!! \App\Services\ContentSanitizer::clean($post->content) !!}
            </div>

            <!-- Medical & Educational Disclaimer Banner -->
            <div class="mt-12 rounded-2xl border border-cham-blue-200 bg-cham-blue-50/70 p-5 sm:p-6 text-sm text-cham-stone">
                <div class="flex items-start gap-3.5">
                    <span class="grid size-7 shrink-0 place-items-center rounded-full bg-cham-secondary text-white">
                        <svg class="size-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    <div class="space-y-1">
                        <p class="font-bold text-cham-ink">Medical &amp; Educational Notice</p>
                        <p class="text-xs sm:text-sm leading-relaxed">
                            This article is provided for educational and community awareness purposes only and is not a substitute for professional medical advice, diagnosis, or treatment. If you are concerned about a child's health or notice warning signs, please consult a qualified healthcare professional or paediatric oncologist immediately.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Share & Closing Support Banner -->
            <div class="mt-16 rounded-3xl bg-cham-pink-50/70 p-8 sm:p-10 border border-cham-pink-200 text-center space-y-4">
                <h3 class="font-hero text-2xl font-bold text-cham-ink">
                    Help us write more stories of hope.
                </h3>
                <p class="max-w-md mx-auto text-sm sm:text-base text-cham-stone">
                    Your contribution directly helps children with cancer access hospital treatment, medications, and caregiver support.
                </p>
                <div class="pt-2">
                    <x-marketing.button-link :href="route('donate')" variant="primary">
                        Support a Child Today
                    </x-marketing.button-link>
                </div>
            </div>

            <!-- Related Stories -->
            @if ($relatedPosts->isNotEmpty())
                <div class="mt-20 border-t border-cham-line pt-12">
                    <h3 class="font-hero text-2xl font-bold text-cham-ink mb-6">More Stories</h3>
                    <div class="grid gap-6 sm:grid-cols-3">
                        @foreach ($relatedPosts as $related)
                            <a href="{{ route('stories.show', $related->slug) }}" class="group block rounded-2xl bg-white p-4 border border-cham-line/70 hover:shadow-md transition">
                                @if ($related->featured_image)
                                    <div class="aspect-16/10 rounded-xl overflow-hidden bg-zinc-100 mb-3">
                                        <img src="{{ $related->featured_image_url }}" alt="" class="size-full object-cover group-hover:scale-105 transition duration-300" />
                                    </div>
                                @endif
                                <p class="text-xs text-cham-stone">{{ $related->published_at ? $related->published_at->format('M d, Y') : '' }}</p>
                                <h4 class="font-hero text-sm font-bold text-cham-ink group-hover:text-cham-primary transition mt-1 line-clamp-2">
                                    {{ $related->title }}
                                </h4>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </x-marketing.container>
    </article>
</x-marketing.layout>
