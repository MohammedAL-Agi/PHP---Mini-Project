<?php
$trainee = [
	[
		'id'       => 1,
		'name'     => 'Mohammed',
	],
	[
		'id'       => 2,
		'name'     => 'abdAbdaldeen',
	],
	[
		'id'       => 3,
		'name'     => 'ahmada3mar',
	],
	[
		'id'       => 4,
		'name'     => 'anasJawabrah',

	],
	[
		'id'       => 5,
		'name'     => 'ashraf-aljabari',

	],
	[
		'id'       => 6,
		'name'     => 'danatoughoj',

	],
	[
		'id'       => 7,
		'name'     => 'DiaaJamel',

	],
	[
		'id'       => 8,
		'name'     => 'HalaHyasat',

	],
	[
		'id'       => 9,
		'name'     => 'mhmdbdour',

	],
	[
		'id'       => 10,
		'name'     => 'MaysamTurk',
	]
	
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title>Dashboard</title>
</head>
<body>
	<h1 style="text-align: center;" >Dashboard</h1>

		<h3>Number of trainee is: 10 trainees.</h3>
		<br>
		<h3>Number of completed projects is : 2 project for each trainee. </h3>
		<br>
		<table class="table">

		<thead>
    <tr class="table-dark" >
      <th scope="col">#</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
<?php
	foreach ($trainee as $n) {
		echo
		"
		<tr class='table-primary'>
		<th scope='row'>{$n['id']}</th>
		<td>{$n['name']}</td>
		</tr>
		";
	}
?>


	</tbody>
</table>
</body>
</html>