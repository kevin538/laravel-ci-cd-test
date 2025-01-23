<!DOCTYPE html>

<html lang="en" class="light-style  layout-menu-fixed   " dir="ltr" data-theme="theme-default"
    data-assets-path="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/"
    data-base-url="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1"
    data-framework="laravel" data-template="vertical-menu-theme-default-light">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>AU-PANVAC | DASHBORD</title>
    <meta name="description"
        content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="U407KWrtG46Z3Q5jYLcV77ZqudXLJLoi10l40EDt">
    <!-- Canonical SEO -->

    <link rel="icon" type="image/x-icon" href="{{ asset('css/assets/logo.png') }}" />


    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/fonts/boxiconsc4a7.css?id=87122b3a3900320673311cebdeb618da') }}" />



    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/css/rtl/theme-default56b8.css?id=cc3d4ef91c8c858754d8ed20c78a3a3c" class="template-customizer-theme-css') }}" />

    <link rel="stylesheet" href="{{ asset('demo/assets/css/democb2e.css?id=24b55ca26d6f2bafc5a21ff5a4bcdfb3') }}" />

    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbarb440.css?id=d9fa6469688548dca3b7e6bd32cb0dc6') }}" />
    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/libs/typeahead-js/typeahead3881.css?id=8fc311b79b2aeabf94b343b6337656cf') }}" />
    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/css/rtl/coref43c.css?id=f1cefeba0c68d327230d2f6538f276fa" class="template-customizer-core-css') }}" />


    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css') }}" />










    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/fonts/boxiconsc4a7.css?id=87122b3a3900320673311cebdeb618da') }}" />
    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/fonts/fontawesome5cae.css?id=89157e39c524ff7f679d3aebf872b7b9') }}" />
    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/fonts/flag-icons5883.css?id=403b97c176f3cdf56a3cbf09107ee240') }}" />

    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}">

    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css') }}">

    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">

    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/fullcalendar/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/quill/editor.css') }}" />

    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/css/rtl/theme-default56b8.css?id=cc3d4ef91c8c858754d8ed20c78a3a3c" class="template-customizer-theme-css') }}" />

    <link rel="stylesheet" href="{{ asset('demo/assets/css/democb2e.css?id=24b55ca26d6f2bafc5a21ff5a4bcdfb3') }}" />

    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbarb440.css?id=d9fa6469688548dca3b7e6bd32cb0dc6') }}" />
    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/libs/typeahead-js/typeahead3881.css?id=8fc311b79b2aeabf94b343b6337656cf') }}" />
    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/css/rtl/coref43c.css?id=f1cefeba0c68d327230d2f6538f276fa" class="template-customizer-core-css') }}" />
    <!-- Vendor Styles -->
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/jquery-timepicker/jquery-timepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/pickr/pickr-themes.css') }}" />

    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('demo/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css') }}" />


    <!-- Page Styles -->
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/css/pages/app-chat.css') }}" />
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/jkanban/jkanban.css') }}" />
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/quill/typography.css') }}" />
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/quill/editor.css') }}" />


    <!-- Page Styles -->
    <link rel="stylesheet" href="../../demo/assets/vendor/css/pages/app-kanban.css" />





    <!-- Page Styles -->
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/css/pages/page-auth.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/css/pages/app-calendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('demo/assets/vendor/css/pages/page-profile.css') }}" />
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="{{ asset('demo/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/js/template-customizer.js') }}"></script>
    <script src="{{ asset('demo/assets/js/config.js') }}"></script>


















</head>

