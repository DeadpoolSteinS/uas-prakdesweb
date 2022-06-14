<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <link rel="stylesheet" href={{ asset('css/style.css')}}>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,600;0,700;1,100&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>
<body>
    <div class="hero">
        <nav class="navbar">
            <div class="container-menu">
                <ul>
                    <li><img src={{ asset('img/logo_1.png')}} width="50px"></li>
                    <li><a href="#why">Why us?</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact-us">Contact</a></li>
                </ul>
            </div>

            <div class="container-login">
                <ul>
                    <li><a href="/daftar">Daftar</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="container-image">
            <img src={{ asset('img/hero-image.png')}} alt="" class="hero-image">
            <div class="typography">
                <h4>Let's Manage Our Life</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium repudiandae esse modi libero reiciendis minima repellat explicabo.</p>
                <a href="/daftar" class="btn btn-lets">
                Let's Start
                </a>
            </div>
            
        </div>
        
    </div>

    <div class="why" id="why">
        <img src= {{ asset('img/why.png')}} alt="">
        <div class="why-desc">
            <h3>Why Us</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo possimus iusto nemo ut qui placeat atque ad debitis quasi? Doloribus nemo adipisci deserunt autem nostrum est corrupti nobis tenetur recusandae!</p>
        </div>
    </div>

    <div class="about" id="about">
        <h2>About</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eligendi, aliquid eum eos cumque magni quibusdam reprehenderit, incidunt error veniam, asperiores repudiandae illo voluptatibus aut reiciendis optio amet voluptates nulla! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur obcaecati facere doloribus eius, minima, ipsum, necessitatibus alias saepe unde doloremque ut temporibus deserunt in totam minus! Est error quibusdam nihil? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio inventore quisquam assumenda voluptas ullam ad repellendus alias id saepe, suscipit quos quas eos fugiat exercitationem ea quasi rem! Adipisci, repellat!</p>
    </div>

    <div class="contact-us" id="contact-us">
        <h2>Contact Us</h2>
        <form action="">
                <div class="nama">
                    <div class="form-input">
                        <label for="first-name">Nama Depan</label>
                        <input type="text" class="input-text">
                    </div>
                    <div class="form-input">
                        <label for="last-name">Nama Belakang</label>
                        <input type="text" class="input-text">
                    </div>
                </div>
                <div class="form-input">
                    <label for="email">Email</label>
                    <input type="email" id="email">
                </div>
                <div class="form-input">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="5"></textarea>
                </div>
                <div class="form-input">
                    <a href="#" class="btn">Kirim Pesan</a>
                </div>
            </div>
        </form>
        

    <footer>
        <p>Copyright &#169;2022</p>
    </footer>

    
    
</body>
</html>