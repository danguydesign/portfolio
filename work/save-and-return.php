<?php
$page = "save-and-return";
$title = "Return To A Claim";
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
  "href" => "#models",
  "item" => "Two models"
];
$pageNav[] = [
  "href" => "#ixd",
  "item" => "Interaction design"
];
$pageNav[] = [
  "href" => "#prototyping",
  "item" => "Prototyping"
];

ob_start();?>

  <h2 id="intro" class="heading-2">Introduction</h2>

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
          Beta
        </dd>
    </div>
  </dl>

  <h3 id="problem" class="heading-3">The problem</h3>

  <p>Applying for criminal injury compensation is a long process that forces users to think about traumatic events in their lives. There is currently no way to save your progress and resume later. Applications must be completed in one sitting.</p>
  <p>As a consequence, users who get interupted often have to restart the process from the beginning, causing serious frustration. How might someone save their progress and resume their application later?</p>


  <h2 id="models" class="heading-2">Two models</h2>

  <p>I knew that there were two broad strategies to solving this problem for users:</p>
  
  <ul class="ul list-spaced">
    <li><strong class="stronger">A per-application model:</strong><br>
    Allow users to save their application progress as a self contained artefact. Users with multiple applications would have to access each application independently, in different places, without being connected.</li>
    <li><strong class="stronger">A per-user model:</strong><br>
    Allow users to save and manage all their applications in one place via an account.</li>
  </ul>

  <div class="x-scroll-container">
  <div class="x-img-container">
    <img src="../img/save-and-return/per-app.jpg" class="x-img">
    <div class="text-box">
      <p class="margin-none">Per application</p>
    </div>
  </div>
  <div class="x-img-container">
    <img src="../img/save-and-return/per-user.jpg" class="x-img">
    <div class="text-box">
    <p class="margin-none">Per user</p>
    </div>
  </div>
</div>

<h3 class="heading-3">Per application model</h3>

<div class="image-box">
  <img src="../img/save-and-return/per-app-flow.jpg" class="">
</div>

<p>In testing this solution, users incorrectly assumed that applications were associated with their account, so assumed they could sign back in to continue. We also found it challenging to write content that avoided terms like ‘sign in’ even though it seemed like this is what was happening. This made us reevaluate the approach altogether.</p>
<p>I was aware that a government-wide single sign on solution called 'Gov One Login' has started to be rolled out. On top of this, another one of our user groups — third party reps — would likely struggle to manage multiple applications via email. I persuaded the team to opt for an account based solution, which would be more flexible for our various types of users and their respective needs. So conversation began about integrating with Gov One Login.</p>

<h3 class="heading-3">Per user model</h3>

<div class="image-box">
  <img src="../img/save-and-return/per-user-flow.jpg" class="">
</div>

<p>This iteration plays into people’s mental models that their application is associated with an account—an incorrect assumption that people made when we tested version 2. This solution links the application up with GOV.UK One Login, so we wouldn’t need to build our own account solution.</p>
<p>For these reasons, we chose to take the per-user model forward, so I began specing out an MPV for an account based solution.</p>

<h3 class="heading-3">Designing an MVP</h3>

<div class="image-box">
  <img src="../img/save-and-return/mvp.jpg" class="">
</div>

<p>The first round of MVP testing for this prototype revealed that people struggled to return to the application due to the fact that there is no ‘continue an application’ page on the stepped guidance. We also found that people expected their current page (form info) to be saved when they clicked the ‘save and come back later’ link.</p>


<h2 id="ixd" class="heading-2">Interaction design</h2>

<h3 class="heading-3">Saving an application</h3>

<div class="image-box">
  <video controls>
    <source src="../img/save-and-return/save.mp4#t=1" type="video/mp4">
  </video>
</div>

<h3 class="heading-3">The 'save problem'</h3>

