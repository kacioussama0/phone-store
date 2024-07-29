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


        @if(count($brands))
            @foreach($brands as $brand)
                <div class="phone-cards">
                    <a
                        href="#"
                        aria-label=""
                        title=""
                    >
                        <img
                            src="{{$brand->thumbnail}}"
                            alt="{{"Image " . $brand->name}}"
                        />
                        <span>{{$brand->name}}</span>
                    </a>
                </div>

            @endforeach
        @endif
        </div>
    </section>



@endsection
