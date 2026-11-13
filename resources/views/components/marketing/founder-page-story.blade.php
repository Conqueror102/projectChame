@php
    /**
     * Modupe's story, kept word for word, grouped into six short chapters.
     * Each block is one of: lead, p, questions, answer, figure, pull, stats.
     *
     * @var array<int, array{rail: string, kicker: string, title: string, blocks: array<int, array<string, mixed>>}> $founderStoryChapters
     */
    $founderStoryChapters = [
        [
            'rail' => 'The hospital',
            'kicker' => 'Nineteen years earlier',
            'title' => 'A hospital ward I never forgot.',
            'blocks' => [
                ['type' => 'lead', 'text' => 'Sometimes, our purpose begins with an experience we never anticipated, one that stays with us long after the moment has passed.'],
                ['type' => 'p', 'text' => 'Nineteen years before I founded Project CHAM, I had an experience that would quietly shape a part of my life\'s purpose.'],
                ['type' => 'figure', 'image' => 'project-cham-founder-story-ward.jpg', 'alt' => 'An IV drip stand in a quiet hospital room', 'caption' => 'where the questions began'],
                ['type' => 'p', 'text' => 'I was in the hospital receiving care for a personal health challenge when I encountered young children battling serious illnesses. Seeing children so young in such difficult circumstances left me deeply troubled.', 'marks' => ['young children battling serious illnesses']],
                ['type' => 'questions', 'intro' => 'I remember asking myself:', 'items' => [
                    'What could possibly be wrong with these children?',
                    'Why were they so unwell at such a young age?',
                    'How could children, whose greatest concerns should be playing, learning and discovering the world, already be fighting for their lives?',
                    'And what must their parents be going through?',
                ]],
                ['type' => 'answer', 'text' => 'Those questions stayed with me long after I left the hospital.'],
            ],
        ],
        [
            'rail' => 'The questions that stayed',
            'kicker' => 'Seeking answers',
            'title' => 'The more I learned, the more questions I had.',
            'blocks' => [
                ['type' => 'p', 'text' => 'I wanted to understand what I had witnessed, so I began seeking answers. It was through this process that I learned more about childhood cancer and the difficult realities faced by children diagnosed with the disease.', 'marks' => ['childhood cancer and the difficult realities']],
                ['type' => 'questions', 'items' => [
                    'What happens when a child has a fighting chance medically, but the family cannot afford treatment?',
                    'How many children are diagnosed too late because the early warning signs are missed?',
                    'How many parents are forced to make impossible choices between meeting their family\'s basic needs and paying for their child\'s treatment?',
                    'And how many children lose their chance at life, not because help is impossible, but because it does not come in time?',
                ]],
                ['type' => 'answer', 'text' => 'These were questions I could not easily dismiss.'],
            ],
        ],
        [
            'rail' => 'A love for children',
            'kicker' => 'Who I have always been',
            'title' => 'Caring for children was always part of me.',
            'blocks' => [
                ['type' => 'p', 'text' => 'My love for children had always been a part of who I am. From an early age, I found joy in caring for, teaching and nurturing them. I also had the privilege of serving as a children\'s Bible Study Coordinator, an experience that deepened my connection with children and reinforced my desire to contribute positively to their lives.', 'marks' => ['children\'s Bible Study Coordinator']],
                ['type' => 'p', 'text' => 'But this experience was different. It challenged me to think beyond my affection for children and consider what meaningful support could look like for those facing life-threatening illnesses.'],
                ['type' => 'p', 'text' => 'Over the years, the concern that began in that hospital never left me. It gradually grew into a conviction that compassion, however genuine, is not enough if it never translates into action.', 'marks' => ['compassion, however genuine, is not enough if it never translates into action']],
            ],
        ],
        [
            'rail' => 'The first step',
            'kicker' => 'October 23, 2022',
            'title' => 'I did not need all the answers to begin.',
            'blocks' => [
                ['type' => 'p', 'text' => 'I began asking myself another set of questions.'],
                ['type' => 'questions', 'items' => [
                    'If I could make a difference in the life of even one child, why shouldn\'t I?',
                    'Must I have all the resources before I begin?',
                    'What if the little I can offer today becomes the hope a family desperately needs tomorrow?',
                ]],
                ['type' => 'p', 'text' => 'I realised that I did not need to have all the answers or solve every problem before taking the first step.', 'marks' => ['before taking the first step']],
                ['type' => 'pull', 'label' => 'The day it began', 'text' => 'On October 23, 2022, I took that step and founded Project CHAM (Child Health and Mortality).'],
                ['type' => 'p', 'text' => 'What began as a series of questions many years earlier had finally found expression in a commitment to support children and families affected by childhood cancer.'],
            ],
        ],
        [
            'rail' => '100+ children later',
            'kicker' => 'The work so far',
            'title' => 'Behind every number is a family.',
            'blocks' => [
                ['type' => 'p', 'text' => 'Through Project CHAM, we have undertaken hospital visits, orphanage outreaches, financial assistance and awareness initiatives aimed at bringing hope and practical support to children and families navigating difficult circumstances.', 'marks' => ['hospital visits, orphanage outreaches, financial assistance and awareness initiatives']],
                ['type' => 'stats', 'items' => [
                    ['value' => '100+', 'label' => 'children reached'],
                    ['value' => '70+', 'label' => 'families given financial assistance'],
                ]],
                ['type' => 'p', 'text' => 'To date, we have reached over 100 children and provided financial assistance to more than 70 families. Behind these numbers are real children, worried parents, difficult decisions and families doing everything they can to give their children a chance.'],
                ['type' => 'figure', 'image' => 'project-cham-founder-story-children.jpg', 'alt' => 'A group of smiling children gathered close together', 'caption' => 'every encounter is a reminder'],
                ['type' => 'answer', 'text' => 'Every encounter reminds me why this mission matters.'],
                ['type' => 'p', 'text' => 'I have also come to understand that while financial support can ease an immediate burden, lasting impact requires more. It requires greater awareness, earlier detection, timely access to treatment and partnerships that can help families navigate the journey with dignity and hope.', 'marks' => ['greater awareness, earlier detection, timely access to treatment and partnerships']],
                ['type' => 'p', 'text' => 'That is why my vision for Project CHAM goes beyond providing assistance. I want us to contribute to a future where more parents recognise the warning signs of childhood cancer, where children can access care earlier, and where families do not have to face the burden alone.'],
            ],
        ],
        [
            'rail' => 'What if more of us acted?',
            'kicker' => 'Looking back, looking ahead',
            'title' => 'Every child deserves a fighting chance.',
            'blocks' => [
                ['type' => 'p', 'text' => 'I know we cannot reach every child or solve every challenge. But I also believe that the enormity of a problem should never become an excuse for doing nothing.', 'marks' => ['the enormity of a problem should never become an excuse for doing nothing']],
                ['type' => 'p', 'text' => 'Sometimes, I think back to that hospital experience nearly two decades ago. I remember the children who unknowingly stirred something in my heart, and I wonder how their stories unfolded.'],
                ['type' => 'questions', 'items' => [
                    'Did they recover?',
                    'Did they get the care they needed?',
                    'What became of their dreams and the futures their parents imagined for them?',
                ]],
                ['type' => 'answer', 'text' => 'I may never know the answers.'],
                ['type' => 'p', 'text' => 'But I know that their stories helped shape a purpose that continues to guide me today.'],
                ['type' => 'p', 'text' => 'And as I look ahead, one question continues to challenge and inspire me:'],
                ['type' => 'pull', 'label' => 'The question I carry', 'text' => 'What if more of us chose to act on the needs we see, rather than waiting for someone else to make a difference?'],
                ['type' => 'p', 'text' => 'I believe that every act of compassion matters, every timely intervention counts, and every child deserves the opportunity to live, grow and fulfil their potential.', 'marks' => ['every act of compassion matters']],
                ['type' => 'p', 'text' => 'Project CHAM is my response to a question that began many years ago. It is a commitment I hope will continue to grow, reach more children and inspire others to become part of the difference.'],
                ['type' => 'lead', 'text' => 'Because some of the bravest fighters I know are children, and every child deserves a fighting chance, a future and the opportunity to thrive.', 'marks' => ['every child deserves a fighting chance']],
            ],
        ],
    ];

    $wordsPerMinute = 200;

    foreach ($founderStoryChapters as $index => $chapter) {
        $chapterWords = 0;

        foreach ($chapter['blocks'] as $block) {
            $chapterText = implode(' ', array_filter([$block['intro'] ?? null, $block['text'] ?? null, ...($block['items'] ?? [])], 'is_string'));
            $chapterWords += str_word_count($chapterText);
        }

        $founderStoryChapters[$index]['minutes'] = round($chapterWords / $wordsPerMinute, 2);
    }

    $founderStoryTotalMinutes = (int) ceil(array_sum(array_column($founderStoryChapters, 'minutes')));

    $highlightStoryText = function (string $text, array $marks = []): string {
        $html = e($text);

        foreach ($marks as $mark) {
            $html = str_replace(
                e($mark),
                '<mark class="bg-transparent bg-[linear-gradient(transparent_58%,var(--color-cham-pink-200)_58%)] font-semibold text-cham-ink">'.e($mark).'</mark>',
                $html,
            );
        }

        return $html;
    };
