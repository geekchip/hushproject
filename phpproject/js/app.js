var myApp = angular.module("crud",["ngRoute"]);
myApp.config(function($routeProvider){
    $routeProvider
    .when('/', {
        templateUrl: 'Templates/posts.html',
        controller : 'postsCtrl'
    })
    .when('/createPost',{
        templateUrl: 'Templates/create.html',
        controller : 'createCtrl'

    })
    .when('/post/:id',{
        templateUrl: 'Templates/view.html',
        controller : 'viewCtrl'

    })
});

myApp.controller("postsCtrl", function($scope,$http){

    $http.get("http://localhost/phpproject/webservices/allPosts.php")
    .then(function(response){
        $scope.posts = response;
        console.log($scope.posts);
    });
});
myApp.controller("viewCtrl", function($scope,$http,$routeParams){

   $http({
       url : "http://localhost/phpproject/webservices/getPost.php",
       params:{id:$routeParams.id},
       method: "get"
   })
   .then(function(response){
       $scope.posts=response.data;
   });
    
});



myApp.controller("createCtrl", function($scope){
    $scope.info = 'Create Post';
});

