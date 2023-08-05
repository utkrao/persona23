<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - Cultural || MIT Persona Fest - 2023</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
  <link rel="icon" type="image/x-icon" href="../images/persona-image.png" />
  <link rel="shortcut icon" href="../client/images/persona-image.png" type="image/x-icon" />
  <link rel="stylesheet" href="../styles.css">

  <link rel="stylesheet" href="./register.css" />
  <link rel="stylesheet" href="../styles.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script>
    $(document).ready(function () {
      $('.vishwashanti').click(function () {
        var text = "";
        $('.vishwashanti:checked').each(function () {
          text += $(this).val() + ",";
        });
        text = text.substring(0, text.length - 1);
        $('#data').val(text);
      })
    })

    $(document).ready(function () {
      $('.vedic').click(function () {
        var text = "";
        $('.vedic:checked').each(function () {
          text += $(this).val() + ",";
        });
        text = text.substring(0, text.length - 1);
        $('#data2').val(text);
      })
    })

    $(document).ready(function () {
      $('.schoolofresearch').click(function () {
        var text = "";
        $('.schoolofresearch:checked').each(function () {
          text += $(this).val() + ",";
        });
        text = text.substring(0, text.length - 1);
        $('#data3').val(text);
      })
    })

    $(document).ready(function () {
      $('.sft').click(function () {
        var text = "";
        $('.sft:checked').each(function () {
          text += $(this).val() + ",";
        });
        text = text.substring(0, text.length - 1);
        $('#data4').val(text);
      })
    })
  </script>
</head>

