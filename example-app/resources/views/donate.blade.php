@extends('layout')

@section('title', 'donate')

@section('content')
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>

<img
      style="width: 100%; height: 570px; object-fit: cover; margin-top: -2%;"
      src="assets/tree-grows-coin-glass-jar-with-copy-space.jpg"
      alt=""
    />


    <!-- Main  -->

    <section>
      <div>
        <div class="container text-center">
          <div class="bread-crumb bo5-b p-t-17 p-b-17">
            <h3
              class="tit7 t-center p-b-10 p-t-10"
              style="font-size: 5rem; font-weight: 700"
            >
              Donate
            </h3>
            <hr />
          </div>
          <div class="row">
            <!-- First Section -->
            <div class="col-md-6 mx-auto">
              <form
                id="donateForm"
                class="wrap-form-reservation size22"
                method="POST"
                action="https://www.saytrees.org/submitDonate"
                novalidate="novalidate"
              >
                <!-- Name and Email on the same row -->
                <div class="row">
                  <div class="col-md-6">
                    <span class="txt9">Name:</span>
                    <div
                      class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23"
                    >
                      <input
                        class="bo-rad-10 sizefull txt10 p-l-20"
                        placeholder="First Name"
                        type="text"
                        name="name"
                        value=""
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <span class="txt9">Email:</span>
                    <div
                      class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23"
                    >
                      <input
                        class="bo-rad-10 sizefull txt10 p-l-20"
                        type="text"
                        name="email"
                        placeholder="Email"
                        value=""
                        required=""
                      />
                    </div>
                  </div>
                </div>
                <!-- Your Contribution and Phone on the same row -->
                <div class="row">
                  <div class="col-md-6">
                    <span class="txt9">Your Contribution:</span>
                    <div
                      class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23"
                    >
                      <input
                        id="amt"
                        class="bo-rad-10 sizefull txt10 p-l-20 only_digit"
                        type="text"
                        name="amount"
                        placeholder="Amount"
                        value=""
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <span class="txt9">Phone:</span>
                    <div
                      class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23"
                    >
                      <input
                        class="bo-rad-10 sizefull txt10 p-l-20 only_digit"
                        type="text"
                        maxlength="11"
                        minlength="10"
                        name="phone"
                        placeholder="Phone"
                        value=""
                        required=""
                      />
                    </div>
                  </div>
                </div>
                <!-- Center-aligned Pan Card Number -->
                <div class="row">
                  <div class="col-md-12 text-center">
                    <span class="txt9">Pan Card Number:</span>
                    <div
                      class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23"
                      style="margin-bottom: 35px"
                    >
                      <input
                        id="pancard"
                        class="bo-rad-10 sizefull txt10 p-l-20"
                        type="text"
                        name="pancard"
                        placeholder="Pancard"
                        value=""
                        style="cursor: pointer"
                        required=""
                      />
                      <span
                        class="form-text text-danger pancard-err"
                        style="font-weight: bold; font-size: 1.2rem"
                        ><i class="icon-cancel-circle2 mr-2"></i
                      ></span>
                    </div>
                  </div>
                </div>
                <!-- Checkbox and Submit Button -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="wrap-inputname size12 m-t-3 m-b-23 d-flex">
                      <input
                        id="termCondition"
                        class="bo-rad-10 txt10 p-l-20"
                        type="checkbox"
                        name="termCondition"
                        value="1"
                        style="width: 10%; height: 50%"
                      />
                      <span
                        class="form-text text-danger m-0"
                        style="font-weight: bold; font-size: 1rem"
                        ><i class="icon-cancel-circle2 mr-2"></i> I have agreed
                        to the
                        <a
                          href="https://www.saytrees.org/privacyPolicy"
                          target="_blank"
                          ><b><u>Privacy &amp; Policy</u></b></a
                        ></span
                      >
                    </div>
                  </div>
                </div>
                <input type="hidden" name="razor_pay_id" id="razor_pay_id" />
                <div class="wrap-btn-booking flex-c-m m-t-13">
                  <!-- Button3 -->
                  <button
                    id="submitbutondonation"
                    type="submit"
                    class="btn3 flex-c-m size36 txt11 trans-0-4"
                    style="display: none"
                  >
                    Submit
                  </button>
                </div>
                <div class="wrap-btn-booking flex-c-m m-t-13"></div>
              </form>
              
            </div>
      
            <div class="col-md-6 mx-auto" style="margin-top: 3%;">
              <div class="p-b-124 p-t-50">
                <strong>You can also send your funds to the following account numbers:</strong>
                <ul style="list-style: none; text-align: left; margin-left: 10%;">
                  <li><strong>Bank: </strong> Habib Bank Limited (PK098291921919) </li>
                  <li><strong>Bank: </strong> Allied Bank Limited (PK098291921919)</li>
                  <li><strong>Bank: </strong> Askari Bank Limited (PK098291921919)</li>
                  <li><strong>Bank: </strong> Meezan Bank Limited (PK098291921919)</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection