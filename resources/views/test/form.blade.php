<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Permit Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .container-custom {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            /*background-color: #f0f0f0;*/
        }
        .contact {
            /*background-color: #fff;*/
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 900px;
        }
        .contact .form-wrapper {
            flex: 1;
        }
        .contact .image-wrapper img {
            max-width: 100%;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <div class="container-fluid container-custom">
        <section class="contact mt-4 row">
            <div class="col-md-8 form-wrapper">
                <div class="contact-heading">
                    <h1>طلب تصريح سفر لجمهورية مصر العربية</h1>
                    <p class="text">or Reach Us via Email : <a href="mailto:info@yearex.com">info@yearex.com</a></p>
                </div>

                <form action="{{ route('saveData') }}" method="post" class="contact-form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">الاسم الاول</label>
                        <input aria-autocomplete="none" type="text" name="first_name" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="last_name">الاسم الثاني</label>
                        <input type="text" name="second_name" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="middle_name">الاسم الاوسط</label>
                        <input aria-autocomplete="none" type="text" name="middle_name" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="surname">الاسم الاخير</label>
                        <input type="text" name="last_name" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="birth_date">تاريخ الميلاد</label>
                        <input type="date" name="birth_date" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="birth_place">مكان الميلاد</label>
                        <input type="text" name="birth_place" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="gender">اختر النوع</label>
                        <select name="gender" class="form-control">
                            <option value="لم يتم اختيار">اختر النوع</option>
                            <option value="male">ذكر</option>
                            <option value="female">انثي</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="country">اختر مكان المنشأ</label>
                        <select name="country" class="form-control" required>
                            <option value="لم يتم اختيار">اختر مكان المنشأ</option>
                            <option value="egypt">مصر</option>
                            <option value="yamen">اليمن</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nationality">الجنسية</label>
                        <input type="text" name="nationality" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="passport_number">رقم جواز السفر</label>
                        <input type="text" name="passport_number" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="passport_date">تاريخ اصدار جواز السفر *</label>
                        <input type="date" name="passport_date" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="passport_expire_date">تاريخ انتهاء جواز السفر *</label>
                        <input type="date" name="passport_expire_date" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="passport_type">اختار نوع جواز السفر</label>
                        <select name="passport_type" class="form-control" required>
                            <option value="لم يتم اختيار">اختار نوع جواز السفر</option>
                            <option value="regular">عادي</option>
                            <option value="Irregular">غير عادي</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="passport_issue_place">مكان اصدار جواز السفر</label>
                        <input type="text" name="passport_issue_place" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="mobile_number">رقم الهاتف الشخصي</label>
                        <input type="text" name="mobile_number" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="email">البريد الالكتروني</label>
                        <input type="email" name="email" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="emergency_contact_name">اسم شخص في حالة الطوارئ</label>
                        <input type="text" name="emergency_contact_name" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="emergency_contact_country">بلد الشخص في حالة الطوارئ</label>
                        <input type="text" name="emergency_contact_country" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="emergency_contact_city">منطقة الشخص في حالة الطوارئ</label>
                        <input type="text" name="emergency_contact_city" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="emergency_contact_address">عنوان الشخص في حالة الطوارئ</label>
                        <input type="text" name="emergency_contact_address" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="emergency_contact_home_phone">رقم هاتف المنزل في حالة الطوارئ</label>
                        <input type="text" name="emergency_contact_home_phone" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="emergency_contact_mobile_phone">رقم هاتف  في حالة الطوارئ</label>
                        <input type="text" name="emergency_contact_mobile_phone" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="emergency_contact_postal_code">في حالة الطوارئ الرقم البريدي للمنزل</label>
                        <input type="text" name="emergency_contact_postal_code" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="emergency_contact_postal_box">في حالة الطوارئ رقم الصندوق البريدي</label>
                        <input type="text" name="emergency_contact_postal_box" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="emergency_contact_email">البريد الالكتروني للشخص في حالة الطوارئ</label>
                        <input type="text" name="emergency_contact_email" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="profession">المهنة</label>
                        <input type="text" name="profession" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="currnet_job_title">اللقب الحالي</label>
                        <input type="text" name="currnet_job_title" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="entry_port">منفذ الدخول</label>
                        <input type="text" name="entry_port" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="entry_type">اختار طريقة الدخول</label>
                        <select name="entry_type" class="form-control">
                            <option value="لم يتم اختيار">اختار طريقة الدخول</option>
                            <option value="by air">By Air</option>
                            <option value="BY Ship">By Ship</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="entry_date">موعد الدخول</label>
                        <input type="date" name="entry_date" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="profile_image">
                            <i class="fa-solid fa-paperclip"></i> صورة الهوية الشخصية
                        </label>
                        <input type="file" name="profile_image" class="form-control-file">
                    </div>

                    <div class="form-group">
                        <label for="passport_image">
                            <i class="fa-solid fa-paperclip"></i> صورة جواز السفر اليمني
                        </label>
                        <input type="file" name="passport_image" class="form-control-file">
                    </div>

                    <div class="form-group">
                        <label for="last_reachToEgypt_image">
                            <i class="fa-solid fa-paperclip"></i> صورة آخر وصول لجمهورية مصر العربية بجواز السفر ودولة السفر
                        </label>
                        <input type="file" name="last_reachToEgypt_image" class="form-control-file">
                    </div>

                    <div class="form-group">
                        <label for="last_coming_date_to_egypt">اخر ميعاد زيارة لمصر</label>
                        <input type="date" name="last_coming_date_to_egypt" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="last_coming_country_from">من اين اتيت اخر مرة لزيارة مصر (اكتب دولة)</label>
                        <input type="text" name="last_coming_country_from" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="cause_of_visiting">اختار سبب الحضور لمصر</label>
                        <select name="cause_of_visiting" class="form-control">
                            <option value="لم يتم اختيار">اختار سبب الحضور لمصر</option>
                            <option value="tourism">سياحة</option>
                            <option value="treatment">علاج</option>
                            <option value="study">دراسه</option>
                            <option value="investment">إستثمار</option>
                            <option value="another">سبب اخر</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="friend_address">عنوان صديق او قريب لك في مصر</label>
                        <input type="text" name="friend_address" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="friend_phone">رقم هاتف صديق او قريب لك من مصر</label>
                        <input type="text" name="friend_phone" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="number_of_visits">عدد مرات زيارة مصر بالتواريخ منذ 2011</label>
                        <textarea name="number_of_visits" cols="30" rows="10" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="security_problem">هل سبق وتعرضت لمشكلة امنيه في مصر وماسببها</label>
                        <textarea name="security_problem" cols="30" rows="10" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="residence">اختار مكان اقامتك في مصر إن وجد</label>
                        <select name="residence" class="form-control">
                            <option value="لم يتم اختيار">اختار مكان اقامتك في مصر إن وجد</option>
                            <option value="hotel">فندق</option>
                            <option value="apartment">شقة</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="ارسال الطلب" class="btn btn-primary">
                    </div>
                </form>
            </div>

            <div class="col-md-4 image-wrapper">
                <img src="{{ asset('assets') }}/imgs/Yearex-Group_fav.png" alt="Image">
            </div>
        </section>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

@if(Session::has('success'))
    <script>
        toastr.success("{{ Session::get('success') }}");
    </script>
@endif

</html>
