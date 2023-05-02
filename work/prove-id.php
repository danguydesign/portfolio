<?php
$page = "prove-id";
$title = "Prove your identity";
$metaD = "";
$noIndex=true;
$h1 = $title;
$backLink = true;

$pageNav = [];
$pageNav[] = [
  "href" => "#discovery",
  "item" => "Discovery"
];
$pageNav[] = [
  "href" => "#design",
  "item" => "Interaction design"
];
$pageNav[] = [
  "href" => "#prototyping",
  "item" => "Prototyping"
];

ob_start();?>

  <h2 id="intro" class="heading-2">Introduction</h2>

  <p class="large-p">How might someone prove their identity online?</p>

  <dl class="summary-list radius shadow">
    <div class="summary-list__row">
        <dt class="summary-list__key">
          Organisation:
        </dt>
        <dd class="summary-list__value">
          Ministry of Justice
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

  <h2 id="discovery" class="heading-2">Discovery</h2>

  <p>To kick off this project, the team did some discovery work into existing ID patterns. The NHS and Post Office EasyID apps both use patterns that we were able to learn from.</p>

  <h3 class="heading-3">NHS app</h3>

  <div class="x-scroll-container x-scroll-4">
    <div class="x-img-container">
      <img src="../img/prove-id/nhs-1.png" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="../img/prove-id/nhs-2.png" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="../img/prove-id/nhs-4.png" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="../img/prove-id/nhs-6.png" class="x-img">
    </div>
  </div>

  <h3 class="heading-3">Easy ID app</h3>

  <div class="x-scroll-container x-scroll-4">
    <div class="x-img-container">
      <img src="../img/prove-id/easy-1.png" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="../img/prove-id/easy-2.png" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="../img/prove-id/easy-3.png" class="x-img">
    </div>
    <div class="x-img-container">
      <img src="../img/prove-id/easy-4.png" class="x-img">
    </div>
  </div>

  <h2 id="design" class="heading-2">Interaction design</h2>

  <p>I sketched a number of ways to prove identity. The first iteration had three options that we could begin testing with users:</p>
  <ul class="ul">
    <li>a passport check</li>
    <li>a driving licence check</li>
    <li>a bank account check (via open banking)</li>
  </ul>

  <div class="image-box">
    <img src="../img/prove-id/id-v1.jpg" class="">
  </div>

  <p>From there we wanted to aim for a more inclusive set of options catering to both online and offline scenarios. We also wanted to include options for people of various levels of digital literacy, so we added:</p>

  <ul class="ul">
    <li>a Universal Credit account check</li>
    <li>a Government Gateway account check</li>
    <li>knowledge based verification</li>
    <li>get someone to vouch for your identity</li>
    <li>directions for offline identity verification</li>
  </ul>

  <div class="image-box">
    <img src="../img/mlpa/id.jpg" class="">
  </div>

  <p>We iterated a number of times on the design and identification methods, testing each iteration with users.</p>

  <p>The final version I designed and prototyped used a pattern where the user selects which ID options they have available to them. The service then evaluates their options and takes them through the two options that give the highest assurance according to GPG45.</p>

  <div class="image-box">
    <img src="../img/prove-id/id-final.jpg" class="">
  </div>

  <h3 class="heading-3">Inclusive identity options</h3>

  <p>The main objective of this identity work is to provide an inclusive set of options so that every person has at least one means of being identified successfully. It is possible that some people won't have a driving licence, won't have a valid passport, won't do online banking etc. so we included an option to get someone within a list of professions to vouch for you.</p>
  <p>Offline options have also been included for users with lower digital literacy, who might prefer to use the paper process.</p>

  <h3 class="heading-3">Identity iteration</h3>
  <p>During my time on the project, I designed ten iterations that we tested with users. Here are some screenshots from four of the versions we tested:</p>

  <div class="x-scroll-container x-scroll-4">
    <div class="x-img-container">
    <img src="../img/prove-id/id-1.png" class="">
    </div>
    <div class="x-img-container">
    <img src="../img/prove-id/id-2.png" class="">
    </div>
    <div class="x-img-container">
    <img src="../img/prove-id/id-3.png" class="">
    </div>
    <div class="x-img-container">
    <img src="../img/prove-id/id-4.png" class="">
    </div>
  </div>


  <h2 id="prototyping" class="heading-2">Prototyping</h2>

  <p>For each iteration, I built a hi-fidelity prototype in code using the <a href="https://prototype-kit.service.gov.uk/docs/tutorials-and-guides">GOV.UK Prototyping Kit</a>.</p>
  <p>Here's a video of a possible journey through our latest prototype:</p>
  <div class="image-box">
    <video controls>
      <source src="../video/identity-1.mp4#t=1.5" type="video/mp4">
    </video>
  </div>



<?php
$content = ob_get_clean();
include '../layout-project.php';
?>
