 // Get the modal element
 var modal = document.getElementById('myModal');

 // Get the <span> element that closes the modal
 var closeBtn = document.getElementsByClassName('close')[0];

 // Function to show the modal
 function showModal(message) {
     document.getElementById('modal-text').innerHTML = message;
     modal.style.display = 'block';
 }

 // Function to hide the modal
 function closeModal() {
     modal.style.display = 'none';
 }

 // Close the modal when clicking on the close button
 closeBtn.onclick = closeModal;

 // Close the modal when clicking anywhere outside of it
 window.onclick = function(event) {
     if (event.target == modal) {
         closeModal();
     }
 };