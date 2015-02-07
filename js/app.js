//Main. Routing
(function() {
	var app = angular.module('portfolioApp', ['ui.router', 'sections', 'page']);

	//Routing by ui.router
	app.config(function ($stateProvider, $urlRouterProvider) {
		$stateProvider
		.state('home', {
			url: '/',
			templateUrl: './partials/portfolio.html'
		});
		$urlRouterProvider.otherwise('/');
	});
}());
