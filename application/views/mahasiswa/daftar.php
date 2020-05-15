<div class="container">

  <h2 class="mt-3">Daftar Mahasiswa</h2>

  <div class="row mt-5">
    <div class="col-lg-6">
      <a href="<?= base_url('mahasiswa/tambah'); ?>" class="btn btn-primary mb-5">Tambah Data Mahasiswa</a>
    </div>
    <div class="col-lg-10">
      <div class="card">
        <ul class=" list-group list-group-flush">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NRP</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
              </tr>
            </thead>
            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $mhs) : ?>
              <tbody>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $mhs['nama']; ?></td>
                  <td><?= $mhs['nrp'] ?></td>
                  <td><?= $mhs['email']; ?></td>
                  <td><?= $mhs['jurusan']; ?></td>
                </tr>
              </tbody>
              <?php $i++; ?>
            <?php endforeach; ?>
          </table>
      </div>
    </div>
  </div>


</div>