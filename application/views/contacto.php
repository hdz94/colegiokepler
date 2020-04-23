<div class="container-fluid contacto" id="contacto">
	<div class="row">
		<div class="container margin-bottom50">
			<div class="row">
				<div class="col-12 text-center margin-top30 margin-bottom30">
					<h1 class="purple">Contacto</h1>
					<p>Envíanos un mensaje si deseas agendar una cita o algún tipo de información, en breve nos pondremos en contacto.</p>
				</div>
				<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 contacto-form">
					<form class="contact-form">
  						<div class="form-group">
    						<input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre*">
  						</div>
  						<div class="form-group">
    						<input type="phone" class="form-control" name="Telefono" id="Telefono" placeholder="Teléfono">
  						</div>
  						<div class="form-group">
    						<input type="email" class="form-control" name="Email" id="Email" placeholder="E-mail*">
  						</div>
  						<div class="form-group">
							<textarea name="Mensaje" id="Mensaje" required class="form-control" rows="7" placeholder="Mensaje*"></textarea>
						</div>
 						
 						
 						
 						
 						
 						
  						<button type="submit" class="btn btn-secondary">Enviar</button>
					</form>
					<div class="confirmation">
						<p> </p>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 margin-top20 contacto-datos">
					<div class="cnt_info">
						<h3><i class="fa fa-map-marker"></i>Ubicación</h3>
						<p><span class="numb">71</span> Poniente <span class="numb">1508</span>. San José Mayorazgo</p>
						<h3><i class="fa fa-envelope"></i>Mail</h3>
						<p>ck<span class="numb">@</span>colegiokepler.edu.mx</p>
						<h3><i class="fa fa-phone"></i>Teléfonos</h3>
						<p><span class="numb">(222) 573 4500</span></p>
						<h3><i class="fa fa-whatsapp"></i>WhatsApp</h3>
						<p>(044) 2221 54 43 58</p>
					</div>
				</div>
			</div>
		</div>
		<div id="map" class="col-12" style="height: 300px;"></div>
	</div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuoi_z_Ar6aI8ilJmz-GgxGUDfWzARcjg&language=es&region=MX&callback=initMap"
    async defer></script>
<script>
      function initMap() {
      	var uluru = {lat: 19.0147332, lng: -98.2319069};
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
         center: uluru,
          zoom: 17,
        });
      }
</script>
<script>
$(document).ready(function() {
	'use strict';
	$('form.contact-form').on('submit', function(e) {
		$.post('gracias', $(this).serialize(), function(response) {
			if ($('.confirmation p').html() != "") {
				$('.confirmation p').replaceWith('<p><span class="fa fa-check"></span></p>');
			}
			$('.confirmation p').append(response).parent('.confirmation').show();
			$('html, body').animate({
				scrollTop: $('#section-contact').offset().top
				},{duration:800,queue:true});
			$('.form-item').val('');
			setTimeout(function() {
				$('.confirmation').hide();
			}, 8000);
		});
		// disable default action
		e.preventDefault();
	});

});</script>