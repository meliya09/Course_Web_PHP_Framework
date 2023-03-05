<?= $this->extend('templatepublik')?>
<?= $this->section('menu')?>
<ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= site_url('publik')?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('publik/login')?>">LOGIN</a>
          </li>
        </ul>
<?= $this->endSection()?>

<?= $this->section('content')?>
<?php if(session()->getFlashdata('pesan')!=''):?>
<div class="alert alert-secondary" role="alert">
  <?=session()->getFlashdata('pesan')?>
</div>
<?php endif ?>

<form method="POST" action="<?=site_url('publik/loginproses')?>">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control"  placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="sandi" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
  </form>
<?= $this->endSection()?>

