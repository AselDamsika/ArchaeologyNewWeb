<?php
$pageId = "about";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <title>Department of Archaeology</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <title>Department of Archaeology</title>

    <?php require_once "assets/header.php"; ?>

    <style>

        body {
            font-family: "Book Antiqua", Palatino, "Palatino Linotype", serif;
        }

        .welcome-row {
            background-color: #fdfdfd;
            border: none;
            margin: 5% 0;
            padding-left: 2%;
            padding: 2%;
            border-left: 4px solid #007bff;
        }

        .about-cont{
            margin: 5% 0;
        }
        .about-heading {
            font-size: 4rem;
            font-weight: 400;
            color: #003269 !important;
            padding-left: 0;
            padding-right: 0;
        }

        .about-hr {
            border: solid 2px #007bff;
            margin: 2% 0;
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
    </style>

</head>

<body>

    <div class="container">
        <ol class="breadcrumb">
            <li><a href="../index.php">Home</a></li>
            <li class="active">About</li>
        </ol>
        <div class="page">
            <div class="row about-row">
                <p class="about-heading">General Information</p>
                <hr class="about-hr" />

                <p class="aboutpara">In 1957, <span class="about-para-span">Dr. Senarat Paranavitana </span> on his retirement as Commissioner of Archaeology was appointed as research Professor of Archaeology, which marked the official beginning of the Department of Archaeology, University of Peradeniya. Since its establishment as a separate Department in 1976, the Department of Archaeology grew its academic staff, students and academic activities. At present the Department of Archaeology, University of Peradeniya is one of the largest archaeology departments in the university system of Sri Lanka.</p> 
                <p class="aboutpara">The teaching of archaeology at Peradeniya was originally introduced as an auxiliary subject to history (as a sub department) and for the purpose of training future archaeological officers required by the state. In 1957, Dr. Senarat Paranavitana, on his retirement as Commissioner of Archaeology, was appointed as Research Professor of Archaeology, which also marked the official beginning of this Department of study. Paranavitana stressed the need of creating a separate Department without restricting the teaching of archaeology to postgraduate degrees alone. This view was noted in the report of the Needham Committee in 1958. In view of this, teaching and practical courses were introduced within the Fabric of classical archaeology of south Asia.</p> 
                <p class="aboutpara">This programme was enhanced by the establishment of the first museum of archaeology at the University of Peradeniya where collections from Biddel, Hettiaracchi and De Saram were presented for study and public viewing. Professor Paranavitana along with Dr. P.L. Prematilleke (later research professor) was also responsible for setting-up the new museum and establishing a very good slide collection and architectural plans. In 1976 this Department, which functioned as a sub Department of History, offered its Special Degree courses in archaeology for the first time. Dr Prematilleke was the Head of this newly constituted Department of study.</p>
                <p class="aboutpara">The decade of 1980 witnessed the expansion of the Department in terms of its academic staff, students and academic activity. It recruited to its staff Dr. Sudharshan Seneviratne (later Chair), Dr. W.H. Wijayapala (Director General of Central Cultural Fund at present), Mr. K.H. Jayatilleke (left service in 1987), Rev. Wetara Mahinda, Dr. Moira Tampoe (left service in 2001), Dr. Damayanti Gunasekare (left service in 1998), Dr. Piyatissa Senanayake, Dr. D.K. Jayaratne, Dr. R.M.M. Chandraratne and Prof. Chulani Rambukwella. They were trained in Sri Lanka, India, England and Greece. </p>
                <p class="aboutpara">New courses in archaeology were introduced in response to changes taking place at the international level and due to national requirements. This Department was assigned with the UNESCO-Central Cultural Fund Projects in Polonnaruwa (Alahana Parivena), Kandy and Anuradhapura (Jetavana). Later it also became the collaborating University Department for the Anuradhapura Citadel Archaeology Project and the Pinwewa-Galsohonkanatta Archaeology Project. Several collaborative ventures were also carried out with visiting archaeological teams from England, USA, France and Germany during the past two decades.</p> 
            </div>
        </div>
    </div>

    <?php require_once "assets/footer.php" ?>
</body>

</html>