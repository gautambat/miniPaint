var webshot = require('webshot');
 
webshot('http://www.google.co.in', 'google.png', function(err) {
  // screenshot now saved to google.png
})