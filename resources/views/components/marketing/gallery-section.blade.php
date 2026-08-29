<section id="gallery" class="marketing-paper relative isolate overflow-hidden py-20 sm:py-24 lg:py-28" aria-labelledby="gallery-heading">
    <div class="pointer-events-none absolute -top-24 -right-28 size-72 rounded-full border-[2.5rem] border-cham-pink-100/70" aria-hidden="true"></div>
    <div class="pointer-events-none absolute -bottom-28 -left-24 size-72 rounded-full bg-cham-blue-100/55" aria-hidden="true"></div>
    <div class="pointer-events-none absolute top-24 left-[8%] size-2 rounded-full bg-cham-primary" aria-hidden="true"></div>

    <x-marketing.container class="relative">
        <div class="grid items-end gap-7 lg:grid-cols-[minmax(0,1fr)_minmax(18rem,0.55fr)] lg:gap-14">
            <div class="max-w-3xl">
                <p class="inline-flex items-center gap-2 rounded-full border border-cham-blue-200 bg-white/90 px-3 py-2 text-sm font-bold tracking-[0.08em] text-cham-ink shadow-sm backdrop-blur-sm">
                    <span class="grid size-7 place-items-center rounded-full bg-cham-primary text-white" aria-hidden="true">
                        <svg class="size-4" viewBox="0 0 20 20" fill="none">
                            <rect x="3.5" y="4" width="13" height="12" rx="2.5" stroke="currentColor" stroke-width="1.6"/>
                            <circle cx="10" cy="9.5" r="2.6" stroke="currentColor" stroke-width="1.6"/>
                            <path d="m13.2 6.8.01-.01" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
                        </svg>
                    </span>
                    Inside Project Cham
                </p>

                <h2 id="gallery-heading" class="font-hero mt-5 text-4xl leading-[1.04] font-semibold tracking-[-0.04em] text-cham-ink sm:text-5xl lg:text-[3.4rem]">
                    Moments of care. <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">Stories in motion.</span>
                </h2>
            </div>

            <div class="lg:border-l lg:border-cham-line lg:pl-8">
                <p class="text-base leading-7 text-cham-stone">
                    A closer look at the people, conversations, and care connections turning structured support into everyday progress for children and families.
                </p>

                <a class="marketing-focus-ring mt-5 inline-flex items-center gap-2 text-sm font-extrabold text-cham-secondary underline decoration-cham-blue-300 underline-offset-4 transition hover:text-cham-primary" href="#programs">
                    Explore how support works
                    <svg class="size-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path d="M4 10h11m-4.5-4.5L15 10l-4.5 4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="mt-10 grid auto-rows-[10.5rem] grid-cols-2 gap-3 sm:mt-12 sm:auto-rows-[13rem] sm:gap-4 lg:auto-rows-[12rem] lg:grid-cols-12 lg:gap-5">
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
    </x-marketing.container>
</section>
