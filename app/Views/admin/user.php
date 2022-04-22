<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<div class="pagetitle">
    <h1>Data User</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Data User</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <a href="/admin/createuser" class="btn mr-2 mb-2 btn-primary">
                Tambah User
            </a>
            <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
            <?php endif ?>
            <div class="card">
                <div class="card-body">

                    <!-- Table with stripped rows -->
                    <table class="table datatable table-bordered table-striped my-4 text-center" id="dataTable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($user as $u) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $u["username"]; ?></td>
                                <td><?= $u["password"]; ?></td>
                                <td>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>

<?= $this->endSection() ?>