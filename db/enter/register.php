<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags  -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>DeluxeArtsNft Register</title>
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- CSS Assets -->
    <link rel="stylesheet" href="../css/app.css">

    <!-- Javascript Assets -->
    <script src="../js/app.js" defer=""></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script>
      /**
       * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
       */
      localStorage.getItem("_x_darkMode_on") === "true" &&
        document.documentElement.classList.add("dark");
    </script>
  </head>
  <body x-data="" class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- App preloader-->
    <div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">
      <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
    </div>

    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak="">
      <main style=" background: #192132; " class="grid w-full grow grid-cols-1 place-items-center">
        <div class="w-full max-w-[26rem] p-4 sm:px-5">
          <div class="text-center">
            <a href="https://deluxeartsnft.online/"><img class="mx-auto h-16 w-16" src="../images/logo.png" alt="logo"></a>
            <div class="mt-4">
              <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                DeluxeArtsNft Signup
              </h2>
              <p class="text-slate-400 dark:text-navy-300">
               Welcome, Enrol to get started
              </p>
            </div>
                
          </div>
          <div style="text-align: center; margin-bottom: 20px; background-color: #fff">
                    <?php 
                          if (isset($_SESSION['alertMsg'])){
                            echo ($_SESSION['alertMsg']);
                            unset($_SESSION['alertMsg']);
                        } 
                    ?>
          </div>
          <div style=" background: #202c41; " class="card mt-5 rounded-lg p-5 lg:p-7">

              <form  action="../controller/gistration.php" method="POST">
            <label class="relative flex">
              <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" name="fname" placeholder="Your First Name" type="text" required>
              <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 1c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zM12 7a3.5 3.5 0 100 7 3.5 3.5 0 000-7z"></path>
              </svg>
              </span>
            </label>
            <label class="relative mt-4 flex">
              <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" name="lname" placeholder="Your Last Name" type="text" required>
              <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 1c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zM12 7a3.5 3.5 0 100 7 3.5 3.5 0 000-7z"></path>
              </svg>
              </span>
            </label>
            <label class="relative mt-4 flex">
              <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" name="username" placeholder="Enter Username" type="text" required>
              <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 1c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zM12 7a3.5 3.5 0 100 7 3.5 3.5 0 000-7z"></path>
              </svg>
              </span>
            </label>
            
            <label class="relative mt-4 flex">
              <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" name="email" placeholder="Enter your email" type="email" required>
              <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
              </span>
            </label>
            <label class="relative mt-4 flex">
              <select class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" name="country" value="" required="required">
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Aland Islands (Finland)">Aland Islands (Finland)</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa (USA)">American Samoa (USA)</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla (UK)">Anguilla (UK)</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba (Netherlands)">Aruba (Netherlands)</option>
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
                                                <option value="Bermuda (UK)">Bermuda (UK)</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Virgin Islands (UK)">British Virgin Islands (UK)</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burma">Burma</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Caribbean Netherlands (Netherlands)">Caribbean Netherlands (Netherlands)</option>
                                                <option value="Cayman Islands (UK)">Cayman Islands (UK)</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island (Australia)">Christmas Island (Australia)</option>
                                                <option value="Cocos (Keeling) Islands (Australia)">Cocos (Keeling) Islands (Australia)</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Cook Islands (NZ)">Cook Islands (NZ)</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curacao (Netherlands)">Curacao (Netherlands)</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
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
                                                <option value="Falkland Islands (UK)">Falkland Islands (UK)</option>
                                                <option value="Faroe Islands (Denmark)">Faroe Islands (Denmark)</option>
                                                <option value="Federated States of Micronesia">Federated States of Micronesia</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana (France)">French Guiana (France)</option>
                                                <option value="French Polynesia (France)">French Polynesia (France)</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar (UK)">Gibraltar (UK)</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland (Denmark)">Greenland (Denmark)</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe (France)">Guadeloupe (France)</option>
                                                <option value="Guam (USA)">Guam (USA)</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey (UK)">Guernsey (UK)</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong (China)">Hong Kong (China)</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man (UK)">Isle of Man (UK)</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Ivory Coast">Ivory Coast</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey (UK)">Jersey (UK)</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Kosovo">Kosovo</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macau (China)">Macau (China)</option>
                                                <option value="Macedonia">Macedonia</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique (France)">Martinique (France)</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte (France)">Mayotte (France)</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Moldov">Moldov</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat (UK)">Montserrat (UK)</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="New Caledonia (France)">New Caledonia (France)</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue (NZ)">Niue (NZ)</option>
                                                <option value="Norfolk Island (Australia)">Norfolk Island (Australia)</option>
                                                <option value="North Korea">North Korea</option>
                                                <option value="Northern Mariana Islands (USA)">Northern Mariana Islands (USA)</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestine">Palestine</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn Islands (UK)">Pitcairn Islands (UK)</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Republic of the Congo">Republic of the Congo</option>
                                                <option value="Reunion (France)">Reunion (France)</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Barthelemy (France)">Saint Barthelemy (France)</option>
                                                <option value="Saint Helena, Ascension and Tristan da Cunha (UK)">Saint Helena, Ascension and Tristan da Cunha (UK)</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Martin (France)">Saint Martin (France)</option>
                                                <option value="Saint Pierre and Miquelon (France)">Saint Pierre and Miquelon (France)</option>
                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tom and Principe">Sao Tom and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Sint Maarten (Netherlands)">Sint Maarten (Netherlands)</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Korea">South Korea</option>
                                                <option value="South Sudan">South Sudan</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen (Norway)">Svalbard and Jan Mayen (Norway)</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syria</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-Leste">Timor-Leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau (NZ)">Tokelau (NZ)</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands (UK)">Turks and Caicos Islands (UK)</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Virgin Islands (USA)">United States Virgin Islands (USA)</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City">Vatican City</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Wallis and Futuna (France)">Wallis and Futuna (France)</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
              <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 1c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zM12 7a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM12 17a7 7 0 007-7 7 7 0 00-7 7z"/>
