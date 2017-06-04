<?php
    session_start();
    
    include('database_handler.php');

    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $type = $_POST['type'];
    $price = $_POST['price'];

    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO `books` (`book_id`, `isbn`, `title`, `author`, `type`, `price`, `user_id`) VALUES (NULL, '$isbn', '$title', '$author', '$type', '$price', '$user_id')";
    $result = mysqli_query($connect, $sql);

    if ($result)
    {
        echo "New book registered at the database.";
    }

    mysqli_close($connect);
    header('Location: index.html');
?>