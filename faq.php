<?php
require_once('header.php');
?>

<body>
  <?php
  include_once('nav.php');
  ?>
  <main class="d-flex justify-content-center">
  <div class="accordion accordion-flush bg-dark accordion-borderless w-50 my-2" id="accordionFAQ">
    <div class="accordion-item ">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button accordion-flush bg-dark text-white-50 bg-dark" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseOne"
          aria-expanded="true" aria-controls="collapseOne">
          FAQ #1
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
        data-mdb-parent="#accordionFAQ">
        <div class="accordion-body bg-secondary bg-gradient">
          <strong>This is the First faq question.</strong> 
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Maxime earum at tenetur omnis itaque modi. Totam iusto deserunt sapiente, impedit,
          itaque cum amet id rerum inventore numquam ullam quaerat eos! 
          <strong>.ceci est un test</strong>.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed accordion-flush bg-dark text-white-50 bg-dark" type="button" data-mdb-toggle="collapse"
          data-mdb-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          FAQ #2
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-mdb-parent="#accordionFAQ">
        <div class="accordion-body bg-secondary bg-gradient">
        <strong>This is the Second faq question.</strong> 
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Maxime earum at tenetur omnis itaque modi. Totam iusto deserunt sapiente, impedit,
          itaque cum amet id rerum inventore numquam ullam quaerat eos! 
          <strong>.ceci est un test</strong>.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed accordion-flush bg-dark text-white-50 bg-dark" type="button" data-mdb-toggle="collapse"
          data-mdb-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          FAQ #3
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
        data-mdb-parent="#accordionFAQ">
        <div class="accordion-body bg-secondary bg-gradient">
        <strong>This is the Third faq question.</strong> 
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Maxime earum at tenetur omnis itaque modi. Totam iusto deserunt sapiente, impedit,
          itaque cum amet id rerum inventore numquam ullam quaerat eos! 
          <strong>.ceci est un test</strong>.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed accordion-flush bg-dark text-white-50 bg-dark" type="button" data-mdb-toggle="collapse"
          data-mdb-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          FAQ #4
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
        data-mdb-parent="#accordionFAQ">
        <div class="accordion-body bg-secondary bg-gradient">
        <strong>This is the Fourth faq question.</strong> 
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Maxime earum at tenetur omnis itaque modi. Totam iusto deserunt sapiente, impedit,
          itaque cum amet id rerum inventore numquam ullam quaerat eos! 
          <strong>.ceci est un test</strong>.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed accordion-flush bg-dark text-white-50 bg-dark btn btn-light shadow-0" type="button" data-mdb-toggle="collapse"
          data-mdb-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          FAQ #5
        </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
        data-mdb-parent="#accordionFAQ">
        <div class="accordion-body bg-secondary bg-gradient">
        <strong>This is the Fifth faq question.</strong> 
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Maxime earum at tenetur omnis itaque modi. Totam iusto deserunt sapiente, impedit,
          itaque cum amet id rerum inventore numquam ullam quaerat eos! 
          <strong>.ceci est un test</strong>.
        </div>
      </div>
    </div>
  </div>
  </main>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
  <?php
  include_once('footer.php');
  ?>
</body>