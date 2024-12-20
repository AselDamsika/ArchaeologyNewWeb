<?php
$pageId = "society";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Society | Department of Archaeology</title>

    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <?php require_once "../assets/header.php"; ?>
</head>

<body>
    <div class="container mb-4">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Society</li>
            </ol>
        </nav>

        <!-- Society Header -->
        <div class="text-center mb-5">
            <h1 class="text-primary">Society of the Department of Archaeology</h1>
            <p class="text-muted">
                Bringing together students and professionals to promote research, learning, and engagement in archaeology.
            </p>
            <hr class="w-50 mx-auto">
        </div>

        <!-- Committee Section -->
        <div class="container my-5">
                <h2 class="text-center text-primary mb-4">Committee</h2>
                <div class="profile-grid">
                    <!-- Profile Card 1 -->
                    <div class="profile-item">
                        <img src="../assets/images/profile1.jpg" alt="Dr. Jane Doe">
                        <div class="profile-description text-center">
                            <h4>Dr. Jane Doe</h4>
                            <h5>President</h5>
                            <blockquote>Senior Lecturer in Archaeology with over 10 years of experience in the field.</blockquote>
                        </div>
                    </div>
                    <!-- Profile Card 2 -->
                    <div class="profile-item">
                        <img src="../assets/images/profile2.jpg" alt="Mr. John Smith">
                        <div class="profile-description text-center">
                            <h4>Mr. John Smith</h4>
                            <h5>Secretary</h5>
                            <blockquote>Researcher with a keen interest in ancient civilizations and heritage management.</blockquote>
                        </div>
                    </div>
                    <!-- Profile Card 3 -->
                    <div class="profile-item">
                        <img src="../assets/images/profile3.jpg" alt="Ms. Sarah Brown">
                        <div class="profile-description text-center">
                            <h4>Ms. Sarah Brown</h4>
                            <h5>Treasurer</h5>
                            <blockquote>Specialist in cultural resource management and ancient history studies.</blockquote>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                /* Styling the profile grid items */
                .profile-item {
                    border: 1px solid #e0e0e0;
                    border-radius: 8px;
                    overflow: hidden;
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                    margin-bottom: 20px;
                    padding: 20px;
                    background-color: #f9f9f9;
                }

                /* Hover effect on profile items */
                .profile-item:hover {
                    transform: scale(1.05);
                    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                    background-color: #fff;
                }

                /* Styling the profile image */
                .profile-item img {
                    width: 150px;
                    height: 150px;
                    object-fit: cover;
                    border-radius: 50%;
                    margin-bottom: 15px;
                }

                /* Increased font sizes for profile description */
                .profile-description h4 {
                    font-size: 2rem;
                    font-weight: bold;
                }

                .profile-description h5 {
                    font-size: 1.4rem;
                    color: #555;
                }

                .profile-description blockquote {
                    font-size: 1.2rem;
                    color: #777;
                    border-left: 3px solid #007bff;
                    padding-left: 10px;
                }

                /* Increase for the profile description text */
                .profile-description p {
                    font-size: 1.2rem;
                    line-height: 1.5;
                }

                /* Ensuring grid layout looks good */
                .profile-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                    grid-gap: 20px;
                    margin-top: 30px;
                }
            </style>


        <!-- Activities Section -->
        <div class="container my-5">
            <h2 class="text-center text-primary mb-4">Activities</h2>
            <div class="activity-grid">
                <!-- Activity Card 1 -->
                <div class="activity-item d-flex">
                    <img src="../assets/images/activity1.jpg" alt="Field Visit">
                    <div class="activity-description pl-4">
                        <h4>Field Visit to Ancient Ruins</h4>
                        <p>Exploring ancient ruins to learn about architectural techniques and cultural heritage.</p>
                    </div>
                </div>
                <!-- Activity Card 2 -->
                <div class="activity-item d-flex">
                    <img src="../assets/images/activity2.jpg" alt="Seminar">
                    <div class="activity-description pl-4">
                        <h4>Annual Archaeology Seminar</h4>
                        <p>An engaging event where students and professors discuss groundbreaking research in archaeology.</p>
                    </div>
                </div>
                <!-- Activity Card 3 -->
                <div class="activity-item d-flex">
                    <img src="../assets/images/activity3.jpg" alt="Workshop">
                    <div class="activity-description pl-4">
                        <h4>Heritage Conservation Workshop</h4>
                        <p>A hands-on workshop focusing on preserving historical artifacts and monuments.</p>
                    </div>
                </div>
            </div>
        </div>

        <style>
            /* Styling long activity cards */
            .activity-item {
                display: flex;
                align-items: center;
                border: 1px solid #e0e0e0;
                border-radius: 8px;
                overflow: hidden;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                margin-bottom: 20px;
                padding: 20px;
                background-color: #f9f9f9;
            }

            /* Hover effect */
            .activity-item:hover {
                transform: scale(1.02);
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                background-color: #fff;
            }

            /* Image styling for long cards */
            .activity-item img {
                width: 180px;
                height: 180px;
                object-fit: cover;
                border-radius: 8px;
            }

            /* Description styling for long cards */
            .activity-description {
                padding-left: 20px;
            }

            .activity-description h4 {
                font-size: 2rem;
                font-weight: bold;
                margin-bottom: 10px;
            }

            .activity-description p {
                font-size: 1.2rem;
                line-height: 1.5;
                color: #555;
            }

            /* Grid for responsiveness */
            .activity-grid {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }
        </style>


    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <?php require_once "../assets/footer.php"; ?>
</body>

</html>
