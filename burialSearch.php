<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Murphy Cemetery - Burial Search</title>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <a href="index.php"><li>Home</li></a>
          <a href="about.php"><li>About/History</li></a>
          <a href="location.php"><li>Location</li></a>
          <a href=""><li>Burial Search</li></a>
          <a href="contact.php"><li>Contact</li></a>
          <a href="login.php"><li>Login</li></a>
        </ul>
      </nav>
    </header>
    <main>
      <h1>Search for a Loved One</h1>

      <form method="post" action="burialSearchDisplay.php">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>

        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br><br>

        <label for="birthDate">Birth Date:</label><br>
        <input type="text" id="birthDate" name="birthDate"><br>

        <label for="deathDate">Death Date:</label><br>
        <input type="text" id="deathDate" name="deathDate"><br><br>

        <input type="reset" value="Reset">
        <input type="submit" value="Submit">
      </form>
    </main>
  </body>
</html>
