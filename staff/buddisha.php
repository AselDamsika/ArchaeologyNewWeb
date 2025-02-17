<?php

$staffProfiles = [
    1 => [
        "name" => "Mr. Buddisha Weerasuriya",
        "image" => "../assets/images/academic/buddi.jpg",
        "title" => "Lecturer (Probationary), Department of Archaeology",
        "qualifications" => "",
        "email" => "buddisha@arts.pdn.ac.lk",
        "phone" => "0715206865",
        "aboutme" => "",
        "googlescolar" => "https://scholar.google.com/citations?user=0M4SVwUAAAAJ&hl=en",
        "researchgate" => "https://www.researchgate.net/profile/Buddisha-Weerasuriya-2",

        "education" => [
            "degree1" => "M.Phil (Reading)",
            "institution1" => "PGIS - University of Peradeniya",
            "degree2" => "BA (Hons)",
            "institution2" => "University of Peradeniya",
        ],

        "currentpositions" => [
            "position1" => "Lecturer (Probationary) - Department of Archaeology, University of Peradeniya",
            "period1" => "July 2024 - To Present",
            "position2" => "Volunteer Student Counselor, - Faculty of Arts, University of Peradeniya",
            "period2" => "2022 - To Present",
            "position3" => "Assistant Deputy Proctor - Faculty of Arts, University of Peradeniya",
            "period3" => "January 2025 - To Present",
        ],

        "positionsheld" => [
            "position1" => "Temporary Lecturer - Department of Archaeology, University of Peradeniya",
            "period1" => "October 2021 - July 2024",
            
        ],

        "memberships" => [
            "member1" => "Member - Archaeological Society of Sri Lanka",
            "member2" => "Life Member - Museam Society of Sri Lanka",
            "member3" => "Student Member - Sri Lanka Council of Archaeologists",
        ],

        "awards" => [
            "award1" => "Leelananda Premathilake and Nanda Premathilake Prize for Archaeology for the Greatest Competence in Archaeology - University of Peradeniya, Sri Lanka.",
            "period1" => "2020",
            "award2" => "University Prize for Academic Excellence on the basis of the results of Final Degree Examination in Special Arts Degree Programme - University of Peradeniya",
            "period2" => "2020",
            "award3" => "Best Research Presentation (Theme - Society and Environment), PGIHS Research Congress - 2022 - Postgraduate Institute of Humanities and Social Sciences, University of Peradeniya, Sri Lanka.",
            "period3" => "2022",
            
        ],

        "books" => "",

        "chapters" => [
            "chapter1" => "Book review, Premāniśansa Vichāra Vimansana (Critiques on Premaniśansa: Death of Author - Birth of a Reader), Sarathchandra Walpola (Ed.), Nugegoda: Sarasavi Publishers.",
        ],

        "journals" => [
            "journal1" => "Weerasuriya, W.L.A.B.J. (2022). “Sacredness, Livingness and Cultural Harmony destroyed by the Hegemonic Heritage Conservation: A Case Study related to Kuragala Archaeological field, Sri Lanka”, EPRA International Journal of Multidisciplinary Research (IJMR), Vol. VIII, Issue. VIII, India.",
            "journal2" => "Weerasuriya, W.L.A.B.J., Chandrarathne, R.M.M. (2023). “The Role of Archaeomalacological Research in Sri Lanka: A Theoretical Framework Approach”, Ancient Lanka, Mount Royal University Library, University of Alberta Libraries.",
        ],

        "cpapers" => "",

        "abstracts" => "",

        "editorials" => "",

        "conferences" => "",

        "specializations" => "",

        "teachings" => [
            "teaching1" => "ACL 1001 - Introductory Archaeology, Department of Archaeology, University of Peradeniya",
            "period1" => "2024 - To Present",
            "teaching2" => "ACL 2003 - Archaeological Theory and Methods, Department of Archaeology, University of Peradeniya",
            "period2" => "2024 - To Present",
            "teaching3" => "ACL 3001 - Crafts & Technology of Pre Industrial South Asia, Department of Archaeology",
            "period3" => "First Semester, 2023/2024 Academic Year - To Present",
            "teaching4" => "ACL 3002 - Epigraphic Studies in Ancient India, Department of Archaeology, University of Peradeniya",
            "period4" => "2024 - To Present",
            "teaching5" => "ACL 4001 - Environmental Archaeology, Department of Archaeology",
            "period5" => "First Semester, 2023/2024 Academic Year",
            "teaching6" => "ACL 4003 - The Bronze Age & Early Iron Age Archaeology of Ancient India, Department of Archaeology",
            "period6" => "2024 - To Present",
        ],

        "researchs" => [
            "research1" => "Contested Heritage",
            "research2" => "Archaeomalacology",
            "research3" => "Epigraphy",
            "research4" => "Bio-archaeology",
            "research5" => "Alternative Histories"
        ],

        "grants" => [
            "grant1" => "Gate Mudliyar A. G. Thilakaratne Research Fellowship - 2022, University of Peradeniya, Sri Lanka (Fellowship No. - AC/485/2022/01)"
        ],

        "contributions" => ""
    ],
];

