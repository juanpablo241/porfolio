<!-- ====== Hero Section Start -->
<div class="relative pt-[60px] lg:pt-[80px] pb-[110px] bg-white dark:bg-slate-900">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-5/12 px-4">
                <div class="hero-content">
                    <h1
                        class="text-dark dark:text-gray-200 font-bold text-4xl sm:text-[42px] lg:text-[40px] xl:text-[42px] leading-snug mb-6">
                        My Name is Pablo. <br />
                    </h1>
                    <p class="text-base mb-8 max-w-[520px]">
                        I am a full stack web developer.<br>
                        I am passionate about programming.
                    </p>
                    <ul class="flex flex-wrap items-center">
                        <li>
                            <x-button-link href="#portfolio" variant="primary" class="rounded-lg">
                                My Projects
                            </x-button-link>
                        </li>
                    </ul>
                    <div class="clients pt-16">
                        <h6 class="font-normal text-xs flex items-center text-body-color dark:text-gray-300 mb-4">
                            Follow me on social media
                            <span class="w-8 h-[1px] bg-body-color inline-block ml-2"></span>
                        </h6>
                        <x-social-icons></x-social-icons>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/12 px-4"></div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="lg:text-right lg:ml-auto">
                    <div class="relative inline-block z-10 pt-11 lg:pt-0">
                        <img src="{{ url('/img/me-hero.png') }}" alt="hero" class="max-w-full lg:ml-auto" />

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== Hero Section End -->
