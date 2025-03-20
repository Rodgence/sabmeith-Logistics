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
        
        .gallery-item {
            transition: transform 0.3s ease;
            margin-bottom: 20px;
            height: 250px;
            overflow: hidden;
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .gallery-caption {
            font-weight: 500;
            color: #555;
            text-align: center;
        }
        
        .photo-gallery {
            background-color: #f9f9f9;
        }
        
        .service-features {
            margin-top: 40px;
        }
        
        .feature-item {
            margin-bottom: 20px;
            padding: 15px;
            border-left: 3px solid #721c24;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }
        
        .feature-item:hover {
            background-color: #f2f2f2;
            transform: translateX(5px);
        }
        
        .feature-title {
            font-weight: 600;
            color: #721c24;
            margin-bottom: 8px;
        }
        
        .section-title {
            position: relative;
            display: inline-block;
            color: #721c24;
            margin-bottom: 30px;
            padding-bottom: 10px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background-color: #721c24;
            bottom: 0;
            left: 0;
        }
        
        .highlight-box {
            padding: 25px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            margin-bottom: 30px;
            border-top: 4px solid #721c24;
        }
    </style>

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5"
      style="margin-bottom: 6rem;"
    >
      <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Clearing and Forwarding</h1>
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
            Clearing and Forwarding 
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

<!-- Main Services Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h1 class="service-header">Clearing and Forwarding</h1>
                
                <p>Sabmeith Freight Limited specializes in comprehensive clearing and forwarding services, offering expertise in navigating the complexities of international trade regulations and customs procedures. With a meticulous attention to detail and a commitment to efficiency, we facilitate the smooth and timely clearance of shipments, ensuring compliance with all regulatory requirements.</p>
                
                <div class="highlight-box">
                    <h4>Our Expertise Includes:</h4>
                    <ul>
                        <li>Customs documentation and processing</li>
                        <li>Tariff classification and duty assessment</li>
                        <li>Regulatory compliance management</li>
                        <li>Import/export permits acquisition</li>
                        <li>Payment processing and financial handling</li>
                    </ul>
                </div>
                
                <p>At Sabmeith Freight Limited, we understand that every shipment is unique, with its own set of challenges and requirements. That's why we take a personalized approach to clearing and forwarding, tailoring our services to meet the specific needs of each client. Whether it's navigating complex import/export regulations or arranging for specialized permits and licenses, our team works tirelessly to ensure that shipments reach their destination smoothly and efficiently.</p>
                
                <p>Transparency and communication are paramount in our clearing and forwarding operations. We keep clients informed at every stage of the process, providing regular updates on the status of their shipments and addressing any questions or concerns promptly.</p>
            </div>
            
            <div class="col-lg-5 d-flex align-items-center justify-content-center">
                <img src="img/images/7.jpg" alt="Freight Forwarding Services" class="img-fluid service-img">
            </div>
        </div>
        
        <!-- Feature Items -->
        <div class="row service-features mt-4">
            <div class="col-md-4">
                <div class="feature-item">
                    <h4 class="feature-title">Global Network</h4>
                    <p>Access to a worldwide network of customs agents and freight partners for seamless international operations.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-item">
                    <h4 class="feature-title">Regulatory Expertise</h4>
                    <p>In-depth knowledge of customs requirements, documentation, and compliance procedures across multiple jurisdictions.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-item">
                    <h4 class="feature-title">End-to-End Solutions</h4>
                    <p>Comprehensive management of your shipment from origin to destination, with every detail handled professionally.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Photo Gallery Section with Improved Layout -->
<section class="photo-gallery py-5">
    <div class="container">
        <h2 class="section-title text-center">Our Clearing & Forwarding Services in Action</h2>
        
        <!-- First Row: Featured Large Image -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="gallery-item" style="height: 400px;">
                    <img src="img/Clearing/1.png" alt="Comprehensive Clearing Services" class="img-fluid">
                    <div class="gallery-caption">Comprehensive Clearing & Forwarding Solutions</div>
                </div>
            </div>
        </div>
        
        <!-- Second Row: Three Equal Images -->
        <div class="row g-4">
            <div class="col-md-4">
                <div class="gallery-item">
                    <img src="img/Clearing/2.png" alt="International Freight Solutions" class="img-fluid">
                    <div class="gallery-caption">International Freight Solutions</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-item">
                    <img src="img/Clearing/3.png" alt="Efficient Cargo Handling" class="img-fluid">
                    <div class="gallery-caption">Efficient Cargo Handling</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-item">
                    <img src="img/Clearing/4.png" alt="Documentation Services" class="img-fluid">
                    <div class="gallery-caption">Comprehensive Documentation Services</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Service Information with Forwarding Images -->
<section class="py-5 bg-white">
    <div class="container">
        <!-- Image Showcase Row -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title">Our Forwarding Capabilities</h2>
            </div>
            
            <div class="col-md-8">
                <div class="gallery-item" style="height: 350px;">
                    <img src="img/forwading/1.png" alt="Freight Forwarding Operations" class="img-fluid">
                    <div class="gallery-caption">International Freight Forwarding</div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="gallery-item mb-4">
                    <img src="img/forwading/2.png" alt="Customs Documentation" class="img-fluid">
                    <div class="gallery-caption">Customs Documentation</div>
                </div>
                
                <div class="gallery-item">
                    <img src="img/forwading/3.png" alt="Cargo Handling" class="img-fluid">
                    <div class="gallery-caption">Cargo Management</div>
                </div>
            </div>
        </div>
        
        <!-- Service Details Row -->
        <div class="row">
            <div class="col-md-6">
                <h3 class="section-title">Why Choose Our Clearing Services</h3>
                <p>In addition to our expertise in customs clearance, we also offer comprehensive forwarding services to manage the transportation of goods from origin to destination. Working closely with a network of trusted carriers and logistics partners, we coordinate the movement of shipments by air, sea, or land, optimizing routes and minimizing transit times to meet our clients' delivery deadlines.</p>
                
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="gallery-item" style="height: 200px;">
                            <img src="img/forwading/4.png" alt="Air Freight Services" class="img-fluid">
                            <div class="gallery-caption">Air Freight</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="gallery-item" style="height: 200px;">
                            <img src="img/forwading/5.png" alt="Sea Freight Services" class="img-fluid">
                            <div class="gallery-caption">Sea Freight</div>
                        </div>
                    </div>
                </div>
                
                <ul class="mt-4">
                    <li>Streamlined customs processes</li>
                    <li>Reduced delays and detention charges</li>
                    <li>Minimized risk of non-compliance penalties</li>
                    <li>Enhanced visibility throughout the clearance process</li>
                    <li>Expert guidance on complex regulatory matters</li>
                </ul>
            </div>
            
            <div class="col-md-6">
                <div class="highlight-box" style="height: 100%;">
                    <h3 class="mb-4">Our Clearing Process</h3>
                    <ol>
                        <li><strong>Documentation Review</strong> - Thorough examination of all required documents</li>
                        <li><strong>Classification & Valuation</strong> - Accurate tariff classification and customs valuation</li>
                        <li><strong>Duty & Tax Calculation</strong> - Precise assessment of applicable duties and taxes</li>
                        <li><strong>Customs Declaration</strong> - Submission of declarations to relevant authorities</li>
                        <li><strong>Clearance Processing</strong> - Managing the clearance process with customs officials</li>
                        <li><strong>Delivery Coordination</strong> - Arranging delivery to the final destination</li>
                    </ol>
                    
                    <div class="gallery-item mt-4" style="height: 220px;">
                        <img src="img/forwading/6.png" alt="Delivery Coordination" class="img-fluid">
                        <div class="gallery-caption">Final Mile Delivery</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Forwarding Services Showcase -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="section-title">Complete Forwarding Solutions</h2>
                <p class="lead">Our comprehensive approach ensures your goods move seamlessly across borders and transportation modes.</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-3">
                <div class="gallery-item">
                    <img src="img/forwading/7.png" alt="Road Transport" class="img-fluid">
                    <div class="gallery-caption">Road Transport</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="gallery-item">
                    <img src="img/forwading/8.png" alt="Project Cargo" class="img-fluid">
                    <div class="gallery-caption">Project Cargo</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="gallery-item">
                    <img src="img/forwading/9.png" alt="Warehousing" class="img-fluid">
                    <div class="gallery-caption">Warehousing</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="gallery-item">
                    <img src="img/forwading/10.png" alt="Express Delivery" class="img-fluid">
                    <div class="gallery-caption">Express Services</div>
                </div>
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
