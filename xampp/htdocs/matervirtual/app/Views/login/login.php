
<?= $this->extend('plantilla') ?>
<?= $this->section('content') ?>

<div id="layoutAuthentication">
  
	<div id="layoutAuthentication_content">
    <main>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-lg-5">
        		<div class="card shadow-lg border-0 rounded-lg mt-5">
        
							<div class="card-header">
								<h3 class="text-center font-weight-light my-4">
									<img id="profile-img" class="logo-imagen" src="<?php echo site_url('imagenes/logo.png'); ?>" />
								</h3>
							</div>	
								
							<div class="card-body">
                
								<?php 
									$attributos = ['class' => 'form-login', 'id' => 'form', 'autocomplete' => 'off' ];
									echo form_open('Login/validarLogin', $attributos);
								?>	
									
								<div class="form-floating mb-3">
									<?php 
										$attributosNombre = ['name' =>'input-correo', 'class' => 'form-control',  'type' => 'text', 'placeholder' => 'Correo Electrónico', 'value' => set_value('input-correo')];
										echo form_input($attributosNombre); 
									?>	
									<label id="label-correo">Correo Electrónico</label>
								</div>
                  
								<div class="form-floating mb-3">
									<?php 
										$attributosNombre = ['name' =>'input-clave', 'class' => 'form-control',  'type' => 'password', 'placeholder' => 'Contraseña'];
										echo form_input($attributosNombre); 
									?>		
									<label for="inputPassword" >Contraseña</label>
								</div>	
									
								<div class="mt-4 mb-0">
                <div class="d-grid">
									<?php 
										$attributosEnvio = ['class' => 'btn btn-primary btn-block',  'type' => 'submit', 'value' => 'Login' ];
										echo form_submit($attributosEnvio); 
									?>	
								</div>
              </div>			
									<!--
								<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                  <a class="small" href="password.html">Forgot Password?</a>
                  <a class="btn btn-primary" href="index.html">Login</a>
                </div>
                -->
									
							
									
									
								<?php echo form_close(); ?> 				
								
							</div>
              
							<!--	
							<div class="card-footer text-center py-3">
                <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
              </div>
							-->
              
						</div>
          </div>
        </div>
      </div>
    </main>
  </div>
		
	<!--	
  <div id="layoutAuthentication_footer">
    <footer class="py-4 bg-light mt-auto">
      <div class="container-fluid px-4">
				<div class="d-flex align-items-center justify-content-between small">
          <div class="text-muted">Copyright &copy; Your Website 2021</div>
					<div>
						<a href="#">Privacy Policy</a>
							&middot;
						<a href="#">Terms &amp; Conditions</a>
					</div>
				</div>
      </div>
    </footer>
  </div>
-->
 
 
</div>
				
<?= $this->endSection() ?>       



