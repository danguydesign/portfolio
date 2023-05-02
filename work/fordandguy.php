<?php
$page = "fordandguy";
$title = "Ford & Guy";
$metaD = "";
$h1 = $title;
$backLink = true;

$pageNav = [];
$pageNav[] = [
  "href" => "#research",
  "item" => "Research"
];
$pageNav[] = [
  "href" => "#design",
  "item" => "Design"
];
$pageNav[] = [
  "href" => "#develop",
  "item" => "Develop"
];


ob_start();?>

<h2 id="intro" class="heading-2">Introduction</h2>

<p class="large-p">Design and build an ecommerce website for a sustainable fashion brand</p>

<dl class="summary-list radius shadow">
    <div class="summary-list__row">
        <dt class="summary-list__key">
          Company:
        </dt>
        <dd class="summary-list__value">
         Ford & Guy
        </dd>
    </div>
    <div class="summary-list__row">
        <dt class="summary-list__key">
          Sector:
        </dt>
        <dd class="summary-list__value">
          Private
        </dd>
    </div>
    <div class="summary-list__row">
        <dt class="summary-list__key">
          My role:
        </dt>
        <dd class="summary-list__value">
        Researcher / Designer / Developer
        </dd>
    </div>
    <div class="summary-list__row">
        <dt class="summary-list__key">
          Responsibilities:
        </dt>
        <dd class="summary-list__value">
          Research, interface design, interaction design, creative direction, web development
        </dd>
    </div>
  </dl>


<!--- Research --->
<h2 id="research" class="heading-2">Research</h2>

<h3 class="heading-3">Competitive benchmarking</h3>
<p>I started by analysing design and interaction trends across a number of popular ecommerce websites. I wanted to know what mental models a user might have due to the way they have learned to interact with other ecommerce sites.</p>
<p>Here’s an example of some of my research into product page anatomy:</p>

<div class="x-scroll-container x-scroll-4">
  <div class="x-img-container">
    <img src="../img/research-img/bench-1.png" class="x-img">
  </div>
  <div class="x-img-container">
    <img src="../img/research-img/bench-3.png" class="x-img">
  </div>
  <div class="x-img-container">
    <img src="../img/research-img/bench-6.png" class="x-img">
  </div>
  <div class="x-img-container">
    <img src="../img/research-img/bench-7.png" class="x-img">
  </div>
</div>

<p>Of the websites I reviewed, here are some of my findings:</p>

<div class="image-box">
  <img src="../img/research-img/bench-analysis.jpg" class="">
</div>

<p>I used these findings to support my interface and interaction design decisions. By choosing to go with popular conventions, I reduce the learning curve of the user by honouring their existing mental models.</p>

<!--- Design --->
<h2 id="design" class="heading-2">Design</h2>

<p>I used the existing brand colours, which were pink, off-white and blue, turned these into web colours and ran them through a colour contrast checker to make sure they passed both AA and AAA WCAG standards.</p>

