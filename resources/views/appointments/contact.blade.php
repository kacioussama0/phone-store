@extends('layouts.app')
@section('title','brand de votre appareil')


@section('content')


    <section class="container mt-16 grid items-start px-4 mx-auto">
        <div class="container px-4 mx-auto">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="my-12">
                <h1 class="text-4xl">Quand devons-nous vous attendre ?</h1>
            </div>

            <h2 class="mb-3 text-2xl text-neutral-500">Choisissez une date</h2>

            <form action="" method="POST">

                @csrf

                <div id="dates"></div>

                <h2 class="mb-3 text-2xl text-neutral-500">Choisissez l'huere</h2>

                <label>
                    <input
                        type="radio"
                        name="time"
                        value="10am"
                        class="time-input"
                    />
                    <div class="time-card">
                        <span> 10am - 11am</span>
                    </div>
                </label>
                <label>
                    <input
                        type="radio"
                        name="time"
                        value="11am"
                        readonly
                        class="time-input"
                    />
                    <div class="time-card">
                        <span> 11am - 12am</span>
                    </div>
                </label>
                <label>
                    <input
                        type="radio"
                        name="time"
                        value="12am"
                        readonly
                        class="time-input"
                    />
                    <div class="time-card">
                        <span> 12am - 1pm</span>
                    </div>
                </label>
                <label>
                    <input
                        type="radio"
                        name="time"
                        value="1pm"
                        readonly
                        class="time-input"
                    />
                    <div class="time-card">
                        <span> 1pm - 2pm</span>
                    </div>
                </label>
                <label>
                    <input
                        type="radio"
                        name="time"
                        value="2pm"
                        readonly
                        class="time-input"
                    />
                    <div class="time-card">
                        <span> 2pm - 3pm</span>
                    </div>
                </label>
                <label>
                    <input
                        type="radio"
                        name="time"
                        value="3pm"
                        readonly
                        class="time-input"
                    />
                    <div class="time-card">
                        <span> 3pm - 4pm</span>
                    </div>
                </label>
                <label>
                    <input
                        type="radio"
                        name="time"
                        value="4pm"
                        readonly
                        class="time-input"
                    />
                    <div class="time-card">
                        <span> 4pm - 5pm</span>
                    </div>
                </label>
                <label>
                    <input
                        type="radio"
                        name="time"
                        value="5pm"
                        readonly
                        class="time-input"
                    />
                    <div class="time-card">
                        <span> 5pm - 6pm</span>
                    </div>
                </label>
                <label>
                    <input
                        type="radio"
                        name="time"
                        value="6pm"
                        readonly
                        class="time-input"
                    />
                    <div class="time-card">
                        <span> 6pm - 7pm</span>
                    </div>
                </label>


            <div
                class="container grid items-center content-center py-40 px-4 mx-auto"
            >
                <div class="mb-10">
                    <h2 class="text-4xl capitalize">entrez votre contact</h2>
                </div>

                    <div class="flex flex-wrap gap-6 md:flex-nowrap">
                        <div class="w-full">
                            <input
                                class="w-full input-field"
                                type="text"
                                id="first_name"
                                value=""
                                autocomplete="name"
                                aria-live="polite"
                                aria-describedby="name-validation"
                                name="first_name"
                                placeholder="votre nom"
                                aria-label="votre nom"
                            />
                            <p class="error-massage"></p>
                        </div>
                        <div class="w-full">
                            <input
                                class="w-full input-field"
                                autocomplete="name"
                                aria-live="polite"
                                value=""
                                id="last-name"
                                type="text"
                                name="last_name"
                                placeholder="votre Prenom"
                                aria-label="votre prenom"
                            />
                            <p class="error-massage"></p>
                        </div>
                    </div>
                    <div>
                        <input
                            class="w-full input-field"
                            type="email"
                            id="email"
                            value=""
                            aria-live="polite"
                            name="email"
                            aria-label="votre adresse email"
                            autocomplete="email"
                            placeholder="adresse email"
                        />
                        <p class="error-massage"></p>
                    </div>
                    <div>
                        <input
                            class="w-full input-field"
                            type="number"
                            id="phone"
                            aria-live="polite"
                            name="phone"
                            autocomplete="tel-national"
                            value=""
                            maxlength="10"
                            inputmode="numeric"
                            aria-label="votre numero de telephone"
                            placeholder="votre numero pour vous contactez"
                        />
                        <p class="error-massage"></p>
                        <p class="mt-2 text-neutral-400">
                            Si votre téléphone ne fonctionne pas, vous pouvez utiliser un numéro
                            alternatif
                        </p>
                    </div>
                    <p class="mt-1">
                        En continuant, vous acceptez
                        <span
                            class="underline transition-colors ease-linear text-neutral-700 hover:text-neutral-400 underline-offset-4"
                        ><a
                                tabindex="-1"
                                href="./store-terms-condition.html"
                                target="_blank"
                                rel="noopener noreferrer"
                            >les conditions d'utilisation</a
                            ></span
                        >
                        et la
                        <span
                            class="underline transition-colors ease-linear text-neutral-700 hover:text-neutral-400 underline-offset-4"
                        ><a
                                tabindex="-1"
                                href="./store-privacy-policy.html"
                                target="_blank"
                                rel="noopener noreferrer"
                            >politique de confidentialité</a
                            ></span
                        >.
                    </p>
                    <div
                        class="grid items-center w-full gap-6 my-7 md:justify-items-center md:grid-cols-2"
                    >
                        <a tabindex="-1" class="btn lg:w-fit" href="./damage-type.html">
                            <button class="flex">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="rotate-180"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    aria-hidden="true"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                                <span> previous </span>
                            </button>
                        </a>
                        <a href="" tabindex="-1" class="btn lg:w-fit">
                            <button class="flex">
                                <span> Envoyer </span>
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
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </button>
                        </a>
                    </div>
    </form>
            </div>
        </div>

    </section>



    <script>
        let date = new Date()
        function day(day) {
            const days = [
                "Dimanche",
                "Lundi",
                "Mardi",
                "Marcredi",
                "Jeudi",
                "Vendredi",
                "Samedi"
            ]

            return days[day];
        }

        function month(monthIndex) {
            const months = [
                "Janvier",
                "Février",
                "Mars",
                "Avril",
                "Mai",
                "Juin",
                "Juillet",
                "Août",
                "Septembre",
                "Octobre",
                "Novembre",
                "Décembre"
            ];

            return months[monthIndex];
        }



        let calandarForm = document.querySelector('#dates');


        for(let i = 1 ; i <= 6 ; i++) {
            let d = new Date(date.getTime() + (86400000 * i))
            let result = `${day(d.getDay())} ${d.getDate()} ${month(d.getMonth())}`

            calandarForm.innerHTML += `
                <label class="date-card" for=""><input type="radio" name="app-date" class="card-input-element" value="${d.getFullYear()}-${d.getMonth() + 1}-${d.getDate()}">${result}</label>
        `
        }





    </script>


@endsection
