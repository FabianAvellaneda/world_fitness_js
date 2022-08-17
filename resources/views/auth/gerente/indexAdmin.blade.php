<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8"> 
    <link rel="stylesheet" href=" {{ asset('css/indexAdmin.css ') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class="fa-solid fa-dumbbell"></i>
      <span class="logo_name">WorldFitnessJS</span>
    </div>
    <ul class="nav-links">

      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>

        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>

      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa-solid fa-users"></i>
            <span class="link_name">Usuarios</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>

        <ul class="sub-menu">
          <li><a class="link_name" href="#">Usuarios</a></li>
          <li><a href=" {{route('usuario.create') }}">Usuarios</a></li>
          <li><a>Clientes</a></li>
          <li><a href=" {{route('valoracion_fisica.create') }}">Valoracion fisica</a></li>
          <li><a href="#">Entrenadores</a></li>
          <li><a href="#">Administradores</a></li>
        </ul>
        
      </li>
      
      <li>
        <a href="#">
          <i class="fa-solid fa-person-running"></i>
          <span class="link_name">Rutinas</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Rutinas</a></li>
        </ul>
      </li>


      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="fa-solid fa-triangle-exclamation"></i>
            <span class="link_name">Maquinaria</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Maquinaria</a></li>
          <li><a href="#">Maquinarias</a></li>
          <li><a href="{{route('mantenimiento.crear') }}">Mantenimiento</a></li>
          <li><a href="#">Reportes</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class="fa-solid fa-circle-info"></i>
          <span class="link_name">Perfil</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Perfil</a></li>
        </ul>
      </li>

      <li>
    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="name-job">
        <div class="profile_name">Santiago duarte</div>
        <div class="job">Administrador</div>
      </div>
      <a href="{{route('login.login') }}"><i class='bx bx-log-out'></i></a>
    </div>
  </li>
</ul>
</div>

  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Menu principal</span>
    </div>

    <div class="row g-3 my-2 section-cards">
      <div class="col-md-3 section-cards-one">
          <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
              <div>
                  <h3 class="fs-2">50</h3>
                  <p class="fs-5">Clientes</p>
              </div>
              <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
          </div>
      </div>

      <div class="col-md-3">
          <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
              <div>
                  <h3 class="fs-2">3</h3>
                  <p class="fs-5">Entrenadores</p>
              </div>
              <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
          </div>
      </div>

      <div class="col-md-3">
          <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
              <div>
                  <h3 class="fs-2">20</h3>
                  <p class="fs-5">Maquinas</p>
              </div>
              <i class="fa-solid fa-circle-question fs-1 primary-text border rounded-full secondary-bg p-3"></i>
          </div>
      </div>

      <div class="col-md-3">
          <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
              <div>
                  <h3 class="fs-2">%25</h3>
                  <p class="fs-5">Incremento</p>
              </div>
              <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
          </div>
      </div>
  </div>

    <div class="row my-5 table">
      <h3 class="fs-4 mb-3 table-title">Clientes recientes</h3>
      <div class="col">
          <table class="table bg-white rounded shadow-sm  table-hover">
              <thead>
                  <tr>
                      <th scope="col" width="50">#</th>
                      <th scope="col">Nombres</th>
                      <th scope="col">Apellidos</th>
                      <th scope="col">Telefono</th>
                      <th scope="col">Edad</th>
                      <th scope="col">Fecha inicio</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <th scope="row">1</th>
                      <td>Yohan santiago</td>
                      <td>Duarte martinez</td>
                      <td>3127887641</td>
                      <td>22</td>
                      <td>09/08/2022</td>
                  </tr>
                  
                  <tr>
                      <th scope="row">1</th>
                      <td>Yohan santiago</td>
                      <td>Duarte martinez</td>
                      <td>3127887641</td>
                      <td>22</td>
                      <td>09/08/2022</td>
                  </tr>

                  <tr>
                      <th scope="row">1</th>
                      <td>Yohan santiago</td>
                      <td>Duarte martinez</td>
                      <td>3127887641</td>
                      <td>22</td>
                      <td>09/08/2022</td>
                  </tr>

                  <tr>
                      <th scope="row">1</th>
                      <td>Yohan santiago</td>
                      <td>Duarte martinez</td>
                      <td>3127887641</td>
                      <td>22</td>
                      <td>09/08/2022</td>
                  </tr>

                  <tr>
                      <th scope="row">1</th>
                      <td>Yohan santiago</td>
                      <td>Duarte martinez</td>
                      <td>3127887641</td>
                      <td>22</td>
                      <td>09/08/2022</td>
                  </tr>

                  <tr>
                      <th scope="row">1</th>
                      <td>Yohan santiago</td>
                      <td>Duarte martinez</td>
                      <td>3127887641</td>
                      <td>22</td>
                      <td>09/08/2022</td>
                  </tr>

                  <tr>
                      <th scope="row">1</th>
                      <td>Yohan santiago</td>
                      <td>Duarte martinez</td>
                      <td>3127887641</td>
                      <td>22</td>
                      <td>09/08/2022</td>
                  </tr>

                  <tr>
                      <th scope="row">1</th>
                      <td>Yohan santiago</td>
                      <td>Duarte martinez</td>
                      <td>3127887641</td>
                      <td>22</td>
                      <td>09/08/2022</td>
                  </tr>

                  <tr>
                      <th scope="row">1</th>
                      <td>Yohan santiago</td>
                      <td>Duarte martinez</td>
                      <td>3127887641</td>
                      <td>22</td>
                      <td>09/08/2022</td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
  </section>

  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>


  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html>
