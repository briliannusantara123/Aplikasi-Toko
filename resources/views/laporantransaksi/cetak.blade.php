<!DOCTYPE html>
<html>
<head>
	<title>Cetak</title>
	<meta charset="utf-8">
	<meta name="viewpoet" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="x-UA-Compatible" content="ie=edge">
	<meta name="csrf_token" content="{{ csrf_token() }}">
	<style>
		table.static{
			position: relative;
			border: 1px solid #543535;
		}
	</style>
</head>
<body>
	<div class="form-grup">
		<p align="center"><b>Laporan Transaksi</b></p>
		<table class="static" align="center" rules="all" border="1px" style="width:95%;">
      <tr>
      <td>No</td>
      <td>Kode Transaksi</td>
      <td>Barang</td>

      <td>Jumlah Beli</td>
      <td>Total Harga</td>
      <td>Tanggal Masuk</td>
      </tr>
      @foreach($data_laporantransaksi as $laporantransaksi)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$laporantransaksi->kd_transaksi}}</td>
        <td>{{$laporantransaksi->nama_barang}}</td>

        <td>{{$laporantransaksi->jumlah_beli}}</td>
        <td>Rp. {{number_format($laporantransaksi->total_harga,0) }}</td>
        <td>{{$laporantransaksi->tanggal_beli}}</td>
      </tr>
      @endforeach
    </table>
	</div>

	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>