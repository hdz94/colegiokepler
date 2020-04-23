<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gracias extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
	}
}

	
	$name = $_REQUEST[ 'Nombre' ];
	$telefono = $_REQUEST[ 'Telefono' ];
	$email = $_REQUEST[ 'Email' ];
	$message = $_REQUEST[ 'Mensaje' ];
	$mail_subject = "Contacto página web";
	$message = "Nombre: ".$name." || Teléfono: ".$telefono." || Email: ".$email." || Mensaje: ".$message;
	
	/* Replace YOUR_MAIL With Your Mail Address inside '' */
	if ( mail( 'ck@colegiokepler.edu.mx', $mail_subject, $message, "De:" . $email ) ) {
		echo "Gracias <strong>$name</strong> por contactarte con nosotros tu mail ha sido enviado exitosamente";
	} else {
		echo "Error al enviar el mail";
	}
