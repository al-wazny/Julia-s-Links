<?php function process(string $collapseId, string $headingId, string $number, string $title, string $description) { ?>
    <div class="process" id="<?= $headingId ?>">
        <div data-toggle="collapse" data-target="#<?= $collapseId ?>" aria-expanded="false" aria-controls="<?= $collapseId ?>">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column flex-md-row align-items-center mr-2">
                    <div class="process-step mr-auto mr-md-2"><?= $number ?></div>
                    <h4 class="process-title m-0"><?= $title ?></h4>
                </div>
                <div class="toggle-collapse d-flex align-items-center">
                    <span class="fa"></span>
                </div>
            </div>
            <div class="collapse" id="<?= $collapseId ?>" aria-labelledby="<?= $headingId ?>" data-parent="#work-process-container">
                <hr>
                <div class="process-description">
                    <p><?= $description ?></p>
                </div>
            </div>
        </div>
    </div>
<?php } ?>