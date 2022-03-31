

   <div class="d-flex justify-content-evenly w-100 mb-4 mt-4">
      <div class="border border-2 p-4 rounded-3 " >
      <?php 
      // si les commentaires sont acceptés
        if (comments_open()) : 

         //afficher le formulaire de comentaire
            echo comment_form();

            else :
                // sinon afficher un message 
                echo "<p>". __('Comments are closed here.', 'steroids')."</p>";
        endif;?>
      </div>
      <!-- afficher la liste des commentaire -->  
      <div class="bg-secondary p-3 ">
         <?php  wp_list_comments();?> 
      </div>
   </div>