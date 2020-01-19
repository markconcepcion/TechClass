<head>
<style type="text/css">
  .container{
      border: 2px solid #ddd;
      padding-top: 10px; 
      padding-right: 50px;
      height: 75%;
      text-align: justify;
    }
    .row{
      margin-left: 15px;
    }
    .option{
      display: inline-block;
    }
    td{
      border: 1px solid #ddd;
    }
</style></head>

<div class="home_bi">
  <div class="row">
    <div class="container col-md-3">
      <b><ul class="nav option table table-striped">
        <li class="nav-item "><a class="nav-link list-group-item active show" data-toggle="tab" href="#view_class">Classes</a></li>
        <li class="nav-item"><a class="nav-link list-group-item" data-toggle="tab" href="#home">Profile</a></li>
        <li class="nav-item "><a class="nav-link list-group-item" data-toggle="tab" href="#create_class">Create Class</a></li>
        <li class="nav-item "><a class="nav-link list-group-item" data-toggle="tab" href="#about">About</a></li>
      </ul></b>
      <div id="myTabContent" class="tab-content"  style="margin-top:10px; margin-left: 5px;">
        
       <div class="tab-pane fade" id="about" style="margin-top: 8px;">
         <h3>Welcome, Teacher</h3>
          <p><b>TechClass ERC</b> is here to offer you a fast computation features you can use to easily grade your student according to their performance</p>
      </div>
    </div>
    </div>
    <div class="col-md-9">
      <div id="myTabContent" class="tab-content"  style="margin: 2 10 7 5;">
        <div class="tab-pane fade" id="home">
          <table class="table table-striped table-big">
            <tr>
              <td>Name:</td>
              <td>Teacher Joe</td>
            </tr>
            <tr>
              <td>Gender:</td>
              <td>Male</td>
            </tr>
            <tr>
              <td>Major:</td>
              <td>Science</td>
            </tr>
          </table>
        </div>
        <div class="container tab-pane fade" id="create_class" style="padding-top: 1%;">
          <?php echo form_open('courses/create'); ?>
            <div class="row">
              <div class="col-md-6">
                <div class="col-md-5" style="margin-bottom: 4px;">Course Name:</div>
                <div class="col-md-7" style="margin-bottom: 2px;"><input class="form-control" type="text" name="c_name"></div>
                <div class="col-md-5" style="margin-bottom: 4px;">Block:</div>
                <div class="col-md-7" style="margin-bottom: 2px;"><input class="form-control" type="text" name="c_section"></div>
                <div class="col-md-5" style="margin-bottom: 4px;">Schedule:</div>
                <div class="col-md-7" style="margin-bottom: 2px;"><input class="form-control" type="text" name="c_code"></div>
                <div class="col-md-5" style="margin-bottom: 4px;">Course Passcode:</div>
                <div class="col-md-7" style="margin-bottom: 2px;"><input class="form-control" type="text" name="c_sched"></div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              <div class="col-md-6">
                <div class="col-md-5" style="margin-bottom: 4px;">Quizzes:</div>
                <div class="col-md-7" style="margin-bottom: 2px;"><input class="form-control" type="text" name="c_quiz"></div>
                <div class="col-md-5" style="margin-bottom: 4px;">Assignments:</div>
                <div class="col-md-7" style="margin-bottom: 2px;"><input class="form-control" type="text" name="c_ass"></div>
                <div class="col-md-5" style="margin-bottom: 4px;">Activities/Projects:</div>
                <div class="col-md-7" style="margin-bottom: 2px;"><input class="form-control" type="text" name="c_pro"></div>
                <div class="col-md-5" style="margin-bottom: 4px;">Exams:</div>
                <div class="col-md-7" style="margin-bottom: 2px;"><input class="form-control" type="text" name="c_act"></div>
                <div class="col-md-5" style="margin-bottom: 4px;">Presentations:</div>
                <div class="col-md-7" style="margin-bottom: 2px;"><input class="form-control" type="text" name="c_pre"></div>
              </div>
            </div>
          <?php echo form_close(); ?>
        </div>

        <div class="tab-pane fade active show" id="view_class">
          <table class="table table-hover"><b>
            <tr class="table-primary">
              <td>Course Name</td>
              <td>Section</td>
              <td>Schedule</td>
              <td>Option</td>
            </tr></b>
           <?php foreach ($classes as $class) : ?>
            <tr class="table-light">
              <td><?php echo $class['c_name']; ?></td>
              <td><?php echo $class['c_section']; ?></td>
              <td><?php echo $class['c_sched']; ?></td>
              <td><a href="<?php echo base_url('courses/view/'.$class['c_id']); ?>" class="btn btn-primary">View Class</a></td>
            </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>
</div>