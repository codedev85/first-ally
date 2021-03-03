<header class="main-nav">
    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"> </i></div>
    </div>
    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a></div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
                        <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                    </li>
                    <?php if(auth()->user()->role_id == 1): ?>
                    <li class="sidebar-title">
                        <div>
                            <h6 >Admin</h6>
                        </div>
                    </li>
                    <li ><a class="nav-link menu-title" href="<?php echo e(url('/dashboard')); ?>"><i data-feather="home"></i><span>Dashboard</span>

                    <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="layout"></i><span >Currency Rates</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="<?php echo e(url('/list/rates')); ?>">List Rates</a></li>
                            <li><a href="<?php echo e(url('add/currency-rate')); ?>">Add Rates</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="box"></i><span>Transactions</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="projects.html">All Transaction</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="mail"></i><span>Transfer To Recipient</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="<?php echo e(url('/exchange/request')); ?>">Fx Exchange Request</a></li>
                        </ul>
                    </li>
                    <?php else: ?>
                    <li class="sidebar-title">
                        <div>
                            <h6>User</h6>
                        </div>
                    </li>
                    <li ><a class="nav-link menu-title" href="<?php echo e(url('/dashboard')); ?>"><i data-feather="home"></i><span>Dashboard</span>
                    <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="shopping-bag"></i><span>Bank Details</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="<?php echo e(url('/create/bank')); ?>">Add Bank Details</a></li>
                            <li><a href="<?php echo e(url('my-bank')); ?>">List</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="#"><i data-feather="mail"></i><span>Transaction</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="<?php echo e(url('request/exchange')); ?>">Send Exchange Request</a></li>
                            <li><a href="<?php echo e(url('/transaction/history')); ?>">Transaction History</a></li>
                        </ul>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
<?php /**PATH /var/www/html/first-ally-test/resources/views/admin-layouts/sidebar.blade.php ENDPATH**/ ?>