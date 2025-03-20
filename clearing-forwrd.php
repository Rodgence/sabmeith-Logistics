<?php
        include("includes/header.php");
?>
    <style>
        .service-header {
            color: #721c24;
            font-weight: 600;
            padding-bottom: 15px;
            border-bottom: 2px solid #721c24;
            margin-bottom: 25px;
        }
        
        .cta-section {
            background-color: #f8f9fa;
            padding: 60px 0;
            margin-top: 30px;
            
        }
        
        .service-img {
            max-height: 100%;
            object-fit: cover;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .btn-primary {
            background-color: #721c24;
            border-color: #721c24;
            padding: 12px 30px;
            font-size: 18px;
            font-weight: 500;
            transition: all 0.3s ease;
            color: white;
            text-decoration: none;
        }
        
        .btn-primary:hover {
            background-color: #5a171d;
            border-color: #5a171d;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(114, 28, 36, 0.3);
            color: white;
            text-decoration: none;
        }
        
        .cta-text {
            margin-bottom: 30px;
        }
        
        a.btn {
            text-decoration: none;
        }
    </style>

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5"
      style="margin-bottom: 6rem;"
    >
      <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Clearing and Forwading</h1>
        <nav aria-label="breadcrumb" class="animated slideInDown">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a class="text-white" href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="service.php">Services</a>
            </li>
            <li
              class="breadcrumb-item text-white active"
              aria-current="page"
            >
            Clearing and Forwading 
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

<!-- Services Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h1 class="service-header">Clearing and Forwarding</h1>
                
                <p>Sabmeith Freight Limited specializes in comprehensive clearing and forwarding services, offering expertise in navigating the complexities of international trade regulations and customs procedures. With a meticulous attention to detail and a commitment to efficiency, we facilitate the smooth and timely clearance of shipments, ensuring compliance with all regulatory requirements.</p>
                
                <p>Our clearing and forwarding services cover a wide range of activities, including customs documentation, tariff classification, duty assessment, and payment processing. Leveraging our extensive experience and knowledge of global trade regulations, we guide clients through the intricacies of customs clearance, minimizing delays and avoiding costly penalties.</p>
                
                <p>At Sabmeith Freight Limited, we understand that every shipment is unique, with its own set of challenges and requirements. That's why we take a personalized approach to clearing and forwarding, tailoring our services to meet the specific needs of each client. Whether it's navigating complex import/export regulations or arranging for specialized permits and licenses, our team works tirelessly to ensure that shipments reach their destination smoothly and efficiently.</p>
                
                <p>Transparency and communication are paramount in our clearing and forwarding operations. We keep clients informed at every stage of the process, providing regular updates on the status of their shipments and addressing any questions or concerns promptly.</p>
                
                <p>In addition to our expertise in customs clearance, we also offer comprehensive forwarding services to manage the transportation of goods from origin to destination. Working closely with a network of trusted carriers and logistics partners, we coordinate the movement of shipments by air, sea, or land, optimizing routes and minimizing transit times to meet our clients' delivery deadlines.</p>
            </div>
            
            <div class="col-lg-5 d-flex align-items-center justify-content-center">
                <img src="img/images/7.jpg" alt="Freight Forwarding Services" class="img-fluid service-img">
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <h2 class="mb-3">Ready to Simplify Your Customs Clearance?</h2>
                <p class="lead cta-text">Contact our expert team today for personalized clearing and forwarding solutions tailored to your specific shipping needs.</p>
                
                <a href="#contact" class="btn btn-primary btn-lg">Request a Quote</a>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
 <?php

        include("includes/footer.php");
?>
<!-- end of footer -->
