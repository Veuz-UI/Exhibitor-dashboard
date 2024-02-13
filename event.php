<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Exhibitor Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Event Management" name="description" />
    <meta content="Event Management" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.svg">
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/datepicker/semantic.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="assets/libs/datepicker/datepicker.min.css" rel="stylesheet"> -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <link href="assets/libs/multiselect/choices.min.css" rel="stylesheet">
    <link href="assets/libs/select2/css/chosen.min.css" rel="stylesheet">
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet">
    <link href="assets/css/form.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/libs/select/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body class="ovrflw body-gray">
     <!-- Multi select box -->
 <style>
    .choices__inner {
        display: inline-block;
        vertical-align: top;
        width: 100%;
        background-color: #fff;
        padding: 0.5px 7.5px 0px;
        border: 1px solid #ebebeb;
        border-radius: 2.5px;
        font-size: 14px;
        min-height: 19px;
    }
    
    .choices {
        position: relative;
        margin-bottom: 0px;
        z-index: 10000;
    }
    
    .choices__input {
        display: inline-block;
        vertical-align: baseline;
        background-color: #fff;
        font-size: 14px;
        margin-bottom: 5px;
        border: 0;
        border-radius: 0;
        width: auto !important;
        padding: 6px 0px 2px 5px;
    }
    
    .choices__list--multiple .choices__item {
        display: inline-block;
        vertical-align: middle;
        border-radius: 39px;
        padding: 3px 9px;
        font-size: 11px;
        font-weight: 500;
        margin-right: 3.75px;
        margin-bottom: 3.75px;
        background-color: #3b65ef;
        border: 1px solid #3b65ef;
        color: #fff;
        word-break: break-all;
    }
    
    .choices[data-type*=select-multiple] .choices__button,
    .choices[data-type*=text] .choices__button {
        position: relative;
        display: inline-block;
        margin: 0 -4px 0 8px;
        padding-left: 16px;
        border-left: 1px solid #6e8ef9;
        background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjEiIGhlaWdodD0iMjEiIHZpZXdCb3g9IjAgMCAyMSAyMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSIjRkZGIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0yLjU5Mi4wNDRsMTguMzY0IDE4LjM2NC0yLjU0OCAyLjU0OEwuMDQ0IDIuNTkyeiIvPjxwYXRoIGQ9Ik0wIDE4LjM2NEwxOC4zNjQgMGwyLjU0OCAyLjU0OEwyLjU0OCAyMC45MTJ6Ii8+PC9nPjwvc3ZnPg==);
        background-size: 8px;
        width: 8px;
        line-height: 1;
        opacity: .75;
        border-radius: 0;
    }
</style>
    
