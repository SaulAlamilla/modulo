<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
        <link rel="stylesheet" href="{{asset('asset/css/sidebar.css')}}">
        <!-- Boxicons CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div class="sidebar">
        <div class="logo-details">
        <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">CIIE</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="{{ route('estudio.concepts') }}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Conceptos</span>
                </a>
                <span class="tooltip">Conceptos</span>
            </li>
            <li>
                <a href="{{ route('estudio.polls') }}">
                    <i class='bx bx-poll' ></i>
                    <span class="links_name">Encuestas</span>
                </a>
                <span class="tooltip">Encuestas</span>
            </li>
            <li>
                <a href="{{ route('estudio.data') }}">
                    <i class='bx bx-cog' ></i>
                    <span class="links_name">Editar datos</span>
                </a>
                <span class="tooltip">Editar datos</span>
            </li>
            <li>
                <a href="{{ route('estudio.results') }}">
                    <i class='bx bx-chat' ></i>
                    <span class="links_name">Capturar resultados</span>
                </a>
                <span class="tooltip">Capturar resultados</span>
            </li>
            <li>
                <a href="{{ route('estudio.conclusion') }}">
                    <i class='bx bx-pie-chart-alt-2' ></i>
                    <span class="links_name">Agregar conclusión</span>
                </a>
                <span class="tooltip">Agregar conclusión</span>
            </li>
            <li>
                <a href="{{ route('estudio.print') }}">
                    <i class='bx bx-folder' ></i>
                    <span class="links_name">Imprimir resultados</span>
                </a>
                <span class="tooltip">Imprimir resultados</span>
            </li>
        
            <li class="profile">
                <div class="profile-details">
                <div class="name_job">
                    <div class="name">Regresar</div>
                    <div class="job">ver estudios</div>
                </div>
                </div>
                <a href="{{ route('estudio.index') }}" id="back">
                    <i class='bx bx-log-out' id="log_out" ></i>
                </a>
            </li>
        </ul>
    </div>

    <!--CONTENIDO-->
    <section class="home-section text-center">
        <div class="text">@yield('contenido')</div>
    </section>

    <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("open");
        menuBtnChange();//calling the function(optional)
    });

    searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
        if(sidebar.classList.contains("open")){
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
        }else {
            closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
        }
    }
    </script>
    </body>
</html>
