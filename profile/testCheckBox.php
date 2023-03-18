<form method="POST" action="testCheckBox.php">
  <label for="interests">Interests:</label><br>
  <input type="checkbox" id="interest1" name="interests[]" value="Hiking">
  <label for="interest1">Hiking</label><br>
  <input type="checkbox" id="interest2" name="interests[]" value="Reading">
  <label for="interest2">Reading</label><br>
  <input type="checkbox" id="interest3" name="interests[]" value="Cooking">
  <label for="interest3">Cooking</label><br>
  <input type="submit" value="Submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {
  if (isset($_POST['interests'])) {
    $checkedInterests = $_POST['interests'];
    foreach ($checkedInterests as $interest) {
      echo $interest . "<br>";
    }
  }
}
?>
