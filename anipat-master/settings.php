<?php
session_start();

if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Settings</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <div class="header-area ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="short_contact_list">
                                
                            </div>
                        </div>
                       
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="homepage.html">
                                    <img src="img/logo1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a  href="homepage.html">home</a></li>
                                        <li><a href="#">Posts <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="myposts.html">My posts</a></li>
                                                <li><a href="createpost.html">Create a post</a></li>
                                                <li><a href="requests.html">Requests</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li><a href="settings.html">Settings</a></li>


                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

   <div class="bradcam_area breadcam_bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="bradcam_text text-center">
                  <h3>Account Settings</h3>
               </div>
            </div>
         </div>
      </div>
   </div>

   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="comment-form">
                  <form class="form-contact comment_form" action="#" method="POST">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <label for="username">Username:</label>
                              <input class="form-control" type="text" name="username" id="username" placeholder="Your username" required>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <label for="bio">Bio:</label>
                              <textarea class="form-control w-100" name="bio" id="bio" cols="30" rows="9" placeholder="Write a short bio about yourself" required></textarea>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <label for="currentPassword">Current Password:</label>
                              <input class="form-control" type="password" name="currentPassword" id="currentPassword" placeholder="Current password" required>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <label for="newPassword">New Password:</label>
                              <input class="form-control" type="password" name="newPassword" id="newPassword" placeholder="New password" required>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <label for="confirmPassword">Confirm New Password:</label>
                              <input class="form-control" type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm new password" required>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <label for="emailNotifications">Email Notifications:</label>
                              <select class="form-control" id="emailNotifications" name="emailNotifications" required>
                                 <option value="on">On</option>
                                 <option value="off">Off</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Save Changes</button>
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn" name="logout">Logout</button>

                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>

   <footer class="footer">
      <!-- Footer content goes here -->
   </footer>

   <script src="js/vendor/jquery-1.12.4.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/main.js"></script>
</body>

</html>
