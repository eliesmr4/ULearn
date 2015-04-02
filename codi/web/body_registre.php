<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="estils.css"/>
</head>
<body class="seccio_registre">
<br>
<hr>
<h1>Registra't a ULearn</h1>
<hr>
<form name="formulari_registre" id="formulari_registre" method="post">
<fieldset class="fieldset">
<legend>Registre</legend>
<br>
	<fieldset class="fieldset">
	<legend>Dades Personals</legend>
	<table>
		<tr>
			<td>
			Nom:
			</td>
			<td>
			<input type="text" value="Nom" name="nom_usuari">
			</td>
		</tr>
	<br>
		<tr>
			<td>
			Primer Cognom: 
			</td>
			<td>
			<input type="text" value="Primer Cognom" name="primer_cognom_usuari">
			</td>
		</tr>
	<br>
		<tr>
			<td>
			Segon Cognom:
			</td>
			<td>  
			<input type="text" value="Segon Cognom" name="segon_cognom_usuari">
			</td>
		</tr>
	<br>
	</table>
	<hr>
	Genere: 
	<input type="radio" name="genere_usuari" value="masculi" checked>Masculi 
	<input type="radio" name="genere_usuari" value="femeni">Femeni
	<br>
	<hr>
	Data de Naixement: 
	<input type="text" name="dia_naixement_usuari" class="data_naixement_usuari"> / 
	<input type="text" name="mes_naixement_usuari" class="data_naixement_usuari"> /
	<input type="text" name="any_naixement_usuari" class="data_naixement_usuari"> (dd/mm/yyyy)
	<br>
	</fieldset>
	<br>
	<hr>
	<fieldset class="fieldset">
	<legend>Correu Electronic Institucional</legend>
	<table>
		<tr>
			<td>
			Correu:
			</td>
			<td>
			<input type="text" value="Id Correu" name="correu_usuari"> @e-campus.uab.cat
			</td>
		</tr>
		<br>
		<tr>
			<td>
			Repeteix Correu:
			</td>
			<td>
			<input type="text" value="Id Correu" name="correu_repetit_usuari"> @e-campus.uab.cat
			</td>
		</tr>
		<br>
		<tr>
			<td>
			Contrassenya:
			</td>
			<td>
			<input type="password" name="contrassenya_usuari">
			</td>
		</tr>
		<br>
		<tr>
			<td>
			Repeteix Contrassenya:
			</td>
			<td>
			<input type="password" name="contrassenya_repetida_usuari">
			</td>
		</tr>
	</table>
	</fieldset>
	<br><hr>
	<fieldset class="fieldset">
	<legend>Estudis</legend>
	<table>
	<tr>
	<td>
	Facultat:
	</td>
	<td>
	<select name="facultat">
	<option value="facultat_default">Selecciona Facultat</option>
	<option value="enginyeria">Escola d'Enginyeria</option>
	<option value="economia">Facultat d'Economia i Empresa</option>
	<option value="biociencies">Facultat de Biociències</option>
	<option value="ciencies">Facultat de Ciències</option>
	<option value="educacio">Facultat de Ciències de l'Educació</option>
	<option value="comunicacio">Facultat de Ciències de la Comunicació</option>
	<option value="politiques_sociologia">Facultat de Ciències Polítiques i de Sociologia</option>
	<option value="dret">Facultat de Dret</option>
	<option value="filosofia_lletres">Facultat de Filosofia i Lletres</option>
	<option value="medicina">Facultat de Medicina</option>
	<option value="psicologia">Facultat de Psicologia</option>
	<option value="traduccio_interpretacio">Facultat de Traducció i d'Interpretació</option>
	<option value="veterinaria">Facultat de Veterinària</option>
	<option value="prevencio_seguretat">Escola de Prevenció i Seguretat Integral</option>
	<option value="arxivistica">Escola Superior d'Arxivística i Gestió de Documents</option>
	<option value="turisme">Escola Universitària de Turisme i Direcció Hotelera</option>
	</select>
	</td>
	<br>
	<!-- Se hará una consulta a la base de datos sobre el resultado del select anterior i se rellenará el select siguiente con php y html. Este es estático,
	con los grados de la Escola d'Enginyeria-->
	<tr>
	<td>
	Grau:
	</td>
	<td>
	<select name="grau">
	<option value="grau_default">Selecciona Grau</option>
	<option value="informatica">Grau d'Enginyeria Informàtica</option>
	<option value="electronica_telecomunicacio">Grau d'Enginyeria Electrònica de Telecomunicació</option>
	<option value="telecomunicacio">Grau d'Enginyeria de Sistemes de Telecomunicació</option>
	<option value="informatica_ti_telecomunicacio">Grau d'Enginyeria Informàtica (Menció de Tecnologies de la Informació) + Grau d'Enginyeria de Sistemes de Telecomunicació</option>
	<option value="informatica_computadors_telecomunicacio">Grau Enginyeria Informàtica (Menció d'Enginyeria de Computadors) + Grau d'Enginyeria Electrònica de Telecomunicació</option>
	<option value="quimica">Grau d'Enginyeria Química</option>
	<option value="aeronautica">Grau de Gestió Aeronàutica</option>
	</select>
	</td>
	</table>
	</fieldset>
	<br><br><br>
	<input type="submit" value="Registrar-se" id="boto_registre" name="boto_registre" class="boto_registre">
</fieldset>
</form>
<br><br><br>
<hr>
<table class="links">
<tr>
<td>
<a href=""#>Contacte</a>
</td>
<td>
<a href=""#>FAQ</a>
</td>
<td>
<a href=""#>Copyright 2015 ULearn Inc.</a>
</td>
<td>
<a href=""#>Terminis</a>
</td>
<td>
<a href=""#>Privacitat</a>
</td>
<tr>
</table>
</body>
</html>