
window.addEventListener('DOMContentLoaded', event => {

  // Toggle the side navigation
  const sidebarToggle = document.body.querySelector('.sidebarToggle');
  if (sidebarToggle) {
      // Uncomment Below to persist sidebar toggle between refreshes
      if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
          document.body.classList.toggle('sb-sidenav-toggled');
      }
      sidebarToggle.addEventListener('click', event => {
          event.preventDefault();
          document.body.classList.toggle('sb-sidenav-toggled');
          localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
      });
  }

  const sidebarToggle2 = document.body.querySelector('.sidebarToggle2');
  if (sidebarToggle2) {
      // Uncomment Below to persist sidebar toggle between refreshes
      if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
          document.body.classList.toggle('sb-sidenav-toggled');
      }
      sidebarToggle2.addEventListener('click', event => {
          event.preventDefault();
          document.body.classList.toggle('sb-sidenav-toggled');
          localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
      });
  }

});

// $('#logout').click(() => {
//     Swal.fire({
//         title: 'Logout',
//         text: "Are you sure ?",
//         icon: 'question',
//         showCancelButton: true,
//         confirmButtonText: 'Yes'
//       }).then((result) => {
        
//       })
// });

// $('.select-two').select2( {
//   theme: 'bootstrap-5'
// });

// $('.date-range').daterangepicker();


function currentTime() {
  let date = new Date(); 
  let hh = date.getHours();
  let mm = date.getMinutes();
  let ss = date.getSeconds();

   hh = (hh < 10) ? "0" + hh : hh;
   mm = (mm < 10) ? "0" + mm : mm;
   ss = (ss < 10) ? "0" + ss : ss;
    
   let time = hh + " : " + mm + " : " + ss;

  document.getElementById("clock").innerText = time; 
  var t = setTimeout(function(){ currentTime() }, 1000); 

}

currentTime();