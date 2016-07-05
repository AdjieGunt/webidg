<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.2.3/css/foundation.min.css">
</head>
<body>
	
</body>
</html>
<div class="row">
  <div class="small-12 columns">
    <ul class="tabs show-for-medium-up" data-tab>
      <li class="tab-title active"><a href="#panel1">Tab / Accordion 1</a></li>
      <li class="tab-title"><a href="#panel2">Tab / Accordion 2</a></li>
      <li class="tab-title"><a href="#panel3">Tab / Accordion 3</a></li>
      <li class="tab-title"><a href="#panel4">Tab / Accordion 4</a></li>
      <li class="tab-title"><a href="#panel5">Tab / Accordion 5</a></li>
    </ul>

    <dl class="accordion" data-accordion>

      <dd class="accordion-navigation">
        <a href="#panel1" class="show-for-small-only">Accordion 1</a>
        <div id="panel1" class="content active">
          <div class="content-box section-box">
            <h4>Tab / Accordion Content 1</h4>
          </div>
        </div>
        <a href="#panel2" class="show-for-small-only">Accordion 2</a>
        <div id="panel2" class="content">
          <div class="content-box section-box">
            <h4>Tab / Accordion Content 2</h4>
          </div>
        </div>
        <a href="#panel3" class="show-for-small-only">Accordion 3</a>
        <div id="panel3" class="content">
          <div class="content-box section-box">
            <h4>Tab / Accordion Content 3</h4>
          </div>
        </div>
        <a href="#panel4" class="show-for-small-only">Accordion 4</a>
        <div id="panel4" class="content">
          <div class="content-box section-box">
            <h4>Tab / Accordion Content 4</h4>
          </div>
        </div>
        <a href="#panel5" class="show-for-small-only">Accordion 5</a>
        <div id="panel5" class="content">
          <div class="content-box section-box">
            <h4>Tab / Accordion Content 5</h4>
          </div>
        </div>
      </dd>
    </dl>

  </div>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/foundation/6.2.1/foundation.min.js"></script> -->
  <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
  <script>
    $(document).foundation();

    // $(document).foundation('tab', 'reflow');abs();
  </script>
