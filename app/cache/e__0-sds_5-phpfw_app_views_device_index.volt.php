<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading head-border">
                Custom Table
            </header>
            <table class="table table-striped custom-table table-hover">
                <thead>
                <tr>
                    <th><i class="fa fa-bookmark-o"></i> Id</th>
                    <th class="hidden-xs"><i class="fa fa-building-o"></i> Name</th>
                    <th><i class="fa fa-bar-chart-o"></i> Description</th>
                    <th class="hidden-xs"><i class="fa fa-cogs"></i> Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($devices as $item) { ?>
                    <tr>
                        <td><a href="#"><?= $item->id ?></a></td>
                        <td class="hidden-xs"><?= $item->name ?></td>
                        <td><?= $item->desc ?></td>
                        <td class="hidden-xs">
                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </section>
        
<div class="row text-center">
    <div class="col-sm-12">
        <?php if ($painginfo['rowcount'] > 0) { ?>
        <ul class="pagination">
            <ul class="pagination">
                <li class="prev"><a class="button" href="<?= $painginfo['currentlink'] ?>&p=<?= ($painginfo['page'] - 1 <= 1 ? 1 : $painginfo['page'] - 1) ?>">Prev</a></li>
                <?php foreach ($painginfo['rangepage'] as $index => $item) { ?>
                    <li class="page-<?= $index + 1 ?> <?= ($item == $painginfo['page'] ? 'active' : '') ?>"><a class="button" href="<?= $painginfo['currentlink'] ?>&p=<?= $item ?>"><?= $item ?></a></li>
                <?php } ?>
                <li class="next"><a class="button" href="<?= $painginfo['currentlink'] ?>&p=<?= ($painginfo['page'] + 1 >= $painginfo['totalpage'] ? $painginfo['totalpage'] : $painginfo['page'] + 1) ?>">Next</a></li>
            </ul>
        </ul>
        <?php } else { ?>
        <p class="text-success m-t-10">Không tìm thấy kết quả nào</p>
        <?php } ?>
    </div>
</div>
    </div>
</div>
