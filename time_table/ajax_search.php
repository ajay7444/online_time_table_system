<?php

require("configure.php");
$dept_id = ($_REQUEST["dept_id"] <> "") ? trim($_REQUEST["dept_id"]) : "";
if ($dept_id <> "") {
    $sql = "SELECT * FROM course WHERE dept_id = :cid ORDER BY c_name";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":cid", trim($dept_id));
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo($ex->getMessage());
    }
    if (count($results) > 0) {
        ?>
       
            
                <option value="">Select Course</option>
                <?php foreach ($results as $rs) { ?>
                    <option value="<?php echo $rs["c_id"]; ?>"><?php echo $rs["c_name"]; ?></option>
                <?php } ?>
           
        <?php
    }
	else
	{
		echo '<option value="" disabled selected>Select Course</option>';
	}
}
?>