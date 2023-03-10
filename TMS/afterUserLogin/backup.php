
        




            <?php
            include '../_dbconnect.php';
            $id = $_SESSION['empUserId'];
            $sqlForEditableOrNot = "select status from activity where id = '$id'";
            $editOrNotQuery = mysqli_query($conn, $sqlForEditableOrNot);
            $fatchEditableOrNot = mysqli_fetch_assoc($editOrNotQuery);
            $rowsInEditableOrNot = mysqli_num_rows($editOrNotQuery);

            if ($fatchEditableOrNot['status'] == 0) {
                echo 'dummy';
            }

            ?>