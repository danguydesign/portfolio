<?php
  $page = "about";
  $title = "About Me";
  $metaD = "";
  include 'inc/header.php';
  include 'inc/accordion.php';
?>

  <header class="header header-small">
    <div>
      <h1 class="heading-1">About me</h1>
    </div>
  </header>

  <section class="col">

      <div class="container padding-responsive">

        <div class="col-third padding">
          <div class="img-box radius">
            <img src="img/about/me-y.jpg" alt="Me standing in a field smiling" class="portrait-img">
          </div>
        </div>

        <div class="col-twothird">
          <div class="padding">

            <?php
            $accordion = [];
            $accordion[] = [
              "title" => "Working end-to-end",
              "text" => "<p>Both my current role as Interaction Designer for the Ministry of Justice and my previous role in retail/ecommerce involved working on projects from end-to-end, from conception to implementation.</p>
                          <p>I have experience: planning and running user research; running workshops with users and stakeholders; analysing findings; creating visuals and prototypes; iterating on design work in a testing cycle; handing over design work to developers; and delivering front end work in code.</p>"
            ];
            $accordion[] = [
              "title" => "Proficiency with design tools",
              "text" => "<p>I typically use tools like Sketch and Miro for ideation and communication, then a variety of tools for prototyping, depending on the circumstance and appropriate fidelity. I can prototype using pen and paper, Sketch and Invision.</p>
                          <p>I also have experience with the GOV.UK prototyping kit, using html, css and javaScript. The GOV.UK prototyping kit can be used alongside their Design System, meaning that hi-fi journeys can be created rapidly by copying, pasting and amending snippets of code.</p>"
            ];
            $accordion[] = [
              "title" => "Working with cross-functional teams",
              "text" => "<p>I have experience working in small teams with a couple of developers and a product manager, as well as larger multi-disciplinary teams including roles such as tech architects, policy advisers and digital sociologists.</p>
                          <p>I currently work with a researcher and a content designer on the UX side as well as a team of engineers. I like to work closely with product owners and am able to communicate effectively with developers due to my programming and front end skills.</p>"
            ];
            $accordion[] = [
              "title" => "Device agnistic design",
              "text" => "<p>You never know how users will consume content on the internet and this is an important principle in my approach to design. I always start with small devices and work my way up to larger screens.</p>
                          <p>My personal preference when doing hi-fi work is to design in-browser, so my medium is flexible from the start, and micro-interactions and screen states are accounted for.</p>"
            ];
            $accordion[] = [
              "title" => "Knowledge of UI/UX best practices",
              "text" => "<p>I like to stay up to date with UX best practices both at work and when I have free time. Part of being a designer for GOV.UK requires using patterns from and contributing patterns to their design system. It is important to me that these are accessible so that the products I design are inclusive.</p>
                          <p>Another way I stay up to date is by attending conferences such as the Smashing Magazine interface design patterns conference.</p>"
            ];

            //echo create_accordion($accordion, 'h3');
            ?>

            <div class="max-width">
              <div class="col align-center">
                <h2 class="heading-2">Working end-to-end</h2>
                <p>Both my current role as Interaction Designer for the Ministry of Justice and my previous role in retail/ecommerce involved working on projects from end-to-end, from conception to implementation.</p>
                <p>I have experience: planning and running user research; running workshops with users and stakeholders; analysing findings; creating visuals and prototypes; iterating on design work in a testing cycle; handing over design work to developers; and delivering front end work in code.</p>

                <h2 class="heading-2">Proficiency with design tools</h2>
                <p>I typically use tools like Sketch and Miro for ideation and communication, then a variety of tools for prototyping, depending on the circumstance and appropriate fidelity. I can prototype using pen and paper, Sketch and Invision.</p>
                <p>I also have experience with the GOV.UK prototyping kit, using html, css and javaScript. The GOV.UK prototyping kit can be used alongside their Design System, meaning that hi-fi journeys can be created rapidly by copying, pasting and amending snippets of code.</p>

                <h2 class="heading-2">Working with cross-functional teams</h2>
                <p>I have experience working in small teams with a couple of developers and a product manager, as well as larger multi-disciplinary teams including roles such as tech architects, policy advisers and digital sociologists.</p>
                <p>I currently work with a researcher and a content designer on the UX side as well as a team of engineers. I like to work closely with product owners and am able to communicate effectively with developers due to my programming and front end skills.</p>

                <h2 class="heading-2">Device agnistic design</h2>
                <p>You never know how users will consume content on the internet and this is an important principle in my approach to design. I always start with small devices and work my way up to larger screens.</p>
                <p>My personal preference when doing hi-fi work is to design in-browser, so my medium is flexible from the start, and micro-interactions and screen states are accounted for.</p>

                <h2 class="heading-2">Knowledge of UI/UX best practices</h2>
                <p>I like to stay up to date with UX best practices both at work and when I have free time. Part of being a designer for GOV.UK requires using patterns from and contributing patterns to their design system. It is important to me that these are accessible so that the products I design are inclusive.</p>
                <p>Another way I stay up to date is by attending conferences such as the Smashing Magazine interface design patterns conference.</p>

              </div>
            </div>

        </div>

        </div>

      </div>

  </section>

<?php
  include 'inc/footer.php';
?>
