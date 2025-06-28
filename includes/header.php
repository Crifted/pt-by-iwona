<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOZA Fit| Premium Personal Training</title>
    
    <!-- SEO verbeteringen -->
    <meta name="description" content="Personal Training met KOZA Fit. Professionele begeleiding voor moeders door een moeder. Persoonlijke training, groepslessen en voedingsadvies.">
    <meta name="keywords" content="personal trainer, personal training, fitness moeder, fitness na zwangerschap, groepslessen, HIIT, voedingsadvies, Waspik, Hilvarenbeek">
    
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php if (isset($message) && $message): ?>
    <div class="notification notification--<?php echo $messageType; ?>">
        <div class="notification__content">
            <i class="fas <?php echo $messageType == 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'; ?>"></i>
            <p><?php echo $message; ?></p>
        </div>
        <button class="notification__close" onclick="this.parentElement.remove()">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <?php endif; ?>

    <!-- Header -->
    <header class="header" id="header">
        <div class="container header__container">
            <a href="#" class="logo">KOZA <span>Fit</span></a>
            <div class="nav__toggle" id="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="nav" id="nav-menu">
                <ul class="nav__menu">
                    <li><a href="#home" class="nav__link active">Home</a></li>
                    <li><a href="#about" class="nav__link">Over Mij</a></li>
                    <li><a href="#services" class="nav__link">Diensten</a></li>
                    <li><a href="#pricing" class="nav__link">Tarieven</a></li>
                    <li><a href="#testimonials" class="nav__link">Ervaringen</a></li>
                    <li><a href="#contact" class="nav__link">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>