<p>One difficulty we had was that the 'save' link would not submit any data on the page it was clicked on. This is because links don’t submit forms. For most pages, this would not be a problem because only small pieces of user-entered data would be lost. However, we had some long textarea fields for users to describe the crime, which can be quite traumatic. For this reason, we needed to find a way to stop users losing their long answers.</p>
<p>One way of solving this problem would be to replace the link with a button. However, this would introduce the further problem of not allowing users to start the save journey if the current form was empty, because an error would be thrown, forcing them to type an answer. In testing, we noticed users commonly start the save journey by clicking the link on a page they haven't filled, and we didn't want to confuse this expectation. It would also create problems for users that get interrupted and need to quickly save their progress. So, I came up with some alternative options:</p>

<div class="x-scroll-container x-scroll-3">
  <div class="x-img-container">
    <img src="../img/save-and-return/save-link-1.png" class="x-img">
    <div class="text-box">
      <p class="margin-none">Add more link text</p>
    </div>
  </div>
  <div class="x-img-container">
  <img src="../img/save-and-return/save-link-2.png" class="x-img">
    <div class="text-box">
    <p class="margin-none">Modal dialog box</p>
    </div>
  </div>
  <div class="x-img-container">
  <img src="../img/save-and-return/save-link-3.png" class="x-img">
    <div class="text-box">
    <p class="margin-none">Reposition the link</p>
    </div>
  </div>
</div>

<p>Adding more link text wasn't preferable because explaining to users what won't happen is usually a sign that the approach will go against their mental model. Implementing a modal dialog box would have been much more technical work, and would also risk confusing the user about exactly what would be saved.</p>
<p>So repositioning the save link was my preferred approach because it was an easy fix, plus distancing the link away from the form would subtly suggest that the link is not tied to the form. For non-sighted users, the 'save' link would also be declared prior to the form, which would solve the problem for them.</p>

<h3 class="heading-3">Returning to an application</h3>

<p>The main problem with returning an application was that the return journey wasn’t clearly signposted on the GOV.UK guidance pages. I added an alternative link to the ‘make a claim’ page so that users have an option to sign straight in. However, some users may miss this link, so I added a radio button option to the first service page. Both return options are shown in the following video.</p>

<div class="image-box">
  <video controls>
    <source src="../img/save-and-return/return.mp4#t=2" type="video/mp4">
  </video>
</div>

<h3 class="heading-3">Dashboard design</h3>

<p>Given that the service needed to accommodate different user types, some of which would need to manage multiple applications, those users would need a dashboard to navigate between applications. The main user groups that would benefit from the dashboard were legal professionals and third party representatives. </p>
<p>Self-applicants typically only make one application at a time. However, self-applicant could still benefit from it because:</p>

<ul class="ul">
  <li>it would prevent people from accidentally creating multiple applications</li>
  <li>it would remind them when their current application expires</li>
  <li>we could use it to give status updates about their claim</li>
</ul>

<div class="x-scroll-container">
  <div class="x-img-container">
    <img src="../img/save-and-return/dashboard-1.png" class="x-img">
    <div class="text-box">
      <p class="margin-none">Typical self-applicant</p>
    </div>
  </div>
  <div class="x-img-container">
  <img src="../img/save-and-return/dashboard-2.png" class="x-img">
    <div class="text-box">
    <p class="margin-none">Typical third party support</p>
    </div>
  </div>
</div>


<h2 id="prototyping" class="heading-2">Prototyping</h2>

<p>I built a number of prototypes in code throughout this project using the GOV.UK Prototyping Kit — one for each model plus iterations for each one.</p>
<div class="image-box">
  <img src="../img/save-and-return/code.png" class="">
</div>

<p>I worked with a researcher and a content designer to finalise designs and create a plan for each round of usability testing.</p>
<p>Having all the approved content, UI designs and journeys built out in a hi-fidelity prototype helped with passing work over to the developers. The prototype paired with the user-flows gave a complete picture of what they were supposed to build and how fine-grained interactions would work.</p>

<?php
$content = ob_get_clean();
include '../layout-project.php';
?>
