<?php include('header.html') ?>
<div id="sidebar">
    <a href="javascript:void(0)" class="closebtn text-white" onclick="closeNav()"><b>&times;</b></a>
            <div class="banner text-white">
                <div class="logo">
                    <img src="logo">  
                </div>
                <div class="logo-name">
                    <h4>Title Here</h4>  
                </div>        
            </div>
            <div class="Profile text-center p-3">
                <div class="image">
                    <img src="image/m.jpg" height="75" width="75" class="rounded-circle">
                </div>
                <div class="p-info">
                    <a href="" class="nav-link text-white mt-2">
                    Eden Ramoneda
                    </a>
                </div>
            </div>
            <ul class="li-navs list-unstyled">
                <li class="nav-item">
                    <a class="nav-link text-white" href="">
                    <i class="fa fa-tachometer-alt" aria-hidden="true"></i> Navigation1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="">
                    <i class="fa fa-tachometer-alt" aria-hidden="true"></i> Navigation2</a>
                </li>
                <li class="nav-item"> 
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="nav-link text-white dropdown-toggle">
                    <i class="fa fa-tachometer-alt" aria-hidden="true"></i> Navigation w/ Dropdown</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">&ensp;Page 1</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">&ensp;Page 2</a>
                        </li>
                    </ul>
                </li>
            </ul>
    </div>

    <div class="toggle-btn" onclick="openNav()">
            <span></span>
            <span></span>
            <span></span>
    </div>
    
    <nav class="navbar justify-content-end ess-navigation">
        <li class="nav-item text-white dropdown" title="Notifications">
            <i class="fa fa-bell" data-toggle="dropdown" id="notifDrop" aria-haspopup="true" aria-expanded="false"></i><sup> <span class="badge badge-danger" id="number_notifs">0</span></sup>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notifDrop" style="width: 600px">
                <div class="card dropdown-item">
                    <div class="card-header">
                        <b>Notifications</b>
                    </div>
                </div>
            </div>
        </li>&ensp;&ensp;


        <li class="nav-item text-white dropdown" title="Messages">
            <div data-toggle="dropdown">
                <i class="fa fa-envelope"></i>
                <sup><span class="badge badge-danger">
                    1
                </span></sup>
            </div>
             <div class="dropdown-menu dropdown-menu-right" style="width:400px;overflow-y:auto;height:50vh;">
                    <div class="card">
                        <div class="card-header">
                            <b>Messages</b>
                            <span>
                                <i class="fa fa-pencil-alt" title="compose message" style="float:right" data-toggle="modal" data-target="#ComposeMessageModal"></i>
                            </span>
                        </div>
                        <div class="card-body p-0">
                            <ul class="list-group">
                            </ul>                    
                        </div>
                    </div>
            </div>
        </li>&ensp;&ensp;
    </nav>
    <div id="overlay" style="width: 100%; opacity: 0.9;"></div>