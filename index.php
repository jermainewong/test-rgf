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
    , 1021 => array('2e', '/empty-joblist.html', 'Empty Job List1 Page', 'https://${domain}/search')
    , 1030 => array('3', '/3-job-description.html', 'Job Description Page', 'http://${domain}/job/${jobTitle}/${jobOrderNumber}')
    , 1031 => array('3a', '/3-ava-job-description.html', 'Job Description Page', 'http://${domain}/job/${jobTitle}/${jobOrderNumber}')
    , 1040 => array('4', '/4-jobcart.html', 'Job Cart Page', 'http://$https://${domain}/jobcart')
    , 1041 => array('4e', '/empty-jobcart.html', 'Empty Job Cart Page', 'https://${domain}/jobcart')
    , 1050 => array('5', '/5-signup-new-member.html', 'Sign Up (new member) Page', 'https://${domain}/member/signup')
    , 1060 => array('6', '/6-application-form.html', 'Application Form Page', 'https://${domain}/member/signup')
    , 1061 => array('6a', '/6a-application-form.html', 'Application Form Page', 'https://${domain}/member/signup')
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
    , 1160 => array('16', '/16-new-jobs.html', 'Job List1 New Jobs Page', 'http://${domain}/search')
    , 1170 => array('17', '/17-featured-jobs.html', 'Job List1 Featured Jobs Page', 'http://${domain}/search')
    , 1180 => array('18', '/18-for-employers.html', 'For Employers Page', 'http://${domain}/employers')
    , 1181 => array('18a', '/complete-for-employers.html', 'For Employers Page', 'http://${domain}/employers')
    , 1200 => array('20', '/20-contact-us.html', 'Contact Us Page', 'https://${domain}/contact')
    , 1201 => array('20a', '/complete-contact-us.html', 'Complete Contact Us Page', 'https://${domain}/contact')
    , 1210 => array('21', '/privacy-policy.html', 'Privacy Policy Page', 'https://${domain}/privacypolicy')
    , 1220 => array('22', '/terms-and-conditions.html', 'Terms And Conditions Page', 'https://${domain}/termsandcondition')
    , 1300 => array('E1', '/error-page.html', 'General Error Page', 'https://${domain}/')
    , 1310 => array('E2', '/error-system-maintenance.html', 'System Maintenance Error Page', 'https://${domain}/')
    , 1320 => array('E3', '/error-expired-job.html', 'System Maintenance Error Page', 'https://${domain}/')

    , 2010 => array('1', '/1-mb-index.html', 'MB Index Page', 'http://${domain}/')
    , 2020 => array('2', '/2-mb-joblist.html', 'MB Job List1 Page', 'http://${domain}/search')
    , 2021 => array('2e', '/mb-empty-joblist.html', 'MB Empty Job List1 Page', 'https://${domain}/search')
    , 2030 => array('3', '/3-mb-jobdescription.html', 'MB Job Description Page', 'http://${domain}/job/${jobTitle}/${jobOrderNumber}')
    , 2031 => array('3-1', '/3-1-mb-job-social-sharing.html', 'MB Job Description Page', 'http://${domain}/job/${jobTitle}/${jobOrderNumber}')
    , 2032 => array('3a', '/3-mb-ava-jobdescription.html', 'MB Job Description Page', 'http://${domain}/job/${jobTitle}/${jobOrderNumber}')
    , 2040 => array('4', '/4-mb-jobcart.html', 'MB Job Cart Page', 'http://$https://${domain}/jobcart')
    , 2041 => array('4e', '/mb-empty-jobcart.html', 'MB Empty Job Cart Page', 'https://${domain}/jobcart')
    , 2050 => array('5', '/5-mb-signup.html', 'MB Sign Up (new member) Page', 'https://${domain}/member/signup')
    , 2060 => array('6', '/6-mb-application-form.html', 'MB Application Form Page', 'https://${domain}/member/signup')
    , 2070 => array('7', '/7-mb-login-page.html', 'MB Login Page', 'Hosted by Avature')
    , 2080 => array('8n', '/8-mb-new-review-page.html', 'MB New Avature Review Profile', 'Hosted by Avature')
    , 2081 => array('8e', '/8-mb-existing-review-page.html', 'MB Existing Avature Review Profile', 'Hosted by Avature')
    , 2090 => array('9', '/9-mb-confirmation.html', 'MB Avature Application Confirm Page', 'Hosted by Avature')
    , 2100 => array('10', '/10-mb-change-password.html', 'MB Change password Page', 'Hosted by Avature')
    , 2110 => array('11', '/11-mb-success-change-password.html', 'MB Change password Page', 'Hosted by Avature')
    , 2120 => array('12', '/12-mb-forgot-password.html', 'MB Forgot your Password Page', 'Hosted by Avature')
    , 2130 => array('13', '/13-mb-new-password.html', 'MB Success reset password Page', 'Hosted by Avature')
    , 2140 => array('14', '/14-mb-signup-talentcomm.html', 'MB Sign up talent community Page', 'https://${domain}/talentcommunity/signup')
    , 2150 => array('15', '/15-mb-success-join-talent-comm.html', 'MB Sign up talent community Success Join Page', 'https://${domain}/talentcommunity/signup')
    , 2160 => array('16', '/16-mb-new-jobs.html', 'MB Job List1 New Jobs Page', 'http://${domain}/search')
    , 2170 => array('17', '/17-mb-featured-jobs.html', 'MB Job List1 Featured Jobs Page', 'http://${domain}/search')
    , 2180 => array('18', '/18-mb-for-employers.html', 'MB For Employers Page', 'http://${domain}/employers')
    , 2181 => array('18a', '/mb-complete-for-employers.html', 'MB For Employers Page', 'http://${domain}/employers')
    , 2200 => array('20', '/20-mb-contact-us.html', 'MB Contact Us Page', 'https://${domain}/contact')
    , 2201 => array('20a', '/mb-complete-contact-us.html', 'MB Complete Contact Us Page', 'https://${domain}/contact')
    , 2210 => array('21', '/mb-privacy-policy.html', 'MB Privacy Policy Page', 'https://${domain}/privacypolicy')
    , 2220 => array('22', '/mb-terms-and-conditions.html', 'MB Terms And Conditions Page', 'https://${domain}/termsandcondition')
    , 2300 => array('E1', '/mb-error-page.html', 'MB General Error Page', 'https://${domain}/')
    , 2310 => array('E2', '/mb-error-system-maintenance.html', 'MB System Maintenance Error Page', 'https://${domain}/')
    , 2320 => array('E3', '/mb-error-expired-job.html', 'MB System Maintenance Error Page', 'https://${domain}/')

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
