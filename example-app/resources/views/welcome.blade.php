@extends('layout')

@section('title', 'Home')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<div id="carouselExampleCaptions" class="carousel slide" style="margin-top: -0.9%;">
      <div class="carousel-indicators" >
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner" >
        <div class="carousel-item active" style="margin-top: -1%;">
          <img
            style="height: 80vh; object-fit: cover"
            src="assets/Slider 3.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h2 style="color: aliceblue;">Welcome to Cyberhamza's Plantation Initiative</h2>
            <p>Taking Pakistan To New Heights by Lush Green Plantation </p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            style="height: 80vh; object-fit: cover"
            src="assets/Slider 2.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h2 style="color: aliceblue;">Welcome to Cyberhamza's Plantation Initiative</h2>
            <p>Taking Pakistan To New Heights by Lush Green Plantation</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            style="height: 80vh; object-fit: cover"
            src="assets/BK4.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h2 style="color: aliceblue;">Welcome to Cyberhamza's Plantation Initiative</h2>
            <p>Taking Pakistan To New Heights by Lush Green Plantation</p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <section
      style="
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        padding: 100px;
      "
    >
      <div style="flex: 2; display: flex; flex-direction: column">
        <h2 style="font-size: 50px">
          Reforesting Pakistan: A Pivotal Mission to Counter Environmental Challenges and Nurture a Greener Tomorrow
        </h2>
        <p>
          Reforesting Pakistan is an indispensable endeavor, combating deforestation, climate change, and habitat loss while promoting biodiversity conservation, enhanced livelihoods, and climate resilience. Trees serve as natural sentinels, mitigating air pollution, sequestering carbon dioxide, and providing habitats for wildlife. By planting more trees, we can foster a healthier environment, safeguard endangered species, and address the adverse effects of climate change. Engaging local communities and fostering collaboration between government agencies and NGOs are crucial for the success of this mission. Through collective efforts, Pakistan can pave the way for a greener, more sustainable future.
        </p>
      </div>

      <div
        style="
          flex: 1;
          display: flex;
          align-items: center;
          justify-content: center;
        "
      >
        <img
          style="width: 70vb; height: 60vh; object-fit: cover; margin-left: 10%;"
          src="assets/Front Pic.jpg"
          alt=""
        />
      </div>
    </section>
    <div
      style="
        display: flex;
        align-items: center;
        justify-content: space-around;
        padding: 40px;
        flex-wrap: wrap;
      "
    >
      <div
        class="div"
        style="
          transition: all 0.2s ease;
          display: flex;
          flex-direction: column;
          border: 1px solid lightgray;
          border-radius: 14px;
          overflow: hidden;
          cursor: pointer;
          margin-bottom: 10px;
        "
      >
        <img
          style="width: 300px; height: 500px; object-fit: cover"
          src="assets/waterfall-nature-thailand.jpg"
          alt=""
        />
        <div>
          <p style="padding: 4px; text-align: center;">Attracting Tourists</p>
        </div>
      </div>
      <div
        class="div"
        style="
          transition: all 0.2s ease;
          display: flex;
          flex-direction: column;
          border: 1px solid lightgray;
          border-radius: 14px;
          overflow: hidden;
          margin-bottom: 10px;
        "
      >
        <img
          style="width: 300px; height: 500px; object-fit: cover"
          src="assets/Volunteer Tree Planting.jpg"
          alt=""
        />
        <div>
          <p style="padding: 4px; text-align: center;">Enthusiasm & Vision</p>
        </div>
      </div>
      <div
        class="div"
        style="
          transition: all 0.2s ease;
          display: flex;
          flex-direction: column;
          border: 1px solid lightgray;
          border-radius: 14px;
          overflow: hidden;
          margin-bottom: 10px;
        "
      >
        <img
          style="width: 300px; height: 500px; object-fit: cover"
          src="assets/earth-day-campaign-hand-showing-tree-bubble-media-mix.jpg"
          alt=""
        />
        <div>
          <p style="padding: 4px; text-align: center;">Purifying Environment</p>
        </div>
      </div>
    </div>

    <div
      style="
        background-image: url(assets/Slider\ 1.jpg);
        min-height: 400px;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      "
    ></div>

    <div
      style="
        display: flex;
        flex-direction: column;
        padding: 70px;
        gap: 20px;
        align-items: center;
        justify-content: center;
        background-color: aliceblue;
      "
    >
      <h1>Objectives</h1>
      <ol style="text-align: left;">
      <li>
        To promote environmental awareness and education among communities across Pakistan, fostering a culture of conservation.
      </li>
      <li>
        To establish sustainable urban green spaces in major cities, enhancing the quality of life for urban residents.
      </li>
      <li>
        To collaborate with government agencies to enact and enforce policies that protect natural ecosystems and promote responsible land use.
      </li>
      <li>
        To plant millions of native trees annually, significantly increasing Pakistan's forest cover and enhancing its biodiversity.
      </li>
    </ol>
    </div>
@endsection
