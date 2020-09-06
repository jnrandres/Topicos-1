  <!-- Main content -->
  <section class="content-citas">

  	<div class="row mt-4">
  		<div class="col-12">
  			<div class="titulo_citas">
  				Evaluación Covid-19
  			</div>
  		</div>
  	</div>
  	<form method="post">
  		<div class="row mt-5">
  			<div class="col-12 mb-4">
  				<div class="form-citas form-citass ">
  					<p style="color: #212529">Síntomas:<p>
  							<div class="form-check">
  								<input type="checkbox" class="form-check-input" name="c_fiebre" >
  								<label class="form-check-label" for="exampleCheck1">Fiebre</label>
  							</div>
  							<div class="form-check">
  								<input type="checkbox" class="form-check-input" name="c_dolorCa">
  								<label class="form-check-label" for="exampleCheck1">Dolor de cabeza</label>
  							</div>
  							<div class="form-check">
  								<input type="checkbox" class="form-check-input" name="c_tos">
  								<label class="form-check-label" for="exampleCheck1">Tos</label>
  							</div>
  				</div>
  				<div class="form-citas form-citass mt-4">
  					<div class="form-check">
  						<input type="checkbox" class="form-check-input" name="c_dolorGarganta">
  						<label class="form-check-label" for="exampleCheck1">Dolor de garganta</label>
  					</div>
  					<div class="form-check">
  						<input type="checkbox" class="form-check-input" name="c_nasal">
  						<label class="form-check-label" for="exampleCheck1">Congestión nasal</label>
  					</div>
  					<div class="form-check">
  						<input type="checkbox" class="form-check-input" name="c_diarrea">
  						<label class="form-check-label" for="exampleCheck1">Diarrea</label>
  					</div>
  				</div>
  				<div class="form-citas form-citass mt-4">
  					<div class="form-check">
  						<input type="checkbox" class="form-check-input" name="c_Flema">
  						<label class="form-check-label" for="exampleCheck1">Flema</label>
  					</div>
  					<div class="form-check">
  						<input type="checkbox" class="form-check-input" name="c_apetito">
  						<label class="form-check-label" for="exampleCheck1">Falta de apetito</label>
  					</div>
  				</div>

  				<div class="form-citas form-citass mt-4">
  					<p style="color: #212529">Inicio de los síntomas:</p>
  					<input type="date" name="fecha" class="select_citas" name="fecha_revisar">
  				</div>

  				<div class="form-citas form-citass mt-4">
  					<p style="color: #212529">Enfermedades latentes:<p>
  							<div class="form-check">
  								<input type="checkbox" class="form-check-input" name="c_diabetis">
  								<label class="form-check-label" for="exampleCheck1">Diabetis</label>
  							</div>
  							<div class="form-check">
  								<input type="checkbox" class="form-check-input" name="c_hipertension">
  								<label class="form-check-label" for="exampleCheck1">Hipertensión</label>
  							</div>
  							<div class="form-check">
  								<input type="checkbox" class="form-check-input" name="c_asma">
  								<label class="form-check-label" for="exampleCheck1">Asma</label>
  							</div>
  				</div>

  				<div class="form-citas form-citass mt-4">
  					<div class="form-check">
  						<input type="checkbox" class="form-check-input" name="c_tbc">
  						<label class="form-check-label" for="exampleCheck1">TBC</label>
  					</div>
  					<div class="form-check">
  						<input type="checkbox" class="form-check-input" name="c_hepetatis">
  						<label class="form-check-label" for="exampleCheck1">Hepatitis</label>
  					</div>
  					<div class="form-check">
  						<input type="checkbox" class="form-check-input" name="c_vih">
  						<label class="form-check-label" for="exampleCheck1">VIH</label>
  					</div>
  				</div>

  				<div class="form-citas form-citass mt-4">
  					<p style="color: #212529">Otras</p>
  					<input type="text"  name="otros">
  				</div>

  				<!-- <div class="form-citas form-citass mt-4">
  					<div class="form-check">
  						<input type="checkbox" class="form-check-input" name="c_aceptarTerm">
  						<label class="form-check-label" for="exampleCheck1">Aceptar terminos</label>
  					</div>
  				</div> -->

  				<div class="btn-azul mt-4">
  					<button>Enviar Evaluación </button>
  				</div>

  			</div>
		  </div>

		  <input type="hidden" name="id_usuario"  value="<?php echo $_SESSION['id']; ?>">
		  
		  <?php 
			
			$evaluacion = new ControladorEvaluacion();
			$evaluacion -> registrarEvaluacion();
		 
		 ?>
  	</form>


  	<!-- SECCION DE FRENA LA CURVA -->

  	<div class="container-fluid mt-4 mb-4">
  		<div class="row">
  			<div class="col-8">
  				<img src="vistas/img/frenaCurva.svg" class="mx-auto d-block" alt="">
  			</div>
  			<div class="col-4">
  				<img src="vistas/img/covid.svg" class="mx-auto d-block" alt="">
  			</div>
  		</div>
  	</div>


  	<!-- CENTRAL TELEFONICA -->
  	<div class="card  central-telefonica mt-4 mb-4">
  		<div class="card-header border-0 d-flex justify-content-center">
  			<h3 class="card-title "><i class="fas fa-phone-volume"></i> Central telefonica</h3>
  		</div>
  		<!-- /.card-header -->
  		<div class="card-body fa-3x d-flex justify-content-center">
  			+51 987654321
  		</div>
  	</div>

  	 <!-- NUESTRO CONVENIOS -->
	   <div class="card convenios mt-4">
        <div class="card-header border-0">
          <h3 class="card-title "><i class="fas fa-hands-helping"></i> Nuestros convenios</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body fa-3x">
          <div class="row">
            <div class="col-6">
              <img src="vistas/img/convenios/rimac.svg" class="mx-auto d-block" alt="">
            </div>
            <div class="col-6">
              <img src="vistas/img/convenios/pacifico.svg" class="mx-auto d-block" alt="">
            </div>
          </div>
        </div>
      </div>


  </section>
  <!-- /.content -->