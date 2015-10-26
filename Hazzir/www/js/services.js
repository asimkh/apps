angular.module('starter.services', [])

.factory('Chats', function() {
  // Might use a resource here that returns a JSON array

  // Some fake testing data
  var users = [{
    id: 0,
    name: 'Jasam Kim',
    desc: 'Creative/Web Developer',
    perH: '$230/hour',
    details:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id eleifend elit. Integer ultrices pharetra sem, nec tincidunt diam maximus quis. Donec vehicula tempus .nunc, a viverra felis mattis sodales. Mauris quis scelerisque eros. Cras aliquam gravida rutrum. Donec congue libero sit amet dictum viverra. Morbi feugiat finibus felis, sed efficitur purus. Sed placerat massa sem, id venenatis lectus ',
    face: '/img/thumb-m.png'
  }, {
    id: 1,
    name: 'Dolly Manny',
    desc: 'Creative Director',
    perH: '$230/hour',
    details:'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    face: '/img/thumb-f.png'
  }, {
    id: 2,
    name: 'Dominic',
    desc: 'Art Director',
    perH: '$230/hour',
    details:'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    face: '/img/thumb-m.png'
  }, {
    id: 3,
    name: 'Ahmad Qureshi',
    desc: 'FrontEnd Developer',
    perH: '$230/hour',
    details:'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    face: '/img/thumb-m.png'
  }, {
    id: 4,
    name: 'Rahul K',
    desc: 'BackEnd Developer',
    perH: '$230/hour',
    details:'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    face: '/img/thumb-m.png'
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