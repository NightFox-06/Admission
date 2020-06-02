<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        .inactive_tab {
            color: black;
            background-color: gray;
            cursor: not-allowed;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="personal_details" data-toggle="tab" href="#nav_personal_details" role="tab" aria-controls="nav_personal_details" aria-selected="true">Personal Details</a>
                <a class="nav-item nav-link inactive_tab" id="academic_details" role="tab" aria-controls="nav_academic_details" aria-selected="false">Academic Details</a>
                <a class="nav-item nav-link inactive_tab" id="document_upload" role="tab" aria-controls="nav_document_upload" aria-selected="false">Document Upload</a>
            </div>
        </nav>
        <div class="row">
            <div class="col-12 my-4" id="show_errors"></div>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <!-- 1st tab -->
            <div class="tab-pane fade show active" id="nav_personal_details" role="tabpanel" aria-labelledby="personal_details">
                <!-- Basc Info Form -->
                <form id="basic_info_form">
                    <input type="hidden" name="user_id" value="1">
                    <div class="row">
                        <!-- Full Name -->
                        <div class="form-group col-md-4">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" class="form-control form-control-sm" placeholder="Full Name" aria-describedby="helpId">
                        </div>
                        <!-- Date of Birth -->
                        <div class="form-group col-md-4">
                            <label for="date_of_birth">Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control form-control-sm" aria-describedby="helpId">
                        </div>
                        <!-- Contact Number -->
                        <div class="form-group col-md-4">
                            <label for="contact_number">Contact Number</label>
                            <input type="nubmer" name="contact_number" class="form-control form-control-sm" placeholder="Contact Number" aria-describedby="helpId">
                        </div>
                        <!-- gender -->
                        <div class="form-group col-md-4">
                            <label for="gender">Gender</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender_male" value="male">
                                <label class="form-check-label" for="gender_male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender_female" value="female">
                                <label class="form-check-label" for="gender_female">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender_other" value="other">
                                <label class="form-check-label" for="gender_other">Other</label>
                            </div>
                        </div>
                        <!-- Category -->
                        <div class="form-group col-md-4">
                            <label for="caste">Category</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="caste" id="caste_general" value="general">
                                <label class="form-check-label" for="caste_general">General</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="caste" id="caste_sc" value="SC">
                                <label class="form-check-label" for="caste_sc">SC</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="caste" id="caste_st" value="ST">
                                <label class="form-check-label" for="caste_st">ST</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="caste" id="caste_obc" value="OBC">
                                <label class="form-check-label" for="caste_obc">OBC</label>
                            </div>
                        </div>
                        <!-- Nationality -->
                        <div class="form-group col-md-4">
                            <label for="nationality">Nationality</label>
                            <input type="text" name="nationality" class="form-control form-control-sm" placeholder="Nationality" aria-describedby="helpId">
                        </div>
                        <!-- Current Address -->
                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <label for="current_address">Current Address</label>
                                    <textarea class="form-control" name="current_address" rows="5" placeholder="Address"></textarea>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="current_city">City</label>
                                        <input type="nubmer" name="current_city" class="form-control form-control-sm" placeholder="City" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="current_state">State</label>
                                        <input type="nubmer" name="current_state" class="form-control form-control-sm" placeholder="State" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="current_postal_code">Postal Code</label>
                                        <input type="nubmer" name="current_postal_code" class="form-control form-control-sm" placeholder="Postal Code" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="current_country">Counrty</label>
                                        <input type="nubmer" name="current_country" class="form-control form-control-sm" placeholder="Counrty" aria-describedby="helpId">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Permanent Address -->
                        <div class="form-group col-md-6">
                            <div class="row">
                                <div class="form-group col-12">
                                    <div class="form-check">
                                        <label for="permanent_address">Permanent Address</label>
                                        <input type="checkbox" class="form-check-input ml-4" id="same_address">
                                        <label class="form-check-label ml-5" for="same_address">Same as Current Address</label>
                                    </div>
                                    <textarea class="form-control" name="permanent_address" rows="5" placeholder="Address"></textarea>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="permanent_city">City</label>
                                        <input type="nubmer" name="permanent_city" class="form-control form-control-sm" placeholder="City" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="permanent_state">State</label>
                                        <input type="nubmer" name="permanent_state" class="form-control form-control-sm" placeholder="State" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="permanent_postal_code">Postal Code</label>
                                        <input type="nubmer" name="permanent_postal_code" class="form-control form-control-sm" placeholder="Postal Code" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="permanent_country">Counrty</label>
                                        <input type="nubmer" name="permanent_country" class="form-control form-control-sm" placeholder="Counrty" aria-describedby="helpId">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12 ml-4">
                            <input type="checkbox" class="form-check-input" name="accept_basic" id="accept_basic">
                            <label class="form-check-label" for="accept_basic">Accept declaretion</label>
                        </div>
                        <div class="form-group col-4 col-md-2 offset-md-3">
                            <button class="btn btn-sm btn-info" id="basic_info_preview">Preview</button>
                        </div>
                        <div class="form-group col-4 col-md-2">
                            <button class="btn btn-sm btn-success" id="basic_info_save">Save</button>
                        </div>
                        <div class="form-group col-4 col-md-2">
                            <button class="btn btn-sm btn-primary" id="basic_info_next">Next</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 2nd Tab -->
            <div class="tab-pane fade" id="nav_academic_details" role="tabpanel" aria-labelledby="academic_details">
                <form id="academic_form">
                    <input type="hidden" name="user_id" value="1">
                    <!-- 10th details -->
                    <div class="row bg-light rounded pt-2">
                        <div class="col-12">
                            <h6>10th Details</h6>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="hslc_board">Board</label>
                            <input type="nubmer" name="hslc_board" class="form-control form-control-sm" placeholder="Board" aria-describedby="helpId">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="hslc_institute">Institute</label>
                            <input type="nubmer" name="hslc_institute" class="form-control form-control-sm" placeholder="Institute" aria-describedby="helpId">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="hslc_sub">Subjects</label>
                            <input type="nubmer" name="hslc_sub" class="form-control form-control-sm" placeholder="Subjects" aria-describedby="helpId">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="hslc_year">Passing Year</label>
                            <input type="nubmer" name="hslc_year" class="form-control form-control-sm" placeholder="Passing Year" aria-describedby="helpId">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="hslc_percentage">Percentage %</label>
                            <input type="nubmer" name="hslc_percentage" class="form-control form-control-sm" placeholder="Percentage" aria-describedby="helpId">
                        </div>
                    </div>
                    <!-- 12th details -->
                    <div class="row bg-light rounded pt-2 mt-2">
                        <div class="col-12">
                            <h6>12th Details</h6>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="hs_board">Board</label>
                            <input type="nubmer" name="hs_board" class="form-control form-control-sm" placeholder="Board" aria-describedby="helpId">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="hs_institute">Institute</label>
                            <input type="nubmer" name="hs_institute" class="form-control form-control-sm" placeholder="Institute" aria-describedby="helpId">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="hs_sub">Subjects</label>
                            <input type="nubmer" name="hs_sub" class="form-control form-control-sm" placeholder="Subjects" aria-describedby="helpId">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="hs_year">Passing Year</label>
                            <input type="nubmer" name="hs_year" class="form-control form-control-sm" placeholder="Passing Year" aria-describedby="helpId">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="hs_percentage">Percentage %</label>
                            <input type="nubmer" name="hs_percentage" class="form-control form-control-sm" placeholder="Percentage" aria-describedby="helpId">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 ml-4">
                            <input type="checkbox" class="form-check-input" name="accept_academic" id="accept_academic">
                            <label class="form-check-label" for="accept_academic">Accept declaretion</label>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <button class="btn btn-sm btn-info">Preview</button>
                        <button id="academic_save" class="btn btn-sm btn-success mx-4">Save</button>
                        <button class="btn btn-sm btn-primary">Next</button>
                    </div>
                </form>
            </div>
            <!-- 3rd Tab -->
            <div class="tab-pane fade" id="nav_document_upload" role="tabpanel" aria-labelledby="document_upload">
                <div class="row">
                    <!-- 10th certificate -->
                    <div class="col-md-4 my-2 bg-light rounded">
                        <form id="hslc_certificate_form" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="1" />
                                <input type="hidden" name="document_name" value="hslc_certificate" />
                                <label for="hslc_certificate">10th Certificate</label>
                                <input type="file" class="form-control-file" name="file" accept=".png, jpg, .jpeg, .PNG, .JPG, .JPEG" />
                                <button class="btn btn-sm btn-success mt-2" type="submit" id="hslc_certificate_submit">Upload</button>
                            </div>
                        </form>
                        <img id="hslc_certificate_img" src="" alt="" style="width: 100%; height: auto;">
                    </div>
                    <!-- 10th marksheet -->
                    <div class="col-md-4 my-2 bg-light rounded">
                        <form id="hslc_marksheet_form" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="1" />
                                <input type="hidden" name="document_name" value="hslc_marksheet" />
                                <label for="hslc_marksheet">10th Marksheet</label>
                                <input type="file" class="form-control-file" name="file" accept=".png, jpg, .jpeg, .PNG, .JPG, .JPEG" />
                                <button class="btn btn-sm btn-success mt-2" type="submit" id="hslc_marksheet_submit">Upload</button>
                            </div>
                        </form>
                        <img id="hslc_marksheet_img" src="" alt="" style="width: 100%; height: auto;">
                    </div>
                    <!-- 12th certificate -->
                    <div class="col-md-4 my-2 bg-light rounded">
                        <form id="hs_certificate_form" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="1" />
                                <input type="hidden" name="document_name" value="hs_certificate" />
                                <label for="hs_certificate">12th Certificate</label>
                                <input type="file" class="form-control-file" name="file" accept=".png, jpg, .jpeg, .PNG, .JPG, .JPEG" />
                                <button class="btn btn-sm btn-success mt-2" type="submit" id="hs_certificate_submit">Upload</button>
                            </div>
                        </form>
                        <img id="hs_certificate_img" src="" alt="" style="width: 100%; height: auto;">
                    </div>
                    <!-- 12th marksheet -->
                    <div class="col-md-4 my-2 bg-light rounded">
                        <form id="hs_marksheet_form" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="1" />
                                <input type="hidden" name="document_name" value="hs_marksheet" />
                                <label for="hs_marksheet">12th Marksheet</label>
                                <input type="file" class="form-control-file" name="file" accept=".png, jpg, .jpeg, .PNG, .JPG, .JPEG" />
                                <button class="btn btn-sm btn-success mt-2" type="submit" id="hs_marksheet_submit">Upload</button>
                            </div>
                        </form>
                        <img id="hs_marksheet_img" src="" alt="" style="width: 100%; height: auto;">
                    </div>
                    <!-- birth cerificate -->
                    <div class="col-md-4 my-2 bg-light rounded">
                        <form id="birth_certificate_form" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="1" />
                                <input type="hidden" name="document_name" value="birth_certificate" />
                                <label for="birth_certificate">Birth Certificate</label>
                                <input type="file" class="form-control-file" name="file" accept=".png, jpg, .jpeg, .PNG, .JPG, .JPEG" />
                                <button class="btn btn-sm btn-success mt-2" type="submit" id="birth_certificate_submit">Upload</button>
                            </div>
                        </form>
                        <img id="birth_certificate_img" src="" alt="" style="width: 100%; height: auto;">
                    </div>
                    <!-- domicial -->
                    <div class="col-md-4 my-2 bg-light rounded">
                        <form id="domicial_form" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="1" />
                                <input type="hidden" name="document_name" value="domicial" />
                                <label for="domicial">Domicial Certificate</label>
                                <input type="file" class="form-control-file" name="file" accept=".png, jpg, .jpeg, .PNG, .JPG, .JPEG" />
                                <button class="btn btn-sm btn-success mt-2" type="submit" id="domicial_submit">Upload</button>
                            </div>
                        </form>
                        <img id="domicial_img" src="" alt="" style="width: 100%; height: auto;">
                    </div>
                    <!-- Caste -->
                    <div class="col-md-4 my-2 bg-light rounded">
                        <form id="caste_certificate_form" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="1" />
                                <input type="hidden" name="document_name" value="caste_certificate" />
                                <label for="caste_certificate">Caste Certificate</label>
                                <input type="file" class="form-control-file" name="file" accept=".png, jpg, .jpeg, .PNG, .JPG, .JPEG" />
                                <button class="btn btn-sm btn-success mt-2" type="submit" id="caste_certificate_submit">Upload</button>
                            </div>
                        </form>
                        <img id="caste_certificate_img" src="" alt="" style="width: 100%; height: auto;">
                    </div>
                    <div class="col-12 mt4">
                        <button class="btn btn-sm btn-info">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modals -->
    <?php
    include_once './PopupModals/basic_info_preview.php';
    ?>
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            loadActiveTab();
            loadBasicInfo();

            //same Address
            $("#same_address").click(function() {
                if ($("#same_address").is(":checked")) {
                    $("textarea[name='permanent_address']").val($("textarea[name='current_address']").val());
                    $("input[name='permanent_city']").val($("input[name='current_city']").val());
                    $("input[name='permanent_state']").val($("input[name='current_state']").val());
                    $("input[name='permanent_postal_code']").val($("input[name='current_postal_code']").val());
                    $("input[name='permanent_country']").val($("input[name='current_country']").val());
                }
            });

            //basic info preview
            $('#basic_info_preview').click(() => {
                event.preventDefault();
                //alert("Basic Preview");
                // let basicFormData = $('#basic_info_form').serializeArray();
                // console.log(basicFormData);
                $('#preview_full_name').html($("input[name='name']").val());
                $('#preview_date_of_birth').html($("input[name='date_of_birth']").val());
                $('#preview_contact_number').html($("input[name='contact_number']").val());
                $('#preview_gender').html($("input[name='gender']:checked").val());
                $('#preview_caste').html($("input[name='caste']:checked").val());
                $('#preview_nationality').html($("input[name='nationality']").val());
                $('#preview_current_address').html($("textarea[name='current_address']").val());
                $('#preview_current_city').html($("input[name='current_city']").val());
                $('#preview_current_state').html($("input[name='current_state']").val());
                $('#preview_current_postal_code').html($("input[name='current_postal_code']").val());
                $('#preview_current_country').html($("input[name='current_country']").val());
                $('#preview_permanent_address').html($("textarea[name='permanent_address']").val());
                $('#preview_permanent_city').html($("input[name='permanent_city']").val());
                $('#preview_permanent_state').html($("input[name='permanent_state']").val());
                $('#preview_permanent_postal_code').html($("input[name='permanent_postal_code']").val());
                $('#preview_permanent_country').html($("input[name='permanent_country']").val());

                $('#basic_info_preview_modal').modal('show');
            });

            //basic info Next
            $('#basic_info_next').click(() => {
                event.preventDefault();
                alert("Basic Next");
            });

            //basic info Save
            $('#basic_info_save').click(() => {
                event.preventDefault();
                if ($("#accept_basic").prop('checked') == true) {
                    $.ajax({
                        type: "POST",
                        url: "./handler/basic_info.php",
                        data: $('#basic_info_form').serialize(),
                        dataType: "JSON",
                        success: function(response) {
                            var error = response.error;
                            var errorOutput = '';

                            if (response.success) {
                                errorOutput = '';
                                $('#show_errors').html(' ');
                                alert("Data saved successfully");
                                loadBasicInfo();
                                return;
                            }

                            if (error.length > 0) {
                                error.map((error) => {
                                    errorOutput += `<div class='alert alert-danger mb-1' role='alert'>${error}</div>`;
                                    //console.log(error);
                                })
                            } else {
                                errorOutput = '';
                            }
                            $('#show_errors').html(errorOutput);
                        }
                    });
                } else {
                    $('#show_errors').html(`<div class='alert alert-danger mb-1' role='alert'>You should Accept declaration</div>`);
                }
            });


            //Academic info Save
            $('#academic_save').click(() => {
                event.preventDefault();
                if ($("#accept_academic").prop('checked') == true) {
                    $.ajax({
                        type: "POST",
                        url: "./handler/academic_details.php",
                        data: $('#academic_form').serialize(),
                        dataType: "JSON",
                        success: function(response) {
                            // console.log(response);
                            var error = response.error;
                            var errorOutput = '';

                            if (response.success) {
                                errorOutput = '';
                                $('#show_errors').html(' ');
                                alert("Data saved successfully");
                                loadBasicInfo();
                                return;
                            }

                            if (error.length > 0) {
                                error.map((error) => {
                                    errorOutput += `<div class='alert alert-danger mb-1' role='alert'>${error}</div>`;
                                    //console.log(error);
                                })
                            } else {
                                errorOutput = '';
                            }
                            $('#show_errors').html(errorOutput);
                        }
                    });
                } else {
                    $('#show_errors').html(`<div class='alert alert-danger mb-1' role='alert'>You should Accept declaration</div>`);
                }
            });

            //hslc certificate
            $('#hslc_certificate_submit').click(() => {
                event.preventDefault();
                let formData = new FormData($("#hslc_certificate_form")[0]);
                //let formId = '#hslc_certificate_submit';
                imageProcess(formData);
            });
            //hslc marksheet
            $('#hslc_marksheet_submit').click(() => {
                event.preventDefault();
                let formData = new FormData($("#hslc_marksheet_form")[0]);
                //let formId = '#hslc_marksheet_form';
                imageProcess(formData);
            });
            //hs certificate
            $('#hs_certificate_submit').click(() => {
                event.preventDefault();
                let formData = new FormData($("#hs_certificate_form")[0]);
                //let formId = '#hslc_marksheet_form';
                imageProcess(formData);
            });
            //hs marksheet
            $('#hs_marksheet_submit').click(() => {
                event.preventDefault();
                let formData = new FormData($("#hs_marksheet_form")[0]);
                //let formId = '#hslc_marksheet_form';
                imageProcess(formData);
            });
            //birth certificate
            $('#birth_certificate_submit').click(() => {
                event.preventDefault();
                let formData = new FormData($("#birth_certificate_form")[0]);
                //let formId = '#hslc_marksheet_form';
                imageProcess(formData);
            });
            //Domicial
            $('#domicial_submit').click(() => {
                event.preventDefault();
                let formData = new FormData($("#domicial_form")[0]);
                //let formId = '#hslc_marksheet_form';
                imageProcess(formData);
            });
            //Caste certificate
            $('#caste_certificate_submit').click(() => {
                event.preventDefault();
                let formData = new FormData($("#caste_certificate_form")[0]);
                //let formId = '#hslc_marksheet_form';
                imageProcess(formData);
            });

            const imageProcess = (data) => {
                //$(`${formId} .progress`).show();

                $.ajax({
                    type: "POST",
                    url: "./handler/documents.php",
                    data: data,
                    processData: false,
                    contentType: false,
                    xhr: function() {
                        var xhr = $.ajaxSettings.xhr();
                        xhr.upload.onprogress = function(e) {
                            var percentage = Math.floor(e.loaded / e.total * 100);
                            //console.log(percentage);
                            //$(`${formId} .progress-bar`).css('width', percentage + '%');
                            //$(`${formId} .progress-bar`).html(percentage + '%');
                        };
                        return xhr;
                    },
                    success: function(response) {
                        //loadAllImages();
                        alert(response);
                        loadBasicInfo();
                    },
                    complete: function() {
                        // $(".progress").hide();
                        // $(".progress-bar").css('width', '0%');
                        // $(".progress-bar").html('0%');
                        // $("#image-form")[0].reset();
                    }
                });
            }
        });

        //load active tab
        const loadActiveTab = () => {
            $.ajax({
                type: "POST",
                dataType: 'JSON',
                url: "./handler/formHandler.php",
                data: {
                    user_id: 1,
                    getActiveTab: 'getActiveTab'
                },
                success: function(response) {
                    //console.log(response);
                    if (response.academic) {
                        $('#academic_details').removeClass('inactive_tab');
                        $('#academic_details').attr('data-toggle', 'tab');
                        $('#academic_details').attr('href', '#nav_academic_details');
                    }
                    if (response.document) {
                        $('#document_upload').removeClass('inactive_tab');
                        $('#document_upload').attr('data-toggle', 'tab');
                        $('#document_upload').attr('href', '#nav_document_upload');
                        documentTab = true;
                    }
                }
            });
        }



        //load data
        const loadBasicInfo = () => {
            $.ajax({
                type: "POST",
                url: "./handler/formHandler.php",
                data: {
                    getBasic: 'getBasic',
                    user_id: 1
                },
                dataType: "json",
                success: function(response) {
                    if (response.data) {
                        let data = response.data[0];
                        //console.log(data[0]);
                        $("input[name='name']").val(data.name);
                        $("input[name='date_of_birth']").val(data.dob);
                        $("input[name='contact_number']").val(data.number);
                        $(`input[name='gender'][value=${data.gender}]`).prop("checked", true);
                        $(`input[name='caste'][value=${data.caste}]`).prop("checked", true);
                        $("input[name='nationality']").val(data.nationality);
                        $("textarea[name='current_address']").val(data.current_address);
                        $("input[name='current_city']").val(data.current_city);
                        $("input[name='current_state']").val(data.current_city);
                        $("input[name='current_postal_code']").val(data.current_postal_code);
                        $("input[name='current_country']").val(data.current_country);
                        $("textarea[name='permanent_address']").val(data.permanent_address);
                        $("input[name='permanent_city']").val(data.permanent_city);
                        $("input[name='permanent_state']").val(data.permanent_state);
                        $("input[name='permanent_postal_code']").val(data.permanent_postal_code);
                        $("input[name='permanent_country']").val(data.permanent_country);
                    }
                }
            });

            //load accademic
            $.ajax({
                type: "POST",
                url: "./handler/formHandler.php",
                data: {
                    getAccademic: 'getAccademic',
                    user_id: 1
                },
                dataType: "json",
                success: function(response) {
                    if (response.data) {
                        let data = response.data[0];
                        //console.log(data);
                        $("input[name='user_id']").val(data.user_id);
                        $("input[name='hslc_board']").val(data.hslc_board);
                        $("input[name='hslc_institute']").val(data.hslc_institute);
                        $("input[name='hslc_sub']").val(data.hslc_sub);
                        $("input[name='hslc_year']").val(data.hslc_year);
                        $("input[name='hslc_percentage']").val(data.hslc_percentage);
                        $("input[name='hs_board']").val(data.hs_board);
                        $("input[name='hs_institute']").val(data.hs_institute);
                        $("input[name='hs_sub']").val(data.hs_sub);
                        $("input[name='hs_year']").val(data.hs_year);
                        $("input[name='hs_percentage']").val(data.hs_percentage);
                    }
                }
            });

            //load document
            hslc_certificate_img
            $.ajax({
                type: "POST",
                url: "./handler/formHandler.php",
                data: {
                    getDoc: 'getDoc',
                    user_id: 1
                },
                dataType: "json",
                success: function(response) {
                    if (response.data) {
                        let data = response.data[0];
                        console.log(data);
                        if (data.hslc_certificate != null) {
                            $('#hslc_certificate_img').attr('src', './uploadedDocuments/' + data.hslc_certificate);
                        }
                        if (data.hslc_marksheet != null) {
                            $('#hslc_marksheet_img').attr('src', './uploadedDocuments/' + data.hslc_marksheet);
                        }
                        if (data.hs_certificate != null) {
                            $('#hs_certificate_img').attr('src', './uploadedDocuments/' + data.hs_certificate);
                        }
                        if (data.hs_marksheet != null) {
                            $('#hs_marksheet_img').attr('src', './uploadedDocuments/' + data.hs_marksheet);
                        }
                        if (data.birth_certificate != null) {
                            $('#birth_certificate_img').attr('src', './uploadedDocuments/' + data.birth_certificate);
                        }
                        if (data.domicial != null) {
                            $('#domicial_img').attr('src', './uploadedDocuments/' + data.domicial);
                        }
                        if (data.caste_certificate != null) {
                            $('#caste_certificate_img').attr('src', './uploadedDocuments/' + data.caste_certificate);
                        }
                    }
                }
            });
        }
    </script>
</body>

</html>