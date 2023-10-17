/*
 * JavaScript untuk form login
 */

/*
 * Inisialisasi dokumen
 */
$(document).ready(function()
{

	/*
	 * Focus pertama
	 */
	 $("input[name='txtAlamatEmail']").focus();

	/*
	 * Menampilkan box form login dengan loading state pada saat proses submit berlangsung
	 */
	$("#frmLogin").submit(function()
	{
		$("#divOverlayLogin").removeClass("hide");
	}); 

});