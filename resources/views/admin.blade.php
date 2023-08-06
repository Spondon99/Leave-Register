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
    <link rel="stylesheet" href="backbone.css">
    <link rel="stylesheet" href="./admin.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="images/bup.png">
                <h4>Leave Register</h4>
            </div>

            <div id="sidebar-stick">
                <ul class="list-unstyled components">
                    <li>
                        <a href="#">
                            <i class="fas fa-users"></i>
                            Users
                        </a>
                    
                    </li>
                    <li>
                        <a href="./lr.html">
                            <i class="fas fa-sharp fa-solid fa-envelope"></i>
                            Leave Requests
                        </a>
                    
                    </li>
                    <li>
                        <a href="./index.html">
                            <i class="fas fa-sharp fa-solid fa-user-alt"></i>
                            User Dashboard
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


            <!-- Admin -->
            <h3>All users</h3>
            <div class="row" style="margin-top: 30px;">
                <div class="col-sm-4">
                    <div class="card user-div" onclick="showDetails()">
                        <div class="card-body user-content">
                            <div class="user-pic"><i class="fas fa-user-alt"></i></div>
                            <h5>User 1</h5>
                            <p>Lecturer</p>
                            <p>On leave</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card user-div" onclick="showDetails()">
                        <div class="card-body user-content">
                            <div class="user-pic"><i class="fas fa-user-alt"></i></div>
                            <h5>User 1</h5>
                            <p>Lecturer</p>
                            <p>On duty</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card user-div" onclick="showDetails()">
                        <div class="card-body user-content">
                            <div class="user-pic"><i class="fas fa-user-alt"></i></div>
                            <h5>User 1</h5>
                            <p>Lecturer</p>
                            <p>On duty</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="card user-div" onclick="showDetails()">
                        <div class="card-body user-content">
                            <div class="user-pic"><i class="fas fa-user-alt"></i></div>
                            <h5>User 1</h5>
                            <p>Lecturer</p>
                            <p>On leave</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card user-div" onclick="showDetails()">
                        <div class="card-body user-content">
                            <div class="user-pic"><i class="fas fa-user-alt"></i></div>
                            <h5>User 1</h5>
                            <p>Lecturer</p>
                            <p>On duty</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                  <span class="close">&times;</span>
                  <h5>User 1</h5>
                  <p style="text-align:center;">Lecturer</p>
                  <p>Status: On leave</p>
                  <p>Room no: 111</p>
                  <p>E-mail: someone@gmail.com</p>
                  <p>Phone: 0123456</p>
                  <button onclick="closeModal()">OK</button>
                </div>
              
              </div>
            <!-- End of modal-->

            <!-- -->

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

    <script src="./admin.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

    </script>
</body>

</html>