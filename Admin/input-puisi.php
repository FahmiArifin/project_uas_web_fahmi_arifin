<?php require 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <h2 class="text-center">Input Puisi</h2>
            <form action="proses-input-puisi.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="judul_puisi">Judul Puisi:</label>
                    <input type="text" class="form-control" name="judul_puisi" required>
                </div>
                <div class="form-group">
                    <label for="isi_puisi">Isi Puisi:</label>
                    <textarea class="form-control" name="isi_puisi" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="audio_puisi">Audio Puisi:</label>
                    <input type="file" class="form-control-file" name="audio_puisi" accept="audio/*" required>
                </div>
                <div class="form-group">
                    <label for="pengarang_puisi">Pengarang Puisi:</label>
                    <input type="text" class="form-control" name="pengarang_puisi" required>
                </div>
                <div class="form-group">
                    <label for="pembaca_puisi">Pembaca Puisi:</label>
                    <input type="text" class="form-control" name="pembaca_puisi" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>
