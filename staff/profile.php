<?php
// Sample staff data (replace with database or file retrieval)
$staffProfiles = [
    1 => [
        "name" => "Prof. R.M.M. Chandraratne",
        "image" => "../assets/images/academic/chandranew.jpg",
        "title" => "Professor, Department of Archaeology",
        "qualifications" => "BA (Hons) (Perad), MA (Poona), Ph.D. (Pune), FSLCA",
        "email" => "m.chandraratne@arts.pdn.ac.lk",
        "phone" => "+94 0812392583"
    ],
    2 => [
        "name" => "Prof. Chulani Rambukwella",
        "image" => "../assets/images/academic/proframbukwella.jpg",
        "title" => "Chair Professor of Archaeology",
        "qualifications" => "PhD (UK), MA (Peradeniya), BA (Peradeniya)",
        "email" => "chulanimw@gmail.com",
        "phone" => "+94 0812392583"
    ],
    3 => [
        "name" => "Dr. A.S.T. Rajapakse",
        "image" => "../assets/images/academic/ast.png",
        "title" => "Senior Lecturer",
        "qualifications" => "B.A. (Peradeniya), P.G. Dip. (IHS, Netherlands), M.A. (I.P. University), Ph.D. (Peradeniya)",
        "email" => "tsaru2003@yahoo.com",
        "phone" => "+94 71 4395277"
    ]
];

// Get profile ID from URL
$profileId = isset($_GET['id']) ? $_GET['id'] : null;
$profile = isset($staffProfiles[$profileId]) ? $staffProfiles[$profileId] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - <?php echo $profile ? $profile["name"] : "Not Found"; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <?php if ($profile): ?>
            <h1><?php echo $profile["name"]; ?></h1>
            <img src="<?php echo $profile["image"]; ?>" alt="<?php echo $profile["name"]; ?>" class="img-fluid rounded">
            <h3><?php echo $profile["title"]; ?></h3>
            <p><strong>Qualifications:</strong> <?php echo $profile["qualifications"]; ?></p>
            <p><strong>Email:</strong> <a href="mailto:<?php echo $profile["email"]; ?>"><?php echo $profile["email"]; ?></a></p>
            <p><strong>Phone:</strong> <?php echo $profile["phone"]; ?></p>
        <?php else: ?>
            <h2>Profile Not Found</h2>
        <?php endif; ?>
        <a href="academic_staff.php" class="btn btn-primary">Back to Staff</a>
    </div>
</body>
</html>
