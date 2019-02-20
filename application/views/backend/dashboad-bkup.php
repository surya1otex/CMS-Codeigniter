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
    <div role="tabpanel" class="tab-pane active" id="home">
    
    </div>
    <!--
    <div role="tabpanel" class="tab-pane" id="profile">...</div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
    !-->
  </div>

</div>
     <?php 
     foreach ($pagedata as $contents) {
          $showdata = $contents->content_data;
          $page_id = $contents->page_id; 
     }
     ?>
     <?php
     echo form_open('Admincontrol/updatedata/'.$page_id); ?>
        <textarea name="editor1" id="editor12" rows="10" cols="80" style="display: none;">
                <?php echo $showdata; ?>
            </textarea>
        <input type="submit" value="Update" class="btn btn-primary">
        </form>
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