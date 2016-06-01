<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	table.table, table.table th, table.tr , table.table td {
   border: 1px solid black;
}
	</style>
</head>
<body>
<h1 style="text-align:center;" >CURICCULUM VITAE</h1>
	<table style="width:50%;" >
		<tr>
			<td>1. Nom :</td>
			<td>{{ $cv->name }}</td>
		</tr>
		<tr>
			<td>2. Prénom :</td>
			<td>{{ $cv->pername }}</td>
		</tr>
		<tr>
			<td>3. Date de naissance :</td>
			<td>{{ $cv->birthday }}</td>
		</tr>
		<tr>
			<td>4. Adresse :</td>
			<td>{{ $cv->adress }}</td>
		</tr>
		<tr>
			<td>5. E-mail :</td>
			<td>{{ $cv->email }}</td>
		</tr>
		<tr>
			<td>6. Téléphone :</td>
			<td>{{ $cv->phone }}</td>
		</tr>		
	</table>

	<hr>
	7. Diplôme :
	<table style="width:100%; text-align: left;"  class="table">
		<thead>
			<tr>
				<th>Institution</th>
				<th>Date Début - Date fin</th>
				<th>Diplôme(s) obtenu(s):</th>
			</tr>
		</thead>
		<tbody>
			
				@foreach ($cv->diploma as $diploma)
					<tr>
						<td>{{  $diploma['institution']}}</td>
						<td>{{  $diploma['start'] }} {{  $diploma['end'] }}</td>
						<td>{{  $diploma['content'] }}</td>
					</tr>
				@endforeach
			
		</tbody>
	</table>
	<hr>
	8. Connaissance linguistique: indiquer vos connaissances sur une échelle de 1 à 5(1 - niveau excelent) :
	<table style="width:100%; text-align: left;" class="table" >
		<thead>
			<tr>
				<th>Langue</th>
				<th>Lu</th>
				<th>Parlé</th>
				<th>Ecrit</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($cv->lang as $lang)
				<tr>
					<td>{{  $lang['lang']}}</td>
					<td>{{  $lang['read'] }}</td>
					<td>{{  $lang['speak'] }}</td>
					<td>{{  $lang['write'] }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<hr>
	<table style="width:100%;" >
		<tr>
			<td>9. Affliation à une organsation (Ex : association des consultants...:) :
			{{ $cv->affilation }}</td>
		</tr>
		<tr>
			<td>10. Autre compétences (ex : connaissance informatique, etc.) :
			{{ $cv->otheskills }}</td>
		</tr>
		<tr>
			<td>11. Situation actuelle :
			{{ $cv->currentsituation }}</td>
		</tr>
		<tr>
			<td>12. Années d'anciennté auprès de l'employeur :
			{{ $cv->anciente }}</td>
		</tr>
		<tr>
			<td>13.  Qualifications principales : (pertientes pour l'appui aux PME dans les filières respectives) :
			{{ $cv->qualification }}</td>
		</tr>		
	</table>

	14. Experience professionnelle :
	<table style="width:100%; text-align: left;" class="table" >
		<thead>
			<tr>
				<th>De date</th>
				<th>à date</th>
				<th>Lieu</th>
				<th>Institution/entreprise</th>
				<th>Position</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($cv->expirience as $expirience)
				<tr>
					<td>{{  $expirience['start']}}</td>
					<td>{{  $expirience['end'] }}</td>
					<td>{{  $expirience['location'] }}</td>
					<td>{{  $expirience['company'] }}</td>
					<td>{{  $expirience['position'] }}</td>
					<td>{{  $expirience['denscription'] }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<hr>
	<table style="width:100%;" >
		<tr>
			<td>14. Autres informations pertinentes (Ex : référence de publications) :
			<p>{{ $cv->otherinformation }}</p></td>
		</tr>
	</table>

	15. Mes Références contenue dans la matrice de Compétence :
	<table style="width:100%; text-align: left;" class="table" >
		<thead>
			<tr>
				<th>Domaine d'intenrvention(référence)</th>
				<th>Cadre d'intervention</th>
				<th>Periode</th>
				<th>Société</th>
				<th>Appui ; Formation ; Etude</th>
				<th>Filiéres techniques</th>
				<th>Les client cincérnés par mon intervention</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($cv->matrix as $matrix)
				<tr>
					<td>{{  $matrix['domaine']}}</td>
					<td>{{  $matrix['cadre'] }}</td>
					<td>{{  $matrix['periode'] }}</td>
					<td>{{  $matrix['reference'] }}</td>
					<td>{{  $matrix['apui'] }}</td>
					<td>{{  $matrix['filieres'] }}</td>
					<td>{{  $matrix['client'] }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<hr>
</body>
</html>