(function(){
	var app = angular.module('controllers', []);

	//Works
	app.controller('WorksController', function($scope, $http, $sce){
		//http://www.9lessons.info/2013/08/angularjs-tutorial-restful.html
		//Add data resource
		$http({method: 'GET', url:'./asset/works.json'}).success(function(response)
		{
			$.map(response.works, function(item) {
				item.description = $sce.trustAsHtml(item.description);
				return item;
			});
			$scope.works = response.works;
		});
	});

	//Qualities
	app.controller('QualitiesController', function($scope, $http){
		//http://www.9lessons.info/2013/08/angularjs-tutorial-restful.html
		//Add data resource
		$http({method: 'GET', url:'./asset/qualities.json'}).success(function(response)
		{
			$scope.results = response.qualities;
		});
	});

	//Skills
	app.controller('SkillsController', function($scope, $http){
		//Add data resource
		$http({method: 'GET', url:'./asset/skills.json'}).success(function(response)
		{
			$scope.summaries = response.summaries;
			$scope.tools = response.tools;
		});
	});
}());