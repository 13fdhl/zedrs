(function($) {
  $.fn.mot = function(options) {
    var defaults = {
      wektu: 0.3,
			sabanjure: null,
      ist: false,
      instrument: 'disc',
    };
    var settings = $.extend({}, defaults, options);
    if (this.length > 1) {
      this.each(function() { $(this).mot(options) });
      return this;
    }
    // private variables
		var waktu = settings.wektu*60;

		var pad = function(num, size) {
			var s = num+"";
			while (s.length < size) s = "0" + s;
			return s;
		}
    // private methods
		var hitungMundur = function(){
			waktu--;
			if(waktu<=0){
        if(settings.sabanjure!=null){
          if(settings.ist){
            if(typeof settings.sabanjure){
              location.href = settings.sabanjure;
            }
            $(".form-mot").submit();
            return;
          }
          swal("Waktu habis. Anda akan dialihkan ke tes selanjutnya.")
          .then((v)=>{
            if(settings.sabanjure==true){
              $(".form-mot").submit();
            }else{
              location.href = settings.sabanjure;
            }
          });
          return;
        }else{
          swal("Waktu habis. Silakan segera jawab semua soal. Anda tidak akan bisa lanjut ke test selanjutnya sebelum menyelesaikan tes ini.");
    			$(".timer .timer-minute").text("00");
    			$(".timer .timer-second").text("00");
          return;
        }
			}
			let menit = (Math.floor(waktu/60));
			let detik = (waktu%60);
      if(((menit%3)==0)&&(detik==0)){
        window.ambil_gambar();
      }
			$(".timer .timer-minute").text(pad(menit,2));
			$(".timer .timer-second").text(pad(detik,2));
			setTimeout(hitungMundur, 1000);
		}
    var myPrivateMethod = function() {
      // do something ...
    }
    // public methods
    this.initialize = function() {
      if(settings.ist){
        $("[type='submit']").hide();
      }
      hitungMundur();
      //console.log(base_url);
      //console.log($(".timer"));
      $(".timer").show();
      return this;
    };
    this.send_qna = function(message){
      $.post();
    };
    return this.initialize();
  }
})(jQuery);
