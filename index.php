<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<?php
// Define profiles
$profiles = [
    1 => ['name' => 'Dhiya Maisarah', 'id' => '2024905377', 'program' => 'System Management', 'faculty' => 'Faculty of Computer and Mathematical Sciences', 'email' => 'dhiyamaisarah27@gmail.com', 'campus' => 'UiTM Machang', 'image' => 'images/dhiya.jpg'],
    2 => ['name' => 'Amad Danial', 'id' => '2024517895', 'program' => 'Computer Science', 'faculty' => 'Faculty of Computer and Mathematical Sciences', 'email' => 'puteradanial13@gmail.com', 'campus' => 'UiTM Machang', 'image' => 'images/amad.jpg'],
    3 => ['name' => 'Izzatul Athirah', 'id' => '2024794163', 'program' => 'Business Management', 'faculty' => 'Faculty of Business and Management Sciences', 'email' => 'zatulthirah@gmail.com', 'campus' => 'UiTM Machang', 'image' => 'images/izzatul.jpg'],
    4 => ['name' => 'Irdina Izzati', 'id' => '2024755195', 'program' => 'Engineering','faculty' => 'Faculty of Civil Engineering',  'email' => 'deezatii@gmail.com', 'campus' => 'UiTM Machang', 'image' => 'images/irdina.jpg'],
    5 => ['name' => 'Khadija Nazrin', 'id' => '2024441318', 'program' => 'Mass Communication','faculty' => 'Faculty of Communication and Media Studies',  'email' => 'dijanazz@gmail.com', 'campus' => 'UiTM Rembau', 'image' => 'images/khadija.jpg'],
    6 => ['name' => 'Farah Farzana', 'id' => '2024389175', 'program' => 'Law and Shariah','faculty' => 'Faculty of Islamic Contemporary Studies',  'email' => 'farahfarzanado@gmail.com', 'campus' => 'UiTM Machang', 'image' => 'images/farah.jpg']
];

// Determine the page to display
$page = isset($_GET['page']) ? $_GET['page'] : 'login';
$profileId = isset($_GET['id']) ? $_GET['id']: null;
?>

<?php if ($page === 'profiles'): ?>
        <nav class="navbar navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="?page=login">UiTM Student E-Profiles</a>
            </div>
        </nav>
        <div class="container mt-5">
            <h2 class="text-center text-primary">List of Profiles</h2>
            <div class="row mt-4">
                <?php foreach ($profiles as $id => $profile): ?>
                    <div class="col-md-4 mb-3">
                        <div class="card custom-card">
                            <img src="<?= htmlspecialchars($profile['image']) ?>" alt="Profile Picture" class="card-img-top profile-img mx-auto mt-3">
                            <div class="card-body text-center">
                                <h5 class="card-title"><strong><?= strtoupper(htmlspecialchars($profile['name'])) ?></strong>
                                </h5>
                                <p class="card-text">Student ID: <?= htmlspecialchars($profile['id']) ?></p>
                                <a href="?page=profile&id=<?= $id ?>" class="btn custom-button">View Profile</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


    <?php elseif ($page === 'profile' && isset($profiles[$profileId])): ?>
        <?php $profile = $profiles[$profileId]; ?>
        <div class="container mt-5">
            <div class="card custom-card mx-auto" style="max-width: 600px;">
            <img src="<?= htmlspecialchars($profile['image']) ?>" alt="Profile Picture" class="card-img-top profile-img mx-auto mt-3">
                <div class="card-body text-center">
                    <h5 class="card-title"><strong><?= strtoupper(htmlspecialchars($profile['name'])) ?></strong>
                    </h5>
                    <p class="card-text">Student ID: <?= htmlspecialchars($profile['id']) ?></p>
                    <p class="card-text">Program: <?= htmlspecialchars($profile['program']) ?></p>
                    <p class="card-text">Email: <?= htmlspecialchars($profile['email']) ?></p>
                    <p class="card-text">Faculty: <?= htmlspecialchars($profile['faculty']) ?></p>
                    <p class="card-text">Campus: <?= htmlspecialchars($profile['campus']) ?></p>
                    <a href="?page=profiles" class="btn btn-secondary">Back to Profiles</a>
                </div>
            </div>
        </div>
<?php 
    endif;
?> 

<footer class="text-center">
        <p>© 2024 UiTM</p>
</footer>