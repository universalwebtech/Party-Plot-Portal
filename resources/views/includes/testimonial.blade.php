<section class="testimonial_contain">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="heading"> <span class="title_tag">Testimonial</span>
          <h2>OUR HAPPY   CLIENTS</h2>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="testimonial-slider" class="owl-carousel">
          @foreach ($name as $retrive)
            <div class="testimonial">
              <div class="description">
                <h5>{{ $retrive->name }}, <span>{{ $retrive->designation }}</span></h5>
                <p>{{ strip_tags($retrive->description) }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>