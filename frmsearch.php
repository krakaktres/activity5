<!-- (A) SEARCH FORM -->
<form method="post" action="frmsearch.php">
  <input type="text" name="search" placeholder="Search..." required>
  <input type="submit" value="Search">
</form>

<?php
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if (isset($_POST["search"])) {
  // (B1) SEARCH FOR USERS
  require "3-search.php";

  // (B2) DISPLAY RESULTS
  if (count($results) > 0) { foreach ($results as $r) {
    printf("<div>%s - %s</div>", $r["name"], $r["gender"], $r["sid"]);
  }} else { echo "No results found"; }
}
?>