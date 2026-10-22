@php
    $p = config('portfolio');

    $currentJob = collect($p['experience'])->firstWhere('current', true);

    $nav = [
        'skills' => 'Skills',
        'experience' => 'Experience',
        'projects' => 'Projects',
        'contact' => 'Contact',
    ];

    // Decorative background icons: [icon, colour, left, top, duration, delay].
    $floatingIcons = [
        ['fa-brands fa-php', '#7A86B8', '8%', '18%', '26s', '-2s'],
        ['fa-brands fa-laravel', '#FF2D20', '86%', '14%', '30s', '-8s'],
        ['fa-solid fa-database', '#0EA5E9', '78%', '62%', '28s', '-4s'],
        ['fa-brands fa-js', '#F7DF1E', '14%', '70%', '32s', '-12s'],
        ['fa-brands fa-docker', '#2496ED', '48%', '84%', '34s', '-6s'],
        ['fa-brands fa-linux', '#FCC624', '92%', '40%', '27s', '-14s'],
        ['fa-brands fa-git-alt', '#F05032', '4%', '44%', '29s', '-10s'],
    ];
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-zinc-950">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $p['name'] }} | {{ $p['role'] }}</title>
    <meta name="description" content="{{ $p['bio'] }}">
    <meta name="theme-color" content="#09090b">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="JMDev">
    <meta property="og:title" content="{{ $p['name'] }} | {{ $p['role'] }}">
    <meta property="og:description" content="{{ $p['bio'] }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ asset('images/og-image.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="JMDev logo with {{ $p['name'] }}, {{ $p['role'] }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $p['name'] }} | {{ $p['role'] }}">
    <meta name="twitter:description" content="{{ $p['bio'] }}">
    <meta name="twitter:image" content="{{ asset('images/og-image.png') }}">

    <link rel="icon" href="/favicon.ico" sizes="16x16 32x32 48x48">
    <link rel="icon" href="/images/icon-192.png" type="image/png" sizes="192x192">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700|jetbrains-mono:400,500&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>document.documentElement.classList.add('js')</script>
    @vite(['resources/css/portfolio.css', 'resources/js/portfolio.js'])
