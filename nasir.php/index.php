<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Belanja</title>
  <link rel="stylesheet" href="style.css"> <!-- Tautan ke file CSS yang akan kita buat -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <div class="container mt-5">
    <h2 class="text-center mb-4">Form Belanja</h2>
    <table class="table">
      <tbody>
        <tr>
          <td>
            <label for="nama" class="col-form-label">Nama Pelanggan</label>
            <input id="nama" name="nama" type="text" class="form-control">
          </td>
          <td>
            <label for="produk" class="col-form-label">Produk Pilihan</label>
            <select id="produk" name="produk" class="custom-select">
              <option value="rabbit">--- pilih produk ---</option>
              <option value="handphone">HANDPHONE</option>
              <option value="laptop">LAPTOP</option>
              <option value="ac">AC</option>
              <option value="mesin cuci">MESIN CUCI</option>
              <option value="tv">TV</option>
            </select>
          </td>
          <td>
            <label for="jumlah" class="col-form-label">Jumlah Pembelian</label>
            <input id="jumlah" name="jumlah" type="text" class="form-control">
          </td>
          <td>
            <button id="submitBtn" class="btn btn-primary">Submit</button>
          </td>
        </tr>
      </tbody>
    </table>

    <!-- Ringkasan Belanja -->
    <div class="mt-5">
      <h3 class="text-center">Struktur Belanja</h3>
      <table id="ringkasanBelanja" class="table">
        <tbody>
          <tr>
            <th>Nama Pelanggan:</th>
            <td id="namaPelanggan"></td>
          </tr>
          <tr>
            <th>Produk:</th>
            <td id="produkPilihan"></td>
          </tr>
          <tr>
            <th>Jumlah Pembelian:</th>
            <td id="jumlahPembelian"></td>
          </tr>
          <tr>
            <th>Harga Satuan:</th>
            <td id="hargaSatuan"></td>
          </tr>
          <tr>
            <th>Total Belanja:</th>
            <td id="totalBelanja"></td>
          </tr>
          <tr>
            <th>Diskon:</th>
            <td id="diskon"></td>
          </tr>
          <tr>
            <th>PPN:</th>
            <td id="ppn"></td>
          </tr>
          <tr>
            <th>Harga Bersih:</th>
            <td id="hargaBersih"></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <script>
    document.getElementById("submitBtn").addEventListener("click", function() {
      var namaPelanggan = document.getElementById("nama").value;
      var produkPilihan = document.getElementById("produk").value;
      var jumlahPembelian = document.getElementById("jumlah").value;

      // Harga satuan
      var hargaSatuan = 0;
      switch (produkPilihan) {
        case 'handphone':
          hargaSatuan = 2000000; 
          break;
        case 'laptop':
          hargaSatuan = 9000000; 
          break;
        case 'ac':
          hargaSatuan = 11000000; 
          break;
        case 'mesin cuci':
          hargaSatuan = 1500000; 
          break;
        case 'tv':
          hargaSatuan = 4000000; 
          break;
        default:
          hargaSatuan = 0;
          break;
      }

      var totalBelanja = jumlahPembelian * hargaSatuan;
      var diskon = 0.20 * totalBelanja;
      var ppn = 0.10 * (totalBelanja - diskon);
      var hargaBersih = (totalBelanja - diskon) + ppn;

      // Mengisi nilai pada ringkasan belanja
      document.getElementById("namaPelanggan").innerText = namaPelanggan;
      document.getElementById("produkPilihan").innerText = produkPilihan;
      document.getElementById("jumlahPembelian").innerText = jumlahPembelian;
      document.getElementById("hargaSatuan").innerText = hargaSatuan;
      document.getElementById("totalBelanja").innerText = totalBelanja;
      document.getElementById("diskon").innerText = diskon;
      document.getElementById("ppn").innerText = ppn;
      document.getElementById("hargaBersih").innerText = hargaBersih;
    });
  </script>

</body>
</html>
