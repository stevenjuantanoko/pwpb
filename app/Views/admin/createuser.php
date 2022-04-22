<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<div class="pagetitle">
    <h1>Tambah User</h1>
</div><!-- End Page Title -->

<section class="section">
    <div class="card">
        <div class="card-body">
            <form action="/admin/saveuser" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3 my-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text"
                        class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>"
                        id="username" name="username" autofocus value="<?= old('username'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('username'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text"
                        class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>"
                        id="password" name="password" value="<?= old('password'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('password'); ?>
                    </div>
                </div>
                <a href="/admin/user" type="submit" class="btn btn-secondary">Cancel</a> <button type="submit"
                    class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
</section>

<?= $this->endSection() ?>