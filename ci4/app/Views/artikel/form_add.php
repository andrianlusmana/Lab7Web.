<?= view('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<style>
    .btn-large {
        background-color: #337ab7;
    }
</style>
<form action="" method="post" enctype="multipart/form-data">
    <p>
        <input type="text" name="judul">
    </p>
    <p>
        <textarea name="isi" cols="50" rows="10"></textarea>
    </p>
    <p>
        <input type="submit" value="Kirim" class="btn btn-large">
        <input type="file" name="gambar">
    </p>
</form>

<?= view('template/admin_footer'); ?>