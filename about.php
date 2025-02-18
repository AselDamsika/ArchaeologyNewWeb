<?php
$pageId = "about";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <title>Department of Archaeology</title>

    <?php require_once "assets/header.php"; ?>

    <style>
        body {
            font-family: "Book Antiqua", Palatino, "Palatino Linotype", serif;
        }
        .breadcrumb{
            background-color: #F0F8FF;
            padding: 10px;
            border-radius: 8px;
        }
        .breadcrumb li {
            color: #003269 !important;
            font-weight: 500;
        }
        .breadcrumb > li + li:before {
            color: #003269;
            padding-right: 2px;
        }
        .breadcrumb li a {
            color: #1b98e5 !important;
        }

        .breadcrumb li a:hover {
            color: #1684CC !important;
        }

        .welcome-row {
            background-color: #fdfdfd;
            border: none;
            margin: 5% 0;
            padding-left: 2%;
            padding: 2%;
            border-left: 4px solid #007bff;
        }

        .about-cont {
            margin: 5% 0;
        }

        .about-heading {
            font-size: 4rem;
            font-weight: 400;
            color: #003269 !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .about-hr {
            border: solid 2px #007bff;
            margin: 2% 0;
        }

        .about-row {
            padding: 0 15px;
            margin-bottom: 30px;
        }

        .aboutpara {
            font-size: 1.8rem;
            font-weight: 400;
            line-height: 1.5 !important;
            color: #505050 !important;
            text-align: justify;
            padding-left: 0;
            padding-right: 0;
            margin-bottom: 2% !important;
        }

        .about-para-span {
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .aboutpara {
                font-size: 1.6rem;
            }
        }

        @media (max-width: 576px) {
            .about-heading {
                font-size: 3rem;
            }

            .aboutpara {
                font-size: 1.4rem;
            }
        }

        @media (max-width: 450px) {
            .about-heading {
                font-size: 2.5rem;
            }
        }
    </style>

</head>

<body>
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="../ArchaeologyNewWeb/index.php">Home</a></li>
            <li class="active">About</li>
        </ol>
        <div>
            <p class="about-heading">General Information</p>
            <hr class="about-hr" />

            <div class="row about-row">
                <p class="aboutpara">
                    The Department of Archaeology at the University of Peradeniya has a distinguished history that reflects the growth and development of archaeology as an academic discipline in Sri Lanka. Established in 1959, the Department was initially a sub-department under the Department of History, with Professor Senarat Paranavitana serving as its first Professor and Head. This initiative was designed to train future archaeological officers for the state, providing a crucial foundation for the discipline in Sri Lanka.
                    In its early years, the Department collaborated closely with the government’s Archaeological Department, leveraging its fieldwork expertise, technical resources, and staff. The Department introduced courses focused on the Archaeology of Ceylon, while also offering a broader academic perspective on Art and Antiquities.
                </p>
                <p class="aboutpara">
                    Undergraduate teaching initially emphasized subjects such as History and Pali & Buddhist Civilization, with the addition of a subsidiary course in the Elements of Archaeology.
                    The Department’s early successes were marked by the completion of the first Master of Arts degrees by students A. Ariyasinghe and N. Mudiyanse, who were the first to successfully complete the MA in 1961. This milestone laid the groundwork for further development and expansion in the years that followed.
                </p>
                <p class="aboutpara">
                    Recognizing the need for more specialized and comprehensive education in archaeology, Dr. Senarat Paranavitana stressed the importance of establishing a fully independent Department of Archaeology. His vision was supported in the 1958 report of the Needham Committee, which recommended the creation of a separate department. In response, the University expanded its offerings and began to include both theoretical and practical courses within the framework of classical South Asian archaeology.
                    The establishment of the University’s first Archaeology Museum was another key development during this period. The museum, which featured collections from renowned archaeologists such as Biddel, Hettiaracchi, and De Saram, provided valuable resources for both academic study and public exhibition. Dr. Paranavitana and Dr. P.L. Prematilleke (who later became a Research Professor) played instrumental roles in curating these collections, which greatly enriched the Department’s academic environment.
                </p>
                <p class="aboutpara">
                    In 1976, the Department of Archaeology officially became an independent entity, offering Special Degree courses in archaeology for the first time. Dr. Prematilleke became the first Head of the newly formed Department, marking the beginning of a new era of growth and development.
                </p>
                <p class="aboutpara">
                    Throughout the 1980s, the Department expanded significantly, both in terms of its academic staff and its research activities. Scholars such as Dr. Sudharshan Seneviratne, Dr. W.H. Wijayapala, and Dr. Moira Tampoe, among others, were recruited to the staff, contributing to the Department’s growing academic reputation. The Department also introduced new courses to keep pace with international developments and national archaeological needs, while continuing to expand its research portfolio.
                </p>
                <p class="aboutpara">
                    As part of its academic and research initiatives, the Department has been involved in numerous high-profile archaeological projects, including collaborations with UNESCO and the Central Cultural Fund on excavations in Polonnaruwa, Kandy, and Anuradhapura. The Department also became a key partner in the Anuradhapura Citadel Archaeology Project and the Pinwewa-Galsohonkanatta Archaeology Project.
                    Today, the Department of Archaeology at the University of Peradeniya is recognized as one of the largest and most prestigious archaeology departments in Sri Lanka’s higher education system. It continues to play a leading role in the education, research, and preservation of Sri Lanka’s cultural heritage, offering undergraduate and postgraduate programs that shape the future of archaeology in the country.
                </p>
            </div>
        </div>
    </div>

    <?php require_once "assets/footer.php" ?>
</body>

</html>