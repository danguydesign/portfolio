<?php
$page = "resume";
$title = "My Résumé";
$metaD = "";
$h1 = $title;

$intro = [];
$intro[] = [
  "title" => "About me",
  "text" => "I am a Human-Centered Designer who has delivered products and services in both the private and public sectors. I have improved usability and conversion rate for ecommerce websites and have designed public facing Government services that are  fit for the future. <a href='docs/DAN_GUY_2021.pdf' class='blue-text'>Download my résumé here</a>."
];

$experience = [];
$experience[] = [
  "date" => "MAY 2020 — PRESENT",
  "title" => "Interaction Designer at Ministry of Justice, UK",
  "bullets" => [
    "Created prototypes with code using the GOV.UK prototyping kit for usability testing",
    "Created user  flows and diagrams for communication ideas",
    "Ran ideation sessions and stakeholder engagement workshops",
    "Started a GOV.UK design ethics community of practice"
  ]
];
$experience[] = [
  "date" => "JANUARY 2018 — APRIL 2020",
  "title" => "Web / UX designer CEWE",
  "bullets" => [
    "Improved usability of website through conducting usability testing and depth interviews",
    "Increased Conversion Rate using A/B tests and heat maps",
    "United team around UX goals by delivering workshops and presentations",
    "Developed a modular design system using HTML and CSS",
  ]
];
$experience[] = [
  "date" => "JANUARY 2017 — DECEMBER 2017",
  "title" => "Freelance Graphic Designer: Melbourne, AU",
  "bullets" => [
    "Designed and built emails for the EDM team at The Just Group",
    "Designer website using Odoo as an ecommerce platform for Korb",
    "Produced three product brochures as well as other assets for Korb",
    "Designed ways to communicate vast amounts of data for Korb"
  ]
];
$experience[] = [
  "date" => "MARCH 2016 — OCTOBER 2016",
  "title" => "Junior Graphic Designer at Attitude Design",
  "bullets" => [
    "Delivered brand identity, marketing and web design artwork",
    "Worked on all stages of projects for conception to  nishing artwork",
    "Participated in brainstorming sessions and workshops with clients"
  ]
];

$education = [];
$education[] = [
  "date" => "JULY 2018 — JANUARY 2019",
  "title" => "Professional Diploma in UX Design",
  "text" => "UX Design Institute / Glasgow Caledonian University"
];
$education[] = [
  "date" => "OCTOBER 2009 — JULY 2012",
  "title" => "Bachelor of Music in Music Performance",
  "text" => "University of West London"
];
$education[] = [
  "date" => "OCTOBER 2008 — JULY 2009",
  "title" => "Higher National Diploma in Music Performnce",
  "text" => "Tech Music Schools"
];
$education[] = [
  "date" => "SEPTEMBER 2006 — 2008 JULY",
  "title" => "BTEC National Diploma in Fine Art",
  "text" => "Solihull Sixth Form College"
];

$courses = [];
$courses[] = [
  "img" => "img/course-certificate-ux-management-strategy.jpg",
  "alt" => "Certificate for UX Management course",
  "title" => "UX Management: Strategy and Tactics",
  "text" => "Interaction Design Foundation"
];
$courses[] = [
  "img" => "img/course-certificate-gestalt-psychology.jpg",
  "alt" => "Certificate for Gestalt Psychology course",
  "title" => "Gestalt Psychology and Web Design",
  "text" => "Interaction Design Foundation"
];
$courses[] = [
  "img" => "img/course-certificate-HCI.jpg",
  "alt" => "Certificate for Human-Computer Interaction course",
  "title" => "Human-Computer Interaction",
  "text" => "Interaction Design Foundation"
];
$courses[] = [
  "img" => "img/projects/ux-diploma-1.jpg",
  "alt" => "Logos for The UX Design Institute and Glasgow Caledonian University",
  "title" => "Professional Diploma in UX Design",
  "text" => "UX Design Institute"
];

include 'inc/header.php';
include 'inc/cards.php';
?>

<header class="header header-small">
  <div class="">
    <h1 class="heading-1"><?php echo $h1 ?></h1>
  </div>
</header>

<section class="col">

  <?php include 'inc/intro.php'; ?>

  <section class="col">
    <div class="col padding-double padding-bottom-4">
      <h2 class="heading-2 margin-0">Experience</h2>
    </div>
    <div class="block padding-responsive">
      <?php echo create_cards($experience, 'cards-4'); ?>
    </div>
  </section>

  <section class="col">
    <div class="col padding-double padding-bottom-4">
      <h2 class="heading-2 margin-0">Education</h2>
    </div>
    <div class="block padding-responsive">
      <?php echo create_cards($education, 'cards-4'); ?>
    </div>
  </section>

  <div class="col padding-double padding-bottom-4">
    <h2 class="heading-2 margin-0">Courses</h2>
  </div>

  <section class="block padding-responsive">
    <div class="row">
      <?php echo create_cards($courses, 'cards-4'); ?>
    </div>
  </section>

</section>

<?php
  include 'inc/projects.php';
  include 'inc/footer.php';
?>
