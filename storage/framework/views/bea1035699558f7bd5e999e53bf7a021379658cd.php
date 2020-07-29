<?php $page="register1";?>

<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div class="content account-page" style="padding: 50px 0;"> 
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
								
							<!-- Register Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Registrate en Exchange</h3>
										</div>
										
										<!-- Register Form -->
										<form action="doctor-dashboard">
											<div class="form-group form-focus">
												<input type="text" class="form-control floating">
												<label class="focus-label">Nombre</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating">
												<label class="focus-label">Correo</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating">
												<label class="focus-label">Contraseña</label>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="login">¿Ya tienes una cuenta?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Ingresar</button>
											<div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">ó</span>
											</div>
											<div class="row form-row social-login">
												<div class="col-6">
													<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Ingresar</a>
												</div>
												<div class="col-6">
													<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Ingresar</a>
												</div>
											</div>
										</form>
										<!-- /Register Form -->
										
									</div>
								</div>
							</div>
							<!-- /Register Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Leiner\USCO\20191178893\3er Semestre\Ingenieria de Software\Proyecto Final\doccure-10\template\resources\views/register.blade.php ENDPATH**/ ?>