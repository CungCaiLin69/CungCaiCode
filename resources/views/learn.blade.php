<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learn with CungCaiCode</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/ded7dcde89.js" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/learns.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footers.css') }}">
</head>
<body>
    @include('partials.navbar')

    <!-- Hero Section -->
    <section class="hero-section">
        <h1 class="hero-title">Master the Future of Code</h1>
        <p class="hero-subtitle">Choose from our comprehensive collection of programming languages and technologies. Start your journey today and build tomorrow's innovations.</p>
    </section>

    <!-- Controls Section -->
    <section class="controls-section">
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search technologies..." id="searchInput">
            <i class="fas fa-search search-icon"></i>
        </div>
        
        <div class="filter-tabs">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="frontend">Frontend</button>
            <button class="filter-btn" data-filter="backend">Backend</button>
            <button class="filter-btn" data-filter="database">Database</button>
            <button class="filter-btn" data-filter="tools">Tools</button>
        </div>
    </section>

    <!-- Cards Container -->
    <section class="cards-container">
        <div class="cards-grid" id="cardsGrid">
            <!-- HTML Card -->
            <a href="/learn/html" class="tech-card" data-category="frontend" data-difficulty="beginner">
                <div class="card-icon">
                    <i class="fab fa-html5"></i>
                </div>
                <h3 class="card-title">HTML</h3>
                <p class="card-description">Master the foundation of web development with semantic markup and modern HTML5 features.</p>
                <div class="card-footer">
                    <span class="difficulty-badge difficulty-beginner">Beginner</span>
                    <div class="progress-indicator">
                        <i class="fas fa-clock"></i>
                        <span>2-3 weeks</span>
                    </div>
                </div>
            </a>

            <!-- CSS Card -->
            <a href="/learn/css" class="tech-card" data-category="frontend" data-difficulty="beginner">
                <div class="card-icon">
                    <i class="fab fa-css3-alt"></i>
                </div>
                <h3 class="card-title">CSS</h3>
                <p class="card-description">Create stunning, responsive designs with modern CSS techniques and frameworks.</p>
                <div class="card-footer">
                    <span class="difficulty-badge difficulty-beginner">Beginner</span>
                    <div class="progress-indicator">
                        <i class="fas fa-clock"></i>
                        <span>3-4 weeks</span>
                    </div>
                </div>
            </a>

            <!-- JavaScript Card -->
            <a href="/learn/js" class="tech-card" data-category="frontend" data-difficulty="intermediate">
                <div class="card-icon">
                    <i class="fab fa-js-square"></i>
                </div>
                <h3 class="card-title">JavaScript</h3>
                <p class="card-description">Build interactive web applications with the world's most popular programming language.</p>
                <div class="card-footer">
                    <span class="difficulty-badge difficulty-intermediate">Intermediate</span>
                    <div class="progress-indicator">
                        <i class="fas fa-clock"></i>
                        <span>6-8 weeks</span>
                    </div>
                </div>
            </a>

            <!-- PHP Card -->
            <a href="/learn/php" class="tech-card" data-category="backend" data-difficulty="intermediate">
                <div class="card-icon">
                    <i class="fab fa-php"></i>
                </div>
                <h3 class="card-title">PHP</h3>
                <p class="card-description">Develop powerful server-side applications with PHP's extensive ecosystem.</p>
                <div class="card-footer">
                    <span class="difficulty-badge difficulty-intermediate">Intermediate</span>
                    <div class="progress-indicator">
                        <i class="fas fa-clock"></i>
                        <span>5-7 weeks</span>
                    </div>
                </div>
            </a>

            <!-- Java Card -->
            <a href="/learn/java" class="tech-card" data-category="backend" data-difficulty="intermediate">
                <div class="card-icon">
                    <i class="fab fa-java"></i>
                </div>
                <h3 class="card-title">Java</h3>
                <p class="card-description">Enterprise-level development with object-oriented programming principles.</p>
                <div class="card-footer">
                    <span class="difficulty-badge difficulty-intermediate">Intermediate</span>
                    <div class="progress-indicator">
                        <i class="fas fa-clock"></i>
                        <span>8-10 weeks</span>
                    </div>
                </div>
            </a>

            <!-- Python Card -->
            <a href="/learn/python" class="tech-card" data-category="backend" data-difficulty="beginner">
                <div class="card-icon">
                    <i class="fab fa-python"></i>
                </div>
                <h3 class="card-title">Python</h3>
                <p class="card-description">Versatile programming for web development, data science, and artificial intelligence.</p>
                <div class="card-footer">
                    <span class="difficulty-badge difficulty-beginner">Beginner</span>
                    <div class="progress-indicator">
                        <i class="fas fa-clock"></i>
                        <span>4-6 weeks</span>
                    </div>
                </div>
            </a>

            <!-- GoLang Card -->
            <a href="/learn/golang" class="tech-card" data-category="backend" data-difficulty="advanced">
                <div class="card-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="card-title">Go</h3>
                <p class="card-description">Build scalable, high-performance applications with Google's modern language.</p>
                <div class="card-footer">
                    <span class="difficulty-badge difficulty-advanced">Advanced</span>
                    <div class="progress-indicator">
                        <i class="fas fa-clock"></i>
                        <span>6-8 weeks</span>
                    </div>
                </div>
            </a>

            <!-- SQL Card -->
            <a href="/learn/sql" class="tech-card" data-category="database" data-difficulty="beginner">
                <div class="card-icon">
                    <i class="fas fa-database"></i>
                </div>
                <h3 class="card-title">SQL</h3>
                <p class="card-description">Master database queries and data manipulation with structured query language.</p>
                <div class="card-footer">
                    <span class="difficulty-badge difficulty-beginner">Beginner</span>
                    <div class="progress-indicator">
                        <i class="fas fa-clock"></i>
                        <span>3-4 weeks</span>
                    </div>
                </div>
            </a>

            <!-- C Card -->
            <a href="/learn/c" class="tech-card" data-category="backend" data-difficulty="advanced">
                <div class="card-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="card-title">C</h3>
                <p class="card-description">Learn the fundamentals of programming with this foundational language.</p>
                <div class="card-footer">
                    <span class="difficulty-badge difficulty-advanced">Advanced</span>
                    <div class="progress-indicator">
                        <i class="fas fa-clock"></i>
                        <span>8-12 weeks</span>
                    </div>
                </div>
            </a>

            <!-- C++ Card -->
            <a href="/learn/cpp" class="tech-card" data-category="backend" data-difficulty="advanced">
                <div class="card-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="card-title">C++</h3>
                <p class="card-description">Object-oriented programming for system development and game programming.</p>
                <div class="card-footer">
                    <span class="difficulty-badge difficulty-advanced">Advanced</span>
                    <div class="progress-indicator">
                        <i class="fas fa-clock"></i>
                        <span>10-14 weeks</span>
                    </div>
                </div>
            </a>

            <!-- C# Card -->
            <a href="/learn/cs" class="tech-card" data-category="backend" data-difficulty="intermediate">
                <div class="card-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="card-title">C#</h3>
                <p class="card-description">Microsoft's powerful language for desktop, web, and mobile applications.</p>
                <div class="card-footer">
                    <span class="difficulty-badge difficulty-intermediate">Intermediate</span>
                    <div class="progress-indicator">
                        <i class="fas fa-clock"></i>
                        <span>6-8 weeks</span>
                    </div>
                </div>
            </a>

            <!-- Git Card -->
            <a href="/learn/git" class="tech-card" data-category="tools" data-difficulty="beginner">
                <div class="card-icon">
                    <i class="fab fa-git-alt"></i>
                </div>
                <h3 class="card-title">Git & GitHub</h3>
                <p class="card-description">Version control and collaboration tools essential for modern development.</p>
                <div class="card-footer">
                    <span class="difficulty-badge difficulty-beginner">Beginner</span>
                    <div class="progress-indicator">
                        <i class="fas fa-clock"></i>
                        <span>2-3 weeks</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="no-results" id="noResults" style="display: none;">
            <i class="fas fa-search"></i>
            <h3>No technologies found</h3>
            <p>Try adjusting your search or filter criteria</p>
        </div>
    </section>

    <div class="success-message" id="successMessage">
        <i class="fas fa-check-circle"></i>
        Learning path selected successfully!
    </div>

    @include('partials.footer')

    <script>
        // Search and Filter functionality
        const searchInput = document.getElementById('searchInput');
        const filterButtons = document.querySelectorAll('.filter-btn');
        const cards = document.querySelectorAll('.tech-card');
        const cardsGrid = document.getElementById('cardsGrid');
        const noResults = document.getElementById('noResults');
        const successMessage = document.getElementById('successMessage');

        let currentFilter = 'all';
        let currentSearch = '';

        // Search functionality
        searchInput.addEventListener('input', (e) => {
            currentSearch = e.target.value.toLowerCase();
            filterCards();
        });

        // Filter functionality
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active state
                filterButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                currentFilter = btn.dataset.filter;
                filterCards();
            });
        });

        // Filter cards based on search and category
        function filterCards() {
            let visibleCards = 0;
            
            cards.forEach(card => {
                const title = card.querySelector('.card-title').textContent.toLowerCase();
                const description = card.querySelector('.card-description').textContent.toLowerCase();
                const category = card.dataset.category;
                
                const matchesSearch = title.includes(currentSearch) || description.includes(currentSearch);
                const matchesFilter = currentFilter === 'all' || category === currentFilter;
                
                if (matchesSearch && matchesFilter) {
                    card.style.display = '';
                    card.style.animation = 'fadeInUp 0.5s ease-out';
                    visibleCards++;
                } else {
                    card.style.display = 'none';
                }
            });

            // Show/hide no results message
            if (visibleCards === 0) {
                noResults.style.display = 'block';
                cardsGrid.style.opacity = '0.3';
            } else {
                noResults.style.display = 'none';
                cardsGrid.style.opacity = '1';
            }
        }

        // Click feedback for cards
        cards.forEach(card => {
            card.addEventListener('click', (e) => {
                // Show success message
                successMessage.classList.add('show');
                
                // Hide after 3 seconds
                setTimeout(() => {
                    successMessage.classList.remove('show');
                }, 3000);
                
                // Add loading state
                card.classList.add('loading');
                
                // Prevent immediate navigation for demo (remove in production)
                e.preventDefault();
                
                // Navigate after brief delay (remove in production)
                setTimeout(() => {
                    window.location.href = card.href;
                }, 1000);
            });
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === '/') {
                e.preventDefault();
                searchInput.focus();
            }
            
            if (e.key === 'Escape') {
                searchInput.blur();
                searchInput.value = '';
                currentSearch = '';
                filterCards();
            }
        });

        // Progressive enhancement
        document.addEventListener('DOMContentLoaded', () => {
            // Add focus indicators for keyboard navigation
            cards.forEach((card, index) => {
                card.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        card.click();
                    }
                });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>
</html>