<?php

require("configure.php");
$res = ($_REQUEST["t_dept"] <> "") ? trim($_REQUEST["t_dept"]) : "";
$result_explode = explode('|', $res);
$t_dept = $result_explode[1];
if ($t_dept <> "") {
    $sql = "SELECT * FROM teacher WHERE t_dept = :sid ORDER BY t_name";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":sid", trim($t_dept));
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo($ex->getMessage());
    }
     if (count($results) > 0) {
        ?>
       
                <option value="">Select Subject</option>
                <?php foreach ($results as $rs) { ?>
                    <option value="<?php echo $rs["t_id"]; ?>"><?php echo $rs["t_name"]; ?></option>
                <?php } ?>
            
        <?php
    }
	else
	{
		echo '<option value="" disabled selected>Select Subject</option>';
	}
}
?>