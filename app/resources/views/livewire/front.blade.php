<!doctype html>
<html prefix="og: https://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
	<title>It's my Birthday</title>
    <meta property="og:title" content="It's my Birthday" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://maythegonzalez.com/" />
    <meta property="og:image" content="https://www.nacionrex.com/__export/1628691133741/sites/debate/img/2021/08/11/bts-beenzino-integrante-por-que-rechazo-la-oferta_1_crop1628691108346.jpg_1364161016.jpg" />
	
    @livewireStyles
    <style>
        .covid{ 
            background-image: url("{{asset('img/c7.png')}}");
            height: 300px;
            width: 480px;
            
        }
        .imagen{ 
            background-image: url("{{asset('img/f0.jpg')}}");
            height: 600px;
        }
        .imagen2{ 
            background-image: url("{{asset('img/f0.jpg')}}");
            height: 400px;
        }
        
        .pastel{
            background-image: url("{{asset('img/c5.jpg')}}");
            width: 250px;
            height: 250px;
            
           
        }
        .punto{
            background-image: url("{{asset('img/c3.png')}}");
            width: 30px;
            height: 30px;
            
           
        }
        .fecha{
            background-image: url("{{asset('img/c2.png')}}");
            width: 30px;
            height: 30px;
            
           
        }
        .confirma{
            background-image: url("{{asset('img/c1.png')}}");
            width: 250px;
            height: 250px;
            
           
        }
        @media (min-width: 640px) { 
            .pastel{
            background-image: url("{{asset('img/c5.jpg')}}");
            width: 350px;
            height: 350px;
            
           
            }
            .fecha{
            background-image: url("{{asset('img/c2.png')}}");
            width: 50px;
            height: 50px;

            
           
            }
            .punto{
            background-image: url("{{asset('img/c3.png')}}");
            width: 50px;
            height: 50px;
            }
        }
        @media (min-width: 768px) { 
            .pastel{
            background-image: url("{{asset('img/c5.jpg')}}");
            width: 400px;
            height: 400px;

            
            
            
           
            }
            .imagen{ 
            background-image: url("{{asset('img/f0.jpg')}}");
            height: 800px;
            }

            
            

        }
        @media (min-width: 1001px) { 
            .pastel{
            background-image: url("{{asset('img/c5.jpg')}}");
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
                    <div id="inicio" class=" h-[350px]  w-[250px] border-[15px] pt-2 md:h-[700px] md:w-[600px] md:border-[35px] md:pt-5 sm:h-[500px] sm:w-[400px] sm:border-[20px] sm:pt-10 bg-[#ae9bd6] my-10 mx-auto border-white border-double rounded-3xl  ">
                        <div class="px-3 md:px-10 pt-1 md:pt-10 text-center">
                            <p class=" font-paci text-white font-extralight text-xs  mt-5 sm:text-sm text-justify  sm:mt-2 md:text-xl">"Aunque estemos lejos, nuestros corazones siguen siendo los mismos, ¿no es así?. Incluso si no estás a mi lado, incluso si no estoy a tu lado. Sabes que estamos juntos" - Suga</p>
                            <p class=" font-sans text-white font-bold text-xs pt-10 sm:text-lg ms:pt-6 sm:mt-10 md:pt-16 md:text-2xl ">CELEBRA CONMIGO</p>

                        </div>
                        <div class=" bg-[#9c76ed] h-16 sm:h-24 md:h-32 mt-3 w-full text-center">
                            
                            
                            <p class=" font-paci text-white  text-2xl py-3 sm:text-4xl sm:py-6 md:text-5xl md:py-8">¡Otra vuelta al Sol!</p>
                        </div>
                        <div class=" bg-[#ae9bd6] hover:bg-[#9c76ed] mx-auto px-1 w-16 h-6 border-[2px] mt-3 sm:w-28 sm:h-12 sm:border-[3px] sm:py-1 sm:mt-8 md:w-32 md:h-12 md:border-[4px] md:py-1 md:mt-16 rounded-3xl border-white border-solid  text-center">
                            <a href="#detalles" class=" text-white text-[9px] sm:text-sm md:text-base font-medium flex sm:px-2 py-1 ">
                                Ver Detalles
                            <a>
                        </div>

                    </div>
                    <div>
                        <a href="#top" class="bg-purple-700  fixed bottom-0 left-0 h-10 w-10  ml-3 mb-3 pt-2 text-lg rounded-full text-center text-white border-2 border-white border-solid">^<a>
                        
                    </div>
                    <div class="whibg-te sm:h-[800px] md:h-[1000px] lg:h-[630px] w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 pt-3 ">
                        
                        <div id="detalles" class=" bg-white col-span-1 row-span-2 md:col-span-2 md:row-span-2 flex justify-center pt-3 lg:pt-20">
                            <div class=" pastel bg-cover bg-no-repeat bg-center md:border-[4px] border-white border-solid rounded-3xl"></div>
                        </div>
                        <div class="bg-white col-span-1  md:col-span-2 px-8">
                            <div class=" text-center mt-10 ms:mt-12 md:mt-20 pb-5 ">
                                
                                <p class=" font-sans font-bold text-gray-700 text-base sm:text-lg md:text-2xl mt-10 text-justify ">La vida es un ciclo infinito de principios y finales, el fin de un ciclo es el principio de algo nuevo. 
                                    Hoy celebro la vida que se me ha acumulado, la que te puso en mi camino, y la que me permite una vez más verte, sonreír juntos y crear nuevos recuerdos. 
                                    Acompáñame y festejemos juntos este momento tan especial.</p>

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
                    <div class="bg-white/50 h-[600px] md:h-[800px] w-full pt-10 flex items-center flex-col">
                        <div class="text-center bg-[#9c76ed] h-16 w-[250px] sm:h-24 sm:w-[500px] md:h-32 md:w-[600px] mx-auto rounded-t-lg">

                            <h1 id="mapa" class=" font-paci text-white  text-3xl py-2  sm:text-5xl sm:py-6  md:text-6xl md:py-8">¿como llegar?</h1>


                        </div>
                        <div class="">
                            <iframe class="w-[250px] h-[350px] sm:w-[500px] sm:h-[450px] md:w-[600px] md:h-[450px] rounded-b-lg" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3735.8717644441185!2d-99.3275746!3d20.5524271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb0cc8b6db4ed1dd8!2zMjDCsDMzJzEwLjkiTiA5OcKwMTknMzYuOSJX!5e0!3m2!1ses-419!2smx!4v1648794082733!5m2!1ses-419!2smx" width="" height="" style="" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        
                        
                    </div>
                </div>
                <div>
                    <div class="grid lg:grid-cols-2 lg:pt-12 md:grid-cols-1 sm:grid-cols-1">
                        <div class=" ">
                            <div class="py-12">
                                <h3 class="lg:text-6xl md:text-4xl sm:text-4xl text-2xl text-center font-medium leading-6 text-gray-900 font-paci">¡Confirma tu Asistencia!</h3>
                                
                            </div>
                        </div>
                        <form id="confir" action="{{route('form')}}" method="POST">
                           @csrf
                            <div class="flex justify-center pb-10">
                                <div class="ms:h-[300] h-[300px] w-[300px] sm:w-[400px] md:w-[500px] 2xl:w-[600px] border-[20px] p-10 bg-[#ae9bd6] border-white border-double rounded-3xl flex flex-col space-y-4">
                                
                                    <div>
                                        <label for="first-name" class="block text-sm font-medium text-white">Nombre:</label>
                                        <input type="text" name="Nombre" autocomplete="name" class="mt-1 h-7 sm:h-10 text-white border-4 bg-[#9c76ed] focus:ring-[#9c76ed] focus:border-[#ae9bd6] block w-full shadow-sm sm:text-sm border-white rounded-md">
                                    </div>
                                    @error('Nombre')
                                        <p><strong>{{$message}}</strong></p>
                                        
                                    @enderror
                                    <div>
                                        <label for="country" class="block text-sm font-medium text-white">Personas:</label>
                                        <select  name="invitado" class="mt-1 h-7 sm:h-10 text-white block w-full py-0 px-3 border-4 border-white bg-[#9c76ed] rounded-md shadow-sm focus:outline-none focus:ring-white focus:border-white sm:text-sm">
                                            <option>1</option>
                                            <option>2</option>
                                        </select>

                                    </div>
                                    <div class="py-3 mx-auto">
                                    <button id="confirmar" type="button" name="enviar" 
                                         class="inline-flex justify-center g-recaptcha py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-[#9c76ed] hover:bg-[#9c76ed]/40 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#9c76ed]">Enviar</button>
                                    
                                    @if (session('info'))
                                        <script>
                                            alert("{{session('info')}}");
                                        </script>
  
                                    @endif

                                
                                </div>
                            </div>
                         </form>
                        
                    </div>
                    
                </div>
                <div class="imagen2 bg-cover bg-fixed">
                    <div class="bg-white/50 h-[600px] md:h-[600px] w-full pt-10 flex justify-center">

                        <div class="covid bg-contain bg-no-repeat mx-9"></div>
                    
                    </div>

                </div>
                
                    
            </div>
            
        
            
        </div>

        @livewireScripts
        
        <script src="https://www.google.com/recaptcha/api.js?render=6Lc5CTofAAAAACImXthKLNH6oDiJORtIz4KipcpX"></script>
        <script>
			$(document).ready(function() {
				$('#confirmar').click(function() {
					grecaptcha.ready(function() {
						grecaptcha.execute('6Lc5CTofAAAAACImXthKLNH6oDiJORtIz4KipcpX', {
							action: 'validarUsuario'
							}).then(function(token) {
							$('#confir').prepend('<input type="hidden" name="token" value="' + token + '" >');
							$('#confir').prepend('<input type="hidden" name="action" value="validarUsuario" >');
							$('#confir').submit();
						});
					});
				});
			});
		</script>
    </body>
    <footer>
        <div class=" h-48 w-auto bg-[#9c76ed] ">
            <div class=" text-xs md:text-ms text-white pt-16 text-center font-serif font-thin ">
                Photo by <a href="https://unsplash.com/@twinsfisch?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Isabella and Zsa Fischer</a> on <a href="https://unsplash.com/s/photos/lavender?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
            </div>
            <div class=" text-lg md:text-xl text-white py-3 text-center font-serif font-medium">
                <a href="https://www.ninacode.mx/">(C) Copy right 2022 - By Nina Code</a>
            </div>
        </div>
            

    </footer>
</html>
