// assets/js/main.js

document.addEventListener('DOMContentLoaded', () => {
  // Initialize Lucide Icons
  lucide.createIcons();

  // Dark Mode Toggle
  const themeToggle = document.getElementById('theme-toggle');
  const currentTheme = localStorage.getItem('theme') || 'light';
  
  document.documentElement.setAttribute('data-theme', currentTheme);
  
  themeToggle.addEventListener('click', () => {
    let theme = document.documentElement.getAttribute('data-theme');
    let targetTheme = theme === 'light' ? 'dark' : 'light';
    
    document.documentElement.setAttribute('data-theme', targetTheme);
    localStorage.setItem('theme', targetTheme);
  });

  // Mobile Menu Toggle
  const hamburger = document.getElementById('hamburger');
  const navLinks = document.querySelector('.nav-links');
  
  if (hamburger) {
    hamburger.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  }

  // Scroll Reveal Animation
  const revealElements = document.querySelectorAll('.reveal');
  
  const revealOnScroll = () => {
    let windowHeight = window.innerHeight;
    revealElements.forEach(el => {
      let elementTop = el.getBoundingClientRect().top;
      let elementVisible = 150;
      if (elementTop < windowHeight - elementVisible) {
        el.classList.add('active');
        
        // If element is a skill bar, trigger progress animation
        if(el.classList.contains('skill-bar')) {
          const fill = el.querySelector('.progress-fill');
          if(fill) fill.style.width = fill.getAttribute('data-width');
        }
      }
    });
  };

  window.addEventListener('scroll', revealOnScroll);
  revealOnScroll(); // Trigger on load
});