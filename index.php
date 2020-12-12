<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>101538</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <!--     Fonts     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/v/bs4/dt-1.10.22/r-2.2.6/datatables.min.css"/>

    <link rel="stylesheet" href="https://unpkg.com/@dopesky/infiscroll@1.0.2/dist/css/infiscroll.css">

    <link rel="stylesheet" type="text/css" href="assets/css/intlTelInput.min.css"/>
    <!-- CSS Files -->
    <link href="assets/css/material-kit.min.css?v=2.0.7" rel="stylesheet"/>
    <link href="assets/css/custom.css" rel="stylesheet"/>

    <style>
        .iti__flag {
            background-image: url("assets/img/flags.png");
        }

        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
            .iti__flag {
                background-image: url("assets/img/flags@2x.png");
            }
        }
    </style>
</head>

<body class="landing-page sidebar-collapse">
<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100">
    <div class="container">
        <div class="navbar-translate w-100">
            <div class="d-flex align-items-center justify-content-around">
                <a class="navbar-brand">101538</a>
                <a class="navbar-brand">Kathendu Kevin Mwenda </a>
                <a class="navbar-brand">BICS 4B</a>
            </div>
        </div>
    </div>
</nav>
<div class="page-header header-filter" data-parallax="true"
     style="background-image: url('assets/img/bg2.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5">
                <h1 class="title">Distributed Objects and Web Services Assignment.</h1>
                <h4 class="text-light">This is a showcase of Assignment 4 of the Unit above.
                    It Provides a web service client for Students to register their details and
                    also fetch the registered details. The web service uses REST instead of SOAP</h4>
                <div class="d-flex align-items-center justify-content-around">
                    <a href="#register_student" class="btn btn-success mr-3">Register Student</a>
                    <a href="#fetch_student" class="btn btn-info">Fetch Student</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="container">
        <div class="section section-contacts" id="register_student">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="text-center title">Register Student Details via Rest Web Service.</h2>
                    <h4 class="text-center description">Enter the student's details in the form below and submit the
                        form. Fields marked with <span class="text-danger">*</span> are required.</h4>
                    <form class="contact-form" id="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user"></i></div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <label for="first_name" class="bmd-label-floating">First Name <i
                                                    class="text-danger">*</i></label>
                                        <input type="text" name="first_name" id="first_name" class="form-control">
                                        <span class="bmd-help text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user-tie"></i></div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <label for="last_name" class="bmd-label-floating">Last Name <i
                                                    class="text-danger">*</i></label>
                                        <input type="text" name="last_name" id="last_name" class="form-control">
                                        <span class="bmd-help text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-at"></i></div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <label for="email" class="bmd-label-floating">Email <i class="text-danger">*</i></label>
                                        <input type="text" name="email" id="email" class="form-control">
                                        <span class="bmd-help text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-phone-alt"></i></div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <label for="phone_number">Phone Number <i
                                                    class="text-danger">*</i></label>
                                        <input type="text" name="phone_number" id="phone_number" class="form-control">
                                        <span class="bmd-help text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-map-marker-alt"></i></div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <label for="address" class="bmd-label-floating">Address <i
                                                    class="text-danger">*</i></label>
                                        <input type="text" name="address" id="address" class="form-control">
                                        <span class="bmd-help text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <label for="dob" class="bmd-label-floating">Date of Birth
                                            <i class="text-danger">*</i></label>
                                        <input type="text" id="dob" name="dob" class="form-control datetimepicker"/>
                                        <span class="bmd-help text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-poll"></i></div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <label for="entry_points" class="bmd-label-floating">Entry Points <i
                                                    class="text-danger">*</i></label>
                                        <input type="text" name="entry_points" id="entry_points" class="form-control">
                                        <span class="bmd-help text-danger"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto text-center">
                                <button type="submit" class="btn btn-primary btn-raised">Submit Form</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="section section-contacts" id="fetch_student">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="text-center title">Fetch Student Details via Rest Web Service.</h2>
                    <h4 class="text-center description">
                        Enter the student's Admission Number in the form below in order to receive the student details.
                    </h4>
                    <form id="search-form" class="contact-form">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-address-card"></i></div>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <label for="admission_number" class="bmd-label-floating">Admission Number <i
                                                    class="text-danger">*</i></label>
                                        <input type="text" name="admission_number" id="admission_number"
                                               class="form-control">
                                        <span class="bmd-help text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center align-self-center">
                                <button type="submit" class="btn btn-primary btn-raised">Submit Form</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="section section-contacts pt-0">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover table-striped table-bordered" id="students-table">
                        <thead>
                        <tr>
                            <td>Admission No.</td>
                            <td>Full Name</td>
                            <td>Email</td>
                            <td>Phone Number</td>
                            <td>Address</td>
                            <td>Date of Birth</td>
                            <td>Entry Points</td>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer footer-default">
    <div class="container">
        <div class="copyright float-right">
            &copy; <?= date_create('now', new DateTimeZone('Africa/Nairobi'))->format('Y') ?>
            , made with <i class="material-icons">favorite</i> by
            <a href="https://github.com/dopesky" target="_blank">Dopesky</a>.
        </div>
    </div>
