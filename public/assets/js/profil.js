/*
 * JavaScript untuk halaman profil pengguna
 */

/*
 * Inisialisasi dokumen
 */
$(document).ready(function()
{

	/**
	 * Insialisasi combo box dengan library select2
	 */
	$("#cmbKewarganegaraan").select2();

	/*
	 * Menampilkan box form profil pengguna dengan loading state pada saat proses submit berlangsung
	 */
	$("#frmGantiKataSandi").submit(function()
	{
		$("#divOverlayProfilPengguna").removeClass("hide");
	});
	$("#frmAktivasiBotTelegram").submit(function()
	{
		$("#divOverlayProfilPengguna").removeClass("hide");
	});

	/**
	 * Memproses cropping foto profil pengguna
	 */
	$image_crop_foto_profil_pengguna = $("#divCropUploadFotoProfilPengguna").croppie(
	{
		enableExif: true,
		viewport:
		{
		  	width: 200,
		  	height: 200,
		  	type: "square"
		},
		boundary:
		{
			width: 250,
		  	height: 250
		}
	});
	$("#fileFotoProfilPengguna").on("change", function()
	{
		var reader = new FileReader();
		reader.onload = function (event)
		{
			$image_crop_foto_profil_pengguna.croppie("bind", {
				url: event.target.result
		  	});
		}
		reader.readAsDataURL(this.files[0]);
		$("#modalCropUploadFotoProfilPengguna").modal("show");
	});
	$("#cmdCropUploadFotoProfilPengguna").click(function(event)
	{
		$image_crop_foto_profil_pengguna.croppie("result",
		{
		  type: "canvas",
		  size: "viewport"
		}).then(function(response)
		{
			$.ajax(
			{
				url: "image.processing.php",
				type: "POST",
				data: {"dataFotoProfilPengguna": response},
				success:function(data)
				{
					$("#modalCropUploadFotoProfilPengguna").modal("hide");
					$(".img-foto-profil-pengguna").fadeOut("slow", function()
					{
						$(".img-foto-profil-pengguna").attr("src", data);
						$(".img-foto-profil-pengguna").fadeIn("fast");
					});
					$("#fileFotoProfilPengguna").val("");
				}
		  	});
		})
	});

	/**
	 * Memproses cropping foto profil dosen
	 */
	$image_crop_foto_profil_dosen = $("#divCropUploadFotoProfilDosen").croppie(
	{
		enableExif: true,
		viewport:
		{
			width: 200,
			height: 300,
			type: "square"
		},
		boundary:
		{
			width: 250,
			height: 350
		}
	});
	$("#fileFotoProfilDosen").on("change", function()
	{
		var reader = new FileReader();
		reader.onload = function (event)
		{
			$image_crop_foto_profil_dosen.croppie("bind", {
				url: event.target.result
			});
		}
		reader.readAsDataURL(this.files[0]);
		$("#modalCropUploadFotoProfilDosen").modal("show");
	});
	$("#cmdCropUploadFotoProfilDosen").click(function(event)
	{
		$image_crop_foto_profil_dosen.croppie("result",
		{
			type: "canvas",
			size: "viewport"
		}).then(function(response)
		{
			$.ajax(
			{
				url: "image.processing.php",
				type: "POST",
				data: {"dataFotoProfilDosen": response},
				success:function(data)
				{
					$("#modalCropUploadFotoProfilDosen").modal("hide");
					$(".img-foto-profil-dosen").fadeOut("slow", function()
					{
						$(".img-foto-profil-dosen").attr("src", data);
						$(".img-foto-profil-dosen").fadeIn("fast");
					});
					$("#fileFotoProfilDosen").val("");
				}
			});
		})
	});

	/**
	 * Memproses cropping foto profil mahasiswa
	 */
	$image_crop_foto_profil_mahasiswa = $("#divCropUploadFotoProfilMahasiswa").croppie(
	{
		enableExif: true,
		viewport:
		{
			width: 200,
			height: 300,
			type: "square"
		},
		boundary:
		{
			width: 250,
			height: 350
		}
	});
	$("#fileFotoProfilMahasiswa").on("change", function()
	{
		var reader = new FileReader();
		reader.onload = function (event)
		{
			$image_crop_foto_profil_mahasiswa.croppie("bind", {
				url: event.target.result
			});
		}
		reader.readAsDataURL(this.files[0]);
		$("#modalCropUploadFotoProfilMahasiswa").modal("show");
	});
	$("#cmdCropUploadFotoProfilMahasiswa").click(function(event)
	{
		$image_crop_foto_profil_mahasiswa.croppie("result",
		{
			type: "canvas",
			size: "viewport"
		}).then(function(response)
		{
			$.ajax(
			{
				url: "image.processing.php",
				type: "POST",
				data: {"dataFotoProfilMahasiswa": response},
				success:function(data)
				{
					$("#modalCropUploadFotoProfilMahasiswa").modal("hide");
					$(".img-foto-profil-mahasiswa").fadeOut("slow", function()
					{
						$(".img-foto-profil-mahasiswa").attr("src", data);
						$(".img-foto-profil-mahasiswa").fadeIn("fast");
					});
					$("#fileFotoProfilMahasiswa").val("");
				}
			});
		})
	});

	/**
	 * Efek kursor pada foto profil
	 */
	$("#imgFotoProfilPengguna").hover(function()
	{
		$(this).css({"cursor": "pointer"});
	});
	$("#imgFotoProfilDosen").hover(function()
	{
		$(this).css({"cursor": "pointer"});
	});
	$("#imgFotoProfilMahasiswa").hover(function()
	{
		$(this).css({"cursor": "pointer"});
	});

	/**
	 * Membuat trigger untuk membuka kotak dialog pemilihan file foto profil
	 */
	$("#imgFotoProfilPengguna").click(function()
	{
		$("#fileFotoProfilPengguna").trigger("click");
	});
	$("#cmdGantiFotoProfilPengguna").click(function()
	{
		$("#fileFotoProfilPengguna").trigger("click");
	});
	$("#imgFotoProfilDosen").click(function()
	{
		$("#fileFotoProfilDosen").trigger("click");
	});
	$("#cmdGantiFotoProfilDosen").click(function()
	{
		$("#fileFotoProfilDosen").trigger("click");
	});
	$("#imgFotoProfilMahasiswa").click(function()
	{
		$("#fileFotoProfilMahasiswa").trigger("click");
	});
	$("#cmdGantiFotoProfilMahasiswa").click(function()
	{
		$("#fileFotoProfilMahasiswa").trigger("click");
	});

	/**
	 * Autocomplete pada input data kecamatan
	 */
	var options =
	{
		data: dataListKecamatan,
		getValue: "nama_kecamatan",
		list: {
			maxNumberOfElements: 10,
			match:
			{
				enabled: true
			},
			showAnimation:
			{
				type: "fade",
				time: 400,
				callback: function() {}
			},
			hideAnimation:
			{
				type: "slide",
				time: 400,
				callback: function() {}
			},
			onSelectItemEvent: function()
			{
				var value = $("#txtNamaKecamatan").getSelectedItemData().id_kecamatan;
				$("#txtKecamatan").val(value).trigger("change");
			},
			placeholder: "Nama Kecamatan"
		},
	};
	$("#txtNamaKecamatan").easyAutocomplete(options);
	$("div.easy-autocomplete").removeAttr("style");

});