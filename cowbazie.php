<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sklep muzyczny</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Dobrze dane się wysłały?</h1>
	</header>
	<nav>
		<h2>Gdzie chcesz się udać?</h2>
		<h3><ol>
			<li><a href="main.html">Strona główna </a></li>
			<li><a href="cowbazie.php">Sprawdź co znajduje się w bazie</a></li>
		</h3></ol>
	</nav>
	<main>
	<?php 
		

		$connect = mysqli_connect('localhost','root','','sklep') or die('błąd połączenia bazy danych');
		

						$wynik = $connect->query("SELECT * FROM Uzytkownicy");
						
							if($wynik->num_rows > 0){
				
								echo "<table>";
								echo "<tr>";
								echo "<th>ID</th>";
								echo "<th>Imię</th>";
								echo "<th>Nazwisko</th>";
								echo "<th>Adres</th>";
								echo "<th>Telefon</th>";
								echo "</tr>";
								
								while( $wiersz = $wynik->fetch_assoc() ){
									echo "<tr>";
									
									echo "<td>" . $wiersz["id"]    . "</td>";
									echo "<td>" . $wiersz["imie"] . "</td>";
									echo "<td>" . $wiersz["nazwisko"] . "</td>";
									echo "<td>" . $wiersz["adres"] . "</td>";
									echo "<td>" . $wiersz["telefon"] . "</td>";
									
									echo "</tr>";
								}
								
								echo "</table>";
								
							}else {
								echo "Nie ma nic w bazie danych";
							}
		

		

		mysqli_close($connect);
	?>
	</main>
	<aside>
		<h2>Okej to teraz coś o mnie:</h2>
	
		<h3> 
			Jestem młodą pełną energii do pracy i nauki osobą chcącą zdobyć pierwse doświadczenie! Moim marzeniem jest łączenie studiów zaocznych z możliwością pracy aby poszerzać swoje kompetencje.
		</h3>
		<br>
		<h3>
			Dlatego też chciałbym dołączyć do tego zespołu i mam nadzieję zostać w nim na dłużej :). 
		</h3>
		</aside>
	<footer>
		<p>Stronę wykonał: Mateusz Rabijasz</p>
	</footer>
</body>
</html>