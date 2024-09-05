@extends('layouts.app')
@section('title','Accueil')


@section('content')

<!-- landing page starts -->
<main
      class="container grid items-center justify-between grid-rows-1 px-4 mx-auto mt-28 gap-9 md:grid-cols-2 md:px-0 xl:mt-48"
      id="main-container"
    >
    
      <div class="col-start-1 mt-9 md:mt-0">
        <h1
          class="col-span-8 mb-8 text-4xl font-semibold uppercase md:text-[2.75rem] md:leading-snug lg:text-6xl"
        >
          On répare TOUT <br />pour vous
        </h1>
        <p class="!leading-normal text-neutral-500 lg:text-xl xl:w-9/12">
          Smartphone ou tablette, notre équipe prend en charge toutes les pannes
          de vos appareils et intervient avec nos ateliers mobiles à l’endroit
          de votre choix.
        </p>
        <div class="flex gap-4 mt-8 mb-4">
          <div
            class="flex justify-end -space-x-1.5 sm:justify-start lg:justify-end xl:justify-start"
          >
            <img
              class="object-cover object-top w-6 h-6 rounded-full bg-slate-100 ring-2 ring-white"
              loading="lazy"
              src="https://images.pexels.com/photos/6801642/pexels-photo-6801642.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              alt=""
            />
            <img
              class="object-cover object-top w-6 h-6 rounded-full bg-slate-100 ring-2 ring-white"
              loading="lazy"
              src="https://images.pexels.com/photos/6801642/pexels-photo-6801642.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              alt=""
            />
            <img
              class="object-cover object-top w-6 h-6 rounded-full bg-slate-100 ring-2 ring-white"
              loading="lazy"
              src="https://images.pexels.com/photos/6801642/pexels-photo-6801642.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              alt=""
            />
            <img
              class="object-cover object-top w-6 h-6 rounded-full bg-slate-100 ring-2 ring-white"
              loading="lazy"
              src="https://images.pexels.com/photos/6801642/pexels-photo-6801642.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              alt=""
            />
            <img
              class="object-cover object-top w-6 h-6 rounded-full bg-slate-100 ring-2 ring-white"
              loading="lazy"
              src="https://images.pexels.com/photos/6801642/pexels-photo-6801642.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              alt=""
            />
          </div>
          <div class="flex items-center gap-2 font-bold">
            <span>5 Rating on</span
            ><img
              class="size-6"
              loading="lazy"
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/1200px-Google_%22G%22_logo.svg.png"
              alt="rating on google"
            />
          </div>
        </div>
        <a class="flex items-center" href="/device-type.html">
          <button class="btn lg:w-fit">
            <span> Prendre rendez-vous </span>
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
      <div class="grid">
        <img
          class="hidden col-end-12 follow-mouse row-end-11 md:col-start-10 md:block md:w-44 md:self-end xl:col-start-9 xl:row-start-7 xl:w-52 xl:self-start"
          src="./assets/images/landing-page/apple-watch.webp"
          alt="apple-watch"
          loading="lazy"
        />
        <!-- <img
          class="z-20 hidden row-start-4 follow-mouse size-32 lg:col-start-7 lg:col-end-10 lg:row-end-6 lg:block"
          src="./assets/images/landing-page/airpodsMax.webp"
          alt="airpodsMax"
          loading="lazy"
        /> -->
        <img
          class="self-end hidden object-cover object-center col-start-8 col-end-13 row-end-7 follow-mouse size-full md:row-start-4 md:block"
          src="./assets/images/landing-page/macBook-Air.webp"
          alt="laptop macBook-Air"
          loading="lazy"
        />
        <img
          class="hidden col-start-7 follow-mouse w-28 self-baseline md:row-start-5 md:row-end-6 md:block lg:row-start-6 lg:row-end-auto lg:self-end xl:col-start-6 xl:row-start-6"
          src="./assets/images/landing-page/iphone.webp"
          alt="iphone 15"
          loading="lazy"
        />
      </div>
</main>
<!-- landing page ends -->

<!-- carousel starts -->

