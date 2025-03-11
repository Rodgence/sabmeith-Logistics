<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .target-market-section {
            background-color: #3F1E26;
            padding: 60px 0;
            color: white;
        }
        
        .section-title {
            margin-bottom: 40px;
        }
        
        .section-title h2 {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            color: white;
            position: relative;
        }
        
        .section-title h2:after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: white;
            margin-top: 15px;
        }
        
        .market-card {
            position: relative;
            overflow: hidden;
            margin-bottom: 25px;
            height: 200px;
            cursor: pointer;
        }
        
        .market-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .market-title {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(59, 30, 38, 0.85);
            color: white;
            padding: 10px 15px;
            font-weight: 600;
            z-index: 2;
        }
        
        .market-content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(59, 30, 38, 0.9);
            padding: 15px;
            color: white;
            transform: translateY(100%);
            transition: transform 0.5s ease;
            overflow-y: auto;
            font-size: 0.85rem;
            z-index: 1;
        }
        
        .market-card:hover .market-content {
            transform: translateY(0);
        }
        
        .market-card:hover .market-image {
            transform: scale(1.1);
        }
        
        /* Custom scrollbar for content */
        .market-content::-webkit-scrollbar {
            width: 5px;
        }
        
        .market-content::-webkit-scrollbar-thumb {
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 5px;
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .section-title h2 {
                font-size: 2.5rem;
            }
        }
        
        @media (max-width: 768px) {
            .market-card {
                height: 180px;
            }
        }
    </style>
</head>
<body>
    <section class="target-market-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Target<br>Market</h2>
            </div>
            
            <div class="row">
                <!-- Energy and Mining -->
                <div class="col-lg-4 col-md-6">
                    <div class="market-card">
                        <img src="./img/images/1.jpg" alt="Energy and Mining" class="market-image">
                        <div class="market-title">Energy and Mining</div>
                        <div class="market-content">
                            <p>Subemah Freight Limited provides logistics support for the energy and mining sector, facilitating the transportation of raw materials, equipment and supplies to remote exploration and extraction sites. With our extensive transport network and expertise in handling heavy and sensitive cargo, we help energy and mining companies achieve supply chain efficiency and minimize downtime.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Construction -->
                <div class="col-lg-4 col-md-6">
                    <div class="market-card">
                        <img src="https://source.unsplash.com/random/600x400/?construction,building" alt="Construction" class="market-image">
                        <div class="market-title">Construction</div>
                        <div class="market-content">
                            <p>Subemah Freight Limited supports construction companies with logistics services for the transportation of construction materials, equipment and machinery. Our dedicated team of logistics professionals use their expertise to help construction businesses streamline operations and complete their project deadlines effectively.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Manufacturing -->
                <div class="col-lg-4 col-md-6">
                    <div class="market-card">
                        <img src="https://source.unsplash.com/random/600x400/?manufacturing,factory" alt="Manufacturing" class="market-image">
                        <div class="market-title">Manufacturing</div>
                        <div class="market-content">
                            <p>Subemah Freight Limited provides tailored logistics solutions for manufacturing businesses, facilitating the seamless movement of raw materials, parts, and finished products throughout the production process. With a focus on efficiency and reliability, we optimize supply chains to reduce costs, maintain quality, and minimize disruptions, enabling manufacturers to meet production deadlines and maintain competitiveness in the market.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Retail -->
                <div class="col-lg-4 col-md-6">
                    <div class="market-card">
                        <img src="https://source.unsplash.com/random/600x400/?retail,store" alt="Retail" class="market-image">
                        <div class="market-title">Retail</div>
                        <div class="market-content">
                            <p>A trusted logistics partner for retail businesses, Subemah Freight Limited offers comprehensive services including warehouse management, inventory control, and last-mile delivery. Our solutions are designed to optimize retail supply chains, reduce stockouts, and enhance the accurate delivery of products to stores or directly to customers, improving overall customer satisfaction.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Automotive -->
                <div class="col-lg-4 col-md-6">
                    <div class="market-card">
                        <img src="https://source.unsplash.com/random/600x400/?automotive,cars" alt="Automotive" class="market-image">
                        <div class="market-title">Automotive</div>
                        <div class="market-content">
                            <p>Subemah Freight Limited offers specialized logistics services for the automotive industry, supporting the movement of vehicles, parts, and components. With expertise in handling oversized cargo and just-in-time delivery requirements, we help automotive manufacturers and suppliers can meet production schedules and deliver efficient supply chain operations.</p>
                        </div>
                    </div>
                </div>
                
                <!-- E-commerce -->
                <div class="col-lg-4 col-md-6">
                    <div class="market-card">
                        <img src="https://source.unsplash.com/random/600x400/?ecommerce,delivery" alt="E-commerce" class="market-image">
                        <div class="market-title">E-commerce</div>
                        <div class="market-content">
                            <p>Subemah Freight specializes in providing end-to-end logistics solutions for e-commerce businesses, from inventory management, order fulfillment and packaging to shipping and delivery services. Our customized digital tracking solutions, real-time updates, and API integrations enable businesses to scale their operations, reach new markets, and deliver a seamless delivery experience to customers worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>