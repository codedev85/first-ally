<div class="page-main-header">
    <div class="main-header-right row m-0">
        <form class="form-inline search-full" action="#" method="get">
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                        <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                    </div>
                    <div class="Typeahead-menu"></div>
                </div>
            </div>
        </form>
        <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"> </i></div>
        </div>
        <div class="left-menu-header col horizontal-wrapper pl-0">
            <ul class="horizontal-menu">
                <li class="mega-menu"><a class="nav-link" href="#"><i data-feather="layers"></i><span>FX Exchange</span></a>

                </li>
            </ul>
        </div>
        <div class="nav-right col-8 pull-right right-menu">
            <ul class="nav-menus">


                <li>
                    <div class="mode"><i class="fa fa-moon-o"></i></div>
                </li>
                <li class="profile-nav onhover-dropdown p-0">
                    <div class="media profile-media">
                        <div class="media-body"><span></span>
                            <p class="mb-0 font-roboto"><?php echo e(auth()->user()->name); ?><i class="middle fa fa-angle-down"></i></p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form
                    </ul>
                </li>
            </ul>
        </div>
        <script id="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
                <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                <div class="ProfileCard-details">
                    <div class="ProfileCard-realName"></div>
                </div>
            </div>
        </script>
        <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
    </div>
</div>
<?php /**PATH /var/www/html/first-ally-test/resources/views/admin-layouts/header-nav.blade.php ENDPATH**/ ?>