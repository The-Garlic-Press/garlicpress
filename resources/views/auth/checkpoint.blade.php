<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css" integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous" />
  <meta name="robots" content="NOINDEX,NOFOLLOW">
  <style type="text/css">
    html,body {
      font-family: 'Open Sans', serif;
    }
    .hero.is-info {
      background: #02AAB0;
      background: -webkit-linear-gradient(to right, #00CDAC, #02AAB0);
      background: linear-gradient(to right, #00CDAC, #02AAB0);
    }
    .hero .nav, .hero.is-success .nav {
      -webkit-box-shadow: none;
      box-shadow: none;
    }
    .hero .subtitle {
      padding: 3rem 0;
      line-height: 1.5;
    }
  </style>
</head>
<body>
  <section class="hero is-info is-fullheight">

    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="column is-6 is-offset-3">
          <h1 class="title">
            Demo Login
          </h1>
          <div class="box">
            <form method="post">
              {{csrf_field()}}
              <div class="field is-grouped">
                <p class="control is-expanded">
                  <input class="input" type="password" name="password" placeholder="Enter the password">
                </p>
                <p class="control">
                  <button type="submit" class="button is-info">
                    Login
                  </button>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </section>
</body>
</html>