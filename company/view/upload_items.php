<div id="add_bank" class="displays">
    <div class="info"></div>
    <div class="add_user_form" style="width:50%; margin:20px 0">
        <h3 style="background:var(--tertiaryColor)">Upload items</h3>
        <form method="POST"  id="addCatForm" action="../controller/upload_items.php" enctype="multipart/form-data">
            <div class="inputs">
                <div class="data">
                    <a href="javascript:void(0)" style="background:silver;color:#000; border-radius:10px; padding:10px; border:1px solid #fff; box-shadow:1px 1px 1px #000"onclick="downloadTemplate()">Download Template <i class="fas fa-download"></i></a>
                </div>
            </div>
            <div class="inputs">
                <div class="data">
                    <label for="items">Upload file</label>
                    <input type="file" name="items" id="items" style="background:var(--tertiaryColor); color:#fff">
                </div>
                
                <button type="submit">Upload <i class="fas fa-upload"></i></button>
            </div>
        </form>
    </div>
</div>
