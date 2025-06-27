<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="StudentRegis.css">
</head>

<body>
    <div class="container-sm">
        <!-- Student's information -->
        <div class="student-info">
            <label for="header-studentInfo" class="form-label"><b>Student Information*</b></label>
            <div class="row justify-content-center">
                <!-- First name -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Given Name" aria-label=".form-control-sm example">
                    </div>
                </div>
                <!-- Middle name -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="middle" class="form-label">Middle Name</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Type N/A if none" aria-label=".form-control-sm example">
                    </div>
                </div>
                <!-- Last name -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Surname" aria-label=".form-control-sm example">
                    </div>
                </div>
                <!-- Suffix -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="suffix" class="form-label">Suffix</label>
                        <input class="form-control form-control-sm" type="text" placeholder="e.g. Jr." aria-label=".form-control-sm example">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- Gender -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select form-select-sm" aria-label="Small select example">
                            <option value="" selected disabled>Gender</option>
                            <option value="1">Female</option>
                            <option value="2">Male</option>
                            <option value="3">Non-binary</option>
                            <option value="4">Prefer not to say</option>
                            <option value="5">Other</option>
                        </select>
                    </div>
                </div>
                <!-- Civil Status -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="gender" class="form-label">Civil Status</label>
                        <select class="form-select form-select-sm" aria-label="Small select example">
                            <option value="" selected disabled>Civil Status</option>
                            <option value="1">Single</option>
                            <option value="2">Married</option>
                            <option value="3">Widowed</option>
                            <option value="4">Legally Seperated</option>
                            <option value="5">Annulled</option>
                        </select>
                    </div>
                </div>
                <!-- Citizenship -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Citizenship</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Citizenship" aria-label=".form-control-sm example">
                    </div>
                </div>
                <!-- Date of Birth -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="birthday" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>
                </div>
                <!-- Religion -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="religion" class="form-label">Last Name</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Religion" aria-label=".form-control-sm example">
                    </div>
                </div>
            </div>
        </div>

        <!-- Current Address -->
        <div class="current-address">
            <label for="header-currentAddress" class="form-label mt-4"><b>Current Address*</b></label>
            <div class="row justify-content-center">
                <div class="col-md">
                    <div class="mb-3">
                        <label class="form-label">Street # / Unit #</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Street # / Unit #" name="streetNumber">
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label class="form-label">Street</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Street" name="streetName">
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label class="form-label">Subdivision / Village / Bldg</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Subdivision / Village / Bldg" name="subdivision">
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label class="form-label">Barangay</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Barangay" name="barangay">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md">
                    <div class="mb-3">
                        <label class="form-label">City / Municipality</label>
                        <input class="form-control form-control-sm" type="text" placeholder="City / Municipality" name="city">
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label class="form-label">Province</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Province" name="province">
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label class="form-label">Zip Code</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Zip Code" name="zipCode">
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="contact-info">
            <div class="row justify-content-center">
                <label for="header-currentAddress" class="form-label mt-5"><b>Contact Information*</b></label>
                <!-- Telephone -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Telephone No.</label>
                        <input type="tel" class="form-control" id="tel" placeholder="Telephone No.">
                    </div>
                </div>
                <!-- Mobile -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Mobile No.</label>
                        <input type="mobileNo" class="form-control" id="tel" placeholder="09XXXXXXXXX">
                    </div>
                </div>
                <!-- Email -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="tel" placeholder="example@gmail.com">
                    </div>
                </div>
            </div>
        </div>

        <!-- School attended -->
        <div class="school-attended">
            <div class="row justify-content-center">
                <label for="header-schoolAttended" class="form-label mt-4"><b>Current or Last School Attended*</b></label>
                <div class="col-md">
                    <!-- School Type -->
                    <div class="mb-3">
                        <label for="schoolType" class="form-label">School Type</label>
                        <select class="form-select form-select-sm" aria-label="Small select example">
                            <option value="" selected disabled>School Type</option>
                            <option value="public">Public Senior High School</option>
                            <option value="private">Private Senior High School</option>
                            <option value="state">State University / College (SHS)</option>
                            <option value="local">Local University / College (SHS)</option>
                            <option value="techvoc">Technical-Vocational Institution</option>
                            <option value="international">International School</option>
                            <option value="homeschool">Homeschool</option>
                            <option value="als">Alternative Learning System (ALS)</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                </div>
                <div class="col-md">
                    <!-- School name -->
                    <div class="mb-3">
                        <label for="schoolName" class="form-label">School Name</label>
                        <input type="schoolName" class="form-control" id="schoolName" placeholder="School Name">
                    </div>
                </div>
                <div class="col-md">
                    <!-- Program / Track -->
                    <div class="mb-3">
                        <label for="strand" class="form-label">Program / Track & Strand / Specialization</label>
                        <input type="strand" class="form-control" id="strand" placeholder="Program or Track">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md">
                    <!-- Grad Date -->
                    <div class="mb-3">
                        <label for="grad" class="form-label">Date of Graduation</label>
                        <input type="date" class="form-control" id="grad" name="grad">
                    </div>
                </div>
                <div class="col-md">
                    <!-- School Yr graduated -->
                    <div class="mb-3">
                        <label for="schoolYear" class="form-label">School Year Graduated</label>
                        <select class="form-select form-select-sm" id="schoolYear" name="schoolYear" required>
                            <option value="" selected disabled>Select School Year</option>
                            <option value="2020-2021">2020-2021</option>
                            <option value="2021-2022">2021-2022</option>
                            <option value="2022-2023">2022-2023</option>
                            <option value="2023-2024">2023-2024</option>
                            <option value="2024-2025">2024-2025</option>
                            <option value="2025-2026">2025-2026</option>
                        </select>
                    </div>
                </div>
                <div class="col-md">
                    <!-- Year Level -->
                    <div class="mb-3">
                        <label for="yearLevel" class="form-label">Year Level / Grade</label>
                        <select class="form-select form-select-sm" id="yearLevel" name="yearLevel" required>
                            <option value="" selected disabled>Select year / grade</option>
                            <option value="2020-2021">2020-2021</option>
                            <option value="2021-2022">2021-2022</option>
                            <option value="2022-2023">2022-2023</option>
                            <option value="2023-2024">2023-2024</option>
                            <option value="2024-2025">2024-2025</option>
                            <option value="2025-2026">2025-2026</option>
                        </select>
                    </div>
                </div>
                <div class="col-md">
                    <!-- Term -->
                    <div class="mb-3">
                        <label for="term" class="form-label">Term</label>
                        <select class="form-select form-select-sm" id="term" name="term" required>
                            <option value="" selected disabled>Select Term</option>
                            <option value="1st">1st Semester</option>
                            <option value="2nd">2nd Semester</option>
                            <option value="midyear">Midyear Term</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Parents / Guardian information -->
        <div class="parents-guardian-info">
            <!-- Mother -->
            <div class="row justify-content-center">
                <label for="header-parents/guadrianInfo" class="form-label mt-4"><b>Parent / Guardian's Information*</b></label>
                <label for="header-parents/guadrianInfo" class="form-label mt-1"><b>Mother Information</b></label>
                <!-- First name -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Given Name" aria-label=".form-control-sm example">
                    </div>
                </div>
                <!-- Last name -->
                <div class="col-md">

                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Surname" aria-label=".form-control-sm example">
                    </div>
                </div>
                <!-- Middle Initial -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="middleInitial" class="form-label">Middle Initial</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Middle Initial" aria-label=".form-control-sm example">
                    </div>
                </div>
                <!-- Suffix -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="suffix" class="form-label">Suffix</label>
                        <input class="form-control form-control-sm" type="text" placeholder="e.g. Jr." aria-label=".form-control-sm example">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!-- Mobile -->
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile No.</label>
                            <input type="mobileNo" class="form-control" id="tel" placeholder="09XXXXXXXXX">
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="tel" placeholder="example@gmail.com">
                        </div>
                    </div>
                    <!-- Occupation -->
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="occupation" class="form-label">Occupation</label>
                            <input type="email" class="form-control" id="tel" placeholder="Occupation">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Father -->
            <div class="row justify-content-center">
                <label for="header-parents/guadrianInfo" class="form-label mt-1"><b>Father Information</b></label>
                <!-- First name -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Given Name" aria-label=".form-control-sm example">
                    </div>
                </div>
                <!-- Last name -->
                <div class="col-md">

                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Surname" aria-label=".form-control-sm example">
                    </div>
                </div>
                <!-- Middle Initial -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="middleInitial" class="form-label">Middle Initial</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Middle Initial" aria-label=".form-control-sm example">
                    </div>
                </div>
                <!-- Suffix -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="suffix" class="form-label">Suffix</label>
                        <input class="form-control form-control-sm" type="text" placeholder="e.g. Jr." aria-label=".form-control-sm example">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!-- Mobile -->
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile No.</label>
                            <input type="mobileNo" class="form-control" id="tel" placeholder="09XXXXXXXXX">
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="tel" placeholder="example@gmail.com">
                        </div>
                    </div>
                    <!-- Occupation -->
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="occupation" class="form-label">Occupation</label>
                            <input type="email" class="form-control" id="tel" placeholder="Occupation">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Guardian -->
            <div class="row justify-content-center">
                <label for="header-parents/guadrianInfo" class="form-label mt-1"><b>Guardian Information</b></label>
                <!-- First name -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Given Name" aria-label=".form-control-sm example">
                    </div>
                </div>
                <!-- Last name -->
                <div class="col-md">

                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Surname" aria-label=".form-control-sm example">
                    </div>
                </div>
                <!-- Middle Initial -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="middleInitial" class="form-label">Middle Initial</label>
                        <input class="form-control form-control-sm" type="text" placeholder="Middle Initial" aria-label=".form-control-sm example">
                    </div>
                </div>
                <!-- Suffix -->
                <div class="col-md">
                    <div class="mb-3">
                        <label for="suffix" class="form-label">Suffix</label>
                        <input class="form-control form-control-sm" type="text" placeholder="e.g. Jr." aria-label=".form-control-sm example">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!-- Mobile -->
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile No.</label>
                            <input type="mobileNo" class="form-control" id="tel" placeholder="09XXXXXXXXX">
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="tel" placeholder="example@gmail.com">
                        </div>
                    </div>
                    <!-- Occupation -->
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="occupation" class="form-label">Occupation</label>
                            <input type="email" class="form-control" id="tel" placeholder="Occupation">
                        </div>
                    </div>
                    <!-- Relationship -->
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="relationship" class="form-label">Relationship</label>
                            <input type="Relationship" class="form-control" id="tel" placeholder="Relationship">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>