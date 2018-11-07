$(function() {

 				$("#pesan_error_npm").hide();
 				$("#pesan_error_nama").hide();
 				$("#pesan_error_birth").hide();

 				var npm_error = false;
 				var nama_error = false;
 				var birth_error = false;

 				$("#form_npm").focusout(function(){
 					check_npm();
 				});

 				$("#form_nama").focusout(function(){
 					check_nama();
 				});

 				$("#form_birth").focusout(function(){
 					check_birth();
 				});

 				function check_npm() {
 					var npmEmpty = $("#form_npm").val();

 					if (npmEmpty !=='') {
 						$("#pesan_error_npm").hide();
 					} else {
 						$("#pesan_error_npm").html("NPM tidak boleh kosong");
 						$("#pesan_error_npm").show();
 						npm_error = true;
 					}
 				}

 				function check_nama() {
 					var namaEmpty = $("#form_nama").val();

 					if (namaEmpty !=='') {
 						$("#pesan_error_nama").hide();
 					} else {
 						$("#pesan_error_nama").html("Nama tidak boleh kosong");
 						$("#pesan_error_nama").show();
 						nama_error = true;
 					}
 				}

 				function check_birth() {
 					var birthEmpty = $("#form_birth").val();

 					if (birthEmpty !=='') {
 						$("#pesan_error_birth").hide();
 					} else {
 						$("#pesan_error_birth").html("Tanggal lahir tidak boleh kosong");
 						$("#pesan_error_birth").show();
 						birth_error = true;
 					}
 				}
 			});