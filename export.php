<?PHP
  // Original PHP code by Chirp Internet: www.chirp.com.au
  $conn=mysqli_connect("localhost","root","");
  $sel=mysqli_select_db($conn,"mawanda");

  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }  // Please acknowledge use of this code by including this header.


  // filename for download
  $filename = "Student_Results" . date('m/d/Y') . ".xlsx";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");

  $flag = false;
  $result = mysqli_query($conn,"SELECT * FROM advanced_level ORDER BY studendid") or die('Query failed!');
  
  while(false !== ($row = mysqli_fetch_assoc($result))) {
    if(!$flag) {
      // display field/column names as first row
      echo implode("\t", array_keys($row)) . "\r\n";
      $flag = true;
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    echo implode("\t", array_values($row)) . "\r\n";
  }
  exit;
?>