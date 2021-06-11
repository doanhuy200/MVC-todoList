<?php require "app/views/layouts/header.php" ?>

<h2>Work #<?= $_GET['id'] ?></h2>

<form method="POST" action="/works/edit" class="form-group row text-center col-sm-8">
    <input type="hidden" name="id" value="<?php echo $work->id ?>">
    <div class="form-group col-sm-12">
        <input class="form-control" type="text" name="name" value="<?php echo $work->name ?>" placeholder="Work Name...">
    </div>
    <div class="form-group col-sm-12">
        <input class="form-control" type="datetime-local" name="start_date"
               value="<?php echo date_format(new DateTime($work->start_date), 'Y-m-d\TH:i') ?>" placeholder="Starting Date...">
    </div>
    <div class="form-group col-sm-12">
        <input class="form-control" type="datetime-local" name="end_date"
               value="<?php echo date_format(new DateTime($work->end_date), 'Y-m-d\TH:i') ?>" placeholder="Ending Date...">
    </div>
    <div class="form-group col-sm-12">
        <select name="status" class="form-control">
            <?php foreach (\app\models\Work::ARRAY_STATUS as $key => $status) :?>
                <option value="<?php echo $key ?>" <?= ($key == $work->status) ? 'selected' : '' ?>><?php echo $status ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>


<?php require "app/views/layouts/footer.php" ?>