</head>
<body class="min-h-screen font-sans text-zinc-300 antialiased">
    <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-50 focus:rounded-lg focus:bg-sky-400 focus:px-4 focus:py-2 focus:font-semibold focus:text-zinc-950">
        Skip to content
    </a>

    {{-- Background --}}
    <div aria-hidden="true" class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
        <div class="bg-grid absolute inset-0"></div>
        <div class="absolute -top-40 left-1/2 h-[36rem] w-[60rem] -translate-x-1/2 rounded-full bg-gradient-to-br from-sky-500/20 via-indigo-500/15 to-transparent blur-3xl"></div>
        <div class="absolute top-[60%] -right-40 h-[28rem] w-[28rem] rounded-full bg-indigo-600/10 blur-3xl"></div>

        @foreach ($floatingIcons as [$icon, $color, $left, $top, $duration, $delay])
            <i class="{{ $icon }} animate-drift absolute text-3xl opacity-[0.12] sm:text-5xl"
               style="left: {{ $left }}; top: {{ $top }}; color: {{ $color }}; animation-duration: {{ $duration }}; animation-delay: {{ $delay }};"></i>
        @endforeach
    </div>

    {{-- Header --}}
    <header data-header class="group fixed inset-x-0 top-0 z-40 border-b border-transparent transition-colors duration-300 data-scrolled:border-white/5 data-scrolled:bg-zinc-950/75 data-scrolled:backdrop-blur-xl">
        <nav class="mx-auto flex h-16 max-w-6xl items-center justify-between px-4 sm:px-6" aria-label="Main">
            <a href="#top" class="flex items-center gap-3 font-semibold text-white">
                <img src="/images/logo.webp" alt="JMDev" width="179" height="144" class="h-12 w-auto">
                <span class="hidden border-l border-white/10 pl-3 sm:inline">{{ $p['name'] }}</span>
            </a>

            <div class="hidden items-center gap-1 md:flex">
                @foreach ($nav as $id => $label)
                    <a href="#{{ $id }}" data-nav-link class="rounded-lg px-3 py-2 text-sm font-medium text-zinc-400 transition hover:text-white data-active:text-white">{{ $label }}</a>
                @endforeach
            </div>

            <button type="button" data-menu-button aria-expanded="false" aria-controls="mobile-menu"
                    class="grid size-10 place-items-center rounded-lg text-zinc-300 transition hover:bg-white/5 hover:text-white md:hidden">
                <span class="sr-only">Toggle menu</span>
                <i class="fa-solid fa-bars text-lg"></i>
            </button>
        </nav>

        <div id="mobile-menu" data-menu hidden class="border-t border-white/5 bg-zinc-950/95 backdrop-blur-xl md:hidden">
            <div class="mx-auto flex max-w-6xl flex-col gap-1 px-4 py-4">
                @foreach ($nav as $id => $label)
                    <a href="#{{ $id }}" class="rounded-lg px-3 py-3 text-base font-medium text-zinc-300 hover:bg-white/5 hover:text-white">{{ $label }}</a>
                @endforeach
            </div>
        </div>
    </header>

    <main id="main">
        {{-- Hero --}}
        <section id="top" class="relative mx-auto flex min-h-svh max-w-6xl flex-col justify-center px-4 pt-28 pb-16 sm:px-6">
            <div data-reveal class="max-w-3xl">
                @if ($p['available'])
                    <p class="mb-6 inline-flex items-center gap-2.5 rounded-full border border-emerald-400/20 bg-emerald-400/10 px-3.5 py-1.5 text-sm font-medium text-emerald-300">
                        <span class="relative flex size-2">
                            <span class="animate-pulse-ring absolute inline-flex size-full rounded-full bg-emerald-400"></span>
                            <span class="relative inline-flex size-2 rounded-full bg-emerald-400"></span>
                        </span>
                        Available for new projects
                    </p>
                @endif

                <h1 class="text-5xl leading-[1.05] font-bold tracking-tight text-white sm:text-6xl lg:text-7xl">
                    {{ $p['name'] }}
                </h1>

                <p class="mt-4 bg-gradient-to-r from-sky-300 via-sky-400 to-indigo-400 bg-clip-text text-2xl font-semibold text-transparent sm:text-3xl">
                    {{ $p['role'] }}
                </p>

                @if ($currentJob)
                    <p class="mt-3 flex flex-wrap items-center gap-x-2 text-zinc-300">
                        <i class="fa-solid fa-briefcase text-sm text-zinc-500"></i>
                        {{ $currentJob['role'] }} at
                        <a href="#experience" class="font-semibold text-white underline decoration-sky-400/50 underline-offset-4 transition hover:decoration-sky-400">{{ $currentJob['company'] }}</a>
                    </p>
                @endif

                <p class="mt-6 max-w-2xl text-lg leading-relaxed text-zinc-400">
                    {{ $p['bio'] }}
                </p>

                <div class="mt-10 flex flex-wrap items-center gap-3">
                    <a href="#projects" class="group/btn inline-flex items-center gap-2 rounded-xl bg-sky-400 px-5 py-3 font-semibold text-zinc-950 shadow-lg shadow-sky-500/25 transition hover:bg-sky-300">
                        View my work
                        <i class="fa-solid fa-arrow-down text-sm transition group-hover/btn:translate-y-0.5"></i>
                    </a>
                    <a href="#contact" class="inline-flex items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-5 py-3 font-semibold text-white transition hover:border-white/20 hover:bg-white/10">
                        Get in touch
                    </a>
                    <div class="ml-1 flex items-center gap-1">
                        <a href="{{ $p['links']['github'] }}" target="_blank" rel="noopener noreferrer" class="grid size-12 place-items-center rounded-xl text-xl text-zinc-400 transition hover:bg-white/5 hover:text-white" aria-label="GitHub">
                            <i class="fa-brands fa-github"></i>
                        </a>
                        <a href="{{ $p['links']['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="grid size-12 place-items-center rounded-xl text-xl text-zinc-400 transition hover:bg-white/5 hover:text-white" aria-label="LinkedIn">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <dl data-reveal style="--reveal-delay: 150ms" class="mt-16 grid max-w-3xl grid-cols-1 gap-px overflow-hidden rounded-2xl border border-white/10 bg-white/10 sm:grid-cols-3">
                @foreach ($p['stats'] as $stat)
                    <div class="flex flex-col-reverse gap-1 bg-zinc-950/80 px-6 py-5 backdrop-blur">
                        <dt class="text-sm text-zinc-500">{{ $stat['label'] }}</dt>
                        <dd class="text-2xl font-semibold tracking-tight text-white">{{ $stat['value'] }}</dd>
                    </div>
                @endforeach
            </dl>

            <a href="#skills" class="absolute bottom-8 left-1/2 hidden -translate-x-1/2 text-zinc-600 transition hover:text-zinc-300 md:block" aria-label="Scroll to skills">
                <i class="fa-solid fa-chevron-down animate-bounce"></i>
            </a>
        </section>

        {{-- Skills --}}
        <section id="skills" class="mx-auto max-w-6xl px-4 py-24 sm:px-6">
            <div data-reveal class="max-w-2xl">
                <p class="font-mono text-sm text-sky-400">01 / Expertise</p>
                <h2 class="mt-3 text-3xl font-bold tracking-tight text-white sm:text-4xl">Skills &amp; technologies</h2>
                <p class="mt-4 text-zinc-400">The languages, frameworks and tools I use to design, build and ship backend systems.</p>
            </div>

            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($p['skills'] as $group)
                    <div data-reveal style="--reveal-delay: {{ $loop->index * 80 }}ms"
                         class="card-glow rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition hover:border-sky-400/30">
                        <div class="grid size-11 place-items-center rounded-xl bg-sky-400/10 text-sky-400 ring-1 ring-sky-400/20">
                            <i class="{{ $group['icon'] }}"></i>
                        </div>
                        <h3 class="mt-5 font-semibold text-white">{{ $group['title'] }}</h3>
                        <ul class="mt-4 flex flex-wrap gap-2">
                            @foreach ($group['items'] as $item)
                                <li class="rounded-md border border-white/10 bg-white/5 px-2.5 py-1 text-sm text-zinc-300">{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- Experience --}}
        <section id="experience" class="mx-auto max-w-6xl px-4 py-24 sm:px-6">
            <div data-reveal class="max-w-2xl">
                <p class="font-mono text-sm text-sky-400">02 / Career</p>
                <h2 class="mt-3 text-3xl font-bold tracking-tight text-white sm:text-4xl">Experience</h2>
                <p class="mt-4 text-zinc-400">Where I am building software today.</p>
            </div>

            <div class="mt-12 space-y-5">
                @foreach ($p['experience'] as $job)
                    <article data-reveal class="card-glow grid gap-8 rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition hover:border-sky-400/30 sm:p-8 lg:grid-cols-3">
                        <div>
                            <div class="flex items-center gap-4">
                                <div class="grid size-12 shrink-0 place-items-center rounded-xl bg-gradient-to-br from-sky-400/20 to-indigo-500/20 text-lg text-sky-300 ring-1 ring-white/10">
                                    <i class="{{ $job['icon'] }}"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-white">{{ $job['role'] }}</h3>
                                    @isset($job['url'])
                                        <a href="{{ $job['url'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 font-medium text-sky-300 transition hover:text-sky-200">
                                            {{ $job['company'] }} <i class="fa-solid fa-arrow-up-right-from-square text-[0.65rem]"></i>
                                        </a>
                                    @else
                                        <p class="font-medium text-sky-300">{{ $job['company'] }}</p>
                                    @endisset
                                </div>
                            </div>

                            <dl class="mt-6 space-y-2.5 text-sm text-zinc-400">
                                <div class="flex items-center gap-3">
                                    <dt class="sr-only">Period</dt>
                                    <i class="fa-regular fa-calendar w-4 text-center text-zinc-500"></i>
                                    <dd>{{ $job['period'] }}</dd>
                                    @if ($job['current'] ?? false)
                                        <span class="rounded-full bg-emerald-400/10 px-2 py-0.5 text-xs font-medium text-emerald-300">Current</span>
                                    @endif
                                </div>
                                <div class="flex items-center gap-3">
                                    <dt class="sr-only">Type</dt>
                                    <i class="fa-solid fa-briefcase w-4 text-center text-zinc-500"></i>
                                    <dd>{{ $job['type'] }}</dd>
                                </div>
                                <div class="flex items-center gap-3">
                                    <dt class="sr-only">Location</dt>
                                    <i class="fa-solid fa-location-dot w-4 text-center text-zinc-500"></i>
                                    <dd>{{ $job['location'] }}</dd>
                                </div>
                            </dl>
                        </div>

                        <ul class="grid gap-x-8 gap-y-3 text-sm leading-relaxed text-zinc-300 md:grid-cols-2 lg:col-span-2">
                            @foreach ($job['highlights'] as $highlight)
                                <li class="flex gap-3">
                                    <i class="fa-solid fa-check mt-1 text-xs text-sky-400"></i>
                                    <span>{{ $highlight }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </section>

        {{-- Projects --}}
        <section id="projects" class="mx-auto max-w-6xl px-4 py-24 sm:px-6">
            <div data-reveal class="max-w-2xl">
                <p class="font-mono text-sm text-sky-400">03 / Work</p>
                <h2 class="mt-3 text-3xl font-bold tracking-tight text-white sm:text-4xl">Selected projects</h2>
                <p class="mt-4 text-zinc-400">A few things I have built or contributed to, from large community platforms to focused tools.</p>
            </div>

            <div class="mt-12 grid gap-5 md:grid-cols-2">
                @foreach ($p['projects'] as $project)
                    @php($featured = $project['featured'] ?? false)
                    <article data-reveal style="--reveal-delay: {{ ($loop->index % 2) * 80 }}ms"
                             @class([
                                 'card-glow group/card relative flex flex-col rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition hover:-translate-y-1 hover:border-sky-400/30 sm:p-8',
                                 'md:col-span-2' => $featured,
                             ])>
                        <div class="flex items-start justify-between gap-4">
                            <div class="flex items-center gap-4">
                                <div class="grid size-12 shrink-0 place-items-center rounded-xl bg-gradient-to-br from-sky-400/20 to-indigo-500/20 text-lg text-sky-300 ring-1 ring-white/10">
                                    <i class="{{ $project['icon'] }}"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-white">{{ $project['name'] }}</h3>
                                    @if ($featured)
                                        <p class="mt-0.5 font-mono text-xs tracking-wide text-sky-400 uppercase">Featured</p>
                                    @endif
                                </div>
                            </div>

                            @isset($project['url'])
                                <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer"
                                   class="grid size-10 shrink-0 place-items-center rounded-lg text-zinc-500 transition hover:bg-white/5 hover:text-white"
                                   aria-label="Visit {{ $project['name'] }}">
                                    <i class="fa-solid fa-arrow-up-right-from-square text-sm"></i>
                                </a>
                            @endisset
                        </div>

                        <p class="mt-5 leading-relaxed text-zinc-400">{{ $project['description'] }}</p>

                        @isset($project['highlights_title'])
                            <h4 class="mt-6 font-mono text-xs tracking-wide text-zinc-500 uppercase">{{ $project['highlights_title'] }}</h4>
                        @endisset

                        <ul @class([
                            'grid gap-x-8 gap-y-2.5 text-sm text-zinc-300',
                            'mt-3' => isset($project['highlights_title']),
                            'mt-6' => ! isset($project['highlights_title']),
                            'sm:grid-cols-2 lg:grid-cols-4' => $featured,
                        ])>
                            @foreach ($project['highlights'] as $highlight)
                                <li class="flex gap-3">
                                    <i class="fa-solid fa-check mt-1 text-xs text-sky-400"></i>
                                    <span>{{ $highlight }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <ul class="mt-auto flex flex-wrap gap-2 pt-8" aria-label="Tech stack">
                            @foreach ($project['stack'] as $tech)
                                <li class="rounded-full bg-sky-400/10 px-3 py-1 font-mono text-xs text-sky-300">{{ $tech }}</li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </section>

        {{-- Contact --}}
        <section id="contact" class="mx-auto max-w-6xl px-4 py-24 sm:px-6">
            <div data-reveal class="relative overflow-hidden rounded-3xl border border-white/10 bg-gradient-to-br from-sky-500/10 via-zinc-900 to-indigo-500/10 px-6 py-14 text-center sm:px-12 sm:py-20">
                <div aria-hidden="true" class="absolute -top-24 left-1/2 h-48 w-[32rem] -translate-x-1/2 rounded-full bg-sky-400/20 blur-3xl"></div>

                <p class="relative font-mono text-sm text-sky-400">04 / Contact</p>
                <h2 class="relative mt-3 text-3xl font-bold tracking-tight text-white sm:text-5xl">Let's build something together</h2>
                <p class="relative mx-auto mt-5 max-w-xl text-lg text-zinc-400">
                    Have a project in mind or a team that needs a backend developer? My inbox is open, in English or French.
                </p>

                <a href="mailto:{{ $p['links']['email'] }}" class="relative mt-10 inline-flex items-center gap-3 rounded-xl bg-white px-6 py-3.5 font-semibold text-zinc-950 shadow-xl shadow-sky-500/10 transition hover:bg-sky-300">
                    <i class="fa-solid fa-envelope"></i> {{ $p['links']['email'] }}
                </a>

                <div class="relative mt-10 flex flex-wrap justify-center gap-3">
                    <a href="{{ $p['links']['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2.5 rounded-xl border border-white/10 bg-white/5 px-5 py-3 text-sm font-medium text-zinc-200 transition hover:border-white/20 hover:bg-white/10">
                        <i class="fa-brands fa-linkedin-in text-base text-sky-400"></i> LinkedIn
                    </a>
                    <a href="{{ $p['links']['github'] }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2.5 rounded-xl border border-white/10 bg-white/5 px-5 py-3 text-sm font-medium text-zinc-200 transition hover:border-white/20 hover:bg-white/10">
                        <i class="fa-brands fa-github text-base text-sky-400"></i> GitHub
                    </a>
                    <span class="inline-flex items-center gap-2.5 rounded-xl border border-white/10 bg-white/5 px-5 py-3 text-sm font-medium text-zinc-200">
                        <i class="fa-solid fa-location-dot text-base text-sky-400"></i> {{ $p['location'] }}
                    </span>
                </div>
            </div>
        </section>
    </main>

    <footer class="border-t border-white/5">
        <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-4 px-4 py-8 text-sm text-zinc-500 sm:flex-row sm:px-6">
            <p>&copy; {{ date('Y') }} {{ $p['name'] }}. All rights reserved.</p>
            <a href="#top" class="inline-flex items-center gap-2 transition hover:text-white">
                Back to top <i class="fa-solid fa-arrow-up text-xs"></i>
            </a>
        </div>
    </footer>
</body>
</html>
