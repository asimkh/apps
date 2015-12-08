var fb_ID ='970200256375080';
var fb_DV= '130401233990263'

angular.module('starter.controllers', ['starter.services', 'ngOpenFB','ionic','ngCordova'])


/* 
==== Login ==== 
Running login Controller when app is launched.
*/
.controller("LoginCtrl", function($scope, $state, formData, $cordovaOauth, $http, ngFB) {

   

  
  console.log("loading...assets")
  window.cordovaOauth = $cordovaOauth;
  window.http = $http;

  $scope.logoSrc = '/img/mob-logo.png';
  $scope.bgSrc = '/img/mob-background.png';
  $scope.descTxt = "Find the service people";
  $scope.loginTxt = "Facebook Login";
  $scope.user = {};

 ngFB.init({appId:fb_ID});


  
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
        params: {fields: 'id,name,email,gender, locale, link, timezone, age_range, location, hometown, birthday, bio, sports'}
    }).then(
        function (user) {
            $scope.user = user;
           
            //$scope.name = email;
            console.log(".."+user.name+" || location: "+user.hometown.name 
              +" || now: "+user.location.name +" || BD: "+user.birthday +" || GMT: "+user.timezone 
              +" || lnk: "+user.sports +" || bio: "+user.bio 
        )},
        function (error) {
            alert('Facebook error: ' + error.error_description);
        });
})

