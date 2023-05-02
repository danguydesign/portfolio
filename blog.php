<?php
$page = "blog";
$title = "Dan Guy Design | Blog";
$metaD = "";
$h1 = "Stuff I've written";
$backLink = true;

$blogs = [];
$blogs[] = [
  "href" => "https://danguydesign.medium.com/what-designers-can-learn-from-ethical-philosophy-f1df3528e811",
  "date" => "7 April 2022",
  "title" => "What designers can learn from ethical philosophy",
  "text" => "In this article, I will explore the three main theories of normative ethics and show how we can bring ethics into our practice as designers."
];
$blogs[] = [
  "href" => "https://danguydesign.medium.com/good-design-vs-ethical-design-efee292ae448",
  "date" => "27 September 2021",
  "title" => "Good design vs ethical design",
  "text" => "I have recently been doing work on design ethics at the Ministry of Justice for the Office of the Public Guardian. I’m currently exploring what we mean"
];
$blogs[] = [
  "href" => "https://danguydesign.medium.com/design-virtues-ad7bbb48efd8",
  "date" => "8 September 2021",
  "title" => "The Design Virtues",
  "text" => "Is ethical design just good design? Can something be a case of good design without being ethical? Can something be a case of ethical design without"
];
$blogs[] = [
  "href" => "https://danguydesign.medium.com/ethics-in-design-what-is-ethics-ff2a5818b37a",
  "date" => "18 June 2021",
  "title" => "Ethics in design: What is ethics?",
  "text" => "In recent times, ethics has become something of a buzzword in the tech industry, and for a good reason. Bad design decisions can lead to devastating personal, organisational and societal consequences"
];
$blogs[] = [
  "href" => "https://mojdigital.blog.gov.uk/2020/08/10/joining-opg-digital-as-an-interaction-designer-during-a-pandemic/",
  "date" => "10 August 2020",
  "title" => "Joining OPG Digital as an Interaction Designer during a pandemic",
  "text" => "Starting a new job is quite a daunting experience at the best of times. Starting a job during a global pandemic is something else."
];

$interviews = [];
$interviews[] = [
  "href" => "https://www.uxdesigninstitute.com/blog/student-success-stories-revisited-daniel-guy/",
  "date" => "22 January 2021",
  "title" => "Student Success Stories Revisited: Daniel Guy",
  "text" => "Daniel Guy was one of the very first graduates from our Professional Diploma in UX Design. In his 2019 interview, he discussed building his UX portfolio. In this piece, he describes how much his career has advanced since graduating."
];
$interviews[] = [
  "href" => "https://www.uxdesigninstitute.com/blog/alumni-success-stories-daniel-guy/",
  "date" => "17 July 2019",
  "title" => "Student Success Stories: Web Design to UX Designer",
  "text" => "When web designer Daniel found himself filling a senior design position, his confidence lacked without UX training. He told us how our Professional Diploma in UX Design helped him upskill, create a portfolio and grow his confidence."
];

include 'inc/header.php';
include "inc/cards.php";
?>

<header class="header header-small">
  <div class="">
    <h1 class="heading-1"><?php echo $h1 ?></h1>
  </div>
</header>

<section class="col">
  <div class="col padding-double padding-bottom-4">
    <h2 class="heading-2 margin-0">Blogs</h2>
  </div>
  <div class="block padding-responsive">
      <?php echo create_cards($blogs, 'cards-4'); ?>
  </div>
</section>

<section class="col">
  <div class="col padding-double padding-bottom-4">
    <h2 class="heading-2 margin-0">Interviews</h2>
  </div>
  <div class="block padding-responsive">
      <?php echo create_cards($interviews, 'cards-4'); ?>
  </div>
</section>

<?php
  include 'inc/projects.php';
  include 'inc/footer.php';
?>
