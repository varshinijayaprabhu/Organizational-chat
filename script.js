// Developer info modal functionality
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('dev-modal');
    const devButton = document.getElementById('dev-info-button');
    const closeButton = document.querySelector('.close-button');
    
    // Sign In/Sign Up toggle functionality
    const signInContainer = document.getElementById('signIn');
    const signUpContainer = document.getElementById('signup');
    const signInButton = document.getElementById('signInButton');
    const signUpButton = document.getElementById('signUpButton');
    
    // Toggle between Sign In and Sign Up forms
    signInButton.addEventListener('click', function() {
      signUpContainer.style.display = 'none';
      signInContainer.style.display = 'block';
    });
    
    signUpButton.addEventListener('click', function() {
      signInContainer.style.display = 'none';
      signUpContainer.style.display = 'block';
    });
    
    // Open modal when developer button is clicked
    devButton.addEventListener('click', function() {
      modal.style.display = 'block';
      document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
    });
    
    // Close modal when close button is clicked
    closeButton.addEventListener('click', function() {
      modal.style.display = 'none';
      document.body.style.overflow = 'auto'; // Re-enable scrolling
    });
    
    // Close modal when clicking outside of modal content
    window.addEventListener('click', function(event) {
      if (event.target === modal) {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto'; // Re-enable scrolling
      }
    });
    
    // Close modal with Escape key
    document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape' && modal.style.display === 'block') {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto'; // Re-enable scrolling
      }
    });
    
    // Password validation (if needed)
    const passwordInput = document.querySelectorAll('input[type="password"]');
    const passwordHelp = document.getElementById('passwordHelp');
    
    if (passwordInput.length > 0 && passwordHelp) {
      passwordInput[0].addEventListener('input', function() {
        const password = this.value;
        
        if (password.length < 8) {
          passwordHelp.textContent = 'Password must be at least 8 characters long.';
        } else if (!/[A-Z]/.test(password)) {
          passwordHelp.textContent = 'Password must contain at least one uppercase letter.';
        } else if (!/[0-9]/.test(password)) {
          passwordHelp.textContent = 'Password must contain at least one number.';
        } else if (!/[^A-Za-z0-9]/.test(password)) {
          passwordHelp.textContent = 'Password must contain at least one special character.';
        } else {
          passwordHelp.textContent = '';
        }
      });
    }
  });
  function toggleTab(tabId) {
    var tabs = document.getElementById('scheduleTabs').getElementsByClassName('tab-section');
    for (var i = 0; i < tabs.length; i++) {
        tabs[i].style.display = 'none';
    }
    document.getElementById(tabId).style.display = 'block';

    // Hide "Add Content" button if "Edit Content" or "View Content" tab is clicked
    if (tabId === 'editSchedule' || tabId === 'viewSchedule') {
        document.getElementById('addContentButton').style.display = 'none';
    } else {
        document.getElementById('addContentButton').style.display = 'block';
    }
}

// Function to toggle tabs for the achievements section
function toggleTab(tabId) {
    var tabs = document.getElementById('achievementTabs').getElementsByClassName('tab-section');
    for (var i = 0; i < tabs.length; i++) {
        tabs[i].style.display = 'none';
    }
    document.getElementById(tabId).style.display = 'block';

    // Hide "Add Achievement" button if "Edit Achievement" or "Delete Achievement" tab is clicked
    if (tabId === 'editAchievement' || tabId === 'deleteAchievement') {
        document.getElementById('addAchievementButton').style.display = 'none';
    } else {
        document.getElementById('addAchievementButton').style.display = 'block';
    }
}