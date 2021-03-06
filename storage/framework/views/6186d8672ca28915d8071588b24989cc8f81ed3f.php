<?php $__env->startSection('title' ,'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
   <?php echo $__env->make('admin-layouts.header-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
      <?php echo $__env->make('admin-layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-6">
                            <h3>
                                FX Exchange</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Dashboard</li>
                            </ol>
                        </div>
                        <div class="col-6">
                            <!-- Bookmark Start-->
                            <div class="bookmark pull-right">
                                <ul>
                                    <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                                    <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                                    <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                                    <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                                        <form class="form-inline search-form" action="#" method="get">
                                            <div class="form-group form-control-search">
                                                <div class="Typeahead Typeahead--twitterUsers">
                                                    <div class="u-posRelative">
                                                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search.." name="q" title="" autofocus>
                                                        <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
                                                    </div>
                                                    <div class="Typeahead-menu"></div>
                                                    <script id="result-template" type="text/x-handlebars-template">
                                                        <div class="ProfileCard u-cf">
                                                            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                                                            <div class="ProfileCard-details">
                                                                <div class="ProfileCard-realName">nnnnnn</div>
                                                            </div>
                                                        </div>
                                                    </script>
                                                    <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <!-- Bookmark Ends-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row size-column">
                    <div class="col-xl-7 box-col-12 xl-100">
                        <div class="row dash-chart">
                            <div class="col-xl-6 box-col-6 col-md-6">
                                <div class="card o-hidden">
                                    <div class="card-header card-no-border">
                                        <div class="card-header-right">
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <p><span class="f-w-500 font-roboto">Wallet Balance</span></p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-6 box-col-6 col-md-6">
                                <div class="card o-hidden">
                                    <div class="card-header card-no-border">

                                        <div class="media">
                                            <div class="media-body">
                                                <p><span class="f-w-500 font-roboto">Total Credits</span></p>
                                                <h4 class="f-w-500 mb-0 f-26">&#x20A6;<span>7454.25</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 box-col-6 col-lg-12 col-md-6">
                                <div class="card o-hidden">
                                    <div class="card-body">
                                        <div class="ecommerce-widgets media">
                                            <div class="media-body">

                                                <?php if(auth()->user()->role_id == 2): ?>
                                                    <p class="f-w-500 font-roboto">Total Debits</p>
                                                <h4 class="f-w-500 mb-0 f-26">&#x20A6;<span><?php echo e($totalDebit); ?></span></h4>
                                                <?php endif; ?>
                                            </div>
                                            <div class="ecommerce-box light-bg-primary"><i class="fa fa-heart" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 box-col-6 col-lg-12 col-md-6">
                                <div class="card o-hidden">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="f-w-500 font-roboto">Wallet Status</p>
                                                <div class="progress-box">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 box-col-12 xl-50">
                        <div class="card o-hidden dash-chart">
                            <div class="card-header card-no-border">
                                <div class="card-header-right">
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <p><span class="f-w-500 font-roboto">Wallet Account Number</span></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 xl-50 box-col-12">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <h5>Current Rates</h5>
                            </div>
                            <div class="card-body pt-0">
                                <div class="our-product">
                                    <div class="table-responsive">
                                        <table class="table table-striped">

                                            <tbody>
                                            <?php $__currentLoopData = $rates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($rate->currency); ?></td>
                                                <td><?php echo e($rate->rates); ?></td>
                                                <td>&#x20A6;<?php echo e($rate->naira); ?></td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-8 col-lg-8 col-sm-8 xl-50 box-col-12">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <h5>Cashback Transactions</h5>
                            </div>
                            <div class="card-body pt-0">
                                <div class="our-product">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th scope="col">Reference</th>
                                                <th scope="col">Account Holder's Email</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Channel</th>
                                                <th scope="col">Repayment Status</th>
                                                <th scope="col">Created Date</th>
                                                <th scope="col">Cash Back Rate</th>
                                                <th scope="col">Cash Back Currency</th>
                                                <?php if(auth()->user()->role_id != 2): ?>
                                                <th scope="col">Action</th>
                                                <?php endif; ?>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $exchangeRequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exRequest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>

                                                <td><?php echo e($exRequest->ref); ?></td>
                                                <td><?php echo e($exRequest->user['email']); ?></td>
                                                <td><?php echo e($exRequest->status); ?></td>
                                                <td>&#x20A6; <?php echo e(number_format($exRequest->amount)); ?></td>
                                                <td><?php echo e($exRequest->channel); ?></td>
                                                <td><?php echo e($exRequest->payment_status); ?></td>
                                                <td><?php echo e($exRequest->created_at->format('D-M-Y')); ?></td>
                                                <td><?php echo e($exRequest->conversion_rate); ?></td>
                                                <td><?php echo e($exRequest->currency_conversion); ?></td>
                                                <?php if(auth()->user()->role_id != 2): ?>
                                                <td>
                                                    <button class="btn btn-success">
                                                        Pay Recipient
                                                    </button>
                                                </td>
                                                <?php endif; ?>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
{
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
      <?php echo $__env->make('admin-layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<?php echo jquery(); ?>
<?php echo toastr_js(); ?>
<?php echo app('toastr')->render(); ?>
<!-- latest jquery-->
<script src="<?php echo e(asset('/assets/js/jquery-3.5.1.min.js')); ?>"></script>
<!-- Bootstrap js-->
<script src="<?php echo e(asset('/assets/js/bootstrap/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/bootstrap/bootstrap.js')); ?>"></script>
<!-- feather icon js-->
<script src="<?php echo e(asset('/assets/js/icons/feather-icon/feather.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/icons/feather-icon/feather-icon.js')); ?>"></script>
<!-- Sidebar jquery-->
<script src="<?php echo e(asset('/assets/js/sidebar-menu.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/config.js')); ?>"></script>
<!-- Plugins JS start-->
<script src="<?php echo e(asset('/assets/js/chart/chartist/chartist.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/chart/chartist/chartist-plugin-tooltip.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/chart/apex-chart/apex-chart.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/chart/apex-chart/stock-prices.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/prism/prism.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/clipboard/clipboard.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/counter/jquery.waypoints.min.js"')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/counter/jquery.counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/counter/counter-custom.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/custom-card/custom-card.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/dashboard/dashboard_2.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/tooltip-init.js')); ?>"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="<?php echo e(asset('/assets/js/script.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/theme-customizer/customizer.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/first-ally-test/resources/views/Dashboard/dashboard.blade.php ENDPATH**/ ?>