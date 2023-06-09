<div class="text-center">

  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalRegular">Regular map modal</button>
  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalSatellite">Satellite map
    modal</button>
  <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalCustom">Custom map
    modal</button>

</div>

<!--Modal: Name-->
<div class="modal fade" id="modalRegular" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Body-->
      <div class="modal-body mb-0 p-0">

        <!--Google map-->
        <div id="map-container-google-16" class="z-depth-1-half map-container-9" style="height: 400px">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3789.2192077332643!2d73.68256422218352!3d18.245769971835845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc28fa3eb07c019%3A0xe2f323ba03aacd31!2sRajgad%20Fort!5e0!3m2!1sen!2sin!4v1679394173812!5m2!1sen!2sin" 
            frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">

        <button type="button" class="btn btn-info btn-md">Save location <i class="fas fa-map-marker-alt ml-1"></i></button>
        <button type="button" class="btn btn-outline-info btn-md" data-dismiss="modal">Close <i class="fas fa-times ml-1"></i></button>

      </div>

    </div>
    <!--/.Content-->

  </div>
</div>
<!--Modal: Name-->

<!--Modal: Name-->
<div class="modal fade" id="modalSatellite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Body-->
      <div class="modal-body mb-0 p-0">

        <!--Google map-->
        <div id="map-container-google-17" class="z-depth-1-half map-container-10" style="height: 400px">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1339.6946161274775!2d73.68258234683134!3d18.24533958370433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc28fa3eb07c019%3A0xe2f323ba03aacd31!2sRajgad%20Fort!5e0!3m2!1sen!2sin!4v1679394312943!5m2!1sen!2sin"
            frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">

        <button type="button" class="btn btn-default btn-md">Save location <i class="fas fa-map-marker-alt ml-1"></i></button>
        <button type="button" class="btn btn-outline-default btn-md" data-dismiss="modal">Close <i class="fas fa-times ml-1"></i></button>

      </div>

    </div>
    <!--/.Content-->

  </div>
</div>
<!--Modal: Name-->

<!--Modal: Name-->
<div class="modal fade" id="modalCustom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Body-->
      <div class="modal-body mb-0 p-0">

        <!--Google map-->
        <div id="map-container-google-18" class="z-depth-1-half map-container-11"  style="height: 400px">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3789.2192077332643!2d73.68256422218352!3d18.245769971835845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc28fa3eb07c019%3A0xe2f323ba03aacd31!2sRajgad%20Fort!5e0!3m2!1sen!2sin!4v1679394173812!5m2!1sen!2sin"
            frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">

        <button type="button" class="btn btn-secondary btn-md">Save location <i class="fas fa-map-marker-alt ml-1"></i></button>
        <button type="button" class="btn btn-outline-secondary btn-md" data-dismiss="modal">Close <i class="fas fa-times ml-1"></i></button>

      </div>

    </div>
    <!--/.Content-->

  </div>
</div>
<!--Modal: Name-->

<style>
.map-container-9,
.map-container-10,
.map-container-11 {
  overflow:hidden;
  padding-bottom:56.25%;
  position:relative;
  height:0;
}
.map-container-9 iframe,
.map-container-10 iframe,
.map-container-11 iframe{
  left:0;
  top:0;
  height:100%;
  width:100%;
  position:absolute;
}
</style>