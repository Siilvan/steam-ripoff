<?php

session_start();
if (!isset($_SESSION['loggedInUser'])) {
    header('Location: login.php');
}

include_once('connector.php');

$pdo = CONNECT_PDO();
$sql = "SELECT * FROM games";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$games = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Almost there</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="home_style.css">
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = 'SELECT * FROM games WHERE Title LIKE :search';
    $stmt = $pdo->prepare($sql);
    $searchString = '%' . $_POST['search'] . '%';
    $stmt->bindParam('search', $searchString);
    $stmt->execute();
    $games = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

if (isset($_GET['genre'])) {
    $sql = 'SELECT * FROM games WHERE Genre = :genre';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam('genre', $_GET['genre']);
    $stmt->execute();
    $games = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
</head>
<body>

<nav>
    <div class="left">
        <a class="active" href="indexa.php">Store</a>
        <a href="library.php">Library</a>
        <a href="cart.php">Cart</a>
        <a href="#"><?= $_SESSION['loggedInUser'] ?></a>
    </div>
    <a href="logout.php"><button type="button" class="logout">Logout</button></a>

</nav>

<div class="mx-auto holder width">
    <div class="search-container" style="float: right; border-radius: 5px;">
        <form action="indexa.php" method="POST">
            <input type="text" placeholder="Search.." name="search" id="search">
            <button type="submit"><img src="images/search.jpg"></button>
        </form>
        <div class="dropdown">
            <button class="dropbtn"><img src="images/filter.png"></button>
            <div class="dropdown-content">
                <?php
                $sql = 'SELECT DISTINCT Genre FROM games';
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $genres = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($genres as $genre) {
                    echo '<a href="indexa.php?genre=' . $genre['Genre'] . '" style="background-image: linear-gradient(to right, rgb(45, 61, 74), rgb(87, 101, 116)); color: white;">' . $genre['Genre'] . '</a>';
                }
                ?>
            </div>
        </div>

    </div>
</div>
<div class="mx-auto my-auto px-8 py-8 max-w-5xl backdrop-blur border-solid border border-gray-300 rounded-b-lg shadow-2xl width">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

    <?php foreach ($games as $game) : ?>
        <div class="card flex flex-col justify-between">
            <a href="detail.php?game=<?= $game['GameID'] ?>">
                <h2><strong><?= $game['Title'] ?></strong></h2>
                <img src="images/<?= $game['Foto'] ?>" alt="<?= $game['Title'] ?>" >
            </a>
        </div>
    <?php endforeach; ?>    
</div>

</body>
</html>
