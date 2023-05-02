<?php
$page = "mlpa";
$title = "The Modern LPA";
$metaD = "";
$noIndex=true;
$h1 = $title;
$backLink = true;

$pageNav = [];
$pageNav[] = [
  "href" => "#intro",
  "item" => "Introduction"
];
$pageNav[] = [
  "href" => "#id",
  "item" => "Digital identity"
];
$pageNav[] = [
  "href" => "#sign",
  "item" => "Digital signature"
];
$pageNav[] = [
  "href" => "#witness",
  "item" => "Witnessing"
];
$pageNav[] = [
  "href" => "#cognitive-load",
  "item" => "Cognitive unload"
];
$pageNav[] = [
  "href" => "#conclusion",
  "item" => "Conclusion"
];

ob_start();?>

  <h2 id="intro" class="heading-2">Introduction</h2>

  <dl class="summary-list radius shadow">
    <div class="summary-list__row">
        <dt class="summary-list__key">
          Organisation:
        </dt>
        <dd class="summary-list__value">
          Office of the Public Gardian
        </dd>
    </div>
    <div class="summary-list__row">
        <dt class="summary-list__key">
          Sector:
        </dt>
        <dd class="summary-list__value">
          Public
        </dd>
    </div>
    <div class="summary-list__row">
        <dt class="summary-list__key">
          My role:
        </dt>
        <dd class="summary-list__value">
          UX Designer
        </dd>
    </div>
    <div class="summary-list__row">
        <dt class="summary-list__key">
          Responsibilities:
        </dt>
        <dd class="summary-list__value">
          Workshop facilitation, interaction design, prototyping
        </dd>
    </div>
    <div class="summary-list__row">
        <dt class="summary-list__key">
          Phase:
        </dt>
        <dd class="summary-list__value">
          Alpha
        </dd>
    </div>
  </dl>

  <p>While Lasting Powers of Attorney (LPAs) can be drafted online, they are ultimately paper documents that must be signed with a wet signature by a number of parties. This makes LPAs logistically difficult for users. The current process requires the Office of the Public Guardian (OPG) to process and store tonnes of paper.</p>
  
  <h3 class="heading-3">The problem</h3>
  <p>LPAs need to be fit for the future, meaning that the process must be simple and secure for users, manageable for operational staff, and kinder on the environment.</p>

  <ul class="ul">
    <li>How might we have more assurance of each user’s identity?</li>
    <li>How might someone sign an LPA digitally?</li>
    <li>How might someone witness a digital signature?</li>
    <li>How might we remove cognitive load from such a complex process?</li>
  </ul>

  <hr>

  <h2 id="id" class="heading-2">Digital identity</h2>
  <p>There is currently no identification process on LPAs meaning that a claimed identity is taken on trust. A modern LPA should protect the identity of its users and prevent fraudulent and counterfeit claims.</p>
  <p>I sketched a number of ways to prove identity, including:</p>
  <ul class="ul">
    <li>a passport check</li>
    <li>a driving licence check</li>
    <li>a bank account check (via open banking)</li>
    <li>connecting to a Universal Credit account</li>
    <li>connecting to a Government Gateway account</li>
    <li>knowledge based verification</li>
    <li>get someone to vouch for your identity</li>
  </ul>

  <div class="image-box">
    <img src="../img/mlpa/id.jpg" class="">
  </div>

  <h3 class="heading-3">Inclusive identity options</h3>

  <p>The main objective for the ID section of the journey is to provide an inclusive set of options so that every person has at least one means of being identified successfully. It is possible that some people won't have a driving licence, won't have a valid passport, won't do online banking etc. so we included an option to get someone within a list of professions to vouch for you.</p>
  <p>Offline options have also been included for users with lower digital literacy, who might prefer to use the paper process.</p>

  <h3 class="heading-3">Identity iteration</h3>
  <p>During my time on the project, I designed ten iterations that we tested with users. Here are some screenshots from four of the versions we tested:</p>

  <div class="x-scroll-container">
    <div class="x-img-phone">
      <img src="../img/mlpa/ID-1.png" class="x-img">
    </div>
    <div class="x-img-phone">
      <img src="../img/mlpa/ID-3.png" class="x-img">
    </div>
    <div class="x-img-phone">
      <img src="../img/mlpa/ID-9.png" class="x-img">
    </div>
    <div class="x-img-phone">
      <img src="../img/mlpa/ID-10.png" class="x-img">
    </div>
  </div>

  <p>The solution we eventually chose was based on a pattern that Government Digital Services had been using in conjunction with their own identity work. It works by asking the user which options they have and then the system picks the option(s) that give the highest assurance.</p>
  <p>Here's a video of a possible journey through our prototype:</p>
  <div class="image-box">
    <video controls>
      <source src="../video/identity.mp4#t=1" type="video/mp4">
    </video>
  </div>

  <hr>

  <h2 id="sign" class="heading-2">Digital signature</h2>
  <p>This was by far my favourite problem to solve. Signing a piece of paper with a pen in front of a witness is an interaction for which most people have a strong mental model. But what happens when we take that interaction and put it online? Assuming that most users won't have a stylus to literally sign their screen, this gave rise to the question of what the signature interaction would be.</p>
  <p>I explored four possible interactions:</p>

  <ol class="ol">
    <li>Type your name</li>
    <li>Check a box</li>
    <li>Voice signature</li>
    <li>Secure code signature</li>
  </ol>

  <div class="x-scroll-container">
    <div class="x-img-phone">
      <img src="../img/mlpa/m-remote.png" class="x-img">
    </div>
    <div class="x-img-phone">
      <img src="../img/mlpa/m-sign-consent.png" class="x-img">
    </div>
    <div class="x-img-phone">
      <img src="../img/mlpa/m-video.png" class="x-img">
    </div>
    <div class="x-img-phone">
      <img src="../img/mlpa/m-code-2.png" class="x-img">
    </div>
  </div>

  <h3 class="heading-3">Signature research findings</h3>
  <p>We tested these signature interactions over multiple rounds of research, iterating each time we learned something. At the end of this testing process, we came away with the following learnings.</p>

  <ul class="ul">
    <li>Typing your name didn't feel 'official' enough</li>
    <li>Checking a box is super easy</li>
    <li>A checkbox feels 'official' when it's written as a declaration</li>
    <li>There were many accessibility problems with voice signatures</li>
    <li>People wanted to be able to see their answers at the point of signature</li>
  </ul>

  <h2 id="witness" class="heading-2">Witnessing</h2>

  <p>Remote witnessing was off the table for legislative reasons, so the two options to explore were to retain an in-person witness or replace the witness with technology.</p>

  <div class="x-scroll-container">
    <div class="x-img-container">
      <img src="../img/mlpa/digital.jpg" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="../img/mlpa/tech.jpg" class="x-img">
    </div>
  </div>

  <h3 class="heading-3">Witnessing in-person</h3>

  <p>The in-person option included a number of problems to solve.</p> 
  
  <ul class="ul">
    <li>How many devices should be required for the interaction to happen?</li>
    <li>What if there is only one digital device in the room?</li>
    <li>How many users need to be signed in to complete the journey?</li>
    <li>How can we guarantee both actors are involved?</li>
  </ul>
  
  <p>I storyboarded some high-level solutions to those questions:</p>

  <div class="image-box">
    <img src="../img/mlpa/sign-digitally.png" class="">
  </div>

  <p>Due to the fact we couldn't guarantee every pair of people who might need an LPA to have access to two devices, my recommendation was to require only one device. However, this would introduce friction if two people have to sign in to their account to sign.</p>
  <p>At this point in the journey, the witness would have already created an account and had their identity verified so we could use these to authenticate the witness's identity within the signature session, requiring only the signee to be signed in while giving assurance that the witness is involved and present.</p>
  <p>Here is a user journey showing this process:</p>

  <div class="image-box">
    <img src="../img/mlpa/personal-witness.png" class="">
  </div>

  <p>However, during usability testing, users were confused about what was going on and who was supposed to be interacting. We also learned that policy would be happy for the witness to attest later on in a separate session. This meant we could remove the witness touchpoints from this flow.</p>

  <div class="image-box">
    <img src="../img/mlpa/personal-witness-2.jpg" class="">
  </div>

  <h3 class="heading-3">Replace the witness</h3>
  <p>The other more controversial approach we wanted to test was to replace the witness with technology. This was an interesting approach to design because, on the one hand, signing in front of a witness adds a sense of ceremony and is perceived by some as a safeguard.</p>
  <p>On the other hand, finding a witness can be challenging for some, and what value does witnessing add that couldn't be achieved with technology? Especially in a system that verifies ID.</p>
  <p>Due to the complexities introduced by witnessing in person together with the fact that witnessing isn't a strong safeguard, replacing the witness with technology was by far my favourite option. It also made for a much simpler user journey, free from interruptions and hand-offs with other actors.</p>
  
  <div class="image-box">
    <img src="../img/mlpa/replace.png" class="">
  </div>

  <p>In usability testing, I learned that people preferred the checkbox signature to the type name signature. I also learned that people wanted to see a summary of the LPA on the sign page, so I iterated the journey as follows:</p>

  <div class="image-box">
    <img src="../img/mlpa/replace-2.jpg" class="">
  </div>

  <hr>

  <h2 id="cognitive-load" class="heading-2">Removing cognitive load</h2>

  <h3 class="heading-3">Handling logistics</h3>

  <p>Most transactional services require one one user to get the job done. However, creating an LPA is more of a social document, involving at least three but often more people.</p>
  <p>When making an LPA, there are important hand-off moments where one user needs to have completed a task before the next person can start theirs. For simplicity, here is a high level diagram of a case involving the minimum number of three people.</p>

  <div class="image-box">
    <img src="../img/mlpa/journey.png" class="">
  </div>

  <p>Each dotted vertical arrow represents a notification that the service sends out to whichever users needs to interact next, removing that cognitive load from the user.</p>
  <p>I felt it was important that the system deals with the logistics so that the users don't need to. These logistics could make a hard process impossible given that making an LPA is a complex and often an emotional process.</p>

  <h3 class="heading-3">Showing progress</h3>

  <p>Within each touchpoint, we used a task list to help users progress through the service. This doubled up as a progress indicator as well as reorienting users each time they signed back into the service.</p>

  <div class="x-scroll-container">
    <div class="x-img-container">
      <img src="../img/mlpa/donor-tasks.png" class="x-img">
    </div>
    <div class="x-img-container">
    <img src="../img/mlpa/cp-tasks.png" class="x-img">
    </div>
  </div>

  <p>Throughout the project, I designed many iterations of the task list. Through usability testing, we learned:</p>

  <ul class="ul">
    <li>People want to see all steps, not just the steps they need to do in that touch-point</li>
    <li>People get overwhelmed if too many steps are shown</li>
    <li>Only show steps that are actionable</li>
    <li>Don't show steps that need to be actioned by a different user</li>
    <li>Task list is less overwhelming in a two-thirds column than full width</li>
  </ul>

  <h2 id="conclusion" class="heading-2">Conclusion</h2>
  <p>I moved on from this project just after passing an Alpha assessment in order to move into Beta. Government services are put through assessments as part of a peer review quality assurance process. The work we carried out in Alpha was instrumental in changing legislation to make LPAs fit for the future.</p>

  <!-- <h3 class="heading-3">A modular service</h3>

  <div class="image-box">
    <img src="../img/mlpa/modular.png" class="">
  </div> -->

  <!-- <p>The most chellenging part of the process was knitting it all together. </p> -->

<?php
$content = ob_get_clean();
include '../layout-project.php';
?>