<body>




    <!-- Layout Content -->
    <div class="layout-wrapper layout-content-navbar ">
        <div class="layout-container">

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

                <!-- ! Hide app brand if navbar-full -->
                <div class="app-brand demo">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                        data-bs-toggle="dropdown">
                        <div class="avatar avatar">
                            <img src="{{ asset('css/assets/logo.png') }}" alt class="w-px-40 h-auto rounded-circle">
                        </div>
                    </a> <br>
                    <a href="" class="app-brand-link">

                        <span class="app-brand-text demo menu-text fw-bold ms-2"
                            style="color:  #25c199 ! important; text-transform: uppercase! important;">AU-PANVAC</span>
                    </a>
                    <a href="javascript:void(0);" style="background-color: #25c199"
                        class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">

                    <li class="menu-item ">
                        <a href="/home" class="menu-link ">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div>Dashboards</div>
                        </a>


                        <ul class="menu-sub">

                        </ul>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">VACCINE &amp; CERTIFICATES</span>
                    </li>
                    <li class="menu-item ">
                        <a href="{{ route('info') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-copy"></i>
                            <div> Informations </div>
                        </a>


                    </li>
                    @can('admin')
                        <li class="menu-item ">
                            <a href="{{ route('reportdeleted') }}" class="menu-link">
                                {{--  <i class="menu-icon tf-icons bx bx-detail"></i> --}}
                                <i class="menu-icon tf-icons bx bx-layout"></i>
                                <div> Deleted Reports </div>
                            </a>


                        </li>
                    @endcan










                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>


                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">System</span>
                    </li>




                </ul>

            </aside>








            <!-- Layout page -->
            <div class="layout-page">
                <!-- BEGIN: Navbar-->
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">

                    <!--  Brand demo (display only for navbar-full and hide on below xl) -->

                    <!-- ! Not required for layout-without-menu -->
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item navbar-search-wrapper mb-0">

                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">


                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('css/assets/images.jpeg') }}" alt
                                            class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('css/assets/images.jpeg') }}" alt
                                                            class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">

                                                    <small class="text-muted">
                                                        @if (Auth::check())
                                                            <b>{{ ucfirst(Auth::user()->status) }}</b>
                                                        @else
                                                            <a href="{{ route('login') }}">Login</a>
                                                        @endif
                                                    </small>
                                                    <span class="fw-semibold d-block">

                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle"> {{ ucfirst(Auth::user()->email) }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="bx bx-log-in me-2"></i>
                                            <span class="align-middle"> {{ __('Logout') }} </span>

                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>



                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>

                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper  d-none">
                        <input type="text" class="form-control search-input container-xxl border-0"
                            placeholder="Search..." aria-label="Search...">
                        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                    </div>

                </nav>
                <!-- / Navbar -->
                <!-- END: Navbar-->
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    @yield('content')
                </div>

                <!-- Footer -->
                <!-- Footer-->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">

                    </div>
                </footer>
                <!--/ Footer-->
                <!-- / Footer -->
                <div class="content-backdrop fade"></div>
            </div>
            <!--/ Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    </div>

    <script>
        function toggleTextArea(selectElement) {
            /*  alert(5) */
            var noteTextArea = document.getElementById("note");

            if (selectElement.value !== "Pass*") {
                /*  alert(3) */
                noteTextArea.style.display = "none";
            } else {
                noteTextArea.style.display = "block";
            }
        }
    </script>

    <script>
        function duplicateSelect(button) {
            var inputGroup = button.parentElement;
            var clonedInputGroup = inputGroup.cloneNode(true);
            inputGroup.parentNode.appendChild(clonedInputGroup);

            var removeButton = document.createElement("button");
            removeButton.type = "button";
            removeButton.textContent = "-";
            removeButton.onclick = function() {
                removeInput(this);
            };
            clonedInputGroup.appendChild(removeButton);
        }

        function removeSelect(button) {
            var selectGroup = button.parentElement;
            selectGroup.remove();
        }
    </script>


    <script>
        function duplicateInput(button) {
            var inputGroup = button.parentElement;
            var clonedInputGroup = inputGroup.cloneNode(true);
            inputGroup.parentNode.appendChild(clonedInputGroup);

            var removeButton = document.createElement("button");
            removeButton.type = "button";
            removeButton.textContent = "-";
            removeButton.onclick = function() {
                removeInput(this);
            };
            clonedInputGroup.appendChild(removeButton);
        }

        function removeInput(button) {
            var inputGroup = button.parentElement;
            inputGroup.remove();
        }
    </script>
    {{-- cache  --}}
    <script>
        function toggleInput() {


            var select = document.getElementById("mySelect");
            var input = document.getElementById("myInput");

            if (select.value === "autre") {
                input.hidden = false;
            } else {
                input.hidden = true;
            }
        }
    </script>

    <script>
        function calculateExponential() {
            var baseInput = document.getElementById("baseInput");
            var powerInput = document.getElementById("powerInput");
            var resultElement = document.getElementById("result");

            var base = parseFloat(baseInput.value);
            var power = parseFloat(powerInput.value);

            if (!isNaN(base) && !isNaN(power)) {
                var result = Math.pow(base, power);
                resultElement.textContent = "Résultat : " + result;
            } else {
                resultElement.textContent = "Valeur(s) invalide(s)";
            }
        }
    </script>



    {{-- dupliquer le champs input 1 pour cacher  --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const container = document.getElementById("container");

            container.addEventListener("click", function(event) {
                if (event.target.classList.contains("btn-add")) {
                    const inputGroup = event.target.parentNode;
                    const clonedInputGroup = inputGroup.cloneNode(true);
                    container.appendChild(clonedInputGroup);

                    // Réinitialiser la valeur du champ select et du champ input hidden du clone
                    const selectOption = clonedInputGroup.querySelector(".select-option");
                    const otherInput = clonedInputGroup.querySelector(".other-input");
                    selectOption.value = "";
                    otherInput.value = "";

                    // Cacher le champ input hidden du clone
                    otherInput.style.display = "none";

                    // Ajouter le bouton "-" au clone
                    const removeButton = document.createElement("button");
                    removeButton.className = "btn-remove";
                    removeButton.textContent = "-";
                    clonedInputGroup.appendChild(removeButton);

                    // Désactiver le bouton "+" du clone
                    event.target.disabled = true;

                    // Gérer le clic sur le bouton "-" du clone
                    removeButton.addEventListener("click", function() {
                        container.removeChild(clonedInputGroup);
                        event.target.disabled = false;
                    });


                    // Placer le champ input en bas des boutons   djdbj
                    clonedInputGroup.appendChild(otherInput);
                }
            });
        });

        function toggleOtherInput(select) {
            const inputGroup = select.parentNode;
            const otherInput = inputGroup.querySelector(".other-input");
            if (select.value === "other") {
                otherInput.style.display = "block";
            } else {
                otherInput.style.display = "none";
            }
        }
    </script>
    {{-- dupliquer le champs input 2 pour cacher  --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const container1 = document.getElementById("container1");

            container1.addEventListener("click", function(event) {
                if (event.target.classList.contains("btn-add1")) {
                    const inputGroup = event.target.parentNode;
                    const clonedInputGroup = inputGroup.cloneNode(true);
                    container1.appendChild(clonedInputGroup);

                    // Réinitialiser la valeur du champ select et du champ input hidden du clone
                    const selectOption = clonedInputGroup.querySelector(".select-option1");
                    const otherInput = clonedInputGroup.querySelector(".other-input1");
                    selectOption.value = "";
                    otherInput.value = "";

                    // Cacher le champ input hidden du clone
                    otherInput.style.display = "none";

                    // Ajouter le bouton "-" au clone
                    const removeButton = document.createElement("button");
                    removeButton.className = "btn-remove";
                    removeButton.textContent = "-";
                    clonedInputGroup.appendChild(removeButton);

                    // Désactiver le bouton "+" du clone
                    event.target.disabled = true;

                    // Gérer le clic sur le bouton "-" du clone
                    removeButton.addEventListener("click", function() {
                        container1.removeChild(clonedInputGroup);
                        event.target.disabled = false;
                    });


                    // Placer le champ input en bas des boutons   djdbj
                    clonedInputGroup.appendChild(otherInput);
                }
            });
        });

        function toggleOtherInput1(select) {
            const inputGroup = select.parentNode;
            const otherInput = inputGroup.querySelector(".other-input1");
            if (select.value === "other1") {
                otherInput.style.display = "block";
            } else {
                otherInput.style.display = "none";
            }
        }
    </script>



    {{-- dupliquer le champs input 3 pour cacher mpotency mthod used  --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const container1 = document.getElementById("container2");

            container1.addEventListener("click", function(event) {
                if (event.target.classList.contains("btn-add2")) {
                    const inputGroup = event.target.parentNode;
                    const clonedInputGroup = inputGroup.cloneNode(true);
                    container1.appendChild(clonedInputGroup);

                    // Réinitialiser la valeur du champ select et du champ input hidden du clone
                    const selectOption = clonedInputGroup.querySelector(".select-option2");
                    const otherInput = clonedInputGroup.querySelector(".other-input2");
                    selectOption.value = "";
                    otherInput.value = "";

                    // Cacher le champ input hidden du clone
                    otherInput.style.display = "none";

                    // Ajouter le bouton "-" au clone
                    const removeButton = document.createElement("button");
                    removeButton.className = "btn-remove";
                    removeButton.textContent = "-";
                    clonedInputGroup.appendChild(removeButton);

                    // Désactiver le bouton "+" du clone
                    event.target.disabled = true;

                    // Gérer le clic sur le bouton "-" du clone
                    removeButton.addEventListener("click", function() {
                        container1.removeChild(clonedInputGroup);
                        event.target.disabled = false;
                    });


                    // Placer le champ input en bas des boutons   djdbj
                    clonedInputGroup.appendChild(otherInput);
                }
            });
        });

        function toggleOtherInput2(select) {
            const inputGroup = select.parentNode;
            const otherInput = inputGroup.querySelector(".other-input2");
            if (select.value === "other2") {
                otherInput.style.display = "block";
            } else {
                otherInput.style.display = "none";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('myForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Annuler la soumission initiale du formulaire

            Swal.fire({
                title: 'Confirmation',
                text: 'Are you That Every Information In This Survey Are Correct?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Oui',
                cancelButtonText: 'Non'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Soumettre le formulaire
                    this.submit();
                }
            });
        });
    </script>



    {{-- dupliquer le champs input 3 pour cacher LE DERNIER DE STABILITY  --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const container1 = document.getElementById("container3");

            container1.addEventListener("click", function(event) {
                if (event.target.classList.contains("btn-add3")) {
                    const inputGroup = event.target.parentNode;
                    const clonedInputGroup = inputGroup.cloneNode(true);
                    container1.appendChild(clonedInputGroup);

                    // Réinitialiser la valeur du champ select et du champ input hidden du clone
                    const selectOption = clonedInputGroup.querySelector(".select-option3");
                    const otherInput = clonedInputGroup.querySelector(".other-input3");
                    selectOption.value = "";
                    otherInput.value = "";

                    // Cacher le champ input hidden du clone
                    otherInput.style.display = "none";

                    // Ajouter le bouton "-" au clone
                    const removeButton = document.createElement("button");
                    removeButton.className = "btn-remove";
                    removeButton.textContent = "-";
                    clonedInputGroup.appendChild(removeButton);

                    // Désactiver le bouton "+" du clone
                    event.target.disabled = true;

                    // Gérer le clic sur le bouton "-" du clone
                    removeButton.addEventListener("click", function() {
                        container1.removeChild(clonedInputGroup);
                        event.target.disabled = false;
                    });


                    // Placer le champ input en bas des boutons   djdbj
                    clonedInputGroup.appendChild(otherInput);
                }
            });
        });

        function toggleOtherInput3(select) {
            const inputGroup = select.parentNode;
            const otherInput = inputGroup.querySelector(".other-input3");
            if (select.value === "other3") {
                otherInput.style.display = "block";
            } else {
                otherInput.style.display = "none";
            }
        }
    </script>

























































    <script>
        event.preventDefault();
        document.getElementById("mybou").addEventListener("click", function() {
            document.getElementById("mynput").value = "≥";
        });
    </script>





    <script src="{{ asset('demo/assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/jquery/jquery8853.js?id=08d304be7f95879ae643fabf15fb255a') }}"></script>

    <script src="{{ asset('demo/assets/vendor/libs/popper/popper5751.js?id=70485ad9be8ba3e426172708feb35181') }}"></script>
    <script src="{{ asset('demo/assets/vendor/js/bootstrape305.js?id=3cb2c653a33d885b40641d15713e3994') }}"></script>
    <script
        src="{{ asset('/demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar6188.js?id=44b8e955848dc0c56597c09f6aebf89a') }}">
    </script>
    <script src="{{ asset('demo/assets/vendor/libs/hammer/hammera90c.js?id=5c0a4017d0ce861e87a50c0c1401eb81') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/i18n/i18nbcd7.js?id=74a027f4696264ade8796f88b3d49c14') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/typeahead-js/typeahead60e7.js?id=f6bda588c16867a6cc4158cb4ed37ec6') }}">
    </script>
    <script src="{{ asset('demo/assets/vendor/js/menuf635.js?id=03d9787739b295480194ce0a121ae550') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/jquery-timepicker/jquery-timepicker.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/pickr/pickr.js') }}"></script>
    <script src="{{ asset('demo/assets/js/forms-pickers.js') }}"></script>

    <script src="{{ asset('demo/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

    <script src="{{ asset('demo/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>

    <script src="{{ asset('demo/assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <!-- END: Page Vendor JS-->
    <script src="{{ asset('demo/assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.') }}"></script>



    <script src="{{ asset('demo/assets/vendor/libs/select2/select2.js') }}"></script>


    <script src="{{ asset('demo/js/laravel-user-management.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/jkanban/jkanban.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/quill/katex.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/quill/quill.js') }}"></script>


    <script src="{{ asset('demo/assets/vendor/js/menuf635.js?id=03d9787739b295480194ce0a121ae550') }}"></script>

    <script src="{{ asset('demo/assets/js/maincf4d.js?id=e0aeed34a47c1efb009b120245cce82e') }}"></script>

    <script src="{{ asset('demo/assets/js/ui-modals.js') }}"></script>
    <script src="{{ asset('demo/assets/js/pages-profile.js') }}"></script>


    <script src="{{ asset('demo/assets/js/tables-datatables-basic.js') }}"></script>
    <script src="{{ asset('demo/assets/js/pages-auth.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/fullcalendar/fullcalendar.js') }}"></script>
    <script src="{{ asset('demo/assets/js/app-calendar-events.js') }}"></script>
    <script src="{{ asset('demo/assets/js/app-chat.js') }}"></script>
    <script src="{{ asset('demo/assets/js/app-kanban.js') }}"></script>

    <script src="{{ asset('demo/assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>




























    <script src="{{ asset('demo/assets/js/tables-datatables-basic.js') }}"></script>
    <script src="{{ asset('demo/assets/js/pages-auth.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('demo/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('demo/assets/js/form-wizard-icons.js') }}"></script>





</body>


</html>
