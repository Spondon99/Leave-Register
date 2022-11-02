<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>My profile | Dashboard</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/css/index.css">

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
                                <a href="#" class="drop">My Profile</a>
                            </li>
                            <li>
                                <a href="{{url('leavetracker/'.$user->id)}}" class="drop">Leave Tracker</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('apply/'.$user->id)}}">
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
                        <a href="{{url('')}}"><div id="mail"><i class="fas fa-sharp fa-solid fa-envelope"></i></div></a>
                        <div style="width: 8px;"></div>
                        <a href="#"><div id="profile"><i class="fas fa-user-alt"></i></div></a>
                    </div>
                </div>
            </nav>

             <!-- personal information and contact info -->

             
             @php
             if($user->information === NULL)
             {
                 $src = 'user_profile.jpg';
             }
             else {
                 $src = $user->information->profile_pic;
             }
             @endphp
                <div class="picc" style='background-image: url("/images/{{ $src }}")'>
                </div>

                <div>
                    <p class="bb">{{ $user->name }} <br> ID -{{ $user->userid }} </p>
                </div>


                <div class="perin">
                      <h3>Personal Information</h3>
                      <hr>
                    <p class="des"><b>Designation:</b> {{ $user->designation }} </p>
                    <p class="des"> <b>Department:</b> {{ $user->department }} </p>
                    <p class="des"> <b>Faculty:</b> {{ $user->faculty }} </p>
                    
                   
                </div>


                @php
                if($user->information === NULL)
                {
                    $phone = '--';
                }
                else {
                    $phone = $user->information->phone;
                }
                @endphp

                <div class="conin">
                    <h3>Contact Information</h3>
                    <hr>
                  <p class="des"><b>E-mail:</b> {{ $user->email }} </p>
                  <p class="des"> <b>Phone no:</b> {{ $phone }}</p>
                  <button onclick="showModal()">Update Profile</button>

                  <!-- Modal -->
                  <div id="myModal" class="modal">

                      <!-- Modal content -->
                      <div class="modal-content">
                      <span class="close">&times;</span>
                      <p>{{ $user->name }}'s Profile</p>
                      <p style="text-align:center;"></p>
                        <form action="/profile/{{$user->userid}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label>Email: </label><input id="email" name="email" type="email">
                            <label>Phone no: </label><input id="phone" name="phone" type="text">
                            <label>Profile Picture: </label><input id="profile_pic" name="profile_pic" type="file">
                            <button type="submit">OK</button>
                        </form>
                      </div>
              
                  </div>
                  <!-- End of modal-->

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

        // Get the modal
        var modal = document.getElementById("myModal");

        // // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        function showModal() {
        modal.style.display = "block";
        }

        function closeModal() {
        modal.style.display = "none";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }

    </script>
</body>

</html>