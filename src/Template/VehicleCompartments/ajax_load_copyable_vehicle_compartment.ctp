<?php if($copyable_vehicle_compartments) { ?>
    <select id="selected_compartment" name="selected_compartment" class="form-control" style="width:100%; display:inline-flex">
        <option value="">- Select Compartment -</option>
        <?php foreach($copyable_vehicle_compartments as $cvc) { ?>
            <option value="<?= $cvc->id; ?>"><?= $cvc->name; ?></option>
        <?php } ?>
    </select>
<?php }else { ?>
    <select id="selected_compartment" name="selected_compartment" class="form-control" style="width:20%; display:inline-flex">
        <option value="">- Select Compartment -</option>
    </select>
<?php } ?>