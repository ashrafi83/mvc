<form id="personal-info-form">
    <label>نام:</label>
    <input type="text" placeholder="نام" value="<?php echo $data['personal_info']['first_name']; ?>" disabled>
    <span class="text-primary">ویرایش</span>
    <br><br>
    <label>نام خانوادگی:</label>
    <input type="text" placeholder="نام خانوادگی" value="<?php echo $data['personal_info']['last_name']; ?>" disabled>
    <span class="text-primary">ویرایش</span>
    <br><br>
    <label>ایمیل:</label>
    <input type="text" placeholder="ایمیل" value="<?php echo $data['personal_info']['email']; ?>" disabled>
    <span class="text-primary">ویرایش</span>
    <br><br>
    <lable>نام کاربری:</lable>
    <input type="text" placeholder="نام کاربری" value="<?php echo $data['personal_info']['username']; ?>" disabled>
    <span class="text-primary">ویرایش</span>
</form>