<?php
If (isset($_GET[‘language’])) {
include($_GET[‘language’] . ‘.php’);
}
?>

<form method=”get”>
<select name=”language”>
<option value=”english”>English</option>
<option value=”french”>French</option>
…
</select>
<input type=”submit”>
</form>
