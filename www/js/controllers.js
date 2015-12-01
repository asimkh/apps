var fb_ID ='970200256375080';
var fb_DV= '130401233990263'

angular.module('starter.controllers', ['starter.services', 'ngOpenFB','ionic','ngCordova'])


/* 
==== Login ==== 
Running login Controller when app is launched.
*/
.controller("LoginCtrl", function($scope, $state, formData, $cordovaOauth, $http) {

   

  
  console.log("loading...assets")
 // window.cordovaOauth = $cordovaOauth;
 // window.http = $http;

  $scope.logoSrc = '/img/mob-logo.png';
  $scope.bgSrc = '/img/mob-background.png';
  $scope.descTxt = "Find the service people";
  $scope.loginTxt = "Facebook Login";

  $scope.user = {};


/*
 $scope.submitForm = function(user) {

   if (user.firstName) {
     console.log("Submitting Form", user);
     formData.updateForm(user);
     console.log("Retrieving form from service", formData.getForm());
     $state.go('app.dash');


   } else {
     alert("Please fill out some information for the user");
   }
 };
 */
  
})

/* ---- Logout controller -- */
.controller('logoutCtrl', function($scope, $ionicSideMenuDelegate,ngFB, $state) {

      console.log("facebook logout...")
      ngFB.logout().then(
        function (success) {
                  // success

                   console.log("success...")
                   $state.go('home');
                }, function (error) {
                  // error
                });
                   


    })

/*
angular.module("facebookApp", ["ionic", "ngCordova"])

.controller("mainCtrl", ["$scope", "$cordovaOauth", "$http", function($scope, $cordovaOauth, $http) {
    window.cordovaOauth = $cordovaOauth;
    window.http = $http;
}]);
*/
/* ---- facebook controller -- */
.controller('ProfileCtrl', function ($scope, ngFB) {
    ngFB.api({
        path: '/me',
        params: {fields: 'id,name,email,gender,locale, link, timezone, age_range'}
    }).then(
        function (user) {
            $scope.user = user;
            //$scope.name = email;
            console.log(user)
        },
        function (error) {
            alert('Facebook error: ' + error.error_description);
        });
})

/* ---- Contact us  controller -- */
.controller('ContactCtrl',  function ($scope, ngFB, $http) {



    ngFB.api({
        path: '/me',
        params: {fields: 'id,name,email,gender,locale, link, timezone, age_range'}
    }).then(
        function (user) {
            $scope.user = user;
            //$scope.name = email;
            console.log(user)
        },
        function (error) {
            alert('Facebook error: ' + error.error_description);
        });

    /* --- */
  
    $scope.refresh = function() {
      $scope.successMsg = false;
      //$scope.user.name = "";
      //$scope.user.email = "";
      $scope.user.usersubject = "";
      $scope.user.usercomments = "";


    }

  //$scope.url = 'submit.php';
  //$scope.url = "http://hazzir.com/haz/postapp.php?userName";
 // $scope.data = {'userName' : $scope.user.username, 'userEmail' : $scope.user.email,"userSubject" : $scope.user.subject, 'userComments' : $scope.user.comments};
//console.log("sending data../?userName"+user.name+"&userEmail="+user.email+"&userSubject="+user.subject+"&userComments="+user.comments);
      
 
 /*

https://scotch.io/tutorials/submitting-ajax-forms-the-angularjs-way
http://shabeebk.com/blog/simple-form-submit-in-angularjs-with-php/
http://blog.ionic.io/handling-cors-issues-in-ionic/
http://stackoverflow.com/questions/26165879/ionic-app-and-server-post-acces-control-allow-origin
http://www.raymondcamden.com/2015/09/01/calling-remote-services-from-ionic-serve
http://www.nikola-breznjak.com/blog/codeproject/posting-data-from-ionic-app-to-php-server/
http://stackoverflow.com/questions/15707431/http-post-using-angular-js
  */
    $scope.SendContactMsg = function(user) {

      var headers = {
        'Access-Control-Allow-Origin' : '*',
        'Access-Control-Allow-Methods' : 'POST, GET, OPTIONS, PUT',
        'Content-Type': 'application/json',
        'Accept': 'application/json'
      };

    var userData = {};
    //$scope.userData.subject;
       $scope.url = "http://hazzir.com/haz/postapp.php";
       $scope.url1 = "http://hazzir.com/haz/sendmsg.php";
       $scope.url2 = "http://haz.herokuapp.com/sendmsg.php";
       var config = {
        "userName" : $scope.user.name, "userEmail" : $scope.user.email, "userSubject" :  $scope.user.usersubject, 
         "userComments" : $scope.user.usercomments
      };
      
      $scope.successMsg = true
      /*$http.post(method:'post',$scope.url, config )*/
      /*console.log(ContactForm.username)*/
       $http({
        method  : 'POST',
        url     : $scope.url2,
        data    : config, /*JSON.stringify($scope.ContactForm), */ // pass in data as strings
        headers : {'Access-Control-Allow-Origin':'*'}
        })
      .success(function (data, status, config){

      //$scope.postCallResult = logResult("POST SUCCESS", data, status, headers, config);

      $scope.result = data; 
      console.log("SUCCESS : " + data);
      console.log("sending data../?userName"+user.name+"&userEmail="+user.email+"&userSubject="+user.usersubject+"&userComments="+user.usercomments);
      
     /* $scope.successMsg = true;

      $scope.status = status;
      $scope.data = data;
      $scope.result = data; 
      $scope.tasks = data;
      */
      })
      .error(function (data, status, config)
        {

           $scope.result = data; 
           console.log("Error : " + data);
           
         // $scope.postCallResult = logResult("POST ERROR", data, status, headers, config);
        });



      
/*
      $scope.data = {'userName' : $scope.user.name, 'userEmail' : $scope.user.email,
                     "userSubject" : $scope.user.subject, 'userComments' : $scope.user.comments};

      var req = {
          
           url: 'http://hazzir.com/haz/postapp.php',
           headers: {
             'Content-Type': "application/json; charset=utf-8"
           },
           data: $scope.data
          }

      function successCallback(response) {

        $scope.SuccessTxt= "Thanks for submitting";     
      }

      function errorCallback(response) { 
        $scope.SuccessTxt= "Error, message not sent";
      }
      
      $http.post(req).then(successCallback, errorCallback);
      */





}

})

