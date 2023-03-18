<?php 
if ($_SERVER['REQUEST_URI'] == '/view/pages/admin.php'): ?>
    <div>
        <form method='post'>
            <label for="password">Passwort eingeben!</label>
            <input type="password" name="password" id="password">
        </form>
    </div>
<?php endif;

if ($_POST['password'] && $_POST['password'] === 'test') {
    $_COOKIE['isLoggedIn'] = true;
    $_POST['password'] = '';
}

if ($_COOKIE['isLoggedIn'] && $_SERVER['REQUEST_URI'] == '/view/pages/admin.php') {
    $_COOKIE['isLoggedIn'] = true;
} else {
    $_COOKIE['isLoggedIn'] = false;
}

if ($_POST['password'] && $_POST['password'] === 'test'): ?>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="image">
        <input type="submit" value="submit">
    </form>
<?php endif;

$imageFile = $_FILES['image'];

if ($imageFile) {
    move_uploaded_file($imageFile['tmp_name'], '../../assets/images/'. $imageFile['name'] );
}

$images = glob('../../assets/images/*');

if ($_SERVER['REQUEST_URI'] == '/view/pages/admin.php' && $_COOKIE['isLoggedIn']) {    
    foreach($images as $file) {
        echo "<div>";
        echo "<img style='height: 250px; width: auto;' src='$file' />"; 
        echo "<a href='?delete=$file'>Delete Now!</a>";
        echo "</div>";
    } 
}

if ($_GET['delete']) {
    unlink($_GET['delete']);
}
