<!DOCTYPE html>
<html lang="es">
<!-- Mirrored from mannatthemes.com/metrica/dark/analytics/analytics-customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2019 06:15:02 GMT -->

<head>
    <meta charset="utf-8">
    <title>Tu Mancha</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta content="Tu mancha fabio merino team" name="description">
    <meta content="Fabio Merino" name="author">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../front/images/favicon.ico">
    <!-- DataTables -->
    <!-- App css -->
    @include('front.includes.style_home_mancha')
    @yield('styles')
</head>
<body>
    <div class="main-wrapper">

        <!-- partial:../../partials/_sidebar.html -->
        
        <!-- menu -->
        <nav class="sidebar">
          <div class="sidebar-header">
            <div class="d-flex align-items-center">
              <figure class="mr-2 mb-0" style="position: relative">
                <img src="{{URL::asset('/uploads/usuario/'.Auth::user()->url_image)}}" class="img-sm rounded-circle" alt="profile">
                <div class="status online"></div>
              </figure>
              <div>
                <h6>{!! Auth::user()->name !!}</h6>
                <p class="text-muted tx-13">{!! Auth::user()->telefono !!}</p>
              </div>
            </div>
            <div class="sidebar-toggler not-active">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <div class="sidebar-body">
            <ul class="nav menu-mancha">
              <li class="nav-item">
                <a href="javascript:void(0);" class="nav-link">
                  <i class="link-icon" data-feather="smartphone"></i>
                  <span class="link-title">Mi Linea</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0);" class="nav-link">
                  <i class="link-icon" data-feather="plus-square"></i>
                  <span class="link-title">Recargas y bolsas</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0);" class="nav-link">
                  <i class="link-icon" data-feather="file-text"></i>
                  <span class="link-title">Mi Recibo</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0);" class="nav-link">
                  <i class="link-icon" data-feather="skip-back"></i>
                  <span class="link-title">Beneficios Cine</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0);" class="nav-link">
                  <i class="link-icon" data-feather="gift"></i>
                  <span class="link-title">Mis Promociones</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0);" class="nav-link">
                  <i class="link-icon" data-feather="truck"></i>
                  <span class="link-title">Tiendas</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0);" class="nav-link">
                  <i class="link-icon" data-feather="wifi"></i>
                  <span class="link-title">Cobertura</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
                  <i class="link-icon" data-feather="users"></i>
                  <span class="link-title">Tu mancha</span>
                  <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emails">
                  <ul class="nav sub-menu">
                    <li class="nav-item">
                      <a href="/familia" class="nav-link arma-tu-mancha">Arma tu mancha</a>
                    </li>
                    <li class="nav-item">
                      <a href="/Grupo" class="nav-link">Gestiona tus manchas</a>
                    </li>
                    <li class="nav-item">
                      <a href="/beneficio/persona/{!! Auth::user()->id !!}" class="nav-link">Beneficios diarios</a>
                    </li>
                    <li class="nav-item">
                      <a href="beneficios/grupo" class="nav-link">Beneficios Mancheros</a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <!-- end menu -->
        
        <!-- sidebar -->
        <!--<nav class="settings-sidebar">
          <div class="sidebar-body">
            <a href="#" class="settings-sidebar-toggler">
              <i data-feather="settings"></i>
            </a>
            <h6 class="text-muted">Sidebar:</h6>
            <div class="form-group border-bottom">
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
                  Light
                </label>
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
                  Dark
                </label>
              </div>
            </div>
            <div class="theme-wrapper">
              <h6 class="text-muted mb-2">Light Theme:</h6>
              <a class="theme-item active" href="../../dashboard-one.html">
                <img src="../../../assets/images/screenshots/light.jpg" alt="light theme">
              </a>
              <h6 class="text-muted mb-2">Dark Theme:</h6>
              <a class="theme-item" href="https://www.nobleui.com/html/template/demo_2/dashboard-one.html">
                <img src="../../../assets/images/screenshots/dark.jpg" alt="light theme">
              </a>
            </div>
          </div>
        </nav>-->
        <!-- end sidebar -->
        
        <!-- home -->
        
        <div class="page-wrapper">
                
            <!-- partial:../../partials/_navbar.html -->
            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">
                    <form class="search-form">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i data-feather="search"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown nav-apps">
                            <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="grid"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="appsDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">Web Apps</p>
                                    <a href="javascript:;" class="text-muted">Edit</a>
                                </div>
                                <div class="dropdown-body">
                                    <div class="d-flex align-items-center apps">
                                        <a href="../apps/chat.html"><i data-feather="message-square" class="icon-lg"></i><p>Chat</p></a>
                                        <a href="../apps/calendar.html"><i data-feather="calendar" class="icon-lg"></i><p>Calendar</p></a>
                                        <a href="../email/inbox.html"><i data-feather="mail" class="icon-lg"></i><p>Email</p></a>
                                        <a href="profile.html"><i data-feather="instagram" class="icon-lg"></i><p>Profile</p></a>
                                    </div>
                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-messages">
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="mail"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="messageDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">9 New Messages</p>
                                    <a href="javascript:;" class="text-muted">Clear all</a>
                                </div>
                                <div class="dropdown-body">
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="../../../assets/images/faces/face2.jpg" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Leonardo Payne</p>
                                                <p class="sub-text text-muted">2 min ago</p>
                                            </div>	
                                            <p class="sub-text text-muted">Project status</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="../../../assets/images/faces/face3.jpg" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Carl Henson</p>
                                                <p class="sub-text text-muted">30 min ago</p>
                                            </div>	
                                            <p class="sub-text text-muted">Client meeting</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="../../../assets/images/faces/face4.jpg" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Jensen Combs</p>												
                                                <p class="sub-text text-muted">1 hrs ago</p>
                                            </div>	
                                            <p class="sub-text text-muted">Project updates</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="../../../assets/images/faces/face5.jpg" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Amiah Burton</p>
                                                <p class="sub-text text-muted">2 hrs ago</p>
                                            </div>
                                            <p class="sub-text text-muted">Project deadline</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="../../../assets/images/faces/face6.jpg" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Yaretzi Mayo</p>
                                                <p class="sub-text text-muted">5 hr ago</p>
                                            </div>
                                            <p class="sub-text text-muted">New record</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-notifications">
                            <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>
                                <div class="indicator">
                                    <div class="circle"></div>
                                </div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">6 New Notifications</p>
                                    <a href="javascript:;" class="text-muted">Clear all</a>
                                </div>
                                <div class="dropdown-body">
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="user-plus"></i>
                                        </div>
                                        <div class="content">
                                            <p>New customer registered</p>
                                            <p class="sub-text text-muted">2 sec ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="gift"></i>
                                        </div>
                                        <div class="content">
                                            <p>New Order Recieved</p>
                                            <p class="sub-text text-muted">30 min ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="alert-circle"></i>
                                        </div>
                                        <div class="content">
                                            <p>Server Limit Reached!</p>
                                            <p class="sub-text text-muted">1 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="layers"></i>
                                        </div>
                                        <div class="content">
                                            <p>Apps are ready for update</p>
                                            <p class="sub-text text-muted">5 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="download"></i>
                                        </div>
                                        <div class="content">
                                            <p>Download completed</p>
                                            <p class="sub-text text-muted">6 hrs ago</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-profile">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../../../assets/images/faces/face1.jpg" alt="profile">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="figure mb-3">
                                        <img src="../../../assets/images/faces/face1.jpg" alt="">
                                    </div>
                                    <div class="info text-center">
                                        <p class="name font-weight-bold mb-0">Amiah Burton</p>
                                        <p class="email text-muted mb-3">amiahburton@gmail.com</p>
                                    </div>
                                </div>
                                <div class="dropdown-body">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item">
                                            <a href="profile.html" class="nav-link">
                                                <i data-feather="user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:;" class="nav-link">
                                                <i data-feather="edit"></i>
                                                <span>Edit Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:;" class="nav-link">
                                                <i data-feather="repeat"></i>
                                                <span>Switch User</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:;" class="nav-link">
                                                <i data-feather="log-out"></i>
                                                <span>Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->
            @yield('content')
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                <p class="text-muted text-center text-md-left">Copyright © 2019 <a href="https://www.nobleui.com/" target="_blank">Entel</a>. All rights reserved</p>
                <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Power by Fabitos Team<i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
            </footer>
            <!-- partial -->
        </div>
    </div>
    @include('front.includes.script_home_mancha')   
</body>
@yield('javascripts')   
</html>