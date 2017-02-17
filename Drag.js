// Canvas Object
var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');

// load image from data url
var imageObj = new Image();
imageObj.onload = function() 
{
ctx.drawImage(this, 0, 0);
};



function dataURItoBlob(dataURI) {
    var byteString = atob(dataURI.split(',')[1]);
    var ab = new ArrayBuffer(byteString.length);
    var ia = new Uint8Array(ab);
    for (var i = 0; i < byteString.length; i++) {
        ia[i] = byteString.charCodeAt(i);
    }
    return new Blob([ab], {type: 'image/png'});
}

$('#shareFB').click(function () {
    var data = $('#canvas')[0].toDataURL("image/png");
    try {
        blob = dataURItoBlob(data);
    } catch (e) {
        console.log(e);
    }
    FB.getLoginStatus(function (response) {
        console.log(response);
        if (response.status === "connected") {
            postImageToFacebook(response.authResponse.accessToken, "Canvas to Facebook/Twitter", "image/png", blob, window.location.href);
        } else if (response.status === "not_authorized") {
            FB.login(function (response) {
                postImageToFacebook(response.authResponse.accessToken, "Canvas to Facebook/Twitter", "image/png", blob, window.location.href);
            }, {scope: "publish_actions"});
        } else {
            FB.login(function (response) {
                postImageToFacebook(response.authResponse.accessToken, "Canvas to Facebook/Twitter", "image/png", blob, window.location.href);
            }, {scope: "publish_actions"});
        }
    });
});

function postImageToFacebook(token, filename, mimeType, imageData, message) {
              var fd = new FormData();
              fd.append("access_token", token);
              fd.append("source", imageData);
              fd.append("no_story", true);

              // Upload image to facebook without story(post to feed)
              $.ajax({
                  url: "https://graph.facebook.com/me/photos?access_token=" + token,
                  type: "POST",
                  data: fd,
                  processData: false,
                  contentType: false,
                  cache: false,
                  success: function (data) {
                      console.log("success: ", data);

                

                      // Get image source url
                      FB.api(
                          "/" + data.id + "?fields=images",
                          function (response) {
                              if (response && !response.error) {
                                  
                                  FB.ui({
                                   method: 'feed',
                                   display: 'popup',
                                   name: 'Check out my floof!',
                                   //link: window.location.href,
                                   picture: response.images[0].source,
                                   //caption: 'Reference Documentation',
                                   //description: message,
                                   //message: '',
                                   privacy: 'SELF',
                                 },
                                      function (response) {
                                          if (response && !response.error) {
                                              /* handle the result */
                                              console.log("Posted story to facebook");
                                              console.log(response);
                                          }
                                      }
                                  );
                              }
                          }
                      );
                  },
                  error: function (shr, status, data) {
                      console.log("error " + data + " Status " + shr.status);
                  },
                  complete: function (data) {
                      //console.log('Post to facebook Complete');
                      //return response;
                  }
              });
          }