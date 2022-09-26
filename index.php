<!DOCTYPE html>
<html lang="en">
  <head>
    <title>1.Obtain a user</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <div class="">Enter an ID(2) to display a user</div>
    <form action="" method="GET">
      <input name="data" type="text" require>
      <button type="submit" value="submit" class="hato">Submit</button>
    </form>
    <br><br> 
    <div class="result"></div>
    <script>
      const result = document.querySelector('.result');

      fetch('users.json').then(response => {
        return response.json();
      }).then(UserData => {
        var Data = UserData.data;

        <?php if(!empty($_GET['data'])){  ?>
            if (<?php echo $_GET['data'] ?> == 2){
                result.innerHTML = `<p>${Data.id}</p><p>${Data.email}</p><p>${Data.first_name}</p><p>${Data.last_name}</p><img src="${Data.avatar}">`;
            } else {
                result.innerHTML = `<p>User does not exist.<p>`;  
            }  
        <?php } else { ?>
            result.innerHTML = `<p>Please enter a value.<p>`;  
        <?php } ?>
        console.log(Data);
      }).catch(error => {
        console.log(error);
      });
    </script>
  </body>
</html>
