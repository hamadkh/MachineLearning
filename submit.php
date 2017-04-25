<?php
require 'autoload.php';

$name = $age = $state = $diseases = $gender ="";

$name=$_POST["name"];
$age=$_POST["age"];
$state=$_POST["state"];
$diseases=$_POST["diseases"];
$gender=$_POST["gender"];

$text= $name.",".$age.",".$state.",".$diseases.",".$gender;

// Use the API key from your account
$ml = new MonkeyLearn\Client('1f7421a304394af663c3616f55cbb5486dafc123');
$text_list[0] =$text;

$module_id = 'cl_7tM2EQvL';
$res = $ml->classifiers->classify($module_id, $text_list, true);

$plan=$res->result[0][0]['label'];

?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Eczar|Space+Mono" rel="stylesheet">
<link rel="stylesheet" href="bulma.css">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<title>Hamad Khawaja</title>
</head>
<body>
    <!-- Hero content: will be in the middle -->
    <section class="hero is-fullheight is-info is-bold">
	  <div class="container has-text-centered">
        <div class="notification is-success">
	Congratulations !! You have be matched with a plan based on our Machine learning capabilities made on healthcare plaan data taken from customers who have given 5 Star ratings to this Plan.
	This is the plan that will work best for you. Thankyou !!
	</div>
	<div class="card">
    <a class="card-header-icon">
      <span class="icon">
        <i class="fa fa-medkit"></i>
      </span>
    </a>
  </header>
  <div class="card-content">
	<h1 class="title is-1" > <b style="color:black">PLAN <?php
	echo "$plan";
	?></b></h1>
    <div class="content">
      This is the best plan for you. Apply, save or ask for more details about the plan.
  </div>
  <footer class="card-footer">
    <a class="card-footer-item">Save</a>
    <a class="card-footer-item">Apply</a>
    <a class="card-footer-item">Info</a>
  </footer>
</div>
      </div>
      <br>
      <a href="https://github.com/hamadkh/MachineLearning" class="button is-success is-inverted">
                <span class="icon">
                  <i class="fa fa-github-alt"></i>
                </span>
                <span>Github</span>
              </a>
                  <a href="https://healthplan-predictor.herokuapp.com/" class="button is-success is-inverted">
                <span class="icon">
                  <i class="fa fa-arrow-circle-o-left"></i>
                </span>
                <span>Github</span>
              </a>
          <p class="has-text-centered">
              <a href="#">Hamad</a>
              |
              <a href="#">Matt</a>
			  |
			   <a href="#">Brock</a>
            </p>
  </section>
</body>
</html>
