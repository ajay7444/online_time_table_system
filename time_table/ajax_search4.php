<?php

require("configure.php");
$sub_class = ($_REQUEST["sub_class"] <> "") ? trim($_REQUEST["sub_class"]) : "";
if ($sub_class <> "") {
    $sql = "SELECT * FROM subject WHERE sub_class = :sid ORDER BY sub_name";
    try {
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":sid", trim($sub_class));
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo($ex->getMessage());
    }
     if (count($results) > 0) {
        ?>
       
                <option value="">Select Subject</option>
                <?php foreach ($results as $rs) { ?>
                    <option value="<?php echo $rs["sub_id"]; ?>"><?php echo $rs["sub_name"]; ?></option>
                <?php } ?>
            
        <?php
    }
	else
	{
		echo '<option value="" disabled selected>Select Subject</option>';
	}
}
?>