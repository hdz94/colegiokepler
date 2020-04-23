<form id="my_form" onsubmit="submitForm(); return false;">
  
  <p><input id="n" placeholder="Name" required></p>
  
  <p><input id="e" placeholder="Email Address" type="email" required></p>
  
  <textarea id="m" placeholder="write your message here" rows="10" required></textarea>
  
  
  <p>
      <input id="mybtn" type="submit" value="Submit Form"> 
      <span id="status"></span>
  </p>

</form>


<form id="my_form" class="contact-form" onsubmit="submitForm(); return false;">
  						
      <div class="form-group">
           
           <input type="text" class="form-control" name="Nombre" id="n" placeholder="Nombre*" required>
      
      </div>

      <div class="form-group">
            
            <input type="phone" class="form-control" name="Telefono" id="t" placeholder="Teléfono">
      
      </div>

      <div class="form-group">
            <input type="email" class="form-control" name="Email" id="e" placeholder="E-mail*">
      </div>

      <div class="form-group">
            
            <textarea name="Mensaje" id="m" required class="form-control" rows="7" placeholder="Mensaje*"></textarea>
      
      </div>
  		
      <button id="mybtn" type="submit" class="btn btn-secondary" value="Submit Form">Enviar</button>
      
      <div class="confirmation">
           
           <p><span id="status"></span></p>
      
      </div>

</form>


<script>
    function _(id){ return document.getElementById(id); }
    
    function submitForm (){
            _(mybtn).disable = true;
            _("status").innerHTML = 'please wait ...';
            var formdata = new FormData();
            
            formdata.append( "n", _("n").value );
            formdata.append( "t", _("n").value );
	        formdata.append( "e", _("e").value );
	        formdata.append( "m", _("m").value );
        
            var ajax = new XMLHttpRequest();
	        ajax.open( "POST", "gracias.php" );
        
            ajax.onreadystatechange = function() {
		
                    if(ajax.readyState == 4 && ajax.status == 200) {
			       
                    if(ajax.responseText == "success"){
				
                    _("my_form").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>';
			        } else {
				
                    _("status").innerHTML = ajax.responseText;
				    _("mybtn").disabled = false;
			      }
		}
	}
	ajax.send( formdata );
    
            
    }
</script>