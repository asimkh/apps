angular.module('starter.services', [])

.service('formData', function() {
 return {
   form: {},
   getForm: function() {
     return this.form;
   },
   updateForm: function(form) {
     this.form = form;
   }
 }
})

.factory('Chats', function() {
  // Might use a resource here that returns a JSON array
 
  // Some fake testing data

  /* https://raw.githubusercontent.com/asimkh/apps/master/Hazzir/www */

  var users = [{
    id: 0,
    name: 'dolor sit',
    desc: 'adipiscing elit',
    perH: 'XXXX',
    details:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id eleifend elit. Integer ultrices pharetra sem, nec tincidunt diam maximus quis. Donec vehicula tempus .nunc, a viverra felis mattis sodales. Mauris quis scelerisque eros. Cras aliquam gravida rutrum. Donec congue libero sit amet dictum viverra. Morbi feugiat finibus felis, sed efficitur purus. Sed placerat massa sem, id venenatis lectus ',
    face: './img/thumb-m.png',
    addTime: '30 mins',
    addCity: 'Morbi id ',
    addCountry: 'consectetur adipiscing'

  }, {
    id: 1,
    name: 'dolor sit',
    desc: 'adipiscing elit',
    perH: 'XXXX',
    details:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id eleifend elit. Integer ultrices pharetra sem, nec tincidunt diam maximus quis. Donec vehicula tempus .nunc, a viverra felis mattis sodales. Mauris quis scelerisque eros. Cras aliquam gravida rutrum. Donec congue libero sit amet dictum viverra. Morbi feugiat finibus felis, sed efficitur purus. Sed placerat massa sem, id venenatis lectus ',
    face: './img/thumb-m.png',
    addTime: '30 mins',
   addCity: 'Morbi id ',
    addCountry: 'consectetur adipiscing'
  }, {
    id: 2,
    name: 'dolor sit',
    desc: 'adipiscing elit',
    perH: 'XXXX',
    details:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id eleifend elit. Integer ultrices pharetra sem, nec tincidunt diam maximus quis. Donec vehicula tempus .nunc, a viverra felis mattis sodales. Mauris quis scelerisque eros. Cras aliquam gravida rutrum. Donec congue libero sit amet dictum viverra. Morbi feugiat finibus felis, sed efficitur purus. Sed placerat massa sem, id venenatis lectus ',
    face: './img/thumb-m.png',
    addTime: '30 mins',
    addCity: 'Morbi id ',
    addCountry: 'consectetur adipiscing'
  }, {
    id: 3,
    name: 'dolor sit',
    desc: 'adipiscing elit',
   perH: 'XXXX',
    details:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id eleifend elit. Integer ultrices pharetra sem, nec tincidunt diam maximus quis. Donec vehicula tempus .nunc, a viverra felis mattis sodales. Mauris quis scelerisque eros. Cras aliquam gravida rutrum. Donec congue libero sit amet dictum viverra. Morbi feugiat finibus felis, sed efficitur purus. Sed placerat massa sem, id venenatis lectus ',
    face: './img/thumb-m.png',
    addTime: '30 mins',
    addCity: 'Morbi id ',
    addCountry: 'consectetur adipiscing'
  }, {
    id: 4,
    name: 'dolor sit',
    desc: 'adipiscing elit',
    perH: 'XXXX',
    details:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id eleifend elit. Integer ultrices pharetra sem, nec tincidunt diam maximus quis. Donec vehicula tempus .nunc, a viverra felis mattis sodales. Mauris quis scelerisque eros. Cras aliquam gravida rutrum. Donec congue libero sit amet dictum viverra. Morbi feugiat finibus felis, sed efficitur purus. Sed placerat massa sem, id venenatis lectus ',
    face: './img/thumb-m.png',
    addTime: '30 mins',
    addCity: 'Morbi id ',
    addCountry: 'consectetur adipiscing'
  },
  {
    id: 5,
    name: 'dolor sit',
    desc: 'adipiscing elit',
    perH: 'XXXX',
    details:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id eleifend elit. Integer ultrices pharetra sem, nec tincidunt diam maximus quis. Donec vehicula tempus .nunc, a viverra felis mattis sodales. Mauris quis scelerisque eros. Cras aliquam gravida rutrum. Donec congue libero sit amet dictum viverra. Morbi feugiat finibus felis, sed efficitur purus. Sed placerat massa sem, id venenatis lectus ',
    face: './img/thumb-m.png',
    addTime: '30 mins',
    addCity: 'Morbi id ',
    addCountry: 'consectetur adipiscing'
  },
  {
    id: 6,
    name: 'dolor sit',
    desc: 'adipiscing elit',
    perH: 'XXXX',
    details:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id eleifend elit. Integer ultrices pharetra sem, nec tincidunt diam maximus quis. Donec vehicula tempus .nunc, a viverra felis mattis sodales. Mauris quis scelerisque eros. Cras aliquam gravida rutrum. Donec congue libero sit amet dictum viverra. Morbi feugiat finibus felis, sed efficitur purus. Sed placerat massa sem, id venenatis lectus ',
    face: './img/thumb-m.png',
    addTime: '30 mins',
    addCity: 'Morbi id ',
   addCountry: 'consectetur adipiscing'
  }];

  return {
    all: function() {
      return users;
    },
    remove: function(chat) {
      users.splice(users.indexOf(chat), 1);
    },
    get: function(chatId) {
      for (var i = 0; i < users.length; i++) {
        if (users[i].id === parseInt(chatId)) {
          return users[i];
        }
      }
      return null;
    }
  };
});