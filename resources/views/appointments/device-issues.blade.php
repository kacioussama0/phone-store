@extends('layouts.app')
@section('title','brand de votre appareil')


@section('content')

    <section class="container mt-16 grid items-start px-4 mx-auto">
        <div class="self-end mx-auto mb-12 space-y-8 text-center">
            <h1 class="text-2xl font-bold md:text-4xl">
                Quel est le Probleme de votre appareil ?
            </h1>
            <p class="mx-auto mt-2 text-neutral-400 lg:w-1/2">
                Nous proposons une large gamme de services de réparation pour smartphones de toutes marques, notamment la réparation d'écrans, de batteries, de connecteurs de charge, de caméras, et bien plus encore
            </p>
        </div>
        <form action="" method="GET" id="issues-form">
        <div
            class="grid items-center grid-cols-2 gap-4 mt-6 sm:grid-cols-3 md:grid-cols-4"
        >


        @if(count($issues))

                    @foreach($issues as $issue)


                        <label
                            class="card"
                            tabindex="1"
                            aria-label="Sélectionnez un problème {{$issue->name}}"
                        >
                            <input class="card__input" name="issues[]"  type="checkbox" value="{{$issue->id}}" />
                            <div class="card__body">
                                <div class="card__body-cover">
                                    <img
                                        class="card__body-cover-image"
                                        src="{{asset('storage/' . $issue->thumbnail)}}"
                                        alt="Icône de problème {{$issue->name}}"
                                    />
                                    <span class="card__body-cover-checkbox">
                  <svg
                      class="card__body-cover-checkbox--svg"
                      viewBox="0 0 12 10"
                      aria-hidden="true"
                  >
                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                  </svg>
                </span>
                                </div>
                                <header class="card__body-header">
                                    <h2 class="card__body-header-title">{{$issue->name}}</h2>
                                </header>
                            </div>
                        </label>

                    @endforeach

        @endif
        </div>
        </form>
        <div
            class="grid items-center w-full mb-7 md:justify-items-center md:grid-cols-2"
        >
            <a href="#"  class="order-2 mt-8 md:order-none" id="return">
                <button
                    tabindex="7"
                    class="btn md:w-fit md:mx-auto"
                    aria-label="revenir a la page pour choissir votre l'appareil"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="rotate-180"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        aria-hidden="true"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                    <span> Précédent </span>
                </button>
            </a>
            <a href="#" id="continue" class="mt-8">
                <button
                    tabindex="8"
                    class="btn"
                    aria-label="Aller à l'étape suivante"
                >
                    <span> Continuer </span>
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
    </section>

    <script>

        const issues = document.querySelector('input[name=issues]')
        const continueURL = document.querySelector('#continue');
        const continueBtn = document.querySelector('#continue button');
        let checkedIds = "";
        const form = document.querySelector('#issues-form');
        form.addEventListener('change', function() {
            checkedIds = "";
            const checkboxs = document.querySelectorAll('input[type=checkbox]');
            checkboxs.forEach(checkbox => {
                if(checkbox.checked){
                    checkedIds += checkbox.value + "-"
                }
            })

            if(checkedIds.endsWith('-')) checkedIds = checkedIds.slice(0,checkedIds.length - 1)

            if(!checkedIds) {
                continueURL.href = "#"
                continueBtn.disabled = true
            }else {
                continueBtn.disabled = false
                continueURL.href =  "{{url('appointments/brand-type/' . $brandId . '/device-type/' . $typeId . '/device-model/' . $device->id)}}" + `/issues/${checkedIds}`
            }

        });

    </script>


@endsection
