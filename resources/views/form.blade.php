<!DOCTYPE html>
<html>
<body>

<h2>Information</h2>

<form action="{{Route('store')}}" method="post">
    @csrf
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br><br>
  <label for="city">City:</label><br>
  <input type="text" id="city" name="city"><br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
