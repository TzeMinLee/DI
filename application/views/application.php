<div class="container">
    <br>
    <h1>Apply Residency</h1>
    <br>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#resident">Resident</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#heir">Heir</a>
        </li>
    </ul>
    <!-- Tab panes -->
    <?php $attributes = array('id'=>'login_form', 'class'=>'form-horizontal'); ?>
    <?php echo form_open('Apply/submit', $attributes); ?>
        <div class="tab-content">
            <div id="resident" class="container tab-pane active"><br>
                <div class="form-group">
                    <label for="rname" class="col-sm-3">Resident Name</label>
                    <div class="col-sm-9">
                        <input name="rn" type="text" class="form-control" id="rn" value="<?php echo set_value('residentname'); ?>" placeholder="Resident Name" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ric" class="col-sm-3">Resident IC</label>
                    <div class="col-sm-9">
                        <input name="ric" type="text" class="form-control" id="ric" value="<?php echo set_value('residentIC'); ?>" placeholder="Resident IC" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="rage" class="col-sm-3">Age</label>
                    <div class="col-sm-9">
                        <input name="rage" type="text" class="form-control" id="rage" <?php echo set_value('residentAge'); ?> placeholder="Resident Age" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="rage" class="col-sm-3">Height</label>
                    <div class="col-sm-9">
                        <input name="rheight" type="text" class="form-control" id="rheight" value="<?php echo set_value('residentHeight'); ?>" placeholder="Resident Height" required> cm
                    </div>
                </div>
                <div class="form-group">
                    <label for="rweight" class="col-sm-3">Weight</label>
                    <div class="col-sm-9">
                        <input name="rweight" type="text" class="form-control" id="rweight" value="<?php echo set_value('residentWeight'); ?>" placeholder="Resident Weight" required> kg
                    </div>
                </div>
                <div class="form-group">
                    <label for="rhealthcondition" class="control-label col-sm-3">Health Conditions</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="text" class="form-control" name="rhealthcondition" id="rhealthcondition" placeholder="Type health condition here and then press Add button >>">
                            <span class="input-group-btn">
                                <button class="btn btn-dark" type="button" id="btnAdd">Add</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="list"></div>
            </div>
            <div id="heir" class="container tab-pane fade"><br>
                <div class="form-group">
                    <label for="hname" class="col-sm-3">Heir Name</label>
                    <div class="col-sm-9">
                        <input name="hn" type="text" class="form-control" id="hn" value="<?php echo set_value('heirname'); ?>" placeholder="Heir Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ric" class="col-sm-3">Heir IC</label>
                    <div class="col-sm-9">
                        <input name="hic" type="text" class="form-control" id="hic" value="<?php echo set_value('heirIC'); ?>" placeholder="Heir IC" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="hage" class="col-sm-3">Heir Age</label>
                    <div class="col-sm-9">
                        <input name="hage" type="text" class="form-control" id="hage" value="<?php echo set_value('heirage'); ?>" placeholder="Heir Age" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="haddress" class="col-sm-3">Address</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="haddress" id="haddress" cols="30" rows="5" value="<?php echo set_value('address'); ?>" placeholder="Heir Address" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="hocc" class="col-sm-3">Occupation</label>
                    <div class="col-sm-9">
                        <input name="hocc" type="text" class="form-control" id="hocc" value="<?php echo set_value('occupation'); ?>" placeholder="Heir Occupation" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="hemail" class="col-sm-3">Email</label>
                    <div class="col-sm-9">
                        <input name="hemail" type="text" class="form-control" id="hemail" value="<?php echo set_value('email'); ?>" placeholder="example@email.com" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button class="btn" type="submit" id="submitbutton">Submit</button>
                        <button class="btn" type="reset">Clear</button>
                    </div>
                </div>
            </div>
        </div>
    <?php echo form_close(); ?>
</div>
<script>
    var conditions = [];
    var counter = 1;

    btnAdd.onclick = function addCondition()
    {
        if (rhealthcondition.value == "")
        {
            alert("Please type a health condition");
            rhealthcondition.focus();
        }
        else
        {
            conditions.push(rhealthcondition.value);
            list.innerHTML = "";
            counter = 1;
            conditions.forEach(printArrayItem);
        }
    }

    submitbutton.onclick = function changeValue()
    {
        rhealthcondition.value = conditions.toString();
    }

    function printArrayItem(item, index)
    {
        list.innerHTML += "<div class='listitem col-sm-7'>" + counter++ + ". " + item + "</div>";
    }
</script>
<style>
    .listitem
    {
        font-style: Helvetica Neue;
        margin-left: 2rem;
        border: 1px solid;
        border-radius: 3px;
        border-color: #ccc;
    }
</style>