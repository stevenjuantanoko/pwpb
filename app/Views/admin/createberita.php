<?= $this->extend('layout/admin_layout') ?>

<?= $this->section('content') ?>

<div class="pagetitle">
    <h1>Tambah Berita</h1>
</div><!-- End Page Title -->

<section class="section">
    <div class="card">
        <div class="card-body">
            <form action="/admin/saveberita" method="post">
                <?= csrf_field(); ?>
                <div class="mb-3 my-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>"
                        id="judul" name="judul" autofocus value="<?= old('judul'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('judul'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text"
                        class="form-control <?= ($validation->hasError('author')) ? 'is-invalid' : ''; ?>" id="author"
                        name="author" value="<?= old('author'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('author'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="newslead" class="form-label">News Lead</label>
                    <div class="mb-3">
                        <textarea class="form-control <?= ($validation->hasError('newslead')) ? 'is-invalid' : ''; ?>"
                            id="newslead" name="newslead" rows="5"><?= old('newslead'); ?></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('newslead'); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="newsbody" class="form-label">News Body</label>
                    <div class="mb-3">
                        <textarea class="form-control <?= ($validation->hasError('newsbody')) ? 'is-invalid' : ''; ?>"
                            id="newsbody" name="newsbody" rows="5"><?= old('newsbody'); ?></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('newsbody'); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="newsleg" class="form-label">News Leg</label>
                    <div class="mb-3">
                        <textarea class="form-control <?= ($validation->hasError('newsleg')) ? 'is-invalid' : ''; ?>"
                            id="newsleg" name="newsleg" rows="5"><?= old('newsleg'); ?></textarea>
                        <div class="invalid-feedback">
                            <?= $validation->getError('newsleg'); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="newsimg" class="form-label">News Image</label>
                    <input type="text"
                        class="form-control <?= ($validation->hasError('newsimg')) ? 'is-invalid' : ''; ?>" id="newsimg"
                        name="newsimg" value="<?= old('newsimg'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('newsimg'); ?>
                    </div>
                </div>
                <a href="/admin/user" type="submit" class="btn btn-secondary">Cancel</a> <button type="submit"
                    class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
</section>

<?= $this->endSection() ?>