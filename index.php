<?php
$categories = [
  'all' => 'All',
  'electronics' => 'Electronics',
  'clothing' => 'Clothing',
  'watches' => 'Watches',
  'stationery' => 'Stationery',
];

$products = [
  [
    'id' => 'nova-ultrabook',
    'name' => 'NovaBook Air 14',
    'category' => 'electronics',
    'audience' => 'Work and study',
    'price' => 899,
    'rating' => 4.8,
    'tag' => 'Best seller',
    'image' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=900&q=85',
    'description' => 'Slim aluminum laptop with a vivid display, fast storage, and all-day battery life.',
  ],
  [
    'id' => 'pulse-headphones',
    'name' => 'Pulse Noise-Canceling Headphones',
    'category' => 'electronics',
    'audience' => 'Travel audio',
    'price' => 189,
    'rating' => 4.7,
    'tag' => 'New',
    'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=900&q=85',
    'description' => 'Wireless over-ear headphones with deep bass, soft cushions, and smart noise control.',
  ],
  [
    'id' => 'pixel-tab',
    'name' => 'Canvas Pro Tablet',
    'category' => 'electronics',
    'audience' => 'Creative work',
    'price' => 449,
    'rating' => 4.6,
    'tag' => 'Hot deal',
    'image' => 'https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?auto=format&fit=crop&w=900&q=85',
    'description' => 'Bright touch display, pencil support, and lightweight design for notes and media.',
  ],
  [
    'id' => 'linen-blazer-women',
    'name' => 'Women\'s Tailored Linen Blazer',
    'category' => 'clothing',
    'audience' => 'Women',
    'price' => 74,
    'rating' => 4.7,
    'tag' => 'Premium',
    'image' => 'https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=900&q=85',
    'description' => 'A sharp breathable blazer that moves from office styling to evening plans.',
  ],
  [
    'id' => 'cotton-shirt-men',
    'name' => 'Men\'s Oxford Cotton Shirt',
    'category' => 'clothing',
    'audience' => 'Men',
    'price' => 42,
    'rating' => 4.5,
    'tag' => 'Classic',
    'image' => 'https://images.unsplash.com/photo-1617137968427-85924c800a22?auto=format&fit=crop&w=900&q=85',
    'description' => 'Crisp everyday shirt with a tailored fit, durable stitching, and soft cotton feel.',
  ],
  [
    'id' => 'streetwear-hoodie',
    'name' => 'Unisex Cloud Fleece Hoodie',
    'category' => 'clothing',
    'audience' => 'Men and women',
    'price' => 58,
    'rating' => 4.8,
    'tag' => 'Comfort pick',
    'image' => 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?auto=format&fit=crop&w=900&q=85',
    'description' => 'Dense fleece hoodie with a relaxed cut, polished finish, and warm brushed lining.',
  ],
  [
    'id' => 'chrono-men',
    'name' => 'Men\'s Chronograph Steel Watch',
    'category' => 'watches',
    'audience' => 'Men',
    'price' => 165,
    'rating' => 4.6,
    'tag' => 'Luxury look',
    'image' => 'https://images.unsplash.com/photo-1524592094714-0f0654e20314?auto=format&fit=crop&w=900&q=85',
    'description' => 'Brushed stainless steel case, sapphire-style glass, and precise chronograph detail.',
  ],
  [
    'id' => 'rose-watch-women',
    'name' => 'Women\'s Rose Gold Minimal Watch',
    'category' => 'watches',
    'audience' => 'Women',
    'price' => 132,
    'rating' => 4.7,
    'tag' => 'Elegant',
    'image' => 'https://images.unsplash.com/photo-1548169874-53e85f753f1e?auto=format&fit=crop&w=900&q=85',
    'description' => 'A slim rose gold watch with a clean dial, mesh strap, and refined everyday profile.',
  ],
  [
    'id' => 'smart-watch',
    'name' => 'ActiveFit Smart Watch',
    'category' => 'watches',
    'audience' => 'Men and women',
    'price' => 219,
    'rating' => 4.8,
    'tag' => 'Fitness ready',
    'image' => 'https://images.unsplash.com/photo-1434493789847-2f02dc6ca35d?auto=format&fit=crop&w=900&q=85',
    'description' => 'Health tracking, calls, GPS workouts, and a bright always-on display.',
  ],
  [
    'id' => 'journal-set',
    'name' => 'Executive Journal Set',
    'category' => 'stationery',
    'audience' => 'Office',
    'price' => 28,
    'rating' => 4.6,
    'tag' => 'Giftable',
    'image' => 'https://images.unsplash.com/photo-1517842645767-c639042777db?auto=format&fit=crop&w=900&q=85',
    'description' => 'Hardbound dotted journal with premium paper, bookmark ribbon, and matching pen.',
  ],
  [
    'id' => 'desk-organizer',
    'name' => 'Modular Desk Organizer',
    'category' => 'stationery',
    'audience' => 'Desk setup',
    'price' => 35,
    'rating' => 4.5,
    'tag' => 'Organized',
    'image' => 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=900&q=85',
    'description' => 'Stackable compartments for pens, sticky notes, cards, clips, and daily essentials.',
  ],
  [
    'id' => 'artist-kit',
    'name' => 'Studio Artist Stationery Kit',
    'category' => 'stationery',
    'audience' => 'Creative',
    'price' => 46,
    'rating' => 4.9,
    'tag' => 'Top rated',
    'image' => 'https://images.unsplash.com/photo-1452860606245-08befc0ff44b?auto=format&fit=crop&w=900&q=85',
    'description' => 'Sketch pencils, fine liners, color markers, erasers, ruler, and premium drawing pad.',
  ],
];

