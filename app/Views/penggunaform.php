<?= $this->extend('templateadmin') ?>

<?= $this->section('menu') ?>
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="<?= site_url('admin') ?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home" aria-hidden="true">
        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
        <polyline points="9 22 9 12 15 12 15 22"></polyline>
      </svg>
      Beranda
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= site_url('admin/kota') ?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file" aria-hidden="true">
        <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
        <polyline points="13 2 13 9 20 9"></polyline>
      </svg>
      Kota
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="<?= site_url('admin/pengguna') ?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart" aria-hidden="true">
        <circle cx="9" cy="21" r="1"></circle>
        <circle cx="20" cy="21" r="1"></circle>
        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
      </svg>
      Pengguna
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= site_url('admin/logout') ?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users" aria-hidden="true">
        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
        <circle cx="9" cy="7" r="4"></circle>
        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
      </svg>
      Logout
    </a>
  </li>
</ul>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h2>Form Pengguna</h2>
<form method="POST" action="<?= site_url('admin/penggunaproses') ?> ">
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" name="pengguna_email" class="form-control" placeholder="name@example.com" value="<?= $pengguna->pengguna_email ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Sandi</label>
    <input type="password"  name="pengguna_sandi"class="form-control" placeholder="password anda" value="<?= $pengguna->pengguna_sandi ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Kota</label>
    <select class="form-select" name="kota_id">
      <?php foreach ($kota as $k) : ?>
        <option value="<?= $k->kota_id ?>" 
        <?= ($k->kota_id == $pengguna->kota_id) ? 'selected' : '' ?> >
        <?= $k->kota_nama ?>
        </option>
      <?php endforeach ?>
    </select>
  </div>
  <div class="mb-3">
    <input type="hidden" name="pengguna_id" value="<?= $pengguna->pengguna_id ?>">
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</form>
<?= $this->endSection() ?>