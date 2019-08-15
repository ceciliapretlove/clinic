<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Appointment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="colorlib.com">

        <!-- MATERIAL DESIGN ICONIC FONT -->
        <link href="{{ asset('fonts/material-design-iconic-font/css/material-design-iconic-font.css') }}" rel="stylesheet">

        <!-- DATE-PICKER -->
        <link href="{{ asset('css/date-picker/css/datepicker.min.css') }}" rel="stylesheet">

        <!-- STYLE CSS -->
        <link href="{{ asset('css/reg.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <form action="POST" id="patientAppointment" class="wizard">
                <!-- SECTION 1 -->
                <h4></h4>
                <section>
                    <h3>Personal Information</h3>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                First Name
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <input type="text" id="fname"  name="fname" class="form-control">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for=""> 
                                Last Name
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <input type="text" id="lname"  name="lname" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Mobile Number
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-smartphone-android"></i>
                                <input type="text" id="mobile" name="mobile" class="form-control">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Email
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Specialisation
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-case"></i>
                                <input type="text" name="specialisation" id="specialisation" class="form-control">
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- SECTION 2 -->
                <h4></h4>
                <section>
                    <h3>Appointment Schedule</h3>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Start 
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <input type="text" id="option1" name="option1" class="form-control">
                            </div>
                        </div>
                                                <div class="form-col">
                            <label for="">
                                End
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <input type="text" id="option2" name="option2" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col" style="width:100%!important;">
                            <label for="">
                                Location
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-pin-drop"></i>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </section>

                <!-- SECTION 3 -->
                <h4></h4>
                <section>
                    <h3>Confirm Appointment</h3>
                    <div class="form-row">
                        <div class="form-col" style="width: 100%!important">
                            <label for="">
                                Procedure
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-assignment-o"></i>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Option 1
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                                                <div class="form-col">
                            <label for="">
                                Option 2
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                                                <div class="form-col">
                            <label for="">
                                Option 3
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-col" style="width:100%!important;">
                            <label for="">
                                Location
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-pin-drop"></i>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-row">
                        <div class="form-col" style="width:100%!important;">
                            <button type="submit" class="btn btn-success btn-block">FINISH</button>
                        </div>
                    </div> -->
                </section>
            </form>
        </div>
        <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.steps.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/datepicker.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js//datepicker.en.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

<!-- Template created and distributed by Colorlib -->
</body>
</html>