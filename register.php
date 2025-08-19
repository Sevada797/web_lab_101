<?php $TITLE="Register"; include __DIR__."/partials/head.php"; ?>
<div class="card">
  <div class="form">
    <div class="title">Create account</div>
    <div class="sub">Enter email + password</div>
    <form method="POST" action="/register_action.php">
      <input class="input" name="username" type="email" placeholder="your@email.com" />
      <input class="input" name="password" type="password" placeholder="Choose a strong password" />
      <button class="btn" type="submit">Register</button>
    </form>
    <div class="small">Psst… devs wired <code>username</code> to <code>email</code> in backend.</div>
  </div>
</div>
<?php include __DIR__."/partials/foot.php"; ?>
