<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

//define page title
$title = 'Authnet Portal';

//include header template
require('layout/header.php'); 
?>
    <?php include "components/nav.user.php"; ?>
        <div class="container">

            <div class="row bgimg1">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <h2>Welcome, <?php echo $_SESSION['username']; ?>.</h2>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="#newsfeed" class="list-group-item" data-toggle="tab">Newsfeed
  </a>
                        <a href="#profile" class="list-group-item" data-toggle="tab">Profile
  </a>
                        <a href="#messages" class="list-group-item" data-toggle="tab">Messages
  </a>
                        <a href="#settings" class="list-group-item" data-toggle="tab">Settings
  </a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="newsfeed">
                            <?php include "user_components/newsfeed.php"; ?>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <?php include "user_components/profile.php"; ?>
                        </div>
                        <div class="tab-pane fade" id="messages">
                            <?php include "user_components/messages.php"; ?>
                        </div>
                        <div class="tab-pane fade" id="settings">
                            <?php include "user_components/settings.php"; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php 
//include footer template
include('layout/footer.php'); 
?>

            <script src="scripts/bootstrap-datepicker.js"></script>
            <script src="scripts/hipster-cards.js"></script>
            <script src="scripts/bootstrap-select.js"></script>
            <script src="scripts/bootstrap.js"></script>
            <script src="scripts/bootstrap.min.js"></script>
            <script src="scripts/jquery-1.10.2.js"></script>