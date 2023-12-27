@extends('layout')

@section('title', 'conatct')

@section('content')
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>
<link rel="stylesheet" href="css/styles.css">


<section class="contact-home" style=" background-image: url(assets/contact\ pg\ bg\ .jpg); height: 90vh; color: aliceblue !important; margin: 0;">
      

        <div class="front-text">
          <h1>WANT TO KNOW MORE ?</h1>
        </div>
      
    </section>

<section>
      <div class="form" style="background-color: aliceblue">
        <br /><br />
        <h1>WRITE TO US AND WE SHALL GET BACK TO YOU</h1>
        <br />

        <br />
        <form
          action="mailto:cyberhamza.817@gmail.com"
          method="post"
          enctype="text/plain"
        >
          <div class="form_elements">
            <div class="form-row">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required />
            </div>

            <div class="form-row">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required />
            </div>

            <div class="form-row">
              <label for="phone">Phone Number:</label>
              <input type="tel" id="phone" name="phone" />
            </div>
          </div>
          <div class="message_div">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <br />
            <input type="submit" value="Submit" />
          </div>
        </form>
      </div>
    </section>

@endsection