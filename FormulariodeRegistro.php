
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Registro - Piedra Del Canadá: El Órigen</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body style="width:50%;margin:auto;min-width:600px;max-width:1000px">
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h4 style=" text-align: center;"><a>Registro - Piedra Del Canadá: El Órigen</a></h4>
        <form id="formularioRegistro"   method="post" action="validarRegistro.php">
  			<img  style="display:block; margin:auto;" height="150"  width="150" src="http://www.piedradelcanadatr.com/wp-content/uploads/2018/08/PIEDRA-DEL-CANADA-PSD-2018-2-1024x1024.png"/>
			 
 			<ul >

			<div class="form-group">
				<p style="text-align: center;"><b>Datos de la Inscripción</b></p>
			</div>


			<div class="form-group">
				<h6>Los campos marcados con <span style="color:red;">*</span> son obligatorios</h6>
			</div>

			 
				<hr>
			 <div class="form-group"> <!-- Distancia -->
        <label for="state_id" class="control-label"><b>Seleccione Su Distancia <span style="color:red;">*</span></b></label>
        <select class="form-control" id="idDistancia">
            <option value="10K">10K - $56.000</option>
            <option value="21K">21K - $66.000</option>
            <option value="30K">30K - $76.000</option>
        </select>                    
	</div>
	
	<hr>
	
	<div class="form-group">
		<label class="control-label"><b>Información Personal</b></label>
	</div>

	<div class="form-group"> <!-- Nombres -->
        <label for="idNombre" class="control-label"> <b>Nombre(s) <span style="color:red;">*</span></b> </label>
        <input type="text" class="form-control" id="idNombre" name="idNombre" placeholder="Escriba su nombre" >
	</div>
	
	<div class="form-group"> <!-- Apellido -->
        <label for="idApellido" class="control-label"> <b>Apellidos <span style="color:red;">*</span></b> </label>
        <input type="text" class="form-control" id="idApellido" name="idApellido" placeholder="Escriba su apellido" >
	</div>

	<div class="form-group"> <!-- Correo Electronico -->
        <label for="idCorreo" class="control-label"> <b>Correo Electrónico <span style="color:red;">*</span></b> </label>
        <input type="text" class="form-control" id="idCorreo" name="idCorreo" placeholder="Escriba su correo electrónico" >
	</div>

	<div class="form-group"> <!-- Correo Electronico -->
        <label for="idConfirmacionCorreo" class="control-label"> <b>Confirmación Correo Electrónico <span style="color:red;">*</span></b> </label>
        <input type="text" class="form-control" id="idConfirmacionCorreo" name="idConfirmacionCorreo" placeholder="Vuelva a escribir su correo electrónico" >
	</div>
	
	<div class="form-group"> <!-- Tipo de Documento -->
        <label for="state_id" class="control-label"><b>Tipo de Identificación <span style="color:red;">*</span></b></label>
        <select class="form-control" id="idTipoIdentificacion">
            <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
            <option value="Cédula de Ciudadania">Cédula de Ciudadania</option>
            <option value="Pasaporte">Pasaporte</option>
        </select>                    
	</div>

	<div class="form-group"> <!-- Número de Identificación -->
        <label for="idNumeroIdentificacion" class="control-label"> <b>Número de Identificación <span style="color:red;">*</span></b> </label>
        <input type="number" class="form-control" id="idNumeroIdentificacion" name="idNumeroIdentificacion" placeholder="Escriba su número de identificación" >
	</div>

	<div class="form-group"> <!-- Fecha de Nacimiento -->
		<label for="idFechaNacimiento" class="control-label"> <b>Fecha de Nacimiento <span style="color:red;">*</span></b> </label>
		<br>
		<input type="date" class="form-control" name="fecha" min="1930-01-01" max="2018-05-25" step="2">
	</div>

	<div class="form-group"> <!-- Sexo -->
        <label for="idSexo" class="control-label"><b>Sexo<span style="color:red;">*</span></b></label>
        <select class="form-control" id="idSexo">
            <option value="Femenino">Femenino</option>
            <option value="Masculino">Masculino</option>
        </select>                    
	</div>

	<div class="form-group"> <!-- Telefono -->
        <label for="idTelefono" class="control-label"> <b>Teléfono <span style="color:red;">*</span></b> </label>
        <input type="number" class="form-control" id="idTelefono" name="idTelefono" placeholder="Escriba número de teléfono" >
	</div>

	<div class="form-group"> <!-- País -->
        <label for="idPais" class="control-label"> <b>País <span style="color:red;">*</span></b> </label>
        <input type="text" class="form-control" id="idPais" name="idPais" placeholder="" >
	</div>

	<div class="form-group"> <!-- Departamento -->
        <label for="idDepartamento" class="control-label"> <b>Departamento - Región - Provincia <span style="color:red;">*</span></b> </label>
        <input type="text" class="form-control" id="idDepartamento" name="idDepartamento" placeholder="" >
	</div>

	<div class="form-group"> <!-- Ciudad -->
        <label for="idCiudad" class="control-label"> <b>Ciudad <span style="color:red;">*</span></b> </label>
        <input type="text" class="form-control" id="idCiudad" name="idCiudad" placeholder="" >
	</div>
	
	<div class="form-group"> <!-- Tipo de Sangre -->
        <label for="idTipoSangre" class="control-label"><b>Tipo de Sangre<span style="color:red;">*</span></b></label>
        <select class="form-control" id="idTipoSangre">
            <option value="A-">A-</option>
            <option value="A+">A+</option>
            <option value="B-">B-</option>
            <option value="B+">B+</option>
            <option value="O-">O-</option>
            <option value="O+">O+</option>
            <option value="AB-">AB-</option>
            <option value="AB+">AB+</option>
		</select>                    
	</div>   
	
	<div class="form-group"> <!-- Ciudad -->
        <label for="idSeguroMedico" class="control-label"> <b>Entidad de Salud / Seguro Médico <span style="color:red;">*</span></b> </label>
        <input type="text" class="form-control" id="idSeguroMedico" name="idSeguroMedico" placeholder="" >
	</div>

	<div class="form-group"> <!-- Tipo de Sangre -->
        <label for="idTallaCamisa" class="control-label"><b>Talla Camisa<span style="color:red;">*</span></b></label>
        <select class="form-control" id="idTallaCamisa">
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
		</select>                    
	</div>  
	
	<hr>

	<div class="form-group">
		<label style=" text-align: center;" class="control-label"><b>Contacto de Emergencia</b></label>
	</div>

	<div class="form-group">
		<label class="control-label">Nos comunicaremos con el siguiente contacto en caso de emergencia</label>
	</div>

	<div class="form-group"> <!-- Nombre Contacto Emergencia -->
        <label for="idNombreContactoEmergencia" class="control-label"> <b>Nombre Contacto Emergencia </b> </label>
        <input type="text" class="form-control" id="idNombreContactoEmergencia" name="idNombreContactoEmergencia" placeholder="" >
	</div>

	<div class="form-group"> <!-- Teléfono Contacto Emergencia -->
        <label for="idTelefonoContactoEmergencia" class="control-label"> <b>Teléfono Contacto Emergencia</b> </label>
        <input type="text" class="form-control" id="idTelefonoContactoEmergencia" name="idTelefonoContactoEmergencia" placeholder="" >
	</div>

	<hr>
	<div class="form-group">
		<label class="control-label"><b>Términos y Condiciones de participación carrera atlética y declaración de exoneración de responsabilidades y autorización.</b></label>
	</div>

	<div class="form-group">
		<textarea disabled name="idTerminoCondiciones" id="idTerminoCondiciones" cols="87" rows="10">
		Con el diligenciamiento, firma de la presente declaración de aceptación, presencia en el evento y porte del número de competencia entiendo y acepto los términos y condiciones de participación en la carrera, aquí descritos, acepto las condiciones de inscripción y declaro que reconozco que este evento es una actividad potencialmente peligrosa y me acojo a su reglamento de participación.

