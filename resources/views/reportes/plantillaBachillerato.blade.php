<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<img src="{{ base_path()}}/public/archivos/img/logohead.JPG" alt="">
	<br />
	<br />
	<br />
	<h2 align="center"> <b>Boleta Informativa del I, II y III Momento Pedagógico</b> </h2>
	<p align="center"><i><b>Año escolar 2019-2020</b></i></p>
	<br />
	<br />
	<br />
	<p>Nombres del Alumno: {{ $nombres ?? ""  }}</p>
	<p>Curso: {{ $curso ?? "" }} año Sección “{{ $seccion ?? "" }}”</p>
	<table border="1" width="100%">
		<tr>
			<td rowspan="2"> Asignturas</td>
			<td colspan="5"> Lapsos </td>
			
		</tr>
		<tr>
			<td>Lapso I</td>
			<td>Lapso II</td>
			<td>Lapso III</td>
			<td>Pts Ajuste</td>
			<td>Calificación Def.</td>
		</tr>
		<tr>
			<td>Inglés y otras lenguas extranjeras</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Matemática</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Biología</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Geografía, Historia y ciudadanía</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Arte y patrimonio</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Educación Física</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
</body>
</html>