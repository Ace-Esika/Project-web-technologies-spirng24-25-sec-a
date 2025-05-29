<?php
$con = mysqli_connect("127.0.0.1:3399", "root", "", "resturent_db");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM messages ORDER BY id DESC";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Messages</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            background: white;
            margin: 0 auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #00796b;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        h1 {
            color: #00796b;
        }
    </style>
</head>
<body>
    <?php include 'admin_nav.php'; ?>
    <div style="margin-top:70px">

   
    <h1 >All Messages</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Sender Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Sent At</th>
                <th>Reply</th>
            </tr>
        </thead>
        <tbody>
            <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['sender_name']; ?></td>
                        <td><?php echo $row['sender_email']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td>
                    <a href="https://mail.google.com/mail/?view=cm&to=<?php echo urlencode($row['sender_email']); ?>"
                        target="_blank"
                        style="padding: 6px 12px; background-color: #2196F3; color: white; text-decoration: none; border-radius: 5px;"
                        >Reply</a>
                </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="5" style="text-align:center;">No messages found.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
     </div>
</body>
</html>
