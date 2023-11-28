<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alsav Edutech | MainPage</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="description" content="This website for industrial materi">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('tema/assets/style.css') }}">
</head>

<body>
    <div id="bg-loader" class="h-screen flex">
        <div id="loader" class="m-auto"></div>
    </div>

    <div id="app" class="hidden">
        <nav class="bg-dark">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="flex h-[70px] justify-between items-center ">
                    <a class="items-center flex" href="{{ url('/') }}">
                        <img width="90px" height="90px" src='{{asset("tema/assets/images/Logos.webp")}}' loading="lazy" alt="logo">
                    </a>
                    <h1 class="text-2xl font-semibold text-white uppercase">Training Class - <span
                            class="text-[#E0B453]">Codekidz</span></h1>

                            <a href="{{ route('logout') }}" class="flex gap-3 items-center" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M9 4.49999H8C5.643 4.49999 4.464 4.49999 3.732 5.23199C3 5.96399 3 7.14299 3 9.49999V9.99999M9 19.5H8C5.643 19.5 4.464 19.5 3.732 18.768C3 18.035 3 16.857 3 14.5V14M13.658 2.34699C11.496 1.96999 10.415 1.78199 9.708 2.40899C9 3.03599 9 4.18299 9 6.47599V17.524C9 19.817 9 20.964 9.707 21.591C10.414 22.218 11.495 22.03 13.657 21.653L15.987 21.247C18.381 20.829 19.578 20.62 20.289 19.742C21 18.863 21 17.593 21 15.052V8.94799C21 6.40799 21 5.13799 20.29 4.25899C19.814 3.67199 19.122 3.38399 18 3.13299M12 11V13"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        <span class="text-white font-normal text-base">Log Out</span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                        </form>
                    </a>
                </div>
            </div>
        </nav>

        <div class="mx-auto max-w-7xl my-auto px-2 sm:px-6 lg:px-8 mt-4">
            <div class="flex flex-row text-white rounded-b-[20px] gap-5">

                <div class="flex-none h-full">
                    <div class="flex justify-between px-[15px] py-[10px] rounded-t-[20px] items-center bg-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path id="arrow-disabled" fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 22C17.523 22 22 17.523 22 12C22 6.477 17.523 2 12 2C6.477 2 2 6.477 2 12C2 17.523 6.477 22 12 22ZM14.03 8.47C14.1705 8.61063 14.2493 8.80125 14.2493 9C14.2493 9.19875 14.1705 9.38937 14.03 9.53L11.56 12L14.03 14.47C14.1037 14.5387 14.1628 14.6215 14.2038 14.7135C14.2448 14.8055 14.2668 14.9048 14.2686 15.0055C14.2704 15.1062 14.2518 15.2062 14.2141 15.2996C14.1764 15.393 14.1203 15.4778 14.049 15.549C13.9778 15.6203 13.893 15.6764 13.7996 15.7141C13.7062 15.7518 13.6062 15.7704 13.5055 15.7686C13.4048 15.7668 13.3055 15.7448 13.2135 15.7038C13.1215 15.6628 13.0387 15.6037 12.97 15.53L9.97 12.53C9.82955 12.3894 9.75066 12.1988 9.75066 12C9.75066 11.8012 9.82955 11.6106 9.97 11.47L12.97 8.47C13.1106 8.32955 13.3012 8.25066 13.5 8.25066C13.6988 8.25066 13.8894 8.32955 14.03 8.47Z"
                                fill="gray" />
                        </svg>
                        <div>
                            <span class="text-xs text-[#868686]">Year Study</span>
                            <div class="text-center text-2xl font-semibold" id="year">2023</div>
                        </div>
                        <svg id="arrow-default" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                            viewBox="0 0 22 22" fill="none">
                            <path
                                d="M11 21C16.5228 21 21 16.5228 21 11C21 5.47715 16.5228 1 11 1C5.47715 1 1 5.47715 1 11C1 16.5228 5.47715 21 11 21Z"
                                stroke="white" stroke-width="1.5" />
                            <path d="M9.5 8L12.5 11L9.5 14" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>

                    <div
                        class="flex flex-col items-start rounded-b-[20px] bg-white w-full shadow-custom gap-[5px] self-stretch">
                        <div class="mt-[20px] text-grays flex-grow">
                            <ul id="sidebar" class="w-full overflow-y-scroll flex flex-col h-[360px]">
                            @forelse ($products as $product)
                                <a href="{{ url('alsav/edutech/dashboard/desktop-software/' . $product->id ) }}" class="flex">
                                    <div class="mr-[10px] w-[4px] {{ ($product->id == $tes) ? 'actives' : ''}} flex-none"></div>
                                    <li
                                        class="px-[20px] py-[10px] {{ ($product->hari == $tes) ? 'active' : ''}} shrink w-72 flex-initial border-b-[1.5px] mb-[5px] hover:rounded-l-lg border-gray-300 hover:text-white hover-bg-dark transition-all delay-300 duration-100">
                                        Day {{ $product->hari }}</li>
                                </a>
                                @empty
                                <li class="px-[20px] shrink w-72 py-[10px]">
                                    No data day here
                                </li>
                            @endforelse
                            </ul>
                        </div>

                        <div class="py-[20px]">
                            <div role="button" id="present"
                                class="hover-bg-dark hover:rounded-l-lg w-72 text-dark hover:text-white ml-[14px] px-[20px] h-[52px] gap-[10px] flex items-center align-middle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                    fill="none">
                                    <path id="iconPresent" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15.9998 29.3334C23.3638 29.3334 29.3332 23.364 29.3332 16C29.3332 8.63602 23.3638 2.66669 15.9998 2.66669C8.63584 2.66669 2.6665 8.63602 2.6665 16C2.6665 23.364 8.63584 29.3334 15.9998 29.3334ZM14.2585 21.128L20.5518 17.412C21.5932 16.796 21.5932 15.204 20.5518 14.588L14.2585 10.872C13.2452 10.2747 11.9998 11.0534 11.9998 12.2854V19.716C11.9998 20.9467 13.2452 21.7254 14.2585 21.128Z"
                                        fill="#141414" />
                                </svg>
                                <span class="font-normal">Present</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="right-app" class="flex-1">
                    <div class="slider-container">
                        <div style="box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px !important; border-radius: 20px;
                        " class="slider mb-3">
                        @forelse ($pictures as $picture) 
                            <!--<img class="heightSlider" src="{{ $picture->materi }}" alt="presentation" rel="preload">-->
                            <img class="heightSlider" src="{{ asset('storage/'.$picture->materi) }}" alt="presentation" rel="preload">
                        @empty
                            No records found
                        @endforelse   
                        </div>
                        <p id="countSlider" class="text-dark text-center"></p>
                        <div class="thumbnail-slider">
                            <button class="prev-btn">❮</button>
                            <div class="container-nav">
                                <div class="thumbnails" style="left: 0">
                                @forelse ($pictures as $picture)   
                                    <img src="{{ asset('storage/'.$picture->materi)}}" alt="presentation-nav" rel="preload">
                                    @empty
                                        No records found
                                    @endforelse   
                                </div>
                            </div>
                            <button class="next-btn">❯</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset('tema/assets/main.js') }}"></script>
    <script>
        document.getElementById("present").addEventListener("click", () => {
            document.querySelector(".slider").style.borderRadius = ""
        })

        function exitFullscreen() {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            }
        }

        document.addEventListener('fullscreenchange', function (event) {
            if (!document.fullscreenElement) {
                document.querySelector(".slider").style.borderRadius = "20px"
            }
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                exitFullscreen();
            }
        });

    </script>
</body>

</html>