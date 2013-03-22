<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Vacuum Show</title>
  <!-- Le styles -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <script src="js/jquery.js"></script>
  <script src="js/jquery.backstretch.min.js"></script>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster. ASHISH: I moved them back to the top for readability - can move them back later. -->
    <!-- In this script I just copy what is in "urls.js", so I can use the functions that are defnied in it -->
    <script src="urls.js"></script>

    <!-- In this script I define two functions:-->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
      <![endif]-->
    </head>

    <body>
      <!-- Retrieve the keywords from GET variables -->
      <script>
      var GET = getUrlVars();
      if("keywords" in GET){
        if(GET["keywords"]=="keywords for the show"){
            keywords = [];
        } else {
          keywords = GET["keywords"].split('+');
        }  
      } else {
        keywords = [];
      }
      </script>
    
      <script>
          var pictureUrls = getPictureUrls("Flickr",keywords,30);
          $.backstretch(pictureUrls, {
              fade: 750,
              duration: 1000
          });
      </script>
      <script>
      /*
      function printMusicUrlsOL(){
        // Prints music urls in an ordered list
        var musicUrls = getMusicUrls("input does not matter yet");
        document.write("<audio controls autoplay>");
        document.write("<source src='"+musicUrls[0]+"'type='audio/ogg' controls='controls'></source>");
        document.write("</audio>");
      };
      */
      </script>

      <script>writeMusicPlayer("input does not matter yet")</script> 

      <a class="btn btn-small btn-inverse" href="index.php">Home</a>
      <a class="btn btn-small btn-inverse" href="save.php">Save to My Account</a>
      <a class="btn btn-small btn-inverse" href="signup.php">Sign Up</a>

    <!-- In this script I call the first function:-->
    
    <!-- In this script I call the second function:-->
    
    

    </body>
  </html>
