<?= $this->extend('vistas/plantilla') ?>
<?= $this->section('escritorio') ?>

<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
      <div class="row">
				<?php foreach ($sistemas as $key => $sistema): ?> 
					<div class="col-xl-3 col-md-6">
						<span class="oi oi-lock-unlocked"></span>
              <div class="card text-white mb-4 <?php echo $sistema->descol?>">
                <div class="card-body"><?php echo $sistema->dessis?> </div>
								<div class="card-footer d-flex align-items-center justify-content-between">
									<a class="small text-white stretched-link" href="<?php echo base_url($sistema->urlsis)?>"><?php echo $sistema->nomsis; ?></a>
										<div class="small text-white"><i class="<?php echo $sistema->desico?>"></i></div>
								</div>
              </div>
          </div>	
				<?php endforeach; ?>    
			</div>
	</div>
</main>
			
		
<?= $this->endSection() ?>  