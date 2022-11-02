<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/css/backbone.css">
    <link rel="stylesheet" href="/css/notifications.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="/images/bup.png">
                <h4>Leave Register</h4>
            </div>

            <div id="sidebar-stick">
                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fas fa-home"></i>
                            Dashboard
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="./index.html" class="drop">My Profile</a>
                            </li>
                            <li>
                                <a href="./leaveTracker.html" class="drop">Leave Tracker</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./apply.html">
                            <i class="fas fa-sharp fa-solid fa-file"></i>
                            Apply
                        </a>
                    
                    </li>
                    <li>
                        <a href="./admin.html">
                            <i class="fas fa-sharp fa-solid fa-user-alt"></i>
                            Admin
                        </a>
                    </li>
                </ul>
            </div>
            <div id="sidebar-footer">
                <a href="./login.html">
                    <i class="fas fa-sign-out-alt"></i>
                    Sign out
                </a>
            </div>

        
           
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-solid fa-bars"></i>
                    </button>
                    <div class="top-right">
                        <a href="./notifications.html"><div id="mail"><i class="fas fa-sharp fa-solid fa-envelope"></i></div></a>
                        <div style="width: 8px;"></div>
                        <a href="./index.html"><div id="profile"><i class="fas fa-user-alt"></i></div></a>
                    </div>
                </div>
            </nav>

            <!-- notification -->

            <h3 style="margin-left: 35px;">Notifications</h3>

            <div class="row">
                <div class="col-sm-10">
                  <div class="card msg">
                    <div class="card-body" style="display:flex; justify-content: space-between;">
                        <div>Message from Admin-1</div>
                        <div style="color:blue;">View Full</div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-10">
                  <div class="card msg">
                    <div class="card-body" style="display:flex; justify-content: space-between;">
                        <div>Your leave has been approved</div>
                        <div style="color:blue;">View Full</div>
                    </div>
                  </div>
                </div>
            </div>

                <div id="footer">
                    <div class="item">About us</div>
                    <div class="item">Privacy Policy</div>
                    <div class="item">Help</div>
                </div>
            
            
    </div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        // function iconF() {
        //     let i = document.querySelectorAll("nav > div > ul > li > a");
        //     i.forEach(
        //         value => {
        //            console.log(value.innerHTML); 
        //         }
        //     )
        // }

    </script>
</body>

</html>