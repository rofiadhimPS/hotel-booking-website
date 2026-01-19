<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR Hotel - CONTACT</title>
    <?php require_once("inc/links.php"); ?>
</head>
<body class="bg-light">

    <?php require_once("inc/header.php") ?>

    <div class="my-5 px-4"> 
      <h2 class="fw-bold h-font text-center">CONTACT US</h2>
      <h2 class="h-line bg-dark"></h2>
      <p class="text-center">
        Lorem ipsum dolor sit amet consectetur 
        adipisicing elit. Aliquid ullam eius<br>
        dignissimos nesciunt amet explicabo?
      </p>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
          <div class="bg-white rounded shadow p-4">
            <iframe class="w-100 rounded" height="400px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18597.305066811517!2d120.440154074333!3d-5.603659754781869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbbf3fa9e2f1c37%3A0x6217cb35c3073b6a!2sPantai%20Tj.%20Bira!5e0!3m2!1sid!2sid!4v1768801103025!5m2!1sid!2sid" loading="lazy"></iframe>
              
            <h5>Address</h5>
            <a href="https://maps.app.goo.gl/uBXdBiCPuB7fMbKs6" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
              <i class="bi bi-geo-alt-fill"></i> Bira, Bulukumba, South Sulawesi
            </a>

            <h5 class="mt-4">Call Us</h5>
            <a href="https://wa.me/6281234567890" class="d-inline-block mb-2 text-decoration-none text-dark">
              <i class="bi bi-telephone-fill"></i> +628123456789
            </a>
            <br>
            <a href="https://wa.me/6281234567890" class="d-inline-block text-decoration-none text-dark">
              <i class="bi bi-telephone-fill"></i> +628123456789
            </a>
            
            <h5 class="mt-4">Email</h5>
            <a href="mailto: muhammadrofiadhim@gmail.com" class="d-inline-block text-decoration-none text-dark">
              <i class="bi bi-envelope-fill"></i> muhammadrofiadhim@gmail.com
            </a>

            <h5 class="mt-4">Follow Us</h5>
            <a href="#" class="d-inline-block text-dark fs-5 me-2">
                <i class="bi bi-twitter-x me-1"></i>
            </a>
            <a href="#" class="d-inline-block text-dark fs-5 me-2">
                <i class="bi bi-instagram me-1"></i> 
            </a>
            <a href="#" class="d-inline-block text-dark fs-5 me-2">
                <i class="bi bi-facebook me-1"></i>
            </a>
            <a href="#" class="d-inline-block text-dark fs-5">
                <i class="bi bi-tiktok me-1"></i> 
            </a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 px-4">
          <div class="bg-white rounded shadow p-4">
              <form>
                <h5>Send a Message</h5>
                <div class="mt-3">
                  <label class="form-label" style="font-weight: 500;">Name</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="mt-3">
                  <label class="form-label" style="font-weight: 500;">Email</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="mt-3">
                  <label class="form-label" style="font-weight: 500;">Subject</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="mt-3">
                  <label class="form-label" style="font-weight: 500;">Message</label>
                  <textarea class="form-control shadow-none" rows="5" style="resize= none;"></textarea>
                </div>
              <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
              </form>
          </div>
        </div>
      </div>
    </div>

    <?php require_once("inc/footer.php") ?>
    
</body>
</html>