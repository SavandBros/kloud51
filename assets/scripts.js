function headerLinkActivator() {
  document.querySelector(`a[href="${location.pathname}"]`).classList.add("active");
}

function calculatorLoader(name) {
  if (location.pathname !== `/${name}`) {
    return;
  }
  const wrapper = document.querySelector(".wrapper.page > .inner");
  const element = document.createElement("div");
  element.classList.add("calculator", `calculator-${name}`);
  fetch(`/assets/includes/${name}-calculator`).then(response => response.text()).then(html => {
    element.innerHTML = html;
    wrapper.appendChild(element);
    calculatorInteraction(name);
  });
}

function pageLinker() {
  document.body.classList.add(`page-${location.pathname.replace("/", "")}`)
}

function calculatorInteraction(name) {
  const form = document.querySelector(".calculator form");
  const getData = () => {
    return Object.fromEntries(new FormData(form).entries());
  }
  const update = () => {
    const data = getData();
    let total = 0;
    for (const key of Object.keys(data)) {
      const price = Number(form.querySelector(`[name="${key}"]`).getAttribute("data-price"));
      document.querySelector(`.value-${key}`).innerHTML = String(data[key]);
      const subtotal = Number(data[key]) * price;
      document.querySelector(`.subtotal-${key}`).innerHTML = `$${subtotal.toFixed(2)}`;
      total += subtotal;
    }
    form.querySelector(".total").innerHTML = `$${total.toFixed(2)}`;
    form.querySelector(".total-annually").innerHTML = `$${(total * 12 * 0.9).toFixed(2)}`;
  }
  update();
  form.addEventListener("change", () => {
    update();
  });
  form.addEventListener("submit", event => {
    event.preventDefault();
    const body = [`Order details:`, ``];
    const data = getData();
    for (const key of Object.keys(data)) {
      body.push(`No. ${key}: ${data[key]}`);
    }
    body.push(`----`);
    body.push(`Total (monthly): ${form.querySelector(`.total`).innerHTML}`);
    body.push(`Total (annually): ${form.querySelector(`.total-annually`).innerHTML}`);
    body.push(``);
    body.push(`Order notes:`);
    body.push(``);
    body.push(`Write any notes about your order here...`);
    body.push(``);
    body.push(``);
    window.open(`mailto:amir@savandbros.com?subject=Kloud51%20Order%20${name}&body=${body.join("%0D%0A")}`);
  })
}

window.addEventListener("load", () => {
  headerLinkActivator();
  pageLinker();
  calculatorLoader("web-hosting");
  calculatorLoader("online-shop");
});
