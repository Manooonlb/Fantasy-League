<?php
require_once('header.php');
?>

<body>
  <?php
  include_once('nav.php');
  ?>

  <div class="accordion" id="accordionFAQ">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseOne"
          aria-expanded="true" aria-controls="collapseOne">
          FAQ #1
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
        data-mdb-parent="#accordionFAQ">
        <div class="accordion-body">
          <strong>This is the first faq question.</strong> 
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Maxime earum at tenetur omnis itaque modi. Totam iusto deserunt sapiente, impedit,
          itaque cum amet id rerum inventore numquam ullam quaerat eos! 
          <strong>.ceci est un test</strong>.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
          data-mdb-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          FAQ #2
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-mdb-parent="#accordionFAQ">
        <div class="accordion-body">
        <strong>This is the second faq question.</strong> 
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Maxime earum at tenetur omnis itaque modi. Totam iusto deserunt sapiente, impedit,
          itaque cum amet id rerum inventore numquam ullam quaerat eos! 
          <strong>.ceci est un test</strong>.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
          data-mdb-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          FAQ #3
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
        data-mdb-parent="#accordionFAQ">
        <div class="accordion-body">
        <strong>This is the third faq question.</strong> 
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Maxime earum at tenetur omnis itaque modi. Totam iusto deserunt sapiente, impedit,
          itaque cum amet id rerum inventore numquam ullam quaerat eos! 
          <strong>.ceci est un test</strong>.
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
  <?php
  include_once('footer.php');
  ?>
