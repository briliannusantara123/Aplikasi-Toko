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
		<p align="center"><b>Laporan Barang</b></p>
		<table class="static" align="center" rules="all" border="1px" style="width:95%;">
		  <tr>
			<td>No</td>
			<td>Barang</td>
			<td>Stok Barang</td>
			<td>Merek</td>
			<td>Harga Barang</td>
			<td>Tanggal Masuk</td>
		  </tr>
		  @foreach($data_barang as $laporanbarang)
		  <tr>
		  	<td>{{$loop->iteration}}</td>
		  	<td>{{$laporanbarang->nama_barang}}</td>
		  	<td>{{$laporanbarang->stok_barang}}</td>
		  	<td>{{$laporanbarang->merek}}</td>
		  	<td>Rp. {{number_format($laporanbarang->harga_barang,0) }}</td>
		  	<td>{{$laporanbarang->tanggal_masuk}}</td>
		  </tr>
		  @endforeach
		</table>
	</div>

	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>