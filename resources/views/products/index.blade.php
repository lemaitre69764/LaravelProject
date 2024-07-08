<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CyberSecurity Hub</title>
    <link rel="icon" href="minilogo.jpeg" type="image/jpg">
   
</head>

<h1>Current time and date</h1>
<p>
  <span id="time"></span>, <span id="date"></span> (<span id="day"></span>)
</p>
<script>
  const now = new Date();
  const time = now.toLocaleTimeString();
  const date = now.toLocaleDateString();
  const day = now.toLocaleDateString('en-US', {weekday: 'long'});

  document.getElementById('time').innerHTML = time;
  document.getElementById('date').innerHTML = date;
  document.getElementById('day').innerHTML = day;
</script>  
<body> 
    <header>
        <img class="logo" src="logo.png" alt="CyberSecurity Hub">
        <nav>
            <ul>
                <li>
                    <a class="current" href="Home.html" tabindex="1" title="Home" target="_self">Home</a>
                </li>
                <li>
                    <a href="AboutUs.html" tabindex="2" title="Page 2" target="_self">About</a>
                </li>
                <li>
                    <a href="TSARKA.html" tabindex="3" title="Page 3" target="_self">TSARKA</a>
                </li>
                <li>
                    <a href="CS in Kazakhstan.html" tabindex="4" title="Page 4" target="_self">Kazakhstan</a>
                </li>
            </ul>
        </nav>
    </header>
    
    <img id="photo" src="tsarkaback.jpeg" alt="backgrounlikeTsarka">
    <button class="btn-new">Button</button>
    <script>
      const button = document.querySelector('.btn-new');
      const body = document.body;
      
      button.addEventListener('click', function() {
        body.classList.toggle('dark-mode');
        if (body.classList.contains('dark-mode')) {
          button.classList.remove('light-mode');
          button.classList.add('dark-mode');
        } else {
          button.classList.remove('dark-mode');
          button.classList.add('light-mode');
        }
      });
    </script>
    <main>
        <h2>Welcome to CyberSecurity Hub</h2>
        <p>We are dedicated to safeguarding your digital world. CyberSecurity Hub is your trusted partner in defending against cyber threats and ensuring the security of your valuable assets.</p>

       <p> Our team of cybersecurity experts works tirelessly to protect individuals and organizations from malicious attacks, data breaches, and other cybersecurity risks.</p>
       <p> With our innovative technologies and strategic solutions, we empower our clients to navigate the complex landscape of cybersecurity with confidence and peace of mind.</p>
        <p>Join us in our mission to build a safer and more secure digital future.</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/CraF-70QGwk?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>                                          <!--https://www.youtube.com/watch?v=CraF-70QGwk-->
        <br><br>


  <br>  
  <div>
    <blockquote class="quote"><p>"Protecting your digital assets is not just a priority, it's our passion."</p></blockquote>
    </div>
    <style>
        #div1
        {
            width: 300px;
                margin:auto;
        }

        .btn-new {
    box-shadow: 0 5px 15px 0 rgba(11, 99, 246, 1);
    transition: 0.5s;
    padding: 10px 20px;
    border: none;
    background-color: #0b63f6;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
      /* Новые стили положения */
     
  }

  .light-mode {
    background-color: #0b63f6;
  }
  .dark-mode {
    background-color: black;
    color: white;
    }  
    
    </style>
</body>

</html>
