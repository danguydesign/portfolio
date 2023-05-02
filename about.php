<?php
  $page = "about";
  $title = "About Me";
  $metaD = "";
  $backLink = true;

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
          <div class="img-box radius fixed">
            <img src="img/about/me-y.jpg" alt="Me standing in a field smiling" class="portrait-img">
          </div>
        </div>

        <div class="col-twothird">
          <div class="padding">

            <div class="padding padding-tall">
              <p class="large-p">Hi. I'm Dan.</p>
              <p class="large-p">I'm a designer from Nottingham, UK.</p>
              <p class="large-p">I've delivered products and services in both the private and public sectors. I have improved usability and conversion rate for ecommerce websites and have designed public facing Government services that are fit for the future.</p>
              <p class="large-p">I specialise in form design and prototyping.</p>
              <p class="large-p">When I'm not designing digital experiences, I'm usually either designing furniture, renovating my house or reading philosphy.</p>
            </div>

            <?php
            $accordion = [];
            $accordion[] = [
              "title" => "Working end-to-end",
              "text" => "<p>Both my current role as Interaction Designer for the Ministry of Justice and my previous role in retail/ecommerce involved working on projects from end-to-end, from conception to implementation.</p>
                        <p>I have experience:</p>
                        <ul class='ul'>
                            <li>planning and running user research</li>
                            <li>running workshops with users and stakeholders</li>
                            <li>analysing findings</li>
                            <li>creating visuals and prototypes</li>
                            <li>iterating on design work in a testing cycle</li>
                            <li>handing over design work to developers</li>
                            <li>delivering front end work in code</li>
                        </ul>"
            ];
            $accordion[] = [
              "title" => "Proficiency with design tools",
              "text" => "<p>I typically use tools like Figma and Miro for ideation, design and sharing work, then a variety of tools for prototyping, depending on the circumstance and appropriate fidelity. I can prototype using pen and paper, Invision, Figma and can build realistic prototypes with code.</p>"
            ];
            $accordion[] = [
              "title" => "Working with cross-functional teams",
              "text" => "<p>I have experience working in both small and large multi-disciplinary teams. I currently work with a researcher and a content designer on the UX side as well as a team of engineers. I like to work closely with product owners and stakeholders to steer strategy.</p>
                          <p>I have experience engaging and communicating with people from other disciplines, including those who are less technologically minded. On the other hand, my developer skills and knowledge help me to communicate effectively with devs and engineers.</p>"
            ];
            $accordion[] = [
              "title" => "Device agnostic design",
              "text" => "<p>You never know how users will consume content on the internet and this is an important principle in my approach to design. I always start with small devices and work my way up to larger screens. My preference when doing hi-fi work is to design in a realistic environment, such as a web browser or a prototype, so that  micro-interactions and screen states are considered in detail.</p>"
            ];
            $accordion[] = [
              "title" => "Knowledge of UI/UX best practices",
              "text" => "<p>I stay up to date with UX best practices both at work and when I have free time. Conducting usability testing and competitor analysis helps me stay on top of design trends and best practices.</p>
                          <p>Part of being a designer requires using patterns from and contributing patterns to design systems. It is important to me that these are accessible so that the products I design are inclusive.</p>"
            ];
            $accordion[] = [
              "title" => "Designing accessible services",
              "text" => "<p>I am an advocate for accessible and inclusive design. I have a solid understanding of designing both visual and non-visual experiences, designing for assistive tech users and designing for a world where people interact with technology on-the-go with all sorts of distractions.</p>
                          <p>There is always more to learn and I am always keen to push the limits of my knowledge, so I regularly attend accessibility training sessions.</p>"
            ];
            $accordion[] = [
              "title" => "Championing Design Ethics",
              "text" => "<p>I am currently leading a self-initiated Design Ethics project within the Ministry of Justice. The goal is to set standards and to promote responsible innovation by embedding risk management into UCD processes. So far I have written a number of blogs, drafted some service ethics guidance and created a self-serve Ethics Assessment for teams to run within each phase of their product lifecycle.</p>
                          <p>I also started a GOV.UK wide Design Ethics community where speakers can give talks and where people can share work that is going on in the ethics space.</p>"
            ];

            echo create_accordion($accordion, 'h2');
            ?>

            <p class="large-p">For more information about my career and experience <a href="./resume.php">go to my online CV</a>.</p>

          </div>

        </div>

      </div>

  </section>

<?php
  include 'inc/footer.php';
?>
