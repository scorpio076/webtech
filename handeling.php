<? php
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);

  echo "my name is $name";
  echo "my email is $email";
  echo "my website is $website";
  echo "my comment is $comment";
  echo "my gender is $gender";
}
?>