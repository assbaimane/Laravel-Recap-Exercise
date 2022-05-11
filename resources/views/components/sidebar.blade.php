<link rel="stylesheet" href={{ asset("css/sidebar.css") }}>
<link rel="stylesheet" href={{ asset('css/fontawesome.css') }}>
<link rel="stylesheet" href={{ asset('css/app.css') }}>

<div>
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">Recap</div>
        <i class='text-light fa-solid fa-school' id="btn"></i>
    </div>

    <ul class="nav-list">
      <li>
        <a href={{ route('role.index') }}>
          <span class="links_name">Roles</span>
        </a>
         <span class="tooltip">Roles</span>
      </li>
      
      <li>
        <a href={{ route('banner.index') }}>
          {{-- <i class='fa-solid fa-medal'></i> --}}
          <span class="links_name">Banners</span>
        </a>
         <span class="tooltip">Banners</span>
      </li>

      <li>
        <a href={{ route('services.index') }}>
          {{-- <i class='fa-solid fa-medal'></i> --}}
          <span class="links_name">Services</span>
        </a>
         <span class="tooltip">Services</span>
      </li>

     <li class="profile">
         <div class="profile-details">
          <div class="name_job">
             <div class="name">Imane A.</div>
             <div class="job">Front developer à Molengeek</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  
  <section class="home-section">
      @yield('content')
  </section>

  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace(" fa-bars", " fa-chevron-left");//replacing the iocns class
   }else {
     closeBtn.classList.replace(" fa-chevron-left"," fa-bars");//replacing the iocns class
   }
  }
  </script>

</div>