<table class="styled-table color" summary="Table of main colours">
  <tbody>
    <tr>
      <td colspan="3">
        <h3 class="heading-3 ">
         Brand colours
        </h3>
      </td>
    </tr>

    <tr class="app-colour-list-row">
      <th class="app-colour-list-column app-colour-list-column--name" scope="row">
        <span class="app-swatch " style="background-color:#E8BDD3"></span>
        <code>$primary-colour</code>
      </th>
      <td class="app-colour-list-column app-colour-list-column--colour">
        <code>#E8BDD3</code>
      </td>
    </tr>

    <tr class="app-colour-list-row">
      <th class="app-colour-list-column app-colour-list-column--name" scope="row">
        <span class="app-swatch " style="background-color:#306043"></span>
        <code>$secondary-colour</code>
      </th>
      <td class="app-colour-list-column app-colour-list-column--colour">
        <code>#306043</code>
      </td>
    </tr>

    <tr class="app-colour-list-row">
      <th class="app-colour-list-column app-colour-list-column--name" scope="row">
        <span class="app-swatch " style="background-color:#292f68;"></span>
        <code>$tertiary-colour</code>
      </th>
      <td class="app-colour-list-column app-colour-list-column--colour">
        <code>#292f68</code>
      </td>
    </tr>

    <tr class="app-colour-list-row">
      <th class="app-colour-list-column app-colour-list-column--name" scope="row">
        <span class="app-swatch " style="background-color:#EDE8E2"></span>
        <code>$off-white</code>
      </th>
      <td class="app-colour-list-column app-colour-list-column--colour">
        <code>#EDE8E2</code>
      </td>
    </tr>

    <tr class="app-colour-list-row">
      <th class="app-colour-list-column app-colour-list-column--name" scope="row">
        <span class="app-swatch " style="background-color:#222222;border-color:#333333;"></span>
        <code>$black</code>
      </th>
      <td class="app-colour-list-column app-colour-list-column--colour">
        <code>#222222</code>
      </td>
    </tr>

    <tr>
      <td colspan="3">
        <h3 class="heading-3">
        Text
        </h3>
      </td>
    </tr>

    <tr class="app-colour-list-row">
      <th class="app-colour-list-column app-colour-list-column--name" scope="row">
        <span class="app-swatch " style="background-color:#222222;border-color:#333333;"></span>
        <code>$text-colour</code>
      </th>
      <td class="app-colour-list-column app-colour-list-column--colour">
        <code>#222222</code>
      </td>
    </tr>

    <tr class="app-colour-list-row">
      <th class="app-colour-list-column app-colour-list-column--name" scope="row">
        <span class="app-swatch " style="background-color:#292f68;"></span>
        <code>$link-colour</code>
      </th>
      <td class="app-colour-list-column app-colour-list-column--colour">
        <code>#292f68</code>
      </td>
    </tr>

    <tr class="app-colour-list-row">
      <th class="app-colour-list-column app-colour-list-column--name" scope="row">
        <span class="app-swatch " style="background-color:#1a1e42;border-color:#333333;"></span>
        <code>$link-hover-colour</code>
      </th>
      <td class="app-colour-list-column app-colour-list-column--colour">
        <code>#1a1e42</code>
      </td>
    </tr>

    <tr class="app-colour-list-row">
    <th class="app-colour-list-column app-colour-list-column--name" scope="row">
        <span class="app-swatch " style="background-color:#306043"></span>
        <code>$link-active-colour</code>
      </th>
      <td class="app-colour-list-column app-colour-list-column--colour">
        <code>#306043</code>
      </td>
    </tr>

    <tr>
      <td colspan="3">
        <h3 class="heading-3">
        User feedback
        </h3>
      </td>
    </tr>

    <tr class="app-colour-list-row">
      <th class="app-colour-list-column app-colour-list-column--name" scope="row">
        <span class="app-swatch " style="background-color:#BC2F41"></span>
        <code>$error-colour</code>
      </th>
      <td class="app-colour-list-column app-colour-list-column--colour">
        <code>#BC2F41</code>
      </td>
    </tr>


    <tr class="app-colour-list-row">
      <th class="app-colour-list-column app-colour-list-column--name" scope="row">
      <span class="app-swatch " style="background-color:#306043"></span>
        <code>$success-colour</code>
      </th>
      <td class="app-colour-list-column app-colour-list-column--colour">
        <code>#00703c</code>
      </td>
    </tr>
  </tbody>
</table>


<!-- Typography -->

<h3 class="heading-3">Typography</h3>

