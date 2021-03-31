<?php include "head.php"; ?>
<?php include "nav.php"; ?>

<main id="main">

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="mt-md-5">
      <div class="container mt-md-4">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>Appointment thru online provide fast and reliable it may help our client to give the best they need for their company needs, feel free to ask and always give all the information so that we can provide and never miss any part of system they need.</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 form-group">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="department" id="department" class="form-control">
                <option value="">Select Department</option>
                <option value="Department 1">Department 1</option>
                <option value="Department 2">Department 2</option>
                <option value="Department 3">Department 3</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <select name="team" id="team" class="form-control">
                <option value="">Select Teams</option>
                <option value="Team 1">Function Team</option>
                <option value="Team 2">HR Team</option>
                <option value="Team 3">Design Team</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3 d-none">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button class="btn btn-outline-primary" type="submit"><i class="ri-heart-add-fill"></i> Submit</button></div>
        </form>

      </div>
    </section>
    <!-- End Appointment Section -->

    </main><!-- End #main -->

    <?php include "footer.php"; ?>