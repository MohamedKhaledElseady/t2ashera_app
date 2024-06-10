<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>طلب تصريح سفر لجمهورية مصر العربية</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<header id="navbar">
    <div class="container">
        <ul>
            <li>
                <a href="#" class="logo">
                    <div class="imges">
                        <img src="{{ asset('assets') }}/imgs/Yearex-Group_fav.png" alt="yearex" class="logo-forDark">
                        <img src="{{ asset('assets') }}/imgs/Yearex-Group_fav.png" alt="yearex" class="logo-forLight">
                    </div>
                    <h2>Yearex Group<span>.</span></h2>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">Home</a>
            </li>
            <li>
                <a href="#" class="nav-link">Join</a>
            </li>
        </ul>
    </div>
</header>

<div class="content-wrapper">
<main>
    <section class="contact mt-4">
        <div class="container">
            <div class="left">
                <div class="form-wrapper">
                    <div class="contact-heading">
                        <h1>طلب تصريح سفر لجمهورية مصر العربية  </h1>
                        <p class="text">or Reach Us via Email : <a href="mailto:info@yearex.com">info@yearex.com</a></p>
                    </div>

                    <form action="{{ route('saveData') }}" method="post" class="contact-form" enctype="multipart/form-data">
                        @csrf
                        <div class="input-wrap">
                            <input aria-autocomplete="none" type="text" name="first_name" class="contact-input" autocomplete="off" required>
                            <label for="">الاسم الاول</label>
                            <i class="icon fa-solid fa-address-card"></i>
                        </div>

                        <div class="input-wrap">
                            <input type="text" name="last_name" class="contact-input" autocomplete="off" required>
                            <label for="">الاسم الثاني</label>
                            <i class="icon fa-solid fa-address-card"></i>
                        </div>

                        <div class="input-wrap">
                            <input aria-autocomplete="none" type="text" name="first_name" class="contact-input" autocomplete="off" required>
                            <label for=""> الاسم الاوسط </label>
                            <i class="icon fa-solid fa-address-card"></i>
                        </div>

                        <div class="input-wrap">
                            <input type="text" name="last_name" class="contact-input" autocomplete="off" required>
                            <label for="">الاسم الاخير</label>
                            <i class="icon fa-solid fa-address-card"></i>
                        </div>

                        <div class="form-group w-100">
                            <label>تاريخ الميلاد</label>
                            <input type="date" name="birth_date" class="form-control" autocomplete="off" required>
                        </div>

                        <div class="input-wrap">
                            <input type="text" name="birth_place" class="contact-input" autocomplete="off" required>
                            <label for="">مكان الميلاد</label>
                            <i class="icon fa-solid fa-address-card"></i>
                        </div>

                        <div class="input-wrap">
                            <select name="gender" class="contact-input">
                                <option value="0">
                                     اختر النوع
                                </option>

                                <option value="male">ذكر</option>
                                <option value="female">انثي</option>
                            </select>
                        </div>

                        <div class="input-wrap">
                            <select name="country" class="contact-input">
                                <option value="0">
                                    اختر مكان المنشأ
                                </option>

                                <option value="egypt">مصر </option>
                                <option value="yamen">اليمن</option>
                            </select>
                        </div>
                        <div class="input-wrap">
                            <input type="text" name="nationality" class="contact-input" autocomplete="off" required>
                            <label for="">الجنسية</label>
                            <i class="icon fa-solid fa-address-card"></i>
                        </div>

                        <div class="input-wrap w-100">
                            <label><span >*</span> رقم جواز السفر</label>
                            <input type="text" name="passport_number" class="contact-input" autocomplete="off" required>
                        </div>


                        <div class="input-wrap">
                            <input type="date" name="passport_date" class="contact-input" autocomplete="off" required>
                            <label for="">تاريخ اصدار جواز السفر *</label>
                        </div>

                        <div class="input-wrap">
                            <input type="date" name="passport_expire_date" class="contact-input" autocomplete="off" required>
                            <label for="">تاريخ انتهاء جواز السفر *</label>
                        </div>


                        <div class="input-wrap">
                            <select name="passport_type" class="contact-input" >
                                    <option value="0">
                                        اختار نوع جواز السفر
                                    </option>
                                <option  value="regular">
                                    عادي
                                </option>
                                <option  value="Irregular">
                                    غير عادي
                                </option>
                            </select>
                        </div>
                        <div class="input-wrap">
                            <input type="text" name="passport_issue_place" class="contact-input" autocomplete="off" required>
                            <label for="">مكان اصدار جواز السفر</label>
                        </div>

                        <div class="input-wrap w-100">
                            <input type="text" name="mobile_number" class="contact-input" autocomplete="off" required>
                            <label for="">رقم الهاتف الشخصي</label>
                        </div>

                        <div class="input-wrap w-100">
                            <input type="email" name="email" class="contact-input" autocomplete="off" required>
                            <label for="">البريد الالكتروني</label>
                        </div>

                        <div class="input-wrap">
                            <input type="text" name="emergency_contact_name" class="contact-input" autocomplete="off" required>
                            <label for="">اسم شخص في حالة الطوارئ</label>
                        </div>

                        <div class="input-wrap">
                            <input type="text" name="emergency_contact_country" class="contact-input" autocomplete="off" required>
                            <label for="">بلد الشخص في حالة الطوارئ</label>
                        </div>

                        <div class="input-wrap">
                            <input type="text" name="emergency_contact_city" class="contact-input" autocomplete="off" required>
                            <label for="">منطقة الشخص في حالة الطوارئ</label>
                        </div>

                        <div class="input-wrap">
                            <input type="text" name="emergency_contact_address" class="contact-input" autocomplete="off" required>
                            <label for="">عنوان الشخص في حالة الطوارئ</label>
                        </div>

                        <div class="input-wrap w-100">
                            <input type="text" name="emergency_contact_home_phone" class="contact-input" autocomplete="off" required>
                            <label for="">رقم هاتف المنزل في حالة الطوارئ</label>
                        </div>

                        <div class="input-wrap">
                            <input type="text" name="emergency_contact_postal_code" class="contact-input" autocomplete="off" required>
                            <label for="">في حالة الطوارئ الرقم البريدي للمنزل</label>
                        </div>

                        <div class="input-wrap">
                            <input type="text" name="emergency_contact_postal_box" class="contact-input" autocomplete="off" required>
                            <label for="">في حالة الطوارئ رقم الصندوق البريدي</label>
                        </div>

                        <div class="input-wrap w-100">
                            <input type="text" name="emergency_contact_email" class="contact-input" autocomplete="off" required>
                            <label for="">البريد الالكتروني للشخص في حالة الطوارئ</label>
                        </div>


                        <div class="input-wrap">
                            <input type="text" name="profession" class="contact-input" autocomplete="off" required>
                            <label for="">المهنة</label>
                        </div>

                        <div class="input-wrap">
                            <input type="text" name="currnet_job_title" class="contact-input" autocomplete="off" required>
                            <label for="">اللقب الحالي</label>
                        </div>


                        <div class="input-wrap">
                            <input type="text" name="entry_port" class="contact-input" autocomplete="off" required>
                            <label for="">منفذ الدخول</label>
                        </div>

                        <div class="input-wrap">
                            <select name="entry_type" class="contact-input">
                                <option value="0">
                                    اختار طريقة الدخول
                                </option>
                                <option value="by air">
                                    By Air
                                </option>
                                <option value="BY Ship">
                                    By Ship
                                </option>
                            </select>
                        </div>

                        <div class="input-wrap w-100">
                            <input type="date" name="entry_date" class="contact-input" autocomplete="off" required>
                            <label for=""> موعد الدخول </label>
                        </div>

                        <div class="input-wrap">
                            <button type="button" class="btn upload">
                                <span>
                                    <i class="fa-solid fa-paperclip"></i> صورة الهوية الشخصية
                                </span>
                                <input type="file" name="profile_image">
                            </button>
                        </div>

                        <div class="input-wrap">
                            <button type="button" class="btn upload">
                                <span>
                                    <i class="fa-solid fa-paperclip"></i> صورة جواز السفر اليمني
                                </span>
                                <input type="file" name="passport_image">
                            </button>
                        </div>

                        <div class="input-wrap">
                            <button type="button" class="btn upload">
                                <span>
                                    <i class="fa-solid fa-paperclip"></i>صورة آخر وصول لجمهورية مصر العربية بجواز السفر ودولة السفر
                                </span>
                                <input type="file" name="last_reachToEgypt_image">
                            </button>
                        </div>

                        <div class="input-wrap">
                            <label for="">اخر ميعاد زيارة لمصر</label>
                            <input type="date" class="contact-input" name="last_coming_date_to_egypt" autocomplete="off" required>
                        </div>

                        <div class="input-wrap">
                            <input type="text" class="contact-input" name="last_coming_country_from">
                            <label for="">من اين اتيت اخر مرة لزيارة مصر (اكتب دولة)</label>
                        </div>

                        <div class="input-wrap">
                            <select name="cause_of_visiting" class="contact-input">
                                <option value="0">
                                    اختار سبب الحضور لمصر
                                </option>

                                <option value="tourism">
                                    سياحة
                                </option>

                                <option value="treatment">
                                    علاج
                                </option>

                                <option value="study">
                                    دراسه
                                </option>

                                <option value="investment">
                                    إستثمار
                                </option>

                                <option value="another">
                                    سبب اخر
                                </option>

                            </select>
                        </div>

                        <div class="input-wrap w-100">
                            <input type="text" name="friend_address" class="contact-input" autocomplete="off" required>
                            <label for="">عنوان صديق او قريب لك في مصر</label>
                        </div>

                        <div class="input-wrap w-100">
                            <input type="text" name="friend_phone" class="contact-input" autocomplete="off" required>
                            <label for="">رقم هاتف صديق او قريب لك من مصر </label>
                        </div>

                        <div class="input-wrap w-100">
                            <textarea name="number_of_visits" cols="30" rows="10" class="contact-input" required></textarea>
                            <label for="">عدد مرات زيارة مصر بالتواريخ منذ 2011</label>
                        </div>

                        <div class="input-wrap w-100">
                            <textarea name="security_problem" cols="30" rows="10" class="contact-input" required></textarea>
                            <label for="">هل سبق وتعرضت لمشكلة امنيه في مصر وماسببها </label>
                        </div>

                        <div class="input-wrap w-100">
                            <select name="residence" class="contact-input">
                                <option value="0">
                                    اختار مكان اقامتك في مصر إن وجد
                                </option>
                                <option value="hotel">
                                    فندق
                                </option>

                                <option value="apartment">
                                    شقة
                                </option>
                            </select>
                        </div>