/* ---- Contact us  controller -- */
.controller('ContactCtrl',  function ($scope, ngFB, $http) {



    ngFB.api({
        path: '/me',
        params: {fields: 'id,name,email,gender, locale, link, timezone, age_range, location, hometown, birthday'}
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
       $scope.url1 = "http://hazzir.com/haz/sendmsg.php";
       
       var config = {
        "userName" : $scope.user.name, "userEmail" : $scope.user.email, "userSubject" :  $scope.user.usersubject, 
         "userComments" : $scope.user.usercomments
      };
      
      $scope.successMsg = true
      /*$http.post(method:'post',$scope.url, config )*/
      /*console.log(ContactForm.username)*/
       $http({
        method  : 'POST',
        url     : $scope.url1,
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



    





}

})

/* ---- menu controller -- */
.controller('NavController', function($scope, $ionicSideMenuDelegate) {
      $scope.toggleLeft = function() {
        $ionicSideMenuDelegate.toggleLeft();
      };

$scope.menu1="Home";
$scope.menu2="List";
$scope.menu3="Profile";
$scope.menu4="About";
$scope.menu5="Contact";
$scope.menu6="Logout";


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
.controller('DashCtrl', function($scope, $stateParams, ngFB, $state, $ionicModal,$http, $timeout, $state, $ionicSideMenuDelegate, formData) {
 
 $scope.ContinueTxt = "Continue";
 $scope.aboutHeading ="Introduction";
 $scope.aboutTxt =  "It is new digital technologies which will reach and convert leads into customers. "
  +"<strong style='color:white;'>Haz App</strong> service is entering its first year of business as bootstrapping startup.<br><br>"
  +"The mobile app offers build your own comprehensive database that is both reliable and trustworthy.<br>"
  +"Connect with network of professionals via mobile app.<br>"
  +"<br><a class='lnk' target='_blank' href='http://www.hazzir.com'>web : http://www.hazzir.com</a>"
  +"<br><a class='lnk' target='_blank' href='mailto:support@hazzir.com'>email : support@hazzir.com</a>"
  +"<br>"
  +"<h1>Advertise with us</h1>"
  +"Looking to promote your brand & reach new customers?<br>"
  +"Advertising on <strong>Haz App</strong> gives you the platform to reach an audience perfect for your business.<br><br>"
  +"If you are interested in advertising with us please email us at <a target='_blank' class='lnk' style='text-decoration: none' href='mailto:support@hazzir.com'>support@hazzir.com</a>."
  
 console.log("loading...Dashboard")
 
  



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
.controller('ChatsCtrl', function($scope, Chats,  $ionicModal) {
  // With the new view caching in Ionic, Controllers are only called
  // when they are recreated or on app start, instead of every page change.
  // To listen for when this page is active (for example, to refresh data),
  // listen for the $ionicView.enter event:
  //
  //$scope.$on('$ionicView.enter', function(e) {
  //});
 var currentStart = 0

 $scope.users = [];

// Create and load the Modal
  $ionicModal.fromTemplateUrl('templates/new-item.html', function(modal) {
    $scope.taskModal = modal;
  }, {
    scope: $scope,
    animation: 'slide-in-up'
  });

   // Called when the form is submitted
  $scope.createTask = function(task) {
    $scope.chats.push({
    id: 7,
    name: task.name,
    face: './img/thumb-m.png'/*,
    desc: 'adipiscing elit',
    perH: 'XXXX',
    details:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id eleifend elit. Integer ultrices pharetra sem, nec tincidunt diam maximus quis. Donec vehicula tempus .nunc, a viverra felis mattis sodales. Mauris quis scelerisque eros. Cras aliquam gravida rutrum. Donec congue libero sit amet dictum viverra. Morbi feugiat finibus felis, sed efficitur purus. Sed placerat massa sem, id venenatis lectus ',
    face: './img/thumb-m.png',
    addTime: '30 mins',
    addCity: 'Morbi id ',
   addCountry: 'consectetur adipiscing'
    */
    });
    $scope.taskModal.hide();
    task.name = "";
  };


   // Open our new task modal
  $scope.newTask = function() {
    $scope.taskModal.show();
  };

  // Close the new task modal
  $scope.closeNewTask = function() {
    $scope.taskModal.hide();
  };

  console.log("loading...list")
  $scope.chats = Chats.all();
  console.log("Users in room = " + $scope.chats.length);
  
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
    ngFB.login({scope: 'public_profile,email,user_friends,publish_actions,user_location,user_hometown,user_birthday,user_about_me, user_likes, user_work_history'}).then(
        function (response) {
          console.log(response.user_hometown);
          console.log(response.user_location);
            if (response.status === 'connected') {
                console.log('Facebook login succeeded');
                //$scope.closeLogin();
                 $state.go('app.settings'); // set home
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
.controller('AccountCtrl', function($scope, $ionicSideMenuDelegate, $ionicSlideBoxDelegate, formData, ngFB , $http) {

  /*=== Save user Data ====== */

  var config, xName, xEmail ;
  $scope.url = "http://hazzir.com/haz/hazusers.php";

    ngFB.api({
        path: '/me',
        params: {fields: 'id,name,email,gender, locale, link, timezone, age_range, location, hometown, birthday, bio, sports'}
    }).then(
        function (user) {
            $scope.user = user;
             console.log("userName: "+user.name+" || userEmail: "+ $scope.user.email +" || userHome: "+$scope.user.hometown.name 
              +" || userLocation: "+$scope.user.location.name +" || userBD: "+$scope.user.birthday +" || userGMT: "+$scope.user.timezone 
              +" || userLikes: "+$scope.user.sports +" || userBio: "+$scope.user.bio +" || userGender: "+$scope.user.gender 
              );

            /*console.log("userName : "+ $scope.user.name + ", userEmail : "+ $scope.user.email)*/
            $http({
                method  : 'POST',
                url     : $scope.url,
                data    : {
                 'userName' : $scope.user.name,
                 'userEmail' : $scope.user.email,
                 'userBio' : $scope.user.bio,
                 'userBD' : $scope.user.birthday,
                 'userGender' : $scope.user.gender,
                 'userHome' : $scope.user.hometown.name,
                 'userLocation' : $scope.user.location.name,
                 'userGMT' : $scope.user.timezone
                  }, 
                headers : {'Access-Control-Allow-Origin':'*'}
                }).success(function (data, status, config){console.log("SUCCESS : " + data);})
                  .error(function (data, status, config){console.log("Error : " + data);});
            
        },
        function (error) {
            alert('Facebook error: ' + error.error_description);
        });

      
       

  /* ============ */

 console.log("loading....settings")
 $scope.user = formData.getForm();
   $scope.myActiveSlide = 2;

    $scope.nextSlide = function() {
    $ionicSlideBoxDelegate.next();
  }

 $scope.img1 = '/img/01-electronics.jpg';
 $scope.img2 = '/img/02-medicine.jpg';
 $scope.img3 = '/img/03-business.jpg';
 $scope.img4 = '/img/04-building.jpg';


/*
  setTimeout(function(){
      $ionicSlideBoxDelegate.next();
      console.log("timeout..")
  },1000);
*/

  $scope.slideHasChanged = function(index) {
    //$scope.slideIndex = index;
     $ionicSlideBoxDelegate.currentIndex();
     console.log("currentSlide: "+index)
  };

   $scope.pagerClick  = function(index) {
    //$ionicSlideBoxDelegate.currentIndex();
     $ionicSlideBoxDelegate.next();
    console.log("d")
  }
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





