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
      1010 => array('1', '/index.html', 'Index Page', 'http://${domain}/')
    , 1020 => array('2', '/2-joblist.html', 'Job List1 Page', 'http://${domain}/search')
    , 1030 => array('3', '/3-job-description.html', 'Job Description Page', 'http://${domain}/job/${jobTitle}/${jobOrderNumber}')
    , 1040 => array('4', '/4-jobcart.html', 'Job Cart Page', 'http://$https://${domain}/jobcart')
    , 1050 => array('5', '/5-signup-new-member.html', 'Sign Up (new member) Page', 'https://${domain}/member/signup')
    , 1060 => array('6', '/6-application-form.html', 'Application Form Page', 'https://${domain}/member/signup')
    , 1070 => array('7', '/7-login.html', 'Login Page', 'Hosted by Avature')
    , 1071 => array('7a', '/7a-login-with-success-msg.html', 'Login Page', 'Hosted by Avature')
    , 1080 => array('8n', '/8-new-desktop-review-profile.html', 'New Avature Review Profile', 'Hosted by Avature')
    , 1081 => array('8e', '/8-existing-desktop-review-profile.html', 'Existing Avature Review Profile', 'Hosted by Avature')
    , 1082 => array('8nt', '/8-new-tablet-review-profile.html', 'TAB New Avature Review Profile', 'Hosted by Avature')
    , 1083 => array('8et', '/8-existing-tablet-review-profile.html', 'TAB Existing Avature Review Profile', 'Hosted by Avature')
    , 1090 => array('9', '/9-confirmation-page.html', 'Avature Application Confirm Page', 'Hosted by Avature')
    , 1100 => array('10', '/10-change-password.html', 'Change password Page', 'Hosted by Avature')
    , 1120 => array('12', '/12-forgot-password.html', 'Forgot your Password Page', 'Hosted by Avature')
    , 1130 => array('13', '/13-new-password.html', 'Success reset password Page', 'Hosted by Avature')
    , 1140 => array('14', '/14-signup-talentcomm.html', 'Sign up talent community Page', 'https://${domain}/talentcommunity/signup')
    , 1016 => array('16', '/16-new-jobs.html', 'Job List1 New Jobs Page', 'http://${domain}/search')
    , 1017 => array('17', '/17-featured-jobs.html', 'Job List1 Featured Jobs Page', 'http://${domain}/search')
    , 1180 => array('18', '/18-for-employers.html', 'For Employers Page', 'http://${domain}/employers')
    , 1200 => array('20', '/20-contact-us.html', 'Contact Us Page', 'https://${domain}/contact')

    , 2010 => array('1', '/1-mb-index.html', 'MB Index Page', 'http://${domain}/')
    , 2020 => array('2', '/2-mb-joblist.html', 'MB Job List1 Page', 'http://${domain}/search')
    , 2030 => array('3', '/3-mb-jobdescription.html', 'MB Job Description Page', 'http://${domain}/job/${jobTitle}/${jobOrderNumber}')
    , 2031 => array('3-1', '/3-1-mb-job-social-sharing.html', 'MB Job Description Page', 'http://${domain}/job/${jobTitle}/${jobOrderNumber}')
    , 2040 => array('4', '/4-mb-jobcart.html', 'MB Job Cart Page', 'http://$https://${domain}/jobcart')
    , 2050 => array('5', '/5-mb-signup.html', 'MB Sign Up (new member) Page', 'https://${domain}/member/signup')
    , 2060 => array('6', '/6-mb-application-form.html', 'MB Application Form Page', 'https://${domain}/member/signup')
    , 2070 => array('7', '/7-mb-login-page.html', 'MB Login Page', 'Hosted by Avature')
    , 2080 => array('8', '/8-mb-review-page.html', 'MB Avature Review Profile', 'Hosted by Avature')
    , 2090 => array('9', '/9-mb-confirmation.html', 'MB Avature Application Confirm Page', 'Hosted by Avature')
    , 2100 => array('10', '/10-mb-change-password.html', 'MB Change password Page', 'Hosted by Avature')
    , 2120 => array('12', '/12-mb-forgot-password.html', 'MB Forgot your Password Page', 'Hosted by Avature')
    , 2130 => array('13', '/13-mb-new-password.html', 'MB Success reset password Page', 'Hosted by Avature')
    , 2140 => array('14', '/14-mb-signup-talentcomm.html', 'MB Sign up talent community Page', 'https://${domain}/talentcommunity/signup')
    , 2150 => array('15', '/15-mb-success-join%20talent%20comm.html', 'MB Sign up talent community Success Join Page', 'https://${domain}/talentcommunity/signup')
    , 2016 => array('16', '/16-mb-new-jobs.html', 'MB Job List1 New Jobs Page', 'http://${domain}/search')
    , 2017 => array('17', '/17-mb-featured-jobs.html', 'MB Job List1 Featured Jobs Page', 'http://${domain}/search')
    , 2180 => array('18', '/18-for-employers.html', 'MB For Employers Page', 'http://${domain}/employers')
    , 2200 => array('20', '/20-mb-contact-us.html', 'MB Contact Us Page', 'https://${domain}/contact')

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
        </tbody>
      </table>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
