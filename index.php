<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal trainer</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="/scss/style.css">
</head>
<body>
    <div id="log"></div>
    <nav>
        <div class="nav-logo"><a href="#"><img id="nav-logo__image" src="images/logo.png" alt="nav-logo-img"></a></div>
        <div class="nav-links__container">
            <ul>
                <li><a href="">Physiotherapy</a></li>
                <li><a href="">Pysiotherapy</a></li>
                <li><a href="">Pysiotherapy</a></li>
            </ul>
        </div>
        <div class="nav-buttons__container">
            <button class="login-btn">Login</button>
            <div class="language-selectors">  
                 <a href="">NL</a>
                <a href="">EN</a>
            </div>
         
            <button class="menu-btn">...</button>
        </div>
    </nav>

        <section class="hero container-full">
            <div class="hero-text">
                <h3>Welcome to Physicum</h3>
               <h1>High-end
               <span class="colored">physiotherapy</span> 
               <br> & personal training <br>
               <span class="colored"> Amsterdam Oud-Zuid</span></h1>
                <button class="black-btn">Make an appointmen</button>
            </div>
            
                <img class="hero-image" src="images/hero.svg" alt="">
           
        </section>
        <!-- <div id="content"><p>test</p></div> -->
        <section  id="content"class="item1 container-full nonanimated">
           <div class="item1-img" style="background-image: url(https://physicum.imgix.net/media/pages/home/e26461cccc-1638192668/syl_joas_behandelkamer.jpg?);"></div>


            <div class="item1-text">
                <div class="item1-text__container">
                    <h2>Physiotherapy</h2>
                    <p>
                        Get to know advanced treatment techniques that immediately improve your pain symptoms. Within the first treatment, you will have a clear diagnosis and a treatment plan that will allow you to move completely pain-free again.
                   </p>
                   <p>  
                        Due to our focus on the cause of your complaint(s), you will not waste time and money on solely treating the symptoms.
                    </p>
                    <button class="white-btn">
                        More information
                    </button>
                </div>
            </div>
              
        </section>
        <section class="item1 container-full ">

            <div class="item1-text">
                <div class="item1-text__container">
                    <h2>Personal training</h2>
                    <p>
                        Have you not been able to make training a regular part of your life despite several attempts? Are you looking for consistency and motivation and do you want real results this time?
                   </p>
                   <p>  
                    Boost your immune system, feel more energetic and create that body that you will be proud of. Feel fit and energetic again within 3 months and get visible results.
                    </p>
                    <button class="white-btn">
                        More information
                    </button>
                </div>
            </div>
            <div class="item1-img" style="background-image: url(https://physicum.imgix.net/media/pages/home/365eb942cc-1639731347/pt-marielle-eric.jpg?);"></div>
 
 
          
               
         </section>
         
       

         <footer class="container-footer">
             <p>Nikola Stanin &copy 2022</p>
         </footer>

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
         <script src="main.js"></script>
</body>
</html>