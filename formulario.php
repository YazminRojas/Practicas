<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
	<!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

	<section class="hero is-primary">
  		<div class="hero-body">
    		<p class="title">
      			Datos de empleado
    		</p>
  		</div>
	</section>

	<section class="section is-medium columns">

  		<div class="column"></div>

  		<div class="column is-two-fifths">
			<form action="procesar.php" method="post">
				<div>
					<label class="label">Nombre (s):</label>
					<input class="input is-primary" type="text" name="nombre" required>
				</div>

                <div>
					<label class="label">Apellido paterno:</label>
					<input class="input is-primary" type="text" name="apellidoPaterno" required>
				</div>

                <div>
					<label class="label">Apellido materno:</label>
					<input class="input is-primary" type="text" name="apellidoMaterno" required>
				</div>

                <div class="select is-primary">
				    <label class="label">Cargo:</label>
                    <select>
                        <option>Selecciona una opción</option>
                        <option>Director ejecutivo</option>
						<option>Responsable operativo</option>
						<option>Responsable de ventas</option>
						<option>Responsable de marketing</option>
						<option>Recursos humanos</option>
						<option>Responsable financiero</option>
                    </select>
                </div><br><br><br>

                <div>
					<label class="label">RFC:</label>
					<input class="input is-primary" type="text" name="rfc" required>
				</div>

                <div>
					<label class="label">CURP:</label>
					<input class="input is-primary" type="text" name="curp" required>
				</div>

                <div>
					<label class="label" >Domicilio:</label>
					<input class="input is-primary" type="text" name="domicilio" required>
				</div>

                <div>
					<label class="label">Teléfono:</label>
					<input class="input is-primary" type="tel" name="telefono" required>
				</div>

                <div>
				    <label class="label">Correo electronico</label>
					<input class="input is-primary" type="email" placeholder="ejemplo: yaz54@gmail.com">
				</div><br>

				<div>
				    <label class="label">Sexo:</label>
                    <input type="radio" name=SexoRadio"><label for="SexoRadio"> Hombre </label>
				    <input type="radio" name=SexoRadio"><label for="SexoRadio"> Mujer </label>
			    </div> <br>

                <div>
				    <label class="label">Fecha de nacimiento:</label>
					<input class="input is-primary" type="date" name="fechaNacimiento" required>
				</div><br>

                <div class="select is-primary">
				    <label class="label">Estado civil:</label>
                    <select>
                        <option>Selecciona una opción</option>
                        <option>Soltero</option>
						<option>Casado</option>
						<option>Divirciado</option>
						<option>Separado</option>
						<option>Viudo</option>
						<option>Concubinato</option>
						<option>Union libre</option>
                    </select>
                </div><br><br><br>

                <div class="select is-primary" >
				    <label class="label">Escolaridad:</label>
                    <select>
                        <option>Selecciona una opción</option>
                        <option>Educación preescolar</option>
						<option>Educación primaria</option>
						<option>Educación secundaria</option>
						<option>Educación media superior</option>
						<option>Educación superior</option>
                    </select>
                </div><br><br><br>

                <div>
					<label class="label">Referencia familiar:</label>
					<input class="input is-primary" type="text" name="referenciaFamiliar" required>
				</div><br>

                <div>
				    <textarea class="textarea" placeholder="Observaciones generales..."></textarea>
				</div><br>

				<div>
					<input class="button is-primary" type="submit" value="Enviar">
				</div>
			</form>
		</div>

		<div class="column"></div>

	</section>

</body>
</html>