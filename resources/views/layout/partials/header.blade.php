<?php error_reporting(0);?>
<!-- Loader -->
@if(Route::is(['map-grid','map-list']))
<div id="loader">
		<div class="loader">
			<span></span>
			<span></span>
		</div>
	</div>
	@endif
	<!-- /Loader  -->
<div class="main-wrapper">
<!-- Header -->
<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index" class="navbar-brand logo">
							<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index" class="menu-logo">
								<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="{{ Request::is('index') ? 'active' : '' }}">
								<a href="index">Inicio</a>
							</li>
							<li class="has-submenu <?php if($page=="doctor-profile" || $page=="register" || $page=="doctor-dashboard" || $page=="appointments" || $page=="schedule-timings" || $page=="my-patients" || $page=="patient-profile" || $page=="chat-doctor" || $page=="invoices" || $page=="doctor-profile-settings") { echo 'active'; } ?>">
								<a href="">Creadores <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="<?php if($page=="doctor-profile") { echo 'active'; } ?>"><a href="profile">Artes</a></li>
									<li class="<?php if($page=="appointments") { echo 'active'; } ?>"><a href="profile">Desarrollo profesional</a></li>
									<li class="<?php if($page=="schedule-timings") { echo 'active'; } ?>"><a href="profile">Informatica</a></li>
									<li class="<?php if($page=="my-patients") { echo 'active'; } ?>"><a href="profile">Idiomas</a></li>
									<li class="<?php if($page=="patient-profile") { echo 'active'; } ?>"><a href="profile">Música</a></li>
									<li class="<?php if($page=="chat-doctor") { echo 'active'; } ?>"><a href="profile">Salud y bienestar</a></li>
									<li class="<?php if($page=="doctor-profile-settings") { echo 'active'; } ?>"><a href="profile">Apoyo escolar</a></li>
									<li class="<?php if($page=="register") { echo 'active'; } ?>"><a href="profile">Deportes y baile</a></li>
								</ul>
							</li>		
							<li class="has-submenu <?php if($page=="course" || $page=="map-list" || $page=="search1" || $page=="doctor" || $page=="booking" || $page=="checkout" || $page=="booking-success" || $page=="patient-dashboard" || $page=="favourites" || $page=="chat" || $page=="profile-settings" || $page=="change-password") { echo 'active'; } ?>">
								<a href="">Cursos <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="<?php if($page=="course") { echo 'active'; } ?>"><a href="course">Html y CSS desde 0</a></li>
									<li class="<?php if($page=="doctor") { echo 'active'; } ?>"><a href="course">Programacion orientada a objetos</a></li>
									<li class="<?php if($page=="booking") { echo 'active'; } ?>"><a href="course">JavaScript desde 0</a></li>
									<li class="<?php if($page=="checkout") { echo 'active'; } ?>"><a href="course">Bases de datos relacionales</a></li>
									<li class="<?php if($page=="booking-success") { echo 'active'; } ?>"><a href="course">Ingles Basico</a></li>
									<li class="<?php if($page=="patient-dashboard") { echo 'active'; } ?>"><a href="course">Calculo diferencial</a></li>
									<li class="<?php if($page=="favourites") { echo 'active'; } ?>"><a href="course">Aprende a tocar guitarra</a></li>
									<li class="<?php if($page=="chat") { echo 'active'; } ?>"><a href="course">Marketing digirtal</a></li>
									<li class="<?php if($page=="profile-settings") { echo 'active'; } ?>"><a href="course">Redes sociales</a></li>
									<li class="<?php if($page=="change-password") { echo 'active'; } ?>"><a href="course">React JS basico</a></li>
								</ul>
							</li>


							
							<li class="has-submenu <?php if($page=="blog-list" || $page=="blog-grid" || $page=="blog-details") { echo 'active'; } ?>">
                            <a href="/blog-list">Blog </i></a>
                        </li>
						<li>
								<a href="doctor-dashboard" >Admin</a>
							</li>
						</ul>		 
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							@if(Route::is(['page','blank-page','term-condition','privacy-policy','blog-details','blog-grid','blog-list','forgot-password','register','login','invoice-view','doctor-register','components','calendar','map-grid','map-list','search','doctor-profile','booking','checkout','booking-success']))
							<li class="nav-item">
							<a class="nav-link header-login" href="login">Ingresar / Registrarse </a>
							</li>
							@endif
						</li>
						@if(Route::is(['patient-dashboard','favourites','video-call','profile-settings','change-password','voice-call']))
						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="assets/img/patients/patient.jpg" width="31" alt="Ryan Taylor">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="user-header">
									<div class="avatar avatar-sm">
										<img src="assets/img/patients/patient.jpg" alt="User Image" class="avatar-img rounded-circle">
									</div>
									<div class="user-text">
										<h6>Richard Wilson</h6>
										<p class="text-muted mb-0">Patient</p>
									</div>
								</div>
								<a class="dropdown-item" href="patient-dashboard">Dashboard</a>
								<a class="dropdown-item" href="profile-settings">Profile Settings</a>
								<a class="dropdown-item" href="login">Logout</a>
							</div>
						</li>
						@endif
						@if(!Route::is(['page','blank-page','term-condition','privacy-policy','blog-details','blog-grid','blog-list','forgot-password','register','login','calendar','invoice-view','components','change-password','video-call','doctor-register','voice-call','favourites','map-grid','profile-settings','map-list','search','patient-dashboard','doctor-profile','booking','checkout','booking-success']))
						<!-- User Menu -->
						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" width="31" alt="Darren Elder">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="user-header">
									<div class="avatar avatar-sm">
										<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image" class="avatar-img rounded-circle">
									</div>
									<div class="user-text">
										<h6>Darren Elder</h6>
										<p class="text-muted mb-0">Doctor</p>
									</div>
								</div>
								<a class="dropdown-item" href="doctor-dashboard">Dashboard</a>
								<a class="dropdown-item" href="doctor-profile-settings">Profile Settings</a>
								<a class="dropdown-item" href="login">Logout</a>
							</div>
						</li>
						<!-- /User Menu -->
						@endif
						
					</ul>
				</nav>
			</header>
			<!-- /Header -->