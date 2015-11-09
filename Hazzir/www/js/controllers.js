angular.module('starter.controllers', ['starter.services', 'ngOpenFB'])

.controller("AppCtrl", function($scope) {
  
  
})


.controller("LoginCtrl", function($scope) {

  console.log("assets")
  $scope.logoSrc = '/img/mob-logo.png';
  $scope.bgSrc = '/img/mob-background.png';
  $scope.descTxt = "Find the service people";
  $scope.loginTxt = "Login";
  
/*
  if (window.matchMedia("(min-width: 400px)").matches) {
    $scope.logoSrc = '/img/mob-logo.png';
} else {
    $scope.logoSrc = '/img/mob-logox.png';
}
  */
  
})

.controller('AppController', function($scope, $ionicSideMenuDelegate) {

  console.log("menu");

  $scope.toggleLeft = function() {
    $ionicSideMenuDelegate.toggleLeft();
  };




})

.controller('NavController', function($scope, $ionicSideMenuDelegate) {
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

.controller('DashCtrl', function($scope, $stateParams, ngFB, $state, $ionicModal, $timeout, $state, $ionicSideMenuDelegate) {

  //$scope.session = Session.get({sessionId: $stateParams.sessionId});
 //$scope.$root.tabsHidden = "tabs-hide";
/*
 scope.gotoHome = function() {
   console.log("tab > Home")
   //$state.go('tab.chats');
   $state.go('/', {url: 'templates/landing.html'})
  
  };
  */



  $scope.toggleLeftSideMenu = function() {
    $ionicSideMenuDelegate.toggleLeft();
  };

// Create the login modal that we will use later
  $ionicModal.fromTemplateUrl('templates/menu.html', {
    scope: $scope
  }).then(function(modal) {
    $scope.modal = modal;
  });

  // Triggered in the login modal to close it
  $scope.closeLogin = function() {
    $scope.modal.hide();
  };

  // Open the login modal
  $scope.login = function() {
    $scope.modal.show();
  };
/* 
$scope.toggleProjects = function() {
    $ionicSideMenuDelegate.toggleLeft();
  };*/

  // Perform the login action when the user submits the login form
  /*
  $scope.doLogin = function() {
    console.log('Doing login', $scope.loginData);

    // Simulate a login delay. Remove this and replace with your login
    // code if using a login system
    $timeout(function() {
      $scope.closeLogin();
    }, 1000);
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

// Update app code with new release from Ionic Deploy
  $scope.doUpdate = function() {
    deploy.update().then(function(res) {
      console.log('Ionic Deploy: Update Success! ', res);
    }, function(err) {
      console.log('Ionic Deploy: Update error! ', err);
    }, function(prog) {
      console.log('Ionic Deploy: Progress... ', prog);
    });
  };


// Check Ionic Deploy for new code
  $scope.checkForUpdates = function() {
    console.log('Ionic Deploy: Checking for updates');
    deploy.check().then(function(hasUpdate) {
      console.log('Ionic Deploy: Update available: ' + hasUpdate);
      $scope.hasUpdate = hasUpdate;
    }, function(err) {
      console.error('Ionic Deploy: Unable to check for updates', err);
    });
  }
//var deploy = new Ionic.Deploy();

  

$scope.gotoState = function() {
   console.log("login")
   //$state.go('tab.chats');
   $state.go('tab.dash', {url: 'templates/tab-dash.html'})
  
  };
  

})



.controller('AccountCtrl', function($scope, $ionicSideMenuDelegate) {
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





