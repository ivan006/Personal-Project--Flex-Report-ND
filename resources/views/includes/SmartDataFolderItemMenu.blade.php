<?php function SmartDataFolderItemMenu($SmartDataID, $SmartDataItemM_ShowActions){ ?>
  <span class="" style="  ">
    <button class="w3-button w3-theme-d1 w3-margin-bottom" type="submit" name="<?php echo $SmartDataID ?>[<?php echo $SmartDataItemM_ShowActions['SelectedSmartDataItem'] ?>]" value="1">
      Update
    </button>
    <button class="w3-button w3-theme-d1 w3-margin-bottom" type="submit" name="Destroy" value="1">
      <del>Delete</del>
    </button>
    <label>
      <input class="f-toggle" type="checkbox" name="checkbox" value="value" style="display:none;" >
      <span class="f-toggle w3-button w3-theme-d1 w3-margin-bottom" >
        Create
      </span>
      <div class="content" style="margin-left:6em;">
        <div class="">
          <input class="g-bor-gre"  style="width:270px" type="text" name="" value="">
          <button style="width:180px" class="w3-button w3-theme-d1 w3-margin-bottom" type="submit" name="Destroy" value="1">
            Folder from scratch
          </button>

        </div>
        <div class="">
          <input class="g-bor-gre"  style="width:270px" type="file" name="zip_file" />

          <button style="width:180px" class="w3-button w3-theme-d1 w3-margin-bottom" type="submit" name="Destroy" value="1">
            Folder from zip upload
          </button>

        </div>
        <div class="">
          <input class="g-bor-gre"  style="width:270px" type="text" name="" value="">
          <button style="width:180px" class="w3-button w3-theme-d1 w3-margin-bottom" type="submit" name="Destroy" value="1">
            File from scratch
          </button>

        </div>
        <div class="">
          <input class="g-bor-gre"  style="width:270px" type="file" name="zip_file" />

          <button style="width:180px" class="w3-button w3-theme-d1 w3-margin-bottom" type="submit" name="Destroy" value="1">
            File from upload
          </button>

        </div>
      </div>
    </label>
    <style media="screen">
    /* more stuf */
      .f-toggle ~ .content{display:none;}
      .f-toggle:checked ~ .content{display:block;}
    /* more stuf */
    </style>


  </span>
<?php } ?>
