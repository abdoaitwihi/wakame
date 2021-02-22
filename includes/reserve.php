<section id="book-a-table" class="book-a-table">
            <div class="container">
               <div class="section-title">
                  <h2>Book a <span>Table</span></h2>
                  <p>
                     Ut possimus qui ut temporibus culpa velit eveniet modi
                     omnis est adipisci expedita at voluptas atque vitae autem.
                  </p>
               </div>

               <form class="my-form">
                  <div class="form-row">
                     <div class="col-lg-4 col-md-6 form-group">
                        <input
                           type="text"
                           name="name"
                           class="form-control"
                           id="reserveName"
                           placeholder="اسمك"
                        />
                     </div>
                     <div class="col-lg-4 col-md-6 form-group">
                        <input
                           type="email"
                           class="form-control"
                           name="email"
                           id="reserveEmail"
                           placeholder="بريدك الالكتروني"
                        />
                     </div>
                     <div class="col-lg-4 col-md-6 form-group">
                        <input
                           type="text"
                           class="form-control"
                           name="phone"
                           id="reservePhone"
                           placeholder="هاتفك"
                        />
                     </div>
                     <div class="col-lg-4 col-md-6 form-group">
                        <input
                           type="text"
                           name="date"
                           class="form-control"
                           id="reserveDate"
                           placeholder="تاريخ"
                        />
                     </div>
                     <div class="col-lg-4 col-md-6 form-group">
                        <input
                           type="text"
                           class="form-control"
                           name="time"
                           id="reserveTime"
                           placeholder="الوقت"
                        />
                     </div>
                     <div class="col-lg-4 col-md-6 form-group">
                        <input
                           type="number"
                           class="form-control"
                           name="people"
                           id="reservePeople"
                           placeholder="عدد الأشخاص"
                        />
                     </div>
                  </div>
                  <div class="form-group">
                     <textarea
                        class="form-control"
                        name="reserveMessage"
                        rows="5"
                        placeholder="رسالة"
                     ></textarea>
                  </div>
                  <div class="mb-3">
                     <div class="error-message d-none"></div>
                     <div class="sent-message d-none">
                        Your booking request was sent. We will call back or send
                        an Email to confirm your reservation. Thank you!
                     </div>
                  </div>
                  <div class="text-center">
                     <button type="button" id="reserveEnvoyer">
                        Send Message
                     </button>
                  </div>
               </form>
            </div>
         </section>