@endphp

<section class="relative isolate bg-[#fffdf8] pb-20 sm:pb-24 lg:py-28" aria-labelledby="founder-story-heading" data-story>
    {{-- Mobile progress bar --}}
    <div class="sticky top-0 z-30 border-b border-cham-line bg-[#fffdf8]/95 backdrop-blur lg:hidden">
        <div class="flex items-center justify-between gap-4 px-5 py-3 text-xs sm:px-10">
            <p class="truncate font-hero font-semibold text-cham-ink">
                <span class="text-cham-primary" data-story-current-number>01</span>
                <span class="mx-1 text-cham-line">/</span>
                <span data-story-current-title>{{ $founderStoryChapters[0]['rail'] }}</span>
            </p>
            <p class="shrink-0 font-semibold text-cham-stone" data-story-minutes-left="short">{{ $founderStoryTotalMinutes }} min left</p>
        </div>
        <div class="h-0.5 bg-cham-pink-100">
            <div class="h-full w-0 bg-cham-primary transition-[width] duration-150" data-story-progress></div>
        </div>
    </div>

    <x-marketing.container class="relative pt-14 lg:pt-0">
        <h2 id="founder-story-heading" class="sr-only">The story in Modupe Olusoga's words</h2>

        <div class="lg:grid lg:grid-cols-[16rem_minmax(0,1fr)] lg:gap-16 xl:grid-cols-[18rem_minmax(0,1fr)] xl:gap-24">
            {{-- Desktop chapter rail --}}
            <aside class="hidden lg:block">
                <nav class="sticky top-10" aria-label="Story chapters">
                    <p class="font-hero text-xs font-semibold tracking-[0.14em] text-cham-stone uppercase">Modupe's story · {{ $founderStoryTotalMinutes }} min read</p>

                    <ol class="mt-6 border-l-2 border-cham-pink-100">
                        @foreach ($founderStoryChapters as $chapter)
                            <li>
                                <a
                                    href="#founder-chapter-{{ $loop->iteration }}"
                                    class="group relative -ml-0.5 block border-l-2 border-transparent py-3 pl-6 font-hero text-[0.95rem] text-cham-stone/70 transition hover:text-cham-ink data-[state=active]:border-cham-primary data-[state=active]:font-semibold data-[state=active]:text-cham-primary data-[state=done]:border-cham-primary data-[state=done]:text-cham-ink"
                                    data-story-rail-link
                                    data-state="{{ $loop->first ? 'active' : 'upcoming' }}"
                                    @if ($loop->first) aria-current="step" @endif
                                >
                                    <span class="absolute top-1/2 -left-[0.45rem] size-3 -translate-y-1/2 scale-0 rounded-full bg-cham-primary shadow-[0_0_0_5px_var(--color-cham-pink-100)] transition group-data-[state=active]:scale-100" aria-hidden="true"></span>
                                    <span class="block text-[0.68rem] tracking-[0.14em] text-cham-stone/50">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                    {{ $chapter['rail'] }}
                                </a>
                            </li>
                        @endforeach
                    </ol>

                    <p class="mt-6 font-handwriting text-2xl text-cham-primary"><span data-story-minutes-left="long">{{ $founderStoryTotalMinutes }} {{ Str::plural('minute', $founderStoryTotalMinutes) }} left</span> ↓</p>
                </nav>
            </aside>

            <article class="min-w-0" data-story-article>
                @foreach ($founderStoryChapters as $chapter)
                    @php($chapterNumber = str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT))

                    <section
                        id="founder-chapter-{{ $loop->iteration }}"
                        class="relative scroll-mt-20 pb-20 sm:pb-24 lg:scroll-mt-10"
                        aria-labelledby="founder-chapter-{{ $loop->iteration }}-title"
                        data-story-chapter
                        data-title="{{ $chapter['rail'] }}"
                        data-minutes="{{ $chapter['minutes'] }}"
                    >
                        <span class="pointer-events-none absolute -top-8 right-0 -z-10 font-hero text-[8rem] leading-none text-transparent select-none [-webkit-text-stroke:2px_var(--color-cham-pink-100)] sm:-top-14 sm:text-[12rem] xl:text-[15rem]" aria-hidden="true">{{ $chapterNumber }}</span>

                        <p class="font-hero text-xs font-semibold tracking-[0.16em] text-cham-primary uppercase sm:text-sm">Chapter {{ $chapterNumber }} · {{ $chapter['kicker'] }}</p>
                        <h3 id="founder-chapter-{{ $loop->iteration }}-title" class="mt-3 mb-8 max-w-2xl font-hero text-[2.1rem] leading-[1.06] tracking-[-0.035em] text-cham-ink sm:text-5xl lg:text-[3.4rem]">{{ $chapter['title'] }}</h3>

                        <div class="max-w-[38rem] text-[1.06rem] leading-8 text-[#4a4b50] sm:text-lg sm:leading-[1.8]">
                            @foreach ($chapter['blocks'] as $block)
                                @switch($block['type'])
                                    @case('lead')
                                        <p class="mb-6 font-hero text-xl leading-9 text-cham-ink sm:text-2xl sm:leading-10">{!! $highlightStoryText($block['text'], $block['marks'] ?? []) !!}</p>
                                        @break

                                    @case('p')
                                        <p class="mb-5">{!! $highlightStoryText($block['text'], $block['marks'] ?? []) !!}</p>
                                        @break

                                    @case('questions')
                                        @isset($block['intro'])
                                            <p class="mb-5">{{ $block['intro'] }}</p>
                                        @endisset

                                        <ul class="my-9 grid gap-4 sm:-ml-6 lg:-ml-14" role="list">
                                            @foreach ($block['items'] as $question)
                                                <li @class([
                                                    'w-fit max-w-xl rounded-[1.4rem] rounded-bl-md border-[1.5px] bg-white px-5 py-4 font-handwriting text-[1.4rem] leading-snug text-cham-ink sm:px-6 sm:text-[1.65rem]',
                                                    'border-cham-pink-200 shadow-[0_14px_30px_-18px_rgb(235_55_97/0.45)]' => $loop->odd,
                                                    'border-cham-blue-200 shadow-[0_14px_30px_-18px_rgb(10_99_199/0.4)]' => $loop->even,
                                                    'sm:ml-12' => $loop->index % 3 === 1,
                                                    'sm:ml-24' => $loop->index % 3 === 2,
                                                ])>
                                                    <span @class([
                                                        'block font-hero text-[0.68rem] font-semibold tracking-[0.14em] uppercase',
                                                        'text-cham-primary' => $loop->odd,
                                                        'text-cham-blue-600' => $loop->even,
                                                    ])>Question {{ $loop->iteration }}</span>
                                                    {{ $question }}
                                                </li>
                                            @endforeach
                                        </ul>
                                        @break

                                    @case('answer')
                                        <p class="my-8 flex items-center gap-4 font-hero text-2xl leading-snug text-cham-blue-950 sm:gap-5 sm:text-3xl">
                                            <span class="h-[3px] w-10 shrink-0 bg-cham-primary sm:w-12" aria-hidden="true"></span>
                                            {{ $block['text'] }}
                                        </p>
                                        @break

                                    @case('figure')
                                        <figure class="mx-auto mb-8 w-52 rotate-2 sm:w-60 sm:float-right sm:my-1 sm:mr-0 sm:mb-6 sm:ml-8 lg:-mr-24 xl:-mr-56 xl:w-64">
                                            <img
                                                src="{{ Vite::asset('resources/images/marketing/'.$block['image']) }}"
                                                alt="{{ $block['alt'] }}"
                                                class="h-60 w-full rounded-2xl sm:h-72 object-cover shadow-[0_24px_40px_-24px_rgb(36_36_41/0.5)]"
                                                loading="lazy"
                                            >
                                            <figcaption class="mt-2 font-handwriting text-xl text-cham-stone">{{ $block['caption'] }}</figcaption>
                                        </figure>
                                        @break

                                    @case('pull')
                                        <blockquote class="relative my-10 clear-both border-l-4 border-cham-primary bg-gradient-to-r from-cham-pink-50 to-transparent py-7 pr-4 pl-6 sm:-ml-6 sm:pl-8 lg:-ml-14 lg:max-w-2xl">
                                            <p class="font-handwriting text-lg text-cham-primary">{{ $block['label'] }}</p>
                                            <p class="mt-1 font-hero text-2xl leading-snug text-cham-blue-950 sm:text-[2rem] sm:leading-tight">{{ $block['text'] }}</p>
                                        </blockquote>
                                        @break

                                    @case('stats')
                                        <dl class="my-10 grid max-w-lg grid-cols-2 gap-6 sm:-ml-6 lg:-ml-14">
                                            @foreach ($block['items'] as $stat)
                                                <div class="flex flex-col-reverse justify-end border-t-2 border-cham-primary pt-3">
                                                    <dt class="mt-2 text-sm leading-6 font-semibold text-cham-stone">{{ $stat['label'] }}</dt>
                                                    <dd class="font-hero text-5xl leading-none tracking-[-0.04em] text-cham-primary sm:text-6xl">{{ $stat['value'] }}</dd>
                                                </div>
                                            @endforeach
                                        </dl>
                                        @break
                                @endswitch
                            @endforeach
                        </div>
                    </section>
                @endforeach

                <footer class="max-w-[38rem] border-t border-cham-line pt-8">
                    <p class="font-handwriting text-3xl text-cham-primary">Modupe Olusoga</p>
                    <p class="mt-1 text-sm font-bold tracking-[0.1em] text-cham-ink uppercase">Founder, Project CHAM</p>
                </footer>

                <div class="mt-12 flex max-w-[38rem] flex-col gap-3 sm:flex-row">
                    <x-marketing.button-link :href="route('donate')">
                        Become part of the difference
                    </x-marketing.button-link>

                    <x-marketing.button-link :href="route('about')" variant="light">
                        Learn about Project CHAM
                    </x-marketing.button-link>
                </div>
            </article>
        </div>
    </x-marketing.container>
</section>