/* ---- menu controller -- */
.controller('NavController', function($scope, $ionicSideMenuDelegate) {
      $scope.toggleLeft = function() {
        $ionicSideMenuDelegate.toggleLeft();
      };


    })



/* ---- tabs controller -- */

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



/* ---- dashboard  -- */
.controller('DashCtrl', function($scope, $stateParams, ngFB, $state, $ionicModal, $timeout, $state, $ionicSideMenuDelegate, formData) {
 $scope.ContinueTxt = "Continue";
 console.log("loading...Dashboard")
 $scope.user = formData.getForm();
 //console.log("Submitting Form", $scope.user);
  //$scope.session = Session.get({sessionId: $stateParams.sessionId});
 //$scope.$root.tabsHidden = "tabs-hide";
/*
 scope.gotoHome = function() {
   console.log("tab > Home")
   //$state.go('tab.chats');
   $state.go('/', {url: 'templates/landing.html'})
  
  };
  */



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

/* ---- List  -- */
.controller('ChatsCtrl', function($scope, Chats) {
  // With the new view caching in Ionic, Controllers are only called
  // when they are recreated or on app start, instead of every page change.
  // To listen for when this page is active (for example, to refresh data),
  // listen for the $ionicView.enter event:
  //
  //$scope.$on('$ionicView.enter', function(e) {
  //});
  console.log("loading...list")
  $scope.chats = Chats.all();
  
  $scope.remove = function(chat) {
    Chats.remove(chat);
  };
})
/* ------ */
/* ---- List Details controller -- */

.controller('ChatDetailCtrl', function($scope, $stateParams, Chats) {
  $scope.chat = Chats.get($stateParams.chatId);
})

/* ------ */
/* ---- landing page controller -- */
.controller('landingCtrl', function($scope, $stateParams, $state, ngFB) {

//var deploy = new Ionic.Deploy();
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



  $scope.fbLogin = function () {


  console.log("facebook login...")
    ngFB.login({scope: 'public_profile,email,user_friends,publish_actions'}).then(
        function (response) {
            if (response.status === 'connected') {
                console.log('Facebook login succeeded');
                //$scope.closeLogin();
                 $state.go('app.dash');
            } else {
                alert('Facebook login failed');
            }
        });
};

$scope.gotoState = function() {
   console.log("login")
   //$state.go('tab.chats');
   $state.go('app.settings', {url: 'templates/settings.html'})
  
  };
  

})


/* ---- Settings  -- */
.controller('AccountCtrl', function($scope, $ionicSideMenuDelegate, formData) {

 console.log("loading....settings")
 $scope.user = formData.getForm();
   //$state.go('tab.chats');
   //$state.go('tab.dash', {url: 'templates/tab-dash.html'})
  
 
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





