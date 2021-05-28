<?php

/**
 * Plugin Name: popupplugin
 * Description:       Handle the login process.
 * Version:           1.0.0
 * Requires at least: 5.2

 * Author:            oumaima
 */
session_start();
include('config.php');
add_shortcode("demo-list-posts", "demolistposts_handler");

function demolistposts_handler()
{
  //run function that actually does the work of the plugin
  $demolph_output = pop_jquery_test();
  //send back text to replace shortcode in post
  return $demolph_output;
}

wp_enqueue_script('jquery');
// Now we check if the data from the login form was submitted, isset() will check if the data exists.



if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = $connection->prepare("SELECT * FROM accounts WHERE username=:username");
  $query->bindParam("username", $username, PDO::PARAM_STR);
  $query->execute();
  $result = $query->fetch(PDO::FETCH_ASSOC);
  if (!$result) {
    echo '<p class="error">Username password combination is wrong!</p>';
  } else {
    if (password_verify($password, $result['password'])) {
      $_SESSION['user_id'] = $result['id'];
      echo '<p class="success">Congratulations, you are logged in!</p>';
    } else {
      echo '<p class="error">Username password combination is wrong!</p>';
    }
  }
}
 
function popupplugintext($content)
{
 
$content .= '

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Login
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="">
        <div class="">
          <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->


            <!-- Login Form -->

            <body id="body">

              <div id="login-card" class="card">
                <div class="card-body">
                  
                      <!-- The JS SDK Login Button -->
                  <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false"></div>
                  <br>
                <div class="g-signin2" data-onsuccess="onSignIn"></div>
                  <br>
                  <br>
                  <form method="post" action=""  id="login" name="signin-form" >

                    <div class="form-group">
                      <input type="username" class="form-control" id="username" placeholder="Enter username" name="username" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                    </div>
                    <button type="submit" value="login"  class="btn btn-primary deep-purple btn-block ">Submit</button>
                    <br>
                    <br>

                   

                  </form>
                </div>
                <div>

                  <!-- Remind Passowrd -->
                  <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>

                  </div>

                </div>
              </div>
          </div>

        </div>
      </div>
    </div>';
    return $content;
  }
    
    // jQuery alert to pop up when the page loads.

    function pop_jquery_test()
    {
    $src = plugins_url('js/jquerytest.js', __FILE__);
    wp_register_script('jquerytest', $src);
    wp_enqueue_script('jquerytest');

    wp_enqueue_script('jquery');
    // Add bootstrap CSS
    wp_register_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false, NULL, 'all');
    wp_enqueue_style('bootstrap-css');
   
    wp_enqueue_style('style',  plugin_dir_url(__FILE__) . 'css/style.css' );    
    // Add popper js
    wp_register_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', ['jquery'], NULL, true);
    wp_enqueue_script('popper-js');

    // Add bootstrap js
    wp_register_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['jquery'], NULL, true);
    wp_enqueue_script('bootstrap-js');
    wp_register_script('ajax', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', ['jquery'], NULL, true);
    wp_enqueue_script('ajax');
    wp_register_script('facebook', 'https://connect.facebook.net/en_US/sdk.js');
    wp_enqueue_script('facebook');
    wp_register_script('google', 'https://apis.google.com/js/platform.js?onload=renderButton');
    wp_enqueue_script('google');
    wp_register_style('your_namespace', plugins_url('css/style.css', __FILE__));
    wp_enqueue_style('your_namespace');
    wp_register_style('namespace', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('namespace');
    wp_register_style('font', 'https://fonts.googleapis.com/css?family=Nunito:600,700,900');
    wp_enqueue_style('font');
    }
    add_action('init', 'pop_jquery_test');
    add_filter('the_content', 'popupplugintext');
    ?>

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v10.0&appId=3796408820469720&autoLogAppEvents=1" nonce="e9amZyvB"></script>

    <!-- <form>
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
        <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form> -->