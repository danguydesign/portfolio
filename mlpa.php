<?php
$page = "mlpa";
$title = "Modernising LPAs";
$metaD = "";
$h1 = $title;

$pageNav = [];
$pageNav[] = [
  "href" => "#intro",
  "item" => "Introduction"
];
$pageNav[] = [
  "href" => "#process",
  "item" => "Design Process"
];
$pageNav[] = [
  "href" => "#id",
  "item" => "Digital identity"
];
$pageNav[] = [
  "href" => "#sign",
  "item" => "Digital signature"
];
// $pageNav[] = [
//   "href" => "#guidance",
//   "item" => "Guidance"
// ];
// $pageNav[] = [
//   "href" => "#end-to-end",
//   "item" => "Full prototype"
// ];

ob_start();?>
  <h2 id="intro" class="heading-2">Introduction</h2>
  <p class="large-p">I joined this project at the start of the ALPHA phase, so the team already had a fair understanding of the problem space from the work done in DISCOVERY.</p>

  <h3 class="heading-3">The problem</h3>
  <ul class="ul">
    <li>How might we have more assurance of each user’s identity?</li>
    <li>How might someone sign the LPA without a wet signature?</li>
    <li>How might we educate each user type so they can do their role with confidence?</li>
  </ul>

  <hr>

  <h2 id="process" class="heading-2">Process</h2>
  <p>On this project, I used a design led-process where I designed artifacts for testing specific hypotheses. I would start by writing a 'questions and hypotheses' document, then design user flows and finally build a prototype for usability testing. Since we were in ALPHA, we prioritiesed testing our riskiest hypotheses.</p>

  <div class="image-box">
    <img src="img/mlpa/process.png" class="">
  </div>

  <h3 class="heading-3">Sprints</h3>
  <p>We worked in three-week sprints that typically worked as follows:</p>

  <h4 class="heading-4 coral-text">Week 1: Ideate</h4>
  <p>Kick off sprint with a team workshop to generate ideas, share understanding and set scope.</p>

  <h4 class="heading-4 coral-text">Week 2: Design</h4>
  <p>Created user flows, storyboards, diagrams, etc. for communicating ideas inside and outside the team, and to build into a prototype.</p>

  <h4 class="heading-4 coral-text">Week 3: Build</h4>
  <p>Build a prototype with code using the GOV.UK prototyping kit to hand over to our researcher for usability testing.</p>

  <div class="image-box">
    <img src="img/mlpa/sprints.png" class="">
  </div>

  <hr>

  <h2 id="id" class="heading-2">Digital identity</h2>
  <p>Digital identity is the area we did the most iteration on. Initially, we wanted to test a few safe options (passport and driving license) and open banking as a riskier option to guage appetite. Since then, we have tested a number of different options including:</p>
  <ul class="ul">
    <li>Universal credit account</li>
    <li>Government Gateway account</li>
    <li>Post office (in person)</li>
    <li>Post office (easy ID)</li>
    <li>NHS number</li>
    <li>Get someone to vouch for your identity</li>
  </ul>

  <div class="x-scroll-container">
    <div class="x-img-container">
      <img src="img/mlpa/id1.png" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="img/mlpa/id2.png" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="img/mlpa/id3.png" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="img/mlpa/id4.png" class="x-img">
    </div>
  </div>

  <h3 class="heading-3">Inclusive design</h3>

  <p>The main objective for the ID section of the journey is to provide an inclusive set of options so that every person has at least one means of being identified successfully.</p>
  <p>It is possible that some people won't have a driving license, won't have a valid passport, won't do online banking etc. so we included a vouching option so that people can get someone they know, or a person with a listed profession to vouch for them.</p>
  <p>Offline options have also been included for users with lower digital literacy, that might prefer to use the paper process.</p>

  <div class="image-box">
    <img src="img/mlpa/id.jpg" class="">
  </div>

  <hr>

  <h2 id="sign" class="heading-2">Digital signature</h2>
  <p>This was by far my favourite problem to solve. Signing a piece of paper with a pen in front of a witness is customary in the UK and is something we have a mental model for. But what happens when we take that interaction and put it online?</p>
  <p>Assuming that most users won't have a stylus to literally sign their screen, what would the act of signing look like? How might people witness a signature digitally? Would it be done remotely or in person? And do we even need someone to witness a digital signature or can the role of the witness be replaced with technology?</p>
  <p>Some work into remote witnessing had been carried out in the DISCOVERY phase and had been ruled out as an option, so the two options we were particularly interested in testing were:</p>
  <ul class="ul">
    <li>digital signature with in-person witness</li>
    <li>digital signature replacing the witness with technology</li>
  </ul>

  <div class="x-scroll-container">
    <!-- <div class="x-img-container">
      <img src="img/mlpa/paper.jpg" class="x-img">
    </div> -->
    <div class="x-img-container">
      <img src="img/mlpa/digital.jpg" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="img/mlpa/tech.jpg" class="x-img">
    </div>
  </div>

  <h3 class="heading-3">Witnessing in person</h3>
  <p>The in-person option still included a number of problems to solve. How many devices should be required for the interaction to happen? What if there is only one digital divice in the room? How many users need to be signed in to an account to make complete the journey? How can we guatantee both actors are involved?</p>
  <p>I storeyboaded some high-level solutions to those questions:</p>

  <div class="image-box">
    <img src="img/mlpa/sign-digitally.png" class="">
  </div>

  <p>Due to the fact we couldn't guarantee every pair of people who might need an LPA to have access to two devices, my recomendation was to only require one device. However, this would introduce friction we required each person to sign in, interact, then sign out so my next recommendation was to only require the signee to be signed in.</p>
  <p>At this point in the journey, the witness would have already created an account and had their identity verified so we could use these to authenticate the witness's identity within the signature session, requiring only the signee to be signed in while giving assurance that the witness is involved and present.</p>
  <p>Here is a user journey showing this process:</p>

  <div class="image-box">
    <img src="img/mlpa/personal-witness.png" class="">
  </div>

  <p>However, during usability testing, users were confused about what was going on and who was supposed to be interacting. We also learned that policy would be happy if the witness attested later in a separate session. This meant we could remove the witness touchpoints from this flow.</p>

  <div class="image-box">
    <img src="img/mlpa/personal-witness-2.jpg" class="">
  </div>

  <h3 class="heading-3">Replace the witness</h3>
  <p>The other more controvertial approach we wanted to test was to replace the witness with technology. This was an interesting approach to design because, on the one hand, signing in front of a witness adds a sense or ceremony and is perceived by some as a safeguard.</p>
  <p>On the other hand, finding a witness can be challenging for some, and what value does witnessing add that couldn't be achieved with technology? Especially in a system that verifies ID.</p>
  <p>Due to the complexities introducted by witnessing in person together with the fact that witnessing isn't a strong safeguard, replacing the witness with technology was by far my favourite option. It also made for a much simpler user journey, free from interuptions and hand-offs with other actors.</p>

  <div class="image-box">
    <img src="img/mlpa/replace.png" class="">
  </div>

  <p>In usability testing, I learned that people prefered the checkbox signature to the type name signature. I also learned that people wanted to see a summary of the LPA on the sign page, so I iterated the journey as follows:</p>

  <div class="image-box">
    <img src="img/mlpa/replace-2.jpg" class="">
  </div>

  <!-- <div class="image-box">
    <img src="img/mlpa/threats.jpg" class="">
  </div> -->

  <!-- <hr>

  <h2 id="guidance" class="heading-2">Guidance</h2>

  <hr>

  <h2 id="end-to-end" class="heading-2">Full prototype</h2> -->


<?php
$content = ob_get_clean();
include 'layout-project.php';
?>