<?php include 'loader.php';?>

    <div id="layout-wrapper">

    <header class="top-header">
        <div class="header-div">
            <a href="index.php">
                <div class="backtohome">
                    <i class="bx bx-arrow-back back-arrow"></i>
                </div>
            </a>
            <div class="header-title">
                <h4>Event Configuration</h4>
                <ul>
                    <li><a href="index.php">Home</a> /</li>
                    <li>Event</li>
                </ul>
            </div>
        </div>
        <div class="header-right-btns">
            <?php
                include 'options-buttons.php';
            ?>
        </div>
    </header>

    <div class="main-content-div">
        <div class="setting-section">
            <div class="settings-sidebar">
                <ul class="nav nav-tabs settings-nav" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#nav1" role="tab" aria-selected="true">
                            <i class="bx bx-time-five"></i>
                            <span>Manage Timeslot</span>                          
                        </a>                      
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#nav2" role="tab" aria-selected="false"
                            tabindex="-1">
                            <i class="bx bx-user"></i>
                            <span>Manage Team Member</span>
                        </a>
                    </li>
              

                </ul>




            </div>


            <div class="settings-details">
                <div class="tab-content settings-tab">
                    <div class="tab-pane settings-tab-pane active" id="nav1" role="tabpanel">
                       <div class="timeslot-div">
                        <div class="row d-flex align-items-center justify-content-center h-100">
                            <div class="col-md-7">
                                <div class="dc-dashboardbox">
                                    <div class="dc-dashboardboxtitle">
                                        <h2>Timeslot</h2>
                                    </div>
                                    <div class="dc-dashboardboxcontent" id="style-1">
                                        <div id="accordion" >

                                            <div class="card card-border-left">
                                                <div class="card-header day-header">

                                                    <div class="row">
                                                        <div
                                                            class="col-md-12 d-flex justify-content-between align-items-center">
                                                            <a class="card-link" data-toggle="collapse"
                                                                href="#collapseOne">
                                                                <div class="ava-days">
                                                                    Day 1
                                                                </div>
                                                            </a>
                                                            <div class="toggle-switch">
                                                                <input id="toggle" class="toggle-input"
                                                                    type='checkbox' checked />
                                                                <label for="toggle" class="toggle-label" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div id="collapseOne" class="collapse show"
                                                    data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-9">
                                                                <div
                                                                    class="user_daterangpickrbox">
                                                                    <div class="">
                                                                        <h3 class="big_title2">Add new Time slot
                                                                        </h3>
                                                                    </div>
                                                                    <div class="input-daterange"
                                                                        id="date-range">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="bmd-date-group"
                                                                                    id="datetimepicker4">
                                                                                    <label
                                                                                    class="bmd-label-floating inputText">Opens
                                                                                    at</label>
                                                                                    <input type="time"
                                                                                        class="form-control input"
                                                                                        id="datetimepickereffcet-start"
                                                                                        placeholder="15-08-2022">
                                                                               

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="bmd-date-group">
                                                                                    <label
                                                                                    class="bmd-label-floating inputText">Closes
                                                                                    at</label>
                                                                                    <input type="time"
                                                                                        class="form-control input"
                                                                                        id="datetimepickereffcet-end"
                                                                                        placeholder="17-08-2022">
                                                                              

                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-4 d-flex align-items-center justify-content-end">
                                                                                <div class="addtime-slot">
                                                                                    <a href="#"
                                                                                        class="addtime-btn">Add Time
                                                                                        slot</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 d-flex flex-wrap">
                                                                <div class="timeslot-range">
                                                                    09:00 AM - 06:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    08:00 AM - 05:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    10:00 AM - 07:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    10:30 AM - 07:30 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header day-header">
                                                    <div class="row">
                                                        <div
                                                            class="col-md-12 d-flex justify-content-between align-items-center">
                                                            <a class="card-link" data-toggle="collapse"
                                                                href="#collapseTwo">
                                                                <div class="ava-days">
                                                                    Day 2
                                                                </div>
                                                            </a>
                                                            <div class="toggle-switch">
                                                                <input id="toggle" class="toggle-input"
                                                                    type='checkbox' />
                                                                <label for="toggle" class="toggle-label" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-9">
                                                                <div
                                                                    class="user_daterangpickrbox">
                                                                    <div class="">
                                                                        <h3 class="big_title2">Add new Time slot
                                                                        </h3>
                                                                    </div>
                                                                    <div class="input-daterange"
                                                                        id="date-range">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="bmd-date-group"
                                                                                    id="datetimepicker4">
                                                                                    <label
                                                                                    class="bmd-label-floating inputText">Opens
                                                                                    at</label>
                                                                                    <input type="time"
                                                                                        class="form-control input"
                                                                                        id="datetimepickereffcet-start"
                                                                                        placeholder="15-08-2022">
                                                                                   

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="bmd-date-group">
                                                                                    <label
                                                                                    class="bmd-label-floating inputText">Closes
                                                                                    at</label>
                                                                                    <input type="time"
                                                                                        class="form-control input"
                                                                                        id="datetimepickereffcet-end"
                                                                                        placeholder="17-08-2022">
                                                                                

                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-4 d-flex align-items-center justify-content-end">
                                                                                <div class="addtime-slot">
                                                                                    <a href="#"
                                                                                        class="addtime-btn">Add Time
                                                                                        slot</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 d-flex flex-wrap">
                                                                <div class="timeslot-range">
                                                                    09:00 AM - 06:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    08:00 AM - 05:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    10:00 AM - 07:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    10:30 AM - 07:30 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header day-header">
                                                    <div class="row">
                                                        <div
                                                            class="col-md-12 d-flex justify-content-between align-items-center">
                                                            <a class="card-link" data-toggle="collapse"
                                                                href="#collapseThree">
                                                                <div class="ava-days">
                                                                    Day 3
                                                                </div>
                                                            </a>
                                                            <div class="toggle-switch">
                                                                <input id="toggle" class="toggle-input"
                                                                    type='checkbox' checked />
                                                                <label for="toggle" class="toggle-label" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-9">
                                                                <div
                                                                    class="user_daterangpickrbox">
                                                                    <div class="">
                                                                        <h3 class="big_title2">Add new Time slot
                                                                        </h3>
                                                                    </div>
                                                                    <div class="input-daterange"
                                                                        id="date-range">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="bmd-date-group"
                                                                                    id="datetimepicker4">
                                                                                    <label
                                                                                    class="bmd-label-floating inputText">Opens
                                                                                    at</label>
                                                                                    <input type="time"
                                                                                        class="form-control input"
                                                                                        id="datetimepickereffcet-start"
                                                                                        placeholder="15-08-2022">
                                                                                  

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="bmd-date-group">
                                                                                    <label
                                                                                    class="bmd-label-floating inputText">Closes
                                                                                    at</label>
                                                                                    <input type="time"
                                                                                        class="form-control input"
                                                                                        id="datetimepickereffcet-end"
                                                                                        placeholder="17-08-2022">
                                                                                 

                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-4 d-flex align-items-center justify-content-end">
                                                                                <div class="addtime-slot">
                                                                                    <a href="#"
                                                                                        class="addtime-btn">Add Time
                                                                                        slot</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 d-flex flex-wrap">
                                                                <div class="timeslot-range">
                                                                    09:00 AM - 06:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    08:00 AM - 05:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    10:00 AM - 07:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    10:30 AM - 07:30 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header day-header">
                                                    <div class="row">
                                                        <div
                                                            class="col-md-12 d-flex justify-content-between align-items-center">
                                                            <a class="card-link" data-toggle="collapse"
                                                                href="#collapsefour">
                                                                <div class="ava-days">
                                                                    Day 4
                                                                </div>
                                                            </a>
                                                            <div class="toggle-switch">
                                                                <input id="toggle" class="toggle-input"
                                                                    type='checkbox' checked />
                                                                <label for="toggle" class="toggle-label" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div id="collapsefour" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-9">
                                                                <div
                                                                    class="user_daterangpickrbox">
                                                                    <div class="">
                                                                        <h3 class="big_title2">Add new Time slot
                                                                        </h3>
                                                                    </div>
                                                                    <div class="input-daterange"
                                                                        id="date-range">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="bmd-date-group"
                                                                                    id="datetimepicker4">
                                                                                    <label
                                                                                    class="bmd-label-floating inputText">Opens
                                                                                    at</label>
                                                                                    <input type="time"
                                                                                        class="form-control input"
                                                                                        id="datetimepickereffcet-start"
                                                                                        placeholder="15-08-2022">
                                                                                   

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="bmd-date-group">
                                                                                    <label
                                                                                    class="bmd-label-floating inputText">Closes
                                                                                    at</label>
                                                                                    <input type="time"
                                                                                        class="form-control input"
                                                                                        id="datetimepickereffcet-end"
                                                                                        placeholder="17-08-2022">
                                                                                  

                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-4 d-flex align-items-center justify-content-end">
                                                                                <div class="addtime-slot">
                                                                                    <a href="#"
                                                                                        class="addtime-btn">Add Time
                                                                                        slot</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 d-flex flex-wrap">
                                                                <div class="timeslot-range">
                                                                    09:00 AM - 06:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    08:00 AM - 05:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    10:00 AM - 07:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    10:30 AM - 07:30 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header day-header">
                                                    <div class="row">
                                                        <div
                                                            class="col-md-12 d-flex justify-content-between align-items-center">
                                                            <a class="card-link" data-toggle="collapse"
                                                                href="#collapsefive">
                                                                <div class="ava-days">
                                                                    Day 5
                                                                </div>
                                                            </a>
                                                            <div class="toggle-switch">
                                                                <input id="toggle" class="toggle-input"
                                                                    type='checkbox' />
                                                                <label for="toggle" class="toggle-label" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div id="collapsefive" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-9">
                                                                <div
                                                                    class="user_daterangpickrbox">
                                                                    <div class="">
                                                                        <h3 class="big_title2">Add new Time slot
                                                                        </h3>
                                                                    </div>
                                                                    <div class="input-daterange"
                                                                        id="date-range">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="bmd-date-group"
                                                                                    id="datetimepicker4">
                                                                                    <label
                                                                                    class="bmd-label-floating inputText">Opens
                                                                                    at</label>
                                                                                    <input type="time"
                                                                                        class="form-control input"
                                                                                        id="datetimepickereffcet-start"
                                                                                        placeholder="15-08-2022">
                                                                                  

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="bmd-date-group">
                                                                                    <label
                                                                                    class="bmd-label-floating inputText">Closes
                                                                                    at</label>
                                                                                    <input type="time"
                                                                                        class="form-control input"
                                                                                        id="datetimepickereffcet-end"
                                                                                        placeholder="17-08-2022">
                                                                                 

                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-4 d-flex align-items-center justify-content-end">
                                                                                <div class="addtime-slot">
                                                                                    <a href="#"
                                                                                        class="addtime-btn">Add Time
                                                                                        slot</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 d-flex flex-wrap">
                                                                <div class="timeslot-range">
                                                                    09:00 AM - 06:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    08:00 AM - 05:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    10:00 AM - 07:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    10:30 AM - 07:30 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header day-header">
                                                    <div class="row">
                                                        <div
                                                            class="col-md-12 d-flex justify-content-between align-items-center">
                                                            <a class="card-link" data-toggle="collapse"
                                                                href="#collapsesix">
                                                                <div class="ava-days">
                                                                    Day 6
                                                                </div>
                                                            </a>
                                                            <div class="toggle-switch">
                                                                <input id="toggle" class="toggle-input"
                                                                    type='checkbox' />
                                                                <label for="toggle" class="toggle-label" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div id="collapsesix" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-9">
                                                                <div
                                                                    class="user_daterangpickrbox">
                                                                    <div class="">
                                                                        <h3 class="big_title2">Add new Time slot
                                                                        </h3>
                                                                    </div>
                                                                    <div class="input-daterange"
                                                                        id="date-range">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="bmd-date-group"
                                                                                    id="datetimepicker4">
                                                                                    <label
                                                                                    class="bmd-label-floating inputText">Opens
                                                                                    at</label>
                                                                                    <input type="time"
                                                                                        class="form-control input"
                                                                                        id="datetimepickereffcet-start"
                                                                                        placeholder="15-08-2022">
                                                                                  

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="bmd-date-group">
                                                                                    <label
                                                                                    class="bmd-label-floating inputText">Closes
                                                                                    at</label>
                                                                                    <input type="time"
                                                                                        class="form-control input"
                                                                                        id="datetimepickereffcet-end"
                                                                                        placeholder="17-08-2022">
                                                                                   

                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-4 d-flex align-items-center justify-content-end">
                                                                                <div class="addtime-slot">
                                                                                    <a href="#"
                                                                                        class="addtime-btn">Add Time
                                                                                        slot</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 d-flex flex-wrap">
                                                                <div class="timeslot-range">
                                                                    09:00 AM - 06:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    08:00 AM - 05:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    10:00 AM - 07:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    10:30 AM - 07:30 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header day-header">
                                                    <div class="row">
                                                        <div
                                                            class="col-md-12 d-flex justify-content-between align-items-center">
                                                            <a class="card-link" data-toggle="collapse"
                                                                href="#collapseseven">
                                                                <div class="ava-days">
                                                                    Day 7
                                                                </div>
                                                            </a>
                                                            <div class="toggle-switch">
                                                                <input id="toggle" class="toggle-input"
                                                                    type='checkbox' />
                                                                <label for="toggle" class="toggle-label" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div id="collapseseven" class="collapse" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-9">
                                                                <div
                                                                    class="user_daterangpickrbox">
                                                                    <div class="">
                                                                        <h3 class="big_title2">Add new Time slot
                                                                        </h3>
                                                                    </div>
                                                                    <div class="input-daterange"
                                                                        id="date-range">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="bmd-date-group"
                                                                                    id="datetimepicker4">
                                                                                    <label
                                                                                    class="bmd-label-floating inputText">Opens
                                                                                    at</label>
                                                                                    <input type="time"
                                                                                        class="form-control input"
                                                                                        id="datetimepickereffcet-start"
                                                                                        placeholder="15-08-2022">
                                                                                  

                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="bmd-date-group">
                                                                                    <label
                                                                                    class="bmd-label-floating inputText">Closes
                                                                                    at</label>
                                                                                    <input type="time"
                                                                                        class="form-control input"
                                                                                        id="datetimepickereffcet-end"
                                                                                        placeholder="17-08-2022">
                                                                                   

                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-md-4 d-flex align-items-center justify-content-end">
                                                                                <div class="addtime-slot">
                                                                                    <a href="#"
                                                                                        class="addtime-btn">Add Time
                                                                                        slot</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 d-flex flex-wrap">
                                                                <div class="timeslot-range">
                                                                    09:00 AM - 06:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    08:00 AM - 05:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    10:00 AM - 07:00 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                                <div class="timeslot-range">
                                                                    10:30 AM - 07:30 PM

                                                                    <svg width="16" height="16" viewBox="0 0 24 24"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                            stroke="#DB2828" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M15 9L9 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M9 9L15 15" stroke="#DB2828"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>
                            </div>
                        </div>
                       </div>
                    </div>
                    <div class="tab-pane settings-tab-pane" id="nav2" role="tabpanel">
                    <div class="configuration-div">
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#conf-tab1"
                                    role="tab">
                                    <span>Expert Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#conf-tab2" role="tab">
                                    <span>Team Member</span>
                                </a>
                            </li>
                          
                        </ul>
                        <hr class="nav-bottom-hr" />
                        <div class="tab-content">
                            <div class="tab-pane active pb-0" id="conf-tab1" role="tabpanel">
                                <div class="speaker-header">
                                    <div class="speaker-btns">
                                        <button type="button"
                                            class="btn btn-primary waves-effect waves-light btn-sm  br-50 small"
                                            data-bs-toggle="modal" data-bs-target="#add-category">
                                            Add Expert Category
                                        </button>
                                        <div class="dropdown event-sett">
                                            <div class="event-settings dropdown-toggle"
                                                type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-cog"></i>
                                            </div>
                                            <div class="dropdown-menu"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#import-upload"><i
                                                        class="fas fa-download me-2"></i>Import</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fas fa-upload me-2"></i>Export</a>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="d-flex rightside-btns">
                                        <div class="row-selected" style="display: none;">
                                            <button type="button" class="btn btn-light selected-num me-1"
                                                fdprocessedid="6xsncw">
                                                <span>8</span>Selected<i class="bx bx-x"></i>
                                            </button>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    fdprocessedid="p8hcnm"><i class="fas fa-cog me-1"
                                                        aria-hidden="true"></i>Actions</button>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-download me-2"
                                                            aria-hidden="true"></i>Export</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="bx bxs-archive-in me-2"
                                                            aria-hidden="true"></i>Archive</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="bx bxs-archive-out me-2"
                                                            aria-hidden="true"></i>Unarchive</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bxs-trash-alt me-2"
                                                            aria-hidden="true"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group search-inpt">
                                            <div class="input-group-text bg-white"><i class="bx bx-search-alt"></i>
                                            </div>
                                            <input type="text" class="form-control border-start-0 ps-0"
                                                id="inlineFormInputGroupUsername" placeholder="Search this list "
                                                fdprocessedid="8pxgmh">
                                            <div class="dropdown drpdwn-fg">
                                                <button type="button" style=""
                                                    class="input-group-text input-group-text-right btn-export btn-filter waves-effect waves-light btn-sm small dropdown-toggle h-100"
                                                    id="dropdownMenuButton" data-mdb-toggle="dropdown"
                                                    aria-expanded="false" data-mdb-auto-close="outside"
                                                    fdprocessedid="w62w8i">
                                                    <i class="bx bx-filter-alt"></i>

                                                </button>

                                                <ul class="dropdown-menu dropdown-menu-lg filter-megadropdown animation fade-out"
                                                    aria-labelledby="dropdownMenuButton"
                                                    data-popper-placement="bottom-end" data-mdb-popper="null"
                                                    style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-8px, 35px);">
                                                    <div class="dropdown-row">
                                                        <div class="col-md-4 border-right px-0">
                                                            <h3><i class="bx bxs-filter-alt"></i>Filters</h3>
                                                            <div class="dropdown-divider"></div>
                                                            <li><a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"
                                                                            aria-hidden="true"></i>My
                                                                        Events</span></a>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"
                                                                            aria-hidden="true"></i>Upcoming/Running</span></a>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"
                                                                            aria-hidden="true"></i>Published</span></a>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                    Stage <i class="fas fa-angle-right arrow"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            Live
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            Drafts
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            Past
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            Cancelled
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            All
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            Trash
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                    Start Date <i class="fas fa-angle-right arrow"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="reg-date w-100">
                                                                                <label for="">Date</label>
                                                                                <input type="date"
                                                                                    class="form-control-sm">
                                                                            </div>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"
                                                                            aria-hidden="true"></i>Archived</span></a>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                    Add Custom Filter <i
                                                                        class="fas fa-angle-right arrow"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="reg-date w-100">
                                                                                <input type="text"
                                                                                    class="form-control-sm"
                                                                                    placeholder="Type here">

                                                                            </div>

                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <button type="button"
                                                                                class="btn btn-primary btn-sm waves-effect waves-light">Apply</button>

                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </li>


                                                        </div>
                                                        <div class="col-md-4 border-right px-0">
                                                            <h3><i class="bx bxs-layer"></i>Group By</h3>
                                                            <div class="dropdown-divider"></div>
                                                            <li><a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"
                                                                            aria-hidden="true"></i>Responsible</span></a>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"
                                                                            aria-hidden="true"></i>Template</span></a>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"
                                                                            aria-hidden="true"></i>Stage</span></a>
                                                            </li>

                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                    Start Date <i class="fas fa-angle-right arrow"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="reg-date w-100">
                                                                                <label for="">Date</label>
                                                                                <input type="date"
                                                                                    class="form-control-sm">
                                                                            </div>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </li>

                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                    Add Custom Group <i class="fas fa-angle-right arrow"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            Company
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            Country
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            Created by
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            Created on
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                        </div>
                                                        <div class="col-md-4 px-0">
                                                            <h3><i class="bx bxs-star fav"></i>Favorites</h3>
                                                            <div class="dropdown-divider"></div>
                                                            <li><a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"
                                                                            aria-hidden="true"></i>My
                                                                        Events</span></a>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"
                                                                            aria-hidden="true"></i>Upcoming
                                                                        Events</span></a>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                    Save current search <i
                                                                        class="fas fa-angle-right arrow"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu" style="margin-top: 40px;left: auto;width: 100%;">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">

                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" id="formCheck1">
                                                                                <label class="form-check-label"
                                                                                    for="formCheck1">
                                                                                    Default filter
                                                                                </label>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" id="formCheck1">
                                                                                <label class="form-check-label"
                                                                                    for="formCheck1">
                                                                                    Shared
                                                                                </label>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <button type="button"
                                                                                class="btn btn-primary btn-sm waves-effect waves-light">Save</button>
                                                                        </a>
                                                                    </li>


                                                                </ul>
                                                            </li>
                                                        </div>
                                                    </div>

                                                </ul>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="tbl-content">
                                    <div class="tbl-overflow-hide1">
                                        <table id="event-table"
                                                    class="table table-resizable table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th width="36px" style="padding-right: 4px;"><input class="form-check-input" type="checkbox" name="Main_Checkbox" id="selectAll"><span class="resize"></span></th>
                                                            <th>S/NO<span class="resize"></span></th>
                                                            <th>Category<span class="resize"></span></th>                                                       
                                                            <th><span class="resize"></span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                                            <td>1</td>
                                                            <td>Career</td>
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#add-category">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
                                                                <span class="resize"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck2"><span class="resize"></span></td>
                                                            <td>2</td>
                                                            <td>Business</td>
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#add-category">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
                                                                <span class="resize"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck3"><span class="resize"></span></td>
                                                            <td>3</td>
                                                            <td>Automotive</td>
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#add-category">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
                                                                <span class="resize"></span>
                                                            </td>
                                                        </tr>
                                                       
                                                    </tbody>
                                        </table>
                                    </div>
                                    <div class="bootom-nav">
                                        <div class="total-count">
                                            <h6>Total Count : <span>10</span></h6>
                                            <ul>
                                                <li><a href="#"><i class="bx bx-chevrons-left"></i></a>
                                                </li>
                                                <li><a href="#"><i class="bx bx-chevron-left"></i></a>
                                                </li>                                                      
                                                <li class="active"><a href="#"><span>1</span></a></li>
                                                <li><a href="#"><span>2</span></a></li>                                                  
                                                <li><a href="#"><i class="bx bx-chevron-right"></i></a>
                                                </li>
                                                <li><a href="#"><i class="bx bx-chevrons-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="tab-pane pb-0" id="conf-tab2" role="tabpanel">
                                <div class="speaker-header">
                                    <div class="speaker-btns">
                                        <button type="button"
                                            class="btn btn-primary waves-effect waves-light btn-sm  br-50 small"
                                            data-bs-toggle="modal" data-bs-target="#new-member">
                                            Add Team Member
                                        </button>
                                        <div class="dropdown event-sett">
                                            <div class="event-settings dropdown-toggle"
                                                type="button" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-cog"></i>
                                            </div>
                                            <div class="dropdown-menu"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#import-upload"><i
                                                        class="fas fa-download me-2"></i>Import</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i
                                                        class="fas fa-upload me-2"></i>Export</a>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="d-flex rightside-btns">
                                        <div class="row-selected" style="display: none;">
                                            <button type="button" class="btn btn-light selected-num me-1"
                                                fdprocessedid="6xsncw">
                                                <span>8</span>Selected<i class="bx bx-x"></i>
                                            </button>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    fdprocessedid="p8hcnm"><i class="fas fa-cog me-1"
                                                        aria-hidden="true"></i>Actions</button>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-download me-2"
                                                            aria-hidden="true"></i>Export</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="bx bxs-archive-in me-2"
                                                            aria-hidden="true"></i>Archive</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="bx bxs-archive-out me-2"
                                                            aria-hidden="true"></i>Unarchive</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bxs-trash-alt me-2"
                                                            aria-hidden="true"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group search-inpt">
                                            <div class="input-group-text bg-white"><i class="bx bx-search-alt"></i>
                                            </div>
                                            <input type="text" class="form-control border-start-0 ps-0"
                                                id="inlineFormInputGroupUsername" placeholder="Search this list "
                                                fdprocessedid="8pxgmh">
                                            <div class="dropdown drpdwn-fg">
                                                <button type="button" style=""
                                                    class="input-group-text input-group-text-right btn-export btn-filter waves-effect waves-light btn-sm small dropdown-toggle h-100"
                                                    id="dropdownMenuButton" data-mdb-toggle="dropdown"
                                                    aria-expanded="false" data-mdb-auto-close="outside"
                                                    fdprocessedid="w62w8i">
                                                    <i class="bx bx-filter-alt"></i>

                                                </button>

                                                <ul class="dropdown-menu dropdown-menu-lg filter-megadropdown animation fade-out"
                                                    aria-labelledby="dropdownMenuButton"
                                                    data-popper-placement="bottom-end" data-mdb-popper="null"
                                                    style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-8px, 35px);">
                                                    <div class="dropdown-row">
                                                        <div class="col-md-4 border-right px-0">
                                                            <h3><i class="bx bxs-filter-alt"></i>Filters</h3>
                                                            <div class="dropdown-divider"></div>
                                                            <li><a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"
                                                                            aria-hidden="true"></i>My
                                                                        Events</span></a>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"
                                                                            aria-hidden="true"></i>Upcoming/Running</span></a>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"
                                                                            aria-hidden="true"></i>Published</span></a>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                    Stage <i class="fas fa-angle-right arrow"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            Live
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            Drafts
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            Past
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            Cancelled
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            All
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            Trash
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                    Start Date <i class="fas fa-angle-right arrow"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="reg-date w-100">
                                                                                <label for="">Date</label>
                                                                                <input type="date"
                                                                                    class="form-control-sm">
                                                                            </div>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"
                                                                            aria-hidden="true"></i>Archived</span></a>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                    Add Custom Filter <i
                                                                        class="fas fa-angle-right arrow"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="reg-date w-100">
                                                                                <input type="text"
                                                                                    class="form-control-sm"
                                                                                    placeholder="Type here">

                                                                            </div>

                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <button type="button"
                                                                                class="btn btn-primary btn-sm waves-effect waves-light">Apply</button>

                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </li>


                                                        </div>
                                                        <div class="col-md-4 border-right px-0">
                                                            <h3><i class="bx bxs-layer"></i>Group By</h3>
                                                            <div class="dropdown-divider"></div>
                                                            <li><a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"
                                                                            aria-hidden="true"></i>Responsible</span></a>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"
                                                                            aria-hidden="true"></i>Template</span></a>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"
                                                                            aria-hidden="true"></i>Stage</span></a>
                                                            </li>

                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                    Start Date <i class="fas fa-angle-right arrow"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="reg-date w-100">
                                                                                <label for="">Date</label>
                                                                                <input type="date"
                                                                                    class="form-control-sm">
                                                                            </div>
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </li>

                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                    Add Custom Group <i class="fas fa-angle-right arrow"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            Company
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            Country
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            Created by
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            Created on
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                        </div>
                                                        <div class="col-md-4 px-0">
                                                            <h3><i class="bx bxs-star fav"></i>Favorites</h3>
                                                            <div class="dropdown-divider"></div>
                                                            <li><a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"
                                                                            aria-hidden="true"></i>My
                                                                        Events</span></a>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item" href="#"><span><i
                                                                            class="fas fa-check me-2"
                                                                            aria-hidden="true"></i>Upcoming
                                                                        Events</span></a>
                                                            </li>
                                                            <div class="dropdown-divider"></div>
                                                            <li>
                                                                <a class="dropdown-item drpdwn-menu-btn" href="#">
                                                                    Save current search <i
                                                                        class="fas fa-angle-right arrow"
                                                                        aria-hidden="true"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-submenu" style="margin-top: 40px;left: auto;width: 100%;">
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">

                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" id="formCheck1">
                                                                                <label class="form-check-label"
                                                                                    for="formCheck1">
                                                                                    Default filter
                                                                                </label>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" id="formCheck1">
                                                                                <label class="form-check-label"
                                                                                    for="formCheck1">
                                                                                    Shared
                                                                                </label>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="dropdown-item" href="#">
                                                                            <button type="button"
                                                                                class="btn btn-primary btn-sm waves-effect waves-light">Save</button>
                                                                        </a>
                                                                    </li>


                                                                </ul>
                                                            </li>
                                                        </div>
                                                    </div>

                                                </ul>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="tbl-content">
                                    <div class="tbl-overflow-hide1">
                                        <table id="event-table"
                                                    class="table table-resizable table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th width="36px" style="padding-right: 4px;"><input class="form-check-input" type="checkbox" name="Main_Checkbox" id="selectAll"><span class="resize"></span></th>
                                                            <th width="68px">S/NO<span class="resize"></span></th>
                                                            <th>Name<span class="resize"></span></th>    
                                                            <th>Email<span class="resize"></span></th> 
                                                            <th>Department<span class="resize"></span></th>       
                                                            <th>Specialisation<span class="resize"></span></th>                                              
                                                            <th><span class="resize"></span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck1"><span class="resize"></span></td>
                                                            <td>1</td>
                                                            <td>
                                                                <div class="d-flex align-items-center team-name">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                                                    Bisharu
                                                                </div>
                                                            </td>
                                                            <td>bishru@gmail.com<span class="resize"></span></td> 
                                                            <td>Department<span class="resize"></span></td>       
                                                            <td>Specialisation<span class="resize"></span></td>   
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#new-member">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
                                                                <span class="resize"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck2"><span class="resize"></span></td>
                                                            <td>2</td>
                                                            <td>
                                                                <div class="d-flex align-items-center team-name">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                                                    Nasim
                                                                </div>
                                                            </td>
                                                            <td>nasim@gmail.com<span class="resize"></span></td> 
                                                            <td>Department<span class="resize"></span></td>       
                                                            <td>Specialisation<span class="resize"></span></td>   
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#new-member">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
                                                                <span class="resize"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding-right: 4px;"><input class="form-check-input check-input" type="checkbox" id="formCheck3"><span class="resize"></span></td>
                                                            <td>3</td>
                                                            <td>
                                                                <div class="d-flex align-items-center team-name">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                                                    Arshad
                                                                </div>
                                                            </td>
                                                            <td>arshad@gmail.com<span class="resize"></span></td> 
                                                            <td>Department<span class="resize"></span></td>       
                                                            <td>Specialisation<span class="resize"></span></td>   
                                                            <td class="text-end">
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#new-member">
                                                                    <i class="bx bxs-pencil cursor-pntr"></i>
                                                                </button>
                                                                <button class="non-actv-btn" data-bs-toggle="modal" data-bs-target="#alert-delete">
                                                                    <i class="bx bx-trash cursor-pntr"></i>
                                                                </button>
                                                                <span class="resize"></span>
                                                            </td>
                                                        </tr>
                                                       
                                                    </tbody>
                                        </table>
                                    </div>
                                    <div class="bootom-nav">
                                        <div class="total-count">
                                            <h6>Total Count : <span>10</span></h6>
                                            <ul>
                                                <li><a href="#"><i class="bx bx-chevrons-left"></i></a>
                                                </li>
                                                <li><a href="#"><i class="bx bx-chevron-left"></i></a>
                                                </li>                                                      
                                                <li class="active"><a href="#"><span>1</span></a></li>
                                                <li><a href="#"><span>2</span></a></li>                                                  
                                                <li><a href="#"><i class="bx bx-chevron-right"></i></a>
                                                </li>
                                                <li><a href="#"><i class="bx bx-chevrons-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                         
                           
                        </div>
                      </div>
                     
                    </div>
     
                   

                </div>
            </div>
        </div>

    </div>



    <div class="modal common-modal fade" id="import-upload" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header1">
                    <div class="header-logo-img">
                        <img src="assets/images/logo.png" alt="">
                    </div>
                    <div class="modal-header-info">
                        <h2>Cyber park event</h2>
                        <h6><i class="bx bx-calendar"></i> Aug 03-05, 2023</h6>
                    </div>
             
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="upload-area" id="uploadArea2" onclick="importDifferentFile(2)">
                        <div class="upload-area__drop-zoon drop-zoon" id="dropZoon2">
                            <span class="drop-zoon__icon">
                                <i class='bx bxs-file-image'></i>
                            </span>
                            <p class="drop-zoon__paragraph">Drop your file here or Click to browse</p>
                            <span class="drop-zoon__loading-text" id="loadingText2">Please Wait</span>
                            <img src="" alt="Preview Image" class="drop-zoon__preview-image" id="previewImage2" draggable="false">
                            <input type="file" class="drop-zoon__file-input" id="fileInput2" accept="image/*">
                        </div>

                        <div class="upload-area__file-details file-details" id="fileDetails2">
                            <h3 class="file-details__title">Uploaded File</h3>

                            <div class="uploaded-file" id="uploadedFile2">
                                <div class="uploaded-file__icon-container">
                                    <i class='bx bxs-file-blank uploaded-file__icon'></i>
                                    <span class="uploaded-file__icon-text"></span>
                                </div>

                                <div class="uploaded-file__info" id="uploadedFileInfo2">
                                    <span class="uploaded-file__name">Project 1</span>
                                    <span class="uploaded-file__counter">0%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-end">
                    <a href="#"><button  data-bs-target="#upload-inpt" data-bs-toggle="modal" data-bs-dismiss="modal" type="button" class="btn btn-primary  br-50 btn-md">Next</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="upload-inpt" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> <img src="assets/images/import.svg" alt="" style="width: 22px;"><span>Attendees IN</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-grp">
                                <div class="alrt-bx alert alert-danger alert-dismissible fade show" role="alert">
                                     <h6><span class="alert-link">XL Line No 8 :</span>Invalid username</h6>
                                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                              
                             </div>
                            <div class="field-btns">
                                <button type="button"class="btn btn-secondary waves-effect waves-light btn-sm text-uppercase br-50 small">
                                    <i class="bx bx-upload font-size-16 align-middle me-1"></i>Upload</button>

                                    <button type="button" class="btn btn-outline-secondary btn-export waves-effect waves-light btn-sm text-uppercase br-50 small">
                                       Test
                                    </button>
                            </div>
                            <div class="event-table attendee-in response-tbl">
                                <div class="table-responsive">
                                    <table id="event-table" class="table table-striped attendee-today-tbl field-tbl">
                                        <thead>
                                            <tr>
                                                <th>Excel Field</th>
                                                <th style="width: 400px;">Field</th>
                                                <th style="width: 30px;"></th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   Name
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Email
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Dob
                                                </td>
                                                <td class="field-slct">
                                                    <select multiple class="single-select">
                                                        <option disabled>Select an option</option>
                                                        <option selected>Option1</option>
                                                        <option>Option2</option>
                                                        <option>Option3</option>
                                                        <option>Option4</option>
                                                       
                                                    </select>
                                                </td>
                                                <td> <a href="#" class="remove-tr" data-bs-toggle="modal" data-bs-target="#alert-delete"><i class="bx bx-trash"></i></a></td>
                                            </tr>
    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                      
                        
                    </div>
                    
                </div>
                <div class="modal-footer">
                  
                    <button type="button" class="btn btn-light br-50 btn-md" data-bs-dismiss="modal" data-bs-target="#import-upload" data-bs-toggle="modal">Back</button>
                    <button data-bs-dismiss="modal" type="button" class="btn btn-primary br-50 btn-md">Save</button>
                </div>

            </div>
        </div>
    </div>
    <div id="alert-delete" class="modal fade" tabindex="-1" aria-labelledby="..." aria-hidden="true"
    style="display: none;">
        <div class="modal-dialog modal-confirm modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box red">
                        <i class="mdi mdi-alert"></i>
                    </div>
                </div>
                <div class="modal-body">
                    <p class="text-center">Are you sure you want to delete ?</p>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn yes-btn successful-btn" data-bs-dismiss="modal">Yes</button>
                    <button class="btn cancel-button" data-bs-dismiss="modal">No</button>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="new-member" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Team Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body user-sqr">
               
                        <div class="row">
                            <div class="col-md-10 mt-2">
                                <a style="display: none;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Send mail"><i
                                    class="bx bx-mail-send"></i></a>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-grp">
                                            <label class="form-label">Name<span>*</span></label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-grp">
                                            <label class="form-label">Email<span>*</span></label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>     
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-grp">
                                            <label class="form-label">Phone<span>*</span></label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-grp">
                                            <label class="form-label">Department<span>*</span></label>
                                            <div class="select-inp">
                                                <select class="form-control" name="department">                                                              
                                                    <option value="department1">Department 1</option>   
                                                    <option value="specialisation2">Department 2</option>                                                                    
                                                </select>
                                                <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="img-upload-form">
                                    <img src="assets/images/users/default.png" id="upld-image1">
                                        <i class="bx bxs-pencil edit-user-image" onclick="makeimg(1)" ;></i>
                                    <input type="file" oninput="previewFile(1)" accept="image/*" id="imgfile1" />
                                    <i class="bx bxs-trash delete-user-image" onclick="deleteimg(1)" ;></i>
                                </div>
                            
                            </div>
                                            
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="form-grp">
                                    <label class="form-label">Specialisation<span>*</span></label>
                                    <div class="select-inp">
                                        <select class="form-control" name="specialisation">                                                              
                                            <option value="specialisation1">Specialisation 1</option>   
                                            <option value="specialisation2">Specialisation 2</option>                                                                    
                                        </select>
                                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                    </div>    
                                </div>
                                                       
                            </div>

                            <div class="col-md-12 mt-2">
                                <div class="form-grp">
                                    <label class="form-label">Timeslot<span>*</span></label>
                                 
                                    <div class="time-slot-picker">
                                        <div class="date-pick-div">
                                            <div class="date-pick">
                                                <h5>MON</h5>
                                                <h3>14</h3>
                                                <h6>APRIL</h6>
                                            </div>
                                            <div class="date-pick">
                                                <h5>TUE</h5>
                                                <h3>15</h3>
                                                <h6>APRIL</h6>
                                            </div>
                                            <div class="date-pick">
                                                <h5>WED</h5>
                                                <h3>16</h3>
                                                <h6>APRIL</h6>
                                            </div>
                                            <div class="date-pick active">
                                                <h5>THU</h5>
                                                <h3>17</h3>
                                                <h6>APRIL</h6>
                                            </div>
                                            <div class="date-pick">
                                                <h5>FRI</h5>
                                                <h3>18</h3>
                                                <h6>APRIL</h6>
                                            </div>
                                            <div class="date-pick">
                                                <h5>SAT</h5>
                                                <h3>19</h3>
                                                <h6>APRIL</h6>
                                            </div>
                                            <div class="date-pick">
                                                <h5>SUN</h5>
                                                <h3>20</h3>
                                                <h6>APRIL</h6>
                                            </div>
                                        </div>
                                        <div class="date-prev"><a href="javascript: void(0);"><i class="bx bx-chevron-left"></i></a></div>
                                        <div class="date-next"><a href="javascript: void(0);"><i class="bx bx-chevron-right"></i></a></div>
                                    </div>
                                    <div class="pick-dates">
                                        <div class="form-check form-radio-success timeslot-range1">
                                            <input class="form-check-input" type="radio" name="formRadioColor2" id="formRadioColor2">
                                            <label class="form-check-label" for="formRadioColor2">
                                                08:00 AM - 05:00 PM
                                            </label>
                                        </div>
                                        <div class="form-check form-radio-success timeslot-range1">
                                            <input class="form-check-input" type="radio" name="formRadioColor2" id="formRadioColor3">
                                            <label class="form-check-label" for="formRadioColor3">
                                                09:00 AM - 06:00 PM
                                            </label>
                                        </div>
                                        <div class="form-check form-radio-success timeslot-range1">
                                            <input class="form-check-input" type="radio" name="formRadioColor2" id="formRadioColor4">
                                            <label class="form-check-label" for="formRadioColor4">
                                                10:00 AM - 07:00 PM
                                            </label>
                                        </div>
                                        <div class="form-check form-radio-success timeslot-range1">
                                            <input class="form-check-input" type="radio" name="formRadioColor2" id="formRadioColor5">
                                            <label class="form-check-label" for="formRadioColor5">
                                                11:00 AM - 08:00 PM
                                            </label>
                                        </div>
                                       
                                    </div>
                                </div>
                           
                            </div>
                            
                        </div>

                      
                </div>
                <div class="modal-footer">
                   
                    <button type="button" class="btn btn-light text-uppercase br-50 btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary text-uppercase br-50 btn-md" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add-category" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Expert Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-grp mb-0">
                        <label class="form-label">Category Name<span>*</span></label>
                        <input class="form-control" type="text" placeholder="">
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light br-50 btn-md" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary  br-50 btn-md" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>


    <!-- JAVASCRIPT -->
    <script src="https://kit.fontawesome.com/16b0815225.js" crossorigin="anonymous"></script>
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/multiselect/choices.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/js/pages/jquery.slim.min.js"></script>
    <script src="assets/js/pages/popper.min.js"></script>
    <script src="assets/js/pages/bootstrap.min.js"></script>
    <script src="assets/libs/datepicker/semantic.min.js"></script>
    <script src="assets/libs/select/select2.min.js"></script>
    <script src="assets/libs/select2/js/select2.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
    <script src="assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="assets/libs/datepicker/datepicker.min.js"></script>
    <script src="assets/js/pages/form-advanced.init.js"></script>
    <script src="assets/libs/ckediter/ckeditor.js"></script>
    <script src="assets/js/pages/bootstrap-taginput.js"></script>
    <script src="assets/js/pages/mdb.min.js"></script>
    <script src="assets/js/summernote-bs4.js"></script>
    <script src="assets/js/app.js"></script>



    <script>
        var $radioButtons = $('.radio-check-function input[type="radio"]');
        $radioButtons.click(function() {
            $radioButtons.each(function() {
                $(this).parent().toggleClass('active', this.checked);
            });
        });
    </script>
        <script>
            $(".drpdwn-menu-btn").click(function () {
                $(this).parent().children(".dropdown-menu").toggleClass("show");
            });
            $(".drpdwn-fg .dropdown-item").click(function () {
                $(this).toggleClass("check");
            });
        
        </script>
 <script>
    $('.selected-num i').on('click', function () {
        $(this).closest(".selected-num").remove();
    });

    $(function () {

        $(".settings-details").on("click", function () {
            $(".row-selected").toggle($(this).find(".check-input:checked").length > 0);
        })
       
        $('input[name="Main_Checkbox"]').on("click", function () {
            $('.check-input').prop('checked', this.checked);
        });
    });
