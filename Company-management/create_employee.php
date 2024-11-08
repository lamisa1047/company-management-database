<?php
include "dbconfig.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $employee_name = $_POST['employee_name'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $hire_date = $_POST['hire_date'];

   
    $sql = "INSERT INTO `employee` (`id`, `employee_name`, `position`, `salary`, `hire_date`) 
            VALUES ('$id', '$employee_name', '$position', '$salary', '$hire_date')";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "<p class='text-green-500 font-bold'>New record created successfully.</p>";
        header('Location: view_employee.php');
    } else {
        echo "<p class='text-red-500 font-bold'>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Database</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-violet-700 via-fuchsia-800 to-indigo-900 flex justify-center items-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-[600px] h-[650px] flex flex-col justify-between">
        <h2 class="text-3xl font-extrabold mb-6 text-center text-indigo-600">New Employee Details</h2>
        <form action="" method="POST" class="space-y-4 flex-grow overflow-y-auto">
            <fieldset class="space-y-4">
                <legend class="text-lg font-semibold text-gray-700 bg-gradient-to-r from-pink-400 to-purple-600 text-transparent bg-clip-text">Employee Information:</legend>
                
                <label for="id" class="block text-gray-800 font-semibold">Id:</label>
                <input type="number" name="id" id="id" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>

                <label for="employee_name" class="block text-gray-800 font-semibold">Employee Name:</label>
                <input type="text" name="employee_name" id="employee_name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>

                <label for="position" class="block text-gray-800 font-semibold">Position:</label>
                <input type="text" name="position" id="position" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>

                <label for="salary" class="block text-gray-800 font-semibold">Salary:</label>
                <input type="text" name="salary" id="salary" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>

                <label for="hire_date" class="block text-gray-800 font-semibold">Hire Date:</label>
                <input type="date" name="hire_date" id="hire_date" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>

                <div class="text-center">
                    <input type="submit" name="submit" value="Submit" class="mt-6 bg-gradient-to-r from-pink-500 to-purple-600 text-white py-3 px-6 rounded-lg shadow-lg hover:from-pink-600 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 cursor-pointer transition-all duration-300 w-full">
                </div>
            </fieldset>
        </form>
    </div>

</body>
</html>
