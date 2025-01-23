<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Morris Sprokholt Portfolio</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/skills.css">
    <link rel="stylesheet" href="../css/Experience.css">
    <link rel="stylesheet" href="../css/Contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
<section class="showcase">
<script src="../javascript/scripts.js"></script>
<header>
    <div class="header">
        <img src="../images/Transparent-Logo.png" class="logo" alt="Logo">
        <div class="clock" id="clock">
            <span class="digit" id="hours"></span>:<span class="digit" id="minutes"></span>:<span class="digit" id="seconds"></span>
        </div>
        <button class="toggle" onclick="this.classList.toggle('opened'); this.setAttribute('aria-expanded', this.classList.contains('opened'));" aria-label="Main Menu">
            <svg width="100" height="100" viewBox="0 0 100 100">
                <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                <path class="line line2" d="M 20,50 H 80" />
                <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
            </svg>
        </button>
    </div>
    <div class="menu">
        <ul>
            <li><a href="../php/Redesign-index.php">Home</a></li>
            <li><a href="../php/skills.php">Skills</a></li>
            <li><a href="../php/experience.php">Experience</a></li>
            <li><a href="../php/contact.php">Contact</a></li>
        </ul>
    </div>
</header>
