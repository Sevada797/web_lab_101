<?php $TITLE="Login"; include __DIR__."/partials/head.php"; ?>
<div class="card">
  <div class="form">
    <div class="title">Sign in</div>
    <div class="sub">Try <code class="code">user1 / pass1</code></div>
    <form method="POST" action="/login_action.php">
      <input class="input" name="username" placeholder="Username or email" autocomplete="username" />
      <input class="input" name="password" type="password" placeholder="Password" autocomplete="current-password" />
      <div class="row">
        <button class="btn" type="submit">Sign in</button>
        <a class="btn secondary" href="/register">Create account</a>
      </div>
    </form>
    <div class="hint"><strong>Hint:</strong> Something about registration seems… off.</div>
  </div>
</div>
<?php include __DIR__."/partials/foot.php"; ?>
