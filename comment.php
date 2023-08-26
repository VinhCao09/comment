<!DOCTYPE html>
<html>
<head>
    <title>Comment System</title>
</head>
<body>
    <h1>Comment System</h1>

    <h2>Add a Comment</h2>
    <form action="/comment/submit_comment.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="comment">Comment:</label><br>
        <textarea id="comment" name="comment" rows="4" cols="50" required></textarea><br>

        <input type="submit" value="Submit Comment">
    </form>

    <h2>Comments</h2>
    <div id="comments">
        <?php include 'load_comments.php'; ?>
    </div>
</body>
</html>
