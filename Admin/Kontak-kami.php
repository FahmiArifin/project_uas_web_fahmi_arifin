<?php require 'header.php'; ?>

  <!-- Konten -->
<div class="row mt-5">
  <div class="col-md-6 mx-auto text-center">
    <h3>Kontak Kami</h3>
    <p>Jika Anda memiliki pertanyaan atau ingin bergabung dengan komunitas kami, silakan hubungi kami melalui formulir di bawah ini:</p>
    <form action="submit_form.php" method="POST">
      <div class="form-group">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="message">Pesan:</label>
        <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
  </div>
</div>
<?php require 'footer.php'; ?>
  <!-- JavaScript untuk Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>