</svg>


              </span>
            </label>
            <label class="relative mt-4 flex">
              <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" name="password" placeholder="Password" type="password" required>
              <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
              </span>
            </label>
            <label class="relative mt-4 flex">
              <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" name="cpassword" placeholder="Repeat Password" type="password" required>
              <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
              </span>
            </label>
             <label class="relative mt-4 flex">
              <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" name="cnumber" placeholder="Phone Number" type="text" required>
              <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.5 3.5l3.5 3.5-2.5 2.5a2.5 2.5 0 002.828 2.828l2.5-2.5 3.5 3.5a1 1 0 01-1.414 1.414l-3.5-3.5-2.5 2.5a3.5 3.5 0 01-4.95 0L4.707 4.707a1 1 0 111.414-1.414L11 9.586l2.793-2.793a3.5 3.5 0 014.95 0z"/>
</svg>


              </span>
            </label>
            <div class="mt-4 flex items-center space-x-2">
              <input class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent" type="checkbox">
              <p class="line-clamp-1">
                I agree with
                <a href="#" class="text-slate-400 hover:underline dark:text-navy-300">
                  privacy policy
                </a>
              </p>
            </div>
            <button class="btn mt-5 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90" type="submit">
              Sign Up
            </button>
        </form>
            <div class="mt-4 text-center text-xs+">
              <p class="line-clamp-1">
                <span>Already have an account? </span>
                <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent" href="login.php">Sign In</a>
              </p>
            </div>
        
          </div>
        </div>
      </main>
    </div>
<!-- Start of txt.me widget code -->
<script src="https://v3.txt.me/livechat/js/wrapper/c83816a4-babc-4969-a6e4-a6584b863281" async></script>
<noscript><a href="https://txt.me/reviews/c83816a4-babc-4969-a6e4-a6584b863281" rel="nofollow">Rate New Widget customer support</a>, powered by <a href="https://txt.me" rel="noopener nofollow" target="_blank">txt.me</a></noscript>
<!-- End of txt.me widget code -->
    <!-- 
        This is a place for Alpine.js Teleport feature 
        @see https://alpinejs.dev/directives/teleport
      -->
    <div id="x-teleport-target"></div>
    <script>
      window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>
  </body>
</html>
