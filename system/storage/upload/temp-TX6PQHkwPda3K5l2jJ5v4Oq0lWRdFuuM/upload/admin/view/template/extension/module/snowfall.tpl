<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-account" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
      </div>
      <div class="panel-body">
        <style>
          .promoted_devopencart {
            display: flex;
            background: #e7f1f5;
            margin-top: 5px;
            margin-bottom: 20px;
            padding: 35px;
            padding-right: 0px;
            position: relative;
            overflow: hidden;
          }
          .promoted_devopencart .pd_text p {
            font-size: 20px;
            margin-bottom: 25px;
            color: #05516b;
          }
          .promoted_devopencart .pd_text p a {
            color: #0594c5;
            font-weight: 700;
          }
          .promoted_devopencart .pd_text span a {
            display: inline-flex;
            padding: 16px 25px;
            border-radius: 7px;
            background: #0594c5;
            color:#fff;
            font-weight: 600;
            font-size: 14px;
            text-align: center;
          }
          .promoted_devopencart .pd_banner {
            position: absolute;
            right: 50px;
            bottom: -54px;
          }
          .promoted_devopencart .pd_banner a {
            display: inline-flex;
          }
          .promoted_devopencart .pd_banner a img {
            height: 150px;
          }
          @media (max-width: 1000px) {
            .promoted_devopencart .pd_text p {
              display: flex;
              flex-direction: column;
              font-size: 14px;
            }
            .promoted_devopencart .pd_text p a {
              font-size: 20px;
            }
          }
          @media (max-width: 820px) {
            .promoted_devopencart {
              padding: 20px;
              padding-right: 20px;
            }
            .promoted_devopencart .pd_text span a {
              padding: 10px 15px;
            }
            .promoted_devopencart .pd_banner {
              right: 10px;
              bottom: -24px;
            }
            .promoted_devopencart .pd_banner a img {
              height: 50px;
            }
          }
          @media (max-width: 450px) {
            .promoted_devopencart .pd_text p,
            .promoted_devopencart .pd_text span a {
              font-size: 12px;
            }
            .promoted_devopencart .pd_text p {
              margin-bottom: 10px;
            }
            .promoted_devopencart .pd_text p a {
              font-size: 16px;
            }
            .promoted_devopencart {
              padding-bottom: 50px;
            }
            .promoted_devopencart .pd_banner {
              left: 50%;
              right: initial;
              transform: translate(-50%, 0%);
            }
          }
        </style>
        <div class="promoted_devopencart">
          <div class="pd_text">
            <p>Новые модули можно найти у нас на сайте — <a href="https://dev-opencart.com" target="_blank">DEV-OPENCART.COM</a></p>
            <span><a href="https://dev-opencart.com/" target="_blank">Перейти в магазин дополнений</a></span>
          </div>
          <div class="pd_banner">
            <a href="https://dev-opencart.com" target="_blank"><img src="https://dev-opencart.com/catalog/view/theme/default/img/logob.svg" alt=""></a>
          </div>
        </div>
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-account" class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-module_snowfall_status"><?php echo $entry_status; ?></label>
            <div class="col-sm-10">
              <select name="module_snowfall_status" id="input-module_snowfall_status" class="form-control">
                <?php if ($module_snowfall_status) { ?>
                <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                <option value="0"><?php echo $text_disabled; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_enabled; ?></option>
                <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-module_snowfall_flakeсount"><?php echo $entry_flakeсount; ?></label>
            <div class="col-sm-10">
              <input type="text" name="module_snowfall_flakeсount" value="<?php echo $module_snowfall_flakeсount; ?>" placeholder="70" id="input-module_snowfall_flakeсount" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-module_snowfall_flakecolor"><?php echo $entry_flakecolor; ?></label>
            <div class="col-sm-10">
              <input type="text" name="module_snowfall_flakecolor" value="<?php echo $module_snowfall_flakecolor; ?>" placeholder="#ffffff" id="input-module_snowfall_flakecolor" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-module_snowfall_flakeindex"><?php echo $entry_flakeindex; ?></label>
            <div class="col-sm-10">
              <input type="text" name="module_snowfall_flakeindex" value="<?php echo $module_snowfall_flakeindex; ?>" placeholder="999999" id="input-module_snowfall_flakeindex" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-module_snowfall_minsize"><?php echo $entry_minsize; ?></label>
            <div class="col-sm-10">
              <input type="text" name="module_snowfall_minsize" value="<?php echo $module_snowfall_minsize; ?>" placeholder="5" id="input-module_snowfall_minsize" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-module_snowfall_maxsize"><?php echo $entry_maxsize; ?></label>
            <div class="col-sm-10">
              <input type="text" name="module_snowfall_maxsize" value="<?php echo $module_snowfall_maxsize; ?>" placeholder="12" id="input-module_snowfall_maxsize" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-module_snowfall_minspeed"><?php echo $entry_minspeed; ?></label>
            <div class="col-sm-10">
              <input type="text" name="module_snowfall_minspeed" value="<?php echo $module_snowfall_minspeed; ?>" placeholder="1.5" id="input-module_snowfall_minspeed" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-module_snowfall_maxspeed"><?php echo $entry_maxspeed; ?></label>
            <div class="col-sm-10">
              <input type="text" name="module_snowfall_maxspeed" value="<?php echo $module_snowfall_maxspeed; ?>" placeholder="3" id="input-module_snowfall_maxspeed" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-module_snowfall_round"><?php echo $entry_round; ?></label>
            <div class="col-sm-10">
              <select name="module_snowfall_round" id="input-module_snowfall_round" class="form-control">
                <?php if ($module_snowfall_round) { ?>
                <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                <option value="0"><?php echo $text_disabled; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_enabled; ?></option>
                <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-module_snowfall_shadow"><?php echo $entry_shadow; ?></label>
            <div class="col-sm-10">
              <select name="module_snowfall_shadow" id="input-module_snowfall_shadow" class="form-control">
                <?php if ($module_snowfall_shadow) { ?>
                <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                <option value="0"><?php echo $text_disabled; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_enabled; ?></option>
                <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-module_snowfall_collection"><?php echo $entry_collection; ?></label>
            <div class="col-sm-10">
              <input type="text" name="module_snowfall_collection" value="<?php echo $module_snowfall_collection; ?>" placeholder=".element" id="input-module_snowfall_collection" class="form-control" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php echo $footer; ?>