// Ionic Starter App

// angular.module is a global place for creating, registering and retrieving Angular modules
// 'starter' is the name of this angular module example (also set in a <body> attribute in index.html)
// the 2nd parameter is an array of 'requires'
// 'starter.services' is found in services.js
// 'starter.controllers' is found in controllers.js

var appVersion = "0.0.0";

angular.module('starter', ['ionic',  'starter.services', 'ionic.service.core', 'ionic.service.analytics','ionic.service.push', 'starter.controllers','ngCordova', 'ngOpenFB'])

.run(function($ionicPlatform,  $ionicAnalytics, ngFB) {




  
  ngFB.init({appId: '970200256375080'});

  $ionicPlatform.ready(function() {

    

/*
   Ionic.io();

   var push = new Ionic.Push({});

push.register(function(token) {
  // Log out your device token (Save this!)
  console.log("Got Token:",token.token);
});
*/

    $ionicAnalytics.register();

    // Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
    // for form inputs)
    if (window.cordova && window.cordova.plugins && window.cordova.plugins.Keyboard) {
      cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);
      cordova.plugins.Keyboard.disableScroll(true);

    }
    if (window.StatusBar) {
      // org.apache.cordova.statusbar required
      StatusBar.styleLightContent();
    }

/*
    cordova.getAppVersion(function (version) {
console.log("ionic"+version);
});
*/

  });
})

.config(function($stateProvider, $urlRouterProvider, $ionicAppProvider, $ionicConfigProvider) {

  $ionicConfigProvider.tabs.position('bottom'); // other values: top
  $ionicConfigProvider.tabs.style("standard"); 

  $ionicAppProvider.identify({
    // The App ID for the server
    app_id: '38d3dd54',
    // The API key all services will use for this app
    api_key: '8989d127b3c50dec67aff1686297fe5c03caf1601c4e2346',
    dev_push: true,
    // The GCM project number
   gcm_id: 'infinite-cache-92312'
  });

  // Ionic uses AngularUI Router which uses the concept of states
  // Learn more here: https://github.com/angular-ui/ui-router
  // Set up the various states which the app can be in.
  // Each state's controller can be found in controllers.js
  $stateProvider

  .state('app', {
    url: '/home',
    abstract: true,
    templateUrl: 'templates/menu.html',
    controller: "NavController"
  })

  // setup an abstract state for the tabs directive
    .state('tab', {
    url: '/tab',
    abstract: true,
    templateUrl: 'templates/tabs.html',
    controller: "TabCtrl"
  })




  // Each tab has its own nav history stack:

  .state('app.dash', {
    url: '/about',
    views: {
      'menuContent': {
        templateUrl: 'templates/dashboard.html',
        controller: 'DashCtrl'
      }
    }
  })


  .state('app.list', {
      url: '/list',
      views: {
        'menuContent': {
          templateUrl: 'templates/tab-chats.html',
          controller: 'ChatsCtrl'
        }
      }
    })

    .state('app.list-detail', {
      url: '/list/:chatId',
      views: {
        'menuContent': {
          templateUrl: 'templates/chat-detail.html',
          controller: 'ChatDetailCtrl'
        }
      }
    })

  .state('app.settings', {
    url: '/settings',
    views: {
      'menuContent': {
        templateUrl: 'templates/settings.html',
        controller: 'AccountCtrl'
      }
    }
  });

  $stateProvider
        .state('home', {
            url: '/',
            controller: 'landingCtrl',
            templateUrl: 'templates/landing.html'
    });

  // if none of the above states are matched, use this as the fallback
  $urlRouterProvider.otherwise('/');

});