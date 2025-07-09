<?= view('template/admin_header'); ?>

<div class="form-container">
    <h2><?= $title; ?></h2>
    <form action="" method="post" enctype="multipart/form-data">
        <p>
            <input type="text" name="judul" placeholder="Judul Artikel" class="input-field">
        </p>
        <p>
            <textarea name="isi" cols="50" rows="10" placeholder="Isi Artikel" class="input-field"></textarea>
        </p>
        <p>
            <input type="file" name="gambar" class="input-field">
        </p>
        <p>
            <input type="submit" value="Kirim" class="btn btn-large">
        </p>
    </form>
</div>
<style>
    .form-container {
        max-width: 500px;
        margin: 30px 0 0 30px;
        padding: 24px 32px 32px 32px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.07);
    }
    .form-container h2 {
        margin-bottom: 24px;
        font-size: 2rem;
        font-weight: bold;
        color: #444;
        text-align: left;
    }
    .input-field {
        width: 100%;
        padding: 8px 10px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 1rem;
        box-sizing: border-box;
    }
    .btn-large {
        background-color: #337ab7;
        color: #fff;
        padding: 10px 24px;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
        cursor: pointer;
        transition: background 0.2s;
    }
    .btn-large:hover {
        background-color: #23527c;
    }
</style>

<?= view('template/admin_footer'); ?>