{{--                        <div class="input-wrap textarea w-100">--}}
{{--                            <textarea name="message" cols="30" rows="10" class="contact-input" required></textarea>--}}
{{--                            <label for="">Message</label>--}}
{{--                            <i class="icon fa-solid fa-inbox"></i>--}}
{{--                        </div>--}}

                        <div class="contact-buttons">
{{--                            <button type="button" class="btn upload">--}}
{{--                                <span>--}}
{{--                                    <i class="fa-solid fa-paperclip"></i> صورة الهوية الشقصية--}}
{{--                                </span>--}}
{{--                                <input type="file" name="attachment">--}}
{{--                            </button>--}}
                            <input type="submit" value="ارسال الطلب" class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>

{{--            <div class="right">--}}
{{--                <div class="image-wrapper">--}}
{{--                    <img src="{{ asset('assets') }}/imgs/granite-egypt-sphinx-neva-river-embankment_1398-525.jpg" width="800" alt="Egypt" class="img">--}}
{{--                    <div class="wave-wrap">--}}
{{--                        <svg class="wave" viewBox="0 0 783 1536" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path id="wave" d="M236.705 1356.18C200.542 1483.72 64.5004 1528.54 1 1535V1H770.538C793.858 63.1213 797.23 196.197 624.165 231.531C407.833 275.698 274.374 331.715 450.884 568.709C627.393 805.704 510.079 815.399 347.561 939.282C185.043 1063.17 281.908 1196.74 236.705 1356.18Z" />--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <svg class="dashed-wave" viewBox="0 0 345 877" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path id="dashed-wave" d="M0.5 876C25.6667 836.167 73.2 739.8 62 673C48 589.5 35.5 499.5 125.5 462C215.5 424.5 150 365 87 333.5C24 302 44 237.5 125.5 213.5C207 189.5 307 138.5 246 87C185 35.5 297 1 344.5 1" />--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
</main>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('assets') }}/js/app.js"></script>
    @if(Session::has('success'))
        <script>
            toastr.success("{{ Session::get('success') }}");
        </script>
    @endif
</body>

</html>
