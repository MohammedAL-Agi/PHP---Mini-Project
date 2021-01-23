<?php
$s = [
	[
		'id'       => 1,
		'name'     => 'Mohammed',
		'birthday' => '14 june',
		'attendence' =>
		[
			'check-in'  => '8.45',
			'check-out' => '16:00'
		]
	],
	[
		'id'       => 2,
		'name'     => 'abdAbdaldeen',
		'birthday' => '14 june',
		'attendence' =>
		[
			'check-in'  => '10.30',
			'check-out' => '16'
		]

	],
	[
		'id'       => 3,
		'name'     => 'ahmada3mar',
		'birthday' => '14 june',
		'attendence' =>
		[
			'check-in'  => '9',
			'check-out' => '16'
		]

	],
	[
		'id'       => 4,
		'name'     => 'anasJawabrah',
		'birthday' => '14 june',
		'attendence' =>
		[
			'check-in'  => '9',
			'check-out' => '16'
		]
	],
	[
		'id'       => 5,
		'name'     => 'ashraf-aljabari',
		'birthday' => '14 june',
		'attendence' =>
		[
			'check-in'  => '9',
			'check-out' => '15.30'
		]

	],
	[
		'id'       => 6,
		'name'     => 'danatoughoj',
		'birthday' => '5 may',
		'attendence' =>
		[
			'check-in'  => '9',
			'check-out' => '16'
		]

	],
	[
		'id'       => 7,
		'name'     => 'DiaaJamel',
		'birthday' => '14 june',
		'attendence' =>
		[
			'check-in'  => '9',
			'check-out' => '16'
		]

	],
	[
		'id'       => 8,
		'name'     => 'HalaHyasat',
		'birthday' => '14 june',
		'attendence' =>
		[
			'check-in'  => '9.10',
			'check-out' => '16'
		]

	],
	[
		'id'       => 9,
		'name'     => 'mhmdbdour',
		'birthday' => '14 june',
		'attendence' =>
		[
			'check-in'  => '9',
			'check-out' => '16'
		]

	],
	[
		'id'       => 10,
		'name'     => 'MaysamTurk',
		'birthday' => '14 june',
		'attendence' =>
		[
			'check-in'  => '9',
			'check-out' => '16'
		]
	]
	
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title>Attendence</title>
</head>
<body>
	<h1 style=" text-align: center;" >Trainees Atttendence</h1>
	
	<table class="table">
  <thead>
    <tr class="table-active" >
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Check-in</th>
      <th scope="col">Check-out</th>
    </tr>
  </thead>
  <tbody>

	<?php

	foreach ($s as $a) {

	if($a['attendence']['check-in'] > 9|| $a['attendence']['check-out'] < 16) {
		echo
		"
		<tr class='table-danger'>
		<th  scope='row'>{$a['id']}</th>
		<td>{$a['name']}</td>
		<td>{$a['attendence']['check-in']}</td>
		<td>{$a['attendence']['check-out']}</td>
		</tr>
		";
	}else{
		echo 
		"
		<tr class='table-success'>
		<th scope='row'>{$a['id']}</th>
		<td>{$a['name']}</td>
		<td>{$a['attendence']['check-in']}</td>
		<td>{$a['attendence']['check-out']}</td>
	</tr>
		";
	}
}
	?>
  </tbody>
</table>
</body>
</html>