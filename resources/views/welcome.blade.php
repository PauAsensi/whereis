<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>¿Where Is?</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color:white !important;
            }
            .titles{
                font-size:60px;
                padding-top:2%;
                padding-bottom:2%;
            }
            .titles2{
                font-size:60px;
                padding-top:2%;
                
            }
            .text_section_1{
                margin: auto;
                margin-left: 10% !important;
                width: 80%;
                font-size:17px;
            }
            .text_section_2{
                margin: auto;
                
                font-size:17px;
            }
            .content_1>h1{
                text-align: center;
                margin-right: 20% !important;
                margin-left: 20% !important;
            }
            .content_2{
                margin-left: 15% !important;
            }
            .section_1{
                margin-bottom:5%;
                
                background-color:white;
            }
            .section_2{
                width:100%;
                position:relative;
                left:0px;
            }
            .s2_llista>li{
                margin-bottom:20px
            }
            .skew-cc{
                width:100%;
                height:100px;
                margin:0 !important;
                display :block;
                left:0px;
                background: linear-gradient(to right bottom, #212529 49%, #198754 50%), linear-gradient(-50deg, #000 16px, #212529 0);
            }
            .skew-ccc{
                width:100%;
                height:100px;
                margin:0 !important;
                display :block;
                left:0px;
                background: linear-gradient(to right bottom, white 49%, #198754 50%), linear-gradient(-50deg, #000 16px, #212529 0);
            }

            .skew-c{
                width:100%;
                height:100px;
                margin:0 !important;
                display :block;
                left:0px;
                background: linear-gradient(to left bottom, #198754 49%, #212529 50%);
            }
            .skew-cccc{
                width:100%;
                height:100px;
                margin:0 !important;
                display :block;
                left:0px;
                background: linear-gradient(to left bottom, #198754 49%, white 50%);
            }
            .skew-cc-top{
                
                width:100%;
                height:100px;
                margin:0 !important;
                display :block;
                left:0px;
                background: linear-gradient(to right bottom, #198754 49%, white 50%), linear-gradient(-50deg, #000 16px, #212529 0);
            }
            .skew-cc-bot{
                margin-bottom:-5%;
                width:100%;
                height:100px;
                margin:0 !important;
                display :block;
                left:0px;
                background: linear-gradient(to left bottom, white 49%, #198754 50%);
            }

        </style>
    </head>
    <body class="antialiased">
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
                        <img src="/imgs/example.jpg" style="width:500px;margin-top:-10%;margin-left:10%">
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

    </body>
</html>
