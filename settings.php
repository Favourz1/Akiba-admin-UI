<!DOCTYPE html>
<html lang="en">

<?php include('modules/header-info.php'); ?>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <?php
        include('modules/topbar.php');
        include('modules/sidebar.php');
        ?>

        <div class="content-body">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="section-item">
                            <div class="section-header mb-3">
                                <h4 class="section-title">Account details</h4>
                                <div class="section-desc">These are the details we have on file for you. Please make any
                                    changes below and click 'Save' before exiting this page.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12">
                        <div class="settings-section">
                            <div class="section-content">
                                <div class="section-title--wrap">
                                    <div class="icon-wrap">
                                        <img src="images/icons/key-icon.svg" class="icon" alt="Access Token Icon">
                                    </div>
                                    <h4 class="section-title">Access Token</h4>
                                </div>
                                <p class="section-body">Tokens you have generated to access the <a href="#"
                                        class="text-link">Akiba API.</a></p>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-12">
                                    <div class="card shadow-0">
                                        <div class="card-body px-0">
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-group col-xl-12">
                                                        <label class="mb-2 text-sandbox font-weight-medium"
                                                            for="sandbox_token">Sandbox API Token
                                                            <svg width="18px" height="18px"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z"
                                                                    style="fill:
                                                            #676767;" />
                                                            </svg>
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <label class="input-group-text">
                                                                    <svg width="22px" height="22px" viewBox="0 0 24 25"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M10.7032 11.9976C10.7032 14.2426 8.88322 16.0616 6.63922 16.0616C4.39422 16.0616 2.57422 14.2426 2.57422 11.9976C2.57422 9.75262 4.39422 7.93359 6.63922 7.93359C8.88322 7.93359 10.7032 9.75262 10.7032 11.9976Z"
                                                                            stroke="#353b48" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M20.5741 15.484V12.794C20.5741 12.356 20.2181 12 19.7801 12H10.7031"
                                                                            stroke="#353b48" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M16.5742 15.484V12" stroke="#353b48"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </label>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder=""
                                                                disabled=""
                                                                value="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyX2lkIjoiY2U4OTYzOTgtMzM3ZC00OTVjLTk2ZGEtMjNmMzhhNjdkYTI4IiwidHlwZSI6InNhbmRib3hfYXBpX3Rva2VuIn0.eKz95XDfN33m1DKlZrKp0tZLIYRaJvuLfxE6ly5QfJc"
                                                                name="client_id">
                                                            <div class="input-group-append">
                                                                <button class="btn dark-input btn-secondary"
                                                                    type="button" style="padding: 0.4375rem 1rem;">
                                                                    <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M15.2852 5.74802C15.0308 4.10756 13.8495 3 12.0693 3H6.29465C4.28435 3 3.02148 4.42788 3.02148 6.44497V11.8837C3.02148 13.7213 4.07177 15.0754 5.79377 15.2889"
                                                                            stroke="#fff" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M17.706 8.67969H11.9333C9.92205 8.67969 8.66016 10.1037 8.66016 12.1198V17.5586C8.66016 19.5747 9.91526 20.9987 11.9333 20.9987H17.705C19.7241 20.9987 20.9792 19.5747 20.9792 17.5586V12.1198C20.9792 10.1037 19.7241 8.67969 17.706 8.67969Z"
                                                                            stroke="#fff" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </button>
                                                                <button class="btn btn-dark" type="button"
                                                                    style="padding: 0.4375rem 1rem;"><i
                                                                        class="fa fa-eye"></i></button>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="d-flex align-item-center font-size-13 mt-2">
                                                            <span class="fa-solid fa-circle-info"></span>
                                                            <p class="pl-1 mb-0">Test Akiba AI by making free API calls that returns dummy results</p>
                                                        </div> -->
                                                    </div>
                                                    <div class="form-group col-xl-12 mb-3">
                                                        <label class="mb-2 font-weight-medium"
                                                            for="production_token">Production API Token</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <label class="input-group-text">
                                                                    <svg width="22px" height="22px" viewBox="0 0 24 25"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M10.7032 11.9976C10.7032 14.2426 8.88322 16.0616 6.63922 16.0616C4.39422 16.0616 2.57422 14.2426 2.57422 11.9976C2.57422 9.75262 4.39422 7.93359 6.63922 7.93359C8.88322 7.93359 10.7032 9.75262 10.7032 11.9976Z"
                                                                            stroke="#353b48" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M20.5741 15.484V12.794C20.5741 12.356 20.2181 12 19.7801 12H10.7031"
                                                                            stroke="#353b48" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path d="M16.5742 15.484V12" stroke="#353b48"
                                                                            stroke-width="1.5" stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </label>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder=""
                                                                disabled=""
                                                                value="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyX2lkIjoiY2U4OTYzOTgtMzM3ZC00OTVjLTk2ZGEtMjNmMzhhNjdkYTI4IiwidHlwZSI6ImFwaV90b2tlbiJ9.lPtm4LwTJD74iUBKoshyLlLjPISuTUjiS9OicCmthfQ"
                                                                name="auth-token">
                                                            <div class="input-group-append">
                                                                <button class="btn dark-input btn-secondary"
                                                                    type="button" style="padding: 0.4375rem 1rem;">
                                                                    <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M15.2852 5.74802C15.0308 4.10756 13.8495 3 12.0693 3H6.29465C4.28435 3 3.02148 4.42788 3.02148 6.44497V11.8837C3.02148 13.7213 4.07177 15.0754 5.79377 15.2889"
                                                                            stroke="#fff" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M17.706 8.67969H11.9333C9.92205 8.67969 8.66016 10.1037 8.66016 12.1198V17.5586C8.66016 19.5747 9.91526 20.9987 11.9333 20.9987H17.705C19.7241 20.9987 20.9792 19.5747 20.9792 17.5586V12.1198C20.9792 10.1037 19.7241 8.67969 17.706 8.67969Z"
                                                                            stroke="#fff" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </button>
                                                                <button class="btn dark-input btn-secondary"
                                                                    type="button" style="padding: 0.4375rem 1rem;">
                                                                    <svg width="20px" height="20px" viewBox="0 0 24 25"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M3 15.0567L4.88126 12.25L7.67224 14.1208"
                                                                            stroke="#fff" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M21.0004 9.44141L19.1191 12.2481L16.3281 10.3772"
                                                                            stroke="#fff" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M4.91211 12.4023C4.9922 16.2484 8.13576 19.3424 12.001 19.3424C14.422 19.3424 16.5601 18.1288 17.8389 16.2772"
                                                                            stroke="#fff" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M19.0889 12.0963C19.0088 8.25019 15.8653 5.15625 12 5.15625C9.57902 5.15625 7.44095 6.3698 6.16211 8.22146"
                                                                            stroke="#fff" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </button>
                                                                <button class="btn btn-dark" type="button"
                                                                    style="padding: 0.4375rem 1rem;"><i
                                                                        class="fa fa-eye"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="settings-section">
                            <div class="section-content">
                                <div class="section-title--wrap">
                                    <div class="icon-wrap">
                                        <img src="images/icons/user-information-icon.svg" class="icon"
                                            alt="User Information Icon">
                                    </div>
                                    <h4 class="section-title">User Information</h4>
                                </div>
                                <p class="section-body">
                                    If you don't wish to change your password, please leave this blank.
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-12">
                                    <form method="post" name="user-info" class="personal_validate">
                                        <div class="form-row">
                                            <div class="form-group col-xl-6">
                                                <label class="mr-sm-2">First Name*</label>
                                                <input type="text" class="form-control" value="Favour" placeholder=""
                                                    name="firstname">
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label class="mr-sm-2">Last Name*</label>
                                                <input type="text" class="form-control" value="Agoro" placeholder=""
                                                    name="lastname">
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label class="mr-sm-2">Email*</label>
                                                <input type="email" class="form-control" value="okohfavour91@gmail.com"
                                                    placeholder="" name="email">
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label class="mr-sm-2">Country/Mobile Number</label>
                                                <div class="input-group">
                                                    <select class="form-control country-code" name="country">
                                                        <option value="">Select</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Åland Islands">Åland Islands</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                        </option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British Indian
                                                            Ocean Territory</option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African
                                                            Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                                                        </option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Congo, The Democratic Republic of The">Congo, The
                                                            Democratic Republic of The</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                            (Malvinas)</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Territories">French Southern
                                                            Territories</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guernsey">Guernsey</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Heard Island and Mcdonald Islands">Heard Island
                                                            and Mcdonald Islands</option>
                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican
                                                            City State)</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic
                                                            of</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jersey">Jersey</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea, Democratic People's Republic of">Korea,
                                                            Democratic People's Republic of</option>
                                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Lao People's Democratic Republic">Lao People's
                                                            Democratic Republic</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                                                        </option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macao">Macao</option>
                                                        <option value="Macedonia, The Former Yugoslav Republic of">
                                                            Macedonia, The Former Yugoslav Republic of</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia, Federated States of">Micronesia,
                                                            Federated States of</option>
                                                        <option value="Moldova, Republic of">Moldova, Republic of
                                                        </option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="Netherlands Antilles">Netherlands Antilles
                                                        </option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria" selected>+234</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Northern Mariana Islands">Northern Mariana
                                                            Islands</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestinian Territory, Occupied">Palestinian
                                                            Territory, Occupied</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Pitcairn">Pitcairn</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russian Federation">Russian Federation</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Helena">Saint Helena</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                        </option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and
                                                            Miquelon</option>
                                                        <option value="Saint Vincent and The Grenadines">Saint Vincent
                                                            and The Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe
                                                        </option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Georgia and The South Sandwich Islands">
                                                            South Georgia and The South Sandwich Islands</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                        </option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic
                                                        </option>
                                                        <option value="Taiwan, Province of China">Taiwan, Province of
                                                            China</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania, United Republic of">Tanzania, United
                                                            Republic of</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-leste">Timor-leste</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands">Turks and Caicos
                                                            Islands</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates
                                                        </option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                        <option value="United States Minor Outlying Islands">United
                                                            States Minor Outlying Islands</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Viet Nam">Viet Nam</option>
                                                        <option value="Virgin Islands, British">Virgin Islands, British
                                                        </option>
                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                        </option>
                                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                    <input type="text" class="form-control" value="8127036493"
                                                        placeholder="" name="mobile">
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label class="mr-sm-2">Company</label>
                                                <input type="text" class="form-control" value="Crenet" placeholder=""
                                                    name="company">
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label class="mr-sm-2">Role</label>
                                                <input type="text" class="form-control" value="CEO" placeholder=""
                                                    name="role">
                                            </div>

                                            <div class="form-group col-12 mt-3">
                                                <button class="btn btn-default btn-success" disabled>Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="settings-section">
                            <div class="section-content">
                                <div class="section-title--wrap">
                                    <div class="icon-wrap">
                                        <img src="images/icons/backup-contact-icon.svg" class="icon"
                                            alt="Backup Contact Icon">
                                    </div>
                                    <h4 class="section-title">Backup Contact</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-12">
                                    <form action="" class="mb-3">
                                        <div class="form-row">
                                            <div class="form-group col-xl-6">
                                                <label class="mr-sm-2" for="backup-email">Secondary/Backup Email</label>
                                                <input type="email" class="form-control" value="okohfavour91@gmail.com"
                                                    placeholder="">
                                            </div>
                                            <div class="col-12">
                                                <p class="instruction-text text-muted">Adding a secondary email helps to
                                                    make sure you never lose access to your account. This email address
                                                    cannot be used to login, and will not receive account-related
                                                    emails. It will only be used if we need to get in touch with you
                                                    urgently, but we are unable to reach you at your primary email
                                                    address.</p>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-default btn-success" disabled>Save</button>
                                                <button class="btn btn-default btn-gray">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="settings-section">
                            <div class="section-content">
                                <div class="section-title--wrap">
                                    <div class="icon-wrap">
                                        <img src="images/icons/password-icon.svg" class="icon"
                                            alt="Change Password Icon">
                                    </div>
                                    <h4 class="section-title">Change Password</h4>
                                </div>
                                <p class="section-body">
                                    If you don't wish to change your password, please leave this blank.
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-12">
                                    <form action="" class="mb-3">
                                        <div class="form-row">
                                            <div class="form-group col-xl-12">
                                                <label class="mr-sm-2" for="current-password">Current Password</label>
                                                <input type="password" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label class="mr-sm-2" for="new-password">New Password</label>
                                                <input type="password" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group col-xl-6">
                                                <label class="mr-sm-2" for="confirm-new-password">Confirm New
                                                    Password</label>
                                                <input type="password" class="form-control" placeholder="">
                                            </div>
                                            <div class="col-12">
                                                <p class="instruction-text text-muted">Your password must have a minimum
                                                    of 8 characters, 1 upper case, 1 lower case, 1 digit and 1 special
                                                    character (i.e. @#^ etc.)</p>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-default btn-success" disabled>Update
                                                    password</button>
                                                <button class="btn btn-default btn-gray">Cancel</button>
                                                <a href="#" class="text-link font-size-15 pl-2">I forgot my password</a>
                                            </div>
                                            <div class="instruction-text text-muted font-size-14 pt-4">Last updated:
                                                January 17, 2023</div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="settings-section">
                            <div class="section-content">
                                <div class="section-title--wrap">
                                    <div class="icon-wrap">
                                        <img src="images/icons/2fa-icon.svg" class="icon" alt="2FA Icon">
                                    </div>
                                    <h4 class="section-title">Two-factor authentication</h4>
                                    <span class="dot-prefixed red">Off</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-12">
                                    <p class="section-body">
                                        Two-factor authentication adds an additional layer of security to your account
                                        by requiring more than just a password to sign in.
                                    </p>
                                    <div class="btn-link">
                                        <a href="#" class="btn btn-default btn-success" data-toggle="modal"
                                            data-target="#TwoFactorAuthentication">Enable two-factor authentication</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="settings-section">
                            <div class="section-flex">
                                <div class="section-content">
                                    <div class="section-title--wrap">
                                        <div class="icon-wrap">
                                            <img src="images/icons/user-delete-icon.svg" class="icon"
                                                alt="Deactivate account Icon">
                                        </div>
                                        <h4 class="section-title">Deactivate account</h4>
                                    </div>
                                    <p class="section-body">
                                        If you no longer need your Akiba account you can deactivate it. Please note that
                                        we will delete all of your account information from our system immediately, and
                                        any active integrations and App IDs will stop working.
                                    </p>
                                </div>
                                <div class="button-link">
                                    <button type="submit" class="btn btn-default btn-danger">Deactivate Account</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('modules/modals.php');
    include('modules/footer-script.php');
    ?>


</body>

</html>