</footer>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
<script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/r-2.2.6/datatables.min.js"></script>
<script src="assets/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script src="assets/js/plugins/intlTelInput.min.js" type="text/javascript"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/c04e773a09.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@dopesky/infiscroll@1.0.2/dist/js/infiscroll.js"></script>
<script>
    const studentsTable = $("#students-table").DataTable({
        sDom: "ti",
        autoWidth: true,
        oLanguage: {
            sSearch: '<span class="input-group-addon"><i class="fa fa-search"></i></span>',
            sSearchPlaceholder: "Search this Table . . ."
        },
        columns: [
            {data: 'admission_number'},
            {data: 'full_name'},
            {data: 'email'},
            {data: 'phone_number'},
            {data: 'address'},
            {data: 'dob'},
            {data: 'entry_points'},
        ]
    });

    const datePicker = $('.datetimepicker')
    datePicker.datetimepicker({
        icons: {
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
        },
        format: 'DD/MM/YYYY',
        maxDate: 'now'
    });
    datePicker.on("dp.change", function (e) {
        if (e.date === false) datePicker.parents(".form-group").removeClass("is-filled")
        else datePicker.parents(".form-group").addClass("is-filled")
    });

    const phoneNumberInput = intlTelInput(document.querySelector("#phone_number"), {
        utilsScript: "assets/js/plugins/utils.js",
        initialCountry: "auto",
        geoIpLookup: (callback) => {
            $.ajax({url: 'https://ipapi.co/json', dataType: "json"}).always((resp) => {
                callback((resp && resp.country_code) ? resp.country_code : "us");
            });
        },
    });

    function setError(element, error) {
        if (error) {
            element.parents(".form-group").addClass("has-danger").find(".bmd-help").html(error);
            return false;
        } else {
            element.parents(".form-group").removeClass("has-danger").find(".bmd-help").html("");
            return true;
        }
    }

    $("#form").on("submit", (event) => {
        event.preventDefault()
        const button = $(event.currentTarget).find("button[type=submit]");

        const phoneNumberElement = $("#phone_number");
        setError(phoneNumberElement, false);
        if (!phoneNumberInput.isValidNumber()) return setError(phoneNumberElement, "This Should be a Valid Phone Number.");

        const date = datePicker.data("DateTimePicker").date()
        setError(datePicker, false)
        if (date == null) return setError(datePicker, "This Should be a Valid Date before Today.");

        const formData = $(event.currentTarget).serializeArray().map(input => {
            if (input.name === 'phone_number') input.value = phoneNumberInput.getNumber();
            if (input.name === 'dob') input.value = date.format("YYYY-MM-DD")
            return input;
        });

        infiscroll.toggleButton({button, html: "Submitting . . ."})
        $.ajax({
            url: `api/v1/students`,
            dataType: 'json',
            headers: {"Accept": "application/json"},
            data: formData,
            method: 'POST'
        }).always((data) => {
            infiscroll.toggleButton({button, html: "Submit Form"})
            if (data.ok) {
                const inputs = $("input");
                for (let i = 0; i < inputs.length; i++) setError($(inputs[i]), false)

                infiscroll.setToast({message: data.message, type: 'success', delay: 10000});
                $(event.currentTarget)[0].reset();
            } else if (data.errors) {
                for (let item of Object.keys(data.errors)) setError($(`input[name=${item}]`), data.errors[item].join("<br>"))
            } else infiscroll.setToast({message: data.error || 'An Unexpected Error Occurred!'});

            $("body, html").animate({scrollTop: $('#register_student').offset().top})
        })
    });

    $("#search-form").on("submit", (event) => {
        event.preventDefault()
        const button = $(event.currentTarget).find("button[type=submit]");
        const formData = $(event.currentTarget).serializeArray();
        const admission_number = formData[0].value;
        if (admission_number.trim().length < 1) {
            infiscroll.setToast({message: "Please Input an Admission Number First!"});
            return;
        }

        infiscroll.toggleButton({button, html: "Submitting . . ."})
        $.ajax({
            url: `api/v1/students/${admission_number}`,
            dataType: 'json',
            headers: {"Accept": "application/json"},
        }).always((data) => {
            infiscroll.toggleButton({button, html: "Submit Form"})
            if (data.ok) {
                const inputs = $("input");
                for (let i = 0; i < inputs.length; i++) setError($(inputs[i]), false)

                data.student.dob = moment(data.student.dob).format("Do MMM, YYYY")
                studentsTable.clear().rows.add([data.student]).draw();
                $(event.currentTarget)[0].reset();
                $("body, html").animate({scrollTop: $('#students-table').offset().top})
            } else {
                studentsTable.clear().draw()
                infiscroll.setToast({message: data.error || 'An Unexpected Error Occurred!'});
                $("body, html").animate({scrollTop: $('#fetch_student').offset().top})
            }
        })
    })
</script>
</body>
</html>