<body>
  <nav>
    <div class="logo">
      <img src="../images/logo.png" alt="Logo" />
    </div>
    <ul>
      <li><a href="../index.html">Home</a></li>
      <li><a href="../About/about.html">About Us</a></li>
      <li><a href="#">Persona Events</a></li>
      <li><a href="#">Registration</a></li>
      <li><a href="../schedule/schedule.html">Schedule</a></li>
      <li><a href="../Gallery/Gallery.html">Gallery</a></li>
      <li><a href="../ContactUs/Contactus.html">Contact Us</a></li>
    </ul>

    <div class="mobile-menu-icon">
      <div class="hamburger-menu">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </div>
  </nav>
  <div class="cultural-events">


  </div>

  </div>
  <form action="">
    
    <div class="participants-div">
      <div class="participants-details" data-aos="fade-left">
        <div class="menu" data-aos="fade-left">
          <ul class="toggle-ul">
            <button class="active" value=""><a class="active-a" href="./register.html">Cultural</a></button>
            <button value=""> <a href="./technical.html">Technical</a></button>
            <button value=""><a href="./management.html">Management</a></button>
            <button value=""> <a href="./design.html">Design</a></button>
            <button value=""><a href="./food.html">Food Tech</a></button>
            <button value=""><a href="./architecture.html">Architecture</a></button>
          </ul>
    
    
        </div>
        <div class="part-top">
          <h2>
            Range of Cultural events hosted by various departments by different
            schools including MIT Vedic Science, MIT Sangeetkala etc...
          </h2>
        </div>

        <div class="part-bottom">
          <div class="part-bottom-left" data-aos="fade-left">
            <h2>Participant Details</h2>
            <input type="name" placeholder="Full name*" />
            <input type="email" placeholder="Email*" />
            <input type="name" placeholder="Address" />
            <input type="phone" placeholder="Phone*" />
            <input type="name" placeholder="College*" />
          </div>
          <div class="part-bottom-right" data-aos="fade-left">
            <img src="../images/persona-image.png" alt="" />
          </div>
        </div>
      </div>
    </div>


    <div class="vishwashanti-sangeet-kala">
      <div class="items" data-aos="fade-up">
        <h1 class="title">Events in MIT Int. School of Broadcasting and & Journalism</h1>
        <div class="dash"><img data-aos="fade-up" src="../images/dash.png" alt="" /></div>

        <div class="events">
          <section class="container text-center">
            <!-- Text Head -->

            <div class="container-color" data-aos="fade-up">
              <p class="color color-1">
                <label>
                  <input type="checkbox" value="N1" class="isbj">
                  N1
                </label>
                <strong>Face the cam</strong>
                <span><button type="button" name="myButton">Free</button> <span class="members">Only 1 member</span>
                </span>
                <span>Date- Feb 16 2023</span>
              </p>

              <p class="color color-8"><label>
                  <input type="checkbox" value="N2" class="isbj">
                  N2
                </label>
                <strong>Shutterbug Hunt</strong>
                <span><button type="button" name="myButton">NULL</button> <span class="members">Individual/Team</span>
                </span>

                </button>
                <span>Date - Feb 16 2023</span>
              </p>
              <p class="color color-5"><label>
                  <input type="checkbox" value="N3" class="isbj">
                  N3
                </label>
                <strong>Ad-attack</strong>
                <span><button type="button" name="myButton">NULL</button> <span class="members">Individual/Team</span>
                </span>
                <span>Date - Feb 16 2023</span>
              </p>
              <p class="color color-3"><label>
                  <input type="checkbox" value="N4" class="isbj">
                  N4
                </label>
                <strong>Fiction-Con</strong>
                <span><button type="button" name="myButton">Rs. 100/-</button> <span class="members">Only 1
                    member</span> </span>
                <span>Date - Feb 16 2023</span>
              </p>
              <p class="color color-6"><label>
                  <input type="checkbox" value="N5" class="isbj">
                  N5
                </label>
                <strong>Le Foto Exposition</strong>
                <span><button type="button" name="mybutton">Free</button> <span class="members">Individual/Team</span>
                </span>
                <span>Date- Feb 16-17 2023</span>
              </p>

              <input style="color: red; display: none;" id="data" type="text" readonly>

            </div>
          </section>
        </div>
      </div>
    </div>


    <div class="vishwashanti-sangeet-kala">
      <div class="items">
        <h1 class="title" data-aos="fade-up">Events in MIT Vedic Science & Studies</h1>
        <div class="dash" data-aos="fade-up"><img src="../images/dash.png" alt="" /></div>

        <div class="events" data-aos="fade-up">
          <section class="container text-center">
            <!-- Text Head -->
            <section class="container text-center">
              <!-- Text Head -->

              <div class="container-color">
                <p class="color color-1  orange "><label>
                    <input type="checkbox" name="myCheckbox" value="O1" class="vedic">
                    O1
                  </label>
                  <strong>Escape Room</strong>
                  <span><button type="button" name="myButton">Free</button> <span class="members">5 member/Team</span>
                  </span>
                  <span>Date-Feb 16 2023</span>
                </p>
                <p class="color color-8 orange"><label>
                    <input type="checkbox" name="myCheckbox" value="O2" class="vedic">
                    O2
                  </label>
                  <strong>Quiz</strong>
                  <span><button type="button" name="myButton">Free</button> <span class="members">5 member/Team</span>
                  </span>
                  <span>Date-Feb 16 2023</span>
                </p>
                <p class="color color-5 orange"><label>
                    <input type="checkbox" name="myCheckbox" value="O3" class="vedic">
                    O3
                  </label>
                  <strong>Mind Dissection</strong>
                  <span><button type="button" name="myButton">Free</button> <span class="members">Only 1 member</span>
                  </span>
                  <span>Date-Feb 16 & 18 2023</span>
                </p>
                <p class="color color-3 orange"><label>
                    <input type="checkbox" name="myCheckbox" value="O4" class="vedic">
                    O4
                  </label>
                  <strong>PsyCogn</strong>
                  <span><button type="button" name="myButton">Free</button> <span class="members">Only 1 member</span>
                  </span>
                  <span>Date-Feb 17 2023</span>
                </p>
              </div>
            </section>
        </div>
      </div>

      <input style="color: red; display: none;" id="data2" type="text" readonly>
    </div>

    <div class="vishwashanti-sangeet-kala">
      <div class="items">
        <h1 class="title" data-aos="fade-up">Events in MIT School of Education and Research</h1>
        <div class="dash" data-aos="fade-up"><img src="../images/dash.png" alt="" /></div>

        <div class="events">
          <section class="container text-center">
            <!-- Text Head -->
            <div class="container-color" data-aos="fade-up">
              <p class="color color-1">
                <label>
                  <input type="checkbox" value="P1" class="schoolofresearch">
                  P1
                </label>
                <strong>Trash to Cash</strong>
                <span><button type="button" name="myButton">NULL</button> <span class="members">Only 1 member</span>
                </span>
                <span>Date - Feb 16 2023</span>
              </p>

              <p class="color color-8"><label>
                  <input type="checkbox" value="P2" class="schoolofresearch">
                  P2
                </label>
                <strong>Hackathon</strong>
                <span><button type="button" name="myButton">NULL</button> <span class="members">6/Team</span> </span>

                </button>
                <span>Date - Feb 16 2023</span>
              </p>
              <input style="color: red; display: none;" id="data3" type="text" readonly>
            </div>
          </section>
        </div>
      </div>
    </div>


    <div class="vishwashanti-sangeet-kala">
      <div class="items">
        <h1 class="title" data-aos="fade-up">Events in School of Fine Arts</h1>
        <div class="dash" data-aos="fade-up"><img src="../images/dash.png" alt="" /></div>

        <div class="events" data-aos="fade-up">
          <section class="container text-center">

            <div class="container-color">
              <p class="color color-1  orange "><label>
                  <input type="checkbox" name="myCheckbox" value="M1" class="vedic">
                  M1
                </label>
                <strong>24 Hour Film Making</strong>
                <span><button type="button" name="myButton">FREE</button> <span class="members">Individual/Team</span>
                </span>
                <span>Date - Feb 16 2023</span>
              </p>

              <p class="color color-1  orange "><label>
                  <input type="checkbox" name="myCheckbox" value="M2" class="vedic">
                  M2
                </label>
                <strong>Public Screaming</strong>
                <span><button type="button" name="myButton">FREE</button> <span class="members">Individual/Team</span>
                </span>
                <span>Date - Feb 16 2023</span>
              </p>

            </div>
          </section>
        </div>
      </div>
      <input style="color: red; display: none;" id="data2" type="text" readonly>
      <div class="submit-div"> <input id="submit-button" type="submit" value="Submit " /></div>
    </div>


    <footer class="padding_4x">
      <div class="flex">
        <section class="flex-content padding_1x">
          <h3>About Us</h3>
          <a>Persona Fest is amongst the most awaited techno cultural event
            being organized by the MIT-ADT University.. Read More
          </a>
        </section>
        <section class="flex-content padding_1x">
          <h3>Qther Links</h3>
          <a href="../About/about.html">Patron</a>
          <a href="../Registration/register.html">Register Online</a>
          <a href="../Gallery/Gallery.html">Photo Gakkery</a>
        </section>
        <section class="flex-content padding_1x">
          <h3>Important Links</h3>
          <a href="../index.html#event">Event Schedule</a>
          <a href="../Registration/register.html">Online Registration Form</a>
          <a href="#">About MIT ADT University</a>
        </section>
        <section class="flex-content padding_1x">
          <h3>Get In Touch</h3>
          <a href="#">
            <div class="social facebook">
              <img src="../images/facebook.png" alt="" />
              <p>Facebook</p>
            </div>
          </a>
          <a href="#">
            <div class="social">
              <img src="../images/instagram.png" alt="" />
              <p>Instagram</p>
            </div>
          </a>
          <a href="mailto:registration.mitpersonafest@mituniversity.edu.in">
            <div class="social">
              <img src="../images/gmail.png" alt="" />
              <p>registration.mitpersonafest<br>@mituniversity.edu.in</p>
            </div>
          </a>
        </section>
        <section class="flex-content padding_1x">
          <h3>Newsletter</h3>
          <p>You can trust us. we only send promo offers</p>
          <fieldset class="fixed_flex email-field">
            <input type="email" name="newsletter" placeholder="Your Email Address" />
            <img src="../images/send-icon.png" alt="" />
          </fieldset>
        </section>
      </div>
      <p>Copyright ©2023 All rights reserved || website name</p>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- INITIALIZE AOS -->
    <script>
      AOS.init({
        once: true,
        offset: 220,
        duration: 800
      });
    </script>
    <script src="../index.js"></script>
</body>

</html>