<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ishaq Yudha - Web Developer & Designer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            background: linear-gradient(to bottom right, #3b82f6, #8b5cf6);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            padding: 1rem;
        }
        .container {
            text-align: center;
        }
        h1 {
            font-size: 3rem;
            font-weight: bold;
            color: white;
            margin-bottom: 1rem;
        }
        p {
            font-size: 1.25rem;
            color: white;
            margin-bottom: 2rem;
        }
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }
        .card {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            height: 150px;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            transition: 400ms;
            text-decoration: none;
        }
        .card i {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }
        .card .tip {
            font-size: 1.2em;
            font-weight: 700;
        }
        .card .second-text {
            font-size: 0.9em;
            opacity: 0;
            transition: 400ms;
        }
        .card:hover {
            transform: scale(1.1, 1.1);
        }
        .card:hover .second-text {
            opacity: 1;
        }
        .cards:hover > .card:not(:hover) {
            filter: blur(5px);
            transform: scale(0.9, 0.9);
        }
        .about { background-color: #f43f5e; }
        .education { background-color: #3b82f6; }
        .skills { background-color: #22c55e; }
        .experience { background-color: #eab308; }
        .projects { background-color: #ec4899; }
        .contact { background-color: #8b5cf6; }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-500 to-purple-600 min-h-screen flex items-center justify-center p-4">
    <div class="container">
        <h1>Ishaq Yudha</h1>
        <p>Web Developer & Designer</p>
        <div class="cards">
            <a href="{{ url('/tugas') }}" class="card about">
                <i class="fas fa-user"></i>
                <p class="tip">tugas</p>
                <p class="second-text">Klik untuk ke "/tugas"</p>
            </a>
            <a href="{{ url('/education') }}" class="card education">
                <i class="fas fa-graduation-cap"></i>
                <p class="tip">Education</p>
                <p class="second-text">My academic journey</p>
            </a>
            <a href="{{ url('/skills') }}" class="card skills">
                <i class="fas fa-cogs"></i>
                <p class="tip">Skills</p>
                <p class="second-text">What I can do</p>
            </a>
            <a href="{{ url('/experience') }}" class="card experience">
                <i class="fas fa-briefcase"></i>
                <p class="tip">Experience</p>
                <p class="second-text">My work history</p>
            </a>
            <a href="{{ url('/projects') }}" class="card projects">
                <i class="fas fa-code-branch"></i>
                <p class="tip">Projects</p>
                <p class="second-text">What I've built</p>
            </a>
            <a href="{{ url('/contact') }}" class="card contact">
                <i class="fas fa-envelope"></i>
                <p class="tip">Contact</p>
                <p class="second-text">Get in touch</p>
            </a>
        </div>
    </div>
</body>
</html>
