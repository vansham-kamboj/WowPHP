<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Free Consultation</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General Styles */
        body {
            font-family: 'Montserrat', Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 0;
        }

        .section {
            padding: 40px 0;
        }

        .cta-button {
            background-color: #6a0dad;
            color: white;
            border: none;
            padding: 15px 30px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: background 0.3s;
        }

        .cta-button:hover {
            background-color: #571c87;
        }

        /* Header Section */
        .header {
            background: url('https://ideogram.ai/assets/image/lossless/response/wCgmjMLiR2qcMRPRcilmQQ') no-repeat center center/cover;
            text-align: center;
            padding: 80px 20px;
            color: white;
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

/* Benefits Section */
.section.benefits {
    background-color: #f4f2ff;
    padding: 50px 150px;
    text-align: center;
    font-family: 'Montserrat', Arial, sans-serif;
}

.section.benefits h2 {
    font-size: 32px;
    color: #333;
    margin-bottom: 10px;
}

.services-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    justify-items: center;
}

.service-card {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    max-width: 300px;
}

.service-card:hover {
    box-shadow: 0px 0px 0px 1px #7a22ad inset;
}

.service-icon {
    font-size: 50px;
    color: #6a0dad;
    margin-bottom: 15px;
}

.service-card h3 {
    font-size: 20px;
    color: #333;
    margin-bottom: 10px;
}

.service-card p {
    font-size: 14px;
    color: #666;
    margin-bottom: 20px;
}

.know-more-btn {
    color: #b457f7;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

.know-more-btn:hover {
    color: #661a92;
}


        /* Stats Section */
        .stats {
            background-color: white;
            text-align: center;
        }

        .stats ul {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 0;
            list-style: none;
        }

        .stats ul li {
            background-color: white;
            border: 1px solid transparent;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            max-width: 300px;
            transition: all 0.3s ease;
        }

        .stats ul li:hover {
            border: 1px solid #6a0dad;
            transform: scale(1.05);
        }

        .stats .icon {
            color: #6a0dad;
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <h1>BOOK A FREE CONSULTATION</h1>
            <p>Looking to study abroad and achieve your academic dreams?<br> We're here to guide you in the right direction.</p>
            <button class="cta-button">Book your consultation</button>
        </div>
    </header>

    <!-- Benefits Section -->
    <section class="section benefits">
    <div class="container">
        <h2>What you'll get:</h2>
        <div class="services-container">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h3>Advising Session</h3>
                <p>A 30-minute advising session with one of our experienced education consultants.</p>
                <a href="#" class="know-more-btn">Know More →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3>Focus on Goals</h3>
                <p>We'll focus on your academic goals, personal interests, and career aspirations.</p>
                <a href="#" class="know-more-btn">Know More →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-road"></i>
                </div>
                <h3>Step-by-Step Guidance</h3>
                <p>Step-by-step guidance to make your study abroad journey seamless and stress-free.</p>
                <a href="#" class="know-more-btn">Know More →</a>
            </div>
        </div>
    </div>
</section>


    <!-- Stats Section -->
    <section class="section stats">
        <div class="container">
            <h2>WOW Global Studies at a glance</h2>
            <ul>
                <li>
                    <i class="fas fa-globe icon"></i>
                    <p>10+ years of experience helping students achieve their dream of studying abroad.</p>
                </li>
                <li>
                    <i class="fas fa-graduation-cap icon"></i>
                    <p>Expertise in assisting with applications to top universities worldwide.</p>
                </li>
                <li>
                    <i class="fas fa-handshake icon"></i>
                    <p>Personalized guidance for stress-free and successful application journeys.</p>
                </li>
            </ul>
        </div>
    </section>
</body>
</html>
