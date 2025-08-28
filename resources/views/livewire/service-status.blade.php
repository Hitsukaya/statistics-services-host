<div class="p-4 space-y-4 select-none">
    @foreach($hosts as $host)
        <!-- HOST -->
        <div x-data="{
                latency: {{ $host['latency'] ?? 0 }},
                uptime: {{ $host['uptime'] ?? 0 }},
                animateLatency: 0,
                animateUptime: 0,
                animateNumber(target, key) {
                    if (this[key] < target) this[key]++;
                    if (this[key] > target) this[key]--;
                }
            }"
            x-init="setInterval(() => {
                let targetLatency = Math.floor(latency * (0.9 + Math.random()*0.2));
                let targetUptime = Math.floor(uptime * (0.9 + Math.random()*0.2));
                animateNumber(targetLatency, 'animateLatency');
                animateNumber(targetUptime, 'animateUptime');
            }, 50)"
            class="flex items-center justify-between p-3 mb-2 bg-white dark:bg-neutral-950 rounded-xl shadow-sm border border-gray-200 dark:border-gray-800 text-xs space-x-3"
        >
            <!-- Host Name + Status Dot -->
            <div class="flex items-center space-x-2 font-semibold text-gray-700 dark:text-gray-200 truncate w-[30%]">
                <div class="w-2.5 h-2.5 rounded-full flex-shrink-0" :class="{
                    'bg-green-500': animateUptime > 95,
                    'bg-yellow-500': animateUptime <= 95 && animateUptime > 80,
                    'bg-red-500': animateUptime <= 80
                }"></div>
                <span class="truncate" title="{{ $host['name'] }}">{{ $host['name'] }}</span>
            </div>

            <!-- Latency -->
            <div class="flex flex-col items-end w-[20%]">
                <span class="text-gray-500 dark:text-gray-400 mb-1" x-text="animateLatency + ' ms'"></span>
                <div class="w-full h-2.5 bg-gray-200 dark:bg-gray-800 rounded-full overflow-hidden">
                    <div x-bind:style="'width:' + Math.min(animateLatency/5, 100) + '%'"
                        class="h-2.5 rounded-full bg-gradient-to-r from-blue-400 to-blue-600 transition-all duration-100"></div>
                </div>
            </div>

            <!-- Uptime -->
            <div class="flex flex-col items-end w-[20%]">
                <span class="text-gray-500 dark:text-gray-400 mb-1" x-text="animateUptime + '%'"></span>
                <div class="w-full h-2.5 bg-gray-200 dark:bg-gray-800 rounded-full overflow-hidden">
                    <div x-bind:style="'width:' + animateUptime + '%'"
                        class="h-2.5 rounded-full bg-gradient-to-r from-green-400 to-green-600 transition-all duration-100"></div>
                </div>
            </div>

            <!-- Comment -->
            <div class="truncate max-w-[25%] text-center">
                <span :class="{
                        'bg-green-100 text-green-800 dark:bg-green-700 dark:text-green-200': '{{ strtolower($host['comment']) }}'.includes('operational') || '{{ strtolower($host['comment']) }}'.includes('valid'),
                        'bg-yellow-100 text-yellow-800 dark:bg-yellow-700 dark:text-yellow-200': '{{ strtolower($host['comment']) }}'.includes('warning') || '{{ strtolower($host['comment']) }}'.includes('delayed') || '{{ strtolower($host['comment']) }}'.includes('expiring soon'),
                        'bg-red-100 text-red-800 dark:bg-red-700 dark:text-red-200': '{{ strtolower($host['comment']) }}'.includes('offline') || '{{ strtolower($host['comment']) }}'.includes('blocked')
                    }"
                    class="px-2 py-1 rounded-full truncate block text-xs font-semibold" title="{{ $host['comment'] }}"
                >
                    {{ $host['comment'] }}
                </span>
            </div>
        </div>


        <!-- Services Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($host['services'] as $service)
                <div x-data="{
                        latency: {{ $service['latency'] ?? 0 }},
                        uptime: {{ $service['uptime'] ?? 0 }},
                        animateLatency: 0,
                        animateUptime: 0,
                        animateNumber(target, key) {
                            if (this[key] < target) this[key]++;
                            if (this[key] > target) this[key]--;
                        }
                    }"
                    x-init="setInterval(() => {
                        let targetLatency = Math.floor(latency * (0.9 + Math.random()*0.2));
                        let targetUptime = Math.floor(uptime * (0.9 + Math.random()*0.2));
                        animateNumber(targetLatency, 'animateLatency');
                        animateNumber(targetUptime, 'animateUptime');
                    }, 50)"
                    class="p-3 rounded-xl shadow-sm border border-gray-200 dark:border-gray-800 bg-white dark:bg-neutral-950 flex items-center justify-between space-x-3"
                >
                    <!-- Service Name + Status Dot -->
                    <div class="flex items-center space-x-2 font-semibold text-gray-700 dark:text-gray-200 truncate w-[30%]">
                        <div class="w-2.5 h-2.5 rounded-full flex-shrink-0" :class="{
                            'bg-green-500': animateUptime > 95,
                            'bg-yellow-500': animateUptime <= 95 && animateUptime > 80,
                            'bg-red-500': animateUptime <= 80
                        }"></div>
                        <span class="truncate">{{ $service['name'] }}</span>
                    </div>

                    <!-- Latency -->
                    <div class="flex flex-col items-end w-[60px]">
                        <span class="text-xs text-gray-500 dark:text-gray-400 mb-1" x-text="animateLatency + ' ms'"></span>
                        <div class="w-full h-1 bg-gray-200 dark:bg-gray-800 rounded-full overflow-hidden">
                            <div x-bind:style="'width:' + Math.min(animateLatency/5, 100) + '%'"
                                class="h-1 rounded-full bg-gradient-to-r from-blue-400 to-blue-600 transition-all duration-100"></div>
                        </div>
                    </div>

                    <!-- Uptime -->
                    <div class="flex flex-col items-end w-[60px]">
                        <span class="text-xs text-gray-500 dark:text-gray-400 mb-1" x-text="animateUptime + '%'"></span>
                        <div class="w-full h-1 bg-gray-200 dark:bg-gray-800 rounded-full overflow-hidden">
                            <div x-bind:style="'width:' + animateUptime + '%'"
                                class="h-1 rounded-full bg-gradient-to-r from-green-400 to-green-600 transition-all duration-100"></div>
                        </div>
                    </div>

                    <!-- Comment -->
                    <div class="w-[25%] text-center">
                        @if($service['comment'])
                            <span x-data="{ comment: '{{ $service['comment'] }}' }"
                                :class="{
                                    'bg-green-100 text-green-800 dark:bg-green-700 dark:text-green-200': comment.toLowerCase().includes('operational') || comment.toLowerCase().includes('valid'),
                                    'bg-yellow-100 text-yellow-800 dark:bg-yellow-700 dark:text-yellow-200': comment.toLowerCase().includes('warning') || comment.toLowerCase().includes('delayed') || comment.toLowerCase().includes('expiring soon'),
                                    'bg-red-100 text-red-800 dark:bg-red-700 dark:text-red-200': comment.toLowerCase().includes('offline') || comment.toLowerCase().includes('blocked') || comment.toLowerCase().includes('expired')
                                }"
                                class="px-2 py-1 rounded-full text-xs font-semibold truncate block"
                            >
                                {{ $service['comment'] }}
                            </span>
                        @else
                            <span class="text-gray-500 dark:text-gray-400 text-xs truncate block">No comment</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <!-- IP Blacklist & Databases -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <!-- Databases -->
            <div class="bg-white dark:bg-neutral-950 p-4 rounded shadow-sm border border-gray-200 dark:border-gray-800 overflow-auto">
                <h3 class="text-xs font-semibold mb-2 text-gray-800 dark:text-gray-200">Databases</h3>
                <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-2">
                    @forelse($host['databases'] ?? [] as $db)
                        <div x-data="{ animateLatency: 0, animateUptime: 0, latency: {{ $db['latency'] }}, uptime: {{ $db['uptime'] }} }"
                             x-init="setInterval(() => {
                                 animateLatency = Math.floor(latency * (0.9 + Math.random()*0.2));
                                 animateUptime = Math.floor(uptime * (0.9 + Math.random()*0.2));
                             }, 200)"
                             class="p-2 border border-gray-200 dark:border-gray-800 rounded bg-gray-50 dark:bg-neutral-900 text-xs">
                            <div class="font-semibold text-gray-800 dark:text-white">{{ $db['name'] }}</div>

                            <!-- Latency -->
                            <div class="flex items-center gap-2 mt-1">
                                <div class="w-16 h-2.5 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                    <div class="h-2.5 rounded-full bg-gradient-to-r from-blue-400 to-blue-600 transition-all duration-200"
                                         x-bind:style="'width:' + Math.min(animateLatency/5,100) + '%'"></div>
                                </div>
                                <span class="text-gray-600 dark:text-gray-300" x-text="animateLatency + ' ms'"></span>
                            </div>

                            <!-- Uptime -->
                            <div class="flex items-center gap-2 mt-1">
                                <div class="w-16 h-2.5 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                    <div class="h-2.5 rounded-full bg-gradient-to-r from-green-400 to-green-600 transition-all duration-200"
                                         x-bind:style="'width:' + animateUptime + '%'"></div>
                                </div>
                                <span class="text-gray-600 dark:text-gray-300" x-text="animateUptime + '%'"></span>
                            </div>

                            <!-- Comment -->
                            <div class="mt-1 text-gray-600 dark:text-gray-400 text-xs">
                                 {{ $db['comment'] ?? 'No comment' }}
                            </div>
                        </div>
                    @empty
                        <span class="text-gray-500 dark:text-gray-100 text-xs">No databases</span>
                    @endforelse
                </div>
            </div>

            <!-- IP Blacklist -->
            <div class="bg-white dark:bg-neutral-950 p-4 rounded shadow-sm border border-gray-200 dark:border-gray-800 overflow-auto">
                <h3 class="text-xs font-semibold mb-2 text-gray-800 dark:text-gray-200">IP Blacklist</h3>
                <div
                    x-data="{
                        scrollEl: null,
                        isDown: false,
                        startX: 0,
                        scrollLeft: 0,
                        startAutoScroll() {
                            if (!this.scrollEl) return;
                            setInterval(() => {
                                if (this.scrollEl.scrollWidth > this.scrollEl.clientWidth) {
                                    this.scrollEl.scrollBy({ left: this.scrollEl.clientWidth / 3, behavior: 'smooth' });
                                    if (this.scrollEl.scrollLeft + this.scrollEl.clientWidth >= this.scrollEl.scrollWidth) {
                                        this.scrollEl.scrollTo({ left: 0, behavior: 'smooth' });
                                    }
                                }
                            }, 3000);
                        },
                        initDrag() {
                            this.scrollEl.addEventListener('mousedown', (e) => {
                                this.isDown = true;
                                this.startX = e.pageX - this.scrollEl.offsetLeft;
                                this.scrollLeft = this.scrollEl.scrollLeft;
                            });
                            this.scrollEl.addEventListener('mouseleave', () => { this.isDown = false; });
                            this.scrollEl.addEventListener('mouseup', () => { this.isDown = false; });
                            this.scrollEl.addEventListener('mousemove', (e) => {
                                if (!this.isDown) return;
                                e.preventDefault();
                                const x = e.pageX - this.scrollEl.offsetLeft;
                                const walk = (x - this.startX);
                                this.scrollEl.scrollLeft = this.scrollLeft - walk;
                            });
                        }
                    }"
                    x-init="scrollEl = $refs.scrollContainer; startAutoScroll(); initDrag();"
                    class="relative flex gap-2 overflow-x-auto scrollbar-hide cursor-grab"
                    x-ref="scrollContainer"
                >
                    @forelse($host['blacklist'] ?? [] as $ip)
                        <div x-data="{ seconds: {{ $ip['time_remaining'] }}, total: {{ $ip['time_remaining'] }}, progress: 100 }"
                             x-init="setInterval(() => { if(seconds>0) seconds--; progress = (seconds/total)*100 }, 1000)"
                             class="flex-shrink-0 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/4 p-2 border border-gray-200 dark:border-gray-800 rounded bg-gray-50 dark:bg-neutral-900 text-xs">
                            <div class="font-semibold text-gray-800 dark:text-white">IP: {{ $ip['address'] }}</div>
                            <div class="text-gray-600 dark:text-gray-300">Time Block: <span x-text="seconds + 's'"></span></div>
                            <div class="w-full h-2.5 bg-gray-200 dark:bg-gray-800 rounded-full overflow-hidden mt-1">
                                <div class="h-2.5 rounded-full bg-red-500 transition-all duration-500"
                                     x-bind:style="'width:' + progress + '%'"></div>
                            </div>
                        </div>
                    @empty
                        <span class="text-gray-500 dark:text-gray-100 text-xs">No blocked IPs</span>
                    @endforelse
                </div>
            </div>
        </div>
    @endforeach


    <style>
    .scrollbar-hide::-webkit-scrollbar { display: none; }
    .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    .flex.cursor-grab:active { cursor: grabbing; }
    </style>
</div>
