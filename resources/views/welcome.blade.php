    @extends('layouts.app')
    @section('content')
    <main  style="min-height: 40vw;"> 
        <div class="skew-cc-top"></div>
        <div class="section_1">
            <div class="content_1">
                <h1 class="titles">Bienvenido a Where is</h1>
                <div class="row text_section_1">
                    <div class="col-6" ><p id="section1_text_izq" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
                    <div class="col-6"><p id="section1_text_der">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div> 
                </div>
            </div>
        </div>
        
        <div class="skew-ccc "></div>
        <div class="skew-c"></div>

        <div class="section_2 bg-dark text-light" >
            <div class="content_2">
                <h1 class="titles" style="margin-bottom:5px;">Añade un sitio</h1>
                <div class="row text_section_2">
                
                    <div class="col-4">
                        <ul class="s2_llista">
                            <li>Consigue mas visibilidad de manera sencilla</li>
                            <li>Promociona tu local</li>
                            <li>Formulario de cracion sencillo y intuitivo</li>
                            <li>Gestiona tus locales poteriormente</li>
                            <a class="btn btn-primary" href={{ route('sitios.create') }} style="width:30%;">Añadir local</a>
                        </ul>
                    </div>
                    <div class="col-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49556.97568864995!2d-0.286984472743211!3d39.07661368729189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd61c6ce0914f8d7%3A0x402af6ed7238df0!2sTabernes%20de%20Valldigna%2C%2046760%2C%20Valencia!5e0!3m2!1ses!2ses!4v1655285009794!5m2!1ses!2ses" width="500" height="400" style="border:0;margin-top:-10%;margin-left:10%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                         <!--<img src="/imgs/example.jpg" style="width:500px;margin-top:-10%;margin-left:10%"> -->
                    
                    </div> 
                </div>
            </div>
        </div>
        
        <div class="skew-cc"></div>
        <div class="skew-cccc"></div>
        <div class="section_1">
            <div class="content_1">
                <h1 class="titles2">Busca sitios de interes</h1>
                <center><small ><p style="padding-bottom:2%;">Encuentra lugares que peudan ser de tu interes</p></small></center>
                <center><a class="btn btn-success w-20" href="{{ url('/sitio') }}" style="width:15%;padding:1%;">Empezar a buscar</a></center>
                
            </div>
        </div>
           
        <div class="skew-cc-bot"></div>
    </main>
    @endsection


