<?php
include 'connection.php';
include 'insert.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JABU CHAPEL ATTENDANCE SYSTEM</title>
    <link rel="stylesheet" href="output.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
</head>
<body class="w-full h-full bg-gray-100 p-10 lg:px-40 lg:py-20">
    <div class="bg-white rounded p-8 shadow-md lg:w-full lg:flex lg:flex-col lg:justify-center lg:items-center">
        <div class="flex flex-col items-center">
            <h2 class="text-xl text-gray-600 font-bold mb-4 text-center">JABU CHAPEL ATTENDANCE SYSTEM</h2>
            <img class="w-24" src="logo.png" alt="">
            <h2 class="text-lg font-medium text-center text-gray-600 mb-5">Student Registration Panel</h2>
    
        </div>
        <form id="registrationForm"  method="post">
            <div class="lg:flex">
                <div class="mb-4 w-full lg:mx-4">
                    <div class="mb-4">
                        <input type="text" id="fullname" name="surname" class="border-2 outline-none rounded-md form-input mt-1 p-2 w-full" placeholder="Surname"  >
                    </div>
                    <div class="mb-4">
                        <input type="text" id="fullname" name="othernames" class="border-2 outline-none rounded-md form-input mt-1 p-2 w-full" placeholder="Othernames"  >
                    </div>
                    <div class="mb-4">
                        <input type="text" id="matricNumbe" name="matricNumber" class="border-2 outline-none rounded-md  form-input mt-1 p-2 w-full" placeholder="Matric Number"  >
                    </div>
        
                    <div class="mb-4">
                        <input type="email" id="emai" name="email" class="border-2 outline-none rounded-md  form-input mt-1 p-2 w-full" placeholder="Jabu Student Mail"  >
                    </div>
        
                    <div class="mb-4">
                        <input type="tel" id="phoneNumbe" name="phoneNumber" class="border-2 outline-none rounded-md form-input mt-1 p-2 w-full" placeholder="Phone Number" maxlength="11"  >
                    </div>
    
                    <div class="mb-4">
                        <select id="college" name="college"  class="text-gray-600 border-2 outline-none rounded-md  form-select mt-1 p-2 w-full" >
                            <option value="" disabled selected>Select College</option>
                            <option value="1">College of Agriculture and Natural Science</option>
                            <option value="2">College of Health Science</option>
                            <option value="3">College of Law</option>
                            <option value="4">College of Humanities and Social Science</option>
                            <option value="5">College of Environmental Science</option>
                            <option value="6">College of Management Science</option>
                            <!-- Add your other college options here -->
                        </select>
                    </div>
                </div>
                <div class="w-full lg:mx-4">
                    <div class="mb-4">
                        <select id="department" name="department" class="text-gray-600 border-2 outline-none rounded-md form-select mt-1 p-2 w-full" >
                            <option value="" disabled selected>Select Department</option>
                        </select>
                    </div>
        
                    <div class="mb-4">
                        <select id="hostels" name="hostel" class="text-gray-600 border-2 outline-none rounded-md  form-select mt-1 p-2 w-full"  >
                            <option value="" disabled selected>Select Hostel</option>
                            <option value="1">Male Hostel 1</option>
                            <option value="2">Male Hostel 2</option>
                            <option value="3">Male Hostel 3</option>
                            <option value="4">Male Hostel 4</option>
                            <option value="5">Female Hostel 1</option>
                            <option value="6">Female Hostel 2</option>
                            <option value="7">Female Hostel 3</option>
                            <option value="8">Female Hostel 4</option>
                        </select>
                    </div>
                    <div class="mb-4" id="blockContainer" style="display: none;">
                        <select id="block" name="block" class="text-gray-600 border-2 outline-none rounded-md  form-select mt-1 p-2 w-full"  >
                            <option value="" disabled selected>Select Block</option>
                        </select>
                    </div>
        
                    <div class="mb-4">
                        <input type="text" id="roomNo" name="roomNo" class="border-2 outline-none rounded-md form-input mt-1 p-2 w-full" placeholder="Room Number" maxlength="3"  >
                    </div>
        
                    <div class="mb-4">
                        <input type="number" id="bedSpace" name="bedSpace" class="border-2 outline-none rounded-md form-input mt-1 p-2 w-full" placeholder="Bed Space" min="1" max="6"  >
                    </div>    
                </div>
            </div>
            <button name="submit" type="submit" class="w-full lg:w-70% bg-green-500 text-white p-2 rounded shadow-lg">Register</button>

        </form>
    </div>
    <!-- <button type="submit" class="w-full lg:w-70% bg-blue-900 text-white p-2 rounded shadow-lg"><a href="include/fetch.php">Fetch Data</a></button>  -->

    <script src="script.js"></script>

</body>
</html> 
