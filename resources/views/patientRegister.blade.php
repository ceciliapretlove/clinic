<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Apppointment</title>
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
            <form action="" id="wizard">
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
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for=""> 
                                Last Name
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <input type="text" class="form-control">
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
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                Email
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-email"></i>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="">
                                Occupation
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-case"></i>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-col">
                            <label for="">
                                HMO
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <select name="" id="" class="form-control">
                                    <option value="united states" class="option">Medicard</option>
                                    <option value="united kingdom" class="option">Maxicare</option>
                                    <option value="viet nam" class="option">Intellicare</option>
                                </select>
                                <i class="zmdi zmdi-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                </section>
                
				<!-- SECTION 2 -->
                <h4></h4>
                <section>
                	<h3>Appointment</h3>
                    <div class="form-row">
                        <div class="form-col" style="width: 100%!important">
                            <label for="">
                                Procedure
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-assignment-o"></i>
                                <input type="text" class="form-control">
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
                                <input type="text" class="form-control">
                            </div>
                        </div>
                                                <div class="form-col">
                            <label for="">
                                Option 2
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                                                <div class="form-col">
                            <label for="">
                                Option 3
                            </label>
                            <div class="form-holder">
                                <i class="zmdi zmdi-account-o"></i>
                                <input type="text" class="form-control">
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
                    <h3>Appointment</h3>
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