<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Leave Tracking | Dashboard</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/css/backbone.css">
    <link rel="stylesheet" href="/css/leaveTracker.css">

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
                                <a href="#" class="drop">Leave Tracker</a>
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
                        <a href="./notifications.html"><div id="mail"><i class="fas fa-sharp fa-solid fa-envelope"></i></div></a>
                        <div style="width: 8px;"></div>
                        <a href="{{url('profile/'.$user->id)}}"><div id="profile"><i class="fas fa-user-alt"></i></div></a>
                    </div>
                </div>
            </nav>

            <!-- PHP variables for remaining leaves -->
            @php

                $applications = \App\Models\Apply::all();
                
                $casRem = 10;
                $earnedRem = 10;
                $entRem = 10;

                $casTaken = 0;
                $earnedTaken = 0;
                $entTaken = 0;

                $len = $approvals->count();

                foreach($applications as $application)
                {
                    if($application->approval === NULL)
                    {
                        continue;
                    }
                    if($application->user_id == $user->userid && $application->approval->approved == 'approve')
                    {
                        $datetime1 = strtotime($application->startDate);
                        $datetime2 = strtotime($application->endDate);

                        $secs = $datetime2 - $datetime1;
                        $days = $secs / 86400;
                        if($application->leaveType == 'casual')
                        {
                            $casRem -= $days;
                            $casTaken += $days;
                        }
                        elseif($application->leaveType == 'earned')
                        {
                            $earnedRem -= $days;
                            $earnedTaken += $days;
                        }
                        else
                        {
                            $entRem -= $days;
                            $entTaken += $days;
                        }
                    }
                }
            @endphp
          

            <!--Leave Tracker Content-->
            <h3 class="header">Leave Tracker</h3>
            <h5 class="header">Status: On Duty</h5>
            <br>

            <div class="row">
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                        <div style="display:flex;">
                          <div class="color-circle"></div>
                          <h5>Casual Leave</h5>
                        </div>
                        <hr>
                        <p>Taken: {{ $casTaken }}</p>
                        <p>Remaining: {{ $casRem }}</p>
                      </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                        <div style="display:flex;">
                          <div class="color-circle" style="background-color: #3EDBDB"></div>
                          <h5>Earned Leave</h5>
                        </div>
                        <hr>
                        <p>Taken: {{ $earnedTaken }}</p>
                        <p>Remaining: {{ $earnedRem }}</p>
                      </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <div style="display:flex;">
                        <div class="color-circle" style="background-color: #F9823F"></div>
                        <h5>Entertainment Leave</h5>
                      </div>
                      <hr>
                      <p>Taken: {{ $entTaken }}</p>
                      <p>Remaining: {{ $entRem }}</p>
                    </div>
                  </div>
                </div>
              </div>

{{-- 
            Change status on duty and on leave --}}





              <h3 style="text-align: center; margin-top: 50px; font-weight: 400;">Calendar</h3>
              <div id="calendar">
                <div id="month">
                    <h3 style="cursor: pointer;" onclick="prevNext('prev')">&#8592</h3>
                    <h2>-</h2>
                    <h2>-</h2>
                    <h3 style="cursor: pointer;" onclick="prevNext('next')">&#8594</h3>
                </div>
                <div id="weekdays">
                    <div class="weekday">Sun</div>
                    <div class="weekday">Mon</div>
                    <div class="weekday">Tue</div>
                    <div class="weekday">Wed</div>
                    <div class="weekday">Thu</div>
                    <div class="weekday">Fri</div>
                    <div class="weekday">Sat</div>
                </div>
                <div id="dates">
                    <div class="date zero first">-</div>
                    <div class="date one first">-</div>
                    <div class="date two first">-</div>
                    <div class="date three first">-</div>
                    <div class="date four first">-</div>
                    <div class="date five first">-</div>
                    <div class="date six first">-</div>
                    <div class="date zero second">-</div>
                    <div class="date one second">-</div>
                    <div class="date two second">-</div>
                    <div class="date three second">-</div>
                    <div class="date four second">-</div>
                    <div class="date five second">-</div>
                    <div class="date six second">-</div>
                    <div class="date zero third">-</div>
                    <div class="date one third">-</div>
                    <div class="date two third">-</div>
                    <div class="date three third">-</div>
                    <div class="date four third">-</div>
                    <div class="date five third">-</div>
                    <div class="date six third">-</div>
                    <div class="date zero fourth">-</div>
                    <div class="date one fourth">-</div>
                    <div class="date two fourth">-</div>
                    <div class="date three fourth">-</div>
                    <div class="date four fourth">-</div>
                    <div class="date five fourth">-</div>
                    <div class="date six fourth">-</div>
                    <div class="date zero fifth">-</div>
                    <div class="date one fifth">-</div>
                    <div class="date two fifth">-</div>
                    <div class="date three fifth">-</div>
                    <div class="date four fifth">-</div>
                    <div class="date five fifth">-</div>
                    <div class="date six fifth">-</div>
                    <div class="date zero sixth">-</div>
                    <div class="date one sixth">-</div>
                    <div class="date two sixth">-</div>
                    <div class="date three sixth">-</div>
                    <div class="date four sixth">-</div>
                    <div class="date five sixth">-</div>
                    <div class="date six sixth">-</div>
                </div>
            </div>
    
            <div class="row">
                <div class="col-sm-12">
                  <div class="card">
                    <div class="card-body" style="background-color: #E5E6F0; border-color: #E5E6F0; box-shadow: none;">
                        <h3 style="text-align: center; font-weight: 400;">Recent Applications</h3>
                        
                        @php
                            $recents = \App\Models\Apply::orderby('id', 'desc')->get();
                            $i = 0;
                        @endphp
                        @foreach($recents as $recent)
                        <div style="display:flex; margin: 30px auto 0 auto;">  
                            <div style="margin: 0 auto 0 2%;"><p style="color: #111;">{{ $recent->leaveType }} {{ $recent->startDate }}&#8594</p></div>
                            <div style="margin: 0 2% 0 auto;"><p style="color: #111;">{{ $recent->approval->approved }}</p></div>
                        </div>
                        @php
                            $i++;
                            if($i == 2)
                            {
                                break;
                            }
                        @endphp
                        @endforeach
                    </div>
                  </div>
                </div>
            </div>

            <div style="text-align: center;">
                <button id="viewall">View all</button>
            </div>
              

            <!--End of leave tracker content-->

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

    
    <script src="/js/calendar.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

    </script>
</body>

</html>