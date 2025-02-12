<?php
// Sample staff data (replace with database or file retrieval)
$staffProfiles = [
    1 => [
        "name" => "Prof. R.M.M. Chandraratne",
        "image" => "../assets/images/academic/chandranew.jpg",
        "title" => "Professor, Department of Archaeology",
        "qualifications" => "BA (Hons) (Perad), MA (Poona), Ph.D. (Pune), FSLCA",
        "email" => "m.chandraratne@arts.pdn.ac.lk",
        "phone" => "+94 0812392583",
        "biography" => "Prof. Chandraratne has made significant contributions to the field of archaeology, specializing in ancient civilizations and cultural heritage preservation."
    ],
    2 => [
        "name" => "Prof. Chulani Rambukwella",
        "image" => "../assets/images/academic/proframbukwella.jpg",
        "title" => "Chair Professor of Archaeology",
        "qualifications" => "PhD (UK), MA (Peradeniya), BA (Peradeniya)",
        "email" => "chulanimw@gmail.com",
        "phone" => "+94 0812392583",
        "biography" => "Prof. Rambukwella is a leading expert in South Asian archaeology, with a focus on ancient trade routes and cultural exchanges."
    ],
    3 => [
        "name" => "Dr. A.S.T. Rajapakse",
        "image" => "../assets/images/academic/ast.png",
        "title" => "Senior Lecturer",
        "qualifications" => "B.A. (Peradeniya), P.G. Dip. (IHS, Netherlands), M.A. (I.P. University), Ph.D. (Peradeniya)",
        "email" => "tsaru2003@yahoo.com",
        "phone" => "+94 71 4395277"
    ],
    4 => [
        "name" => "Ms. K.G.A.M. Sandya Kumari Nawarathna Menike",
        "image" => "../assets/images/academic/sandya.png",
        "title" => "Lecturer",
        "qualifications" => "BA(Hons)Peradeniya, MSc(PGIAR), Ph.D.Reading(PGIAR) MSLCA",
        "email" => "sannawarathna@gmail.com",
        "phone" => "+94 714 823 384"
    ],
    5 => [
        "name" => "Dr. Uditha Jinadasa",
        "image" => "../assets/images/academic/uditha.jpg",
        "title" => "Lecturer",
        "qualifications" => "BA & MSc in Geo-Informatics (Peradeniya), PhD (Leiden)",
        "email" => "ujinadasa@pdn.ac.lk",
        "phone" => "+94 71 497 0718"
    ],
    6 => [
        "name" => "Ms. Piyumi Embuldeniya",
        "image" => "../assets/images/academic/piyumi.png",
        "title" => "Lecturer (Probationary)",
        "qualifications" => "MSSc. (Kelaniya), PGDip. in Museology (PGIAR, Kelaniya), B.A. (Kelaniya)",
        "email" => "piyumie@arts.pdn.ac.lk",
        "phone" => "+94 772383788"
    ],
    7 => [
        "name" => "Mr. Buddhisha Weerasuriya",
        "image" => "../assets/images/academic/buddi.jpg",
        "title" => "Lecturer (Probationary)",
        "qualifications" => "M.Phil (Peradeniya) - Reading, B.A (Hons) (Peradeniya)",
        "email" => "buddisha@arts.pdn.ac.lk",
        "phone" => "+94 71 5206865"
    ],
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
    <?php require_once "../assets/header.php"; ?>
    <style>
        .profile-container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .profile-image {
            max-width: 200px;
            height: auto;
            border-radius: 50%;
            border: 3px solid #007bff;
        }
        .profile-title {
            color: #007bff;
            font-weight: bold;
        }
        .profile-card {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .bio-section {
            margin-top: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <?php if ($profile): ?>
            <div class="profile-container">
                <div class="profile-card">
                    <img src="<?php echo $profile["image"]; ?>" alt="<?php echo $profile["name"]; ?>" class="profile-image">
                    <div>
                        <h1 class="profile-title"><?php echo $profile["name"]; ?></h1>
                        <h4 class="text-muted"><?php echo $profile["title"]; ?></h4>
                        <p><strong>Qualifications:</strong> <?php echo $profile["qualifications"]; ?></p>
                        <p><strong>Email:</strong> <a href="mailto:<?php echo $profile["email"]; ?>"><?php echo $profile["email"]; ?></a></p>
                        <p><strong>Phone:</strong> <?php echo $profile["phone"]; ?></p>
                    </div>
                </div>
                <div class="bio-section">
                    <h5>Biography</h5>
                    <p>
                        <?php echo isset($profile["biography"]) ? $profile["biography"] : "Biography not available."; ?>
                    </p>
                </div>
                <a href="academic.php" class="btn btn-primary mt-3">Back to Staff</a>
            </div>
        <?php else: ?>
            <h2 class="text-danger">Profile Not Found</h2>
            <a href="academic.php" class="btn btn-secondary">Back to Staff</a>
        <?php endif; ?>
    </div>

    <?php require_once "../assets/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
