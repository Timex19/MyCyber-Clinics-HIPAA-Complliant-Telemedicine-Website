(() => {
  const toggles = document.querySelectorAll('.faq-toggle');

  toggles.forEach((btn) => {
    btn.addEventListener('click', () => {
      const content = btn.parentElement?.querySelector('.faq-content');
      if (!content) return;

      const expanded = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', expanded ? 'false' : 'true');
      content.classList.toggle('hidden', expanded);
      const symbol = btn.querySelector('span:last-child');
      if (symbol) symbol.textContent = expanded ? '+' : '−';
    });
  });
})();
