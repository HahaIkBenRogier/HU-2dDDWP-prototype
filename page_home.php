<div class="grid">
 <div class="row cells2">
   <div class="cell">

     <div class="panel margin10">
         <div class="heading">
             <span class="title">Contact</span>
         </div>
         <div class="content">
           <div class="listview-outlook" data-role="listview">
             <?php for ($i=0; $i<3; $i++) { ?>
               <div class="list">
                   <div class="list-content">
                     <div class="list_meta">
                       <img src="http://placehold.it/78" data-format='cycle'>
                       <span class="list-remark margin10 no-margin-left no-margin-right">Skype</span>
                     </div>
                     <div class="list_info">
                       <span class="list-title">Bianca Averink</span>
                       <div class="list-subtitle">... morgen ... contact met Microsoft ... voorbereiden ... yadayadayada ... nog meer belangrijke worden</div>
                       <div class="split-button">
                           <button class="button">Impactanalyse.pdf invoegen</button>
                           <button class="split dropdown-toggle"></button>
                           <ul class="split-content d-menu" data-role="dropdown">
                               <li><a href="#">Toevoegen aan taken</a></li>
                               <li><a href="#">In agenda zetten</a></li>
                               <li><a href="#">Bug melden</a></li>
                               <li><a href="#">Reageren</a></li>
                           </ul>
                       </div>
                       <div class="list-remark comment contact" style="display:none;">
                         <div class="input-control textarea">
                           <textarea></textarea>
                         </div>
                         <div class="button">Verzenden</div>
                       </div>
                     </div>
                   </div>
               </div>
               <?php } ?>
           </div>
         </div>
     </div>

     <div class="panel margin10">
         <div class="heading">
             <span class="title">Issue melden</span>
         </div>
         <div class="content padding20" id="issuemelden">
           <div class="full-size">
             <label class="input-control radio">
                 <input type="radio" name="n1">
                 <span class="check"></span>
                 <span class="caption">Bug</span>
             </label>
             <label class="input-control radio">
                 <input type="radio" name="n1">
                 <span class="check"></span>
                 <span class="caption">Request for change</span>
             </label>
           </div>
           <label>Subject</label>
           <div class="input-control text full-size">
               <input type="text">
           </div>
           <label>Online Travel Agency</label>
           <div class="input-control text full-size">
               <input type="text">
           </div>
           <label>Involved Hotels</label>
           <div class="input-control text full-size">
               <input type="text">
           </div>
           <div class="input-control select full-size">
             <select>
                 <option>Non operational</option>
                 <option>Partial system failure without workaround</option>
                 <option>Partial system failure with workaround</option>
                 <option>General inquiries on system usage</option>
             </select>
           </div>
           <div class="input-control textarea">
             <textarea></textarea>
           </div>
           <div class="button">Verzenden</div>
       </div>
     </div>

     <!-- -->

   </div>
   <div class="cell">

     <div class="panel margin10">
         <div class="heading">
             <span class="title">Support inbox</span>
         </div>
         <div class="content">
           <div class="listview-outlook" data-role="listview">
             <?php for ($i=0; $i<2; $i++) { ?>
               <div class="list">
                   <div class="list-content">
                     <div class="list_meta">
                       <img src="http://placehold.it/78" data-format='cycle'>
                       <span class="list-remark margin10 no-margin-left no-margin-right">Email</span>
                     </div>
                     <div class="list_info">
                       <span class="list-title">Hotel 123</span>
                       <div class="list-subtitle">... morgen ... contact met Microsoft ... voorbereiden ... yadayadayada ... nog meer belangrijke worden</div>
                       <div class="split-button">
                           <button class="button">Impactanalyse.pdf invoegen</button>
                           <button class="split dropdown-toggle"></button>
                           <ul class="split-content d-menu" data-role="dropdown">
                               <li><a href="#">Toevoegen aan taken</a></li>
                               <li><a href="#">In agenda zetten</a></li>
                               <li><a href="#">Bug melden</a></li>
                               <li><a href="#">Reageren</a></li>
                           </ul>
                       </div>
                       <div class="list-remark comment support" style="display:none;">
                         <div class="input-control textarea">
                           <textarea></textarea>
                         </div>
                         <div class="button">Verzenden</div>
                       </div>
                     </div>
                   </div>
               </div>
               <?php } ?>
           </div>
         </div>
     </div>

     <div class="panel margin10">
         <div class="heading">
             <span class="title">Bugs & RFC's</span>
         </div>
         <div class="content padding10">
           <h4>Bugs</h4>
           <div class="listview">
               <div class="list">
                   <span class="list-icon mif-warning"></span>
                   <span class="list-title">Lalalalallaala <small class="full-size">Staat 23 dagen open</small></span>
               </div>
           </div>
           <div class="progress"
               data-value="85"
               data-color="bg-blue"
               data-role="progress"></div>


           <h4>RFCs</h4>
         </div>
     </div>

     <div class="panel margin10">
         <div class="heading">
             <span class="title">Evernote</span>
         </div>
         <div class="content">
           <img src="onenote.jpg" data-format='cycle'>
         </div>
     </div>

   </div>
 </div>
</div>
