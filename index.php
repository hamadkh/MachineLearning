<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Eczar|Space+Mono" rel="stylesheet">
<link rel="stylesheet" href="bulma.css">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<title>Hamad Khawaja</title>
</head>
<body>
     <section class="hero is-info is-fullheight">
    <!-- Hero header: will stick at the top -->
    <div class="hero-head">
      <header class="nav">
        <div class="container">
          <div class="nav-left">
            <a href="index.html" class="nav-item">
                <h1>Healtcare Predictor</h1>
            </a><small>&copy 2017</small>
          </div>
          <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
          </span>
          <div class="nav-right nav-menu">
            <a href="index.php" class="nav-item is-active">
              Home
            </a>
          </div>
        </div>
      </header>
    </div>
    <!-- Hero content: will be in the middle -->
    <section class="hero is-fullheight is-info is-bold">
    <div class="hero-body">
      <div class="container">
        <div class="columns is-vcentered">
          <div class="column is-4 is-offset-4">
		  <form action="submit.php" method="post">
            <h1 class="title">
              Enter Your Information
            </h1>
            <div class="box">
              <label class="label">Name</label>
              <p class="control">
                <input class="input" type="text" placeholder="Hamad Khawaja" name="name">
              </p>
              <label class="label">Age</label>
              <p class="control">
                <input class="input" type="text" placeholder="33" name="age">
              </p>
              <label class="label">Gender</label>
              <p class="control">
                <input class="input" type="text" placeholder="Male/Female" name="gender">
              </p>
              <hr>
              <label class="label">State</label>
              <p class="control">
                <input class="input" type="Text" placeholder="CT" name="state">
              </p>
              <label class="label">Diseases</label>
              <p class="control">
                <input class="input" type="text" placeholder="Genral,Dementia,Alzheimer's ..." name="diseases">
              </p>
              <hr>
              <p class="control">
                <button class="button is-primary">Submit</button>
                <button class="button is-default">Cancel</button>
              </p>
            </div>
			</form>
        <a class="button is-success"  type="text" value="Cancer" id="text">Success</a>
        <a class="button is-success">Success</a>

            <p class="has-text-centered">
              <a href="#">Need help?</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-foot">
      <nav class="tabs is-boxed is-fullwidth">
        <div class="container">
          <ul>
            <li class="is-active"><a href="index.php">Overview</a></li>
            <li><a href="plans.html">Plans</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </section>
  </section>
<script>
  $(function () {
    $('#button').on('click', function () {
        var text = $('#text');
        text.val(text.val() + ' after clicking');    
    });
});
</script>
</body>
</html>
