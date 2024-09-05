<?php
include 'config.php';

$id = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM category WHERE id=$id";
    $result = $conn->query($sql);
    $category = $result->fetch_assoc();

    if (!$category) {
        echo "Category not found.";
        exit;
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($id)) {
    $categoryname = $_POST['categoryname'];
    $password = $_POST['password'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $sql = "UPDATE category SET 
            categoryname='$categoryname', 
            password='$password', 
            description='$description', 
            status='$status' 
            WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Category updated successfully!";
        header("Location: view.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Category</title>
</head>
<body>
    <h1>Update Category</h1>
    <form method="POST" action="">
        <label for="categoryname">Category Name:</label>
        <input type="text" name="categoryname" value="<?php echo htmlspecialchars($category['categoryname'] ?? ''); ?>" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" value="<?php echo htmlspecialchars($category['password'] ?? ''); ?>" required><br><br>

        <label for="description">Description:</label>
        <textarea name="description" required><?php echo htmlspecialchars($category['description'] ?? ''); ?></textarea><br><br>

        <label for="status">Status:</label>
        <select name="status" required>
            <option value="Active" <?php if(isset($category['status']) && $category['status'] == 'Active') echo 'selected'; ?>>Active</option>
            <option value="Inactive" <?php if(isset($category['status']) && $category['status'] == 'Inactive') echo 'selected'; ?>>Inactive</option>
        </select><br><br>

        <button type="submit" name="update_btn" value="update">Update Category</button><br>
    </form>
    <br><a href="view.php">Back to Categories</a>
</body>
</html>
