//Main. Routing
(function() {
	var app = angular.module('portfolioApp', ['ui.router', 'person', 'page']);

	//Routing by ui.router
	app.config(function ($stateProvider, $urlRouterProvider) {
		$stateProvider
		.state('home', {
			url: '/',
			//controller: 'HomeController',
			templateUrl: './partials/portfolio.html'
		});
/*		.state('article', {
			url: '/:userName',
			controller: 'ArticleController',
			templateUrl: './partials/portfolio.html'
		})*/
		$urlRouterProvider.otherwise('/');
	});

	app.directive('fixedHeader', function(){
		
	});
}());
