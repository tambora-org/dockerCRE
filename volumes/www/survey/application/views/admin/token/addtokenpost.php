<?php
/**
 * Result of a token post action
 */
?>

<div class='side-body <?php echo getSideBodyClass(false); ?>'>
    <div class="row">
        <div class="col-sm-12 content-right">

            <!-- Success -->
            <?php if ($success): ?>
                <div class="jumbotron message-box">
                    <h2><?php eT("Adding survey participant entry..."); ?></h2>
                    <p class="lead text-success"><?php eT("Success"); ?></p>
                    <p><?php eT("New entry was added."); ?></p>
                    <div class="container">
                        <div class="col-md-12 col-lg-4 col-lg-offset-2">
                            <input class="btn btn-large btn-block btn-default" type='button' value='<?php eT("Browse survey participants"); ?>' onclick="window.open('<?php echo $this->createUrl("admin/tokens/sa/browse/surveyid/$surveyid"); ?>', '_top')" />
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <input class="btn btn-large btn-block btn-default" type='button' value='<?php eT("Add another participant"); ?>' onclick="window.open('<?php echo $this->createUrl("admin/tokens/sa/addnew/surveyid/$surveyid"); ?>', '_top')" />
                        </div>
                    </div>
                </div>

            <!-- Fail -->
            <?php else:?>
                <div class="jumbotron message-box message-box-error">
                    <h2 class="text-danger">Add token entry</h2>
                    <p class="lead text-danger"><?php eT("Failed"); ?></p>
                    <?php foreach ($errors as $error): ?>
                        <p class='lead'><?php echo $error[0]; ?></p>
                    <?php endforeach; ?>
                    <div class="container">
                        <div class="col-md-12 col-lg-4 col-lg-offset-2">
                            <input type='button' class="btn btn-large btn-default" value='<?php eT("Browse survey participants"); ?>' onclick="window.open('<?php echo $this->createUrl("admin/tokens/sa/browse/surveyid/$surveyid"); ?>', '_top')" /><br />
                        </div>
                        <div class="col-md-12 col-lg-4 col-lg-offset-2">
                            <input type='button' class="btn btn-large btn-default" value='<?php eT("Add new survey participant"); ?>' onclick="window.open('<?php echo $this->createUrl("admin/tokens/sa/addnew/surveyid/$surveyid"); ?>', '_top')" /><br />
                        </div>
                    </div>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>
