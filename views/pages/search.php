<!DOCTYPE html>
<html>
    <head>
        <title>WWC - Search</title>
        <meta charset="UTF-8">    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <!--StyleSheets-->
        <link rel="stylesheet" type="text/css" href="../_css/style.css" />
        <link rel="stylesheet" type="text/css" href="../_css/search.css" />
        <link rel="stylesheet" type="text/css" href="../_css/styles.css" />
        <!--Fonts-->
        <link rel="stylesheet" type="text/css" href="../_css/ss-pika.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <!-- If not signed in, redirect to sign in page -->
    </head>

    <body>
        <div id="container">
            <div id="header" class="header-w-btn">
                <!-- Display Sign in or Sign out button -->
                <?php
                $member_id = filter_input(INPUT_COOKIE, 'member_id', FILTER_SANITIZE_STRING);
                $security = filter_input(INPUT_COOKIE, 'security', FILTER_SANITIZE_STRING);
                if (!$member_id || !$security) {
                    echo "<div id='corner-btn'>
                                <a class='btn btn-outline-light' href='sign_in.php'>Sign in</a>
                              </div>";
                } else {
                    echo "<div id='corner-btn'>
                                <a class='btn btn-outline-light' href='../../controllers/sign_out_controller.php'>Sign out</a>
                              </div>";
                }
                ?>
                <a href="../../index.php"><img src="../_img/logo/LogoWhite.png"></a>
            </div>

            <!-- NAV --> 
            <div id="nav" class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <ul>
                        <li><a href="../../index.php">Home</a></li>
                    </ul>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav full">
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="nav_search_results.php?cat=1">Laugh</a></li>
                            <li><a href="nav_search_results.php?cat=2">Innovate</a></li>
                            <li><a href="nav_search_results.php?cat=3">Learn</a></li>
                            <li><a href="nav_search_results.php?cat=4">Inspire</a></li>
                            <?php
                            $security = filter_input(INPUT_COOKIE, 'security', FILTER_SANITIZE_STRING);
                            if ($security === 'writer') {
                                echo "<li><a href='write_post.php'>Write</a></li>";
                            }
                            ?>
                            <li class="icon"><a href="search.php">🔎</a></li>
                        </ul>
                    </div>       
                </div>
            </div>
        </div>

        <div class="container" id="search">
                <h1 class="title">Post search</h1>
                <p class="subtitle text-center">Search by category, hashtag, title or author (or any combination)</p>
            <form id="form" class="col-sm-6 offset-sm-3">
                <div>
                    <div class="form-group">
                        <label>Category:</label>
                        <select class="form-control custom-select" id="category">
                            <option value=""></option>
                            <option value="Laugh">Laugh</option>
                            <option value="Innovate">Innovate</option>
                            <option value="Learn">Learn</option>
                            <option value="Inspire">Inspire</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Hashtag:</label>
                        <select class="form-control custom-select" id="hashtag">
                            <option value=""></option>
                            <option value="#AI">#AI</option>
                            <option value="#brain">#brain</option>
                            <option value="#codelikeagirl">#codelikeagirl</option>
                            <option value="#computerscience">#computerscience</option>
                            <option value="#creativity">#creativity</option>
                            <option value="#employability">#employability</option>
                            <option value="#entertainment">#entertainment</option>
                            <option value="#entrepreneurship">#entrepreneurship</option>
                            <option value="#femaleleaders">#femaleleaders</option>
                            <option value="#genderequality">#genderequality</option>
                            <option value="#healthtech">#healthtech</option>
                            <option value="#hiddenfigures">#hiddenfigures</option>
                            <option value="#STEM">#STEM</option>
                            <option value="#study">#study</option>
                            <option value="#Video">#Video</option>
                            <option value="#webdeveloper">#webdeveloper</option>
                            <option value="#WomenInTech">#WomenInTech</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" id="title" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="author">Author's username:</label>
                        <input type="text" id="author" class="form-control"/>
                    </div>
                    <div class="text-center">
                        <input type="button" id="submit" value="Search" class="peach search-btn"/>
                    </div>

                </div>
            </form>
        </div>
        <div class="container" id="results">
            <!--search results-->
        </div>


        <div class="clear"></div> <!--needed for the footer to be at the bottom-->
        <!-- NEXT -->
        <div id="nextlink">
          <div class="container">
            <!-- COMMENT OUT IF NEEDED -->
            <!-- <a href="#" class="left">&larr; Newer Posts</a>
            <a href="#" class="right">Older Posts &rarr;</a> -->
          </div>
          <div class="clear"></div>
        </div>
        
        <!-- FOOTER -->
        <div id="footer">
            <div class="container">
              <h4>Women Who Can &copy;</h4>
              <p>Designed and created with <span class="icon">&#x2665;</span> by <a href="https://github.com/annaecc">@annaecc</a>,
                  <a href="https://github.com/LauraCollard">@lauracollard</a>, <a href="https://github.com/loujean">@loujean</a>,
                  <a href="https://github.com/alysanne">@alysanne</a> and <a href="https://github.com/StephBrooks88">@stephbrooks88</a>. 
                  We use cookies to give you a smooth experience. We will never share your details with third parties. 
                  In order to use Women Who Can, you must agree to our Privacy Policy and our cookie policy.</p>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../../controllers/search_controller.js"></script>
    </body>
</html>

