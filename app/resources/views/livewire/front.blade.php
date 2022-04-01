<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">
	<title>Happy Birthday</title>
	<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @livewireStyles
    <style>
        .imagen{ 
            background-image: url("{{asset('img/f3.jpg')}}");
            height: 900px;
        }
        .pastel{
            background-image: url("{{asset('img/f6.jpg')}}");
            width: 250px;
            height: 250px;
            
           
        }
        .punto{
            background-image: url("{{asset('img/f7.png')}}");
            width: 30px;
            height: 30px;
            
           
        }
        .fecha{
            background-image: url("{{asset('img/f8.png')}}");
            width: 30px;
            height: 30px;
            
           
        }
        .confirma{
            background-image: url("{{asset('img/f9.png')}}");
            width: 250px;
            height: 250px;
            
           
        }
        @media (min-width: 640px) { 
            .pastel{
            background-image: url("{{asset('img/f6.jpg')}}");
            width: 350px;
            height: 350px;
            
           
            }
            .fecha{
            background-image: url("{{asset('img/f8.png')}}");
            width: 50px;
            height: 50px;
            
           
            }
            .punto{
            background-image: url("{{asset('img/f7.png')}}");
            width: 50px;
            height: 50px;
            }
        }
        @media (min-width: 768px) { 
            .pastel{
            background-image: url("{{asset('img/f6.jpg')}}");
            width: 400px;
            height: 400px;

            
            
            
           
            }
            

        }
        @media (min-width: 1001px) { 
            .pastel{
            background-image: url("{{asset('img/f6.jpg')}}");
            width: 500px;
            height: 500px;
            
           
            }

        }
        
    </style>
    </head>
    <body>
        @livewire('navigation')
        <div class="imagen bg-cover bg-fixed">

            <div>

                <div class="bg-white/50 h-auto w-full sm:rounded-lg py-10">
                    <div id="inicio" class=" h-[300px]  w-[250px] border-[15px] pt-2 md:h-[700px] md:w-[600px] md:border-[35px] md:pt-32 sm:h-[500px] sm:w-[400px] sm:border-[20px] sm:pt-10 bg-[#f2a7ad] my-10 mx-auto border-white border-double rounded-3xl  ">
                        <div class="p-10 text-center">
                            <p class=" font-sans text-white font-bold text-xs -mb-10 mt-8 sm:text-lg sm:-mb-10 sm:mt-10 md:text-2xl md:-mb-10">ESTAS INVITADO A MI</p>

                        </div>
                        <div class=" bg-[#ee8a92] h-16 sm:h-24 md:h-32 w-full text-center">
                            
                            
                            <p class=" font-paci text-white  text-3xl py-3 sm:text-5xl sm:py-6 md:text-6xl md:py-8">Cumpleaños</p>
                        </div>
                        <div class=" bg-[#f2a7ad] hover:bg-[#ee8a92] mx-auto px-1 w-16 h-6 border-[2px] mt-5 sm:w-28 sm:h-12 sm:border-[3px] sm:py-1 sm:mt-20 md:w-32 md:h-12 md:border-[4px] md:py-1 md:mt-28 rounded-3xl border-white border-solid  text-center">
                            <a href="#detalles" class=" text-white text-[9px] sm:text-sm md:text-base font-medium flex sm:px-2 py-1 ">
                                Ver Detalles
                            <a>
                        </div>

                    </div>
                    <div class="bg-white sm:h-[800px] md:h-[1000px] lg:h-[630px] w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 pt-3 ">
                        
                        <div id="detalles" class=" bg-white col-span-1 row-span-2 md:col-span-2 md:row-span-2 flex justify-center lg:pt-20">
                            <div class=" pastel bg-auto bg-no-repeat bg-center md:border-[4px] border-white border-solid rounded-3xl"></div>
                        </div>
                        <div class="bg-white col-span-1  md:col-span-2 px-8">
                            <div class=" text-center mt-10 ms:mt-12 md:mt-20 pb-5 ">
                                <h1 class=" font-paci font-bold text-gray-800 text-3xl sm:text-4xl md:text-6xl">¡Te Esperamos!</h1>
                                <p class=" font-sans font-bold text-gray-700 text-base sm:text-lg md:text-2xl mt-10 text-justify ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Quam id leo in vitae turpis massa. Placerat duis ultricies lacus sed 
                                    turpis tincidunt id aliquet risus. Risus quis varius quam quisque id diam vel quam.</p>

                            </div>
                        </div>
                        <div class="bg-white p-3 flex justify-center flex-row">
                            <div>
                                <div class="punto bg-contain mx-auto "></div>
                                <div class="flex flex-col md:pt-2">
                                    <div class="text-center font-sans font-bold text-gray-700">Tasquillo, Hidalgo</div>
                                </div>
                            </div>

                        </div>
                        <div class="bg-white p-3 flex justify-center flex-row " >
                            <div>
                                <div class="fecha bg-contain mx-auto "></div>
                                <div class="flex flex-col md:pt-2">
                                    <div class="text-center font-sans font-bold text-gray-700"> 28 de Mayo, 2022</div>
                                    <div class="text-center font-sans font-bold text-gray-700">Hora: 2:30 PM </div>
                                </div>
                            </div>

                        </div>
                        


                    </div>
                    
                    

                </div>
                <div class="imagen bg-cover bg-fixed">
                    <div class="bg-white/50 h-[900px] w-full pt-10 flex items-center flex-col">
                        <div class="text-center bg-[#ee8a92] h-16 w-[250px] sm:h-24 sm:w-[500px] md:h-32 md:w-[600px] mx-auto rounded-t-lg">

                            <h1 id="mapa" class=" font-paci text-white  text-3xl py-2  sm:text-5xl sm:py-6  md:text-6xl md:py-8">¿como llegar?</h1>


                        </div>
                        <div class="">
                            <iframe class="w-[250px] h-[350px] sm:w-[500px] sm:h-[450px] md:w-[600px] md:h-[450px] rounded-b-lg" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3735.8717644441185!2d-99.3275746!3d20.5524271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb0cc8b6db4ed1dd8!2zMjDCsDMzJzEwLjkiTiA5OcKwMTknMzYuOSJX!5e0!3m2!1ses-419!2smx!4v1648794082733!5m2!1ses-419!2smx" width="" height="" style="" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class=" bg-[#f2a7ad] hover:bg-[#ee8a92] mx-auto px-1 w-16 h-6 border-[2px] mt-5 sm:w-28 sm:h-12 sm:border-[3px] sm:py-1 sm:mt-20 md:w-20 md:h-12 md:border-[4px] md:py-1 md:mt-28 rounded-3xl border-white border-solid  text-center">
                            <a href="#top" class=" text-white text-[9px] sm:text-sm md:text-base font-medium flex sm:px-2 py-1 ">
                                Ir Arriba
                            <a>
                        </div>
                        
                    </div>
                </div>

            </div>
            
        </div>

        
        @livewireScripts
    </body>
</html>
