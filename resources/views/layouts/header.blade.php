{{-- TODO: use named routes --}}
<div class="lg:mt-16">
    <nav class="max-w-4xl mx-auto flex space-x-4 justify-end items-center">
        <a href="/our-chapter" class="px-3 py-1.5 bg-gray-800 text-slate-100 rounded-md shadow-md text-xs font-semibold uppercase hover:opacity-80 transition ease-in-out duration-300">
            Our chapter
        </a>
        <a href="/our-sponsors" class="px-3 py-1.5 bg-gray-800 text-slate-100 rounded-md shadow-md text-xs font-semibold uppercase hover:opacity-80 transition ease-in-out duration-300">
            Our sponsors
        </a>
        <a href="/cncf" class="px-3 py-1.5 bg-gray-800 text-slate-100 rounded-md shadow-md text-xs font-semibold uppercase hover:opacity-80 transition ease-in-out duration-300">
            CNCF
        </a>
        <a href="{{ route('blog') }}" class="px-3 py-1.5 bg-gray-800 text-slate-100 rounded-md shadow-md text-xs font-semibold uppercase hover:opacity-80 transition ease-in-out duration-300">
            Blog
        </a>
        <a href="/cfp" class="px-3 py-1.5 bg-gray-800 text-slate-100 rounded-md shadow-md text-xs font-semibold uppercase hover:opacity-80 transition ease-in-out duration-300">
            Call For Papers
        </a>
        <a href="https://t.me/+E_G1XIVXTWMzYjU0" target="_blank">
            <svg class="h-7 fill-gray-800 hover:opacity-80 transition ease-in-out duration-300" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Telegram</title><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
        </a>
    </nav>

    <div class="mt-3 max-w-4xl mx-auto bg-[#0086FF] lg:rounded-md lg:shadow-lg lg:outline">
        <div class="py-6 px-6">
            <a href="{{ route('home') }}" class="flex flex-row items-center gap-4">
                <div>
                    <img src="/images/cloud-native-community-groups.svg" alt="Cloud Native Mauritius" class="h-20 w-20 rounded-sm" />
                </div>
                <div class="flex flex-col">
                    <p class="text-xl font-light uppercase text-gray-50">
                        Cloud Native
                    </p>
                    <p class="text-xl font-light uppercase text-gray-50">
                        Community Groups
                    </p>
                    <p class="text-xl font-bold uppercase text-gray-50">
                        Mauritius
                    </p>
                </div>
            </a>
        </div>
    </div>
</div>
