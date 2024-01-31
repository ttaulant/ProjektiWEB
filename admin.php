<?php 

include "DatabaseConnection.php";
include_once "EventRepo.php";

$eventRepo = new EventRepo();
$events = $eventRepo->getAllEvents();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

        #sidebar {
            width: 10%;
            background-color: #000000;
            color: #fff;
            padding: 20px;
            box-sizing: border-box;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #user-photo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 10px;
        }

        #user-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #profile {
            margin-bottom: 20px;
        }

        #options {
            display: flex;
            border: 20px solid black;
            border-radius: 10px;
            width: 170px;
            color: white;
            text-align: center;
            font-weight: bold;
            font-size: 25px;
            margin-bottom: 7px;
            background-color:black;
        }

        #content {
            padding: 40px;
            width: 90%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #000000;
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #61d8d8;
        }

        .top-buttons{
            display: flex;
            justify-content:flex-end;
            margin-bottom: 20px;
        }

        .bottom-button{
            display: flex;
            margin-bottom: 20px;
            justify-content: center;
        }

        .edit-button, .delete-button, .insert-button {
            font-size: 20px;
            cursor: pointer;
            padding: 5px 15px;
            border: none;
            border-radius: 5px;
        }

        .edit-button {
            background-color: #007bff;
            color: #fff;
        }

        .delete-button {
            background-color: #dc3545;
            color: #fff;
        }

        .insert-button {
            background-color: green;
            color: #fff;
        }
    </style>
</head>
<body>
    
    <div id="sidebar">
        <div id="user-photo">
            <img src="your-user-photo-url.jpg" alt="User Photo">
        </div>
        <div id="profile">User Profile</div>
    </div>

    <div id="content">
        <div id="options">
            <div class="option">Events / News</div>
        </div>
        

        <table>
            <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Location</th>
                <th>Description</th>
                <th>Image</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($events as $event) { ?>
                    <tr>
                        <td><?php echo $event['title'];?></td>
                        <td><?php echo $event['date'];?></td>
                        <td><?php echo $event['location'];?></td>
                        <td><?php echo $event['description'];?></td>
                        <td><?php echo $event['image'];?></td>
                        <td><a href='edit.php?id=<?php echo $event['id']?>'>Edit</a></td>
                        <td><a href='delete.php?id=<?php echo $event['id']?>'>Delete</a></td>
                    </tr>
                <?php }?> 
            </tbody>
        </table>

        <div class="bottom-button">
            <button class="insert-button"><a href='insert.php'>Insert</a></button>
        </div>
    </div>
</body>
</html>

