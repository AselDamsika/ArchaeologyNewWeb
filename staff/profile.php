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
        "aboutme" => "R.M.M. Chandraratne, professor in Archaeology, holds a doctorate in archaeology from the University of Pune and completed a Masters from the University of Poona and a Bachelor of Arts Degree with honors in Archaeology from the University of Peradeniya. He had scholarships from the Ford Foundation for the Master’s and doctoral degrees and has been awarded a South-Asia Visiting Postdoctoral Fellowship to the Institute of Archaeology, University College, London. Afterwards he was an Academic staff visitor, the University of Turku, Finland and had a Postdoctoral Scholarship to Dept. of Geology (the Faculty of Mathematics and Natural Sciences) at the University of Turku, Finland under the Erasmus Mundus Action II. He takes part in teaching and research on archaeology having multidisciplinary nature and contributes several publications.",
        "googlescolar" => "https://scholar.google.com/citations?user=ipI-knoAAAAJ&hl=en",
        "researchgate" => "https://www.researchgate.net/profile/Rmm-Chandraratne-2",
        "education" => file_get_contents("../staff/education.php")
    ],  
    2 => [
        "name" => "Prof. Chulani Rambukwella",
        "image" => "../assets/images/academic/proframbukwella.jpg",
        "title" => "Chair Professor of Archaeology",
        "qualifications" => "PhD (UK), MA (Peradeniya), BA (Peradeniya)",
        "email" => "chulanimw@gmail.com",
        "phone" => "+94 0812392583",
        "aboutme" => "I am the Professor of Archaeology (Chair Professor) at the Department of Archaeology, University of Peradeniya, Sri Lanka with 32 years of teaching and research experience. Currently, I am the Head of the Department of Archaeology I have a PhD in Archaeology and Museology (Museum Studies) from the School of Museum Studies, University of Leicester, United Kingdom. I am also a Fellow of the Sri Lanka Council of Archaeologists. From 2015 I have been serving in a consultative capacity as the Archaeology Director for the Badulla District of the Central Cultural Fund (CCF) of Sri Lanka. I have also been appointed as one of the seven members of the Board of Members of the Inter Statutory Board for the Protection of Kandyan Heritage under the Ministry of Ministry of Science, Technology, Research, Skills Development & Vocational Training and Kandyan Heritage. My research writings have been published in several refereed journals. I am also the author of some books on Archaeology and Museology.",
        "googlescolar" => "",
        "researchgate" => ""
    ],
    3 => [
        "name" => "Dr. A.S.T. Rajapakse",
        "image" => "../assets/images/academic/ast.png",
        "title" => "Senior Lecturer",
        "qualifications" => "B.A. (Peradeniya), P.G. Dip. (IHS, Netherlands), M.A. (I.P. University), Ph.D. (Peradeniya)",
        "email" => "tsaru2003@yahoo.com",
        "phone" => "+94 71 4395277",
        "aboutme" => "",
        "googlescolar" => "",
        "researchgate" => ""
    ],
    4 => [
        "name" => "Ms. K.G.A.M. Sandya Kumari Nawarathna Menike",
        "image" => "../assets/images/academic/sandya.png",
        "title" => "Lecturer",
        "qualifications" => "BA(Hons)Peradeniya, MSc(PGIAR), Ph.D.Reading(PGIAR) MSLCA",
        "email" => "sannawarathna@gmail.com",
        "phone" => "+94 714 823 384",
        "googlescolar" => "",
        "researchgate" => ""
    ],
    5 => [
        "name" => "Dr. Uditha Jinadasa",
        "image" => "../assets/images/academic/uditha.jpg",
        "title" => "Lecturer",
        "qualifications" => "BA & MSc in Geo-Informatics (Peradeniya), PhD (Leiden)",
        "email" => "ujinadasa@pdn.ac.lk",
        "phone" => "+94 71 497 0718",
        "googlescolar" => "",
        "researchgate" => ""
    ],
    6 => [
        "name" => "Ms. Piyumi Embuldeniya",
        "image" => "../assets/images/academic/piyumi.png",
        "title" => "Lecturer (Probationary)",
        "qualifications" => "MSSc. (Kelaniya), PGDip. in Museology (PGIAR, Kelaniya), B.A. (Kelaniya)",
        "email" => "piyumie@arts.pdn.ac.lk",
        "phone" => "+94 772383788",
        "googlescolar" => "https://scholar.google.com/citations?user=2RD35egAAAAJ&hl=en",
        "researchgate" => "https://www.researchgate.net/profile/Piyumi-Embuldeniya"
    ],
    7 => [
        "name" => "Mr. Buddhisha Weerasuriya",
        "image" => "../assets/images/academic/buddi.jpg",
        "title" => "Lecturer (Probationary)",
        "qualifications" => "M.Phil (Peradeniya) - Reading, B.A (Hons) (Peradeniya)",
        "email" => "buddisha@arts.pdn.ac.lk",
        "phone" => "+94 71 5206865",
        "googlescolar" => "https://scholar.google.com/citations?user=0M4SVwUAAAAJ&hl=en",
        "researchgate" => "https://www.researchgate.net/profile/Buddisha-Weerasuriya-2"
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
            /* max-width: 800px; */
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
            border: 3px solid #1b98e5;
        }

        .profile-title {
            color: #1b98e5 !important;
            font-weight: bold;
        }

        .profile-card {
            display: flex;
            align-items: center;
            gap: 5%;
        }

        .bio-section, .edu-section {
            margin-top: 10px;
            padding: 25px 15px;
            background: #f8f9fa;
            border-radius: 8px;
        }

        p,
        .email,
        .profile-paragraph {
            color: #505050 !important;
        }

        .email:hover {
            color: #1684CC !important;
        }

        .profile-paragraph {
            font-size: 1.6rem;
            line-height: 1.1 !important;
        }

        .profile-subtitle {
            margin-top: 0 !important;
            color: #505050 !important;
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
                        <p><?php echo $profile["qualifications"]; ?></p>
                        <p><a class="email" href="mailto:<?php echo $profile["email"]; ?>"><?php echo $profile["email"]; ?></a></p>
                        <p><?php echo $profile["phone"]; ?></p> <br>

                        <?php if (!empty($profile["googlescolar"])): ?>
                            <a href="<?php echo $profile["googlescolar"]; ?>" class="btn btn-primary google-scholar" target="_blank">Google Scholar</a>
                        <?php endif; ?>
                        <?php if (!empty($profile["researchgate"])): ?>
                            <a href="<?php echo $profile["researchgate"]; ?>" class="btn btn-primary research-gate" target="_blank">Research Gate</a>
                        <?php endif; ?>
                    </div>
                </div>


                <?php if (!empty($profile["aboutme"])): ?>
                    <div class="bio-section">
                        <h2 class="profile-subtitle">About Me</h2>
                        <p class="profile-paragraph">
                            <?php echo $profile["aboutme"]; ?>
                        </p>
                    </div>
                <?php endif; ?>

                <?php if (!empty($profile["education"])): ?>
                    <div class="edu-section">
                        <h2 class="profile-subtitle">Education</h2>
                        <p class="profile-paragraph">
                            <?php echo $profile["education"]; ?>
                        </p>
                    </div>
                <?php endif; ?>

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