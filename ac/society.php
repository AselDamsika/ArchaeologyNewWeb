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
        <div id="committee" class="mb-5">
            <h2 class="text-secondary mb-4">Committee</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <!-- Example Committee Members -->
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dr. Jane Smith</h5>
                            <p class="card-text">President</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title">Prof. John Doe</h5>
                            <p class="card-text">Vice President</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ms. Emily White</h5>
                            <p class="card-text">Secretary</p>
                        </div>
                    </div>
                </div>
                <!-- Add more members as needed -->
            </div>
        </div>

        <!-- Activities Section -->
        <div id="activities">
            <h2 class="text-secondary mb-4">Activities</h2>
            <div class="row g-4">
                <!-- Example Activity -->
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Annual Archaeology Symposium</h5>
                            <p class="card-text">
                                Our annual symposium features presentations, research discussions, and networking opportunities for students and professionals.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Field Excavation Program</h5>
                            <p class="card-text">
                                Hands-on training and practical experience in archaeological excavation techniques at historical sites.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Heritage Awareness Workshops</h5>
                            <p class="card-text">
                                Educational workshops to raise awareness about the importance of preserving cultural heritage.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Add more activities as needed -->
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <?php require_once "../assets/footer.php"; ?>
</body>

</html>
