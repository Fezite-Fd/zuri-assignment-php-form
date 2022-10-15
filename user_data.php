
<?php
print_r($_POST);
echo "<br>";
<br>
?>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$country = $_POST['country'];

echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "date_of_birth: " . $date_of_birth . "<br>";
echo "gender: " . $gender . "<br>";
echo "country: " . $country . "<br>";
?>