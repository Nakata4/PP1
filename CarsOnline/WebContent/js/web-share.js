(function () {
    'use strict';
    // check if share API is supported or not
    if (navigator.share !== undefined) {
      document.addEventListener('DOMContentLoaded', function() {
        // select the html element with the class "share"
        var shareBtn = document.querySelector('.share');
        // add share button event listener
        shareBtn.addEventListener('click', function(event) {
          // web share API
          navigator.share({
          // pick the default title of your page in the title tag
            title: document.title,
          // change the text of your share as you may like; to e.g desc of your pwa
            text: 'This is Login App',
            url: window.location.href
          })
          .then(function() {
            console.info('Registration successfully!');
          })
          .catch(function (error) {
            console.error('Wooooooo!', error);
          })
        });
      });
    }
  })();