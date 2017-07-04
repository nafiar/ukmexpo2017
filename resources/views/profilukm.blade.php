@extends('layoutuserukm.main')

@section('title')
Profil {{session('ukm')['nama_ukm']}}
@endsection

@section('moreStyle')
@endsection

@section('content')
	<div class="panel col-md-12" style="margin-top: 30px; margin-bottom: 50px; padding: 20px;">		<h4>Tentang {{session('ukm')['nama_ukm']}}</h4>	
		<div class="panel panel-primary ">
			<div class="panel-heading">
				<h3>Profil</h3>	
			</div>
			<div class="panel-body">
				<p style="text-align: justify;"><a href="http://sepakbola.lmb.its.ac.id/wp-content/uploads/logo2.jpg" data-rel="lightbox-0" title=""><img src="http://sepakbola.lmb.its.ac.id/wp-content/uploads/logo2-1024x293.jpg" alt="logo ukm sepakbola its" width="720" height="206" /></a></p>
				<p style="text-align: justify;" align="center">UKM Sepakbola ITS merupakan Unit Kegiatan yang menaungi mahasiswa ITS dalam bidang olahraga Sepakbola dan Futsal. Adanya UKM ini diharapkan dapat terus mengasah bakat-bakat mahasiswa kampus perjuangan hingga pada akhirnya dapat meraih prestasi non-akademik, khususnya di bidang olahraga Sepakbola dan Futsal.</p>
				<p style="text-align: justify;" align="center">Terdapat tiga kategori di dalam UKM Sepakbola ITS, antara lain yaitu Sepakbola, Futsal Putra, dan Futsal Putri. Ketiga kategori ini diharapkan mampu menjadi cermin persepakbolaan ITS di kancah nasional bahkan internasional.</p>
				<p style="text-align: justify;" align="center">UKM Sepakbola ITS atau yang akrab dengan nama Sepakbola ITS ini berdiri pada tahun 1988, tepatnya pada tangga 5 Mei 1988. Angka 88 merupakan dua angka yang tidak terputus, yang nantinya diharapkan kejayaan dua bidang olahraga yaitu Sepakbola dan Futsal ITS tidak akan terputus.</p>
				
			</div>				
		</div>
	</div>
		
@endsection

@section('moreScript')
<script type="text/javascript">
	$('#datepicker').onClick(function(){
		console.log("bisa kok");
	});
	$('#timepicker').datepicker({
		datepicker:false,
		format:'H:i'
	});
	$('#datepicker').datepicker({

	});
</script>
@endsection

