<!DOCTYPE html>
<html lang="{{config('app.locale')}}" dir="ltr">
<head>
    @include('layouts.meta')
    <title>{{config('app.name')}} | @yield('title')</title>
    @include('layouts.styles')
</head>
<body>

<!-- navbar starts -->
<header class="container relative mx-auto">
    <nav
        class="flex items-center justify-between px-4 py-3 border-b border-stone-300"
    >
        <div>
            <span class="sr-only">Logo</span>
            <img
                class="w-28"
                src="{{asset('assets/images/logo/phonelab.svg')}}"
                alt="phonelab store logo"
            />
        </div>
        <div class="hidden text-stone-400 lg:block">
            <ul class="flex items-center gap-4">
                <li
                    class="transition-all duration-200 hover:text-fuchsia-500 motion-reduce:ease-in-out"
                >
                    <a href="">service</a>
                </li>
                <li
                    class="transition-all duration-200 hover:text-fuchsia-500 motion-reduce:ease-in-out"
                >
                    <a href="">statistique</a>
                </li>
                <li
                    class="transition-all duration-200 hover:text-fuchsia-500 motion-reduce:ease-in-out"
                >
                    <a href="">temoignage</a>
                </li>
                <li
                    class="transition-all duration-200 hover:text-fuchsia-500 motion-reduce:ease-in-out"
                >
                    <a href="">contact</a>
                </li>
            </ul>
        </div>
        <!-- mobile menu -->
        <div
            class="fixed inset-0 w-full z-50 opacity-0 bg-[#f8f7eb] menu-overlay rounded-lg"
        >
            <div
                class="relative flex items-center w-full h-full overflow-x-hidden delay-100 menu-content"
            >
                <ul
                    class="flex flex-col items-start justify-center w-full gap-8 px-4 text-right md:px-12 menu-list"
                >
                    <li class="overflow-hidden w-fit">
                        <a
                            href=""
                            class="inline-block text-4xl font-black tracking-widest translate-y-0 md:text-5xl menu-link text-neutral-500"
                        >service</a
                        >
                    </li>
                    <li class="overflow-hidden w-fit">
                        <a
                            href=""
                            class="inline-block text-4xl font-black tracking-widest translate-y-0 md:text-5xl menu-link text-neutral-500"
                        >statistique</a
                        >
                    </li>
                    <li class="overflow-hidden w-fit">
                        <a
                            href=""
                            class="inline-block text-4xl font-black tracking-widest translate-y-0 md:text-5xl menu-link text-neutral-500"
                        >temoignage</a
                        >
                    </li>
                    <li class="overflow-hidden w-fit">
                        <a
                            href=""
                            class="inline-block text-4xl font-black tracking-widest translate-y-0 md:text-5xl menu-link text-neutral-500"
                        >contact</a
                        >
                    </li>
                </ul>
            </div>
        </div>
        <!-- toggle button  -->
        <div class="absolute z-50 -translate-y-1/2 right-2 top-1/2" id="burger">
            <button
                aria-label="menu"
                class="flex items-center gap-4 px-2 py-1 border-2 rounded-full text-stone-400 border-stone-300 lg:hidden"
            >
                <span class="text-xs text-stone-600">Menu</span>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <line class="line1" x1="1" x2="48" y1="6" y2="6" />
                    <line class="line2" x1="1" x2="48" y1="12" y2="12" />
                    <line class="line3" x1="1" x2="48" y1="18" y2="18" />
                </svg>
            </button>
        </div>
    </nav>
</header>
<!-- navbar ends -->


@yield('content')


<!-- footer starts -->
<footer
    class="container grid items-center justify-between w-full grid-cols-1 gap-8 px-4 py-8 mx-auto border-t mt-7 md:grid-cols-3 justify-items-center border-neutral-500 md:p-6"
>
    <div class="uppercase text-neutral-500">
        2024 &copy; <span class="text-neutral-900">phonelab</span>
    </div>
    <div class="-order-1 md:order-none">
        <img
            src="{{asset('assets/images/logo/phonelab.svg')}}"
            class="w-20 h-fit"
            aria-hidden="false"
            title="logo de phonelab Store"
            alt="phonelab store"
        />
        <span class="sr-only">phonelabstore logo</span>
    </div>
    <div class="space-x-3">
        <button title="facebook">
            <a href="" aria-label="suiver nous sur facebook"
            ><svg
                    class="stroke-blue-700 size-6"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                    role="img"
                    viewBox="0 0 320 512"
                >
                    <path
                        d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"
                    />
                </svg>
            </a>
        </button>
        <button title="tiktok">
            <a href="" aria-label="suiver nous sur tiktok">
                <svg
                    class="text-blue-700 size-6"
                    aria-hidden="true"
                    role="img"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512"
                >
                    <path
                        d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"
                    />
                </svg>
            </a>
        </button>
        <button title="whatsapp">
            <a href="" aria-label="contacter nous sur whatsapp"
            ><svg
                    class="text-blue-700 size-6"
                    aria-hidden="true"
                    role="img"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512"
                >
                    <path
                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"
                    /></svg
                ></a>
        </button>
        <button title=" instagram">
            <a href="" aria-label="suiver nous sur instagram"
            ><svg
                    aria-hidden="true"
                    role="img"
                    class="text-blue-700 size-6"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512"
                >
                    <path
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                    /></svg
                ></a>
        </button>
    </div>
</footer>

<!-- footer ends -->

@include('layouts.scripts')

</body>
</html>
