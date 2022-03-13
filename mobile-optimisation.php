<?php
$page = "mobile-optimisation";
$title = "Ecommerce Usability";
$metaD = "";
$h1 = $title;

$pageNav = [];
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
  "href" => "#iterate",
  "item" => "Phase 4: Iteration"
];
$pageNav[] = [
  "href" => "#impact",
  "item" => "Impact"
];

ob_start();?>

<h2 id="intro" class="heading-2">Introduction</h2>

<p class="large-p">The aim of this project was to identify and remove sticking points and bugs within the product purchasing journey on mobile.</p>

<!--- Research --->
<h2 id="research" class="heading-2">Research</h3>

<h3 class="heading-3">Objectives</h3>
<ol class="ol">
  <li>Identify typical sticking points within the mobile product purchasing journey.</li>
  <li>Discover best practices and competitor solutions to product editor software.</li>
  <li>Improve usability of website and product editor.</li>
  <li>Check for bugs in Chrome, Firefox, Safari and Edge.</li>
  <li>Improve conversion rate and revenue.</li>
</ol>

<h3 class="heading-3">UX Walkthough</h3>
<p>Since the team was aware of a number of issues at various points in the buying journey, we started the project with a UX walkthrough. The group consisted of six people: myself; a developer; a marketing manager; two customer support workers; and a note taker. We mapped out some typical user journeys, four in total, consisting of our two most popular product categories with one variation of each using page links to proceed through the steps, and one using only navigation menu links. We proceeded in unison looking for bugs and usability issues while the note taker logged issues.</p>
<p><strong>Devices used included:</strong> an iPhone 5s; an iPhone 6s; an iPhone Xr; a Samsung J5; and a Samsung J5.</p>

<div class="image-box">
  <img src="img/mobile-conversion/mobile-conversion.jpg" class="img-right">
</div>

<h3 class="heading-3">Competitive Benchmarking</h3>

<h4 class="heading-4">Product Page Header</h4>
<p>I also did some research into best in class product page headers to identify design trends emerging across websites with lots of traffic. This included looking at: how product galleries work and what gestures they recognise; whether thumbnail images are used on mobile; where the price is located; and what kind of inputs are used.</p>

<div class="x-scroll-container">
  <div class="x-img-container">
    <img src="img/research-img/benchmarking-1.jpg" class="x-img">
  </div>
  <div class="x-img-container">
    <img src="img/research-img/benchmarking-2.jpg" class="x-img">
  </div>
  <div class="x-img-container">
    <img src="img/research-img/benchmarking-3.jpg" class="x-img">
  </div>
</div>

<h4 class="heading-4">Product Editor</h4>
<p>Next, I did some research into how our immediate competitors had designed their product editors. Our editor had not been changed for quite some time and it was clear that we were making things more difficult for our users than they should be. All our competitors had product editors that fit onto a mobile screen without needing to scroll. Our editor needed at least two scroll gestures to get to the bottom of the editor. Our controls where stacked vertically so that you had to scroll down to edit the product, where as our competitors unanimously had their controls stacked horizontally so the product could be seen and edited at the same time.</p>

<div class="image-box">
  <img src="img/mobile-conversion/product-editor.jpg" class="img-right">
</div>

<h3 class="heading-3">Analytics</h3>
<p>I worked alongside an analyst to get some data from our site, including a fallout funnel showing both mobile and non-mobile data, and a table showing visits, orders, revenue and conversion rate. Two points in the journey that stood out to me where users dropping out at the product page and at the first step of the editor. The editor in particular had the highest fallout, so it was clear that this is where the majority of effort should be focused. We also compared this to desktop behaviour.</p>

<div class="image-box">
  <img src="img/mobile-conversion/fallout-charts.jpg" class="img-right">
</div>

<hr>

<!--- Analysis --->

<h2 id="analysis" class="heading-2">Analysis</h2>

<h3 class="heading-3">Customer Journey Map</h3>
<p>I created a customer journey map based on the notes from the UX walkthrough. Given that we did not conduct usability tests with actual users, we had to make a few assumptions about what the user’s goals were, but since the scope of this project was to identify sticking points and bugs within the purchasing journey on mobile, we decided this was okay and would be addressed later on by conducting usability tests. The main focus of this customer journey map was the pain points.</p>

<div class="image-box">
  <img src="img/mobile-conversion/customer-journey.gif" class="img-right">
</div>

<h3 class="heading-3">Triage Issues</h3>
<p>We organized all of the issues that we found by severity and how simple they would be to fix in order to obtain the minimum viable product.</p>

<hr>

<!--- Design --->

<h2 id="design" class="heading-2">Design</h3>

<h3 class="heading-3">Low-fidelity & High-fidelity Designs</h3>
<p>I sketched some solutions to the issues we found above, taking research findings into consideration, and used these sketches to create some high-fidelity designs.</p>

<div class="image-box">
  <img src="img/mobile-conversion/low-fidelity.gif" class="img-right">
</div>

<div class="image-box">
  <img src="img/mobile-conversion/high-fidelity.jpg" class="img-right">
</div>

<h3 class="heading-3">Wireframes</h3>
<p>I created some wireframes to pass over to dev for building, explaining how controls behave when the user interacts with them.</p>

<div class="image-box">
  <img src="img/mobile-conversion/wireframes.gif" class="img-right">
</div>

<hr>

<!--- Iterate --->

<h2 id="iterate" class="heading-2">Iterate</h3>
<p>After these designs had gone through development, we did two more rounds of device testing to streamline the product prior to implementation. Issues were logged and I sketched out some suggestions to feed back to the dev team for the next iteration.</p>

<div class="image-box">
  <img src="img/mobile-conversion/iterate.gif" class="img-right">
</div>

<hr>

<!--- Impact --->

<h2 id="impact" class="heading-2">Impact</h2>
<p>This work was carried out from March – April 2019 and was implemented at the end of April. Results showed that the impact this work had on the performance of our website, in particular, our online product builder. The table compares visits, orders, conversion rate and revenue from 2018 and 2019. Visits are down in 2019 due to a cut in mobile ad spend, but despite this cut in traffic and visitor qualification, orders, conversion rate and revenue were all significantly and consistently improved by the changes that we made. This is indicative of the fact that usability had been successfully improved by the work that we carried out.</p>

<div class="image-box">
  <img src="img/mobile-conversion/impact.jpg" class="img-right">
</div>


<?php
$content = ob_get_clean();
include 'layout-project.php';
?>
