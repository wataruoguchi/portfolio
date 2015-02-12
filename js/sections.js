//Only for person entity
(function() {
	var app = angular.module('sections', ['controllers']);
	app.directive("top", function() {
		return {
			restrict: 'E',
			templateUrl: './partials/top.html'
		};
	});
	app.directive("why", function() {
		return {
			restrict: 'E',
			templateUrl: './partials/why.html',
			controller: 'QualitiesController'
		};
	});
	app.directive("about", function() {
		return {
			restrict: 'E',
			templateUrl: './partials/about.html'
		};
	});
	app.directive("experience", function() {
		return {
			restrict: 'E',
			templateUrl: './partials/experience.html'
		};
	});
	app.directive("skills", function() {
		return {
			restrict: 'E',
			templateUrl: './partials/skills.html',
			controller: 'SkillsController'
		};
	});
	app.directive("work", function() {
		return {
			restrict: 'E',
			templateUrl: './partials/work.html',
			controller: 'WorksController'
		};
	});
	app.directive("contact", function() {
		return {
			restrict: 'E',
			templateUrl: './partials/contact.html'
		};
	});
}());