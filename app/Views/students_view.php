<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Students</li>
        </ol>
      </nav>
    </div>
<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Students</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Sl.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach ($students as $student): ?>
                  <tr>
                    <th scope="row"><?php echo $i?></th>
                    <td><?php echo $student['name']?></td>
                    <td><?php echo $student['class']?></td>
                    <td><a href="<?= base_url('marks/data-visual/'.$student['id'])?>">View Chart</a></td>
                  </tr>
                  <?php $i++; endforeach ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
</main>
    