$profile = isset($staffProfiles[1]) ? $staffProfiles[1] : null;
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
        .fa-arrow-left {
            margin-bottom: 10px;
        }

        .fa-arrow-left:hover {
            color: #286090;
        }

        .profile-container {
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-image {
            width: 200px;
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
            margin-bottom: 30px;
        }

        .profile-section {
            margin-top: 10px;
            padding: 25px 15px;
            background: #F0F8FF;
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
            text-align: justify;
        }

        .profile-subtitle {
            margin-top: 0 !important;
            color: #505050 !important;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 8px 0;
            vertical-align: top;
            font-size: 1.6rem;
        }

        .icon-column {
            width: 40px;
            text-align: left;
        }

        .fa {
            font-size: 2rem;
            color: #1b98e5;
        }

        .viewlink {
            color: #1b98e5;
        }

        .viewlink:hover {
            color: #1684CC;
        }

        @media (max-width: 991px) {
            .profile-card {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            .profile-image {
                width: 150px;
            }
            .profile-title{
                font-size: 3rem;
            }
        }

        @media (max-width: 450px) {
            .profile-title{
                font-size: 2.7rem;
            }
            .profile-subtitle{
                font-size: 2.5rem !important;
            }
            p{
                font-size: 1.3rem !important;
            }
            td{
                font-size: 1.3rem !important;
            }
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <?php if ($profile): ?>
            <div class="profile-container">
                <a href="academic.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
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
                    <div class="profile-section">
                        <h2 class="profile-subtitle">About Me</h2>
                        <p class="profile-paragraph">
                            <?php echo $profile["aboutme"]; ?>
                        </p>
                    </div>
                <?php endif; ?>

                <?php if (!empty($profile["education"])): ?>
                    <div class="profile-section">
                        <h2 class="profile-subtitle">Education</h2>

                        <table class="education-table">
                            <?php foreach ($profile["education"] as $key => $value): ?>
                                <?php if (strpos($key, 'degree') === 0): ?>
                                    <?php
                                    $number = preg_replace('/[^0-9]/', '', $key);
                                    $degreeKey = "degree" . $number;
                                    $institutionKey = "institution" . $number;
                                    ?>
                                    <tr>
                                        <td class="icon-column"><span class="fa fa-graduation-cap"></span></td>
                                        <td>
                                            <strong><?php echo $profile["education"][$degreeKey]; ?></strong><br>
                                            <?php echo $profile["education"][$institutionKey]; ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>

                <?php if (!empty($profile["currentpositions"])): ?>
                    <div class="profile-section">
                        <h2 class="profile-subtitle">Current Positions</h2>

                        <table class="positions-table">
                            <?php foreach ($profile["currentpositions"] as $key => $value): ?>
                                <?php if (strpos($key, 'position') === 0): ?>
                                    <?php
                                    $number = preg_replace('/[^0-9]/', '', $key);
                                    $positionKey = "position" . $number;
                                    $periodKey = "period" . $number;
                                    ?>
                                    <tr>
                                        <td class="icon-column"><span class="fa fa-user-circle"></span></td>
                                        <td>
                                            <strong><?php echo $profile["currentpositions"][$positionKey]; ?></strong><br>
                                            <?php echo $profile["currentpositions"][$periodKey]; ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>

                <?php if (!empty($profile["positionsheld"])): ?>
                    <div class="profile-section">
                        <h2 class="profile-subtitle">Positions Held</h2>

                        <table class="positions-table">
                            <?php foreach ($profile["positionsheld"] as $key => $value): ?>
                                <?php if (strpos($key, 'position') === 0): ?>
                                    <?php
                                    $number = preg_replace('/[^0-9]/', '', $key);
                                    $positionKey = "position" . $number;
                                    $periodKey = "period" . $number;
                                    ?>
                                    <tr>
                                        <td class="icon-column"><span class="fa fa-user-circle"></span></td>
                                        <td>
                                            <strong><?php echo $profile["positionsheld"][$positionKey]; ?></strong><br>
                                            <?php echo $profile["positionsheld"][$periodKey]; ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>

                <?php if (!empty($profile["memberships"])): ?>
                    <div class="profile-section">
                        <h2 class="profile-subtitle">Memberships</h2>

                        <table class="memberships-table">
                            <?php foreach ($profile["memberships"] as $key => $value): ?>
                                <?php if (strpos($key, 'member') === 0): ?>
                                    <?php
                                    $number = preg_replace('/[^0-9]/', '', $key);
                                    $memberKey = "member" . $number;
                                    ?>
                                    <tr>
                                        <td class="icon-column"><span class="fa fa-id-card"></span></td>
                                        <td>
                                            <?php echo $profile["memberships"][$memberKey]; ?><br>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>

                <?php if (!empty($profile["awards"])): ?>
                    <div class="profile-section">
                        <h2 class="profile-subtitle">Awards</h2>
                        <table class="awards-table">
                            <?php foreach ($profile["awards"] as $key => $value): ?>
                                <?php if (strpos($key, 'award') === 0): ?>
                                    <?php
                                    $number = preg_replace('/[^0-9]/', '', $key);
                                    $awardKey = "award" . $number;
                                    $period = "period" . $number;
                                    ?>
                                    <tr>
                                        <td class="icon-column"><span class="fa fa-trophy"></span></td>
                                        <td>
                                            <strong><?php echo $profile["awards"][$awardKey]; ?><br></strong>
                                            <?php echo $profile["awards"][$period]; ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>

                <div class="profile-section">
                    <h2 class="profile-subtitle">Publications</h2><br>
                    <!-- Books -->
                    <?php if (!empty($profile["books"])): ?>
                        <div>
                            <h3 class="profile-subtitle">Books</h3>
                            <table class="publications-table">
                                <?php foreach ($profile["books"] as $key => $value): ?>
                                    <?php if (strpos($key, 'book') === 0): ?>
                                        <?php
                                        $number = preg_replace('/[^0-9]/', '', $key);
                                        $bookKey = "book" . $number;
                                        $linkKey = "link" . $number;
                                        ?>
                                        <tr>
                                            <td class="icon-column"><span class="fa fa-book"></span></td>
                                            <td>
                                                <?php echo $profile["books"][$bookKey]; ?>
                                                <a class="viewlink" href="<?php echo $profile["books"][$linkKey] ?>">View</a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    <?php endif; ?>

                    <!-- Chapters in books -->
                    <?php if (!empty($profile["chapters"])): ?>
                        <div>
                            <h3 class="profile-subtitle">Chapters in books</h3>
                            <table class="publications-table">
                                <?php foreach ($profile["chapters"] as $key => $value): ?>
                                    <?php if (strpos($key, 'chapter') === 0): ?>
                                        <?php
                                        $number = preg_replace('/[^0-9]/', '', $key);
                                        $chapterKey = "chapter" . $number;
                                        ?>
                                        <tr>
                                            <td class="icon-column"><span class="fa fa-book"></span></td>
                                            <td>
                                                <?php echo $profile["chapters"][$chapterKey]; ?>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    <?php endif; ?><br>

                    <!-- Journal articles -->
                    <?php if (!empty($profile["journals"])): ?>
                        <div>
                            <h3 class="profile-subtitle">Journal Articles</h3>
                            <table class="publications-table">
                                <?php foreach ($profile["journals"] as $key => $value): ?>
                                    <?php if (strpos($key, 'journal') === 0): ?>
                                        <?php
                                        $number = preg_replace('/[^0-9]/', '', $key);
                                        $journalKey = "journal" . $number;
                                        ?>
                                        <tr>
                                            <td class="icon-column"><span class="fa fa-book"></span></td>
                                            <td>
                                                <?php echo $profile["journals"][$journalKey]; ?>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    <?php endif; ?>

                    <!-- Conference papers -->
                    <?php if (!empty($profile["cpapers"])): ?>
                        <div>
                            <h3 class="profile-subtitle">Conference Papers</h3>
                            <table class="publications-table">
                                <?php foreach ($profile["cpapers"] as $key => $value): ?>
                                    <?php if (strpos($key, 'cpaper') === 0): ?>
                                        <?php
                                        $number = preg_replace('/[^0-9]/', '', $key);
                                        $cpaperKey = "cpaper" . $number;
                                        ?>
                                        <tr>
                                            <td class="icon-column"><span class="fa fa-book"></span></td>
                                            <td>
                                                <?php echo $profile["cpapers"][$cpaperKey]; ?>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    <?php endif; ?>

                    <!-- Abstracts -->
                    <?php if (!empty($profile["abstracts"])): ?>
                        <div>
                            <h3 class="profile-subtitle">Published in abstract form</h3>
                            <table class="publications-table">
                                <?php foreach ($profile["abstracts"] as $key => $value): ?>
                                    <?php if (strpos($key, 'abstract') === 0): ?>
                                        <?php
                                        $number = preg_replace('/[^0-9]/', '', $key);
                                        $abstractKey = "abstract" . $number;
                                        ?>
                                        <tr>
                                            <td class="icon-column"><span class="fa fa-book"></span></td>
                                            <td>
                                                <?php echo $profile["abstracts"][$abstractKey]; ?>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    <?php endif; ?>

                    <!-- Editorial -->
                    <?php if (!empty($profile["editorials"])): ?>
                        <div>
                            <h3 class="profile-subtitle">Member of editorial board</h3>
                            <table class="publications-table">
                                <?php foreach ($profile["editorials"] as $key => $value): ?>
                                    <?php if (strpos($key, 'editorial') === 0): ?>
                                        <?php
                                        $number = preg_replace('/[^0-9]/', '', $key);
                                        $editorialKey = "editorial" . $number;
                                        ?>
                                        <tr>
                                            <td class="icon-column"><span class="fa fa-book"></span></td>
                                            <td>
                                                <?php echo $profile["editorials"][$editorialKey]; ?>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    <?php endif; ?>


                </div>

                <?php if (!empty($profile["conferences"])): ?>
                    <div class="profile-section">
                        <h2 class="profile-subtitle">Conferences</h2>
                        <table class="conference-table">
                            <?php foreach ($profile["conferences"] as $key => $value): ?>
                                <?php if (strpos($key, 'name') === 0): ?>
                                    <?php
                                    $number = preg_replace('/[^0-9]/', '', $key);
                                    $nameKey = "name" . $number;
                                    $para = "para" . $number;
                                    $period = "period" . $number;
                                    ?>
                                    <tr>
                                        <td class="icon-column"><span class="fa fa-globe "></span></td>
                                        <td>
                                            <strong><?php echo $profile["conferences"][$nameKey]; ?><br></strong>
                                            <?php echo $profile["conferences"][$para]; ?> <br>
                                            <?php echo $profile["conferences"][$period]; ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>

                <?php if (!empty($profile["specializations"])): ?>
                    <div class="profile-section">
                        <h2 class="profile-subtitle">Specialization</h2>
                        <table class="specialization-table">
                            <?php foreach ($profile["specializations"] as $key => $value): ?>
                                <?php if (strpos($key, 'specialization') === 0): ?>
                                    <?php
                                    $number = preg_replace('/[^0-9]/', '', $key);
                                    $specializationKey = "specialization" . $number;
                                    ?>
                                    <tr>
                                        <td class="icon-column"><span class="fa fa-dot-circle-o"></span></td>
                                        <td>
                                            <strong><?php echo $profile["specializations"][$specializationKey]; ?><br></strong>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>

                <?php if (!empty($profile["teachings"])): ?>
                    <div class="profile-section">
                        <h2 class="profile-subtitle">Teaching</h2>
                        <table class="teaching-table">
                            <?php foreach ($profile["teachings"] as $key => $value): ?>
                                <?php if (strpos($key, 'teaching') === 0): ?>
                                    <?php
                                    $number = preg_replace('/[^0-9]/', '', $key);
                                    $teachingKey = "teaching" . $number;
                                    $period = "period" . $number;
                                    ?>
                                    <tr>
                                        <td class="icon-column"><span class="fa fa-pencil-square-o"></span></td>
                                        <td>
                                            <strong><?php echo $profile["teachings"][$teachingKey]; ?><br></strong>
                                            <?php echo $profile["teachings"][$period]; ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>

                <?php if (!empty($profile["researchs"])): ?>
                    <div class="profile-section">
                        <h2 class="profile-subtitle">Research Interests</h2>
                        <table class="researchs-table">
                            <?php foreach ($profile["researchs"] as $key => $value): ?>
                                <?php if (strpos($key, 'research') === 0): ?>
                                    <?php
                                    $number = preg_replace('/[^0-9]/', '', $key);
                                    $researchKey = "research" . $number;
                                    ?>
                                    <tr>
                                        <td class="icon-column"><span class="fa fa-bookmark"></span></td>
                                        <td>
                                            <?php echo $profile["researchs"][$researchKey]; ?><br>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>

                <?php if (!empty($profile["grants"])): ?>
                    <div class="profile-section">
                        <h2 class="profile-subtitle">Research Grants Received</h2>
                        <table class="grants-table">
                            <?php foreach ($profile["grants"] as $key => $value): ?>
                                <?php if (strpos($key, 'grant') === 0): ?>
                                    <?php
                                    $number = preg_replace('/[^0-9]/', '', $key);
                                    $grantKey = "grant" . $number;
                                    ?>
                                    <tr>
                                        <td class="icon-column"><span class="fa fa-certificate"></span></td>
                                        <td>
                                            <?php echo $profile["grants"][$grantKey]; ?><br>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>

                <?php if (!empty($profile["contributions"])): ?>
                    <div class="profile-section">
                        <h2 class="profile-subtitle">Other Academic Contributions</h2>
                        <table class="contribution-table">
                            <?php foreach ($profile["contributions"] as $key => $value): ?>
                                <?php if (strpos($key, 'contribution') === 0): ?>
                                    <?php
                                    $number = preg_replace('/[^0-9]/', '', $key);
                                    $contribution = "contribution" . $number;
                                    ?>
                                    <tr>
                                        <td class="icon-column"><span class="fa fa-cube"></span></td>
                                        <td>
                                            <?php echo $profile["contributions"][$contribution]; ?><br>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>



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