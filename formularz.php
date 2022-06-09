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
		$imie=$_POST['name'];
		$nazw = $_POST['nazw'];
		$adr = $_POST['adr'];
		$tel = $_POST['tel'];
		$login = $_POST['log'];
		$passwd = $_POST['passwd'];

		$connect = mysqli_connect('localhost','root','','sklep') or die('błąd połączenia bazy danych');
		

		if(empty($imie) || empty($nazw) || empty($adr) || empty($tel))
		{
			echo "Nie podano danych użytkownika <br>";
		}
		else 
		{
			$sql = "INSERT INTO `uzytkownicy` (`id`, `imie`, `nazwisko`, `adres`, `telefon`) VALUES (NULL, '$imie', '$nazw', '$adr', '$tel')";

			$result = mysqli_query($connect, $sql);
			echo 'Wpisano dane użytkownika <br> ';
		}

		if(empty($login) || empty($passwd))
		{
			echo "Nie podano danych logowania";
		}
		else 
		{
			$sql1 = "INSERT INTO `konta` (`id`, `login`, `haslo`) VALUES (NULL, '$login', '$passwd')";

			$result1 = mysqli_query($connect, $sql1);
			echo 'Wpisano dane logowania';
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