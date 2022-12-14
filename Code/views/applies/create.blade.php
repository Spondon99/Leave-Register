<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Leave Apply</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/css/backbone.css">
    <link rel="stylesheet" href="/css/apply.css">

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
                                <a href="{{url('profile/'.$user->id)}}" class="drop">My Profile</a>
                            </li>
                            <li>
                                <a href="{{url('leavetracker/'.$user->id)}}" class="drop">Leave Tracker</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-sharp fa-solid fa-file"></i>
                            Apply
                        </a>
                    
                    </li>
                    <li>
                        @if($user->designation == 'Chairman' || $user->designation == 'Dean')
                            <a href="{{url('admin/'.$user->id)}}">
                                <i class="fas fa-sharp fa-solid fa-user-alt"></i>
                                Admin
                            </a>
                        @endif
                    </li>
                </ul>
            </div>
            <div id="sidebar-footer">
                <a href="{{url('login')}}">
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


            <h3 style="text-align:center;">Apply for Leave</h3>
            <form action="/apply/{{$user->userid}}" method="post">
            @csrf
            
            <div>
                <div class="row" style="margin-top: 60px; padding: 0 70px;">
                    <div class="col-sm-6" style="margin-bottom: 20px;">
                        <h6>Type of leave</h6>
                        <select id="leaveType" name="leaveType" required>
                            <option value="" selected disabled hidden>Select one</option>
                            <option value="casual">Casual</option>
                            <option value="earned">Earned</option>
                            <option value="entertainment">Entertainment</option>
                        </select>
                        
                        <p>Leaves taken: </p>
                        <p>Remaining: </p>
                    </div>

                    <div class="col-sm-6">
                        <h6>Write an application (optional)</h6>
                        <div style="background-color:white;">
                            <input id="subject" type="text" name="subject" placeholder=" Subject" style="border: none; width: 100%;">
                            <hr>
                            <textarea id="text" name="text" placeholder=" Text" style="border: none; width: 100%; height: 150px"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 40px; padding: 0 70px;">
                    <div class="col-sm-6" style="margin-top: 2px;margin-bottom: 50px;">
                        <h6>Duration of leave</h6>
                        <table>    
                            <tr>
                                <td style="padding-top: 10px; padding-right: 10px;"><label>From</label></td>
                                <td><input id="startDate" type="date" name="startDate" required></td>
                            </tr>
                            <tr>
                                <td style="padding-top: 10px; padding-right: 10px;"><label>To</label></td>
                                <td><input id="endDate" type="date" name="endDate" required></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-sm-6">
                        <h6>In charge (optional)</h6>
                        <input id="incharge" type="text" name="incharge" placeholder=" Name" style="border: none; width: 85%; height: 50px">
                    </div>
                </div>

                <div class="row" style="padding: 5% auto 0 auto; margin-bottom: 20px;">
                    <div class="col-sm-12">
                        <input id="myBtn" type="submit" value="Apply">
                        <button id="discard" onclick="reset()">Discard</button>
                    </div>
                </div>
            </div>
            </form>

            <!-- Modal -->
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                  <span class="close">&times;</span>
                  <p>Send your application?</p>
                  <div style="display: flex;">
                    <button id="ok" onclick="okF()">Ok</button>
                    <button id="cancel" onclick="cancelF()">Cancel</button>
                  </div>
                </div>
              
              </div>
            <!-- End of modal-->

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

    <script src="./apply.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>