<div
    class="container px-4 mx-auto mt-28 xl:mt-48 swiper-container"
    role="region"
    aria-label="Product Carousel">
      <div>
        <div class="flex flex-col w-full md:justify-between">
          <h1 class="text-5xl font-bold uppercase md:text-6xl">nous service</h1>
        </div>
      </div>
      <div class="py-20 swiper-wrapper">
        <div class="items-center px-4 bg-white swiper-slide" lazy="true">
          <div class="grid items-center grid-cols-1 gap-10 md:grid-cols-2">
            <div>
              <img
                src="./assets/images/landing-page/iphone.webp"
                class="h-48 mx-auto md:min-h-72"
                loading="lazy"
                alt="iPhone"
              />
            </div>
            <div class="grid grid-flow-row-dense md:items-stretch gap-7">
              <h2
                class="items-stretch mb-8 text-4xl font-bold capitalize md:text-6xl md:self-end"
              >
                iPhone
              </h2>
              <p class="md:text-xl text-neutral-500 lg:w-9/12">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
                accusantium commodi debitis voluptates magnam repellat,
                molestiae ex, minima rerum soluta fugit facere asperiores illo.
              </p>
              <button
                class="md:self-start md:w-fit btn"
                aria-label="Repair my iPhone"
              >
                Repair my iPhone
              </button>
            </div>
          </div>
        </div>
        <div class="items-center px-4 bg-white swiper-slide" lazy="true">
          <div class="grid items-center grid-cols-1 gap-10 md:grid-cols-2">
            <div>
              <img
                src="./assets/images/landing-page/macBook-Air.webp"
                class="h-48 mx-auto md:min-h-72"
                loading="lazy"
                alt="laptop"
              />
            </div>
            <div class="grid grid-flow-row-dense md:items-stretch gap-7">
              <h2
                class="items-stretch mb-8 text-4xl font-bold capitalize md:text-6xl md:self-end"
              >
                laptop
              </h2>
              <p class="md:text-xl text-neutral-500 lg:w-9/12">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
                accusantium commodi debitis voluptates magnam repellat,
                molestiae ex, minima rerum soluta fugit facere asperiores illo.
              </p>
              <button
                class="md:self-start md:w-fit btn"
                aria-label="Repair my laptop"
              >
                Repair my laptop
              </button>
            </div>
          </div>
        </div>
        <div class="items-center px-4 bg-white swiper-slide" lazy="true">
          <div class="grid items-center grid-cols-1 gap-10 md:grid-cols-2">
            <div>
              <img
                src="./assets/images/landing-page/IPAD PRO.webp"
                class="h-48 mx-auto md:min-h-72"
                loading="lazy"
                alt="laptop"
              />
            </div>
            <div class="grid grid-flow-row-dense md:items-stretch gap-7">
              <h2
                class="items-stretch mb-8 text-4xl font-bold capitalize md:text-6xl md:self-end"
              >
                IPAD
              </h2>
              <p class="md:text-xl text-neutral-500 lg:w-9/12">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
                accusantium commodi debitis voluptates magnam repellat,
                molestiae ex, minima rerum soluta fugit facere asperiores illo.
              </p>
              <button
                class="md:self-start md:w-fit btn"
                aria-label="Repair my IPAD"
              >
                Repair my IPAD
              </button>
            </div>
          </div>
        </div>
        <div class="items-center px-4 bg-white swiper-slide" lazy="true">
          <div class="grid items-center grid-cols-1 gap-10 md:grid-cols-2">
            <div>
              <img
                src="./assets/images/landing-page/Controller-XL@2x.webp"
                class="h-48 mx-auto rotate-[15deg] md:min-h-72"
                loading="lazy"
                alt="console"
              />
            </div>
            <div class="grid grid-flow-row-dense md:items-stretch gap-7">
              <h2
                class="items-stretch mb-8 text-4xl font-bold capitalize md:text-6xl md:self-end"
              >
                console
              </h2>
              <p class="md:text-xl text-neutral-500 lg:w-9/12">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
                accusantium commodi debitis voluptates magnam repellat,
                molestiae ex, minima rerum soluta fugit facere asperiores illo.
              </p>
              <button
                class="md:self-start md:w-fit btn"
                aria-label="Repair my console"
              >
                Repair my conosle
              </button>
            </div>
          </div>
        </div>
        <div class="items-center px-4 bg-white swiper-slide" lazy="true">
          <div class="grid items-center grid-cols-1 gap-10 md:grid-cols-2">
            <div>
              <img
                src="./assets/images/landing-page/Controller-XL@2x.webp"
                class="h-48 mx-auto rotate-[15deg] md:min-h-72"
                loading="lazy"
                alt="usb stick"
              />
            </div>
            <div class="grid grid-flow-row-dense md:items-stretch gap-7">
              <h2
                class="items-stretch mb-8 text-4xl font-bold capitalize md:text-6xl md:self-end"
              >
                Data recovery
              </h2>
              <p class="md:text-xl text-neutral-500 lg:w-9/12">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
                accusantium commodi debitis voluptates magnam repellat,
                molestiae ex, minima rerum soluta fugit facere asperiores illo.
              </p>
              <button
                class="md:self-start md:w-fit btn"
                aria-label="Repair my console"
              >
                recover my Data
              </button>
            </div>
          </div>
        </div>
        <div class="swiper-pagination" aria-hidden="true"></div>
        <div class="swiper-button-next" aria-label="Next slide"></div>
        <div class="swiper-button-prev" aria-label="Previous slide"></div>
    </div>
