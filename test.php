<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="test_action.php">  
  Name: <input type="text" name="name">
  <span class="error"></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error"></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error"></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>