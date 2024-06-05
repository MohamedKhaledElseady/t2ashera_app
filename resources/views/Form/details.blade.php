<!DOCTYPE html>
<html lang="ar" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All data</title>
    <link rel="shortcut icon" href="{{ asset('assets/imgs/Yearex-Group_fav.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
<header>
    <nav class="navbar bg-dark  navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/imgs/Yearex-Group_fav.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Yearex
            </a>
        </div>
    </nav>
</header>

<div class="container mt-5">
    <div class="row">
        <div class="row justify-content-center">

            <div class="col-md-8 form-container">
                <form action="{{ route('data.acceptRequest' , $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="col-md-16">

                        <div class="container mt-5">
                            <div class="card">
                                <div class="card-header">
                                    المرفقات
                                    <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#attachmentCard" aria-expanded="true" aria-controls="attachmentCard">
                                        <span>&#x25BC;</span>
                                    </button>
                                </div>
                                <div class="card-body collapse show" id="attachmentCard">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{ $data->profile }}" alt="Profile Image" class="img-fluid rounded" style="max-width: 200px;">
                                            <input type="hidden" name="profile_image" value="{{ $data->profile_image }}">
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{ $data->passport }}" alt="Passport Scan" class="img-fluid rounded" style="max-width: 200px;">
                                            <input type="hidden" name="passport_image" value="{{ $data->passport_image }}">
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
                                        <input type="text" class="form-control" id="firstNameEnglishInput" required name="first_name" readonly value="{{ $data->first_name }}">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="secondNameEnglishInput">الاسم الثاني (الانجليزية)</label>
                                        <input type="text" class="form-control" id="secondNameEnglishInput" name="second_name" readonly value="{{ $data->second_name }}">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="middleNameEnglishInput">الاسم الاوسط (الانجليزية)</label>
                                        <input type="text" class="form-control" id="middleNameEnglishInput" name="middle_name" readonly value="{{ $data->middle_name }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="lastNameEnglishInput">الاسم الاخير (الانجليزية) <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="lastNameEnglishInput" required name="last_name" readonly value="{{ $data->last_name }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="dateOfBirthInput">تاريخ الميلاد <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="dateOfBirthInput" required name="birth_date" readonly value="{{ $data->birth_date->format("Y M d") }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="birthPlaceInput">مكان الميلاد <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="birthPlaceInput" required name="birth_place" readonly value="{{ $data->birth_place }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="genderSelect">النوع <span style="color: red">*</span></label>
                                        <select name="gender" id="genderSelect" class="form-control" readonly>
                                            <option value="" {{ $data->gender == '' ? 'selected' : '' }}>اختار النوع الموجود في جواز السفر</option>
                                            <option value="male" {{ $data->gender == 'male' ? 'selected' : '' }}>ذكر</option>
                                            <option value="female" {{ $data->gender == 'female' ? 'selected' : '' }}>انثى</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="birthPlaceInput">الجنسية <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="birthPlaceInput" required name="nationality" readonly value="{{ $data->nationality }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="countrySelect">مكان المنشأ <span style="color: red">*</span></label>
                                        <select name="country" id="countrySelect" class="form-control" readonly>
                                            <option value="" {{ $data->country == '' ? 'selected' : '' }}>اختار مكان المنشأ</option>
                                            <option value="yaman" {{ $data->country == 'yaman' ? 'selected' : '' }}>اليمن</option>
                                            <option value="egypt" {{ $data->country == 'egypt' ? 'selected' : '' }}>مصر</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="passportNumberInput">رقم جواز السفر <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="passportNumberInput" required name="passport_number" readonly value="{{ $data->passport_number }}">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="passportDateInput">تاريخ اصدار جواز السفر <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="passportDateInput" required name="passport_date" readonly value="{{ $data->passport_date->format('Y M d') }}">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="passportExpireDateInput">تاريخ انتهاء جواز السفر <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="passportExpireDateInput" required name="passport_expire_date" readonly value="{{ $data->passport_expire_date->format('Y M d') }}">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="passportTypeSelect">نوع جواز السفر <span style="color: red">*</span></label>
                                        <select name="passport_type" id="passportTypeSelect" class="form-control" readonly>
                                            <option value="" {{ $data->passport_type == '' ? 'selected' : '' }}>اختار نوع جواز السفر</option>
                                            <option value="regular" {{ $data->passport_type == 'regular' ? 'selected' : '' }}>عادي</option>
                                            <option value="Irregular" {{ $data->passport_type == 'Irregular' ? 'selected' : '' }}>غير عادي</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="passportIssuePlaceInput">مكان اصدار جواز السفر <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="passportIssuePlaceInput" required name="passport_issue_place" readonly value="{{ $data->passport_issue_place }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="mobileNumberInput">رقم الهاتف <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="mobileNumberInput" required name="mobile_number" readonly value="{{ $data->mobile_number }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="emailInput">البريد الإلكتروني <span style="color: red">*</span></label>
                                        <input type="email" class="form-control" id="emailInput" required name="email" readonly value="{{ $data->email }}">
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
                                        <input type="text" class="form-control" id="firstNameEnglishInput" required name="emergency_contact_name" readonly value="{{ $data->emergency_contact_name }}">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="secondNameEnglishInput"> في حالة الطوارئ بلد الشخص</label>
                                        <input type="text" class="form-control" id="secondNameEnglishInput" name="emergency_contact_country" readonly value="{{ $data->emergency_contact_country }}">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="middleNameEnglishInput">منطقة الشخص في حالة الطوارئ</label>
                                        <input type="text" class="form-control" id="middleNameEnglishInput" name="emergency_contact_city" readonly value="{{ $data->emergency_contact_city }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="lastNameEnglishInput"> عنوان الشخص في حالة الطوارئ <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="lastNameEnglishInput" required name="emergency_contact_address" readonly value="{{ $data->emergency_contact_address }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="dateOfBirthInput">بريد الالكتروني للشخص في حالة الطوارئ <span style="color: red">*</span></label>
                                        <input type="email" class="form-control" id="dateOfBirthInput" required name="emergency_contact_email" readonly value="{{ $data->emergency_contact_email }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="birthPlaceInput">رقم هاتف المنزل في حالة الطوارئ <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="birthPlaceInput" required name="emergency_contact_home_phone" readonly value="{{ $data->emergency_contact_home_phone }}">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="birthPlaceInput">رقم الهاتف في حالة الطوارئ <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="birthPlaceInput" required name="emergency_contact_mobile_phone" readonly value="{{ $data->emergency_contact_mobile_phone }}">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="birthPlaceInput"> في حالة الطوارئ رقم البريدي (Postal Code) <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="birthPlaceInput" required name="emergency_contact_postal_code" readonly value="{{ $data->emergency_contact_postal_code }}">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="birthPlaceInput"> في حالة الطوارئ الصندوق البريدي (Postal Box) <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="birthPlaceInput" required name="emergency_contact_postal_box" readonly value="{{ $data->emergency_contact_postal_box }}">
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
                                        <input type="text" class="form-control" id="firstNameEnglishInput" required name="profession" readonly value="{{ $data->profession }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="firstNameEnglishInput"><span style="color: red">*</span> اللقب الوظيفي الحالي</label>
                                        <input type="text" class="form-control" id="firstNameEnglishInput" required name="currnet_job_title" readonly value="{{ $data->currnet_job_title }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="sa"> Entry Type <span style="color: red">*</span></label>

                                        <select name="entry_type" id="entryTypeSelect" class="form-control" readonly>
                                            <option value="" {{ $data->entry_type == '' ? 'selected' : '' }}>Choose</option>
                                            <option value="by air" {{ $data->entry_type == 'by air' ? 'selected' : '' }}>By Air</option>
                                            <option value="BY Ship" {{ $data->entry_type == 'BY Ship' ? 'selected' : '' }}>By Ship</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="dateOfBirthInput">منفذ الدخول<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="dateOfBirthInput" required name="entry_port" readonly value="{{ $data->entry_port }}">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="dateOfBirthInput"> موعد الدخول <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="dateOfBirthInput" required name="entry_date" readonly value="{{ $data->entry_date }}">
                                    </div>

                                </div>
                            </div> <!-- End card-body -->
                        </div> <!-- End card -->



                    </div> <!-- End col-md-8 -->

                    <div class="col-md-6 mb-3 mt-3">
                        <button class="btn btn-primary" type="submit" value="Submit"> قبول الطلب</button>
                        <a href="{{ route('data.rejectRequest' , $data->id) }}" class="btn btn-danger" type="submit" value="Submit"> رفض الطلب</a>
                    </div>
                </form>
            </div>

        </div> <!-- End row justify-content-center -->

    </div>
</div> <!-- End container -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const genderSelect = document.getElementById('genderSelect');
        genderSelect.addEventListener('mousedown', (e) => {
            e.preventDefault();
            // Optionally, show an alert or message
            alert('This field is readonly.');
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const countrySelect = document.getElementById('countrySelect');
        countrySelect.addEventListener('mousedown', (e) => {
            e.preventDefault();
            // Optionally, show an alert or message
            alert('This field is readonly.');
        });
    });

        document.addEventListener('DOMContentLoaded', (event) => {
        const passportTypeSelect = document.getElementById('passportTypeSelect');
        passportTypeSelect.addEventListener('mousedown', (e) => {
        e.preventDefault();
        // Optionally, show an alert or message
        alert('This field is readonly.');
    });
    });
    document.addEventListener('DOMContentLoaded', (event) => {
        const entryTypeSelect = document.getElementById('entryTypeSelect');
        entryTypeSelect.addEventListener('mousedown', (e) => {
            e.preventDefault();
            // Optionally, show an alert or message
            alert('This field is readonly.');
        });
    });

</script>
</body>
</html>
