<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Authnet</a>
        </div>

        <!-- LEFT ALIGN !-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>

            <!-- RIGHT ALIGN !-->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a>
                        <?php echo $_SESSION['username']; ?>
                    </a>
                </li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>