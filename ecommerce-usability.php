<?php
$page = "ecommerce-usability";
$title = "E-commerce Usability";
$metaD = "";
$h1 = $title;

$pageNav = [];
$pageNav[] = [
  "href" => "#research",
  "item" => "Research"
];
$pageNav[] = [
  "href" => "#analysis",
  "item" => "Analysis"
];
$pageNav[] = [
  "href" => "#design",
  "item" => "Design"
];
$pageNav[] = [
  "href" => "#iterate",
  "item" => "Iteration"
];
$pageNav[] = [
  "href" => "#impact",
  "item" => "Impact"
];

ob_start();?>

<h2 id="intro" class="heading-2">Objective</h2>

<p class="large-p">Improve usability of an e-commerce website to drive conversion and revenue.</p>

<!--- Research --->
<h2 id="research" class="heading-2">Research</h3>

<h3 class="heading-3">Objectives</h3>
<ol class="ol">
  <li>Identify typical sticking points within the mobile product purchasing journey</li>
  <li>Discover best practices and competitor solutions to product editor software</li>
  <li>Improve usability of website and product editor</li>
  <li>Check for bugs in Chrome, Firefox, Safari and Edge</li>
  <li>Improve conversion rate to drive revenue</li>
</ol>

<h3 class="heading-3">UX Walkthough</h3>
<div class="image-box">
  <img src="img/mobile-conversion/mobile-conversion.jpg" class="img-right">
</div>

<p>We started the project with a team UX walkthrough. The group included six people and a note taker.</p>
<p>We mapped some common journeys using a mixture of links and the navigation to navigate through the site. We proceeded together looking for bugs and issues while the note taker logged issues.</p>
<p><strong>Devices used included:</strong> an iPhone 5s; an iPhone 6s; an iPhone Xr; a Samsung J5; and a Samsung J5.</p>

<h3 class="heading-3">Usability testing</h3>

<div class="image-box">
  <img src="img/research-img/usability-testing.jpg" class="img-right">
</div>
<p>I conducted six rounds of usability testing with participants recruited through an agency. I wrote a script and prepared two tasks to take each participant through.</p>
<p>Task one was to choose a product from our wall-art category, and add a photo to it in our product editor. Task two was to repeat the same steps on a competitor website.</p>
<p>Two key insights I gained were that:</p>
<ol class="ol">
  <li>users were getting stuck choosing between our online and downloadable product editors</li>
  <li>there were too many features in the online editor—some of them rarely used</li>
</ol>

<h3 class="heading-3">Competitive Benchmarking</h3>

<h4 class="heading-4">Product Page</h4>
<p>I did some desk research into product pages to identify design trends emerging across websites with lots of traffic. I looked at how product galleries work, what gestures they recognise, whether they use thumbnail images, where the price is located and what kind of inputs are used.</p>

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
<p>Next, I did some research into how our competitors had designed their product editors. Our editor had not been updated for quite some time and it was clear that we were making things harder for our users than they should be.</p>
<p>All our competitors had product editors that fit onto a mobile screen without needing to scroll. Our editor needed at least two scroll gestures to get to the bottom of the editor. </p>
<p>Our controls where stacked vertically so that you had to scroll down to edit the product. Our competitors all had their controls stacked horizontally so the product could be seen and edited at the same time.</p>

<div class="image-box">
  <img src="img/mobile-conversion/product-editor.jpg" class="img-right">
</div>

<h3 class="heading-3">Analytics</h3>
<p>I used Adobe Omniture to identify user behaviour and trends. Two points in the journey that stood out to me where users dropping out at the product page and at the first step of the editor. The editor in particular had the highest fallout, so it was clear that this is where the majority of effort should be focused.</p>

<div class="image-box">
  <img src="img/mobile-conversion/fallout-charts.jpg" class="img-right">
</div>

<hr>

<!--- Analysis --->

<h2 id="analysis" class="heading-2">Analysis</h2>

<h3 class="heading-3">Customer Journey Map</h3>
<p>I created a customer journey map based on the notes from the UX walkthrough, usability testing and analytics. The main focus of this customer journey map was to understand the key moments of friction in the journey. Then I could focus my attention on improving those areas.</p>
<p>The three main moments of friction I noticed were:</p>
<ul class="ul">
  <li>trying to locate the product category in the menu</li>
  <li>being unable to understand what the product is like</li>
  <li>editing the product due to too many features</li>
</ul>

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
