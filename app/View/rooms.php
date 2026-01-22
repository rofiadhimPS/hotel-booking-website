<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR Hotel - CONTACT</title>
    <?php require_once __DIR__ . '/inc/links.php' ?>
</head>
<body class="bg-light">

    <?php require_once __DIR__ . '/inc/header.php' ?>

    <div class="my-5 px-4"> 
      <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
      <h2 class="h-line bg-dark"></h2>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
          <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light bg-white rounded shadow">
            <div class="container-fluid flex-lg-column align-items-stretch">
              <h4 class="mt-2">FILTERS</h4>
              <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILIY</h5>
                  <label class="form-label">Check-in</label>
                  <input type="date" class="form-control shadow-none mb-3">
                  <label class="form-label">Check-out</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                  <div class="mb-2">
                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                    <label class="form-check-label" for="f1">Facilities one</label>
                  </div>
                  <div class="mb-2">
                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                    <label class="form-check-label" for="f2">Facilities two</label>
                  </div>
                  <div class="mb-2">
                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                    <label class="form-check-label" for="f3">Facilities three</label>
                  </div>
                </div>
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                  <div class="d-flex">
                    <div class="me-3">
                      <label class="form-label">Adults</label>
                      <input type="number" class="form-control shadow-none">
                    </div>
                    <div>
                      <label class="form-label">Children</label>
                      <input type="number" class="form-control shadow-none">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>

        <div class="col-lg-9 col-md-12">
          <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-2 align-items-center">
              <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="images/rooms/1.jpg" class="img-fluid rounded">
              </div>
              <div class="col-md-5 px-lg-3 px-md-3 px-0">
                <h5 class="mb-3">Simple Room Name</h5>
                <div class="features mb-3">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Bathrooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Balcony
                  </span><span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Sofa
                  </span>
                </div>
                <div class="facilities mb-3">
                </div>
                <div class="guests">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    4 Children
                  </span>
                </div>
              </div>
              <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <h6 class="mb-4" style="font-size: 12px;">IDR200k per night</h6>
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
              </div>
            </div>
          </div>
          <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-2 align-items-center">
              <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="images/rooms/1.jpg" class="img-fluid rounded">
              </div>
              <div class="col-md-5 px-lg-3 px-md-3 px-0">
                <h5 class="mb-3">Simple Room Name</h5>
                <div class="features mb-3">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Bathrooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Balcony
                  </span><span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Sofa
                  </span>
                </div>
                <div class="facilities mb-3">
                </div>
                <div class="guests">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    4 Children
                  </span>
                </div>
              </div>
              <div class="col-md-2 text-center">
                <h6 class="mb-4" style="font-size: 12px;">IDR200k per night</h6>
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
              </div>
            </div>
          </div>
          <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-2 align-items-center">
              <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="images/rooms/1.jpg" class="img-fluid rounded">
              </div>
              <div class="col-md-5 px-lg-3 px-md-3 px-0">
                <h5 class="mb-3">Simple Room Name</h5>
                <div class="features mb-3">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Bathrooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Balcony
                  </span><span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Sofa
                  </span>
                </div>
                <div class="facilities mb-3">
                </div>
                <div class="guests">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    4 Children
                  </span>
                </div>
              </div>
              <div class="col-md-2 text-center">
                <h6 class="mb-4" style="font-size: 12px;">IDR200k per night</h6>
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <?php require_once __DIR__ . '/inc/footer.php' ?>
    
</body>
</html>