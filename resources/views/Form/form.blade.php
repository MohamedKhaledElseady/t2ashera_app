<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" href="{{ asset('assets/imgs/Yearex-Group_fav.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            text-align: right;
        }
        .top-left-image {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 100px; /* Adjust the size as needed */
            height: auto;
        }
        .card {
            background-color: white;
        }
        .card-header {
            background-color: #fffefe; /* Mauve color */
            color: #df6ac4;
        }
    </style>
</head>
<body >

    <div class="container">

        <!-- Row for the image at the top left -->
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('assets/imgs/Yearex-Group_fav.png') }}" alt="Image" class="top-left-image">
            </div>
        </div>
{{--        End Row For the image --}}
        <div class="row justify-content-center">

        <div class="col-md-8 form-container">
            <form action="{{ route('saveData') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">

                    <div class="card mt-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            المرفقات
                            <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#attachmentsCard" aria-expanded="true" aria-controls="attachmentsCard">
                                <span>&#x25BC;</span>
                            </button>
                        </div>
                        <div class="card-body collapse show" id="attachmentsCard">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="profilePictureInput">الصورة الشخصية <span style="color: red">*</span></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="profilePictureInput" aria-describedby="profilePictureHelp" name="profile_image">
                                        <label for="profilePictureInput" class="custom-file-label">اختار الملف </label>
                                        <small id="profilePictureHelp" class="form-text text-muted">Allowed image extensions are: (.png, .jpg, .jpeg). Maximum image size is 2MB.</small>
                                        @error('profile_image')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="passportScanInput">صورة لجواز السفر <span style="color: red">*</span></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="passportScanInput" aria-describedby="passportScanHelp" name="passport_image">
                                        <label for="passportScanInput" class="custom-file-label">اختار الملف</label>
                                        <small id="passportScanHelp" class="form-text text-muted">Allowed image extensions are: (.png, .jpg, .jpeg). Maximum image size is 2MB.</small>
                                        @error('passport_image')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            معلومات جواز السفر
                            <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#passportInfoCard" aria-expanded="true" aria-controls="passportInfoCard">
                                <span>&#x25BC;</span>
                            </button>
                        </div>
                        <div class="card-body collapse show" id="passportInfoCard">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="firstNameEnglishInput">الاسم الاول (الانجليزية) <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="firstNameEnglishInput" required name="first_name">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="secondNameEnglishInput">الاسم الثاني (الانجليزية)</label>
                                    <input type="text" class="form-control" id="secondNameEnglishInput" name="second_name">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="middleNameEnglishInput">الاسم الاوسط (الانجليزية)</label>
                                    <input type="text" class="form-control" id="middleNameEnglishInput" name="middle_name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="lastNameEnglishInput">الاسم الاخير (الانجليزية) <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="lastNameEnglishInput" required name="last_name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="dateOfBirthInput">تاريخ الميلاد <span style="color: red">*</span></label>
                                    <input type="date" class="form-control" id="dateOfBirthInput" required name="birth_date">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="birthPlaceInput">مكان الميلاد <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="birthPlaceInput" required name="birth_place">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="genderSelect">النوع <span style="color: red">*</span></label>
                                    <select name="gender" id="genderSelect" class="form-control">
                                        <option value="" selected>اختار النوع الموجود في جواز السفر</option>
                                        <option value="male">ذكر</option>
                                        <option value="female">انثى</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="birthPlaceInput">الجنسية <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="birthPlaceInput" required name="nationality">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="countrySelect">مكان المنشأ <span style="color: red">*</span></label>
                                    <select name="country" id="countrySelect" class="form-control">
                                        <option value="" selected>اختار مكان المنشأ</option>
                                        <option value="yamen">اليمن</option>
                                        <option value="egypt">مصر</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="passportNumberInput">رقم جواز السفر <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="passportNumberInput" required name="passport_number">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="passportDateInput">تاريخ اصدار جواز السفر <span style="color: red">*</span></label>
                                    <input type="date" class="form-control" id="passportDateInput" required name="passport_date">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="passportExpireDateInput">تاريخ انتهاء جواز السفر <span style="color: red">*</span></label>
                                    <input type="date" class="form-control" id="passportExpireDateInput" required name="passport_expire_date">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="passportTypeSelect">نوع جواز السفر <span style="color: red">*</span></label>
                                    <select name="passport_type" id="passportTypeSelect" class="form-control">
                                        <option value="" selected>اختار نوع جواز السفر</option>
                                        <option value="regular">عادي</option>
                                        <option value="Irregular">غير عادي</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="passportIssuePlaceInput">مكان اصدار جواز السفر <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="passportIssuePlaceInput" required name="passport_issue_place">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="mobileNumberInput">رقم الهاتف <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="mobileNumberInput" required name="mobile_number">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="emailInput">البريد الإلكتروني <span style="color: red">*</span></label>
                                    <input type="email" class="form-control" id="emailInput" required name="email">
                                </div>
                            </div>
                        </div> <!-- End card-body -->
                    </div> <!-- End card -->


                    <div class="card mt-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            معلومات التواصل
                            <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#contactInfoCard" aria-expanded="true" aria-controls="passportInfoCard">
                                <span>&#x25BC;</span>
                            </button>
                        </div>
                        <div class="card-body collapse show" id="contactInfoCard">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="firstNameEnglishInput">اسم في حالة الطوارئ <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="firstNameEnglishInput" required name="emergency_contact_name">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="secondNameEnglishInput"> في حالة الطوارئ بلد الشخص</label>
                                    <input type="text" class="form-control" id="secondNameEnglishInput" name="emergency_contact_country">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="middleNameEnglishInput">منطقة الشخص في حالة الطوارئ</label>
                                    <input type="text" class="form-control" id="middleNameEnglishInput" name="emergency_contact_city">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="lastNameEnglishInput"> عنوان الشخص في حالة الطوارئ <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="lastNameEnglishInput" required name="emergency_contact_address">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="dateOfBirthInput">بريد الالكتروني للشخص في حالة الطوارئ <span style="color: red">*</span></label>
                                    <input type="email" class="form-control" id="dateOfBirthInput" required name="emergency_contact_email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="birthPlaceInput">رقم هاتف المنزل في حالة الطوارئ <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="birthPlaceInput" required name="emergency_contact_home_phone">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="birthPlaceInput">رقم الهاتف في حالة الطوارئ <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="birthPlaceInput" required name="emergency_contact_mobile_phone">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="birthPlaceInput"> في حالة الطوارئ رقم البريدي (Postal Code) <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="birthPlaceInput" required name="emergency_contact_postal_code">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="birthPlaceInput"> في حالة الطوارئ الصندوق البريدي (Postal Box) <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="birthPlaceInput" required name="emergency_contact_postal_box">
                                </div>

                            </div>
                        </div> <!-- End card-body -->
                    </div> <!-- End card -->

                    <div class="card mt-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            المعلومات الوظيفية ومعلومات السفر
                            <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#jobInfoCard" aria-expanded="true" aria-controls="passportInfoCard">
                                <span>&#x25BC;</span>
                            </button>
                        </div>
                        <div class="card-body collapse show" id="jobInfoCard">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstNameEnglishInput">المهنة <span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="firstNameEnglishInput" required name="profession">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="firstNameEnglishInput"><span style="color: red">*</span> اللقب الوظيفي الحالي</label>
                                    <input type="text" class="form-control" id="firstNameEnglishInput" required name="currnet_job_title">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="sa"> Entry Type <span style="color: red">*</span></label>
                                    <select name="entry_type" id="sa" class="form-control">
                                        <option value="">Choose </option>
                                        <option value="by air">By Air</option>
                                        <option value="BY Ship">By Ship </option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="dateOfBirthInput">منفذ الدخول<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="dateOfBirthInput" required name="entry_port">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="dateOfBirthInput"> موعد الدخول <span style="color: red">*</span></label>
                                    <input type="date" class="form-control" id="dateOfBirthInput" required name="entry_date">
                                </div>

                            </div>
                        </div> <!-- End card-body -->
                    </div> <!-- End card -->



                </div> <!-- End col-md-8 -->

                <div class="col-md-6 mb-3 mt-3">
                    <button class="btn btn-primary" type="submit" value="Submit">اضافة طلب</button>
                </div>
            </form>
        </div>

        </div> <!-- End row justify-content-center -->
    </div> <!-- End container -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script></body>

    @if(Session::has('success'))
        <script>
            toastr.success("{{ Session::get('success') }}");
        </script>
    @endif

