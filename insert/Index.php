<!DOCTYPE html>
<html lang="en">
 <head>
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <CENTER>
 <form action="insert.php" method="post">
 <h1>Storing form data in a database</h1>
 <p>
 First Name : <input type="text" name="first_name" id="first_name" />
 </p>
 <p>
 Last Name: <input type="text" name="last_name" id="last_name" />
 </p>
 <p>
 Gender : <input type="radio" name="gender" id="gender" value="male" /> Male
 <input type="radio" name="gender" id="gender" value="female"/> Female
 </p>
 <p>
 Address : <input type="text" name="address" id="address" />
 </p>
 <p>
 <button type="submit">SUBMIT</button>
 <button type="reset">CANCEL</button>
 </p>
 </form>
 </CENTER> 
 </body>
</html>