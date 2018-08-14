$(document).ready(function(){
	$('body').pointer();
});

(function($){
	$.fn.pointer = function (options) {
		var settings = {
			size : 80,/*輪っかの大きさ　数値が大きくなるほど輪っかも大きくなる*/
			spd : 300,/*輪っかのでるスピード　数値が大きくなるほど遅くなります*/
            color : "#a3875e"/*輪っかの色　カラーコードで指定します*/

		}
		settings = $.extend(settings, options);
		
		var circle_style = {
			"position":"absolute",
			"z-index":9999,
			"height":10,
			"width":10,
			"border":"solid 4px "+settings.color,
			"border-radius":settings.size
		}
		return this.each(function() {
			var $this = $(this);
			$this.css({"position":"relative"});
			$(document).click(function(e){
				var x = e.pageX-15;/* 輪っかのx軸の場所 */
				var y = e.pageY-15;/* 輪っかのy軸の場所 */
				
				var pos = {
					top :(-settings.size/2)+y,
					left :(-settings.size/2)+x
				}
		
				$this.append('<div class="circle"></div>');
				$this.find(".circle:last").css(circle_style).css({
					"top":y,
					"left":x
				}).animate({"height":settings.size,"width":settings.size,"left":pos.left,"top":pos.top},{duration:settings.spd,queue:false})
				.fadeOut(settings.spd*1.8,function(){
					$(this).remove();
				});
			});
		});
	}
})(jQuery); 