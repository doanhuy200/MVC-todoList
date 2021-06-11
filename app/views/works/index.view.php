<?php require "app/views/layouts/header.php" ?>
    <h1>All user</h1>

    <form method="post" action="/works/delete" class="form-delete-work">
        <input type="hidden" name="id" class="data-id" />
    </form>

    <h1>Submit Work Name</h1>

    <form method="post" action="/works/insert" class="text-center row col-sm-8">
        <div class="form-group col-sm-6">
            <input class="form-control" type="text" name="name" placeholder="Work Name...">
        </div>
        <div class="form-group col-sm-6">
            <input class="form-control" type="datetime-local" name="start_date" placeholder="Starting Date...">
        </div>
        <div class="form-group col-sm-6">
            <input class="form-control" type="datetime-local" name="end_date" placeholder="Ending Date...">
        </div>
        <div class="form-group col-sm-6">
            <select name="status" class="form-control">
                <?php foreach (\app\models\Work::ARRAY_STATUS as $key => $status) :?>
                    <option value="<?php echo $key ?>"><?php echo $status ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group col-sm-12 text-right">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <div class="form-group text-center container-fluid">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Work Name</th>
                    <th scope="col">Starting Date</th>
                    <th scope="col">Ending Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($works as $key => $work): ?>
                <tr>
                    <th scope="row"><?= $key + 1 ?></th>
                    <td><a href="/works/show?id=<?= $work->id ?>"><?= $work->name; ?></a></td>
                    <td><?= $work->start_date ?></td>
                    <td><?= $work->end_date  ?></td>
                    <td><?= \app\models\Work::ARRAY_STATUS[$work->status]  ?></td>
                    <td>
                        <button class="cmdDelete btn btn-danger"
                                data-id="<?= $work->id ?>"
                                data-action="<?= '/works/delete' ?>"
                        >&#10005;</button></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        $(".cmdDelete").click(function(){
            var id = $(this).attr('data-id');
            var action = $(this).attr('data-action');
            var formClass = ".form-delete-work";
            $('.data-id').val(id);
            $(formClass).attr(action);
            $(formClass).submit();
        });
    </script>
<?php require "app/views/layouts/footer.php" ?>