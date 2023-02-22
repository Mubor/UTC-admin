const path = require('path');

module.exports = {
    mode: 'development',
    entry: {
        home: './assets/js/home.js', 
        contacts: './assets/js/contacts.js',
        simple: './assets/js/simple_page.js',
        works: './assets/js/works.js',
        team: './assets/js/team.js',
        post: './assets/js/post.js',
    },
    output: {
      path: path.resolve(__dirname + "/assets", "dist"),
    }
  };