<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <?php
          foreach ($pagetitles as $title) {
            $cptitle = $title->page_name;
          }
          ?>
          <h3 class="box-title"><?php echo $cptitle; ?></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <?php
    foreach ($sections as $tabsections) {

      ?>
    <li role="presentation"><a href="#<?php echo $tabsections->section_id; ?>" aria-controls="home" role="tab" data-toggle="tab"><?php echo $tabsections->section_name; ?></a></li>
    <?php
    }
    ?>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <?php
    foreach ($sections as $tabcontents) {
    $sec_id = $tabcontents->section_id;
    ?>
    <div role="tabpanel" class="tab-pane" id="<?php echo $tabcontents->section_id; ?>">
      <?php
      echo form_open('Admincontrol/updatedata/'.$sec_id); ?>
      <textarea name="myeditor" id="editor" rows="100" cols="80">
         <?php echo $tabcontents->content_data; ?>
       </textarea>
       <br>
       <input type="submit" value="Make Changes" class="btn btn-primary">
     </form>
    </div>
    <?php
    }
    ?>

    <!--
    <div role="tabpanel" class="tab-pane" id="profile">...</div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
    !-->
  </div>

</div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>