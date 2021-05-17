<?php
$people = [
	['id' => 1, 'first_name' => 'John', 'last_name' => 'Smith', 'email' => 'john.smith@hotmail.com'],
	['id' => 2, 'first_name' => 'Paul', 'last_name' => 'Allen', 'email' => 'paul.allen@microsoft.com'],
	['id' => 3, 'first_name' => 'James', 'last_name' => 'Johnston', 'email' => 'james.johnston@gmail.com'],
	['id' => 4, 'first_name' => 'Steve', 'last_name' => 'Buscemi', 'email' => 'steve.buscemi@yahoo.com'],
	['id' => 5, 'first_name' => 'Doug', 'last_name' => 'Simons', 'email' => 'doug.simons@hotmail.com'],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>People Table</title>
	<style>
		table, th, td {
            border: 1px solid black;
		}
	</style>
</head>

<body>
    <table>
	    <thead>
		    <tr>
                <th>ID</th>
			    <th>First name</th>
			    <th>Last name</th>
			    <th>Email</th>
		    </tr>
	    </thead>
	    <tbody>
		    <?php foreach ($people as $person) : ?>
			    <tr id = <?= $person['id']; ?>>
                    <td scope="row"><?= $person['id']; ?></td>
				    <td class="row-data"><?= $person['first_name']; ?></td>
				    <td class="row-data"><?= $person['last_name']; ?></td>
				    <td class="row-data"><?= $person['email']; ?></td>
                    <td><input type="button" onclick="show()" value="Show"></td>
			    </tr>
		    <?php endforeach; ?>
	    </tbody>
    </table>
    <script>
			function show() {
				var rowId = event.target.parentNode.parentNode.id;
				var data = document.getElementById(rowId).querySelectorAll(".row-data");

                var firstName = data[0].innerHTML;
                var lastName = data[1].innerHTML;
				var email = data[2].innerHTML;

				alert("Name: " + firstName + " " + lastName + "\nEmail: " + email);
			}
		</script>
</body>

</html>
