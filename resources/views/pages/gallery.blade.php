@php
    $galleryItems = \App\Models\GalleryItem::active()->ordered()->get();
@endphp

<x-marketing.layout
    title="Moments of Care — Inside Project Cham"
    description="A visual documentary of conversations, hospital sessions, and support circles turning care into progress for children battling cancer."
>
    <section class="marketing-paper relative isolate overflow-hidden py-16 sm:py-20 lg:py-24">
        <div class="pointer-events-none absolute -top-24 -right-28 size-72 rounded-full border-[2.5rem] border-cham-pink-100/70" aria-hidden="true"></div>
        <div class="pointer-events-none absolute -bottom-28 -left-24 size-72 rounded-full bg-cham-blue-100/55" aria-hidden="true"></div>

        <x-marketing.container class="relative">
            <div class="mx-auto max-w-2xl text-center mb-12 sm:mb-16">
                <p class="inline-flex items-center gap-2 rounded-full border border-cham-blue-200 bg-white/90 px-3.5 py-1.5 text-sm font-bold tracking-[0.08em] text-cham-ink shadow-xs">
                    <span class="grid size-6 place-items-center rounded-full bg-cham-primary text-white" aria-hidden="true">
                        <svg class="size-3.5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    Documentary Gallery
                </p>

                <h1 class="font-hero mt-4 text-4xl leading-[1.08] font-semibold tracking-[-0.035em] text-cham-ink sm:text-[3rem]">
                    Moments of care. <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">Stories in motion.</span>
                </h1>

                <p class="mx-auto mt-4 max-w-xl text-base leading-7 text-cham-stone">
                    A closer look at the people, conversations, and care connections turning structured support into everyday progress for children and families.
                </p>
            </div>

            @if ($galleryItems->isNotEmpty())
                <div class="grid auto-rows-[12rem] grid-cols-2 gap-4 sm:auto-rows-[14rem] sm:gap-5 lg:auto-rows-[15rem] lg:grid-cols-12 lg:gap-6">
                    @foreach ($galleryItems as $item)
                        @php
                            $spanClass = match ($item->layout_span) {
                                'featured_large' => 'col-span-2 row-span-2 lg:col-span-6',
                                'compact' => 'col-span-1 lg:col-span-3',
                                default => 'col-span-2 lg:col-span-4',
                            };
                        @endphp
                        <x-marketing.gallery-tile
                            :class="$spanClass"
                            :image="$item->image"
                            :alt="$item->alt_text ?? $item->title"
                            :eyebrow="$item->eyebrow ?? 'Inside Project Cham'"
                            :title="$item->title"
                            :number="$item->number_string"
                            :image-position="$item->image_position ?? 'center 50%'"
                        />
                    @endforeach
                </div>
            @else
                <!-- Default Curated Set -->
                <div class="grid auto-rows-[10.5rem] grid-cols-2 gap-3 sm:auto-rows-[13rem] sm:gap-4 lg:auto-rows-[12rem] lg:grid-cols-12 lg:gap-5">
                    <x-marketing.gallery-tile
                        class="col-span-2 row-span-2 lg:col-span-5"
                        image="resources/images/marketing/project-cham-get-involved-support-child.png"
                        alt="A Black child enjoying a creative support session with her family and a Project Cham volunteer"
                        eyebrow="Child & family support"
                        title="Room to learn, laugh, and still feel like a child"
                        number="01"
                        image-position="center 46%"
                    />

                    <x-marketing.gallery-tile
                        class="col-span-2 lg:col-span-4"
                        image="resources/images/marketing/project-cham-impact-awareness.png"
                        alt="A Project Cham educator leading a childhood cancer awareness conversation with families"
                        eyebrow="Awareness & advocacy"
                        title="Knowledge shared before care is urgent"
                        number="02"
                        image-position="center 45%"
                    />

                    <x-marketing.gallery-tile
                        class="col-span-1 lg:col-span-3"
                        image="resources/images/marketing/project-cham-impact-care-access.png"
                        alt="A mother and child being welcomed by a healthcare professional"
                        eyebrow="Access to care"
                        title="A clearer way into care"
                        number="03"
                        image-position="center 48%"
                    />

                    <x-marketing.gallery-tile
                        class="col-span-1 lg:col-span-3"
                        image="resources/images/marketing/project-cham-get-involved-partner.png"
                        alt="Healthcare and community partners planning coordinated support together"
                        eyebrow="Partnerships"
                        title="Care teams moving as one"
                        number="04"
                        image-position="center 44%"
                    />

                    <x-marketing.gallery-tile
                        class="col-span-2 lg:col-span-4"
                        image="resources/images/marketing/project-cham-impact-family-support.png"
                        alt="A Black child drawing with a caregiver and a family support professional"
                        eyebrow="Family support"
                        title="Support that continues between appointments"
                        number="05"
                        image-position="center 48%"
                    />
                </div>
            @endif

            <div class="mt-16 text-center">
                <x-marketing.button-link :href="route('donate')" variant="primary">
                    Support our work with children
                </x-marketing.button-link>
            </div>
        </x-marketing.container>
    </section>
</x-marketing.layout>
