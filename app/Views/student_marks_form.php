<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Student Marks</li>
        </ol>
      </nav>
    </div>
<!-- Check for error message -->
<?php if (session()->has('error')): ?>
    <div class="alert alert-danger">
        <?= session('error') ?>
    </div>
<?php endif; ?>

<!-- Check for success message -->
<?php if (session()->has('success')): ?>
    <div class="alert alert-success">
        <?= session('success') ?>
    </div>
<?php endif; ?>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Enter Student Marks</h5>
              <form class="row g-3" method="post" action="<?= base_url('marks/submit') ?>">
                <div class="col-md-12">
                <label for="inputState" class="form-label">Select Student</label>
                  <select name="student" id="inputState" class="form-select">
                <?php foreach ($students as $student): ?>
                    <option value="<?= $student['id'] ?>"><?= $student['name'] ?></option>
                <?php endforeach; ?>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="jan" class="form-label">January</label>
                  <input type="number" name="jan" id="jan" min="0" max="100" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="feb" class="form-label">February</label>
                  <input type="number" name="feb" id="feb" min="0" max="100" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="mar" class="form-label">March</label>
                  <input type="number" name="mar" id="mar" min="0" max="100" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="apr" class="form-label">April</label>
                  <input type="number" name="apr" id="apr" min="0" max="100" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="may" class="form-label">May</label>
                  <input type="number" name="may" id="may" min="0" max="100" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="jun" class="form-label">June</label>
                  <input type="number" name="jun" id="jun" min="0" max="100" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="jul" class="form-label">July</label>
                  <input type="number" name="jul" id="jul" min="0" max="100" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="aug" class="form-label">August</label>
                  <input type="number" name="aug" id="aug" min="0" max="100" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="sep" class="form-label">September</label>
                  <input type="number" name="sep" id="sep" min="0" max="100" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="oct" class="form-label">October</label>
                  <input type="number" name="oct" id="oct" min="0" max="100" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="nov" class="form-label">November</label>
                  <input type="number" name="nov" id="nov" min="0" max="100" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="dec" class="form-label">December</label>
                  <input type="number" name="dec" id="dec" min="0" max="100" class="form-control">
                </div>
                <button class="btn btn-info" type="submit">Submit</button>
              </form>
            </div>
        </div>
    </div>
</div>
</section>
</main>
    
    
<!-- 
        <label for="student">Select Student:</label>
            <select name="student" id="student">
                <option value="">--Select--</option>
                
            </select>
            <br>

        <label for="jun">June:</label>
        <input type="number" name="jun" id="jun" min="0" max="100"><br>
        <label for="jul">July:</label>
        <input type="number" name="jul" id="jul" min="0" max="100"><br>
        <label for="aug">August:</label>
        <input type="number" name="aug" id="aug" min="0" max="100"><br>
        <label for="sep">September:</label>
        <input type="number" name="sep" id="sep" min="0" max="100"><br>
        <label for="oct">October:</label>
        <input type="number" name="oct" id="oct" min="0" max="100"><br>
        <label for="nov">November:</label>
        <input type="number" name="nov" id="nov" min="0" max="100"><br>
        <label for="des">December:</label>
        <input type="number" name="des" id="des" min="0" max="100"><br>
        <label for="jan">January:</label>
        <input type="number" name="jan" id="jan" min="0" max="100"><br>
        <label for="feb">February:</label>
        <input type="number" name="feb" id="feb" min="0" max="100"><br>
        <label for="mar">March:</label>
        <input type="number" name="mar" id="mar" min="0" max="100"><br>
        <label for="feb">April:</label>
        <input type="number" name="apr" id="apr" min="0" max="100"><br>
        <label for="may">May:</label>
        <input type="number" name="may" id="may" min="0" max="100"><br>

        <button type="submit">Submit</button>
    </form> -->