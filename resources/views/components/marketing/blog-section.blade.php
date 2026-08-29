<section id="stories" class="bg-white py-18 sm:py-22 lg:py-26" aria-labelledby="stories-heading">
    <x-marketing.container class="max-w-[1180px]">
        <div class="mx-auto max-w-2xl text-center">
            <p class="inline-flex items-center gap-2 text-sm font-bold tracking-[0.08em] text-cham-stone">
                <span class="grid size-8 place-items-center rounded-full bg-cham-blue-50 text-cham-secondary" aria-hidden="true">
                    <svg class="size-4" viewBox="0 0 20 20" fill="none">
                        <path d="M5 4.5h8.5A1.5 1.5 0 0 1 15 6v10H6.5A1.5 1.5 0 0 1 5 14.5v-10Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/>
                        <path d="M8 8h4M8 11h4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                    </svg>
                </span>
                Stories &amp; guidance
            </p>

            <h2 id="stories-heading" class="font-hero mt-4 text-4xl leading-[1.08] font-semibold tracking-[-0.035em] text-cham-ink sm:text-[2.7rem]">
                Read stories that move <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">care forward.</span>
            </h2>

            <p class="mx-auto mt-4 max-w-xl text-base leading-7 text-cham-stone">
                Practical guidance, family perspectives, and updates from Project Cham’s work around childhood cancer.
            </p>

            <x-marketing.button-link href="#stories" variant="secondary" class="mt-6">
                Browse all stories
            </x-marketing.button-link>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-[minmax(0,1fr)_minmax(0,1fr)_minmax(19rem,0.92fr)]">
            <x-marketing.blog-feature-card
                date="12 Sep, 2026"
                read-time="5 min read"
                title="When Awareness Becomes Early Action"
                excerpt="What families and communities can do when warning signs appear—and why informed action matters."
                image="resources/images/marketing/project-cham-impact-awareness.png"
                alt="A childhood-health educator guiding Black families during an awareness session"
                href="#stories"
            />

            <x-marketing.blog-feature-card
                date="18 Sep, 2026"
                read-time="4 min read"
                title="What Families Need Between Hospital Visits"
                excerpt="Structured guidance and community support can help families manage the difficult space between appointments."
                image="resources/images/marketing/project-cham-impact-family-support.png"
                alt="A Black mother and child receiving practical family support"
                href="#stories"
            />

            <div class="grid gap-6 md:col-span-2 md:grid-cols-2 lg:col-span-1 lg:grid-cols-1 lg:content-between">
                <x-marketing.blog-list-item
                    date="22 Sep, 2026"
                    read-time="3 min read"
                    title="Understanding Childhood Cancer Warning Signs"
                    image="resources/images/marketing/project-cham-about-support.png"
                    alt="A Black caregiver listening during a childhood-health conversation"
                    href="#stories"
                />

                <x-marketing.blog-list-item
                    date="25 Sep, 2026"
                    read-time="4 min read"
                    title="Building a Stronger Family Support System"
                    image="resources/images/marketing/project-cham-about-family-support.png"
                    alt="A Black family receiving structured support"
                    href="#stories"
                />

                <x-marketing.blog-list-item
                    date="29 Sep, 2026"
                    read-time="5 min read"
                    title="How Partnerships Shorten the Path to Care"
                    image="resources/images/marketing/project-cham-get-involved-partner.png"
                    alt="Black healthcare and community partners working together"
                    href="#stories"
                />

                <x-marketing.blog-list-item
                    date="03 Oct, 2026"
                    read-time="4 min read"
                    title="Turning Advocacy Into Measurable Impact"
                    image="resources/images/marketing/project-cham-get-involved-advocate.png"
                    alt="A Black advocate leading a community conversation"
                    href="#stories"
                />
            </div>
        </div>
    </x-marketing.container>
</section>
