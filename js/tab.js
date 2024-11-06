function activateTab(selectedTab, tabContentId) {
    // Remove active class from all tabs
    document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
    // Add active class to selected tab
    selectedTab.classList.add('active');

    // Hide all tab contents
    document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
    // Show selected tab content
    document.getElementById(tabContentId).classList.add('active');
  }