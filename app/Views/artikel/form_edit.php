<<<<<<< HEAD
<?= $this->include('template/admin_header'); ?>

=======
<?= view('template/admin_header'); ?>

<style>
    .btn-large {
        background-color: #337ab7;
    }
</style>
>>>>>>> 915420f3e91ca833bfbfddb78a67ac72e9dade4d
<h2><?= $title; ?></h2>
<form action="" method="post">
    <p>
        <input type="text" name="judul" value="<?= $data['judul']; ?>">
    </p>
    <p>
<<<<<<< HEAD
        <textarea name="isi" cols="50" rows="10"><?= $data['isi']; ?></textarea>
    </p>
    <p>
        <select name="id_kategori" id="id_kategori" required>
            <?php foreach ($kategori as $k): ?>
                <option value="<?= $k['id_kategori']; ?>" <?= ($data['id_kategori'] == $k['id_kategori']) ? 'selected' : ''; ?>><?= $k['nama_kategori']; ?></option>
            <?php endforeach; ?>
        </select>
    </p>
    <p>
        <input type="submit" value="Kirim" class="btn btn-large">
    </p>
</form>

<?= $this->include('template/admin_footer'); ?>
=======
        <textarea name="isi" cols="50" rows="10"><?=
            $data['isi']; ?></textarea>
    </p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>

<?= view('template/admin_footer'); ?>
>>>>>>> 915420f3e91ca833bfbfddb78a67ac72e9dade4d
