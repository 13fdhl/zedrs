(function($) {
  $.fn.qna = function(options) {
    var defaults = {
      instrument: 'disc',
      autoreload: true,
      assessment_id: null
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
		var hitungMundur = function(callback){
      $.get(base_url+"api/qna",{
        instrument: settings.instrument,
        assessment_id: settings.assessment_id
      },function(res){
        if(settings.autoreload){
          $(".comments-list").html(res);
        }
      })
      .fail(function(){
        alert("Galat!");
      });
			setTimeout(hitungMundur, 5000);
		}
    var myPrivateMethod = function() {
      // do something ...
    }
    // public methods
    this.initialize = function() {
      this.get_qna();
      hitungMundur();
      return this;
    };

    this.send_qna = function(message) {
      self = this;
      $.post(base_url+"api/qna",{
        instrument: settings.instrument,
        message: message
      },function(res){
        console.log("Sukses");
        self.get_qna();
      })
      .fail(function(){
        alert("Galat!");
      });
    };

    this.get_qna = function() {
      $.get(base_url+"api/qna",{
        instrument: settings.instrument,
        assessment_id: settings.assessment_id
      },function(res){
        $(".comments-list").html(res);
      })
      .fail(function(){
        alert("Galat!");
      });
    };

    this.set_instrument = function(instrument) {
      settings.instrument = instrument;
    }

    this.set_autoreload = function(val){
      settings.autoreload = val;
    }

    return this.initialize();
  }
})(jQuery);
