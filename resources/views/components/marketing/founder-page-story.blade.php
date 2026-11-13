@php
    $founderStoryParagraphs = [
        'Sometimes, our purpose begins with an experience we never anticipated, one that stays with us long after the moment has passed.',
        'Nineteen years before I founded Project CHAM, I had an experience that would quietly shape a part of my life\'s purpose.',
        'I was in the hospital receiving care for a personal health challenge when I encountered young children battling serious illnesses. Seeing children so young in such difficult circumstances left me deeply troubled.',
        'I remember asking myself: What could possibly be wrong with these children? Why were they so unwell at such a young age? How could children, whose greatest concerns should be playing, learning and discovering the world, already be fighting for their lives? And what must their parents be going through?',
        'Those questions stayed with me long after I left the hospital.',
        'I wanted to understand what I had witnessed, so I began seeking answers. It was through this process that I learned more about childhood cancer and the difficult realities faced by children diagnosed with the disease.',
        'The more I learned, the more questions I had.',
        'What happens when a child has a fighting chance medically, but the family cannot afford treatment? How many children are diagnosed too late because the early warning signs are missed? How many parents are forced to make impossible choices between meeting their family\'s basic needs and paying for their child\'s treatment? And how many children lose their chance at life, not because help is impossible, but because it does not come in time?',
        'These were questions I could not easily dismiss.',
        'My love for children had always been a part of who I am. From an early age, I found joy in caring for, teaching and nurturing them. I also had the privilege of serving as a children\'s Bible Study Coordinator, an experience that deepened my connection with children and reinforced my desire to contribute positively to their lives.',
        'But this experience was different. It challenged me to think beyond my affection for children and consider what meaningful support could look like for those facing life-threatening illnesses.',
        'Over the years, the concern that began in that hospital never left me. It gradually grew into a conviction that compassion, however genuine, is not enough if it never translates into action.',
        'I began asking myself another set of questions.',
        'If I could make a difference in the life of even one child, why shouldn\'t I? Must I have all the resources before I begin? What if the little I can offer today becomes the hope a family desperately needs tomorrow?',
        'I realised that I did not need to have all the answers or solve every problem before taking the first step.',
        'On October 23, 2022, I took that step and founded Project CHAM (Child Health and Mortality).',
        'What began as a series of questions many years earlier had finally found expression in a commitment to support children and families affected by childhood cancer.',
        'Through Project CHAM, we have undertaken hospital visits, orphanage outreaches, financial assistance and awareness initiatives aimed at bringing hope and practical support to children and families navigating difficult circumstances.',
        'To date, we have reached over 100 children and provided financial assistance to more than 70 families. Behind these numbers are real children, worried parents, difficult decisions and families doing everything they can to give their children a chance.',
        'Every encounter reminds me why this mission matters.',
        'I have also come to understand that while financial support can ease an immediate burden, lasting impact requires more. It requires greater awareness, earlier detection, timely access to treatment and partnerships that can help families navigate the journey with dignity and hope.',
        'That is why my vision for Project CHAM goes beyond providing assistance. I want us to contribute to a future where more parents recognise the warning signs of childhood cancer, where children can access care earlier, and where families do not have to face the burden alone.',
        'I know we cannot reach every child or solve every challenge. But I also believe that the enormity of a problem should never become an excuse for doing nothing.',
        'Sometimes, I think back to that hospital experience nearly two decades ago. I remember the children who unknowingly stirred something in my heart, and I wonder how their stories unfolded.',
        'Did they recover? Did they get the care they needed? What became of their dreams and the futures their parents imagined for them?',
        'I may never know the answers.',
        'But I know that their stories helped shape a purpose that continues to guide me today.',
        'And as I look ahead, one question continues to challenge and inspire me:',
        'What if more of us chose to act on the needs we see, rather than waiting for someone else to make a difference?',
        'I believe that every act of compassion matters, every timely intervention counts, and every child deserves the opportunity to live, grow and fulfil their potential.',
        'Project CHAM is my response to a question that began many years ago. It is a commitment I hope will continue to grow, reach more children and inspire others to become part of the difference.',
        'Because some of the bravest fighters I know are children, and every child deserves a fighting chance, a future and the opportunity to thrive.',
    ];
@endphp

<section class="marketing-paper relative isolate overflow-hidden py-20 sm:py-24 lg:py-28" aria-labelledby="founder-story-heading">
    <x-marketing.container class="relative">
        <article class="mx-auto max-w-3xl">
            <h2 id="founder-story-heading" class="sr-only">The story in Modupe Olusoga's words</h2>

            <div class="grid gap-5 text-base leading-8 text-cham-stone sm:text-lg sm:leading-9">
                @foreach ($founderStoryParagraphs as $paragraph)
                    <p @class(['font-hero text-xl font-semibold leading-8 text-cham-ink sm:text-2xl sm:leading-10' => $loop->first])>{{ $paragraph }}</p>
                @endforeach
            </div>

            <footer class="mt-12 border-t border-cham-line pt-8">
                <p class="font-handwriting text-3xl text-cham-primary">Modupe Olusoga</p>
                <p class="mt-1 text-sm font-bold tracking-[0.1em] text-cham-ink uppercase">Founder, Project CHAM</p>
            </footer>
        </article>

        <div class="mx-auto mt-16 flex max-w-3xl flex-col gap-3 sm:flex-row">
            <x-marketing.button-link :href="route('donate')">
                Become part of the difference
            </x-marketing.button-link>

            <x-marketing.button-link :href="route('about')" variant="light">
                Learn about Project CHAM
            </x-marketing.button-link>
        </div>
    </x-marketing.container>
</section>
