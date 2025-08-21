<?php


if (!isset($_COOKIE['token'])) {
  header("Location: /login.php"); exit;
}

$db = new SQLite3('users.db');

$stmt = $db->prepare("SELECT username FROM users WHERE token = :t");
$stmt->bindValue(":t", $_COOKIE['token'], SQLITE3_TEXT);
$result = $stmt->execute();
$row = $result->fetchArray(SQLITE3_ASSOC);

$username = $row['username'] ?? 'unknown';


?>
<?php include __DIR__.'/partials/head.php'; ?>
<div class="container">
  <div class="card">
    <h2>Welcome back!</h2>
    <img id="pfp" class="avatar" src="blank_pfp.png">
    <p id="welcome">Loading...</p>
  </div>
</div>

<script>
fetch('/backend/user_information.php?username=<?php echo $username;?>')
  .then(res => res.json())
  .then(json => {
    document.getElementById('welcome').innerText = 'Welcome back, ' + json.username;
    if(json.pfp) {
      document.getElementById('pfp').src = 'data:image/png;base64,' + json.pfp;
    }
  })
  .catch(err => console.error(err));
</script>
<?php include __DIR__.'/partials/foot.php'; ?>
