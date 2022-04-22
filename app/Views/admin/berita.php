<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<div class="pagetitle">
    <h1>Data Berita</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active">Data Berita</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <a href="/admin/createberita" class="btn mr-2 mb-2 btn-primary">
                Tambah Berita
            </a>
            <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
            <?php endif ?>
            <div class="card">
                <div class="card-body" style="overflow-x: auto;">

                    <!-- Table with stripped rows -->
                    <table class="table datatable table-bordered table-striped my-4 text-center" id="dataTable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Author</th>
                                <th scope="col">News Lead</th>
                                <th scope="col">News Body</th>
                                <th scope="col">News Leg</th>
                                <th scope="col">News Image</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">
                                    &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Action&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($berita as $b) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= substr($b["judul"], 0, 50); ?>...</td>
                                <td><?= $b["author"]; ?></td>
                                <td><?= substr($b["newslead"], 0, 50); ?>...</td>
                                <td><?= substr($b["newsbody"], 0, 50); ?>...</td>
                                <td><?= substr($b["newsleg"], 0, 50); ?>...</td>
                                <td><img style="width:200px;" src="../assets/img/berita/<?= $b["newsimg"]; ?>"></td>
                                <td><?= $b["created_at"]; ?> </td>
                                <td><?= $b["updated_at"]; ?> </td>
                                <td>
                                    <button type="button" class="btn btn-success">Edit</button>
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