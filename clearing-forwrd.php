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
                <p>In addition to our expertise in customs clearance, we also offer comprehensive forwarding services to manage the transportation of goods from origin to destination. Working closely with a network of trusted carriers and logistics partners, we coordinate the movement of shipments by land, optimizing routes and minimizing transit times to meet our clients' delivery deadlines.</p>
                
            
                
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
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section with Background Image -->
<section class="cta-section py-5" style="background: linear-gradient(rgba(114, 28, 36, 0.85), rgba(114, 28, 36, 0.85)), url('img/forwading/5.png'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-10">
                <h2 class="mb-4 text-white">Ready to Streamline Your Clearing & Forwarding?</h2>
                <p class="lead text-white mb-4">Partner with Sabmeith Freight Limited for efficient, compliant, and hassle-free customs clearance and freight forwarding solutions tailored to your specific shipping needs.</p>
                
                <div class="row justify-content-center">
                    <div class="col-md-5 col-lg-4 mb-3 mb-md-0">
                        <a href="contact.php" class="btn btn-light btn-lg w-100">
                            <i class="fas fa-envelope mr-2"></i> Get a Quote
                        </a>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <a href="https://wa.me/255775999000" class="btn btn-outline-light btn-lg w-100">
                            <i class="fab fa-whatsapp mr-2"></i> WhatsApp Us
                        </a>
                    </div>
                </div>
                
                <div class="mt-4 text-white">
                    <p>Have urgent questions? Call us directly: <strong>+255 775 999 000</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Client Benefits Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h3 class="section-title">Benefits of Working With Us</h3>
                <p>Experience the difference that professional clearing and forwarding services can make for your business.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-clock fa-3x text-primary" style="color: #721c24 !important;"></i>
                        </div>
                        <h4 class="card-title">Time Savings</h4>
                        <p class="card-text">Reduce customs clearance time by up to 60% with our streamlined processes and expert handling.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-shield-alt fa-3x text-primary" style="color: #721c24 !important;"></i>
                        </div>
                        <h4 class="card-title">Compliance Assurance</h4>
                        <p class="card-text">Rest easy knowing your shipments meet all regulatory requirements, avoiding costly penalties and delays.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-chart-line fa-3x text-primary" style="color: #721c24 !important;"></i>
                        </div>
                        <h4 class="card-title">Cost Optimization</h4>
                        <p class="card-text">Save on logistics expenses through our efficient processes, duty optimization, and reduced storage fees.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
 <?php
        include("includes/footer.php");
?>
<!-- end of footer -->