<div class="col margin-bottom-4" style="background-color:#E8BDD3;color:#222;border-radius:15px;">

  <div class="padding">
    <h4 class="heading-5 monospace">
      Font family: Mukta
    </h4>
    <span class="fordandguy" style="font-size:40px; line-height: 1.2; font-weight:600; word-wrap: break-word;">ABCDEFGHIJKLMNOPQRSTUVWXYZ</span>
    <span class="fordandguy" style="font-size:40px; line-height: 1.2; word-wrap: break-word;">abcdefghijklmnopqrstuvwxyz</span>
  </div>

  <div class="container margin-bottom-6">
    <div class="col-half padding padding-bottom-0">

      <table class="styled-table margin-bottom-0" summary="Table of mobile text sizes">

          <tbody>
            <tr>
            <td colspan="3" class="padding-top-0 padding-bottom-0">
                <h4 class="heading-5 monospace">
                Moblie:
                </h4>
              </td>
            </tr>

            <tr class="app-colour-list-row">
              <th class="app-colour-list-column app-colour-list-column--name" scope="row">
                <span class="fordandguy" style="font-size:30px; font-weight:600;">Heading 1</span>
              </th>
              <td class="app-colour-list-column app-colour-list-column--colour">
                <code>30px</code>
              </td>
            </tr>

            <tr class="app-colour-list-row">
              <th class="app-colour-list-column app-colour-list-column--name" scope="row">
                <span class="fordandguy" style="font-size:26px; font-weight:600;">Heading 2</span>
              </th>
              <td class="app-colour-list-column app-colour-list-column--colour">
                <code>26px</code>
              </td>
            </tr>

            <tr class="app-colour-list-row">
              <th class="app-colour-list-column app-colour-list-column--name" scope="row">
                <span class="fordandguy" style="font-size:23px; font-weight:600;">Heading 3</span>
              </th>
              <td class="app-colour-list-column app-colour-list-column--colour">
                <code>23px</code>
              </td>
            </tr>

            <tr class="app-colour-list-row">
              <th class="app-colour-list-column app-colour-list-column--name" scope="row">
                <span class="fordandguy" style="font-size:21px; font-weight:600;">Heading 4</span>
              </th>
              <td class="app-colour-list-column app-colour-list-column--colour">
                <code>21px</code>
              </td>
            </tr>

            <tr class="app-colour-list-row">
              <th class="app-colour-list-column app-colour-list-column--name" scope="row">
                <span class="fordandguy" style="font-size:19px; font-weight:600;">Heading 5</span>
              </th>
              <td class="app-colour-list-column app-colour-list-column--colour">
                <code>19px</code>
              </td>
            </tr>

            <tr class="app-colour-list-row">
              <th class="app-colour-list-column app-colour-list-column--name" scope="row">
                <span class="fordandguy" style="font-size:17px; font-weight:600;">Heading 6</span>
              </th>
              <td class="app-colour-list-column app-colour-list-column--colour">
                <code>17px</code>
              </td>
            </tr>

            <tr class="app-colour-list-row">
              <th class="app-colour-list-column app-colour-list-column--name" scope="row">
                <span class="fordandguy" style="font-size:16px; font-weight:400;">Paragraph</span>
              </th>
              <td class="app-colour-list-column app-colour-list-column--colour">
                <code>16px</code>
              </td>
            </tr>

            <tr class="app-colour-list-row">
              <th class="app-colour-list-column app-colour-list-column--name" scope="row">
                <span class="fordandguy" style="font-size:14px; font-weight:400;">Small</span>
              </th>
              <td class="app-colour-list-column app-colour-list-column--colour">
                <code>14px</code>
              </td>
            </tr>

          </tbody>
      </table>

    </div>
    <div class="col-half padding">

      <table class="styled-table margin-bottom-0" summary="Table of desktop text sizes">
        <tbody>
          <tr>
            <td colspan="3" class="padding-top-0 padding-bottom-0">
              <h4 class="heading-5 monospace">
              Desktop:
              </h4>
            </td>
          </tr>

          <tr class="app-colour-list-row">
            <th class="app-colour-list-column app-colour-list-column--name" scope="row">
              <span class="fordandguy" style="font-size:40px; font-weight:600;">Heading 1</span>
            </th>
            <td class="app-colour-list-column app-colour-list-column--colour">
              <code>40px</code>
            </td>
          </tr>

          <tr class="app-colour-list-row">
            <th class="app-colour-list-column app-colour-list-column--name" scope="row">
              <span class="fordandguy" style="font-size:33px; font-weight:600;">Heading 2</span>
            </th>
            <td class="app-colour-list-column app-colour-list-column--colour">
              <code>33px</code>
            </td>
          </tr>

          <tr class="app-colour-list-row">
            <th class="app-colour-list-column app-colour-list-column--name" scope="row">
              <span class="fordandguy" style="font-size:28px; font-weight:600;">Heading 3</span>
            </th>
            <td class="app-colour-list-column app-colour-list-column--colour">
              <code>28px</code>
            </td>
          </tr>

          <tr class="app-colour-list-row">
            <th class="app-colour-list-column app-colour-list-column--name" scope="row">
              <span class="fordandguy" style="font-size:25px; font-weight:600;">Heading 4</span>
            </th>
            <td class="app-colour-list-column app-colour-list-column--colour">
              <code>25px</code>
            </td>
          </tr>

          <tr class="app-colour-list-row">
            <th class="app-colour-list-column app-colour-list-column--name" scope="row">
              <span class="fordandguy" style="font-size:22px; font-weight:600;">Heading 5</span>
            </th>
            <td class="app-colour-list-column app-colour-list-column--colour">
              <code>22px</code>
            </td>
          </tr>

          <tr class="app-colour-list-row">
            <th class="app-colour-list-column app-colour-list-column--name" scope="row">
              <span class="fordandguy" style="font-size:20px; font-weight:600;">Heading 6</span>
            </th>
            <td class="app-colour-list-column app-colour-list-column--colour">
              <code>20px</code>
            </td>
          </tr>

          <tr class="app-colour-list-row">
            <th class="app-colour-list-column app-colour-list-column--name" scope="row">
              <span class="fordandguy" style="font-size:18px; font-weight:400;">Paragraph</span>
            </th>
            <td class="app-colour-list-column app-colour-list-column--colour">
              <code>18px</code>
            </td>
          </tr>

          <tr class="app-colour-list-row">
            <th class="app-colour-list-column app-colour-list-column--name" scope="row">
              <span class="fordandguy" style="font-size:16px; font-weight:400;">Small</span>
            </th>
            <td class="app-colour-list-column app-colour-list-column--colour">
              <code>16px</code>
            </td>
          </tr>

        </tbody>
      </table>
    </div>

  </div>