</div>
<!-- carousel ends -->

<!-- unique approche starts -->
<main class="container px-4 py-3 mx-auto my-24">
    <div class="mb-11">
        <h1 class="text-4xl font-bold uppercase md:text-6xl">
            Approche Unique
        </h1>
    </div>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
        <!-- Item 1 -->
        <div
            class="grid content-between gap-6 p-4 border-2 border-black rounded-lg grid-row-3"
        >
            <div class="rounded-lg bg-fuchsia-100 size-fit">
                <div class="p-2">
                    <svg
                        class="stroke-fuchsia-800"
                        width="48"
                        height="48"
                        viewBox="0 0 48 48"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M4.08331 21.1339C4.15357 19.582 5.41394 18.3506 6.96679 18.3064C12.5504 18.1475 16.5423 18.1386 22.0223 18.3009C23.577 18.347 24.834 19.5845 24.8997 21.1385C25.1354 26.718 25.1175 30.7316 24.8913 36.3121C24.8284 37.8643 23.5796 39.1066 22.027 39.1608C16.5 39.3534 12.4873 39.3508 6.96371 39.1595C5.41205 39.1058 4.16291 37.866 4.09694 36.3148C3.86246 30.8007 3.82705 26.7939 4.08331 21.1339Z"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M3.98975 34.2808C4.01994 35.2941 4.05788 36.3428 4.10294 37.4495C4.16612 39.0012 5.41238 40.2452 6.96423 40.3019C12.4875 40.5036 16.5001 40.5063 22.0268 40.3032C23.5795 40.2461 24.8253 38.9998 24.8856 37.4472C24.9286 36.3401 24.9643 35.2918 24.9925 34.2808"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M7.60877 21.8802H21.3839C21.4769 27.307 21.4825 30.3011 21.3839 35.5663H7.60877C7.44198 30.2977 7.41882 27.3115 7.60877 21.8802Z"
                            stroke-width="1.125"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M7.60876 22.3829H21.3838"
                            stroke-width="1.125"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M7.92798 29.401H11.6321L13.8085 24.4576L15.9853 33.6529L17.1652 28.5466H21.3873"
                            stroke-width="1.125"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M30.6639 4.52118C29.0714 4.42404 25.7577 5.27828 25.2428 7.4752C24.5991 10.2213 25.7262 12.2185 28.8927 14.4653C32.0592 16.712 34.4743 18.3347 34.5816 23.9517"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M34.5816 23.9518C34.6889 18.3348 37.104 16.7121 40.2705 14.4653C43.437 12.2186 44.5642 10.2214 43.9204 7.47527C43.5133 5.73814 41.3562 4.84048 39.6839 4.58887"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M38.1034 4.51381C38.1034 5.73179 38.809 6.71916 39.6794 6.71916V2.30847C38.809 2.30847 38.1034 3.29584 38.1034 4.51381Z"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M38.4521 4.51376C38.4521 5.19291 38.8456 5.74347 39.3309 5.74347V3.28406C38.8456 3.28406 38.4521 3.83462 38.4521 4.51376Z"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M30.99 4.51381C30.99 5.73179 30.3044 6.71916 29.4586 6.71916V2.30847C30.3044 2.30847 30.99 3.29584 30.99 4.51381Z"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M30.6509 4.51376C30.6509 5.19291 30.2686 5.74347 29.797 5.74347V3.28406C30.2686 3.28406 30.6509 3.83462 30.6509 4.51376Z"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M34.5785 23.5433C34.5785 26.1938 35.3783 29.77 33.4866 33.2507C32.0644 35.5403 28.065 34.11 29.1342 29.1804C30.4707 23.0185 38.4165 25.3187 38.4165 32.2483C38.4165 38.0521 39.4912 46.9527 22.0817 45.5422C19.0415 45.2959 14.3994 43.4366 14.3995 40.6094"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                    </svg>
                </div>
            </div>
            <h1 class="text-4xl font-bold">Diagnostic gratuit</h1>
            <p class="text-neutral-500">
                Nous déterminerons ce qui ne va pas afin de le réparer du premier
                coup.
            </p>
        </div>
        <!-- Item 2 -->
        <div
            class="grid content-between gap-6 p-4 border-2 border-black rounded-lg grid-row-3"
        >
            <div class="rounded-lg bg-fuchsia-100 size-fit">
                <div class="p-2">
                    <svg
                        class="stroke-fuchsia-800"
                        width="48"
                        height="48"
                        viewBox="0 0 48 48"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M42.3935 24.4122C42.5187 34.0713 34.7901 42.003 25.131 42.1282C19.1637 42.2056 13.8556 39.2853 10.6403 34.7641"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M5.99016 23.5981C5.86494 13.9391 13.5936 6.00738 23.2526 5.88215C29.3664 5.8029 34.7881 8.87017 37.9762 13.5819"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M22.0174 19.4211C22.4554 18.9832 22.4554 18.2731 22.0174 17.8352L18.6108 14.3667C18.1689 13.9248 19.0236 13.2015 19.6482 13.1797C19.8242 13.1736 20.0058 13.1724 20.1967 13.1724C23.6478 13.1724 26.4454 15.97 26.4454 19.4211C26.4454 20.2897 26.2682 21.117 25.9479 21.8686L33.4603 29.705C34.3522 30.6354 34.3291 32.1104 33.4084 33.0123C32.474 33.9276 30.9724 33.9046 30.0665 32.9613L22.6032 25.1896C21.8625 25.4989 21.0496 25.6698 20.1967 25.6698C16.7456 25.6698 13.948 22.8721 13.948 19.4211C13.948 19.2563 13.949 19.0984 13.9533 18.945C13.9712 18.3164 14.8156 17.3906 15.2602 17.8352L18.6108 21.2987C19.0487 21.7366 19.7588 21.7366 20.1967 21.2987L22.0174 19.4211Z"
                            stroke-width="1.125"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M19.5464 13.2051C18.9219 13.2269 17.8379 14.2079 18.4755 14.9408L21.5042 17.9697C21.9421 18.4077 21.9421 19.1177 21.5042 19.5557L19.5464 21.5387M15.2304 17.8393C14.3398 17.4511 13.9712 18.8044 13.9533 19.433C13.949 19.5864 13.948 19.7443 13.948 19.9091C13.948 23.3602 16.7456 26.1578 20.1967 26.1578C20.6887 26.1578 21.1674 26.1009 21.6266 25.9934C22.2296 25.8523 22.886 25.972 23.315 26.4188L30.0665 33.4493C30.9724 34.3926 32.474 34.4156 33.4084 33.5003C34.3291 32.5984 34.4825 30.7357 33.5905 29.8053"
                            stroke-width="1.125"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M31.6501 30.9697C31.4925 30.9697 31.3647 31.0975 31.3647 31.2551C31.3647 31.4127 31.4925 31.5405 31.6501 31.5405C31.8078 31.5405 31.9355 31.4127 31.9355 31.2551C31.9355 31.1231 31.8459 31.0121 31.7242 30.9794"
                            stroke-width="1.125"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M39.4927 14.5455L32.2889 13.6423L38.5462 13.5612L37.6234 6.47598L39.4927 14.5455Z"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M9.54573 33.797L17.0551 34.6539L11.0565 35.3664L11.7858 42.2369L9.54573 33.797Z"
                            stroke-width="1.5"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                    </svg>
                </div>
            </div>
            <h1 class="text-4xl font-bold">Réparations rapides</h1>
            <p class="text-neutral-500">
                Nous vous informerons de la durée prévue lors de votre rendez-vous.
            </p>
        </div>
        <!-- Item 3 -->
        <div
            class="grid content-between gap-6 p-4 border-2 border-black rounded-lg grid-row-3"
        >
            <div class="rounded-lg bg-fuchsia-100 size-fit">
                <div class="p-2">
                    <svg
                        width="48"
                        class="stroke-fuchsia-800"
                        height="48"
                        viewBox="0 0 48 48"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M15.0448 28.2915C13.6088 32.396 11.3608 34.306 8.28748 38.6107L15.5763 37.3782L19.1303 42.822C21.7209 38.8188 23.266 36.277 24.7008 32.6367"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M23.6348 35.4557C25.2618 38.9964 25.9065 41.1468 28.0695 45.4754L31.1417 39.1598L37.4666 40.5897C35.4366 36.8198 33.4671 33.4733 32.1038 30.0618"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M21.8554 3.69637C22.9896 2.39623 25.0223 2.4098 26.1564 3.70994C26.8871 4.54759 28.0424 4.89562 29.1115 4.59145L30.2045 4.2805C31.6962 3.85608 33.1798 4.97646 33.1798 6.52744C33.1798 7.64425 33.9703 8.60486 35.0662 8.81986L35.2758 8.86096C36.8199 9.16388 37.7415 10.7601 37.2318 12.2488L37.1145 12.5913C36.7616 13.622 37.0137 14.7635 37.7679 15.5498L38.1664 15.9653C39.3123 17.1598 39.2493 19.0637 38.027 20.1798L37.7769 20.4082C37.031 21.0893 36.7795 22.1582 37.1433 23.1005C37.6923 24.522 36.8245 26.0945 35.3292 26.3878L34.988 26.4547C33.8946 26.6692 33.0364 27.5407 32.8219 28.6342C32.4938 30.3064 30.7595 31.3334 29.1472 30.7814C28.0665 30.4114 26.8693 30.7321 26.1183 31.593C24.9981 32.8772 23.002 32.8772 21.8817 31.593C21.1308 30.7321 19.9336 30.4114 18.8528 30.7814L18.7239 30.8256C17.1798 31.3542 15.5243 30.3984 15.2101 28.7969L15.1867 28.6776C14.9696 27.5712 14.0468 26.7419 12.9236 26.6438C11.3184 26.5036 10.2513 24.9188 10.7251 23.3787L10.8897 22.8437C11.2316 21.7324 10.8244 20.5176 9.89102 19.8243C8.43029 18.7395 8.40807 16.5362 9.8688 15.4514C10.8167 14.7474 11.1953 13.4961 10.8128 12.379C10.2838 10.834 11.2321 9.15368 12.8347 8.8393L12.9523 8.81623C14.0589 8.59915 14.8889 7.67699 14.9887 6.55374C15.1314 4.94757 16.7181 3.8814 18.2591 4.35619L18.8729 4.54531C19.9475 4.8764 21.1163 4.54372 21.8554 3.69637Z"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M32.2647 29.9812C31.9493 31.5891 29.9297 32.4789 28.3795 31.9481C27.4294 31.6228 26.6772 31.9393 26.0491 32.626C25.8038 32.8941 25.5461 33.1527 25.256 33.3716C24.9426 33.6081 24.7618 33.7779 24.2807 34.0987"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M34.4512 17.9609C34.2665 23.7347 29.941 28.282 24.1672 28.0973C18.3934 27.9126 13.3577 23.0656 13.5424 17.2918C13.7272 11.518 18.5639 6.78807 24.3377 6.97282"
                            stroke-width="1.125"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M17.9529 25.8241L25.2898 19.0602C25.9591 19.3453 26.6957 19.5032 27.4691 19.5032C30.542 19.5032 33.0331 17.0121 33.0331 13.9392C33.0331 13.7692 33.032 13.6075 33.0265 13.4508C33.0071 12.8947 32.3707 12.7228 31.9772 13.1163L29.2476 15.8459C28.8577 16.2358 28.2254 16.2358 27.8355 15.8459L25.5325 13.5428C25.1425 13.1529 25.1425 12.5206 25.5325 12.1307L28.2336 9.42954C28.6295 9.03365 28.4527 8.39594 27.8931 8.38C27.7565 8.37611 27.6159 8.37524 27.4691 8.37524C24.3962 8.37524 21.9052 10.8663 21.9052 13.9392C21.9052 14.6986 22.0573 15.4225 22.3328 16.082L15.1215 22.6709"
                            stroke-width="1.125"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M18.1459 26.0172L24.6759 20.0985C25.1098 19.7053 25.7293 19.6185 26.2995 19.7514C26.7067 19.8462 27.131 19.8964 27.567 19.8964C30.6399 19.8964 33.131 17.4053 33.131 14.3324C33.131 14.1624 33.1299 14.0007 33.1244 13.844C33.105 13.2879 32.6531 12.3145 31.9414 13.1597"
                            stroke-width="1.125"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M28.3359 8.56726L28.7675 9.14278L26.0064 12.1508C25.5552 12.6424 25.5183 13.3858 25.9187 13.9196V13.9196"
                            stroke-width="1.125"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                    </svg>
                </div>
            </div>
            <h1 class="text-4xl font-bold">Garantie limitée de 1 an.</h1>
            <p class="text-neutral-500">
                Nos experts hautement qualifiés garantissent leurs réparations.
            </p>
        </div>
        <!-- Item 4 -->
        <div
            class="grid content-between gap-6 p-4 border-2 border-black rounded-lg grid-row-3"
        >
            <div class="rounded-lg bg-fuchsia-100 size-fit">
                <div class="p-2">
                    <svg
                        width="48"
                        class="stroke-fuchsia-800"
                        height="48"
                        viewBox="0 0 48 48"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M15.0448 28.2915C13.6088 32.396 11.3608 34.306 8.28748 38.6107L15.5763 37.3782L19.1303 42.822C21.7209 38.8188 23.266 36.277 24.7008 32.6367"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M23.6348 35.4557C25.2618 38.9964 25.9065 41.1468 28.0695 45.4754L31.1417 39.1598L37.4666 40.5897C35.4366 36.8198 33.4671 33.4733 32.1038 30.0618"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M21.8554 3.69637C22.9896 2.39623 25.0223 2.4098 26.1564 3.70994C26.8871 4.54759 28.0424 4.89562 29.1115 4.59145L30.2045 4.2805C31.6962 3.85608 33.1798 4.97646 33.1798 6.52744C33.1798 7.64425 33.9703 8.60486 35.0662 8.81986L35.2758 8.86096C36.8199 9.16388 37.7415 10.7601 37.2318 12.2488L37.1145 12.5913C36.7616 13.622 37.0137 14.7635 37.7679 15.5498L38.1664 15.9653C39.3123 17.1598 39.2493 19.0637 38.027 20.1798L37.7769 20.4082C37.031 21.0893 36.7795 22.1582 37.1433 23.1005C37.6923 24.522 36.8245 26.0945 35.3292 26.3878L34.988 26.4547C33.8946 26.6692 33.0364 27.5407 32.8219 28.6342C32.4938 30.3064 30.7595 31.3334 29.1472 30.7814C28.0665 30.4114 26.8693 30.7321 26.1183 31.593C24.9981 32.8772 23.002 32.8772 21.8817 31.593C21.1308 30.7321 19.9336 30.4114 18.8528 30.7814L18.7239 30.8256C17.1798 31.3542 15.5243 30.3984 15.2101 28.7969L15.1867 28.6776C14.9696 27.5712 14.0468 26.7419 12.9236 26.6438C11.3184 26.5036 10.2513 24.9188 10.7251 23.3787L10.8897 22.8437C11.2316 21.7324 10.8244 20.5176 9.89102 19.8243C8.43029 18.7395 8.40807 16.5362 9.8688 15.4514C10.8167 14.7474 11.1953 13.4961 10.8128 12.379C10.2838 10.834 11.2321 9.15368 12.8347 8.8393L12.9523 8.81623C14.0589 8.59915 14.8889 7.67699 14.9887 6.55374C15.1314 4.94757 16.7181 3.8814 18.2591 4.35619L18.8729 4.54531C19.9475 4.8764 21.1163 4.54372 21.8554 3.69637Z"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M32.2647 29.9812C31.9493 31.5891 29.9297 32.4789 28.3795 31.9481C27.4294 31.6228 26.6772 31.9393 26.0491 32.626C25.8038 32.8941 25.5461 33.1527 25.256 33.3716C24.9426 33.6081 24.7618 33.7779 24.2807 34.0987"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M34.4512 17.9609C34.2665 23.7347 29.941 28.282 24.1672 28.0973C18.3934 27.9126 13.3577 23.0656 13.5424 17.2918C13.7272 11.518 18.5639 6.78807 24.3377 6.97282"
                            stroke-width="1.125"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M17.9529 25.8241L25.2898 19.0602C25.9591 19.3453 26.6957 19.5032 27.4691 19.5032C30.542 19.5032 33.0331 17.0121 33.0331 13.9392C33.0331 13.7692 33.032 13.6075 33.0265 13.4508C33.0071 12.8947 32.3707 12.7228 31.9772 13.1163L29.2476 15.8459C28.8577 16.2358 28.2254 16.2358 27.8355 15.8459L25.5325 13.5428C25.1425 13.1529 25.1425 12.5206 25.5325 12.1307L28.2336 9.42954C28.6295 9.03365 28.4527 8.39594 27.8931 8.38C27.7565 8.37611 27.6159 8.37524 27.4691 8.37524C24.3962 8.37524 21.9052 10.8663 21.9052 13.9392C21.9052 14.6986 22.0573 15.4225 22.3328 16.082L15.1215 22.6709"
                            stroke-width="1.125"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M18.1459 26.0172L24.6759 20.0985C25.1098 19.7053 25.7293 19.6185 26.2995 19.7514C26.7067 19.8462 27.131 19.8964 27.567 19.8964C30.6399 19.8964 33.131 17.4053 33.131 14.3324C33.131 14.1624 33.1299 14.0007 33.1244 13.844C33.105 13.2879 32.6531 12.3145 31.9414 13.1597"
                            stroke-width="1.125"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                        <path
                            d="M28.3359 8.56726L28.7675 9.14278L26.0064 12.1508C25.5552 12.6424 25.5183 13.3858 25.9187 13.9196V13.9196"
                            stroke-width="1.125"
                            stroke-miterlimit="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></path>
                    </svg>
                </div>
            </div>
            <h1 class="text-4xl font-bold">Unique Approach</h1>
            <p class="text-neutral-500">
                Smartphone ou tablette, notre équipe prend en charge toutes les
                pannes de vos appareils et intervient.
            </p>
        </div>
    </div>
