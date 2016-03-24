<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <table>
        <tr>
          <td>First Name:</td>
          <td><?= $this->session->userdata('first_name') ?></td>
        </tr>
        <tr>
          <td>Last Name:</td>
          <td><?= $this->session->userdata('last_name') ?></td>
        </tr>
        <tr>
          <td>Email Address:</td>
          <td><?= $this->session->userdata('email_address') ?></td>
        </tr>

  </table>

  <a href=""><button action="Main/logout">Log Out</button></a>
</body>
</html>