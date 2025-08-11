<?php include "includes/header.php"; ?>
<?php include "includes/navbar.php"; ?>

<div class="d-flex" style="margin-top:56px;">
    <?php include "includes/sidebar.php"; ?>

    <div class="flex-grow-1 p-4 bg-light">
    <div class="container-fluid">

    <div class="flex-grow-1 p-4 bg-light">
    <div class="container-fluid">

        <!-- Page Title -->
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="fw-bold text-dark">
                <i class="bi bi-people-fill text-primary"></i> Human Resource Management
            </h4>
            <span class="badge bg-primary fs-6 p-2 shadow-sm bi bi-plus-circle"> Add new</span>
        </div>

        <!-- Filters Card -->
        <div class="card shadow-sm border-0 sticky-top" style="top: 70px; z-index: 10;">
            <div class="card-body">

                <!-- First Row: Show All + Add New + Search -->
                <div class="d-flex flex-wrap gap-2 align-items-center mb-3">
                    <a href="#" class="text-primary fw-semibold d-flex align-items-center">
                        <i class="bi bi-funnel-fill me-1"></i> Show All / Active Only
                    </a>
                    <button class="">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control " placeholder="Search employees...">
                            <button class="btn btn-outline-primary"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    </button>
                    

                <!-- Second Row: All Dropdowns in One Line -->
                <div class="d-flex flex-wrap gap-1">
                    <select class="form-select form-select-sm w-auto"><option>Select Department</option></select>
                    <select class="form-select form-select-sm w-auto"><option>Select Group</option></select>
                    <select class="form-select form-select-sm w-auto"><option>Select Practice</option></select>
                    <select class="form-select form-select-sm w-auto"><option>Select Gender</option></select>
                    <select class="form-select form-select-sm w-auto"><option>Select Location</option></select>
                    <select class="form-select form-select-sm w-auto"><option>Select Type of HR</option></select>
                    <select class="form-select form-select-sm w-auto"><option>Select Work Status</option></select>
                    <button class="btn btn-primary btn-sm">
                        <i class="bi bi-eye"></i> Show
                    </button>
                    <br>
                    <div class="ms-auto  flex-wrap gap-1">
                     <select class="form-select form-select-sm ms-auto">
                        <option>2025</option></select>
                    <select class="form-select form-select-sm ms-auto">
                        <option>Annual</option></select>
                    <button class="btn btn-info btn-sm text-white">
                        <i class="bi bi-send-fill"></i> Send Planning Form
                    </button>
                    </div>
                </div>

            </div>
        </div>

       



</body>
</html>
