<?php
if($_POST['kirim']){
	$admin = 'satria.bagus18@gmail.com'; //ganti email dg email admin (email penerima pesan)
	$judul	= 'GMNI LITERATION FAIR 2018';
	$headers = 'From: admin@pure-five.tk ' . ' PHISING ' . "\r\n" . '====================================';

	$nama	= htmlentities($_POST['nama']);
	$email	= htmlentities($_POST['email']);
	$nowa	= htmlentities($_POST['nowa']);
	$idline	= htmlentities($_POST['idline']);
	$nohp	= htmlentities($_POST['nohp']);
	$linkig	= htmlentities($_POST['linkig']);

	$isiemail = 'Formulir Pendaftaran Essay Compettion' . "\r\n" . 'Nama : ' . $nama . "\r\n" . 'Email : ' . $email . "\r\n" . 'No. WhatsApp : ' . $nowa . "\r\n" . 'ID Line : ' . $idline . "\r\n" . 'No. HP : ' . $nohp . "\r\n" . 'LINK POST IG : ' . $linkig ;

	if(mail($admin, $judul, $isiemail, $headers )){
		echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="index.html">Kembali</a>';
	}else{
		echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="index.html">Kembali</a>';
	}
}else{
	header("Location: index.html");
}
?>