$activeCategory = strtolower($_GET['category'] ?? 'all');
$query = trim($_GET['q'] ?? '');
if (!array_key_exists($activeCategory, $categories)) {
  $activeCategory = 'all';
}

$filteredProducts = array_values(array_filter($products, function ($product) use ($activeCategory, $query) {
  $categoryMatch = $activeCategory === 'all' || $product['category'] === $activeCategory;
  if (!$categoryMatch) {
    return false;
  }

  if ($query === '') {
    return true;
  }

  $haystack = strtolower(implode(' ', [
    $product['name'],
    $product['category'],
    $product['audience'],
    $product['tag'],
    $product['description'],
  ]));

  return strpos($haystack, strtolower($query)) !== false;
}));

function money($amount) {
  return '$' . number_format($amount, 2);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resonance Market</title>
    <link rel="stylesheet" href="store.css">
  </head>
  <body>
    <header class="site-header">
      <a class="brand" href="index.php" aria-label="Resonance Market home">
        <span class="brand-mark">R</span>
        <span>Resonance Market</span>
      </a>

      <form class="search-form" method="get" action="index.php">
        <input type="hidden" name="category" value="<?php echo htmlspecialchars($activeCategory); ?>">
        <label>
          <span>Search products</span>
          <input
            name="q"
            type="search"
            value="<?php echo htmlspecialchars($query); ?>"
            placeholder="Search electronics, clothing, watches, stationery"
            autocomplete="off"
          >
        </label>
        <button type="submit">Search</button>
      </form>

      <nav class="account-nav" aria-label="Account and cart">
        <a href="#login">Login</a>
        <a href="#signup">Sign up</a>
        <button class="cart-button" type="button" data-cart-toggle>
          Cart <span data-cart-count>0</span>
        </button>
      </nav>
    </header>

    <main>
      <section class="hero">
        <div class="hero-media">
          <img src="https://images.unsplash.com/photo-1607082349566-187342175e2f?auto=format&fit=crop&w=1600&q=88" alt="Premium shopping bags and products on a clean retail counter">
        </div>
        <div class="hero-copy">
          <p>Curated online shopping</p>
          <h1>Premium products for work, style, gifting, and everyday life.</h1>
          <div class="hero-actions">
            <a href="#products">Shop products</a>
            <a href="#account">Create account</a>
          </div>
        </div>
      </section>

      <section class="category-strip" aria-label="Product categories">
        <?php foreach ($categories as $key => $label): ?>
          <?php
            $params = ['category' => $key];
            if ($query !== '') {
              $params['q'] = $query;
            }
          ?>
          <a class="<?php echo $activeCategory === $key ? 'active' : ''; ?>" href="index.php?<?php echo http_build_query($params); ?>">
            <?php echo htmlspecialchars($label); ?>
          </a>
        <?php endforeach; ?>
      </section>

      <section class="section-head" id="products">
        <div>
          <p>Featured collection</p>
          <h2><?php echo count($filteredProducts); ?> products ready to shop</h2>
        </div>
        <span>Electronics, clothing, watches, and stationery for men and women</span>
      </section>

      <section class="product-grid" aria-label="Products">
        <?php if (count($filteredProducts) === 0): ?>
          <div class="empty-state">
            No products matched that search. Try another keyword or browse all categories.
          </div>
        <?php endif; ?>

        <?php foreach ($filteredProducts as $product): ?>
          <article class="product-card" data-product-card data-category="<?php echo htmlspecialchars($product['category']); ?>">
            <div class="product-image">
              <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
              <span><?php echo htmlspecialchars($product['tag']); ?></span>
            </div>
            <div class="product-body">
              <div class="product-meta">
                <span><?php echo htmlspecialchars($categories[$product['category']]); ?></span>
                <span><?php echo htmlspecialchars($product['audience']); ?></span>
              </div>
              <h3><?php echo htmlspecialchars($product['name']); ?></h3>
              <p><?php echo htmlspecialchars($product['description']); ?></p>
              <div class="rating-row">
                <strong><?php echo money($product['price']); ?></strong>
                <span><?php echo htmlspecialchars($product['rating']); ?> / 5</span>
              </div>
              <div class="product-actions">
                <button
                  type="button"
                  data-buy-now
                  data-id="<?php echo htmlspecialchars($product['id']); ?>"
                  data-name="<?php echo htmlspecialchars($product['name']); ?>"
                  data-price="<?php echo htmlspecialchars($product['price']); ?>"
                >
                  Buy now
                </button>
                <button
                  type="button"
                  data-add-cart
                  data-id="<?php echo htmlspecialchars($product['id']); ?>"
                  data-name="<?php echo htmlspecialchars($product['name']); ?>"
                  data-price="<?php echo htmlspecialchars($product['price']); ?>"
                >
                  Add to cart
                </button>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
      </section>

      <section class="account-section" id="account">
        <form class="account-card" id="login">
          <p>Welcome back</p>
          <h2>Login</h2>
          <label>
            <span>Email address</span>
            <input type="email" placeholder="you@example.com" required>
          </label>
          <label>
            <span>Password</span>
            <input type="password" placeholder="Enter password" required>
          </label>
          <button type="submit">Login</button>
        </form>

        <form class="account-card" id="signup">
          <p>New customer</p>
          <h2>Create account</h2>
          <label>
            <span>Full name</span>
            <input type="text" placeholder="Your name" required>
          </label>
          <label>
            <span>Email address</span>
            <input type="email" placeholder="you@example.com" required>
          </label>
          <label>
            <span>Password</span>
            <input type="password" placeholder="Create password" required>
          </label>
          <button type="submit">Sign up</button>
        </form>
      </section>
    </main>

    <aside class="cart-panel" data-cart-panel aria-label="Shopping cart">
      <div class="cart-head">
        <div>
          <p>Your bag</p>
          <h2>Shopping cart</h2>
        </div>
        <button type="button" data-cart-close aria-label="Close cart">Close</button>
      </div>
      <div class="cart-items" data-cart-items></div>
      <div class="cart-total">
        <span>Total</span>
        <strong data-cart-total>$0.00</strong>
      </div>
      <button class="checkout-button" type="button" data-checkout>Checkout</button>
    </aside>

    <div class="toast" data-toast role="status" aria-live="polite"></div>
    <script src="store.js"></script>
  </body>
</html>
