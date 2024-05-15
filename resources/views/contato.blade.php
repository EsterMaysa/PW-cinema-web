<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Serif:opsz,wght@8..144,400;8..144,500;8..144,600;8..144,700&display=swap');

        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
        }

        :root{
            --bodyBg:#303841;
            --formBg:#343F4B;
            --textColor:#fff;
            --primaryColor:#0076A3;
            --paraColor:#5e6c79;
            --paraColor:#74828f;

        }

        body{
            font-family: 'Roboto Serif', serif;
            color: var(--textColor);
            background: var(--bodyBg);
            padding-bottom: 5em;
        }

        section{
            display: flex;
            flex-direction: column;
            text-align: center;
            width: 90%;
            max-width: 550px;
            margin: auto;
            margin-top: 2em;
        }

        .sectionHeader{
            text-transform: capitalize;
            font-weight: bold;
            font-size: 1.1rem;
            color: var(--primaryColor);
            margin-bottom: .5em;
        }

        .heading,.sub-heading{
            margin-bottom: .5em;
            font-weight: bold;
        }

        .heading{
            font-size: 2.5em;
        }

        .sub-heading{
            text-align: left;
        }

        .contactForm{
            display: grid;
            gap: 3em;
        }

        form{
            width: 100%;
            margin-top: 3em;
        }

        .para{
            color: var(--paraColor);
            font-size: 1.1rem;
            line-height: 1.5em;
            margin-bottom: 1em;
        }

        .para2{
            text-align: left;
        }

        .input{
            width: 95%;
            max-width: 700px;
            border: none;
            font-size: .9rem;
            padding: 1em;
            outline: none;
            background-color: var(--formBg);
            color: var(--paraColor);
            border-radius: 10px;
            border: 1px solid rgb(53, 53, 53);
            margin-bottom: 1em;

        }

        .input:focus{
            border: 1px solid var(--primaryColor);
        }

        .input::placeholder{
            text-transform: capitalize;
        }

        .submit{
            background-color: var(--primaryColor);
            border: none;
            color: var(--textColor);
            font-weight: bold;
            cursor: pointer;
            width: 100%;
        }

        .map-container{
            position: relative;
            width: 100%;
            height: 500px;
        }

        .mapBg{
            position: absolute;
            background-color: var(--primaryColor);
            top: 0;
            right: 0;
            width: 200px;
            height: 90%;
            border-radius: 20px;
        }

        .map{
            position: absolute;
            bottom: 0;
            left: 0;
            width: 90%;
            height: 90%;
        }

        .map iframe{
            width: 100%;
            height: 100%;
        }

        .contactMethod{
            display: flex;
            flex-direction: column;
            margin-top: 2em;
            text-align: left;
        }

        .method{
            display: flex;
            align-items: center;
        }

        .contactIcon{
            font-size: 2rem;
            color: var(--primaryColor);
            width: 70px;
        }

        @media screen and (min-width:800px) {
            section{
                max-width: 1100px;
            }
            .contactForm{
                grid-template-columns: 1fr 1fr;
            }   

            .contactMethod{
                flex-direction: row;
                justify-content: space-between;
            }
        }
    </style>
</head>
<!-- <link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/aa7454d09f.js" crossorigin="anonymous"></script> -->

<body>
   <section class="contact-form">
    <h4 class="sectionHeader">contact us</h4>
    <h1 class="heading">Get In Touch!</h1>
    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos
        inventore omnis aliquid rerum alias molestias.</p>
    
    <div class="contactForm">
        <form action="#">
         <h1 class="sub-heading">Need Support !</h1>
         <p class="para para2">Contact us for a quote , help to join the them.</p>
         <input type="text" class="input" placeholder="Nome">
         <input type="text" class="input" placeholder="E-mail">
         <input type="text" class="input" placeholder="Assunto">
         <textarea class="input" cols="30" rows="5" placeholder="Mensagem"></textarea>
         <input type="file" id="imagem" name="imagem" class="input" >
         <input type="submit" class="input submit" value="Enviar mensagem">
        </form>

        <div class="map-container">
            <div class="mapBg"></div>
            <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.7472262492142!2d-46.68941682548688!3d-23.577520262184485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce576d1b6136f3%3A0xd07acf864bcd7990!2sAv.%20Brig.%20Faria%20Lima%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%20Brazil!5e0!3m2!1sen!2set!4v1709932897301!5m2!1sen!2set" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <div class="contactMethod">
        <div class="method">
            <i class="fa-solid fa-location-dot contactIcon"></i>
            <article class="text">
                <h1 class="sub-heading">Location</h1>
                <p class="para">2276 Lynn Ogden Lane Beaumont</p>
            </article>
        </div>

        <div class="method">
            <i class="fa-solid fa-envelope contactIcon"></i>
            <article class="text">
                <h1 class="sub-heading">Email</h1>
                <p class="para">Email: programminginsider2021@gmail.com</p>
            </article>
        </div>

        <div class="method">
            <i class="fa-solid fa-phone contactIcon"></i>
            <article class="text">
                <h1 class="sub-heading">Phone</h1>
                <p class="para">2276 Lynn Ogden Lane Beaumont</p>
            </article>
        </div>
    </div>
   </section>

</body>
</html>