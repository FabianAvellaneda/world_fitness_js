<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/indexCliente.css ') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
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
            <span class="link_name">Rutina</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>

        <ul class="sub-menu">
          <li><a class="link_name" href="#">Rutina</a></li>
          <li><a href="#">Ver rutina actual</a></li>
          <li><a href="#">Rutinas</a></li>
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
          <li><a href="#">Ver Maquinarias</a></li>
          <li><a href="#">Reportar</a></li>
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
      </div>
      <div class="name-job">
        <div class="profile_name">Santiago duarte</div>
        <div class="job">Cliente</div>
      </div>
      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
</div>

  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Menu principal</span>
    </div>
  <main>

    <h1>Hola cliente, estas son tus acciones</h1>

    <div class="container__box">
        <div class="box">
            <i class="lni lni-bookmark"></i>
            <h5>Ver rutina actual</h5>
            <h4>Ver rutina</h4>
        </div>
        <div class="box">
            <i class="lni lni-book"></i>
            <h5>Ver rutinas</h5>
            <h4>Rutinas</h4>
        </div>
        <div class="box">
            <i class="lni lni-eye"></i>
            <h5>ver Maquinas</h5>
            <h4>Maquinas</h4>
        </div>
        <div class="box">
            <i class="lni lni-warning""></i>
            <h5>Reportar Maquina</h5>
            <h4>Reportar</h4>
        </div>
        <div class="box">
            <i class="lni lni-question-circle"></i>
            <h5>Ver Perfil</h5>
            <h4>Perfil</h4>
        </div>
        <div class="box">
            <i class="lni lni-users"></i>
            <h5>Ver instructores</h5>
            <h4>Instructores</h4>
        </div>
        <div class="box">
            <i class="lni lni-camera"></i>
            <h5>Imagenes</h5>
            <h4>Imagenes WorldFitnessJS</h4>
        </div>
        <div class="box">
            <i class="lni lni-phone"></i>
            <h5>Contacto</h5>
            <h4>Contacto</h4>
        </div>
    </div>

</main>
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