</script>
    <script>
        $(function() {
            setTimeout(function() {
                // $('.loader-mask').delay(350).fadeOut('slow')
                $(".loader-mask").hide();
            }, 100)

        })
    </script>
    <script>
        $('.datestart').calendar({
            type: 'date',
            endCalendar: $('.dateend')
        });
        $('.dateend').calendar({
            type: 'date',
            startCalendar: $('.datestart')
        });
    </script>
    <script>
        function importDifferentFile(imgval) {
    
            const uploadArea = document.querySelector('#uploadArea' + imgval)
            const dropZoon = document.querySelector('#dropZoon' + imgval);
            const loadingText = document.querySelector('#loadingText' + imgval);
            const fileInput = document.querySelector('#fileInput' + imgval);
            const previewImage = document.querySelector('#previewImage' + imgval);
            const fileDetails = document.querySelector('#fileDetails' + imgval);
            const uploadedFile = document.querySelector('#uploadedFile' + imgval);
            const uploadedFileInfo = document.querySelector('#uploadedFileInfo' + imgval);
            const uploadedFileName = document.querySelector('.uploaded-file__name');
            const uploadedFileIconText = document.querySelector('.uploaded-file__icon-text');
            const uploadedFileCounter = document.querySelector('.uploaded-file__counter');
            const imagesTypes = [
                "jpeg",
                "png",
                "svg",
                "gif"
            ];
    
            dropZoon.addEventListener('dragover', function (event) {
                event.preventDefault();
                dropZoon.classList.add('drop-zoon--over');
            });
    
            dropZoon.addEventListener('dragleave', function (event) {
                dropZoon.classList.remove('drop-zoon--over');
            });
    
            dropZoon.addEventListener('drop', function (event) {
                event.preventDefault();
                dropZoon.classList.remove('drop-zoon--over');
                const file = event.dataTransfer.files[0];
                uploadFile(file);
            });
    
            fileInput.click()
            fileInput.addEventListener('change', function (event) {
                const file = event.target.files[0];
                uploadFile(file);
            });
    
            function uploadFile(file) {
                const fileReader = new FileReader();
                const fileType = file.type;
                const fileSize = file.size;
    
                if (fileValidate(fileType, fileSize)) {
                    dropZoon.classList.add('drop-zoon--Uploaded');
                    loadingText.style.display = "block";
                    previewImage.style.display = 'none';
                    uploadedFile.classList.remove('uploaded-file--open');
                    uploadedFileInfo.classList.remove('uploaded-file__info--active');
    
                    fileReader.addEventListener('load', function () {
                        setTimeout(function () {
                            uploadArea.classList.add('upload-area--open');
                            loadingText.style.display = "none";
                            previewImage.style.display = 'block';
                            fileDetails.classList.add('file-details--open');
                            uploadedFile.classList.add('uploaded-file--open');
                            uploadedFileInfo.classList.add('uploaded-file__info--active');
                        }, 500);
    
                        previewImage.setAttribute('src', fileReader.result);
                        uploadedFileName.innerHTML = file.name;
    
                        progressMove();
                    });
    
                    fileReader.readAsDataURL(file);
                } else {
    
                    this;
    
                };
            };
    
    
            function progressMove() {
                let counter = 0;
                setTimeout(() => {
                    let counterIncrease = setInterval(() => {
                        if (counter === 100) {
                            clearInterval(counterIncrease);
                        } else {
                            counter = counter + 10;
                            uploadedFileCounter.innerHTML = `${counter}%`
                        }
                    }, 100);
                }, 600);
            };
    
            function fileValidate(fileType, fileSize) {
                let isImage = imagesTypes.filter((type) => fileType.indexOf(`image/${type}`) !== -1);
                if (isImage[0] === 'jpeg') {
                    uploadedFileIconText.innerHTML = 'jpg';
                } else {
                    uploadedFileIconText.innerHTML = isImage[0];
                };
    
                if (isImage.length !== 0) {
                    if (fileSize <= 2000000) {
                        return true;
                    } else {
                        return alert('Please Your File Should be 2 Megabytes or Less');
                    };
                } else {
                    return alert('Please make sure to upload An Image File Type');
                };
            };
        }
    </script>
        <script>
            function makeimg(val1) {
    
                document.getElementById("imgfile" + val1).click();
            }
    
            function previewFile(value) {
    
                const preview = document.getElementById('upld-image' + value);
                const file = document.getElementById("imgfile" + value).files[0];
                const reader = new FileReader();
    
                reader.addEventListener("load", function () {
                    preview.src = reader.result;
                }, false);
    
                if (file) {
                    reader.readAsDataURL(file);
                }
            }
            function deleteimg(value) {
                const preview = document.getElementById('upld-image' + value);
                preview.src = 'assets/images/users/default.png';
    
                const fileInput = document.getElementById("imgfile" + value);
                fileInput.value = null;
            }
        </script>
            <script>
                $(".mul-select").select2({
                    tags: true
                });
        
                $(".single-select").select2({
                    tags: true,
                    maximumSelectionLength: 1,
                    placeholder: "Select an option" 
                });
            
                $("ul.select2-selection__rendered").sortable({
                    containment: 'parent'
                });
            </script>
    <script>
        $("#inputTag").tagsinput('items');
    </script>
        <script>
            $(document).ready(function () {
    
                var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                    removeItemButton: true,
                    maxItemCount: 400,
                    searchResultLimit: 5,
                    renderChoiceLimit: 5
                });
    
    
            });
        </script>

        <script>
            $(".day-header").click(function () {
               $(".day-header").parent().removeClass("card-border-left");
               $(this).parent().addClass("card-border-left");
           });
           $(".timeslot-range").click(function () {
               $(this).hide();
           });
         
       </script>
         <script>
            $(function () {
                $('.timeslot-range1').click(function () {
                    $('.timeslot-range1.active').removeClass('active');
                    $(this).addClass('active');
                    $(this).find('input').prop('checked', true)   
                });
            });
        </script>
</body>

</html>