</main>
<!-- unique approche ends -->


<!-- statistic starts -->
<main
    class="container grid items-center gap-20 px-4 py-3 mx-auto mt-24 xl:mt-44 md:justify-items-end md:relative md:gap-3 lg:gap-20 lg:grid-cols-2"
>
    <div
        class="self-start w-full md:mr-14 lg:mr-0 lg:order-none md:order-last md:size-56 lg:size-full"
    >
        <img
            class="md:size-full xl:size-10/12 md:-mt-[3.25rem] lg:mt-0"
            src="./assets/images/landing-page/survey.webp"
            alt="trophies "
        />
    </div>
    <div class="md:order-first lg:order-none">
        <h1 class="mb-8 text-3xl font-bold uppercase lg:text-3xl">
            Nous transformons les appareils de cassés à brillants
        </h1>

        <div class="grid gap-6 md:grid-cols-2 counters" id="container">
            <div class="">
                <h1 class="mb-5 text-4xl font-bold">
                    <span class="counter" data-count="13">0</span>
                </h1>
                <p class="text-neutral-500">
                    Years of Expertise in Device Repair, I Deliver Unmatched Quality
                    and Reliability
                </p>
            </div>
            <div>
                <h1 class="mb-5 text-4xl font-bold lg:text-4xl">
                    <span class="counter" data-count="5">0</span>
                </h1>
                <p class="text-neutral-500">
                    Our average rating on Google reviews from clients
                </p>
            </div>
            <div>
                <h1 class="mb-5 text-4xl font-bold lg:text-4xl">
                    <span class="counter" data-count="10000">0</span>
                </h1>
                <p class="text-neutral-500">
                    Offrant la satisfaction clientèle avec chaque appareil réparé
                    depuis notre création en 2019
                </p>
            </div>
        </div>
    </div>
