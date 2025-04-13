<?php

$layout = 'auth';
$title = 'Login';
$content = "
<div class='container'>
     <div class='container vh-100'>
            <div class='row justify-content-center align-items-center h-100'>
                <div class='col-xxl-4 col-xl-4 col-lg-6 col-md-8 col-sm-12 col-12 m-auto'>
                    <div class='card border-0 shadow-sm rounded'>
                        <div class='card-body ps-5 pe-5 pt-4 pb-4'>
                            <div class='text-center'>
                                <img src='./assets/images/logo.png' width='100px'>
                                <p>Sistem Absensi Karyawan</p>
                            </div>
                            <form class='row g-2' role='form' method='POST' id='form_login'>

                                <div class='input-group mb-1'>
                                  <input type='text' class='form-control rounded-left' name='username' id='username' placeholder='Username' autocomplete='off' required>
                                  <span class='input-group-text rounded-right'>
                                        <i class='bx bx-user'></i>
                                  </span>
                                </div>

                                <div class='input-group mb-1'>
                                  <input type='password' class='form-control rounded-left' name='password' id='password' placeholder='Password' autocomplete='off' required>
                                    <span class='input-group-text rounded-right'>
                                        <i class='bx bxs-key'></i>
                                    </span>
                                </div>

                                <div class='form-check ms-2'>
                                    <input type='checkbox' class='form-check-input' name='setcookie' value='true' checked id='setcookie'>
                                    <label class='form-check-label' for='setcookie'>Remember me</label>
                                </div>

                                <div>
                                    <button type='submit' class='btn btn-primary btn-block btn-login'>
                                        <span><i class='bx bx-log-in-circle'></i> Login</span>
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
";