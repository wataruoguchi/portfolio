//General directives
(function() {
	var app = angular.module('page', ['ui.bootstrap','mgcrea.ngStrap' ,'duScroll']);
	//ui.bootstrap: mobile menu
	//mgcrea.ngStrap: scroll spy
	//duScroll: smooth scroll	
	/*= = = = = = = = angular-scroll - START = = = = = = = = */
	// https://github.com/oblador/angular-scroll
	app.value('duScrollEasing', function(t){
		// https://gist.github.com/gre/1650294
		return t<.5 ? 2*t*t : -1+(4-2*t)*t;
	});
	app.value('duScrollDuration', 700);
	/*= = = = = = = = angular-scroll - END = = = = = = = = */

	/*= = = = = = = = WHOLE PAGE - START = = = = = = = = */
	app.directive('navbar', function () {
		// http://stackoverflow.com/questions/14741988/twitter-boostrap-navbar-with-angular-js-collapse-not-functioning
		// http://stackoverflow.com/questions/16680543/hide-twitter-bootstrap-nav-collapse-on-click
		return {
			restrict: 'C',
			link: function (scope, element) {
				scope.isCollapsed = true;

				element.find("a").bind('click', function() {
					if(!scope.isCollapsed) {
						//When the menu is expanded and an a element is clicked, click toggle button.
						element.find(".navbar-toggle").click();
					}
				});
			}
		};
	});
	/*= = = = = = = = WHOLE PAGE - END = = = = = = = = */
}());

(function($){
	$(document).ready(function(){
		//Modal
		if($(".modal").length>0) {
			$(".modal").each(function() {
				 $(".modal").prependTo("body");
			});
		}

	});
})(this.jQuery);
