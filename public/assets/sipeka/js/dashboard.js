/**
 * JavaScript untuk halaman dashboard seluruh pengguna
 */

/**
 * Inisialisasi dokumen
 */
$(document).ready(function()
{

    /**
     * Inisialisasi popover
     */
    $("[data-toggle='popover']").popover();

    /**
	 * Efek kursor pada foto profil
	 */
	$(".img-foto-profil-pengguna").hover(function()
	{
		$(this).css({"cursor": "pointer"});
	});

});