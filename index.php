<?php include 'header.php'; ?>
<style>
    :root {
        --primary: #3D82DC;
        --text: #333;
        --bg: #f5f5f5;
    }

    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: var(--bg);
        color: var(--text);
    }

    .header {
        background: linear-gradient(135deg, #3D82DC 0%, #2d62ac 100%);
        color: white;
        padding: 20px;
        text-align: center;
        box-shadow: 0 2px 10px rgba(45, 98, 172, 0.2);
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .feature-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        margin: 40px 0;
    }

    .feature-card {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: transform 0.3s;
    }

    .feature-card:hover {
        transform: translateY(-5px);
    }

    .play-store-badge {
        height: 200px;
        width: auto;
        transition: transform 0.2s;
    }

    .play-store-badge:hover {
        transform: scale(1.05);
    }

    .download-btn {
        display: inline-block;
        background: none;
        padding: 0;
    }

    .download-btn:hover {
        background: none;
    }

    #timer-demo {
        font-size: 2em;
        margin: 20px 0;
    }

    .app-icon {
        height: 40px;
        width: auto;
        vertical-align: middle;
        margin-right: 10px;
    }

    h1 {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
</style>

<div class="header">
    <h1 style="color:white">
        <img src="app_icon.png" alt="MyedenFocus Icon" class="app-icon">
        MyedenFocus
    </h1>
    <p>Enhance Your Study Experience with Focus and Meditation</p>
    <div id="timer-demo">25:00</div>
    <a href="https://play.google.com/store/apps/details?id=com.gorai.myedenfocus" class="download-btn">
        <img src="play_download.png" alt="Download on Google Play" class="play-store-badge">
    </a>
</div>

<div class="container">
    <div class="feature-grid">
        <div class="feature-card">
            <h2>Study Timer</h2>
            <p>Customizable study sessions with focus tracking and statistics</p>
        </div>
        <div class="feature-card">
            <h2>Meditation Timer</h2>
            <p>Built-in meditation timer with calming background sounds</p>
        </div>
        <div class="feature-card">
            <h2>Task Management</h2>
            <p>Organize your academic tasks with smart scheduling</p>
        </div>
        <div class="feature-card">
            <h2>Progress Tracking</h2>
            <p>Monitor your study hours and meditation progress</p>
        </div>
        <div class="feature-card">
            <h2>Subject Organization</h2>
            <p>Categorize your study sessions by subjects</p>
        </div>
        <div class="feature-card">
            <h2>Offline First</h2>
            <p>Works completely offline with local data storage</p>
        </div>
    </div>
</div>


<script>
    // Demo timer animation
    function updateTimer() {
        const timerElement = document.getElementById('timer-demo');
        let minutes = 25;
        let seconds = 0;

        setInterval(() => {
            if (seconds === 0) {
                minutes--;
                seconds = 59;
            } else {
                seconds--;
            }

            timerElement.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

            if (minutes === 0 && seconds === 0) {
                minutes = 25;
            }
        }, 1000);
    }

    // Feature card animation
    document.querySelectorAll('.feature-card').forEach(card => {
        card.addEventListener('mouseover', () => {
            card.style.backgroundColor = '#f8f8f8';
        });
        card.addEventListener('mouseout', () => {
            card.style.backgroundColor = 'white';
        });
    });

    // Start animations when page loads
    window.onload = () => {
        updateTimer();
    };
</script>

<?php include 'footer.php'; ?>
