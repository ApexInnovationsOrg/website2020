<nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">
            <?php
                //tis the season.
                //this reverts the xmas tree logo after 3 days into the new year. If after 3 days, the year is the same it will know that time is up into the new year.
                // $month = date('m');
                // $xmas = $month == 12;
                // if ($month == 1 && date("Y", strtotime("-3 day")) !== date("Y")) {
                //     $xmas = true;
                // }
                // if ($xmas) {
                //     echo '<img class="brand-image" src="/grfx/Apex_Christmas_Logo_LG_2017.png" alt="Apex Innovations, Education Healthcare Relies On"/>';
                // } else {
                //     echo '<img class="brand-image" src="/grfx/ApexLogo500.svg" alt="Apex Innovations, Education Healthcare Relies On"/>';
                // }

            ?>
            <img width="430" height="85" class="brand-image" src="/grfx/apexLogo.png" alt="logo">
            <img width="45" height="50" class="brand-icon" src="/grfx/starIcon.svg" alt="star icon">
        </a>
        
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation"
        class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

        <!-- Brand and toggle get grouped for better mobile display -->
        <div id="navbarSupportedContent" class="navbar-collapse collapse show" style="">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Education<span class="caret"></span></a>
                    <ul class="dropdown-menu">                   
                        <li><a href="products.html" style="display:block;">All Products</a></li>
                        <li><a href="products.html#cardiac" style="display:block;">Cardiac Courseware</a></li>
                        <li><a href="products.html#sepsis" style="display:block;">Sepsis Courseware</a></li>
                        <li><a href="products.html#neuro" style="display:block;">Neuro Courseware</a></li>
                        <li><a href="products.html#free" style="display:block;">Free Courseware</a></li>
                        <li><a href="products.html#mirule" style="display:block;">MI Rule Visions</a></li>      
                        <li><a href="products.html#bundles" style="display:block;">Courseware Bundles</a></li>      
                    </ul>
                </li>
                <li class="opLink nav-item"">
                    <a class="nav-link" href="/op.html">Competency Validation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/team.html">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/news.html">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/careers.html">Careers</a>
                </li>
            </ul>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right text-uppercase text-center">
                
            </ul>
        </div> -->
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


    