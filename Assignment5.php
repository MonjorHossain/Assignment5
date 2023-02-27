<!-- 1. Create an HTML form that allows users to input their name and email address. The form should have two fields: one for name and one for email. Use appropriate HTML tags to structure the form. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <input type="submit" value="Submit">
        </form>
    </body>
</html>

<!-- The End  -->
 

<!-- 2. Answer : -->

<?php
class Person {
  private $name;
  private $email;

  public function setName($name) {
    $this->name = $name;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getName() {
    return $this->name;
  }

  public function getEmail() {
    return $this->email;
  }
}

$person = new Person();
$person->setName("John Doe");
$person->setEmail("johndoe@example.com");

// And here's how we can display the properties using the getter methods:

echo "Name: " . $person->getName() . "<br>";
echo "Email: " . $person->getEmail() . "<br>";

// This would output: 

 Name: John Doe
 Email: johndoe@example.com

//  The End

// ==================================================== 

// 3.Create a PHP script that retrieves the user's name and email from the HTML form in Task 1 using the $_POST superglobal variable. Create a new instance of the Person class and use the setName() and setEmail() methods to set the name and email properties based on the form data. Use the getName() and getEmail() methods to display the properties on the webpage.

// 3. Answer : 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];

  
  $person = new Person();   // Create a new instance of the Person class 


  $person->setName($name);    // Set the name and email properties 
  $person->setEmail($email);

  echo "Name: " . $person->getName() . "<br>";
  echo "Email: " . $person->getEmail() . "<br>";
} 
?>
