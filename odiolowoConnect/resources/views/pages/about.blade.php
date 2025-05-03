<x-layout>
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: #f5f5f5;
        text-align: center;
        }
        header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 30px;
        background: white;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        nav a {
        margin: 0 15px;
        text-decoration: none;
        color: black;
        font-weight: bold;
        }
        .profile-button {
        padding: 8px 15px;
        border: 1px solid black;
        border-radius: 5px;
        background: white;
        cursor: pointer;
        }
        .admin-section {
        padding: 40px 20px;
        background: white;
        margin: 20px;
        border-radius: 10px;
        }
        .admin-profiles {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 30px;
        margin-top: 30px;
        }
        .admin {
        text-align: center;
        max-width: 150px;
        }
        .admin img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        }
        .content-section {
        margin: 40px 20px;
        background: white;
        padding: 30px;
        border-radius: 10px;
        line-height: 1.6;
        }
        h2, h3 {
        margin-bottom: 10px;
        color: #333;
        }
    </style>

    <section class="admin-section">
    <h2>Our Admins</h2>
    <div class="admin-profiles">
        <div class="admin">
        <img src="image/avatar.jpg" alt="Ajumobi Abdulquyum">
        <h4>Ajumobi Abdulquyum</h4>
        <p>Back End</p>
        </div>
        <div class="admin">
        <img src="image/avatar-she.png" alt="Akande Perfect">
        <h4>Akande Perfect</h4>
        <p>Front End</p>
        </div>
        <div class="admin">
        <img src="image/avatar-female.png" alt="Atesinse rodiah">
        <h4>Atesinse Rodiah</h4>
        <p>Front End</p>
        </div>
    </div>
    </section>

    <section class="content-section">
    <h3>Empowering Dreams, Equipping Futures</h3>
    <p>At OdiOlowo Connect Platform, we believe that everyone—regardless of background—deserves access to opportunity, education, and practical skills that create real impact. We are a youth-centered platform dedicated to unlocking potential through skills training, mentorship, leadership development, and career guidance.</p>
    
    <p>Our programs are carefully curated to bridge the gap between passion and profession. From digital literacy to technical crafts, we create inclusive environments where individuals can learn, connect, and grow—equipping them for today’s challenges and tomorrow’s possibilities.</p>
    
    <p>We are not just building skills; we’re building confidence, self-worth, and sustainable futures.</p>

    <h3>Our Mission</h3>
    <p>To empower youths and communities through accessible skills training, mentorship, and innovation-driven education.</p>

    <h3>Our Vision</h3>
    <p>A world where every young person has the tools to create a meaningful, independent, and impactful life.</p>
    </section>
</x-layout>