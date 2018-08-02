<!doctype html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Roboto+Slab|Lato:900" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <title>Hello, I am Celena</title>
  </head>
  <body>

    <!--Nav Bar-->
    <div id="page" class="hidden">
      <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal"></h5>
        <nav class="my-2 my-md-0 mr-md-3 ">
          <a id="link-1" class="p-2 text-dark" href="#"><i class="fas fa-home"></i></a>
          <a id="link-2" class="p-2 text-dark" href="#">Projects</a>
          <a id="link-3" class="p-2 text-dark" href="#">About</a>
          <a id="link-4" class="p-2 text-dark" href="#">Contact</a>

        </nav>
      </div>


      <div class="bucket">

        <!-- NAMECARD -->
        <div class="space">
        </div>

        <div class="namecard section">
            <img src="./imgs/nametag.png" style="width:100%"/>
        </div>

        <div class="space">
        </div>

<!---- PROJECTS ---->
        <div class="projects section hidden">
          <h2 class="title">My Projects</h2>
          <div class="proj1">
              <h4 class="title">
                Butch Refined: A blog
              </h4>
            <div class="project-details">
              <div class="detail">
                <p class="project "> Made from Django and launched with Heroku and AWS, this is Celena's first ever web app.  It is an on ongoing project that is a true test of patience and independent learning.  Originally created as a lifestyle blog,
                   it is now re-purposed as a template for others to use and learn from.  Visit the webpage and play around.
                  <br/>
                  <a target="_blank" href="https://butch-refined.herokuapp.com/">butch-refined.herokuapp.com</a>
                  <br/>
                  <a target="_blank" href="https://github.com/chandojo/butchrefined">github.com/chandojo/butchrefined</a>
                </p>
              </div>

            <div class="detail">
                <img class="project detail" src="./imgs/butchrefined.png"/>
            </div>
          </div>
          </div>
          <hr style="padding:1%;"/>
          <div class="proj2">
              <h4 class="title">
                Climbing Buddies <small class="text-danger" style="font-style:italic;">In development</small>
              </h4>

            <div class="project-details">
              <div class="detail development">
                <p class="project">
                  There is an ongoing problem for climbers: finding partners with the same climbing schedule. This web app fixes that problem by allowing users to see find friends
                  with similar schedules.  Future features will include climbing locations, conditions, weather, and traffic.
                </p>
              </div>
          </div>
          </div>

        </div>

        <!---- ABOUT ---->
        <div class="about section hidden">
          <h2 class="title">About Celena</h2>
          <div class="about-section">
            <p class="aboutme">Celena is a web developer based out of Seattle, WA.  She specializes in web app and front end development with deep-rooted values of aesthetic, simplicity, and minimalism. </p>
          </div>
        </div>

        <!---- HIRE ---->
        <div class="contact section">
          <h2 class="title">Let's Work Together</h2>
          <div class="contact-section">
          <p class="contactme">If you have a cool project in mind or like my work, send me a message.    </p>

          <?php include('form_validate.php');?>
          <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name: <input type="text" name="name" /> <span class="error">* <?php echo $nameErr;?></span> <br/>
            Email: <input type="text" name="email"  /> <span class="error">* <?php echo $emailErr;?></span> <br/>
            Message: <textarea name="message"></textarea> <span class="error">* <?php echo $messageErr;?></span> <br/>
            <div class="g-recaptcha" data-sitekey="6LeawGcUAAAAALZgZWqsbWOP9yey3p1v9l2BKW__"></div>
            <button type="submit" form="contact-form" value="Submit">Submit</button> <span><?php echo $success; ?></span>

          </form>

        </div>

        </div>

      </div>
    </div>

    <!-- Script loaded at end of page -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <script src="script.js"></script>

  </body>
</html>
