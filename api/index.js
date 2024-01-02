    document.getElementById('registrationForm').addEventListener('submit', function (event) {
        var emailInput = document.getElementById('email');
        var emailValue = emailInput.value.trim();

        if (!emailValue.endsWith('@jabu.edu.ng')) {
            alert('Please enter a valid JABU student email address.');
            event.preventDefault();
        }
    });
    document.getElementById('registrationForm').addEventListener('submit', function (event) {
        var bedSpaceInput = document.getElementById('bedSpace');
        var bedSpaceValue = bedSpaceInput.value;

        if (bedSpaceValue > 4) {
            alert('Bed space cannot be greater than 4.');
            event.preventDefault();
        }
    });
    
    document.getElementById('college').addEventListener('change', function () {
        var collegeValue = this.value;
        var departmentDropdown = document.getElementById('department');

        departmentDropdown.innerHTML = '<option value="" disabled selected>Select Department</option>';

        if (collegeValue === '1') {
            addOption(departmentDropdown, '1', 'Agriculture');
            addOption(departmentDropdown, '2', 'Biochemistry');
            addOption(departmentDropdown, '3', 'Computer Science');
            addOption(departmentDropdown, '4', 'Food Science and Technology');
            addOption(departmentDropdown, '5', 'Microbiology');
            addOption(departmentDropdown, '6', 'Industrial Chemistry');
            addOption(departmentDropdown, '7', 'Physics');
        } else if (collegeValue === '2') {
            addOption(departmentDropdown, '8', 'Medical Laboratory Science');
            addOption(departmentDropdown, '9', 'Nursing');
        } else if (collegeValue === '3') {
            addOption(departmentDropdown, '10', 'Law');
        }else if (collegeValue === '4') {
            addOption(departmentDropdown, '11', 'Economics');
            addOption(departmentDropdown, '12', 'English');
            addOption(departmentDropdown, '13', 'History and International Studies');
            addOption(departmentDropdown, '14', 'Mass Communication');
            addOption(departmentDropdown, '15', 'Political Science');
            addOption(departmentDropdown, '16', 'Public Administrtaion');
            addOption(departmentDropdown, '17', 'Religious Studies');
        }else if (collegeValue === '5') {
            addOption(departmentDropdown, '18', 'Architecture');
            addOption(departmentDropdown, '19', 'Building and Quantity Survey');
            addOption(departmentDropdown, '20', 'Estate Management');
            addOption(departmentDropdown, '21', 'Geography');
            addOption(departmentDropdown, '22', 'Urban and Regional Planning');
        } else if (collegeValue === '6') {
            addOption(departmentDropdown, '23', 'Accounting');
            addOption(departmentDropdown, '24', 'Actuarial Science and Insurance');
            addOption(departmentDropdown, '25', 'Business Administration');
            addOption(departmentDropdown, '26', 'Entrepreneurship');
            addOption(departmentDropdown, '27', 'Human Resource Management and Industrial Relations');
        }
    });

    function addOption(selectElement, value, text) {
        var option = document.createElement('option');
        option.value = value;
        option.text = text;
        selectElement.add(option);
    }

    document.getElementById('hostels').addEventListener('change', function () {
        var hostelsValue = this.value;
        var blockContainer = document.getElementById('blockContainer');
        var blockDropdown = document.getElementById('block');

        blockContainer.style.display = 'none';

        blockDropdown.innerHTML = '<option value="" disabled selected>Select Block</option>';

        if (hostelsValue === '4' || hostelsValue === '8') {
            blockContainer.style.display = 'block';

            for (var i = 1; i <= 8; i++) {
                addOption(blockDropdown, i, 'Block ' + i);
            }
        }
    });

    document.getElementById('registrationForm').addEventListener('submit', function (event) {
        var matricNumberInput = document.getElementById('matricNumber');
        var matricNumberValue = matricNumberInput.value.trim();

        var phoneNumberInput = document.getElementById('phoneNumber');
        var phoneNumberValue = phoneNumberInput.value.trim();

        if (!matricNumberValue.startsWith('2') || matricNumberValue.length !== 10) {
            alert('Matric number should start with "2" and have a length of 11 digits.');
            event.preventDefault();
        }

        if (!phoneNumberValue.startsWith('0') || phoneNumberValue.length !== 11) {
            alert('Phone number should start with "0" and have a length of 11 digits.');
            event.preventDefault();
        }
    });