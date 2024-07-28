@extends('layouts.app')
@section('title','brand de votre appareil')


@section('content')

    <section class="container mt-16 grid items-start px-4 mx-auto md:h-[80dvh]">
        <div class="self-end mx-auto mb-12 space-y-8 text-center">
            <h1 class="text-2xl font-bold md:text-4xl">
                Quel est le brand de votre appareil ?
            </h1>
            <p class="mx-auto mt-2 text-neutral-400 lg:w-1/2">
                Nous proposons une large gamme de services de réparation pour
                smartphones de toutes marques, notamment la réparation d'écrans, de
                batteries, de connecteurs de charge, de caméras, et bien plus encore
            </p>
        </div>
        <div
            class="grid items-center grid-cols-2 gap-4 mt-6 sm:grid-cols-3 md:grid-cols-4"
        >
            <div class="phone-cards">
                <a
                    href="device-details.html"
                    aria-label="Continuez votre demande sur les détails de l'iPhone"
                    title="Détails de la réparation des appareils iPhone"
                >
                    <img
                        src="{{asset('assets/images/landing-page/iphone.webp')}}"
                        alt="Image de l'iPhone 15"
                    />
                    <span>iPhone</span>
                </a>
            </div>

            <div class="phone-cards">
                <a
                    href="device-details.html"
                    aria-label="Continuez votre demande sur les détails de laptop"
                    title="Détails de la réparation des appareils laptop"
                >
                    <img
                        src="{{asset('assets/images/landing-page/macBook-Air.webp')}}"
                        alt="image de macbook"
                    />
                    <span>macbook</span>
                    <input
                        type="radio"
                        name="laptop"
                        id="laptop"
                        readonly
                        value="laptop"
                        hidden
                        aria-hidden="true"
                    />
                </a>
            </div>
            <div class="phone-cards">
                <a
                    href="device-details.html"
                    aria-label="Continuez votre demande sur les détails de ipad"
                    title="Détails de la réparation des appareils ipad"
                >
                    <img
                        src="{{asset('assets/images/landing-page/IPAD PRO.webp')}}"
                        class="size-full"
                        alt="image de ipad"
                    />
                    <span>ipad</span>
                </a>
            </div>
            <div class="phone-cards">
                <a
                    href="device-details.html"
                    aria-label="Continuez votre demande sur les détails de console"
                    title="Réparation des console"
                >
                    <img
                        src="{{asset('assets/images/landing-page/Controller-XL@2x.webp')}}"
                        class="size-full"
                        alt="image de manette console"
                    />
                    <span>console</span>
                </a>
            </div>

            <div class="phone-cards col-span-full">
                <a
                    class="size-full"
                    href="./damage-type.html"
                    aria-label="Explore options for other devices"
                    title="Réparation des appareils Huawei"
                >
                    <div class="text-3xl text-black" aria-hidden="true">+</div>
                    <span>d'autre chose</span>
                </a>
            </div>
        </div>
    </section>

@endsection
