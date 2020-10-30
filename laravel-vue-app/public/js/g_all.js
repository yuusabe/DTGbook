   function Name(){
      for (var i = 0; i < $g_all_name.length; i++){
         target = document.getElementById('name');
         target.innerHTML = 'aa';
      }
   }
   function ale(){
      alert('アラート');
   }
const butt = document.getElementById('button');
 
butt.addEventListener('click', function() {
 
   console.log('クリックされました');
 
});