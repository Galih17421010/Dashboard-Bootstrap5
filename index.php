<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Codescandy" />

    <!-- Google tag (gtag.js) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script> -->
    <!-- <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-M8S4MT3EYG');
    </script> -->

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.ico" />

    <!-- Color modes -->
    <script src="./assets/js/color-modes.js"></script>

    <!-- Libs CSS -->
    <link href="./assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="./assets/libs/MaterialDesign/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="./assets/css/simplebar.min.css" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="./assets/css/theme.min.css">

    <title>Project | Admin Dashboard</title>
</head>

<body>
    <main id="main-wrapper" class="main-wrapper">
        <div class="header">
            <!-- navbar -->
            <div class="navbar-custom navbar navbar-expand-lg">
                <div class="container-fluid px-0">
                    <a class="navbar-brand d-block d-md-none" href="index.php">
                        <img src="./assets/images/logo-2.svg" alt="Image" />
                    </a>

                    <a id="nav-toggle" href="#!" class="ms-auto ms-md-0 me-0 me-lg-3">
                        <i class="icon-xs" data-feather="menu"></i>
                    </a>

                    <div class="d-none d-md-none d-lg-block">
                        <!-- Form -->
                        <form action="#">
                            <div class="input-group">
                                <input class="form-control rounded-3 bg-transparent ps-9" type="search" value=""
                                    id="searchInput" placeholder="Search" />
                                <span class="">
                                    <button class="btn position-absolute start-0" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-search text-dark">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <!--Navbar nav -->
                    <ul
                        class="navbar-nav navbar-right-wrap ms-lg-auto d-flex nav-top-wrap align-items-center ms-4 ms-lg-0">
                        <li>
                            <div class="dropdown">
                                <button class="btn btn-ghost btn-icon rounded-circle" type="button"
                                    aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                                    <i class="bi theme-icon-active"></i>
                                    <span class="visually-hidden bs-theme-text">Toggle theme</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center"
                                            data-bs-theme-value="light" aria-pressed="false">
                                            <i class="bi theme-icon bi-sun-fill"></i>
                                            <span class="ms-2">Light</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center"
                                            data-bs-theme-value="dark" aria-pressed="false">
                                            <i class="bi theme-icon bi-moon-stars-fill"></i>
                                            <span class="ms-2">Dark</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center active"
                                            data-bs-theme-value="auto" aria-pressed="true">
                                            <i class="bi theme-icon bi-circle-half"></i>
                                            <span class="ms-2">Auto</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="dropdown stopevent ms-2">
                            <a class="btn btn-ghost btn-icon rounded-circle" href="#!" role="button"
                                id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="icon-xs" data-feather="bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
                                aria-labelledby="dropdownNotification">
                                <div>
                                    <div
                                        class="border-bottom px-3 pt-2 pb-3 d-flex justify-content-between align-items-center">
                                        <p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
                                        <a href="#!" class="text-muted">
                                            <span>
                                                <i class="me-1 icon-xs" data-feather="settings"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div data-simplebar style="height: 250px">
                                        <!-- List group -->
                                        <ul class="list-group list-group-flush notification-list-scroll">
                                            Nothing
                                        </ul>
                                    </div>
                                    <div class="border-top px-3 py-2 text-center">
                                        <a href="#!" class="text-inherit">View all Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- List -->
                        <li class="dropdown ms-2">
                            <a class="rounded-circle" href="#!" role="button" id="dropdownUser"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="assets\images\user-default.png" class="rounded-circle" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                <div class="px-4 pb-0 pt-2">
                                    <div class="lh-1">
                                        <h5 class="mb-1">John E. Grainger</h5>
                                        <a href="#!" class="text-inherit fs-6">View my profile</a>
                                    </div>
                                    <div class="dropdown-divider mt-3 mb-2"></div>
                                </div>

                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                            <i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"></i>
                                            Edit Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#!">
                                            <i class="me-2 icon-xxs dropdown-item-icon" data-feather="activity"></i>
                                            Activity Log
                                        </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                            <i class="me-2 icon-xxs dropdown-item-icon" data-feather="settings"></i>
                                            Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./index.html">
                                            <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>
                                            Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- navbar vertical -->
        <div class="app-menu"><!-- Sidebar -->

            <div class="navbar-vertical navbar nav-dashboard">
                <div class="h-100" data-simplebar>
                    <!-- Brand logo -->
                    <a class="navbar-brand" href="index.php">
                        <img src="./assets/images/logo-2.svg" alt="dashboard" />
                    </a>
                    <!-- Navbar nav -->
                    <ul class="navbar-nav flex-column" id="sideNavbar">
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navDashboard" aria-expanded="false" aria-controls="navDashboard">
                                <i data-feather="home" class="nav-icon me-2 icon-xxs"></i>
                                Dashboard
                            </a>

                            <div id="navDashboard" class="collapse  show " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/dashboard-analytics.html">Analytics</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  active " href="./index.html">Project</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link has-arrow "
                                            href="./pages/dashboard-ecommerce.html">Ecommerce</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/dashboard-crm.html">CRM</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/dashboard-finance.html">Finance</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/dashboard-blog.html">Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">Apps</div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="./pages/calendar.html">Calendar</a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="./pages/chat-app.html">
                                <i data-feather="message-square" class="nav-icon me-2 icon-xxs"></i>
                                Chat
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navecommerce" aria-expanded="false" aria-controls="navecommerce">
                                <i data-feather="shopping-cart" class="nav-icon me-2 icon-xxs"></i>
                                Ecommerce
                            </a>

                            <div id="navecommerce" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow "
                                            href="./pages/ecommerce-products.html">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow "
                                            href="./pages/ecommerce-products-details.html">Product Detail</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/ecommerce-product-edit.html">Add
                                            Product</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow "
                                            href="./pages/ecommerce-order-list.html">Orders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/ecommerce-order-detail.html">Orders
                                            Detail</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/ecommerce-cart.html">Shopping
                                            cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow "
                                            href="./pages/ecommerce-checkout.html">Checkout</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow "
                                            href="./pages/ecommerce-customer.html">Customer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/ecommerce-seller.html">Seller</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navEmail" aria-expanded="false" aria-controls="navEmail">
                                <i data-feather="mail" class="nav-icon me-2 icon-xxs"></i>
                                Email
                            </a>

                            <div id="navEmail" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/mail.html">Inbox</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/mail-details.html">Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/mail-draft.html">Draft</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navKanban" aria-expanded="false" aria-controls="navKanban">
                                <i data-feather="layout" class="nav-icon me-2 icon-xxs"></i>
                                Kanban
                            </a>

                            <div id="navKanban" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/task-kanban-grid.html">Grid</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/task-kanban-list.html">List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Nav item -->
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navProject" aria-expanded="false" aria-controls="navProject">
                                <i class="nav-icon me-2 icon-xxs" data-feather="file"></i>
                                Project
                            </a>
                            <div id="navProject" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/project-grid.html">Grid</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/project-list.html">List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse"
                                            data-bs-target="#navprojectSingle" aria-expanded="false"
                                            aria-controls="navprojectSingle">
                                            Single
                                        </a>
                                        <div id="navprojectSingle" class="collapse " data-bs-parent="#navProject">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                        href="./pages/project-overview.html">Overview</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="./pages/project-task.html">Task</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="./pages/project-budget.html">Budget</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link " href="./pages/project-files.html">Files</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="./pages/project-team.html">Team</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/add-project.html">Create Project</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="./pages/apps-file-manager.html">
                                <i data-feather="folder-plus" class="nav-icon me-2 icon-xxs"></i>
                                File Manager
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navCRM" aria-expanded="false" aria-controls="navCRM">
                                <i data-feather="pie-chart" class="nav-icon me-2 icon-xxs"></i>

                                CRM
                            </a>

                            <div id="navCRM" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/crm-contacts.html">Contacts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/crm-company.html">Company</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/deals.html">
                                            Deals
                                            <span class="badge text-bg-primary ms-2">New</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/deals-single.html">
                                            Deals Single
                                            <span class="badge text-bg-primary ms-2">New</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navinvoice" aria-expanded="false" aria-controls="navinvoice">
                                <i data-feather="clipboard" class="nav-icon me-2 icon-xxs"></i>
                                Invoice
                            </a>

                            <div id="navinvoice" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/invoice-list.html">List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/invoice-detail.html">Detail</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/invoice-generator.html">Invoice
                                            Generator</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navprofilePages" aria-expanded="false" aria-controls="navprofilePages">
                                <i data-feather="user" class="nav-icon me-2 icon-xxs"></i>
                                Profile
                            </a>
                            <div id="navprofilePages" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/profile-overview.html">Overview</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/profile-project.html">Project</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/profile-files.html">Files</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/profile-team.html">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/profile-followers.html">Followers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/profile-activity.html">Activity</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/profile-settings.html">Settings</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navblog" aria-expanded="false" aria-controls="navblog">
                                <i data-feather="edit" class="nav-icon me-2 icon-xxs"></i>
                                Blog
                            </a>

                            <div id="navblog" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/blog-author.html">Author</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/blog-author-detail.html">Detail</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="./pages/create-blog-post.html">Create
                                            Post</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">Layouts & Pages</div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navlayoutPage" aria-expanded="false" aria-controls="navlayoutPage">
                                <i class="nav-icon me-2 icon-xxs" data-feather="file"></i>
                                Pages
                            </a>
                            <div id="navlayoutPage" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/starter.html">Starter</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/pricing.html">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/maintenance.html">Maintenance</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/404-error.html">404 Error</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navAuthentication" aria-expanded="false"
                                aria-controls="navAuthentication">
                                <i data-feather="lock" class="nav-icon me-2 icon-xxs"></i>
                                Authentication
                            </a>
                            <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/sign-in.html">Sign In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/sign-up.html">Sign Up</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/forget-password.html">Forget Password</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navLayouts" aria-expanded="false" aria-controls="navLayouts">
                                <i data-feather="sidebar" class="nav-icon me-2 icon-xxs"></i>
                                Layouts
                            </a>
                            <div id="navLayouts" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link " href="./index.html">Default</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link " href="./horizontal/index.html">Horizontal</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">UI Components</div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navComponents" aria-expanded="false" aria-controls="navComponents">
                                <i data-feather="package" class="nav-icon me-2 icon-xxs"></i>
                                Components
                            </a>
                            <div id="navComponents" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="./pages/components/accordions.html" class="nav-link ">Accordions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="./pages/components/alerts.html">Alert</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="./pages/components/badge.html" class="nav-link ">Badge</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="./pages/components/breadcrumb.html" class="nav-link ">Breadcrumb</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/buttons.html" class="nav-link ">Buttons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/button-group.html" class="nav-link ">Button
                                            group</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/card.html" class="nav-link ">Card</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/carousel.html" class="nav-link ">Carousel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/close-button.html" class="nav-link ">Close
                                            Button</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/collapse.html" class="nav-link ">Collapse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/dropdowns.html" class="nav-link ">Dropdowns</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/forms.html" class="nav-link ">Forms</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="./pages/components/list-group.html" class="nav-link ">List group</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="./pages/components/modal.html" class="nav-link ">Modal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/navs-tabs.html" class="nav-link ">Navs and tabs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/navbar.html" class="nav-link ">Navbar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/offcanvas.html" class="nav-link ">Offcanvas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/pagination.html" class="nav-link ">Pagination</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/placeholders.html"
                                            class="nav-link ">Placeholders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/popovers.html" class="nav-link ">Popovers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/progress.html" class="nav-link ">Progress</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/scrollspy.html" class="nav-link ">Scrollspy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/spinners.html" class="nav-link ">Spinners</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/tables.html" class="nav-link ">Tables</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/toasts.html" class="nav-link ">Toasts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./pages/components/tooltips.html" class="nav-link ">Tooltips</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navMenuLevel" aria-expanded="false" aria-controls="navMenuLevel">
                                <i data-feather="corner-left-down" class="nav-icon me-2 icon-xxs"></i>
                                Menu Level
                            </a>
                            <div id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="#!" data-bs-toggle="collapse"
                                            data-bs-target="#navMenuLevelSecond" aria-expanded="false"
                                            aria-controls="navMenuLevelSecond">
                                            Two Level
                                        </a>
                                        <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#!">NavItem 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#!">NavItem 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                                            data-bs-target="#navMenuLevelThree" aria-expanded="false"
                                            aria-controls="navMenuLevelThree">
                                            Three Level
                                        </a>
                                        <div id="navMenuLevelThree" class="collapse " data-bs-parent="#navMenuLevel">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse"
                                                        data-bs-target="#navMenuLevelThreeOne" aria-expanded="false"
                                                        aria-controls="navMenuLevelThreeOne">
                                                        NavItem 1
                                                    </a>
                                                    <div id="navMenuLevelThreeOne" class="collapse collapse "
                                                        data-bs-parent="#navMenuLevelThree">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link " href="#!">NavChild Item 1</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#!">Nav Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item">
                            <div class="navbar-heading">Documentation</div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navDocs" aria-expanded="false" aria-controls="navDocs">
                                <i data-feather="package" class="nav-icon me-2 icon-xxs"></i>
                                Docs
                            </a>
                            <div id="navDocs" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a href="./docs/index.html" class="nav-link ">Introduction</a>
                                    </li>
                                    <li class="nav-item"><a href="./docs/environment-setup.html"
                                            class="nav-link ">Environment setup</a></li>
                                    <li class="nav-item"><a href="./docs/working-with-gulp.html"
                                            class="nav-link ">Working with Gulp</a></li>
                                    <li class="nav-item"><a href="./docs/compiled-files.html" class="nav-link ">Compiled
                                            Files</a></li>
                                    <li class="nav-item"><a href="./docs/file-structure.html" class="nav-link ">File
                                            Structure</a></li>
                                    <li class="nav-item"><a href="./docs/resources-assets.html"
                                            class="nav-link ">Resources & assets</a></li>
                                    <li class="nav-item"><a href="./docs/changelog.html" class="nav-link ">Changelog</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

        <!-- Page content -->
        <div id="app-content">
            <!-- Container fluid -->

            <div class="app-content-area">
                <div class="bg-primary pt-10 pb-21 mt-n6 mx-n4"></div>
                <div class="container-fluid mt-n22">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <!-- Page header -->
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="mb-2 mb-lg-0">
                                    <h3 class="mb-0 text-white">Projects</h3>
                                </div>
                                <div>
                                    <a href="#!" class="btn btn-white">Create New Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                            <!-- card -->
                            <div class="card h-100 card-lift">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- heading -->
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h4 class="mb-0">Projects</h4>
                                        </div>
                                        <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                            <i data-feather="briefcase" height="20" width="20"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div class="lh-1">
                                        <h1 class="mb-1 fw-bold">18</h1>
                                        <p class="mb-0">
                                            <span class="text-dark me-2">2</span>
                                            Completed
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                            <!-- card -->
                            <div class="card h-100 card-lift">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- heading -->
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h4 class="mb-0">Active Task</h4>
                                        </div>
                                        <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                            <i data-feather="list" height="20" width="20"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div class="lh-1">
                                        <h1 class="mb-1 fw-bold">132</h1>
                                        <p class="mb-0">
                                            <span class="text-dark me-2">28</span>
                                            Completed
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                            <!-- card -->
                            <div class="card h-100 card-lift">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- heading -->
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h4 class="mb-0">Teams</h4>
                                        </div>
                                        <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                            <i data-feather="users" height="20" width="20"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div class="lh-1">
                                        <h1 class="mb-1 fw-bold">12</h1>
                                        <p class="mb-0">
                                            <span class="text-dark me-2">1</span>
                                            Completed
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                            <!-- card -->
                            <div class="card h-100 card-lift">
                                <!-- card body -->
                                <div class="card-body">
                                    <!-- heading -->
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h4 class="mb-0">Productivity</h4>
                                        </div>
                                        <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                            <i data-feather="target" height="20" width="20"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div class="lh-1">
                                        <h1 class="mb-1 fw-bold">76%</h1>
                                        <p class="mb-0">
                                            <span class="text-success me-2">5%</span>
                                            Completed
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- card  -->
                        <div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-5 mb-xl-0">
                            <div class="card h-100">
                                <!-- card header  -->
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="mb-0">My Task</h4>
                                    <div class="dropdown">
                                        <a class="btn btn-outline-white btn-sm dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Task</a>

                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- table  -->
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table text-nowrap mb-0 table-centered table-hover">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Deadline</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckOne" />
                                                            <label class="form-check-label" for="flexCheckOne">Design a
                                                                FreshCart Home page</label>
                                                        </div>
                                                    </td>
                                                    <td>Today</td>
                                                    <td>
                                                        <span class="badge badge-success-soft">Approved</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckTwo" />
                                                            <label class="form-check-label" for="flexCheckTwo">Dash UI
                                                                Dark Version Design</label>
                                                        </div>
                                                    </td>
                                                    <td>Yesterday</td>
                                                    <td>
                                                        <span class="badge badge-danger-soft">Pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckThree" />
                                                            <label class="form-check-label" for="flexCheckThree">Dash UI
                                                                landing page design</label>
                                                        </div>
                                                    </td>
                                                    <td>16 Sept, 2023</td>
                                                    <td>
                                                        <span class="badge badge-warning-soft">In Progress</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckFour" />
                                                            <label class="form-check-label" for="flexCheckFour">Next.js
                                                                Dash UI version</label>
                                                        </div>
                                                    </td>
                                                    <td>23 Sept, 2023</td>
                                                    <td>
                                                        <span class="badge badge-success-soft">Approved</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckFive" />
                                                            <label class="form-check-label" for="flexCheckFive">Develop
                                                                a Dash UI Laravel</label>
                                                        </div>
                                                    </td>
                                                    <td>20 Sept, 2023</td>
                                                    <td>
                                                        <span class="badge badge-danger-soft">Pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckSix" />
                                                            <label class="form-check-label" for="flexCheckSix">Coach
                                                                home page design</label>
                                                        </div>
                                                    </td>
                                                    <td>12 Sept, 2023</td>
                                                    <td>
                                                        <span class="badge badge-success-soft">Approved</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckSeven" />
                                                            <label class="form-check-label" for="flexCheckSeven">Develop
                                                                a Dash UI Laravel</label>
                                                        </div>
                                                    </td>
                                                    <td>11 Sept, 2023</td>
                                                    <td>
                                                        <span class="badge badge-danger-soft">Pending</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card  -->
                        <div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-5 mb-xl-0">
                            <div class="card h-100">
                                <!-- card header  -->
                                <div class="card-header">
                                    <h4 class="mb-0">Teams</h4>
                                </div>
                                <!-- table  -->
                                <div class="card-body">
                                    <div class="table-responsive table-card" data-simplebar=""
                                        style="max-height: 380px">
                                        <table class="table text-nowrap mb-0 table-centered table-hover">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Role</th>
                                                    <th>Last Activity</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <a href="#!"><img src="assets\images\user-default.png"
                                                                        alt="Image"
                                                                        class="avatar-md avatar rounded-circle" /></a>
                                                            </div>
                                                            <div class="ms-3 lh-1">
                                                                <h5 class="mb-1"><a href="#!" class="text-inherit">Anita
                                                                        Parmar</a></h5>
                                                                <p class="mb-0">anita@example.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Front End Developer</td>
                                                    <td>3 May, 2023</td>
                                                    <td>
                                                        <div class="dropdown dropstart">
                                                            <a class="btn btn-icon btn-ghost btn-sm rounded-circle"
                                                                href="#!" role="button" id="dropdownTeamOne"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="icon-xs" data-feather="more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownTeamOne">
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Action</a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Another action</a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Something else here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <a href="#!"><img src="assets/images/user-default.png"
                                                                        alt="Image"
                                                                        class="avatar-md avatar rounded-circle" /></a>
                                                            </div>
                                                            <div class="ms-3 lh-1">
                                                                <h5 class="mb-1"><a href="#!" class="text-inherit">Jitu
                                                                        Chauhan</a></h5>
                                                                <p class="mb-0">jituchauhan@example.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Project Director</td>
                                                    <td>Today</td>
                                                    <td>
                                                        <div class="dropdown dropstart">
                                                            <a class="btn btn-icon btn-ghost btn-sm rounded-circle"
                                                                href="#!" role="button" id="dropdownTeamTwo"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="icon-xs" data-feather="more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownTeamTwo">
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Action</a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Another action</a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Something else here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <a href="#!"><img src="assets/images/user-default.png"
                                                                        alt="Image"
                                                                        class="avatar-md avatar rounded-circle" /></a>
                                                            </div>
                                                            <div class="ms-3 lh-1">
                                                                <h5 class="mb-1"><a href="#!"
                                                                        class="text-inherit">Sandeep Chauhan</a></h5>
                                                                <p class="mb-0">sandeepchauhan@example.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Full- Stack Developer</td>
                                                    <td>Yesterday</td>
                                                    <td>
                                                        <div class="dropdown dropstart">
                                                            <a class="btn btn-icon btn-ghost btn-sm rounded-circle"
                                                                href="#!" role="button" id="dropdownTeamThree"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="icon-xs" data-feather="more-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownTeamThree">
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Action</a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Another action</a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Something else here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <a href="#!"><img src="assets/images/user-default.png"
                                                                        alt="Image"
                                                                        class="avatar-md avatar rounded-circle" /></a>
                                                            </div>

                                                            <div class="ms-3 lh-1">
                                                                <h5 class="mb-1"><a href="#!"
                                                                        class="text-inherit">Amanda Darnell</a></h5>
                                                                <p class="mb-0">amandadarnell@example.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Digital Marketer</td>
                                                    <td>3 May, 2023</td>
                                                    <td>
                                                        <div class="dropdown dropstart">
                                                            <a class="btn btn-icon btn-ghost btn-sm rounded-circle"
                                                                href="#!" role="button" id="dropdownTeamFour"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="icon-xs" data-feather="more-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownTeamFour">
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Action</a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Another action</a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Something else here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <a href="#!"><img src="assets/images/user-default.png"
                                                                        alt="Image"
                                                                        class="avatar-md avatar rounded-circle" /></a>
                                                            </div>

                                                            <div class="ms-3 lh-1">
                                                                <h5 class="mb-1"><a href="#!"
                                                                        class="text-inherit">Patricia Murrill</a></h5>
                                                                <p class="mb-0">patriciamurrill@example.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Account Manager</td>
                                                    <td>3 May, 2023</td>
                                                    <td>
                                                        <div class="dropdown dropstart">
                                                            <a class="btn btn-icon btn-ghost btn-sm rounded-circle"
                                                                href="#!" role="button" id="dropdownTeamFive"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="icon-xs" data-feather="more-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownTeamFive">
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Action</a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Another action</a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Something else here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <a href="#!"><img src="assets/images/user-default.png"
                                                                        alt="Image"
                                                                        class="avatar-md avatar rounded-circle" /></a>
                                                            </div>
                                                            <div class="ms-3 lh-1">
                                                                <h5 class="mb-1"><a href="#!"
                                                                        class="text-inherit">Darshini Nair</a></h5>
                                                                <p class="mb-0">darshininair@example.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Front End Developer</td>
                                                    <td>3 May, 2023</td>
                                                    <td>
                                                        <div class="dropdown dropstart">
                                                            <a class="btn btn-icon btn-ghost btn-sm rounded-circle"
                                                                href="#!" role="button" id="dropdownTeamSix"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="icon-xs" data-feather="more-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownTeamSix">
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Action</a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Another action</a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Something else here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <a href="#!"><img src="assets/images/user-default.png"
                                                                        alt="Image"
                                                                        class="avatar-md avatar rounded-circle" /></a>
                                                            </div>

                                                            <div class="ms-3 lh-1">
                                                                <h5 class="mb-1"><a href="#!"
                                                                        class="text-inherit">Patricia Murrill</a></h5>
                                                                <p class="mb-0">patriciamurrill@example.com</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Account Manager</td>
                                                    <td>3 May, 2023</td>
                                                    <td>
                                                        <div class="dropdown dropstart">
                                                            <a class="btn btn-icon btn-ghost btn-sm rounded-circle"
                                                                href="#!" role="button" id="dropdownTeamFive"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="icon-xs" data-feather="more-vertical"></i>
                                                            </a>

                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownTeamFive">
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Action</a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Another action</a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Something else here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Scripts -->

    <!-- Libs JS -->

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/feather.min.js"></script>
    <script src="./assets/js/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="./assets/js/theme.min.js"></script>

</body>

</html>