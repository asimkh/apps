angular.module('starter.controllers', ['starter.services', 'ngOpenFB'])

.controller("AppCtrl", function($scope) {
  
  
})

.controller('AppController', function($scope, $ionicSideMenuDelegate) {

  console.log("menu");

  $scope.toggleLeft = function() {
    $ionicSideMenuDelegate.toggleLeft();
  };




})




.controller('TabCtrl', function($scope,  $state){


   

   $scope.gotoHome = function() {
    console.log('logout');
     $state.go('home', {url: 'templates/landing.html'})
  }

  $scope.gotoDash = function() {
    console.log('tab > Dash');
     
  }

  $scope.gotoList = function() {
    console.log('tab > List');
     
  }

  $scope.gotoSettings = function() {
    console.log('tab > Settings');
     
  }
})

.controller('DashCtrl', function($scope, $stateParams, ngFB, $state, $ionicModal, $timeout, $state) {

  //$scope.session = Session.get({sessionId: $stateParams.sessionId});
 //$scope.$root.tabsHidden = "tabs-hide";
/*
 scope.gotoHome = function() {
   console.log("tab > Home")
   //$state.go('tab.chats');
   $state.go('/', {url: 'templates/landing.html'})
  
  };
  */

 


 
  $scope.fbLogin = function () {
    ngFB.login({scope: 'public_profile, email, user_friends'}).then(
        function (response) {
            if (response.status === 'connected') {
                console.log('Facebook login succeeded');
                $scope.closeLogin();
            } else {
                alert('Facebook login failed');
            }
        });
};
})


.controller('ChatsCtrl', function($scope, Chats) {
  // With the new view caching in Ionic, Controllers are only called
  // when they are recreated or on app start, instead of every page change.
  // To listen for when this page is active (for example, to refresh data),
  // listen for the $ionicView.enter event:
  //
  //$scope.$on('$ionicView.enter', function(e) {
  //});

  $scope.chats = Chats.all();
  $scope.remove = function(chat) {
    Chats.remove(chat);
  };
})

.controller('ChatDetailCtrl', function($scope, $stateParams, Chats) {
  $scope.chat = Chats.get($stateParams.chatId);
})

.controller('landingCtrl', function($scope, $stateParams, $state) {



  

$scope.gotoState = function() {
   console.log("login")
   //$state.go('tab.chats');
   $state.go('tab.dash', {url: 'templates/tab-dash.html'})
  
  };
  

})



.controller('AccountCtrl', function($scope) {
  /*ngFB.api({
        path: '/me',
        params: {fields: 'id,name'}
    }).then(
        function (user) {
            $scope.user = user;
        },
        function (error) {
            alert('Facebook error: ' + error.error_description);
        });
*/

  $scope.settings = {
    enableFriends: true
  };
});





