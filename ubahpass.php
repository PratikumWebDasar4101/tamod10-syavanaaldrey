<?php
   session_start();
   $nim = $_SESSION["nim"];
   $username = $_SESSION["username"]
?>

<title>Ubah Password</title>
<thead>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</thead>
<div align='center'>
  <form action="passpros.php" method="post">
    <table>
      <tbody>
        <tr>
          <td colspan="2" align="center">
            <h1>Ubah Password</h1>
          </td>
        <tr>
          <td>Username</td>
          <td> : <input type="text" value="<?php echo $username ?>" disabled>
                <input type="hidden" name="username" value="<?php echo $username ?>">
          </td>
        <tr>
          <td>Password</td>
          <td> : <input name="password" type="password">
          </td>
        <tr>
          <td>NIM</td>
          <td> : <input type="text" value="<?php echo $nim ?>" disabled>
                <input type="hidden" name="nim" value="<?php echo $nim ?>">
          </td>
        <tr>
          <td colspan="2" align="right">
            <input value="Ubah" type="submit">
          </td>
        </tr>
      </tbody>
    </table>
  </form>
</div>