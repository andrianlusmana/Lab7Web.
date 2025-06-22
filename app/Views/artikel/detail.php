<?= view('template/header'); ?>
<article class="entry">
    <h2><?= $artikel['judul']; ?></h2>
    <img src="<?= base_url('/gambar/' . $artikel['gambar']); ?>" alt="<?=
                                                                        $artikel['judul']; ?>">
    <p><?= $row['isi']; ?></p>
</article>
<?= view('template/footer'); ?>