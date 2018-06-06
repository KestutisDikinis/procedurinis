<?php include_once '/Applications/MAMP/htdocs/Projektas/header.php'; ?>
<div class="register-ev">
    <form class="form-horizontal" action="submin.cal.inc.php" method="post">
        <fieldset>
            <legend>Register your event</legend>

            <div class="form-group">
                <label class="col-md-4 control-label" for="pavadinimas">Event Name</label>
                <div class="col-md-4">
                    <input id="event_name" name="pavadinimas" type="text" placeholder="Event Name" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="data">Start Date</label>
                <div class="col-md-4">
                    <input id="textinput" name="data" type="text" placeholder="DD/MM/YYYY" class="form-control input-md">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="vieta">Place</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="textarea" name="vieta"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="kategorija">Category</label>
                <div class="col-md-4">
                    <select id="selectbasic" name="kategorija" class="form-control">
                        <option value="MTB">MTB</option>
                        <option value="ROAD">ROAD</option>
                        <option value="TRACK">TRACK</option>
                        <option value="CYCLO-CROSS">CYCLO-CROSS</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="info">Description</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="textarea" name="info"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="diff">Difficulty</label>
                <div class="col-md-4">
                    <select id="selectbasic" name="diff" class="form-control">
                        <option value="“Cappuccino”(comfortable)">“Cappuccino”(comfortable)</option>
                        <option value="“Due espressi”(challenge)">“Due espressi”(challenge)</option>
                        <option value="“Tre espressi”(Strong)">“Tre espressi”(Strong)</option>
                        <option value="“Quattro espressi”(To the limits">“Quattro espressi”(To the limits)</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="kontaktai">Race Web-page</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="textarea" name="kontaktai"></textarea>
                </div>
            </div>
            <input type="submit">
        </fieldset>
    </form>
</div>
<?php include_once '/Applications/MAMP/htdocs/Projektas/footer.php';?>