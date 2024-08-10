@extends('layouts.app')
@section('title','brand de votre appareil')


@section('content')

    <section
        class="grid grid-cols-1 px-2 mx-auto md:min-h-[80dvh] lg:grid-cols-3 contianer md:px-0"
    >
        <div class="grid content-start p-4 md:col-span-2">
        <span
        ><svg
                class="size-12"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"
            >
            <path
                fill="#63E6BE"
                d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"
            /></svg
            ></span>
            <div class="mt-4 mb-12">
                <p class="text-3xl">Tout est prêt, {{$appointment->last_name}} à bientôt !</p>
                <p class="mt-2 text-xl text-neutral-400 mb-7">
                    Nous avons envoyé un e-mail de confirmation.
                </p>
                <img
                    class="object-cover w-full rounded-lg h-52"
                    src="./assets//images/landing-page/phonelabstore-frontdoor.jpg"
                    alt=""
                />
            </div>
            <div
                class="grid items-center w-full mb-7 md:justify-items-center md:grid-cols-2"
            >
                <a href="" class="mt-8">
                    <button class="btn">
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
                            class="lucide lucide-phone"
                        >
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"
                            />
                        </svg>
                        <span> 0561022630 </span>
                    </button>
                </a>
                <a href="" class="mt-8">
                    <button class="btn md:w-fit md:mx-auto">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-map-pin"
                        >
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        <span> direction </span>
                    </button>
                </a>
            </div>
        </div>
        <div class="px-5 lg:border-l py-7 lg:border-l-slate-300">
            <div class="py-6 border-b border-b-slate-300">
                <p class="mb-3 text-xl capitalize">résumé</p>
                <ul>
                    @foreach($issues as $issue)
                        <li>{{$issue}}</li>
                    @endforeach
                </ul>
                <p class="capitalize text-neutral-400">{{$appointment->device->name}}</p>
            </div>
            <div class="flex flex-col gap-4 py-6">
                <h3 class="text-xl capitalize">détails des prix</h3>
                <div class="flex justify-between">
                    <p>prix</p>
                    <p>0 CHF</p>
                </div>
                <p class="p-2 text-xs rounded-lg w-fit text-neutral-400 bg-slate-100">
            <span class="text-neutral-900"
            >Pas de paiement avant la réparation</span
            >—nous allons la diagnostiquer gratuitement, puis examiner vos
                    options
                </p>
            </div>
            <div>
                <div class="flex items-start gap-4">
            <span
            ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="18"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lucide lucide-clock-5"
                >
                <circle cx="12" cy="12" r="10" />
                <polyline points="12 6 12 12 14.5 16" /></svg
                ></span>
                    <div>
                        <p class="font-bold">date et heure</p>
                        <p class="text-neutral-400">{{$appointment->appointment_date . ' ' . $appointment->appointment_time}}</p>
                    </div>
                </div>
            </div>
            <div class="flex gap-4 mt-7">
                <div>
            <span
            ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lucide lucide-book-user"
                >
                <path d="M15 13a3 3 0 1 0-6 0" />
                <path
                    d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"
                />
                <circle cx="12" cy="8" r="2" /></svg
                ></span>
                </div>
                <div>
                    <p class="font-bold">Coordonnées</p>
                    <p class="text-neutral-400">{{$appointment->first_name . ' ' . $appointment->last_name}}</p>
                    <p class="text-neutral-400">{{$appointment->email}}</p>
                    <p class="text-neutral-400">{{$appointment->phone}}</p>
                </div>
            </div>
        </div>
    </section>

@endsection
