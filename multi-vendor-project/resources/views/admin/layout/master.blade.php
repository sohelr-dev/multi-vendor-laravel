<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

</head>
<body>
     <input type="checkbox" id="sidebar-toggle" class="d-none">
     <label for="sidebar-toggle" class="bg-layer"></label>

     <div id="sidebar">
     <span class="fs-2 d-md-none" id="close-btn">
          <label for="sidebar-toggle">
               <i class="fa-solid fa-chevron-left text-light"></i>
          </label>
     </span>

     <h4 class="text-center">Dr. SOHEL</h4>
     <div class="text-center mb-4">
          <img
               src="{{ asset('images/profile.jpg') }}"
               width="80"
               height="80"
               class="rounded-circle"
               alt="Profile"
          >
          <h5 class="mt-2 mb-0">Sohel Rana</h5>
          <small class="text-light">Doctor</small>
     </div>

     <nav class="navbar">
          <ul class="nav flex-column">

               <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link trans text-light link-navbar {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                         <i class="fa-solid fa-chart-bar me-2 fa-lg"></i> Dashboard
                    </a>
               </li>

               <li class="nav-item">
                    <a href="{{ route('prescription.create') }}" class="nav-link trans text-light link-navbar {{ request()->routeIs('prescription.create') ? 'active' : '' }}">
                         <i class="fa-solid fa-prescription-bottle-alt me-2 fa-lg"></i> Create Prescription
                    </a>
               </li>

               {{-- My Patients --}}
               <li>
                    <a class="nav-link item-nav text-white dropdown-toggle" data-bs-toggle="collapse" href="#patientsSubmenu" role="button" aria-expanded="false" aria-controls="patientsSubmenu">
                         <i class="fa-solid fa-users me-2 fa-lg"></i> My Patients
                    </a>

                    <div class="collapse" id="patientsSubmenu">
                         <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                         <li>
                              <a href="{{ route('patients.index') }}" class="nav-link text-white ps-4 {{ request()->routeIs('patients.index') ? 'active' : '' }}">
                                   <i class="fa-solid fa-calendar-check me-2"></i> Patients List
                              </a>
                         </li>
                         <li>
                              <a href="{{ route('patients.medicalHistory') }}" class="nav-link text-white ps-4 {{ request()->routeIs('patients.medicalHistory') ? 'active' : '' }}">
                                   <i class="fa-solid fa-file-medical me-2"></i> Medical History
                              </a>
                         </li>
                         </ul>
                    </div>
               </li>

               {{-- Appointments --}}
               <li>
                    <a class="nav-link item-nav text-white dropdown-toggle" data-bs-toggle="collapse" href="#appointmentsSubmenu" role="button" aria-expanded="false" aria-controls="appointmentsSubmenu">
                         <i class="fa-solid fa-calendar me-2 fa-lg"></i> Appointments
                    </a>

                    <div class="collapse" id="appointmentsSubmenu">
                         <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                         <li><a href="{{ route('appointments.index') }}" class="nav-link text-white ps-4 {{ request()->routeIs('appointments.index') ? 'active' : '' }}"><i class="fa-solid fa-calendar-check me-2"></i> Appointments List</a></li>
                         <li><a href="{{ route('appointments.today') }}" class="nav-link text-white ps-4 {{ request()->routeIs('appointments.today') ? 'active' : '' }}"><i class="fa-solid fa-calendar-day me-2"></i> Today's Appointments</a></li>
                         <li><a href="{{ route('appointments.upcoming') }}" class="nav-link text-white ps-4 {{ request()->routeIs('appointments.upcoming') ? 'active' : '' }}"><i class="fa-solid fa-calendar-plus me-2"></i> Upcoming</a></li>
                         <li><a href="{{ route('appointments.history') }}" class="nav-link text-white ps-4 {{ request()->routeIs('appointments.history') ? 'active' : '' }}"><i class="fa-solid fa-clock-rotate-left me-2"></i> History</a></li>
                         </ul>
                    </div>
               </li>

               {{-- Medicines --}}
               <li>
                    <a class="nav-link item-nav text-white dropdown-toggle" data-bs-toggle="collapse" href="#medicinesSubmenu" role="button" aria-expanded="false" aria-controls="medicinesSubmenu">
                         <i class="fa-solid fa-pills me-2 fa-lg"></i> Medicines
                    </a>

                    <div class="collapse" id="medicinesSubmenu">
                         <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                         <li><a href="{{ route('medicine.types') }}" class="nav-link text-white ps-4 {{ request()->routeIs('medicine.types') ? 'active' : '' }}"><i class="fa-solid fa-prescription-bottle-medical me-2"></i> Medicine Types</a></li>
                         <li><a href="{{ route('medicines.index') }}" class="nav-link text-white ps-4 {{ request()->routeIs('medicines.index') ? 'active' : '' }}"><i class="fa-solid fa-capsules me-2"></i> Medicine</a></li>
                         <li><a href="{{ route('dosages.index') }}" class="nav-link text-white ps-4 {{ request()->routeIs('dosages.index') ? 'active' : '' }}"><i class="fa-solid fa-droplet me-2"></i> Dosages</a></li>
                         <li><a href="{{ route('dosages.create') }}" class="nav-link text-white ps-4 {{ request()->routeIs('dosages.create') ? 'active' : '' }}"><i class="fa-solid fa-plus me-2"></i> Create Dosage</a></li>
                         <li><a href="{{ route('durations.index') }}" class="nav-link text-white ps-4 {{ request()->routeIs('durations.index') ? 'active' : '' }}"><i class="fa-solid fa-hourglass me-2"></i> Duration</a></li>
                         </ul>
                    </div>
               </li>

               <li class="nav-item">
                    <a href="{{ route('tests.index') }}" class="nav-link text-light link-navbar {{ request()->routeIs('tests.index') ? 'active' : '' }}">
                         <i class="fa-solid fa-flask me-2 fa-lg"></i> Tests
                    </a>
               </li>

               <li class="nav-item">
                    <a href="{{ route('prescriptions.index') }}" class="nav-link text-light link-navbar {{ request()->routeIs('prescriptions.index') ? 'active' : '' }}">
                         <i class="fa-solid fa-file-medical-alt me-2 fa-lg"></i> Prescription History
                    </a>
               </li>

               <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link text-light link-navbar {{ request()->routeIs('users.index') ? 'active' : '' }}">
                         <i class="fa-solid fa-users me-2 fa-lg"></i> Users
                    </a>
               </li>

               <li class="nav-item">
                    <a href="{{ route('roles.index') }}" class="nav-link text-light link-navbar {{ request()->routeIs('roles.index') ? 'active' : '' }}">
                         <i class="fa-solid fa-users-gear me-2"></i> Roles
                    </a>
               </li>

               <li class="nav-item">
                    <a href="{{ route('doctors.index') }}" class="nav-link text-light link-navbar {{ request()->routeIs('doctors.index') ? 'active' : '' }}">
                         <i class="fa-solid fa-user-doctor me-2"></i> Doctors
                    </a>
               </li>
          </ul>
     </nav>
     </div>


     <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>

</body>
</html>