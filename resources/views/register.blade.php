<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up - SanberBook</title>
  </head>
  <body>
    <h2>Buat Account Baru!</h2>
    <form action="/welcome">
    @csrf
      <h4>Sign Up Form</h4>
      <label for="first_name">First Name:</label> <br />
      <br />
      <input type="text" id="first_name" name="first_name"/> <br />
      <br />
      <label for="last_name">Last Name:</label> <br />
      <br />
      <input type="text" id="last_name" name="last_name" /> <br />
      <p>Gender:</p>
      <input type="radio" id="male" />
      <label for="male">Male</label><br />
      <input type="radio" id="male" />
      <label for="male">Female</label><br />
      <input type="radio" id="male" />
      <label for="male">Other</label><br />
      <p>Nationality:</p>
      <select id="nationality">
        <option value="Indonesian">Indonesian</option>
        <option value="Malay">Malay</option>
        <option value="US">US</option>
      </select>
      <br />
      <p>Language Spoken:</p>
      <input type="checkbox" id="bahasa_indonesia" />
      <label for="bahasa_indonesia">Bahasa Indonesia</label> <br />
      <input type="checkbox" id="english" />
      <label for="english">English</label> <br />
      <input type="checkbox" id="other" />
      <label for="other">Other</label> <br />
      <br />
      <label for="bio">Bio:</label> <br />
      <br />
      <textarea name="bio" id="bio" cols="30" rows="10"></textarea> <br />
      <input type="submit" value="Sign Up" />
    </form>
  </body>
</html>
