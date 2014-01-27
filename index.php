<!DOCTYPE html>
<html>
  <head>
    <title>Index Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Index Page</h1>

    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">pages</div>

      <!-- Table -->
<?php
  $var = array(
    1 => array(1, '/index.html', 'Index Page', 'http://${domain}/')
    , 2 => array(1, '/index.html', 'Index Page', 'http://${domain}/')
  );
?>
      <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>url</th>
          </tr>
        </thead>
        <tbody>
<?php foreach($var as $id => $row) { ?>
          <tr>
            <td><?php echo $row[0] ?></td>
            <td><a href="<?php echo $row[1] ?>"><?php echo $row[2] ?></a></td>
            <td><?php echo $row[3] ?></td>
          </tr>
<?php } ?>
          <tr>
            <td>2</td>
            <td><a href="/2-joblist.html">Job List1 Page</a></td>
            <td>http://${domain}/search</td>
          </tr>
          <tr>
            <td>3</td>
            <td><a href="/3-job-description.html">Job Description Page</a></td>
            <td>http://${domain}/job/${jobTitle}/${jobOrderNumber}</td>
          </tr>
          <tr>
            <td>4</td>
            <td><a href="/4-jobcart.html">Job Cart Page</a></td>
            <td>https://${domain}/jobcart</td>
          </tr>
          <tr>
            <td>5</td>
            <td><a href="/5-signup-new-member.html">Sign Up (new member) Page</a></td>
            <td>https://${domain}/member/signup</td>
          </tr>
          <tr>
            <td>6</td>
            <td><a href="/6-application-form.html">Application Form Page</a></td>
            <td>https://${domain}/member/applicationform</td>
          </tr>
          <tr>
            <td>7</td>
            <td><a href="/7-login.html">Login Page</a></td>
            <td>Hosted by Avature</td>
          </tr>
          <tr>
            <td>7a</td>
            <td><a href="/7a-login-with-success-msg.html">Login Page</a></td>
            <td>Hosted by Avature</td>
          </tr>
          <tr>
            <td>8</td>
            <td><a href="/8-review-profile.html">Avature Review Profile</a></td>
            <td>Hosted by Avature</td>
          </tr>
          <tr>
            <td>8a</td>
            <td><a href="/8a-review-profile.html">Avature Review Profile</a></td>
            <td>Hosted by Avature</td>
          </tr>
          <tr>
            <td>9</td>
            <td><a href="/9-confirmation-page.html">Avature Application Confirm Page</a></td>
            <td>Hosted by Avature</td>
          </tr>
          <tr>
            <td>10</td>
            <td><a href="/10-change-password.html">Change password Page</a></td>
            <td>Hosted by Avature</td>
          </tr>
          <tr>
            <td>12</td>
            <td><a href="/12-forgot-password.html">Forgot your Password  Page</a></td>
            <td>Hosted by Avature</td>
          </tr>
          <tr>
            <td>13</td>
            <td><a href="/13-new-password.html">Success reset password Page</a></td>
            <td>Hosted by Avature</td>
          </tr>
          <tr>
            <td>14</td>
            <td><a href="/14-signup-talentcomm.html">Sign up talent community Page</a></td>
            <td>https://${domain}/talentcommunity/signup</td>
          </tr>
          <tr>
            <td>19</td>
            <td><a href="/19-for-employers.html">For Employers Page</a></td>
            <td>http://${domain}/employers</td>
          </tr>
          <tr>
            <td>21</td>
            <td><a href="/21-contact-us.html">Contact Us Page</a></td>
            <td>https://${domain}/contact</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
