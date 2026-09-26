@php
    $newInquiriesCount = \App\Models\DonorInquiry::where('status', \App\Models\DonorInquiry::STATUS_NEW)->count();
    $totalInquiriesCount = \App\Models\DonorInquiry::count();
    $publishedPostsCount = \App\Models\Post::published()->count();
    $upcomingEventsCount = \App\Models\Event::upcoming()->count();
    $reviewsCount = \App\Models\Review::active()->count();
    $recentInquiries = \App\Models\DonorInquiry::latest()->take(5)->get();
    $upcomingEvents = \App\Models\Event::upcoming()->take(4)->get();
@endphp

<x-layouts::app :title="__('Dashboard')">
    <div class="space-y-6 w-full">
        <!-- Header -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <flux:heading size="xl">Project Cham Administration</flux:heading>
                <flux:subheading>Welcome back, {{ auth()->user()->name }}. Here is an overview of active care programs and donor outreach.</flux:subheading>
            </div>
            <div class="flex flex-wrap gap-2">
                <flux:button variant="primary" icon="plus" :href="route('admin.posts.create')" wire:navigate>
                    New Story
                </flux:button>
                <flux:button variant="outline" icon="calendar" :href="route('admin.events.create')" wire:navigate>
                    Post Event
                </flux:button>
                <flux:button variant="outline" icon="chat-bubble-bottom-center-text" :href="route('admin.reviews.create')" wire:navigate>
                    Add Review
                </flux:button>
            </div>
        </div>

        <!-- Metric KPI Cards -->
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
            <div class="rounded-xl border border-rose-200 bg-rose-50/60 p-5 dark:border-rose-900/50 dark:bg-rose-950/20 shadow-xs">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-bold uppercase tracking-wider text-rose-700 dark:text-rose-400">New Donor Leads</span>
                    <span class="grid size-8 place-items-center rounded-lg bg-rose-100 dark:bg-rose-900/50 text-rose-600">
                        <flux:icon name="heart" class="size-4" />
                    </span>
                </div>
                <p class="text-3xl font-extrabold text-zinc-900 dark:text-zinc-100 mt-2">{{ $newInquiriesCount }}</p>
                <a href="{{ route('admin.donors.index', ['status' => 'new']) }}" class="text-xs font-semibold text-rose-600 hover:underline mt-2 inline-block">
                    Review pending leads &rarr;
                </a>
            </div>

            <div class="rounded-xl border border-zinc-200 bg-white p-5 dark:border-zinc-700 dark:bg-zinc-900 shadow-xs">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-bold uppercase tracking-wider text-zinc-500">Published Stories</span>
                    <span class="grid size-8 place-items-center rounded-lg bg-zinc-100 dark:bg-zinc-800 text-zinc-600">
                        <flux:icon name="document-text" class="size-4" />
                    </span>
                </div>
                <p class="text-3xl font-extrabold text-zinc-900 dark:text-zinc-100 mt-2">{{ $publishedPostsCount }}</p>
                <a href="{{ route('admin.posts.index') }}" class="text-xs font-semibold text-cham-secondary hover:underline mt-2 inline-block">
                    Manage articles &rarr;
                </a>
            </div>

            <div class="rounded-xl border border-zinc-200 bg-white p-5 dark:border-zinc-700 dark:bg-zinc-900 shadow-xs">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-bold uppercase tracking-wider text-zinc-500">Upcoming Events</span>
                    <span class="grid size-8 place-items-center rounded-lg bg-zinc-100 dark:bg-zinc-800 text-zinc-600">
                        <flux:icon name="calendar" class="size-4" />
                    </span>
                </div>
                <p class="text-3xl font-extrabold text-zinc-900 dark:text-zinc-100 mt-2">{{ $upcomingEventsCount }}</p>
                <a href="{{ route('admin.events.index', ['filter' => 'upcoming']) }}" class="text-xs font-semibold text-cham-secondary hover:underline mt-2 inline-block">
                    View schedule &rarr;
                </a>
            </div>

            <div class="rounded-xl border border-zinc-200 bg-white p-5 dark:border-zinc-700 dark:bg-zinc-900 shadow-xs">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-bold uppercase tracking-wider text-zinc-500">Family Reviews</span>
                    <span class="grid size-8 place-items-center rounded-lg bg-zinc-100 dark:bg-zinc-800 text-zinc-600">
                        <flux:icon name="chat-bubble-bottom-center-text" class="size-4" />
                    </span>
                </div>
                <p class="text-3xl font-extrabold text-zinc-900 dark:text-zinc-100 mt-2">{{ $reviewsCount }}</p>
                <a href="{{ route('admin.reviews.index') }}" class="text-xs font-semibold text-cham-secondary hover:underline mt-2 inline-block">
                    Manage voices &rarr;
                </a>
            </div>

            <div class="rounded-xl border border-zinc-200 bg-white p-5 dark:border-zinc-700 dark:bg-zinc-900 shadow-xs">
                <div class="flex items-center justify-between">
                    <span class="text-xs font-bold uppercase tracking-wider text-zinc-500">Donor Contacts</span>
                    <span class="grid size-8 place-items-center rounded-lg bg-zinc-100 dark:bg-zinc-800 text-zinc-600">
                        <flux:icon name="user-group" class="size-4" />
                    </span>
                </div>
                <p class="text-3xl font-extrabold text-zinc-900 dark:text-zinc-100 mt-2">{{ $totalInquiriesCount }}</p>
                <a href="{{ route('admin.donors.index') }}" class="text-xs font-semibold text-cham-secondary hover:underline mt-2 inline-block">
                    Full CRM table &rarr;
                </a>
            </div>
        </div>

        <div class="grid gap-6 lg:grid-cols-3">
            <!-- Recent Donor Inquiries -->
            <div class="lg:col-span-2 rounded-xl border border-zinc-200 bg-white dark:border-zinc-700 dark:bg-zinc-900 p-5 shadow-xs">
                <div class="flex items-center justify-between pb-4 border-b border-zinc-100 dark:border-zinc-800">
                    <div>
                        <h2 class="font-bold text-zinc-900 dark:text-zinc-100">Recent Donor Inquiries</h2>
                        <p class="text-xs text-zinc-500">People who reached out to donate or partner with Project Cham</p>
                    </div>
                    <flux:button variant="ghost" size="sm" :href="route('admin.donors.index')" wire:navigate>
                        View All
                    </flux:button>
                </div>

                <div class="divide-y divide-zinc-100 dark:divide-zinc-800">
                    @forelse ($recentInquiries as $inquiry)
                        <div class="py-3.5 flex items-center justify-between gap-3">
                            <div class="min-w-0">
                                <div class="flex items-center gap-2">
                                    <span class="font-semibold text-zinc-900 dark:text-zinc-100 text-sm truncate">{{ $inquiry->name }}</span>
                                    <flux:badge :color="$inquiry->status_color" size="sm">
                                        {{ ucfirst(str_replace('_', ' ', $inquiry->status)) }}
                                    </flux:badge>
                                </div>
                                <p class="text-xs text-zinc-500 mt-0.5 truncate">{{ $inquiry->involvement_label }} &bull; {{ $inquiry->pledge_amount ?: 'Flexible amount' }}</p>
                            </div>
                            <flux:button
                                variant="outline"
                                size="sm"
                                :href="route('admin.donors.index')"
                                wire:navigate
                            >
                                Details
                            </flux:button>
                        </div>
                    @empty
                        <div class="py-8 text-center text-xs text-zinc-500">
                            No donor inquiries received yet.
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Upcoming Events Mini List -->
            <div class="rounded-xl border border-zinc-200 bg-white dark:border-zinc-700 dark:bg-zinc-900 p-5 shadow-xs">
                <div class="flex items-center justify-between pb-4 border-b border-zinc-100 dark:border-zinc-800">
                    <div>
                        <h2 class="font-bold text-zinc-900 dark:text-zinc-100">Next Events</h2>
                        <p class="text-xs text-zinc-500">Scheduled outreaches</p>
                    </div>
                    <flux:button variant="ghost" size="sm" :href="route('admin.events.index')" wire:navigate>
                        All
                    </flux:button>
                </div>

                <div class="divide-y divide-zinc-100 dark:divide-zinc-800">
                    @forelse ($upcomingEvents as $event)
                        <div class="py-3">
                            <p class="text-xs font-semibold text-cham-primary">{{ $event->formatted_date }} &bull; {{ $event->formatted_time }}</p>
                            <h3 class="font-medium text-sm text-zinc-900 dark:text-zinc-100 mt-0.5">{{ $event->title }}</h3>
                            <p class="text-xs text-zinc-500 mt-0.5">{{ $event->location }}</p>
                        </div>
                    @empty
                        <div class="py-8 text-center text-xs text-zinc-500">
                            No upcoming events scheduled.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