</html>

{{--

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        مرفقات
                        <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#attachmentsCard" aria-expanded="true" aria-controls="attachmentsCard">
                            <span>&#x25BC;</span>
                        </button>
                    </div>
                    <div class="card-body collapse show" id="attachmentsCard">
                        <div class="row">
                            <!-- Image Container -->
                            <div class="col-md-6 image-container">
                            </div>
                            <!-- Form Container -->
                            <div class="col-md-6 form-container">
                                <form action="{{ route('saveData') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12 mb-3">
                                        <label for="profilePictureInput">الصورة الشخصية <span style="color: red">*</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="profilePictureInput" aria-describedby="profilePictureHelp" name="profile_image">
                                            <label for="profilePictureInput" class="custom-file-label">اختار الملف</label>
                                            <small id="profilePictureHelp" class="form-text text-muted">Allowed image extensions are: (.png, .jpg, .jpeg). Maximum image size is 2MB.</small>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="passportScanInput">صورة لجواز السفر <span style="color: red">*</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="passportScanInput" aria-describedby="passportScanHelp" name="passport_image">
                                            <label for="passportScanInput" class="custom-file-label">اختار الملف</label>
                                            <small id="passportScanHelp" class="form-text text-muted">Allowed image extensions are: (.png, .jpg, .jpeg). Maximum image size is 2MB.</small>
                                        </div>
                                    </div>
                                    <!-- Add more form fields as needed -->
                                    <div class="col-md-12 mb-3 mt-3">
                                        <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
                                    </div>
                                </form>
                            </div> <!-- End Form Container -->
                        </div> <!-- End row -->
                    </div> <!-- End card-body -->
                </div> <!-- End card -->
            </div> <!-- End col-md-12 -->
        </div> <!-- End row justify-content-center -->
    </div> <!-- End container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> --}}
