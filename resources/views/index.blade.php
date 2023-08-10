@extends('layouts.app')

@section('content')
   <div class="container mx-auto px-4">
       <h2 class="text-blue-500 uppercase tracking-wide font-semibold ">Popular Games</h2>
       <div class="popular-games text-sm grid sm:grid-cols-1 md:grid-cols-2  lg:grid-cols-5 xl:grid-cols-6 grid-cols-6 gap-12 border-b border-gray-800 pb-16">
           <div class="game mt-8">
               <div class="relative inline-block">
                   <a href="#">
                       <img src="{{ asset('img/valorant.jpg') }}" alt="description of my image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-md">
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
                       <img src="{{ asset('img/Lol.jpg') }}" alt="description of my image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-md">
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
                       <img src="{{ asset('img/fortnite.jpg') }}" alt="description of my image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-md">
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
                       <img src="{{ asset('img/counter-strike.jpg') }}" alt="description of my image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-md">
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
                       <img src="{{ asset('img/apex.jpg.jpg') }}" alt="description of my image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-md">
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
                       <img src="{{ asset('img/overwatch_2.jpg') }}" alt="description of my image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-md">
                   </a>
                   <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                       <div class="font-semibold text-xs flex justify-center items-center h-full" >%10</div>
                   </div>
               </div>
               <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">OverWatch 2</a>
               <div class="text-gray-400 mt-1">PC / PlayStation 4 / Xbox</div>
           </div>
           <div class="game mt-8">
               <div class="relative inline-block">
                   <a href="#">
                       <img src="{{ asset('img/Rainbow-Six-Siege.jpg') }}" alt="description of my image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-md">
                   </a>
                   <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                       <div class="font-semibold text-xs flex justify-center items-center h-full" >%80</div>
                   </div>
               </div>
               <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Rainbow Six Siege</a>
               <div class="text-gray-400 mt-1">PC / PlayStation 4 / Xbox</div>
           </div>
           <div class="game mt-8">
               <div class="relative inline-block">
                   <a href="#">
                       <img src="{{ asset('img/clash-royal.jpg') }}" alt="description of my image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-md">
                   </a>
                   <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                       <div class="font-semibold text-xs flex justify-center items-center h-full" >%99</div>
                   </div>
               </div>
               <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Clash Royal</a>
               <div class="text-gray-400 mt-1">Mobile</div>
           </div>
           <div class="game mt-8">
               <div class="relative inline-block">
                   <a href="#">
                       <img src="{{ asset('img/cod.jpg') }}" alt="description of my image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-md">
                   </a>
                   <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                       <div class="font-semibold text-xs flex justify-center items-center h-full" >%93</div>
                   </div>
               </div>
               <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Call of Duty</a>
               <div class="text-gray-400 mt-1">PC / PlayStation 4 / Xbox</div>
           </div>
           <div class="game mt-8">
               <div class="relative inline-block">
                   <a href="#">
                       <img src="{{ asset('img/warframe.jpg') }}" alt="description of my image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-md">
                   </a>
                   <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                       <div class="font-semibold text-xs flex justify-center items-center h-full" >%72</div>
                   </div>
               </div>
               <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Warframe</a>
               <div class="text-gray-400 mt-1">PC / PlayStation 4 / Xbox</div>
           </div>
           <div class="game mt-8">
               <div class="relative inline-block">
                   <a href="#">
                       <img src="{{ asset('img/reddead.jpg') }}" alt="description of my image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-md">
                   </a>
                   <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                       <div class="font-semibold text-xs flex justify-center items-center h-full" >%98</div>
                   </div>
               </div>
               <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Red Dead Redemption ||</a>
               <div class="text-gray-400 mt-1">PC / PlayStation 4 / Xbox</div>
           </div>
           <div class="game mt-8">
               <div class="relative inline-block">
                   <a href="#">
                       <img src="{{ asset('img/gow.jpg') }}" alt="description of my image" class="hover:opacity-75 transition ease-in-out duration-150 rounded-md">
                   </a>
                   <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                       <div class="font-semibold text-xs flex justify-center items-center h-full" >%100</div>
                   </div>
               </div>
               <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">God of War</a>
               <div class="text-gray-400 mt-1">PC / PlayStation 4</div>
           </div>
   </div> {{--end popular here--}}

       <div class="flex flex-col lg:flex-row my-10">
           <div class="recently-reviewed lg:w-3/4 mr-0 lg:mr-32">
              <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
               <div class="recently-reviewed-container space-y-12 mt-8">
                   <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">

                       <div class="relative flex-none">
                           <a href="#">
                               <img src="{{ asset('img/valorant.jpg') }}" alt="description of my image" class="w-48 hover:opacity-75 transition ease-in-out duration-150 rounded-md"  width="200" height="250">
                           </a>
                           <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px; bottom: -20px">
                               <div class="font-semibold text-xs flex justify-center items-center h-full" >%10</div>
                           </div>

                   </div>
                       <div class="ml-12">
                           <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">Valorant</a>
                           <div class="text-gray-400 mt-1">PC</div>
                           <p class="mt-6 text-gray-400 hidden lg:block">
                               Valorant is a free-to-play first-person tactical hero shooter developed and published by Riot Games, for Windows. Teased under the codename Project A in October 2019, the game began a closed beta period with limited access on April 7, 2020, followed by a release on June 2, 2020. The development of the game started in 2014. Valorant takes inspiration from the Counter-Strike series, borrowing several mechanics such as the buy menu, spray patterns, and inaccuracy while moving.
                           </p>
                       </div>


               </div>
                   <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                       <div class="relative flex-none">
                           <a href="#">
                               <img src="{{ asset('img/warframe.jpg') }}" alt="description of my image" class="w-48 hover:opacity-75 transition ease-in-out duration-150 rounded-md" width="200" height="250">
                           </a>
                           <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px; bottom: -20px">
                               <div class="font-semibold text-xs flex justify-center items-center h-full" >%72</div>
                           </div>
                       </div>
                       <div class="ml-12">
                           <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">Warframe</a>
                           <div class="text-gray-400 mt-1">PC / PlayStation 4 / Xbox</div>
                           <p class="mt-6 text-gray-400 hidden lg:block">
                               Warframe is a free-to-play action role-playing third-person shooter multiplayer online game developed and published by Digital Extremes. First released for Windows personal computers in March 2013, it was later ported to PlayStation 4 in November 2013, Xbox One in September 2014, Nintendo Switch in November 2018, PlayStation 5 in November 2020, and Xbox Series X/S in April 2021. Support for cross-platform play was released in 2022. Cross-save, as well as ports to mobile devices, is planned for 2023. The game is in a perpetual open beta.
                           </p>
                       </div>


                   </div>
                   <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                       <div class="relative flex-none">
                           <a href="#">
                               <img src="{{ asset('img/Lol.jpg') }}" alt="description of my image" class="w-48 hover:opacity-75 transition ease-in-out duration-150 rounded-md" width="200" height="250">
                           </a>
                           <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px; bottom: -20px">
                               <div class="font-semibold text-xs flex justify-center items-center h-full" >%93</div>
                           </div>
                       </div>
                       <div class="ml-12">
                           <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">League of Legends</a>
                           <div class="text-gray-400 mt-1">PC</div>
                           <p class="mt-6 text-gray-400 hidden lg:block">
                               League of Legends (LoL), commonly referred to as League, is a 2009 multiplayer online battle arena video game developed and published by Riot Games. Inspired by Defense of the Ancients, a custom map for Warcraft III, Riot's founders sought to develop a stand-alone game in the same genre. Since its release in October 2009, League has been free-to-play and is monetized through purchasable character customization. The game is available for Microsoft Windows and macOS.
                           </p>
                       </div>


                   </div>
           </div>
       </div>
           <div class="most-anticipated lg:w-1/4 mt-12 lg:mg-0">
               <h2 class="text-blue-500 uppercase tracking-wide font-semibold"> Most Anticipated</h2>
               <div class="most-anticipated-container space-y-10 mt-8">
                   <div class="game flex">
                       <a href="#">
                           <img src="{{ asset('img/clash-royal.jpg') }}" alt="description of my image" class=" w-16 hover:opacity-75 transition ease-in-out duration-150 rounded-md">
                       </a>
                       <div class="ml-4">
                           <a href="#" class="hover:text-gray-300">Clash Royal</a>
                           <div class="text-gray-400 text-sm mt-1">sept 16,2010</div>
                       </div>
                   </div>

                   <div class="game flex">
                       <a href="#">
                           <img src="{{ asset('img/clash-royal.jpg') }}" alt="description of my image" class=" w-16 hover:opacity-75 transition ease-in-out duration-150 rounded-md">
                       </a>
                       <div class="ml-4">
                           <a href="#" class="hover:text-gray-300">Clash Royal</a>
                           <div class="text-gray-400 text-sm mt-1">sept 16,2010</div>
                       </div>
                   </div>

                   <div class="game flex">
                       <a href="#">
                           <img src="{{ asset('img/clash-royal.jpg') }}" alt="description of my image" class=" w-16 hover:opacity-75 transition ease-in-out duration-150 rounded-md">
                       </a>
                       <div class="ml-4">
                           <a href="#" class="hover:text-gray-300">Clash Royal</a>
                           <div class="text-gray-400 text-sm mt-1">sept 16,2010</div>
                       </div>
                   </div>

                   <div class="game flex">
                       <a href="#">
                           <img src="{{ asset('img/clash-royal.jpg') }}" alt="description of my image" class=" w-16 hover:opacity-75 transition ease-in-out duration-150 rounded-md">
                       </a>
                       <div class="ml-4">
                           <a href="#" class="hover:text-gray-300">Clash Royal</a>
                           <div class="text-gray-400 text-sm mt-1">sept 16,2010</div>
                       </div>
                   </div>


               </div>

               <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-2"> Coming Soon</h2>
               <div class="most-anticipated-container space-y-10 mt-8">
                   <div class="game flex">
                       <a href="#">
                           <img src="{{ asset('img/clash-royal.jpg') }}" alt="description of my image" class=" w-16 hover:opacity-75 transition ease-in-out duration-150 rounded-md">
                       </a>
                       <div class="ml-4">
                           <a href="#" class="hover:text-gray-300">Clash Royal</a>
                           <div class="text-gray-400 text-sm mt-1">sept 16,2010</div>
                       </div>
                   </div>

                   <div class="game flex">
                       <a href="#">
                           <img src="{{ asset('img/clash-royal.jpg') }}" alt="description of my image" class=" w-16 hover:opacity-75 transition ease-in-out duration-150 rounded-md">
                       </a>
                       <div class="ml-4">
                           <a href="#" class="hover:text-gray-300">Clash Royal</a>
                           <div class="text-gray-400 text-sm mt-1">sept 16,2010</div>
                       </div>
                   </div>

                   <div class="game flex">
                       <a href="#">
                           <img src="{{ asset('img/clash-royal.jpg') }}" alt="description of my image" class=" w-16 hover:opacity-75 transition ease-in-out duration-150 rounded-md">
                       </a>
                       <div class="ml-4">
                           <a href="#" class="hover:text-gray-300">Clash Royal</a>
                           <div class="text-gray-400 text-sm mt-1">sept 16,2010</div>
                       </div>
                   </div>

                   <div class="game flex">
                       <a href="#">
                           <img src="{{ asset('img/clash-royal.jpg') }}" alt="description of my image" class=" w-16 hover:opacity-75 transition ease-in-out duration-150 rounded-md">
                       </a>
                       <div class="ml-4">
                           <a href="#" class="hover:text-gray-300">Clash Royal</a>
                           <div class="text-gray-400 text-sm mt-1">sept 16,2010</div>
                       </div>
                   </div>


               </div>
           </div>
       </div>
   </div> {{--end container here--}}

@endsection