</div>


<h3 class="heading-3">Content presentation</h3>

<p>Taking my findings from my competitor analysis, I chose a handful of layouts that people would be familiar with. The majority of the site content fits into the following layouts:</p>
<ul class="ul">
  <li>Feature blocks</li>
  <li>Product cards</li>
  <li>Horizontal scrollers</li>
  <li>Product pages</li>
  <li>Generic columns</li>
</ul>

<div class="x-scroll-container x-scroll-4">
  <div class="x-img-container">
    <img src="../img/fordandguy/product-page-header.jpg" class="x-img">
    <div class="text-box">
      <p class="margin-none">Product gallery</p>
    </div>
  </div>
  <div class="x-img-container">
    <img src="../img/fordandguy/product-cards.jpg" class="x-img">
    <div class="text-box">
      <p class="margin-none">Product cards</p>
    </div>
  </div>
  <div class="x-img-container">
    <img src="../img/fordandguy/feature-block.jpg" class="x-img">
    <div class="text-box">
      <p class="margin-none">Feature block</p>
    </div>
  </div>
  <div class="x-img-container">
    <img src="../img/fordandguy/horizontal-scroller.jpg" class="x-img">
    <div class="text-box">
      <p class="margin-none">X scroller</p>
    </div>
  </div>
</div>


<h3 class="heading-3">Interface design</h3>

<div class="x-scroll-container x-scroll-4">
  <div class="x-img-container">
    <img src="../img/fordandguy/mobile-home.jpg" class="x-img">
  </div>
  <div class="x-img-container">
    <img src="../img/fordandguy/mobile-category.jpg" class="x-img">
  </div>
  <div class="x-img-container">
    <img src="../img/fordandguy/mobile-product.jpg" class="x-img">
  </div>
  <div class="x-img-container">
    <img src="../img/fordandguy/mobile-basket.jpg" class="x-img">
  </div>
</div>

<div class="x-scroll-container">
  <div class="x-img-container">
    <img src="../img/fordandguy/mobile-nav-1.jpg" class="x-img">
  </div>
  <div class="x-img-container">
    <img src="../img/fordandguy/mobile-nav-2.jpg" class="x-img">
  </div>
</div>

<?php
$content = ob_get_clean();
include '../layout-project.php';
?>
