<?php
$page = "ux-diploma";
$title = "UX Diploma";
$metaD = "";
$h1 = $title;

$pageNav = [];
$pageNav[] = [
  "href" => "#intro",
  "item" => "Introduction"
];
$pageNav[] = [
  "href" => "#research",
  "item" => "Phase 1: Research"
];
$pageNav[] = [
  "href" => "#analysis",
  "item" => "Phase 2: Analysis"
];
$pageNav[] = [
  "href" => "#design",
  "item" => "Phase 3: Design"
];
$pageNav[] = [
  "href" => "#prototype",
  "item" => "Phase 4: Prototyping"
];
$pageNav[] = [
  "href" => "#learnings",
  "item" => "Learnings"
];

ob_start();?>

  <h2 id="intro" class="heading-2">Introduction</h2>
  <p class="large-p">This project consists of work I did for my UX Diploma at Glasgow Caledonian University, run by the <a href="http://uxdesigninstitute.com" class="blue-text">UX Design Institute</a>. It was carried out over six months and icluded tools such as: Sketch; Illustrator; inDesign; ScreenFlow; and Invision.</p>
  <p class="large-p"><span class="coral-text">Assignment:</span> <span class="italic">'Conduct research on existing flight booking websites and use your findings to design a user-friendly flight booking web application.'</span></p>

  <hr>

  <h2 id="research" class="heading-2">Phase 1: Research</h2>

  <h3 id="usability" class="heading-3">Usability Testing</h3>
  <p>To kick off the project, I started with some usability testing for the purpose of gaining some deep qualitative insights into the usability of existing flight-booking apps. The first step was to define my objectives and to decide exactly what I wanted to achieve from the usability tests. I created a recruitment screener, a consent form and a script for both mobile and desktop usability testing sessions. Careful attention was paid during the writing of the scripts to ensure that I didn’t ask leading questions or closed questions that would be unfruitful. After doing this preliminary work, I conducted two mobile and two desktop usability tests on the British Airways and Air France websites.</p>

  <h4 class="heading-4">Objectives</h4>
  <ol class="ol">
    <li>Identify typical user behaviour on the Air France and British Airways websites.</li>
    <li>Discover the primary goals of the user.</li>
    <li>Discover which features conform to the users expectations.</li>
    <li>Discover which features do not conform to the expectations of the user.</li>
    <li>Identify elements that cause friction.</li>
    <li>Learn what kinds of problems will likely cause the user to leave the website.</li>
    <li>Discover where and when users feel empowered and frustrated during the journey.</li>
    <li>Identify which pieces of information are important for the user.</li>
  </ol>

  <h4 class="heading-4">Testing Sessions</h4>
  <div class="image-box">
    <img src="img/projects/research/usability-testing.jpg" alt="Two computers set up in a room for usability testing">
  </div>

  <h3 id="interview" class="heading-3">Depth Interviews</h3>
  <p>The next step was to prepare a script for depth interviews for the purpose of gaining some insights into context of use. The aim was to understand which flight-booking websites users prefer and why. Scope also included how many times users typically return to a website before making a purchase and how users share information with one another when choosing flights as a group.</p>

  <h3 id="competitor" class="heading-3">Competitor Benchmarking</h3>
  <p>On top of the usability testing and depth interviews, I wanted to draw some learning from best-in-class competitor websites and apps. I researched four flight-booking websites, and four mobile flight-booking apps by taking screenshots from each stage of the journey and assessing what had been done well, what had been done badly and which things are standard features that users expect.</p>

  <div class="x-scroll-container">
    <div class="x-img-container">
      <img src="img/projects/research/competitive-benchmarking-1.png" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="img/projects/research/competitive-benchmarking-2.png" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="img/projects/research/competitive-benchmarking-3.png" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="img/projects/research/competitive-benchmarking-4.png" class="x-img">
    </div>
  </div>

  <h3 id="survey" class="heading-3">Online Survey</h3>
  <p>I created an online survey using Survey Monkey for some more quantitative-attitudinal research to gain more understanding into context of use. I used a mixture of open and closed questions as well as some multiple choice questions. The survey would take around 2-3 minutes for people to complete.</p>

  <div class="image-box">
    <img src="img/projects/research/online-survey.jpg" class="img-right">
  </div>

  <hr>

  <h2 id="analysis" class="heading-2">Phase 2: Analysis</h2>

  <h3 id="affinity" class="heading-3">Affinity Diagram</h3>
  <p>Next, it was time to start making sense of the data. Firstly, myself and a college watched the usability test recordings and took notes. We then wrote each point down on a post-its. We also went through the the depth interviews, competitor benchmarking document and survey results and wrote wrote more post-its. We stuck the post-its onto a wall in the conference room and sorted them into categories to create an affinity diagram. Some clear categories emerged.</p>

  <div class="x-scroll-container">
    <div class="x-img-container">
      <img src="img/projects/analysis/postits-2.jpg" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="img/projects/analysis/postits-5.jpg" class="x-img">
    </div>
  </div>

  <h3 id="journey" class="heading-3">Customer Journey Map</h3>
  <p>I took the information from the affinity diagram and organised it into a step by step view of the journey to show how the users felt at each stage. I also noted their goals, behaviour, context and pain points at each step.</p>

  <div class="image-box">
    <img src="img/projects/analysis/Customer-Journey-Map.png" class="img-right">
  </div>

  <h3 id="empathy" class="heading-3">Empathy Map</h3>
  <p>Finally, I created an empathy map showing the user’s goals along with what they say, think, feel and do, since sometime what people say isn’t always reflected by what they do. This helped me to empathise with the user, to gain a greater understanding of context of use, and to add to my background information of typical users.</p>

  <div class="image-box">
    <img src="img/projects/analysis/Empathy-map.gif" class="img-left">
  </div>

  <h3 id="findings" class="heading-3">Key Findings</h3>
  <p>The three key insights I gained by using these research methods were a) that error messages can be very unhelpful when it comes to informing the user about problems––how it can be avoided / resolved and what to do next, b) that users typically skip the add-ons section and c) that users prefer to check out as a guest rather than creating an account. Focus on these areas could prevent a lot of friction.</p>

  <hr>

  <h2 id="design" class="heading-2">Phase 3: Design</h2>

  <h3 id="mobile-flow" class="heading-3">Mobile Flow Chart</h3>
  <p>Using the finding from my research, I was able to create a mobile flowchart aimed at mitigating some of the issues that I discovered. Given that there is a large number of ways that a user could use a flight-booking site, I decided to narrow my scope to a linear primary use case. This was partly because all four of my usability test candidates skipped the “add-ons” and “create account” sections. Moreover, flight booking journeys tend to be very linear with later steps depending on earlier steps.</p>

  <div class="image-box">
    <img src="img/projects/design/Mobile-User-Flow.gif">
  </div>

  <h3 id="desktop-flow" class="heading-3">Desktop Flow Chart</h3>
  <p>It was clear to me from my usability tests that the user’s mental model was roughly the same for both desktop and mobile. Also, rather than showing an error message when an impossible journey is entered, a lot of frustration could be prevented by only allowing possible destinations to be entered based on the value supplied in the “fly from” input field. A polite prompt could be used to explain that “this is not a destination we currently fly to from your chosen origin.”</p>

  <div class="image-box">
    <img src="img/projects/design/Desktop-Flow.gif">
  </div>

  <h3 id="navigation" class="heading-3">Define Navigation</h3>
  <p>Here are some sketches I did while thinking through the navigation. On desktop, the idea was to have a primary and a secondary nav bar that are displayed at all times, except when the user is in the “checkout” part of the journey, at which point, the nav bar would be hidden to remove unnecessary distractions. In the place of the nav bar, the user will see a “back” button and a progress bar, to indicate how much is left to complete. On mobile, the primary navigation will be off-canvas and will only be visible when the menu icon has been tapped. However, secondary navigation icons will be visible until the user enters the checkout. The decision was made to use an of-canvas navigation on mobile because the primary purpose of the website is to book flights, so other areas of the website are seen as secondary use cases.</p>

  <div class="x-scroll-container">
    <div class="x-img-container grey">
      <img src="img/projects/design/define-nav-1.jpg" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="img/projects/design/define-nav-2.jpg" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="img/projects/design/define-nav-3.jpg" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="img/projects/design/define-nav-4.jpg" class="x-img">
    </div>
  </div>

  <h3 id="mobile-interaction" class="heading-3">Mobile Interaction Design</h3>
  <p>The next step in the design process was to decide how each element on the page would work when the user interacts with it. I wanted to make the forms on each page as easy to complete as possible so I ensured that the appropriate keyboard would be displayed for each input field.</p>

  <div class="x-scroll-container">
    <div class="x-img-container">
      <img src="img/projects/design/Mobile-Skreen-Sketch-1.gif" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="img/projects/design/Mobile-Skreen-Sketch-2.gif" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="img/projects/design/Mobile-Skreen-Sketch-3.gif" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="img/projects/design/Mobile-Skreen-Sketch-4.gif" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="img/projects/design/Mobile-Skreen-Sketch-5.gif" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="img/projects/design/Mobile-Skreen-Sketch-6.gif" class="x-img">
    </div>
  </div>

  <h3 id="desktop-interaction" class="heading-3">Desktop Interaction Design</h3>
  <p>Another thing that could help the user fill out the search form is to suggest recent searches when the input field is first selected. Also, when three or more characters have been entered, the user will see alphabetical suggestions in a drop-down list.</p>

  <div class="x-scroll-container">
    <div class="x-img-portrait">
      <img src="img/projects/design/Desktop-Interaction-Design-1.jpg" class="x-img">
    </div>
    <div class="x-img-portrait">
      <img src="img/projects/design/Desktop-Interaction-Design-2.jpg" class="x-img">
    </div>
    <div class="x-img-portrait">
      <img src="img/projects/design/Desktop-Interaction-Design-3.jpg" class="x-img">
    </div>
    <div class="x-img-portrait">
      <img src="img/projects/design/Desktop-Interaction-Design-4.jpg" class="x-img">
    </div>
    <div class="x-img-portrait">
      <img src="img/projects/design/Desktop-Interaction-Design-5.jpg" class="x-img">
    </div>
    <div class="x-img-portrait">
      <img src="img/projects/design/Desktop-Interaction-Design-6.jpg" class="x-img">
    </div>
    <div class="x-img-portrait">
      <img src="img/projects/design/Desktop-Interaction-Design-7.jpg" class="x-img">
    </div>
    <div class="x-img-portrait">
      <img src="img/projects/design/Desktop-Interaction-Design-8.jpg" class="x-img">
    </div>
    <div class="x-img-portrait">
      <img src="img/projects/design/Desktop-Interaction-Design-9.jpg" class="x-img">
    </div>
    <div class="x-img-portrait">
      <img src="img/projects/design/Desktop-Interaction-Design-10.jpg" class="x-img">
    </div>
  </div>

  <hr>

  <h2 id="prototype" class="heading-2">Phase 4: Prototype & Wireframe</h2>

  <h3 id="prototype" class="heading-3">Medium Fidelity Prototype</h3>
  <p>After sketching each screen state, I could than design each screen state in medium fidelity form to create a prototype. This prototype could then be fed back into a testing / validation phase and iterated over time for improvements.</p>

  <div class="image-box">
    <video controls>
      <source src="video/Prototype-1.mp4" type="video/mp4">
    </video>
  </div>

  <h3 id="wireframe" class="heading-3">Wireframe</h3>
  <p>After completing the research, analysis, design and prototyping tasks documentation could be collated for handing over to the development team. Ideally, everything should have been considered by this point so that the dev team don’t need to guess or fill in any blanks.</p>

  <div class="x-scroll-container">
    <div class="x-img-portrait">
      <img src="img/projects/prototype/1-homepage.png" class="x-img">
    </div>
    <div class="x-img-portrait">
      <img src="img/projects/prototype/2-results-page-1.png" class="x-img">
    </div>
    <div class="x-img-portrait">
      <img src="img/projects/prototype/3-results-page-2.png" class="x-img">
    </div>
    <div class="x-img-portrait">
      <img src="img/projects/prototype/4-summary.png" class="x-img">
    </div>
    <div class="x-img-portrait">
      <img src="img/projects/prototype/5-payment.png" class="x-img">
    </div>
    <div class="x-img-portrait">
      <img src="img/projects/prototype/6-billing.png" class="x-img">
    </div>
    <div class="x-img-portrait">
      <img src="img/projects/prototype/7-confirmation.png" class="x-img">
    </div>
  </div>

  <hr>

  <h2 id="learnings" class="heading-2">Learnings</h2>

  <h3 id="learned" class="heading-3">What I learned</h3>
  <p>During this project I learned a number of things but the most important of all was how to conduct a usability test. I found the sessions to be extremely fruitful, which made me feel assured that my designs were solving real user problems. Going forward, I feel confident about preparing for, conducting and analysing the output from usability tests.</p>

  <h3 id="enjoyed" class="heading-3">What I enjoyed</h3>
  <p>The thing I enjoyed the most was how collaborative the UX process was. It was great to work with team members feeling united while working towards a common goal. I also enjoyed gaining insights into real user behaviour so that I could build more empathy towards the user and fully appreciate their needs.</p>

  <h3 id="differently" class="heading-3">What I would do differently</h3>
  <p>During my UX Diploma, I didn’t test my work at the end of the process to validate my design work. Next time, I will factor in a testing phase so that better solutions could be iterated over time.</p>

<?php
$content = ob_get_clean();
include 'layout-project.php';
?>
