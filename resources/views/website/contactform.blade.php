
        <div class="col-md-6 p-3 contact-form">
                <div  class="text-center alert d-none msgSubmitcontact" id="msgSubmitcontact">
               <div class="true-sign">
                 <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                   <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                   <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                 </svg>
               </div>
               we will contact you soon.. THANK YOU!</div>
       
              <form id="contact-msg" class="text-center" action="{{ route('contactsform.store')}}" method="POST">
                   <div class="form-group text-left">
                     <label class="text-left font-weight-bold" for="name">Your name</label>
                     <input type="text" class="form-control p-3 contact-input" id="name" name="name"  placeholder="Your Name..">
                   </div>

                   <div class="form-group text-left">
                     <label class="text-left font-weight-bold" for="email">Email</label>
                     <input type="email" class="form-control p-3 contact-input" id="email" name="email" placeholder="Enter E-mail..">
                    </div>

                   <div class="form-group text-left">
                     <label class="text-left font-weight-bold" for="message">Message</label>
                     <textarea class="form-control p-3 contact-input" id="message" name="message" rows="7" placeholder="Your Message.."></textarea>
                   </div>

                   <button type="submit" class="btn m-auto text-center">Send</button>
              </form>
               </div>
             </div>