//function for add user
$(document).ready(function(){
    $("#add-user").click(function()
    {$("#overlay").css({"display": "flex"})});
});


//function for close button
$(document).ready(function(){
    $("#close").click(function()
    {$("#overlay").css({"display": "hidden"})});
});

//function for update user
$(document).ready(function(){
    $("#update").click(function()
    {$("#overlay1").css({"display": "flex"})});
});


//function for this
$(document).on('submit','#add-btn', function(){
    
 $("form").submit(function(event){
  event.preventDefault();

  var name = document.getElementById('name').value
  var address = document.getElementById('address').value
  var number = document.getElementById('number').value
  var email = document.getElementById('email').value

  $.post("db-config/actions.php", {name: name, address: address, number: number, email: email}, function(data){
      console.log(data)
  })
 })
});


////function for confirmation
