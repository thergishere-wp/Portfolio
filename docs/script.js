// ===== 1) Fake chat UX (UI only) =====
(function () {
    const input = document.querySelector('.chat-input input[type="text"]');
    const chatWindow = document.querySelector('.chat-window');
    const actions = document.querySelector('.chat-actions');
  
    if (!input || !chatWindow || !actions) return;
  
    // enable input now that JS is present
    input.disabled = false;
  
    // create a messages container if not present
    let messages = chatWindow.querySelector('.messages');
    if (!messages) {
      messages = document.createElement('div');
      messages.className = 'messages';
      chatWindow.innerHTML = ''; // clear placeholder
      chatWindow.appendChild(messages);
    }
  
    function addBubble(text, me = true) {
      const b = document.createElement('div');
      b.className = 'bubble ' + (me ? 'me' : 'them');
      b.textContent = text;
      messages.appendChild(b);
      messages.scrollTop = messages.scrollHeight;
    }
  
    // submit via platform buttons
    actions.addEventListener('click', (e) => {
      const btn = e.target.closest('.chat-btn');
      if (!btn) return;
      const text = input.value.trim();
      if (!text) {
        input.focus();
        return;
      }
      addBubble(text, true);
      input.value = '';
  
      // pretend to route to a platform
      const platform = btn.classList.contains('discord')
        ? 'Discord'
        : btn.classList.contains('whatsapp')
        ? 'WhatsApp'
        : btn.classList.contains('line')
        ? 'Line'
        : 'Chat';
  
      setTimeout(() => {
        addBubble(`(Pretend) Sent via ${platform}. We'll wire this up later.`, false);
      }, 400);
    });
  
    // enter key submits to the first button
    input.addEventListener('keydown', (e) => {
      if (e.key === 'Enter') {
        const firstBtn = actions.querySelector('.chat-btn');
        firstBtn?.click();
      }
    });
  })();
  
  // ===== 2) Active nav highlight on scroll =====
  (function () {
    const links = [...document.querySelectorAll('.nav-links a')];
    const sections = links
      .map(a => document.querySelector(a.getAttribute('href')))
      .filter(Boolean);
  
    if (!sections.length) return;
  
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          const id = '#' + entry.target.id;
          const link = links.find(a => a.getAttribute('href') === id);
          if (!link) return;
          if (entry.isIntersecting) {
            links.forEach(l => l.classList.remove('active'));
            link.classList.add('active');
          }
        });
      },
      { rootMargin: '-45% 0px -50% 0px', threshold: 0.01 }
    );
  
    sections.forEach(sec => observer.observe(sec));
  })();
  
  // ===== 3) Section reveal on scroll =====
  (function () {
    const revealables = document.querySelectorAll('section');
    const obs = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add('reveal-in');
          obs.unobserve(e.target);
        }
      });
    }, { threshold: 0.1 });
    revealables.forEach(el => obs.observe(el));
  })();

  /* ===== Mobile media helpers ===== */
(function(){
  // 1) Pause videos when off-screen (saves battery on phones)
  const vids = Array.from(document.querySelectorAll('video'));
  if (vids.length){
    const io = new IntersectionObserver((entries)=>{
      entries.forEach(e=>{
        const v = e.target;
        if (!e.isIntersecting && !v.paused) v.pause();
      });
    }, {threshold: 0.1});
    vids.forEach(v=> io.observe(v));
  }

  // 2) If a video fails, hide it (keep the poster image next to it)
  vids.forEach(v=>{
    v.addEventListener('error', ()=>{ v.style.display = 'none'; });
  });

  // 3) Lazy-load images for mobile perf (if not already set in HTML)
  document.querySelectorAll('img:not([loading])')
    .forEach(img => img.setAttribute('loading','lazy'));

  // 4) Improve keyboard UX: scroll input into view on focus (mobile)
  const inputs = document.querySelectorAll('input, textarea');
  inputs.forEach(el=>{
    el.addEventListener('focus', ()=>{
      setTimeout(()=> el.scrollIntoView({behavior:'smooth', block:'center'}), 100);
    });
  });
})();