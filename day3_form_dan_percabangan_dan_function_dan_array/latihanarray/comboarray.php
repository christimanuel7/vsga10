<?php


$cabang =  array("Jakarta", "Depok", "Bogor");

array_multisort($cabang, SORT_ASC);

?>

<html>
<head>
<title>combo array</title>
</head>
<body>
<form>
<div>
<select id="cabang" name="cabang">
						<option value="">- Pilih Cabang -</option>
						<?php
						
						foreach ($cabang as $ap) {
							echo "<option value='" . $ap . "'>" . $ap . "</option>";
						}
						?>
					</select>
					</div>
				</form>


</body>


</html>