<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">

  
<!-- Mirrored from prium.github.io/phoenix/v1.18.0/modules/forms/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2024 06:18:31 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>AU-PANVAC</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assetsn/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assetsn/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assetsn/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assetsn/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('assetsn/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assetsn/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('vendorsn/vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assetsn/assets/js/config.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('vendorsn/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendorsn/vendors/dropzone/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('vendorsn/vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('vendorsn/vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsn/assets/css/theme-rtl.min.css') }}" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('assetsn/assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
    <link href="{{ asset('assetsn/assets/css/user-rtl.min.css') }}" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('assetsn/assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
      var phoenixIsRTL = window.config.config.phoenixIsRTL;
      if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
        <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
          <!-- scrollbar removed-->
          <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
             
              <li class="nav-item">
                <!-- label-->
                <p class="navbar-vertical-label">Modules</p>
                <hr class="navbar-vertical-line" /><!-- parent pages-->
                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-forms" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-forms">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="file-text"></span></span><span class="nav-link-text">Forms</span>
                    </div>
                  </a>
                  <div class="parent-wrapper label-1">
                    <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse" id="nv-forms">
                      <li class="collapsed-nav-item-title d-none">Forms</li>
                  
                      <li class="nav-item"><a class="nav-link active" href="wizard.html">
                          <div class="d-flex align-items-center"><span class="nav-link-text">Wizard</span></div>
                        </a><!-- more inner pages-->
                      </li>
                    </ul>
                  </div>
                </div><!-- parent pages-->  
              </li>
            </ul>
          </div>
        </div>
        <div class="navbar-vertical-footer"><button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span class="navbar-vertical-footer-text ms-2">AU-PANVAC</span></button></div>
      </nav>
      <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault" style="display:none;">
        <div class="collapse navbar-collapse justify-content-between">
          
          <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search" placeholder="Search..." aria-label="Search" />
              <span class="fas fa-search search-box-icon"></span>
            </form>
            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link p-0" aria-label="Close"></button></div>
           
          </div>
          <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
              <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label></div>
            </li>
          </ul>
        </div>
      </nav>
     

      <script>
        var navbarTopShape = window.config.config.phoenixNavbarTopShape;
        var navbarPosition = window.config.config.phoenixNavbarPosition;
        var body = document.querySelector('body');
        var navbarDefault = document.querySelector('#navbarDefault');
        var navbarTop = document.querySelector('#navbarTop');
        var topNavSlim = document.querySelector('#topNavSlim');
        var navbarTopSlim = document.querySelector('#navbarTopSlim');
        var navbarCombo = document.querySelector('#navbarCombo');
        var navbarComboSlim = document.querySelector('#navbarComboSlim');
        var dualNav = document.querySelector('#dualNav');

        var documentElement = document.documentElement;
        var navbarVertical = document.querySelector('.navbar-vertical');

        if (navbarPosition === 'dual-nav') {
          topNavSlim?.remove();
          navbarTop?.remove();
          navbarTopSlim?.remove();
          navbarCombo?.remove();
          navbarComboSlim?.remove();
          navbarDefault?.remove();
          navbarVertical?.remove();
          dualNav.removeAttribute('style');
          document.documentElement.setAttribute('data-navigation-type', 'dual');

        } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
          navbarDefault?.remove();
          navbarTop?.remove();
          navbarTopSlim?.remove();
          navbarCombo?.remove();
          navbarComboSlim?.remove();
          topNavSlim.style.display = 'block';
          navbarVertical.style.display = 'inline-block';
          document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');

        } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
          navbarDefault?.remove();
          navbarVertical?.remove();
          navbarTop?.remove();
          topNavSlim?.remove();
          navbarCombo?.remove();
          navbarComboSlim?.remove();
          dualNav?.remove();
          navbarTopSlim.removeAttribute('style');
          document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
        } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
          navbarDefault?.remove();
          navbarTop?.remove();
          topNavSlim?.remove();
          navbarCombo?.remove();
          navbarTopSlim?.remove();
          dualNav?.remove();
          navbarComboSlim.removeAttribute('style');
          navbarVertical.removeAttribute('style');
          document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
        } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
          navbarDefault?.remove();
          topNavSlim?.remove();
          navbarVertical?.remove();
          navbarTopSlim?.remove();
          navbarCombo?.remove();
          navbarComboSlim?.remove();
          dualNav?.remove();
          navbarTop.removeAttribute('style');
          document.documentElement.setAttribute('data-navigation-type', 'horizontal');
        } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
          topNavSlim?.remove();
          navbarTop?.remove();
          navbarTopSlim?.remove();
          navbarDefault?.remove();
          navbarComboSlim?.remove();
          dualNav?.remove();
          navbarCombo.removeAttribute('style');
          navbarVertical.removeAttribute('style');
          document.documentElement.setAttribute('data-navigation-type', 'combo');
        } else {
          topNavSlim?.remove();
          navbarTop?.remove();
          navbarTopSlim?.remove();
          navbarCombo?.remove();
          navbarComboSlim?.remove();
          dualNav?.remove();
          navbarDefault.removeAttribute('style');
          navbarVertical.removeAttribute('style');
        }

        var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
        var navbarTop = document.querySelector('.navbar-top');
        if (navbarTopStyle === 'darker') {
          navbarTop.setAttribute('data-navbar-appearance', 'darker');
        }

        var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
        var navbarVertical = document.querySelector('.navbar-vertical');
        if (navbarVerticalStyle === 'darker') {
          navbarVertical.setAttribute('data-navbar-appearance', 'darker');
        }
      </script>
      <div class="content">
        <h2 class="mb-2 lh-sm">PANVAC DOCUMENT</h2>
        <p class="text-body-tertiary lead mb-2">A form UI to enable users to achieve a goal through a series of steps.</p>
        <div class="row mb-9 g-4 mt-4">
          <div class="col-12 col-xxl-6">
           

          <div class="col-12 col-xxl-6">
            <div class="card shadow-none border" data-component-card="data-component-card">
              <div class="card-header p-4 border-bottom bg-body">
                <div class="row g-3 justify-content-between align-items-center">
                  <div class="col-12 col-md">
                    <h4 class="text-body mb-0" data-anchor="data-anchor">Vaccine report</h4>
                  </div>
                 
                </div>
              </div>
              <div class="card-body p-0">
                
                <div class="p-4 code-to-copy">
                  <div class="card theme-wizard mb-5" data-theme-wizard="data-theme-wizard">
                    <div class="card-header bg-body-highlight pt-3 pb-2 border-bottom-0">
                      <ul class="nav justify-content-between nav-wizard nav-wizard-success">
                        <li class="nav-item"><a class="nav-link active fw-semibold" href="#bootstrap-wizard-validation-tab1" data-bs-toggle="tab" data-wizard-step="1">
                            <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-lock"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Head</span></div>
                          </a></li>
                        <li class="nav-item"><a class="nav-link fw-semibold" href="#bootstrap-wizard-validation-tab2" data-bs-toggle="tab" data-wizard-step="2">
                            <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-user"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Sterility</span></div>
                          </a></li>
                        <li class="nav-item"><a class="nav-link fw-semibold" href="#bootstrap-wizard-validation-tab3" data-bs-toggle="tab" data-wizard-step="3">
                            <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-file-alt"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Safety</span></div>
                          </a></li>
                        <li class="nav-item"><a class="nav-link fw-semibold" href="#bootstrap-wizard-validation-tab4" data-bs-toggle="tab" data-wizard-step="4">
                            <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-file-alt"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Potency</span></div>
                          </a></li>
                          <li class="nav-item"><a class="nav-link fw-semibold" href="#bootstrap-wizard-validation-tab5" data-bs-toggle="tab" data-wizard-step="5">
                            <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-file-alt"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Identity</span></div>
                          </a></li>
                          <li class="nav-item"><a class="nav-link fw-semibold" href="#bootstrap-wizard-validation-tab6" data-bs-toggle="tab" data-wizard-step="6">
                            <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-file-alt"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Stability</span></div>
                          </a></li>
                        <li class="nav-item"><a class="nav-link fw-semibold" href="#bootstrap-wizard-validation-tab7" data-bs-toggle="tab" data-wizard-step="7">
                            <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-check"></span></span></span><span class="d-none d-md-block mt-1 fs-9">Done</span></div>
                          </a></li>
                      </ul>
                    </div>
                    <div class="card-body pt-4 pb-0">
                      <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab1" id="bootstrap-wizard-validation-tab1">
                       <form class="needs-validation" id="wizardValidationForm1" novalidate="novalidate" data-wizard-form="1">
                        @csrf
                            <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Come from manifacturer</label><select class="form-select" name="cfm" id="bootstrap-wizard-validation-gender" required="required">
                                    <option value="">... Select ...</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-2"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard">Control Quality Number</label><input class="form-control" type="text" name="cqn" placeholder="John Smith" required="required" id="bootstrap-wizard-validation-wizard-name" />
                                  <div class="invalid-feedback">Please choose a CQN.</div>
                                 </div>
                               </div>
                            <div class="col-sm-6">
                              <div class="mb-2"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard-name">Name</label><input class="form-control" type="text" name="name" placeholder="John Smith" required="required" id="bootstrap-wizard-validation-wizard-name" />
                                <div class="invalid-feedback">Please choose a name</div>
                               </div>
                             </div>
                            <div class="col-sm-6">
                                <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-wizard">Address</label><input class="form-control" type="text" name="address" placeholder="address" required="required" id="bootstrap-wizard-validation-wizard" />
                                <div class="invalid-feedback">You must add an Adress</div>
                                </div>
                            </div>
                            
                              <div class="col-sm-6">
                                <div class="mb-2 mb-sm-0"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard">VaccineType</label><input class="form-control" type="text" name="vacinetype" placeholder="vaccine type" required="required" id="bootstrap-wizard-validation-wizard" />
                                  <div class="invalid-feedback">Please enter Vaccine Type</div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="mb-2"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard">Panvac Reference No</label><input class="form-control" type="text" name="prn" placeholder="Panvac Reference No" required="required" id="bootstrap-wizard-validation-wizard" />
                                  <div class="invalid-feedback">Please enter Panvac Reference</div>
                                </div>
                              </div>
                            <div class="col-sm-6">
                                <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-wizard-datepicker">Date of sample receipt</label><input name="dsr" class="form-control datetimepicker" type="text" placeholder="d/m/y" data-options='{"dateFormat":"d/m/y","disableMobile":true}' required="required" id="bootstrap-wizard-validation-wizard-datepicker" />
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-2"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard">Number of vials</label><input class="form-control" type="text" name="nof" placeholder="20" required="required" id="bootstrap-wizard-validation-wizard" />
                                  <div class="invalid-feedback">Please enter number of Vial</div>
                                 </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-2"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard">Bacth Number</label><input class="form-control" type="text" name="bn" placeholder="20" required="required" id="bootstrap-wizard-validation-wizard" />
                                  <div class="invalid-feedback">Please enter number Batch</div>
                                 </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-2"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard">Date Of Manufacture</label><input class="form-control" type="text" name="dom" placeholder="10/23/12" required="required" id="bootstrap-wizard-validation-wizard" />
                                  <div class="invalid-feedback">Please enter a date</div>
                                 </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-2"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard">Expiry Date</label><input class="form-control" type="text" name="ed" placeholder="10/23/12" required="required" id="bootstrap-wizard-validation-wizard" />
                                  <div class="invalid-feedback">Please enter a date</div>
                                 </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-2"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard">Dose/vial</label><input class="form-control" type="text" name="dv" placeholder="100" required="required" id="bootstrap-wizard-validation-wizard" />
                                  <div class="invalid-feedback">Please enter number Batch</div>
                                 </div>
                            </div>

                            </div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="terms" required="required" checked="checked" id="bootstrap-wizard-validation-wizard-checkbox" /><label class="form-check-label text-body" for="bootstrap-wizard-validation-wizard-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label></div>
                          </form>
                        </div>
                        <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab2" id="bootstrap-wizard-validation-tab2">
                        <form class="needs-validation" id="wizardValidationForm2" novalidate="novalidate" data-wizard-form="2">
                            
                            @csrf
                            <div class="row g-3 mb-3">
                            <button type="button" class="btn btn-secondary duplicate-step">+</button>
                            <button type="button" class="btn btn-danger remove-step" style="display: none;">-</button>
                              
                              <script>

                                        document.addEventListener('DOMContentLoaded', function () {

                                        function cloneStep(stepContainer) {
                                            const formContent = stepContainer.cloneNode(true);
                                            
                                            // Compte le nombre de blocs existants pour obtenir le suffixe
                                            const blockCount = document.querySelectorAll('.row.g-3.mb-3').length;
                                            
                                            // Change les `name` de chaque élément dupliqué pour éviter les conflits
                                            formContent.querySelectorAll('select').forEach((element, index) => {
                                                element.name = `${element.name}${blockCount}`;
                                            });

                                            // Insère le clone après le bloc d'origine
                                            stepContainer.parentNode.insertBefore(formContent, stepContainer.nextSibling);
                                            
                                            toggleRemoveButtonVisibility(stepContainer.parentNode);
                                        }

                                        function removeLastStep(stepContainer) {
                                            const allForms = stepContainer.parentNode.querySelectorAll('.row.g-3.mb-3');
                                            if (allForms.length > 1) {
                                                stepContainer.parentNode.removeChild(allForms[allForms.length - 1]);
                                            }
                                            
                                            toggleRemoveButtonVisibility(stepContainer.parentNode);
                                        }

                                        function toggleRemoveButtonVisibility(parentContainer) {
                                            const allForms = parentContainer.querySelectorAll('.row.g-3.mb-3');
                                            allForms.forEach((form, index) => {
                                                const removeButton = form.querySelector('.remove-step');
                                                removeButton.style.display = (allForms.length > 1) ? 'inline-block' : 'none';
                                            });
                                        }

                                        document.querySelectorAll('.duplicate-step').forEach(button => {
                                            button.addEventListener('click', function () {
                                                const stepContainer = button.closest('.row.g-3.mb-3');
                                                if (stepContainer) {
                                                    cloneStep(stepContainer);
                                                }
                                            });
                                        });

                                        document.querySelectorAll('.remove-step').forEach(button => {
                                            button.addEventListener('click', function () {
                                                const stepContainer = button.closest('.row.g-3.mb-3');
                                                if (stepContainer) {
                                                    removeLastStep(stepContainer);
                                                }
                                            });
                                        });
                                        });

                            
                            </script>
                            
                                <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Test Conducted</label><select class="form-select" name="multiselectTC" id="bootstrap-wizard-validation-gender" required="required">
                                        <option value="Null">Null</option>
                                        <option value="In laboratory Animals">In laboratory Animals</option>
                                        <option value="In host Animals">In host Animals</option>
                                        <option value=" Residual formalin"> Residual formalin</option>
                                        <option value=" Innocuity"> Innocuity</option>
                                      </select>
                                     <div class="invalid-feedback">This field is required.</div>
                                   </div>
                              </div>
                              <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Method Used</label><select class="form-select" name="multiselectMU" id="bootstrap-wizard-validation-gender" required="required">
                                        <option value="Null">Null</option>
                                        <option value="Inoculation in mince">Inoculation in mice</option>
                                        <option value="Inoculation in guinea pigs">Inoculation in guinea pigs
                                        </option>
                                        <option value="Inoculation in rabbits">Inoculation in rabbits</option>
                                        <option value="Inoculation in chicken">Inoculation in chicken</option>
                                        <option value="Inoculation in goats/sheep">Inoculation in goats/sheep
                                        </option>
                                        <option value="Inoculation in cattle">Inoculation in cattle</option>
                                        <option value="Basic fuchsin-Hci">Basic fuchsin-HCI</option>
                                        <option value="Culture on BHK cells">Culture on BHK cells</option>
                                        <option value="Culture on vero cells">Culture on vero cells</option>
                                        <option value="Culture on MDBK cells">Culture on MDBK cells</option>
                                    </select>
                                    <div class="invalid-feedback">This field is required.</div>
                                   </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Result Obtained</label><select class="form-select" name="multiselectRO" id="bootstrap-wizard-validation-gender" required="required">
                                        <option value="Null">Null</option>
                                                        <option value="Adverse reactions observed">Adverse reactions
                                                            observed
                                                        </option>
                                                        <option value="No Adverse reactions observed">No Adverse reactions
                                                            observed
                                                        </option>
                                                        <option value="Not done">Not done</option>
                                                        <option value="CPE observed">CPE observed</option>
                                                        <option value="No CPE observed">No CPE observed</option>
                                                        <option value="Not done">Not done</option>
                                                        <option value="other1">Other</option>
                                      </select>
                                     <div class="invalid-feedback">This field is required.</div>
                                   </div>
                              </div>
                              <div class="col-sm-6">
                                            <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Reference Values</label><select class="form-select" name="multiselectMV" id="bootstrap-wizard-validation-gender" required="required">
                                                 <option value="Null">Null</option>
                                                 <option value="Absence of adverse reactions">Absence of adverse
                                                            reactions
                                                 </option>
                                                 <option value="&le;1.0%"> &le;1.0%
                                                 </option>
                                                 <option value=" Absence of CPE"> Absence of CPE</option>
                                            </select>
                                         <div class="invalid-feedback">This field is required.</div>
                                   </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Interpretation/opinion</label><select class="form-select" name="multiselectIO" id="bootstrap-wizard-validation-gender" required="required">
                                        <option value="">... NaN ...</option>
                                        <option value="Pass">Pass</option>
                                        <option value="Fail">Fail</option>
                                        <option value="InsufficientSample">Insufficient Samples</option>
                                        <option value="Pass*">Pass*</option>
                                    </select>
                                    <div class="invalid-feedback">This field is required.</div>
                                   </div>
                                </div>
                            </div>
                          </form>







                          
                        </div>
                        <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab3" id="bootstrap-wizard-validation-tab3">
                          <form class="mb-2 needs-validation" id="wizardValidationForm3" novalidate="novalidate" data-wizard-form="3">
                            @csrf
                            <div class="row g-3 mb-3">
                                <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Test Conducted</label><select class="form-select" name="multiselectSTC" id="bootstrap-wizard-validation-gender" required="required">
                                        <option value="Null">Null</option>
                                        <option value="Bacteria">Bacteria</option>
                                        <option value="Bacteria / Fungi">Bacteria / Fungi</option>
                                        <option value="Mycoplasma contamination">Mycoplasma contamination
                                        </option>
                                        <option value=" BVD contamination"> BVD contamination</option>
                                      </select>
                                     <div class="invalid-feedback">This field is required.</div>
                                   </div>
                              </div>
                              <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Method Used</label><select class="form-select" name="multiselectSMU" id="bootstrap-wizard-validation-gender" required="required">
                                        <option value="Null">Null</option>
                                        <option value="Culture on BA/TSA">Culture on BA/TSA</option>
                                        <option value="Culture on FTG/TSB">Culture on FTG/TSB</option>
                                        <option value="Culture on FTG/TSB">Conventional PCR</option>
                                        <option value="classical PCR">Classical PCR</option>
                                        <option value=" Culture and PPLO"> Culture and PPLO</option>
                                        <option value=" Real Time PCR"> Real Time PCR</option>
                                    </select>
                                    <div class="invalid-feedback">This field is required.</div>
                                   </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Result Obtained</label><select class="form-select" name="multiselectSRO" id="bootstrap-wizard-validation-gender" required="required">
                                        <option value="Null">Null</option>
                                                        <option value="Growth obtained">Growth obtained</option>
                                                        <option value="No growth obtained">No growth obtained</option>
                                                        <option value="Pure colonies obtained">Pure colonies obtained
                                                        </option>
                                                        <option value="Contaminated colonies obtained">Contaminated
                                                            colonies
                                                            obtained</option>
                                                        <option value="Growth obtained">Growth obtained</option>
                                                        <option value="No growth obtained">No growth obtained</option>
                                                        <option value="Identical band obtained">Identical band obtained
                                                        </option>
                                                        <option value="No identical band obtained">No identical band
                                                            obtained
                                                        </option>
                                                        <option value="Growth obtained">Growth obtained</option>
                                                        <option value="No growth obtained">No growth obtained</option>
                                                        <option value="Identical amplification plot obtained">Identical
                                                            amplification plot obtained
                                                        </option>
                                                        <option value="No identical amplification plot obtained">No
                                                            identical
                                                            amplification plot
                                                            obtained</option>
                                                        <option value="Identical dissociation curve obtained">Identical
                                                            dissociation curve obtained
                                                        </option>
                                                        <option value="No identical dissociation curve obtained">No
                                                            identical
                                                            dissociation curve
                                                            obtained</option>
                                                        <option value="Not done">Not done</option>
                                                        <option value="other">Other</option>
                                      </select>
                                     <div class="invalid-feedback">This field is required.</div>
                                   </div>
                              </div>
                              <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Reference Values</label><select class="form-select" name="multiselectSMV" id="bootstrap-wizard-validation-gender" required="required">
                                        <option value="Null">Null</option>
                                        <option value="Absence of growth">Absence of growth</option>
                                        <option value="Presence of pure colonies">Presence of pure colonies
                                        </option>
                                        <option value=" &lt;1 colony/ dose"> &lt;1 colony/ dose </option>
                                        <option value="Absence of growth"> Absence of growth </option>
                                        <option value=" Absence of identical band"> Absence of identical band
                                        </option>
                                        <option value="Absence of grow"> Absence of grow </option>
                                        <option value="Absence of identical band"> Absence of identical
                                            amplification plot
                                        </option>
                                        <option value="Absence of identical dissociation curve"> Absence of
                                            identical dissociation
                                            curve</option>
                                    </select>
                                    <div class="invalid-feedback">This field is required.</div>
                                   </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Interpretation/opinion</label><select class="form-select" name="multiselectSIO" id="bootstrap-wizard-validation-gender" required="required">
                                        <option value="">... NaN ...</option>
                                        <option value="Pass">Pass</option>
                                        <option value="Fail">Fail</option>
                                        <option value="InsufficientSample">Insufficient Samples</option>
                                        <option value="Pass*">Pass*</option>
                                    </select>
                                    <div class="invalid-feedback">This field is required.</div>
                                   </div>
                                </div>
                            </div>
                          </form>
                        </div>
                         <!-- Formulaire pour Checking -->
                        <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab4" id="bootstrap-wizard-validation-tab4">
                          <form class="needs-validation" id="wizardValidationForm4" novalidate="novalidate" data-wizard-form="4">
                            @csrf
                            <div class="row g-3 mb-3">
                                <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard"></label><input class="form-control" type="text" name="multiselectPTC" placeholder="100" required="required" id="bootstrap-wizard-validation-wizard" />
                                        <div class="invalid-feedback">Please enter a value</div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Method Used</label><select class="form-select" name="multiselectPMU" id="bootstrap-wizard-validation-gender" required="required">
                                        <option value="Null">Null</option>
                                        <option value="Titration on vero cells">Titration on vero cells
                                        </option>
                                        <option value="Titration on MDBK cells">Titration on MDBK cells
                                        </option>
                                        <option value="Titration on BHK cells">Titration on BHK cells
                                        </option>
                                        <option value="Titration on CEF cells">Titration on CEF cells
                                        </option>
                                        <option value="Plaque assay">Plaque assay</option>
                                        <option value="Titration on embryonated eggs">Titration on
                                            embryonated
                                            eggs
                                        </option>
                                        <option value="Challenge in laboratory animals">Challenge in
                                            laboratory
                                            animals
                                        </option>
                                        <option value="Immune response">Immune response</option>
                                        <option value="BCA">BCA</option>
                                        <option value="IC-ELISA">IC-ELISA</option>
                                        <option value="Immune response">Immune response</option>
                                        <option value="other2">Other</option>
                                    </select>
                                    <div class="invalid-feedback">This field is required.</div>
                                   </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard"></label><input class="form-control" type="text" name="multiselectPRO" placeholder="100" required="required" id="bootstrap-wizard-validation-wizard" />
                                        <div class="invalid-feedback">Please enter a value</div>
                                  </div>
                               </div>
                              <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard"></label><input class="form-control" type="text" name="multiselectPMV" placeholder="100" required="required" id="bootstrap-wizard-validation-wizard" />
                                        <div class="invalid-feedback">Please enter a value</div>
                                    </div>
                              </div>
                                <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Interpretation/opinion</label><select class="form-select" name="multiselectPIO" id="bootstrap-wizard-validation-gender" required="required">
                                        <option value="">... NaN ...</option>
                                        <option value="Pass">Pass</option>
                                        <option value="Fail">Fail</option>
                                        <option value="InsufficientSample">Insufficient Samples</option>
                                        <option value="Pass*">Pass*</option>
                                    </select>
                                    <div class="invalid-feedback">This field is required.</div>
                                   </div>
                                </div>
                            </div>                          
                            
                          </form>

                        </div>


                    <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab5" id="bootstrap-wizard-validation-tab5">
                          <form class="needs-validation" id="wizardValidationForm5" novalidate="novalidate" data-wizard-form="5">
                            @csrf
                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <div class="mb-2"><label class="form-label text-body" for="bootstrap-wizard-validation-wizard"></label><input class="form-control" type="text" name="multiselectITC" placeholder="100" required="required" id="bootstrap-wizard-validation-wizard" />
                                    <div class="invalid-feedback">Please enter a value</div>
                                </div>
                          </div>
                          <div class="col-sm-6">
                                <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Method Used</label><select class="form-select" name="multiselectIMU" id="bootstrap-wizard-validation-gender" required="required">
                                    <option value="Null">Null</option>
                                    <option value="One step RT-PCR">One step RT-PCR</option>
                                    <option value="Classical PCR">Classical PCR</option>
                                    <option value="Real-time PCR">Real-time PCR</option>
                                    <option value="Immune response">Immune response</option>
                                    <option value="Challenge in laboratory animals">Challenge in laboratory
                                        animals
                                    </option>
                                    <option value="IC-ELISA">IC-ELISA</option>
                                    <option value="Biotechmical test">Biochemical tests</option>
                                </select>
                                <div class="invalid-feedback">This field is required.</div>
                               </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Result Obtained</label><select class="form-select" name="multiselectIRO" id="bootstrap-wizard-validation-gender" required="required">
                                    <option value="Null">Null</option>
                                    <option value="Null">Null</option>
                                    <option value="Identical band obtained">Identical band obtained
                                    </option>
                                    <option value="No Identical band obtained">No Identical band obtained
                                    </option>
                                    <option value="Identical amplification plot obtained">Identical
                                        amplification plot
                                        obtained </option>
                                    <option value="No Identical amplification plot obtained">No Identical
                                        amplification
                                        plot obtained</option>
                                    <option value="Identical dissociation curve obtained">Identical
                                        dissociation curve
                                        obtained </option>
                                    <option value="No Identical dissociation curve obtained ">No Identical
                                        dissociation
                                        curve obtained </option>
                                    <option value="Reference antigen neutralized">Reference antigen
                                        neutralized
                                    </option>
                                    <option value="Reference antigen not neutralized">Reference antigen not
                                        neutralized
                                    </option>
                                    <option value="Vaccinated animals survived Challenge">Vaccinated
                                        animals
                                        survived
                                        Challenge </option>
                                    <option
                                        value="Vaccinated did not
                                    survive Challenge">
                                        Vaccinated did not
                                        survive Challenge
                                    </option>
                                    <option value="Matching biohcemical profile obtained">Matching
                                        biochemical
                                        profile
                                        obtained</option>
                                    <option value="No Matching biochemical profile obtained">No Matching
                                        biochemical profile
                                        obtained</option>
                                  </select>
                                 <div class="invalid-feedback">This field is required.</div>
                               </div>
                          </div>
                          <div class="col-sm-6">
                                <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Reference Values</label><select class="form-select" name="multiselectIMV" id="bootstrap-wizard-validation-gender" required="required">
                                    <option value="Null">Null</option>
                                    <option value="Presence of identical band ">Presence of identical band
                                    </option>
                                    <option value="Absence of identical band">Absence of identical band
                                    </option>
                                    <option value="Presence of identical amplification plot">Presence of
                                        identical
                                        amplification plot</option>
                                    <option value="Presence of identical dissociation curve">Presence of
                                        identical
                                        dissociation curve</option>
                                    <option value="neutralization of Reference antigen">Neutralization of
                                        Reference antigen
                                    </option>
                                    <option value="Survival of Vaccinated animal after Challenge">Survival
                                        of
                                        Vaccinated
                                        animal after Challenge</option>
                                    <option value="Matching biochemical profile ">Matching biochemical
                                        profile
                                    </option>
                                </select>
                                <div class="invalid-feedback">This field is required.</div>
                               </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Interpretation/opinion</label><select class="form-select" name="multiselectIIO" id="bootstrap-wizard-validation-gender" required="required">
                                    <option value="">... NaN ...</option>
                                    <option value="Pass">Pass</option>
                                    <option value="Fail">Fail</option>
                                    <option value="InsufficientSample">Insufficient Samples</option>
                                    <option value="Pass*">Pass*</option>
                                </select>
                                <div class="invalid-feedback">This field is required.</div>
                               </div>
                            </div>
                        </div>
                    </form>
                        </div>

                    <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab6" id="bootstrap-wizard-validation-tab6">
                         <form class="needs-validation" id="wizardValidationForm6" novalidate="novalidate" data-wizard-form="6">
                            @csrf                   
                            <div class="row g-3 mb-3">
                                <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Test Conducted</label><select class="form-select" name="multiselectSTTC" id="bootstrap-wizard-validation-gender" required="required">
                                        <option value="Null">Null</option>
                                        <option value=" Vacuum"> Vacuum</option>
                                        <option value="Residual Moisture">Residual Moisture</option>
                                        <option value=" Emulsion stability"> Emulsion stability</option>
                                      </select>
                                     <div class="invalid-feedback">This field is required.</div>
                                   </div>
                              </div>
                              <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Method Used</label><select class="form-select" name="multiselectSTMU" id="bootstrap-wizard-validation-gender" required="required">
                                        <option value="Null">Null</option>
                                        <option value="Spark tester">Spark tester</option>
                                        <option value="Syringe">Syringe</option>
                                        <option value="Thermo-gravimetric">Thermo-gravimetric</option>
                                        <option value="Drop dispersion ">Drop dispersion </option>
                                        <option value="Drop Centrifugation ">Centrifugation </option>
                                    </select>
                                    <div class="invalid-feedback">This field is required.</div>
                                   </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Result Obtained</label><select class="form-select" name="multiselectSTRO" id="bootstrap-wizard-validation-gender" required="required">
                                        <option value="Null">Null</option>
                                        <option value="Null">Null</option>
                                        <option value="Violated light observed">Violated light observed
                                        </option>
                                        <option value="No Violet light observed">No violet light observed
                                        </option>
                                        <option value="Suction of observed">Suction of observed</option>
                                        <option value="No Suction observed">No Suction observed</option>
                                        <option value="No dispersion">No dispersion</option>
                                        <option value="dispersion">Dispersion </option>
                                        <option value="other3">Other</option>
                                      </select>
                                     <div class="invalid-feedback">This field is required.</div>
                                   </div>
                              </div>
                              <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Reference Values</label><select class="form-select" name="multiselectSTMV" id="bootstrap-wizard-validation-gender" required="required">
                                        <option value="Null">Null</option>
                                        <option value="Presence of violet light">Presence of violet light
                                        </option>
                                        <option value="Presence of Suction ">Presence of suction </option>
                                        <option value="Null">Null</option>
                                        <option value=" &le;2.0%"> &le;2.0% </option>
                                        <option value=" &le;2.5%"> &le;2.5% </option>
                                        <option value=" &le;3.0%"> &le;3.0% </option>
                                        <option value="&le;3.5% "> &le;3.5% </option>
                                        <option value=" Abscence of dispersion"> Abscence of dispersion
                                        </option>
                                        <option value="&lt;5.0% separation"> &lt;5.0% separation </option>
                                    </select>
                                    <div class="invalid-feedback">This field is required.</div>
                                   </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-gender">Interpretation/opinion</label><select class="form-select" name="multiselectSTIO" id="bootstrap-wizard-validation-gender" required="required">
                                        <option value="">... NaN ...</option>
                                        <option value="Pass">Pass</option>
                                        <option value="Fail">Fail</option>
                                        <option value="InsufficientSample">Insufficient Samples</option>
                                        <option value="Pass*">Pass*</option>
                                    </select>
                                    <div class="invalid-feedback">This field is required.</div>
                                   </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        
                        <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab7" id="bootstrap-wizard-validation-tab7">
                          <div class="row flex-center pb-8 pt-4 gx-3 gy-4">
                            <div class="col-12 col-sm-auto">
                              <div class="text-center text-sm-start"><img class="d-dark-none" src="{{ asset('assetsn/assets/img/spot-illustrations/38.webp') }}" alt="" width="220" /><img class="d-light-none" src="{{ asset('assetsn/assets/img/spot-illustrations/dark_38.webp') }}" alt="" width="220" /></div>
                            </div>
                            <div class="col-12 col-sm-auto">
                              <div class="text-center text-sm-start">
                                <h5 class="mb-3">You are all set!</h5>
                                <p class="text-body-emphasis fs-9">Now you can access your account<br />anytime anywhere</p><a class="btn btn-primary px-6" href="{{route('reportn')}}">Start Over</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer border-top-0" data-wizard-footer="data-wizard-footer">
                      <div class="d-flex pager wizard list-inline mb-0"><button class="d-none btn btn-link ps-0" type="button" data-wizard-prev-btn="data-wizard-prev-btn"><span class="fas fa-chevron-left me-1" data-fa-transform="shrink-3"></span>Previous</button>
                        <div class="flex-1 text-end"><button class="btn btn-primary px-6 px-sm-6" type="submit" data-wizard-next-btn="data-wizard-next-btn">Next<span class="fas fa-chevron-right ms-1" data-fa-transform="shrink-3"> </span></button></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          <script>
            document.addEventListener('DOMContentLoaded', function() {
              const forms = document.querySelectorAll('.needs-validation');
              let formDataCollection = {}; // Objet pour stocker les données de toutes les étapes
              let currentStep = 1; // Étape actuelle, commence à 1
          
              // Fonction pour afficher une étape spécifique
              function showStep(step) {
                forms.forEach((form, index) => {
                  form.parentElement.classList.toggle('active', index === step - 1); // Affiche l'étape actuelle
                });
              }
          
              // Fonction pour gérer la soumission et le passage à l'étape suivante
              function handleNextStep() {
                const currentForm = document.querySelector(`#wizardValidationForm${currentStep}`);
          
                // Valider le formulaire de l'étape actuelle
                if (currentForm.checkValidity() === false) {
                  currentForm.classList.add('was-validated'); // Ajoute la classe pour afficher les messages de validation
                  return; // Arrête l'exécution si la validation échoue
                }
          
                // Collecte les données de l'étape actuelle
                const formData = new FormData(currentForm);
                formData.forEach((value, key) => {
                  formDataCollection[key] = value; // Ajoute chaque clé-valeur à formDataCollection
                });
          
                console.log('Données jusqu\'à l\'étape actuelle:', formDataCollection);
          
                currentStep++; // Passe à l'étape suivante
          
                // Affiche l'étape suivante ou soumet les données finales si on a atteint la dernière étape
                if (currentStep <= forms.length) {
                  showStep(currentStep); // Affiche l'étape suivante
                } else {
                  console.log('Toutes les données du formulaire:', formDataCollection);
                  // Ici, vous pouvez envoyer les données avec un appel AJAX ou une autre méthode de votre choix
                  sendDataToServer(formDataCollection);

                }
              }
              
                                                    // Fonction pour envoyer les données au serveur après la collecte complète
                     function sendDataToServer(data) {

                   
                    // Afficher les données que nous allons envoyer pour vérifier si elles sont correctes
                    console.log('Données envoyées au serveur:', data);
                    console.log('Données envoyées au serveur2:', JSON.stringify(data));

                    fetch('{{ url('admin/store') }}', {
                        method: 'POST', // Envoie de la requête en POST
                        headers: {
                            'Content-Type': 'application/json', // Spécifie que l'on envoie des données JSON
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Ajoute le token CSRF
                        },
                        body: JSON.stringify(data) // Transforme l'objet JavaScript en chaîne JSON
                    })
                    .then(response => {
                        console.log('Réponse reçue du serveur:', response);

                        // Vérifie si la réponse est ok avant de la traiter
                        if (!response.ok) {
                            throw new Error('Erreur de réponse du serveur : ' + response.statusText);
                        }
                        return response.text().then(text => text ? JSON.parse(text) : {}); // Traite la réponse en JSON
                    })
                    .then(data => {
                        console.log('Données reçues du serveur:', data);

                        if (data.success) {
                            alert('Les données ont été envoyées avec succès !');
                        } else {
                            alert('Une erreur est survenue lors de l\'envoi des données.');
                        }
                    })
                    .catch(error => {
                        console.error('Erreur d\'envoi:', error);
                    });
                }

              // Affiche la première étape au chargement de la page
              showStep(currentStep);
          
              // Ajoute un événement de clic sur le bouton "Next"
              document.querySelector('[data-wizard-next-btn]').addEventListener('click', handleNextStep);
            });
          </script>
          
 
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
      <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
        <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
          <div>
            <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-8"></span>Theme Customizer</h5>
            <p class="mb-0 fs-9">Explore different styles according to your preferences</p>
          </div><button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fas fa-times fs-8"> </span></button>
        </div><button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span class="fas fa-arrows-rotate me-2 fs-10"></span>Reset to default</button>
      </div>
      <div class="offcanvas-body scrollbar px-card" id="themeController">
        <div class="setting-panel-item mt-0">
          <h5 class="setting-panel-item-title">Color Scheme</h5>
          <div class="row gx-2">
            <div class="col-4"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"  alt=""/></span><span class="label-text">Light</span></label></div>
            <div class="col-4"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"  alt=""/></span><span class="label-text"> Dark</span></label></div>
            <div class="col-4"><input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs-9" for="themeSwitcherAuto"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"  alt=""/></span><span class="label-text"> Auto</span></label></div>
          </div>
        </div>
        <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="setting-panel-item-title mb-1">RTL </h5>
            <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixIsRTL" /></div>
          </div>
          <p class="mb-0 text-body-tertiary">Change text direction</p>
        </div>
        <div class="border border-translucent rounded-3 p-4 setting-panel-item bg-body-emphasis">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="setting-panel-item-title mb-1">Support Chat </h5>
            <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixSupportChat" /></div>
          </div>
          <p class="mb-0 text-body-tertiary">Toggle support chat</p>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Navigation Type</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio" value="vertical" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionVertical"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"  alt=""/><img class="img-fluid img-prototype d-light-none"  alt=""/></span><span class="label-text">Vertical</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionHorizontal"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"  alt=""/><img class="img-fluid img-prototype d-light-none"   alt=""/></span><span class="label-text"> Horizontal</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio" value="combo" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionCombo"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"  alt=""/><img class="img-fluid img-prototype d-light-none"  alt=""/></span><span class="label-text"> Combo</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio" value="dual-nav" data-theme-control="phoenixNavbarPosition" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarPositionTopDouble"> <span class="rounded d-block"><img class="img-fluid img-prototype d-dark-none"  alt=""/><img class="img-fluid img-prototype d-light-none"  alt=""/></span><span class="label-text"> Dual nav</span></label></div>
          </div>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbar-style-default" type="radio" name="config.name" value="default" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-default"> <img class="img-fluid img-prototype d-dark-none"  alt="" /><img class="img-fluid img-prototype d-light-none"  alt="" /><span class="label-text d-dark-none"> Default</span><span class="label-text d-light-none">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker" data-theme-control="phoenixNavbarVerticalStyle" /><label class="btn d-block w-100 btn-navbar-style fs-9" for="navbar-style-dark"> <img class="img-fluid img-prototype d-dark-none"  alt="" /><img class="img-fluid img-prototype d-light-none"  alt="" /><span class="label-text d-dark-none"> Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
          </div>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio" value="default" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"  alt=""/><img class="img-fluid img-prototype d-light-none mb-0"  alt=""/></span><span class="label-text">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim" data-theme-control="phoenixNavbarTopShape" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"  alt=""/><img class="img-fluid img-prototype d-light-none mb-0"  alt=""/></span><span class="label-text"> Slim</span></label></div>
          </div>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio" value="default" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"  alt=""/><img class="img-fluid img-prototype d-light-none mb-0"  alt=""/></span><span class="label-text">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio" value="darker" data-theme-control="phoenixNavbarTopStyle" /><label class="btn d-inline-block btn-navbar-style fs-9" for="navbarTopDarker"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0"  alt=""/><img class="img-fluid img-prototype d-light-none mb-0"  alt=""/></span><span class="label-text d-dark-none">Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
          </div>
        </div><a class="bun btn-primary d-grid mb-3 text-white mt-5 btn btn-primary" href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/" target="_blank">Purchase template</a>
      </div>
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
      <div class="card-body d-flex align-items-center px-2 py-1">
        <div class="position-relative rounded-start" style="height:34px;width:28px">
          <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="#ffffff" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></span></div>
        </div><small class="text-uppercase text-body-tertiary fw-bold py-2 pe-2 ps-1 rounded-end">customize</small>
      </div>
    </a>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('vendorsn/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendorsn/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendorsn/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('vendorsn/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('vendorsn/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('vendorsn/vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('vendorsn/vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('vendorsn/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('vendorsn/vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('vendorsn/vendors/dropzone/dropzone-min.js') }}"></script>
    <script src="{{ asset('vendorsn/vendors/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('vendorsn/vendors/prism/prism.js') }}"></script>
    <script src="{{ asset('assetsn/assets/js/phoenix.js') }}"></script>
  </body>


<!-- Mirrored from prium.github.io/phoenix/v1.18.0/modules/forms/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2024 06:18:33 GMT -->
</html>