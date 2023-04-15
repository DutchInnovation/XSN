<?php include 'header.php' ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>InstaClone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
        <header>
        <div class="logo">
          <a href="index.php">
            <img src="assets/logo.png" alt="Logo"  height="176">
          </a>
        </div>
        <nav>
          <ul>
            <li><a href="#">Store</a></li>
            <li><a href="#">Community</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Support</a></li>
          </ul>
        </nav>
        <div>
            <a href="login.php">login</a> | language
            </div>
      </header>
      <main>
        <div class="carousel-container">
            <div class="carousel">
              <div class="slide active">
                <img src="https://cdn.akamai.steamstatic.com/steam/apps/1774580/ss_72e3265e1983d759d133338b613df2010cf5eb56.600x338.jpg" alt="Dota 2">
                <div class="caption">
                  <h2>Dota 2</h2>
                  <p>The most-played game on Steam.</p>
                </div>
              </div>
              <div class="slide">
                <img src="https://cdn.akamai.steamstatic.com/steam/apps/392160/ss_73f434cac1f1b12cdba020860f98d2fb8746bbc2.600x338.jpg" alt="CS:GO">
                <div class="caption">
                  <h2>Counter-Strike: Global Offensive</h2>
                  <p>The most-played FPS on Steam.</p>
                </div>
              </div>
              <div class="slide">
                <img src="https://cdn.akamai.steamstatic.com/steam/apps/1798010/ss_d16ca80f7b01f5f0de9a728b65e3261950d439a7.600x338.jpg" alt="PUBG">
                <div class="caption">
                  <h2>PlayerUnknown's Battlegrounds</h2>
                  <p>The most-played Battle Royale on Steam.</p>
                </div>
              </div>
              <div class="slide">
                <img src="https://cdn.akamai.steamstatic.com/steam/apps/1142710/ss_4afac709f1bfe992122e315852cf6ea2f58b28ba.600x338.jpg" alt="Rocket League">
                <div class="caption">
                  <h2>Rocket League</h2>
                  <p>The most-played sports game on Steam.</p>
                </div>
              </div>
            </div>
            <div class="dots">
              <span class="dot active"></span>
              <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
            </div>
          </div>
          <div class="profile-info">
        <img src="assets/profile.jpg" alt="Profile Picture">
        <div class="profile-details">
          <h2>John Doe</h2>
          <p>Photographer, Traveller</p>
        </div>
      </div>
      <div class="posts">
        <div class="post">
          <img src="pic1.jpg" alt="Post 1">
          <div class="post-details">
            <div class="post-icons">
              <i class="far fa-heart"></i>
              <i class="far fa-comment"></i>
              <i class="far fa-paper-plane"></i>
            </div>
            <div class="post-likes">
              <p>500 likes</p>
            </div>
            <div class="post-caption">
              <h3>Beautiful sunset in Bali</h3>
              <p>Spent the day exploring the island and ended it with this breathtaking view!</p>
            </div>
            <div class="post-comments">
              <div class="comment">
                <p><span class="comment-user">jane_doe:</span> Gorgeous!</p>
              </div>
              <div class="comment">
                <p><span class="comment-user">john_smith:</span> Stunning photo!</p>
              </div>
            </div>
            <div class="post-add-comment">
              <input type="text" placeholder="Add a comment...">
              <button>Post</button>
            </div>
          </div>
        </div>
        <div class="post">
          <img src="assets/pic2.jpg" alt="Post 2">
          <div class="post-details">
            <div class="post-icons">
              <i class="far fa-heart"></i>
              <i class="far fa-comment"></i>
              <i class="far fa-paper-plane"></i>
            </div>
            <div class="post-likes">
              <p>250 likes</p>
            </div>
            <div class="post-caption">
              <h3>Exploring the city</h3>
              <p>Love wandering around and discovering hidden gems in the city!</p>
            </div>
            <div class="post-comments">
              <div class="comment">
                <p><span class="comment-user">jack_doe:</span> Great shot!</p>
              </div>
                <div class="comment">
                    <p><span class="comment-user">jane_smith:</span> Love this!</p>
                </div>
            </div>
            <div class="post-add-comment">
              <input type="text" placeholder="Add a comment...">
              <button>Post</button>
            </div>
        </div>
    </div>
</div>

</main>
<footer>
    <div class="container">
      <div class="footer-links">
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="social-links">
        <ul>
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
      </div>
      <div class="subscribe-form">
        <form>
          <label for="email">Subscribe to our newsletter:</label>
          <input type="email" id="email" placeholder="Enter your email address">
          <button type="submit">Subscribe</button>
        </form>
      </div>
    </div>
    <div class="credits">
      <p>&copy; 2023 My Website. All Rights Reserved.</p>
    </div>
  </footer>
  
  <script>
    const carousel = document.querySelector(".carousel");
const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");
const slideWidth = slides[0].clientWidth;
let currentSlide = 0;

// Set the initial position of the carousel
carousel.style.transform = `translateX(-${currentSlide * slideWidth}px)`;

// Set up the event listeners for the dots
dots.forEach((dot, index) => {
  dot.addEventListener("click", () => {
    goToSlide(index);
  });
});

// Go to the selected slide
function goToSlide(slide) {
  if (slide < 0 || slide >= slides.length) return;
  carousel.style.transform = `translateX(-${slide * slideWidth}px)`;
  dots[currentSlide].classList.remove("active");
  dots[slide].classList.add("active");
  currentSlide = slide;
}

// Automatic slideshow
setInterval(() => {
  let slide = (currentSlide + 1) % slides.length;
  goToSlide(slide);
}, 7500);
  </script>
</body>
</html>



        