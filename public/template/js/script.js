const sidebarToggle = document.querySelector("#sidebar-toggle");
sidebarToggle.addEventListener("click",function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
});



    // Function to activate menu based on current URL
    function activateMenu() {
        // Ambil URL saat ini
        var currentUrl = window.location.href;

        // Ambil semua elemen menu
        var menuItems = document.querySelectorAll('.sidebar-item a');

        // Loop melalui semua elemen menu
        menuItems.forEach(function(menuItem) {
            // Periksa apakah URL saat ini cocok dengan URL di atribut href menu
            if (menuItem.getAttribute('href') === currentUrl) {
                // Jika cocok, tambahkan kelas "activated"
                menuItem.classList.add('activated');
            }
        });
    }

    // Panggil fungsi activateMenu saat halaman dimuat
    window.onload = function() {
        activateMenu();
    };


    $("#example1").DataTable({
        "responsive": true,
         "lengthChange": true,
          "autoWidth": false,
        "paging": true,
        "info": true,
        "ordering": false,
  
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    
  
