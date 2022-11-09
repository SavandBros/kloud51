const email = 'amir@savandbros.com';
const annualFactor = 0.95;

function setCurrentYear() {
  const element = document.querySelector('.current-year');
  if (element) {
    element.innerHTML = String(new Date().getFullYear());
  }
}

function headerLinkActivator() {
  document.querySelector(`a[href="${location.pathname}"]`).classList.add('active');
}

function calculatorLoader(name) {
  if (location.pathname !== `/${name}`) {
    return;
  }
  const wrapper = document.querySelector('.wrapper.page > .inner');
  const element = document.createElement('div');
  element.classList.add('calculator', `calculator-${name}`);
  fetch(`/assets/includes/${name}-calculator`).then(response => response.text()).then(html => {
    element.innerHTML = html;
    wrapper.appendChild(element);
    calculatorInteraction(name);
  });
}

function pageLinker() {
  document.body.classList.add(`page-${location.pathname.replace('/', '')}`);
}

function calculatorInteraction(name) {
  const form = document.querySelector('.calculator form');
  const getData = () => {
    const output = {};
    for (let input of form.querySelectorAll('[name]')) {
      const key = input.getAttribute('name');
      const type = input.getAttribute('type');
      let value = Number(input.value);
      if (type === 'checkbox') {
        value = 0;
        if (input.checked) {
          value = 1;
        }
      }
      output[key] = value;
    }
    return output;
  };
  const update = () => {
    const data = getData();
    let total = 0;
    for (const key of Object.keys(data)) {
      const input = form.querySelector(`[name="${key}"]`);
      const price = Number(input.getAttribute('data-price'));
      const valueElement = document.querySelector(`.value-${key}`);
      if (valueElement) {
        valueElement.innerHTML = String(data[key]);
      }
      const subtotal = Number(data[key]) * price;
      document.querySelector(`.subtotal-${key}`).innerHTML = `$${subtotal.toFixed(2)}`;
      total += subtotal;
    }
    form.querySelector('.total').innerHTML = `$${total.toFixed(2)}`;
    form.querySelector('.total-annually').innerHTML = `$${(total * 12 * annualFactor).toFixed(2)}`;
  };
  update();
  form.addEventListener('input', () => {
    update();
  });
  form.addEventListener('change', () => {
    update();
  });
  form.addEventListener('submit', event => {
    event.preventDefault();
    const body = [`Order details:`, ``];
    const data = getData();
    for (const key of Object.keys(data)) {
      body.push(`${key}: ${data[key]}`);
    }
    body.push(
      `----`,
      `Total (monthly): ${form.querySelector(`.total`).innerHTML}`,
      `Total (annually): ${form.querySelector(`.total-annually`).innerHTML}`,
      ``,
      `Order notes:`,
      ``,
      `Write any notes about your order here...`,
      ``,
      ``,
    );
    window.open(`mailto:${email}?subject=Kloud51%20Order%20${name}&body=${body.join('%0D%0A')}`);
  });
}

window.addEventListener('load', () => {
  setCurrentYear();
  headerLinkActivator();
  pageLinker();
  calculatorLoader('web-hosting');
  calculatorLoader('online-shop');
});
