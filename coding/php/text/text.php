<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin List</title>
    <link rel="stylesheet" type="text/css" href="css/manageStaff.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<header>
  <!-- 省略头部代码 -->
</header>
        
<div class="topper_container">
    <div class="container">
        <div class="headc">
            <form action="#" class="search-bar">
                <input type="text" placeholder="Search..">
                <button type="submit"><i class='bx bx-search'></i></button>
            </form>
            <div class="create"><p>+ Create</p></div>
        </div>
        <table>
            <thead>
                <tr class="top">
                    <th class="Staff_code">Staff code</th>
                    <th class="Name">Name</th>
                    <th class="Gender">Gender</th>
                    <th class="Age">Age</th>
                    <th class="ContactNumber">Contact Number</th>
                    <th class="Email">Email</th>
                    <th class="operate">Operate</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include 'database.php';
                $database = new Database("localhost", "root", "", "musicdb");
                $Singer = $database->queryTableSinger();
                while ($row = $Singer->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td class='Staff_code'>" . $row["SingerCode"] . "</td>";
                    echo "<td class='Name'>" . $row["SingerName"] . "</td>";
                    echo "<td class='Gender'>" . $row["gender"] . "</td>";
                    echo "<td class='Age'>" . $row["birthday"] . "</td>";
                    echo "<td class='ContactNumber'>" . $row["ContactNumber"] . "</td>";
                    echo "<td class='Email'>" . $row["Email"] . "</td>";
                    echo "<td class='operate'>...</td>";
                    echo "</tr>";
                }
                $database->close();
                ?>
            </tbody>
        </table>
        <div class="entries">
            <!-- 省略条目选择代码 -->
        </div> 
    </div>          
</div>

</body>
</html>
