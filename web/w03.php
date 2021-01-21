$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$major = htmlspecialchars($_POST["major"]);
$comments = htmlspecialchars($_POST["comments"]);
$places = $_POST["places"];

<!DOCTYPE html>
<html>
<body>

<h3>Week 03</h3>


  <p>Name: <?=$=name?> </p>
  <p>Email: <?=$=email?> </p>
  <p>Major: <?=$=major?> </p>
  <p>Comments: <?=$=comments?> </p>
  <p>Places you've been</p>
  <ul>
  <?
foreach ($places as $place)
{
	$place_clean = htmlspecialchars($place);
	echo "<li><p>$place_clean</p></li>";
}
?>	
  </ul>

</body>
</html>
