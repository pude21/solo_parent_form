<div class="container">
    <div class="text-center mb-4">
        <h3>APPLICATION FORM FOR SOLO PARENT</h3>
    </div>
    
    <div class="text-end mb-3">
        <a href="app_form.php"><button class="add-btn">Add New</button></a>
    </div>
    
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "data_connect.php";
                $sql = "SELECT * FROM `solo_parent`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td>
                            <a href="javascript:void(0);" onclick="toggleDetails('<?php echo $row['id']; ?>')">
                                <?php echo $row['fullname']; ?>
                            </a>
                            <div id="details-<?php echo $row['id']; ?>" style="display:none;">
                                <p><strong>Philsys Card Number:</strong> <?php echo $row['philsys_card_number']; ?></p>
                                <p><strong>Date of Birth:</strong> <?php echo $row['date_of_birth']; ?></p>
                                <p><strong>Age:</strong> <?php echo $row['age']; ?></p>
                                <p><strong>Place of Birth:</strong> <?php echo $row['place_of_birth']; ?></p>
                                <p><strong>Sex:</strong> <?php echo $row['sex']; ?></p>
                                <p><strong>Address:</strong> <?php echo $row['address']; ?></p>
                                <p><strong>Educational Attainment:</strong> <?php echo $row['educational_attainment']; ?></p>
                                <p><strong>Civil Status:</strong> <?php echo $row['civil_status']; ?></p>
                                <p><strong>Occupation:</strong> <?php echo $row['occupation']; ?></p>
                                <p><strong>Religion:</strong> <?php echo $row['religion']; ?></p>
                                <p><strong>Company/Agency:</strong> <?php echo $row['company_agency']; ?></p>
                                <p><strong>Monthly Income:</strong> <?php echo $row['monthly_income']; ?></p>
                                <p><strong>Employment Status:</strong> <?php echo $row['employment_status']; ?></p>
                                <p><strong>Contact Number:</strong> <?php echo $row['contact_number']; ?></p>
                                <p><strong>Email Address:</strong> <?php echo $row['email_address']; ?></p>
                                <p><strong>LGBTQ+:</strong> <?php echo $row['lgbtq']; ?></p>
                                <p><strong>Migrant Worker:</strong> <?php echo $row['are_you_a_migrant_worker']; ?></p>
                                <p><strong>Pantawid Beneficiary:</strong> <?php echo $row['pantawid_beneficiary']; ?></p>
                                <p><strong>Indigenous Person:</strong> <?php echo $row['indigenous_person']; ?></p>
                            </div>
                        </td>
                        <td>
                            <a href="edit_form.php?id=<?php echo $row['id'] ?>" class="link-dark">
                                <i class="fa-solid fa-pen-to-square fs-5 me-3"></i>
                            </a>
                            <a href="delete_info.php?id=<?php echo $row['id'] ?>" class="link-dark">
                                <i class="fa-solid fa-trash fs-5"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    function toggleDetails(id) {
        var details = document.getElementById('details-' + id);
        if (details.style.display === "none") {
            details.style.display = "block";
        } else {
            details.style.display = "none";
        }
    }
</script>

<br><br>
