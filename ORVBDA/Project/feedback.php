<html>
<body>
<!-- Container (Contact Section) -->
<div id="contact" class="container1">
  <h3 class="text-center">Give us feedback</h3>
  <p class="text-center"><em>We love our Customers!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Pune, India</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: <a href="tel:9066993399" style="text-decoration:  none;">9066993399</a></p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: FindYourMechsupport@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <form name="feedback" action="feedbackinsert.php" onclick=""> 
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Please Share Your Experience" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
          <script type="text/javascript">
            function myresponse()
            {
            
              alert("we will contact you soon,Thank you");
            }
          </script>
</div>
</div>
</form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
