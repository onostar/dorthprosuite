<?php
    session_start();
    include "../classes/dbh.php";
    include "../classes/select.php";

    //get company details
    $get_comp = new selects();
    $rows = $get_comp->fetch_details_cond("companies", "company_id", $_SESSION['company_id']);
    foreach($rows as $row){
?>
<style>
    .comps_det{
        display:flex;
        align-items:center;
    }
    .comps_det label{
        font-size:.8rem!important;
        color:green!important;
    }
    .comps_det input{
        border:none!important;
        width:auto!important;
    }
    label{
        font-size:.8rem!important;

    }
</style>
<div id="manage_profile" class="displays">
    <div class="info"></div>
    <div class="add_user_form" style="width:50%; margin:10px">
        <h3 style="background:var(--otherColor)">Manage company details</h3>
        <!-- <form method="POST" id="addUserForm"> -->
        <form action="../controller/update_company.php" method="POST" enctype="multipart/form-data" >
            <div class="inputs">
                <p style="color:var(--secondaryColor); text-decoration:underline"><i class="fas fa-link"></i> www.dorthpro.com/company/index.php</p>
                <div class="data comps_det">
                    <label for="">Registered:</label>
                    <input type="text" value="<?php echo date("d-M-Y", strtotime($row->date_created))?>" readonly>
                </div>
                <div class="data comps_det">
                    <label for="">Due Date:</label>
                    <input type="text" value="<?php echo date("d-M-Y", strtotime($row->due_date))?>" readonly>
                </div>
                <div class="data">
                    <label for="logo">Upload Company logo</label>
                    <div class="comp_logo">
                        <img src="<?php echo '../images/'.$row->logo?>" alt="Company logo">
                    </div>
                    <input type="file" name="logo" id="logo" required>
                </div>
                <div class="data">
                    <label for="company">Company name</label>
                    <input type="text" name="company" id="company" value="<?php echo $row->company?>" required>
                </div>
            </div>
            <div class="inputs">
                <div class="data">
                    <button type="submit" id="update_comp" name="update_comp">Update <i class="fas fa-save"></i></button>
                </div>
            </div>
        </section>    
    </div>
</div>
<?php }?>