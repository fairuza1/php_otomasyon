

<body>
<form id="form1" name="form1" method="post" action="satis_islem.php?mid=<?php echo $_GET['mid']?>&urnid=<?php echo $_GET['urnid'];?>">
  <table width="800" border="1" align="center">
    <tbody>
      <tr>
        <td>adet giriniz</td>
        <td><input type="text" name="adet" id="textfield"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="satış yap"></td>
      </tr>
    </tbody>
  </table>
</form>
