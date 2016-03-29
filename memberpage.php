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

            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <h2>Welcome, <?php echo $_SESSION['username']; ?>.</h2>
                    <p class="text-primary">Here's your newsfeed.</p>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="list-group">
                        <a href="#newsfeed" class="list-group-item" data-toggle="tab">
                            <h4 class="list-group-item-heading">Newsfeed</h4>
                            <p class="list-group-item-text">See what's going on around your world</p>
                        </a>
                        <a href="#profile" class="list-group-item" data-toggle="tab">
                            <h4 class="list-group-item-heading">Profile</h4>
                            <p class="list-group-item-text">View and Update your profile</p>
                        </a>
                        <a href="#messages" class="list-group-item" data-toggle="tab">
                            <h4 class="list-group-item-heading">Messages</h4>
                            <p class="list-group-item-text">Communicate with other Authnet Members</p>
                        </a>
                        <a href="#settings" class="list-group-item" data-toggle="tab">
                            <h4 class="list-group-item-heading">Settings</h4>
                            <p class="list-group-item-text">Review and change your settings</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-8">
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="newsfeed">
                            <p>This is the newsfeed.</p>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <p>This is the profile.</p>
                        </div>
                        <div class="tab-pane fade" id="messages">
                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                        </div>
                        <div class="tab-pane fade" id="settings">
                            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php 
//include header template
require('layout/footer.php'); 
?>