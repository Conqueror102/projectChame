<section class="relative isolate overflow-hidden bg-cham-ink py-20 text-white sm:py-24 lg:py-28" aria-labelledby="program-pathway-heading">
    <div class="pointer-events-none absolute -right-24 -bottom-24 size-80 rounded-full border-[3.5rem] border-cham-primary/10" aria-hidden="true"></div>

    <x-marketing.container class="relative">
        <div class="mx-auto max-w-4xl text-center">
            <p class="text-sm font-extrabold tracking-[0.12em] text-cham-pink-200 uppercase">One connected pathway</p>
            <h2 id="program-pathway-heading" class="font-hero mt-4 text-4xl leading-[1.05] font-semibold tracking-[-0.04em] sm:text-5xl lg:text-6xl">
                From awareness to care, every program moves the child <span class="font-handwriting inline-block font-normal tracking-normal text-cham-primary">forward.</span>
            </h2>
        </div>

        <ol class="relative mt-14 grid gap-4 md:grid-cols-4">
            @foreach ([
                ['01', 'Recognise', 'Communities understand early signs and when to act.'],
                ['02', 'Connect', 'Families find guidance, partners, and credible resources.'],
                ['03', 'Support', 'Children and caregivers receive structured, continuing help.'],
                ['04', 'Strengthen', 'Visible outcomes guide stronger systems and partnerships.'],
            ] as [$number, $title, $description])
                <li class="rounded-[1.5rem] border border-white/12 bg-white/6 p-6 backdrop-blur-sm">
                    <span class="grid size-11 place-items-center rounded-full bg-cham-primary font-hero text-sm font-semibold">{{ $number }}</span>
                    <h3 class="font-hero mt-6 text-2xl font-semibold">{{ $title }}</h3>
                    <p class="mt-3 text-sm leading-6 text-white/62">{{ $description }}</p>
                </li>
            @endforeach
        </ol>

        <div class="mt-12 flex flex-col items-center justify-center gap-3 sm:flex-row">
            <x-marketing.button-link :href="route('home').'#support-a-child'">Support a child</x-marketing.button-link>
            <x-marketing.button-link :href="route('home').'#get-involved'" variant="outline">Explore ways to help</x-marketing.button-link>
        </div>
    </x-marketing.container>
</section>