</main>
<!-- statistic ends -->
<!-- partners starts -->
    <div class="mx-auto my-28">
      <div class="container px-4" px-4>
        <h1 class="mb-8 text-4xl font-bold uppercase md:text-6xl">
          nous partenaire
        </h1>
      </div>
      <div class="flex items-center w-full h-40 overflow-hidden border marquee">
        <img
          class="object-cover object-top rounded-md bg-slate-100 ring-2 ring-white"
          loading="lazy"
          src="https://images.pexels.com/photos/6801642/pexels-photo-6801642.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          alt=""
        />
        *
        <img
          class="object-cover object-top rounded-md bg-slate-100 ring-2 ring-white"
          loading="lazy"
          src="https://images.pexels.com/photos/6801642/pexels-photo-6801642.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          alt=""
        />
        *
        <img
          class="object-cover object-top rounded-md bg-slate-100 ring-2 ring-white"
          loading="lazy"
          src="https://images.pexels.com/photos/6801642/pexels-photo-6801642.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          alt=""
        />
        *
        <img
          class="object-cover object-top rounded-md bg-slate-100 ring-2 ring-white"
          loading="lazy"
          src="https://images.pexels.com/photos/6801642/pexels-photo-6801642.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          alt=""
        />
      </div>
    </div>
    <!-- partners ends -->

    <!-- testimonails starts -->
    <div class="container px-4 mx-auto my-28">
      <h1 class="w-full mb-8 text-4xl font-black uppercase md:hidden">
        testimonails
      </h1>
      <div class="relative overflow-hidden md:overflow-visible">
        <h1
          class="absolute hidden font-black uppercase w-fit md:block md:text-7xl md:right-[15%] md:top-1/2 -z-50 lg:right-[29%]"
        >
          testimonails
        </h1>
        <div class="w-56 mx-auto swiper-testimonials h-80 lg:w-72 lg:h-96">
          <div class="swiper-wrapper">
            <div
              class="swiper-slide !grid gap-y-6 rounded-md border border-neutral-900 bg-white p-4 text-gray-600"
            >
              <div>
                <p id="review-text">
                  Great product! Really satisfied.Great product! Really
                  satisfied.mat product! Really satisfied.at product! Really
                  satisfied.at
                </p>
              </div>
              <div class="self-end border-t border-neutral-700">
                <h3
                  id="reviewer-name"
                  class="mt-4 text-xl font-semibold uppercase text-neutral-800"
                >
                  John Doe
                </h3>
              </div>
            </div>
            <div
              class="swiper-slide !grid gap-y-6 rounded-md border border-neutral-900 bg-white p-4 text-gray-600"
            >
              <div>
                <p id="review-text">
                  Great product! Really satisfied.Great product! Really
                  satisfied.mat product! Really satisfied.at product! Really
                  satisfied.at
                </p>
              </div>
              <div class="self-end border-t border-neutral-700">
                <h3
                  id="reviewer-name"
                  class="mt-4 text-xl font-semibold uppercase text-neutral-800"
                >
                  John Doe
                </h3>
              </div>
            </div>
            <div
              class="swiper-slide z-50 !grid gap-y-6 rounded-md border border-neutral-900 bg-white p-4 text-gray-600"
            >
              <div>
                <p id="review-text">
                  Great product! Really satisfied.Great product! Really
                  satisfied.mat product! Really satisfied.at product! Really
                  satisfied.at
                </p>
              </div>
              <div class="self-end border-t border-neutral-700">
                <h3
                  id="reviewer-name"
                  class="mt-4 text-xl font-semibold uppercase text-neutral-800"
                >
                  John Doe
                </h3>
              </div>
            </div>
            <div
              class="swiper-slide z-50 !grid gap-y-6 rounded-md border border-neutral-900 bg-white p-4 text-gray-600"
            >
              <div>
                <p id="review-text">
                  Great product! Really satisfied.Great product! Really
                  satisfied.mat product! Really satisfied.at product! Really
                  satisfied.at
                </p>
              </div>
              <div class="self-end border-t border-neutral-700">
                <h3
                  id="reviewer-name"
                  class="mt-4 text-xl font-semibold uppercase text-neutral-800"
                >
                  John Doe
                </h3>
              </div>
            </div>
            <div
              class="swiper-slide z-20 !grid gap-y-6 rounded-md border border-neutral-900 bg-white p-4 text-gray-600"
            >
              <div>
                <p id="review-text">
                  Great product! Really satisfied.Great product! Really
                  satisfied.mat product! Really satisfied.at product! Really
                  satisfied.at
                </p>
              </div>
              <div class="self-end border-t border-neutral-700">
                <h3
                  id="reviewer-name"
                  class="mt-4 text-xl font-semibold uppercase text-neutral-800"
                >
                  John Doe
                </h3>
              </div>
            </div>
            <div
              class="swiper-slide z-20 !grid gap-y-6 rounded-md border border-neutral-900 bg-white p-4 text-gray-600"
            >
              <div>
                <p id="review-text">
                  Great product! Really satisfied.Great product! Really
                  satisfied.mat product! Really satisfied.at product! Really
                  satisfied.at
                </p>
              </div>
              <div class="self-end border-t border-neutral-700">
                <h3
                  id="reviewer-name"
                  class="mt-4 text-xl font-semibold uppercase text-neutral-800"
                >
                  John Doe
                </h3>
              </div>
            </div>
          </div>
        </div>
        <div
          class="absolute !top-[90%] right-14 !text-sm rotate-[45deg] button-next"
          aria-label="Next slide"
        >  <svg
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
            </svg></div>
        <div
          class="absolute !top-[90%]  rotate-[46deg] button-prev"
          aria-label="Previous slide"
        >  <svg
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
        </div>
      </div>
    </div>
    <!-- testimonails ends -->
    

@endsection
