<?php
include "dbconfig.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Database</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h2>Employee Details</h2>
<table class="table">
    <thead>
        <tr>
        <th>ID</th>
        <th>EmployeeName</th>
        <th>Position</th>
        <th>Salary</th>
        <th>Hire Date</th>
        <th>Action</th>

    </tr>
    </thead>
    <tbody>
        <?php
                $sql = "SELECT * FROM employee";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['employee_name']; ?></td>
                    <td><?php echo $row['position']; ?></td>
                    <td><?php echo $row['salary']; ?></td>
                    <td><?php echo $row['hire_date']; ?></td>
                    <td><a class="btn btn-info" href="update_employee.php?id=<?php echo $row['id']; ?>">Edit</a>
                     &nbsp;
                     <a class="btn btn-danger" href="delete_employee.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                    </tr>
        <?php       }
            }
        ?>
    </tbody>
</table>
    </div>
</body>
</html>