Declaro que en forma libre y voluntaria he decidido participar en la carrera, que estoy en perfectas condiciones físicas y de salud, así como adecuadamente entrenado y preparado para participar en la misma y que estoy afiliado al régimen de salud, prestado por la EPS indicada al pie de mi firma. Aceptare cualquier decisión de la organización de la carrera sobre mi participación y entiendo que la inscripción a la carrera me da el derecho a participar en la competencia, bajo ninguna circunstancia en cualquier evento en que NO pueda participar en la carrera o reclamar el kit de competencia, en las fechas establecidas por la organización, no podré ni reclamar el kit de competencia, ni exigir el reembolso del valor de la inscripción.

Asumo todos los riesgos asociados con mi participación en esta carrera incluyendo pero no limitado a lesiones, caídas y demás accidentes, enfermedades generales, enfermedades de tipo cardiaco entre otras razones por el contacto con otros participantes, las condiciones del clima incluyendo temperatura, lluvias y humedad, tránsito vehicular, condiciones del recorrido, y en general todo riesgo, que declaro conocidos y valorados por mí, así mismo declaro que conozco la ruta y la información general y particular de la carrera.

Habiendo leído esta declaración, conociendo estos hechos y considerando que los acepto por el hecho de participar en la carrera, yo, en mi nombre y en el de cualquier persona que actúe en mi representación libero y eximo a los organizadores de la Carrera, aliados, patrocinadores y sus representantes y sucesores de todo reclamo o responsabilidad de cualquier tipo que surja de mi participación en este evento, incluso en circunstancias de caso fortuito o fuerza mayor, en razón a que la actividad durante el desarrollo de la carrera se encontrara bajo mi control y ejecución exclusiva como participante, así mismo de cualquier responsabilidad por cualquier extravió, robo y/o hurto que pudiere sufrir.
Declaro igualmente que acepto que los organizadores se reservan el derecho de cancelar o aplazar el evento por cualquier circunstancia.
Autorizo a los organizadores, aliados y patrocinadores al uso de fotografías, películas,videos, grabaciones y cualquier otro medio de registro de este evento para cualquier uso legítimo sin compensación económica alguna.
Adicionalmente, autorizo libre y voluntariamente el tratamiento de cualquier dato personal que suministre en desarrollo del evento por cualquier medio así como su incorporación en las bases de datos de los organizadores de la carrera, aliados y
6/8/2019 Términos y condiciones para la participación en una carrera patrocinadores cuya finalidad sea en el envío de información referente a la Carrera, envío de promociones y publicidad de cualquiera de los aquí mencionados mediante mensajes SMS a celulares, e-mails a las cuentas de correo electrónico registradas y contacto telefónico a los números de teléfono suministrados, sin costo alguno para mí.
Así mismo faculto a los organizadores para enviar o transferir mis datos a cualquiera de las compañías que controlen o que actúen como sus controlantes o como controlantes de ellas o que estén bajo control común con alguna de ellas, además de sus aliados comerciales y estratégicos, dentro y fuera del territorio nacional, para que realicen los usos aquí autorizados; pudiendo en todo caso ejercer en cualquier momento las acciones a que tengo derecho para la protección de mis datos personales conforme lo establecido en la Ley 1581 de 2012 y en el Decreto 1377 de 2013.
Entiendo y acepto que para el día de la competencia es obligatorio portar el número de competencia. Acepto los términos y condiciones establecidos en el presente documento, los cuales he entendido y aceptado voluntariamente.
		</textarea>
	</div>

	<div class="form-group">
		<input type="checkbox">
		<label class="control-label"><b>Acepto los terminos y condiciones.</b></label>
	</div>

	<hr>

	<div class="form-group"> <!-- Registramer - Botón -->
        <button type="submit" class="btn btn-primary">Registrarme</button>
	</div>     

			</ul>
		</form>	
		<div style="text-align:center;" id="footer">
			Desarrollado por <a  href="http://www.rupinsi.com">Rupinsi</a>
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
	</html>