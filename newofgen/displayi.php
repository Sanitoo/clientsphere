<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
        table {
            margin: auto;
            width: 50%;
        }
        th{
            background-color: lightgrey;
        }
    </style>
</head>
<body>
    <h1>Registered Users</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Email Address</th>
            <th>Delete</th>
        </tr>
        <?php 
            // read operation/select
            //connecting to db
            include 'connectdatabase.php';
            $sql = "SELECT * FROM users";
            // execute query
            $result = mysqli_query($connect, $sql);
            if ($result) {
                //display the data
                // mysqli_fetch_assoc()
                // $students = mysqli_fetch_assoc($result);
                // echo $students['course'];
    while ($users = mysqli_fetch_assoc($result)) {
            $id = $users['id'];
            $firstname = $users['firstname']; 
            $middlename = $users['middlename'];
            $lastname = $users['lastname'];
            $email = $users['email'];


            echo "<tr>
            <td>$id</td>
            <td>$firstname</td>
            <td>$middlename</td>
            <td>$lastname</td>
            <td>$email</td>
            <td>
                <button>
    <a href='delete.php?id=$id'>Delete</a>
                </button>
            </td>

        </tr>";

        }
    }

        ?>
    </table>

</body>
</html>
