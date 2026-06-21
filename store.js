const cartPanel = document.querySelector("[data-cart-panel]");
const cartItems = document.querySelector("[data-cart-items]");
const cartTotal = document.querySelector("[data-cart-total]");
const cartCount = document.querySelector("[data-cart-count]");
const toast = document.querySelector("[data-toast]");
const productCards = [...document.querySelectorAll("[data-product-card]")];
const categoryButtons = [...document.querySelectorAll("[data-category]")];
const searchInput = document.querySelector("[data-search-input]");
const searchForm = document.querySelector("[data-search-form]");
const emptyState = document.querySelector("[data-empty-state]");
const productCount = document.querySelector("[data-product-count]");

const currency = new Intl.NumberFormat("en-US", {
  style: "currency",
  currency: "USD",
});

let toastTimer;
let cart = readCart();
let activeCategory = "all";

function readCart() {
  try {
    return JSON.parse(localStorage.getItem("resonanceMarketCart")) || [];
  } catch {
    return [];
  }
}

function saveCart() {
  localStorage.setItem("resonanceMarketCart", JSON.stringify(cart));
}

function showToast(message) {
  window.clearTimeout(toastTimer);
  toast.textContent = message;
  toast.classList.add("show");
  toastTimer = window.setTimeout(() => toast.classList.remove("show"), 2300);
}

function addItem(product) {
  const existing = cart.find((item) => item.id === product.id);
  if (existing) {
    existing.quantity += 1;
  } else {
    cart.push({ ...product, quantity: 1 });
  }
  saveCart();
  renderCart();
}

function removeItem(productId) {
  cart = cart.filter((item) => item.id !== productId);
  saveCart();
  renderCart();
}

function cartSummary() {
  return cart.reduce(
    (summary, item) => {
      summary.count += item.quantity;
      summary.total += item.quantity * item.price;
      return summary;
    },
    { count: 0, total: 0 },
  );
}

function renderCart() {
  const summary = cartSummary();
  cartCount.textContent = String(summary.count);
  cartTotal.textContent = currency.format(summary.total);

  if (!cart.length) {
    const empty = document.createElement("div");
    empty.className = "empty-state";
    empty.textContent = "Your cart is empty. Add a product to begin checkout.";
    cartItems.replaceChildren(empty);
    return;
  }

  cartItems.replaceChildren(
    ...cart.map((item) => {
      const row = document.createElement("article");
      row.className = "cart-item";

      const details = document.createElement("div");
      const name = document.createElement("strong");
      name.textContent = item.name;
      const price = document.createElement("span");
      price.textContent = `${currency.format(item.price)} x ${item.quantity}`;
      details.append(name, price);

      const remove = document.createElement("button");
      remove.type = "button";
      remove.textContent = "Remove";
      remove.dataset.removeCart = item.id;

      row.append(details, remove);
      return row;
    }),
  );
}

function productFromButton(button) {
  return {
    id: button.dataset.id,
    name: button.dataset.name,
    price: Number(button.dataset.price),
  };
}

function filterProducts() {
  const query = (searchInput?.value || "").trim().toLowerCase();
  let visibleCount = 0;

  productCards.forEach((card) => {
    const categoryMatches = activeCategory === "all" || card.dataset.category === activeCategory;
    const searchMatches = !query || card.dataset.search.includes(query);
    const isVisible = categoryMatches && searchMatches;
    card.classList.toggle("hidden", !isVisible);
    if (isVisible) visibleCount += 1;
  });

  if (emptyState) {
    emptyState.classList.toggle("hidden", visibleCount !== 0);
  }
  if (productCount) {
    productCount.textContent = String(visibleCount);
  }
}

document.addEventListener("click", (event) => {
  const addButton = event.target.closest("[data-add-cart]");
  const buyButton = event.target.closest("[data-buy-now]");
  const removeButton = event.target.closest("[data-remove-cart]");
  const cartToggle = event.target.closest("[data-cart-toggle]");
  const cartClose = event.target.closest("[data-cart-close]");
  const checkout = event.target.closest("[data-checkout]");
  const categoryButton = event.target.closest("[data-category]");

  if (addButton) {
    const product = productFromButton(addButton);
    addItem(product);
    showToast(`${product.name} added to cart.`);
  }

  if (buyButton) {
    const product = productFromButton(buyButton);
    addItem(product);
    cartPanel.classList.add("open");
    showToast(`${product.name} is ready for checkout.`);
  }

  if (removeButton) {
    removeItem(removeButton.dataset.removeCart);
  }

  if (cartToggle) {
    cartPanel.classList.add("open");
  }

  if (cartClose) {
    cartPanel.classList.remove("open");
  }

  if (checkout) {
    if (!cart.length) {
      showToast("Add at least one product before checkout.");
      return;
    }
    showToast("Checkout demo ready. Connect payment and shipping in PHP next.");
  }

  if (categoryButton) {
    activeCategory = categoryButton.dataset.category;
    categoryButtons.forEach((button) => {
      button.classList.toggle("active", button === categoryButton);
    });
    filterProducts();
  }
});

if (searchForm) {
  searchForm.addEventListener("submit", (event) => {
    event.preventDefault();
    filterProducts();
    document.querySelector("#products")?.scrollIntoView({ behavior: "smooth", block: "start" });
  });
}

if (searchInput) {
  searchInput.addEventListener("input", filterProducts);
}

document.querySelectorAll(".account-card").forEach((form) => {
  form.addEventListener("submit", (event) => {
    event.preventDefault();
    const action = form.id === "signup" ? "Account creation" : "Login";
    showToast(`${action} form is ready to connect with your PHP backend.`);
  });
});

document.addEventListener("keydown", (event) => {
  if (event.key === "Escape") {
    cartPanel.classList.remove("open");
  }
});

renderCart();
filterProducts();
