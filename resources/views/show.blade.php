@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="game-details border-b border-gray-800 pb-12 flex flex-col lg:flex-row">
            <div class="flex-non">
                <img src="{{ asset('img/valorant.jpg') }}" alt="description of my image" class="rounded-md" >
            </div>
            <div class="lg:ml-12 lg:mr-64">
                <h2 class="font-semibold text-4xl leading-tight mt-1 ml-24 pl-12 lg:ml-0 lg:pl-0">Valorant</h2>
                <div class="text-gray-400 ml-20 pl-9 lg:ml-0 lg:pl-0">
                    <span>Riot Games</span>
                    &middot;
                    <span>Square Enix</span>
                    &middot;
                    <span>PC</span>
                </div>
                <div class="flex flex-wrap items-center mt-8 ">
                    <div class="flex item-center ml-12 pl-2 lg:ml-0 lg:pl-0">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">90%</div>
                        </div>
                        <div class="ml-4 text-xs mt-3">Member <br> Score</div>
                    </div>
                    <div class="flex item-center ml-12">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">98%</div>
                        </div>
                        <div class="ml-4 text-xs mt-3">Critic <br> Score</div>
                    </div>
                    <div class="flex items-center space-x-4 mt-4 ml-12 pl-12 lg:mt-0 lg:ml-12">
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="25" height="25" class="rounded-full" viewBox="0 0 466.337 466.337"><path d="M233.168 0C104.604 0 0 104.604 0 233.168c0 128.565 104.604 233.169 233.168 233.169 128.565 0 233.169-104.604 233.169-233.169C466.337 104.604 361.733 0 233.168 0zm-9.184 441.874c-22.321 0-46.405-41.384-59.045-107.815h118.067c-12.635 66.431-36.69 107.815-59.022 107.815zm-62.87-131.73c-2.738-19.991-4.437-41.781-4.881-65.018H291.74c-.443 23.237-2.148 45.027-4.869 65.018H161.114zM24.521 245.126h107.704c.443 21.883 2.09 43.859 4.887 65.018H38.768c-8.075-20.318-12.95-42.178-14.247-65.018zM223.984 24.464c21.982 0 45.687 40.14 58.484 104.877h-116.97c12.788-64.737 36.498-104.877 58.486-104.877zm62.479 128.781c2.978 20.785 4.811 43.596 5.277 67.966H156.222c.467-24.37 2.295-47.169 5.272-67.966h124.969zm-154.237 67.966H24.521c1.354-23.926 6.568-46.836 15.332-67.966h97.656c-3.047 22.075-4.828 45.067-5.283 67.966zm183.523 23.915h126.065c-1.296 22.84-6.188 44.7-14.246 65.018H310.855c2.791-21.159 4.45-43.135 4.894-65.018zm0-23.915c-.468-22.898-2.254-45.891-5.29-67.966h116.023c8.77 21.13 13.978 44.04 15.332 67.966H315.749zm98.847-91.881H306.617c-7.894-42.067-20.727-78.844-38.195-102.222 62.53 10.691 115.638 49.097 146.174 102.222zM176.073 32.036c-15.7 23.459-27.348 58.1-34.699 97.305H51.741C78.657 82.505 123.064 47.1 176.073 32.036zM49.96 334.058h90.895c7.311 40.403 19.133 76.205 35.219 100.26-54.13-15.414-99.402-51.94-126.114-100.26zm218.45 105.164c17.865-23.938 30.874-61.889 38.697-105.164h109.274c-30.231 54.685-84.261 94.281-147.971 105.164z"/></svg>
                            </a>
                        </div>

                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" version="1.0" viewBox="0 0 300 300"><path d="M134 19.6c-20.9 3.8-29.4 6.5-44 14-35.3 18-60.1 50.7-68.7 90.7-2.5 11.5-2.5 39.9 0 51.4 11.3 52.6 50.4 91.7 103 103 11.5 2.5 39.9 2.5 51.4 0 46.6-10 83.9-43 98.7-87 4.9-14.9 6.1-22.8 6.1-41.7 0-24.7-3.3-38.9-14.1-60-17.9-35-50.2-59.7-89.9-68.6-6.8-1.5-37-2.8-42.5-1.8zm69 59c8.3 3.9 14.5 10.1 18.4 18.4l3.1 6.5v93l-3.1 6.5c-3.9 8.3-10.1 14.5-18.4 18.4l-6.5 3.1h-93l-6.5-3.1c-3.6-1.7-8.5-5.1-10.9-7.5-2.4-2.4-5.8-7.3-7.5-10.9l-3.1-6.5v-93l3.1-6.5c4.9-10.2 12.8-17 23.9-20.6 3.1-1 14.6-1.3 49-1.1l45 .2 6.5 3.1z"/><path d="M104.6 89.6c-5.7 2.1-10.2 5.8-13.3 11.2l-2.8 4.7v89l2.8 4.7c1.5 2.6 4.2 5.9 6 7.2 7.1 5.4 8.6 5.6 52.6 5.6 24.9 0 42-.4 44.3-1 5.6-1.6 11.9-6.9 14.7-12.5l2.6-4.9v-87.2l-2.6-4.9c-2.8-5.6-9.1-10.9-14.7-12.5-2.3-.6-19.3-1-44.7-.9-33 0-41.8.3-44.9 1.5zm92.7 14.5c4.5 5.5.1 14.9-7 14.9-4.7 0-7.2-1.6-8.9-5.6-4-9.6 9.2-17.4 15.9-9.3zm-35 10.6c8.5 2.7 16.8 10.1 21.3 19 7 13.9 4 31.3-7.3 42.6-25.3 25.4-68.1 3.8-63.2-31.9 3.1-22.7 26.5-36.9 49.2-29.7z"/><path d="M139.5 128.4c-6 2.8-8.7 5.6-11.4 11.6-3.8 8.4-2 20.1 4.2 26.9 3.6 3.9 11.5 7.1 17.7 7.1 6.2 0 14.1-3.2 17.7-7.1 8.4-9.2 8-26.5-.8-34.6-7-6.4-18.6-8.1-27.4-3.9z"/></svg>
                            </a>
                        </div>

                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" class="rounded-full" version="1.0" viewBox="0 0 512 512"><path d="M79 1.5C59.5 5.1 44.1 13.1 29.3 27.3 18.2 38 9.9 50.9 5.1 64.7-.1 80.2 0 75.2 0 256s-.1 175.8 5.1 191.3c9.3 27.1 32.5 50.3 59.6 59.6 15.5 5.2 10.5 5.1 191.3 5.1s175.8.1 191.3-5.1c27.1-9.3 50.3-32.5 59.6-59.6 5.2-15.5 5.1-10.5 5.1-191.3s.1-175.8-5.1-191.3c-9.3-27.1-32.5-50.3-59.6-59.6C431.8-.1 437 0 255.1.1 118 .2 85.1.4 79 1.5zM342.5 131c9.2 2.9 18.1 7.9 24.9 14l5.5 5.1 8.3-2.1c9.7-2.5 20.7-6.8 29.6-11.5 3.4-1.8 6.2-3.1 6.2-2.8 0 1.4-4.8 11.6-7.6 16-4.5 7.2-9.9 12.9-16.8 18-5.6 4.1-5.7 4.3-2.5 3.7 9-1.6 20.2-4.5 27.7-7.3 4.5-1.6 7.9-2.4 7.5-1.8-4.3 7.4-16.8 21.1-25.7 28.2l-7.5 6v10c-.3 34.2-10.6 71.6-27.8 100.4-34 57.2-83.8 89.7-148.6 97.2-16.7 1.9-46 .7-61.7-2.6-21.9-4.6-45.6-13.6-62.3-23.7l-5.8-3.6 10.9.6c29.2 1.3 57.3-6.6 83.2-23.6l8.5-5.6-4.5-.8c-11.9-2.2-16-3.2-21.7-5.8-15.1-6.9-27.3-18.7-34.8-34-4.4-8.8-4.4-8.7 3.2-7.9 6.9.7 19.1-.5 20.6-2 .4-.4-1-1.1-3.2-1.5-2.2-.3-8.2-2.7-13.3-5.4-15.2-7.7-27.8-21.6-34.3-37.9-2.3-5.7-5.4-22.7-4.3-23.8.3-.3 2.7.4 5.4 1.5 5.6 2.5 19.6 6 23.6 6 2.5 0 1.9-.8-6.1-8.8-14.6-14.6-19.6-27.2-19.5-49.2.1-10.8.5-13.6 2.8-20.5 1.4-4.4 3.4-9.5 4.4-11.3l1.8-3.3 8.2 9c33.2 36.2 77.7 58 129.8 63.6l6.1.7-.5-12.4c-.4-10.3-.1-13.7 1.6-20.5 6.5-25.8 27.1-46 52.7-51.7 9.6-2.2 26.6-1.5 36 1.4z"/></svg>
                            </a>
                        </div>

                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="#" class="hover:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="26" height="26" class="rounded-full" viewBox="0 0 455 455"><path d="M0 0v455h455V0H0zm384.814 100.68-53.458 257.136c-1.259 6.071-8.378 8.822-13.401 5.172l-72.975-52.981a12.065 12.065 0 0 0-14.712.412l-40.46 32.981c-4.695 3.84-11.771 1.7-13.569-4.083l-28.094-90.351-72.583-27.089c-7.373-2.762-7.436-13.171-.084-16.003L373.36 90.959c6.315-2.442 12.83 3.09 11.454 9.721z" style="fill-rule:evenodd;clip-rule:evenodd"/><path d="m313.567 147.179-141.854 87.367c-5.437 3.355-7.996 9.921-6.242 16.068l15.337 53.891c1.091 3.818 6.631 3.428 7.162-.517l3.986-29.553a24.27 24.27 0 0 1 7.522-14.522l117.069-108.822c2.192-2.03-.432-5.477-2.98-3.912z" style="fill-rule:evenodd;clip-rule:evenodd"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <p class="mt-12">
                    Valorant is a free-to-play first-person tactical hero shooter developed and published by Riot Games, for Windows. Teased under the codename Project A in October 2019, the game began a closed beta period with limited access on April 7, 2020, followed by a release on June 2, 2020. The development of the game started in 2014. Valorant takes inspiration from the Counter-Strike series, borrowing several mechanics such as the buy menu, spray patterns, and inaccuracy while moving.
                </p>

                <div class="mt-12">
                    <button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 transition ease-in-out duration-150 rounded-lg ml-32  lg:ml-0 lg:pl-0">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="25" height="25" viewBox="0 0 60 60"><path d="m45.563 29.174-22-15A1 1 0 0 0 22 15v30a.999.999 0 0 0 1.563.826l22-15a1 1 0 0 0 0-1.652zM24 43.107V16.893L43.225 30 24 43.107z"/><path d="M30 0C13.458 0 0 13.458 0 30s13.458 30 30 30 30-13.458 30-30S46.542 0 30 0zm0 58C14.561 58 2 45.439 2 30S14.561 2 30 2s28 12.561 28 28-12.561 28-28 28z"/></svg>
                     <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div> {{--end of game details--}}

        <div class="images-container border-b border-gray-800 pb-12 mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold"> Images</h2>
            <div class="gap-12 grid grid-cols-1 md:grid-cols-2  lg:grid-cols-3  mt-8 ">

                <div>
                    <a href="#">
                        <img src="{{ asset('img/valscr1.jpg') }}" alt="description of my image" class="rounded-md hover:opacity-75 transition ease-in-out duration-150" width="400" >
                    </a>
                </div>

                <div>
                    <a href="#">
                        <img src="{{ asset('img/valscr2.jpg') }}" alt="description of my image" class="rounded-md hover:opacity-75 transition ease-in-out duration-150" width="400" >
                    </a>
                </div>

                <div>
                    <a href="#">
                        <img src="{{ asset('img/valscr3.jpg') }}" alt="description of my image" class="rounded-md hover:opacity-75 transition ease-in-out duration-150" width="400" >
                    </a>
                </div>

                <div>
                    <a href="#">
                        <img src="{{ asset('img/valscr4.jpg') }}" alt="description of my image" class="rounded-md hover:opacity-75 transition ease-in-out duration-150" width="400" >
                    </a>
                </div>

                <div>
                    <a href="#">
                        <img src="{{ asset('img/valscr5.png') }}" alt="description of my image" class="rounded-md hover:opacity-75 transition ease-in-out duration-150" width="400" >
                    </a>
                </div>

                <div>
                    <a href="#">
                        <img src="{{ asset('img/valscr6.jpeg') }}" alt="description of my image" class="rounded-md hover:opacity-75 transition ease-in-out duration-150" width="400" >
                    </a>
                </div>

            </div>
        </div> {{--end of images container--}}

        <div class="similar-games-container  mt-8 mr-12 pr-5">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold"> Similar Games</h2>
            <div class="popular-games text-sm grid sm:grid-cols-1 md:grid-cols-2  lg:grid-cols-5 xl:grid-cols-6 gap-12 mb-2">
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="{{ asset('img/valorant.jpg') }}" alt="description of my image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-md" width="200">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full" >%80</div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Valorant</a>
                    <div class="text-gray-400 mt-1">PC</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="{{ asset('img/Lol.jpg') }}" alt="description of my image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-md" width="200">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full" >%93</div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">League of Legends</a>
                    <div class="text-gray-400 mt-1">PC</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="{{ asset('img/fortnite.jpg') }}" alt="description of my image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-md" width="200">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full" >%10</div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Fortnite</a>
                    <div class="text-gray-400 mt-1">PC / PlayStation 4 / Xbox</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="{{ asset('img/counter-strike.jpg') }}" alt="description of my image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-md" width="200">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full" >%89</div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Counter Strike</a>
                    <div class="text-gray-400 mt-1">PC</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="{{ asset('img/apex.jpg.jpg') }}" alt="description of my image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-md" width="200">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full" >%91</div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Apex</a>
                    <div class="text-gray-400 mt-1">PC / PlayStation 4 / Xbox</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="{{ asset('img/overwatch_2.jpg') }}" alt="description of my image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-md" width="200">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full" >%10</div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">OverWatch 2</a>
                    <div class="text-gray-400 mt-1">PC / PlayStation 4 / Xbox</div>
                </div>
            </div>

        </div> {{--end similar games--}}
    </div>

@endsection
